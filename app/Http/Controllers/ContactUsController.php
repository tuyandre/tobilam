<?php

namespace App\Http\Controllers;

use App\Models\ContactUs;
use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    public function index()
    {
        $contact_us = ContactUs::all();
        return view('backend.contact_us', compact('contact_us'));
//        return view('backend.contact_us_test');
    }

    public function show($id)
    {
        $contact_us = ContactUs::find($id);
        $contact_us->is_read = true;
        $contact_us->save();

        return view('backend.contact_us_show', compact('contact_us'));
    }

    public function reply(Request $request, $id)
    {
        $contact_us = ContactUs::find($id);
        $contact_us->is_replied = true;
        $contact_us->replied_by = auth()->user()->id;
        $contact_us->save();

        return redirect()->route('contact_us.index')->with('success', 'Reply sent successfully.');
    }

    public function destroy($id)
    {
        $contact_us = ContactUs::find($id);
      if ($contact_us) {
        $contact_us->delete();
        return redirect()->route('contact_us.index')->with('success', 'Contact us deleted successfully.');
      } else {
        return redirect()->back()->with('error', 'Contact us not found.');
      }
    }

    public function destroyAll()
    {
        ContactUs::truncate();

        return redirect()->route('contact_us.index')->with('success', 'All contact us deleted successfully.');
    }

    public function markAllAsRead()
    {
        ContactUs::where('is_read', false)->update(['is_read' => true]);

        return redirect()->route('contact_us.index')->with('success', 'All contact us marked as read successfully.');
    }

    //save contact us form data
    public function saveContactUs(Request $request)
    {
        \Log::info('Contact us form data: ' . json_encode($request->all()));
        $request->validate([
            'full_name' => 'required',
            'telephone' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'reason' => 'required|array',
            'message' => 'required',
        ]);

        $selected_reason = $request->reason;
        $reason = '<ol>';
        foreach ($selected_reason as $key => $value) {
            $reason .= '<li>' . $value . '</li>';
        }
        $reason .= '</ol>';

        try {
            $details = [
                'message_body' => "Dear Sir / Madam,<br> My name is " . $request->full_name .
                    " and my email is " . $request->email .
                    " and my telephone is " . $request->telephone ."<br><b> Selected reason:</b> " . $reason .
                    ".<br> I am writing this email because: " . $request->message
            ];
            \Mail::send('emails.admin_registration', $details, function ($message) use ($request) {
                $message->to("info@tobilam.co.rw", "TOBILAM LTD")->subject(str_replace('{Disarmed}', '', $request->subject));
//                $message->to("tuyandre@tobilam.co.rw", "TOBILAM LTD")->subject($request->subject);
                $message->from('' . env('MAIL_FROM_ADDRESS') . '', env('MAIL_FROM_NAME'));
            });

        } catch (\Exception $e) {
            // Handle the error here
            \Log::error('Error sending email: ' . $e->getMessage());
            // You can add additional error handling logic as needed, such as logging the error or sending a notification
        }

        return redirect()->back()->with('success', 'Your message has been sent successfully.');
    }
}
