@extends('backend.partials.master')

@section('content')
    <?php
    use App\Constants\VariableConstants;
    $main_url = url()->to('/').'/';
    $ROOT_FOLDER =$main_url.VariableConstants::ROOT_FOLDER;
    ?>
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Certificates Lists
                        {{--                        <button type="button" class="btn btn-primary btn-sm float-right" data-toggle="modal" data-target="#addModal">--}}
                        {{--                            Add New--}}
                        {{--                        </button>--}}
                    </h4>

                </div>
                <div class="card-body">

                    <div class="table-responsive pt-3">
                        <table id="opa_tables" class="table table-bordered table-striped table-hover" style="width:100%">
                            <thead>
                            <tr>
                                <th>Student Name</th>
                                <th>Student Email</th>
                                <th>Student Phone</th>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($certificates as $certificate)
                                <tr>
                                    <td>{{$certificate->Student->full_name}}</td>
                                    <td>{{$certificate->student->email}}</td>
                                    <td>{{$certificate->student->telephone}}</td>
                                    <td>{{$certificate->title}}</td>
                                    <td>{{$certificate->description}}</td>
                                    <td>
                                        <div class="dropdown">
                                            <button class="btn btn-2x btn-primary btn-sm dropdown-toggle action-dropdown" type="button"
                                                    id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false">
                                                Action
                                            </button>
                                            <div class="dropdown-menu rounded" aria-labelledby="dropdownMenuButton">
                                                <a class="dropdown-item delete_btn" href="{{route('admin.certificates.delete', $certificate->id)}}">Delete</a>
                                                <a class="dropdown-item" href="{{route('student.certificates.download', $certificate->file)}}">Students</a>


                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>


                </div>

            </div>
        </div>
    </div>


@endsection
@section('scripts')
    <script type="text/javascript" src="{{ asset($ROOT_FOLDER.'vendor/jsvalidation/js/jsvalidation.min.js')}}"></script>
    <script type="text/javascript" src="{{ url($ROOT_FOLDER.'vendor/jsvalidation/js/jsvalidation.js')}}"></script>
    <script>
        $(document).ready(function () {

            $(document).on('click', '.delete_btn', function (e) {
                e.preventDefault();
                var href = this.href;
                Swal.fire({
                    title: "Are you sure?",
                    text: "Delete this Service ?",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonText: "Yes, delete it!",
                    cancelButtonText: "No, cancel!",
                    reverseButtons: true
                }).then((willDelete) => {
                    if (willDelete.value) {
                        window.location = href;
                    } else {
                        //swal("Your imaginary file is safe!");
                    }
                });
            });

        });
    </script>



@endsection
