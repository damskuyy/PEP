@extends('fe.master')
@section('hero')
    @include('fe.hero')
@endsection
@section('alasan')
    @include('fe.alasan')
@endsection
@section('features')
    @include('fe.features')
@endsection
@section('content')
    <section id="projects" class="projects">
      <div class="container" data-aos="fade-up">
        <div class="section-header">
          <h2>Produk Kami</h2>
          <p>Produk kami dibuat dengan kualitas terbaik, melalui proses seleksi ketat, untuk memenuhi kebutuhan pelanggan dan memberikan kepuasan maksimal setiap saat.</p>
        </div>
        <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry"
          data-portfolio-sort="original-order">
          <div class="row gy-4 portfolio-container" data-aos="fade-up" data-aos-delay="200">
            <div class="col-lg-4 col-md-6 portfolio-item filter-construction">
              <div class="portfolio-content h-100">
                <img src="fe/img/projects/panel-board.jpeg" class="img-fluid" alt="">
                <div style="background:#eaf8ff; text-align:center; padding:12px 0; font-size:1.3em; font-weight:600; color:#2196f3;">Switchboard Manufacture Panel</div>
                <div class="portfolio-info">
                  <a href="fe/img/projects/panel-board.jpeg" title="Switchboard Manufacture Panel Medium Voltage adalah panel distribusi listrik tegangan menengah yang berfungsi mengatur dan membagi daya listrik"
                    data-gallery="portfolio-gallery-construction" class="glightbox preview-link"><i
                      class="bi bi-zoom-in"></i></a>
                  {{-- <a href="project-details.html" title="More Details" class="details-link"><i
                      class="bi bi-link-45deg"></i></a> --}}
                </div>
              </div>
            </div><!-- End Projects Item -->
            <div class="col-lg-4 col-md-6 portfolio-item filter-design">
              <div class="portfolio-content h-100">
                <img src="fe/img/projects/stardelta.jpg" class="img-fluid" alt="">
                <div style="background:#eaf8ff; text-align:center; padding:12px 0; font-size:1.3em; font-weight:600; color:#2196f3;">Panel Stardelta</div>
                <div class="portfolio-info">
                  <a href="fe/img/projects/stardelta.jpg" title="Panel Stardelta adalah panel kontrol motor listrik dengan metode start delta untuk mengurangi lonjakan arus saat start" data-gallery="portfolio-gallery-book"
                    class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  {{-- <a href="project-details.html" title="More Details" class="details-link"><i
                      class="bi bi-link-45deg"></i></a> --}}
                </div>
              </div>
            </div><!-- End Projects Item -->
            <div class="col-lg-4 col-md-6 portfolio-item filter-design">
              <div class="portfolio-content h-100">
                <img src="fe/img/projects/fire-pump.jpg" class="img-fluid" alt="">
                <div style="background:#eaf8ff; text-align:center; padding:12px 0; font-size:1.3em; font-weight:600; color:#2196f3;">Panel Electric Fire Pump</div>
                <div class="portfolio-info">
                  <a href="fe/img/projects/fire-pump.jpg" title="Panel Electric Fire Pump adalah panel kontrol untuk mengoperasikan pompa kebakaran listrik" data-gallery="portfolio-gallery-book"
                    class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  {{-- <a href="project-details.html" title="More Details" class="details-link"><i
                      class="bi bi-link-45deg"></i></a> --}}
                </div>
              </div>
            </div><!-- End Projects Item -->
          </div><!-- End Projects Container -->
          <div class="text-center mt-4">
            <a href="/product" class="btn-findmore">Selengkapnya</a>
          </div>
        </div>
      </div>
</section>
@endsection
@section('client')
    @include('fe.client')
@endsection

