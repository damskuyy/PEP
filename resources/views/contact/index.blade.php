@extends('fe.master')
@section('content')
    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('fe/img/breadcrumbs.png');">
      <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">
        <h2>Contact</h2>
        <ol>
          <li><a href="/">Home</a></li>
          <li>Contact</li>
        </ol>
      </div>
    </div><!-- End Breadcrumbs -->
    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row gy-4">
          <div class="col-lg-6">
            <div class="info-item  d-flex flex-column justify-content-center align-items-center">
              <i class="bi bi-map"></i>
              <h3>Alamat Kami</h3>
              <p class="text-center">Perum Griya Anggraeni Blok A1 No.3 RT 001/011 <br> Karang Asem Barat, Kec. Citeureup, Kab. Bogor</p>
            </div>
          </div><!-- End Info Item -->
          <div class="col-lg-3 col-md-6">
            <div class="info-item d-flex flex-column justify-content-center align-items-center">
              <i class="bi bi-envelope"></i>
              <h3>Email Kami</h3>
              <p>perkasa.panel@gmail.com</p>
            </div>
          </div><!-- End Info Item -->
          <div class="col-lg-3 col-md-6">
            <div class="info-item  d-flex flex-column justify-content-center align-items-center">
              <i class="bi bi-telephone"></i>
              <h3>Hubungi Kami</h3>
              <p>0812-9394-1565</p>
            </div>
          </div><!-- End Info Item -->
        </div>
        <div class="row gy-4 mt-1">
          <div class="col-lg-6 ">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2478.295172562593!2d106.8622945055926!3d-6.491804438232192!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69c139ee62efab%3A0xa84e6296be0eb220!2sPT.%20Perkasa%20Elektrika%20Power!5e1!3m2!1sid!2sid!4v1754536391416!5m2!1sid!2sid" width="100%" height="379" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div><!-- End Google Maps -->
          <div class="col-lg-6">
            @if(session('success'))
            <script>
                Swal.fire({
                    icon: 'success',
                    title: 'Berhasil!',
                    text: '{{ session('success') }}',
                    confirmButtonColor: '#3085d6'
                });
            </script>
            @endif
            @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            <form id="contactForm" class="php-email-form" action="{{ route('send.email') }}" method="POST" role="form" novalidate>
              @csrf
              <div class="row gy-4">
                <div class="col-lg-6 form-group">
                  <input type="text" name="name" class="form-control" placeholder="Nama Anda" required>
                </div>
                <div class="col-lg-6 form-group">
                  <input type="email" class="form-control" name="email" placeholder="Email Anda" required>
                </div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject" placeholder="Subjek" required>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" rows="5" placeholder="Pesan" required></textarea>
              </div>
              {{-- <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Pesan anda telah terkirim. Terima Kasih!</div>
              </div> --}}
              <div class="text-center">
                <button type="submit">Kirim Pesan</button>
              </div>
            </form>
          </div><!-- End Contact Form -->
        </div>
      </div>
    </section>
    <!-- End Contact Section -->
@endsection
@section('client')
    @include('fe.client')
@endsection