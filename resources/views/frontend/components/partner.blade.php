<!-- ======= Clients Section ======= -->
<section id="clients" class="clients section-bg">
    <div class="container">

        <div class="row" data-aos="zoom-in">

            @php
                $partners = [
                    ['img' => 'rdb1.png', 'url' => 'https://www.rdb.rw', 'name' => 'RDB'],
                    ['img' => 'rssb.png', 'url' => 'https://www.rssb.rw', 'name' => 'RSSB'],
                    ['img' => 'bnr.png', 'url' => 'https://www.bnr.rw', 'name' => 'BNR'],
                    ['img' => 'rra.png', 'url' => 'https://www.rra.gov.rw', 'name' => 'RRA'],
                    ['img' => 'book.png', 'url' => 'https://www.intuit.com/', 'name' => 'Intuit QuickBooks'],
                    ['img' => 'atar.png', 'url' => 'https://www.atar.rw', 'name' => 'ATAR'],
                ];
            @endphp

            @foreach ($partners as $partner)
                <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                    <a href="{{ $partner['url'] }}" target="_blank" rel="noopener noreferrer" title="{{ $partner['name'] }}">
                        <img src="{{ asset('assets/img/' . $partner['img']) }}" class="img-fluid" alt="{{ $partner['name'] }}">
                    </a>
                </div>
            @endforeach

        </div>

    </div>
</section><!-- End Cliens Section -->
