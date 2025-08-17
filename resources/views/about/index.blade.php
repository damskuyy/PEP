@extends('fe.master')
@section('content')
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('/img/breadcrumbs.png');">
      <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

        <h2>About</h2>
        <ol>
          <li><a href="/">Home</a></li>
          <li>About</li>
        </ol>

      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="row position-relative">

          <div class="col-lg-7 about-img" style="background-image: url(/img/about1.jpg);"></div>

          <div class="col-lg-7">
            <h2>PT. Perkasa Elektrika Power</h2>
            <div class="our-story">
              <h4>Est 2015</h4>
              <h3>Tentang Kami</h3>
              <p>Perusahaan kami berdiri secara resmi pada tahun 2015 namun dilegalitaskan tahun 2020 dengan nama PT. Perkasa Elektrika Power yang berlokasi di Kabupaten Bogor, Jawa Barat. Perusahaan kami merupakan sebuah perusahaan yang bergerak dibidang Mekanikal Elektrikal, Kontraktor dan supplier. 
              Kami mengerjakan proyek dari kalangan individu, swasta maupun pemerintah.Kami berkomitmen untuk menyelesaikan setiap project yang telah dipercayakan.Peran setiap elemen perusahaan sangat penting dalam melakukan perencanaan, pelaksanaan, dan pengendalian project. Terbukti dari kemampuan, komitmen untuk selalu memberikan pelayanan terbaik dan fokus pada mutu dan pekerjaan yang tepat waktu. PT. Perkasa Elektrika Power telah berhasil menawarkan efisiensi dan flexibilitas secara optimal agar dapat memberikan hasil yang baik dalam hal biaya dan waktu.
              </p>
              {{-- <div class="watch-video d-flex align-items-center position-relative">
                <i class="bi bi-play-circle"></i>
                <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="glightbox stretched-link">Watch Video</a>
              </div> --}}
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End About Section -->

    <!-- ======= Stats Counter Section ======= -->
    <section id="stats-counter" class="stats-counter section-bg">
      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-3 col-md-6">
            <div class="stats-item d-flex align-items-center w-100 h-100">
              <i class="bi bi-emoji-smile color-blue flex-shrink-0"></i>
              <div>
                <span data-purecounter-start="0" data-purecounter-end="20" data-purecounter-duration="1"
                  class="purecounter" data-plus="true"></span>
                <p>Klien yang Puas</p>
              </div>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6">
            <div class="stats-item d-flex align-items-center w-100 h-100">
              <i class="bi bi-journal-richtext color-orange flex-shrink-0"></i>
              <div>
                <span data-purecounter-start="0" data-purecounter-end="50" data-purecounter-duration="1" class="purecounter" data-plus="true"></span>
                <p>Proyek</p>
              </div>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6">
            <div class="stats-item d-flex align-items-center w-100 h-100">
              <i class="bi bi-headset color-green flex-shrink-0"></i>
              <div>
                <span data-purecounter-start="0" data-purecounter-end="24" data-purecounter-duration="1"
                  class="purecounter"></span>
                <p>Jam Dukungan</p>
              </div>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6">
            <div class="stats-item d-flex align-items-center w-100 h-100">
              <i class="bi bi-people color-pink flex-shrink-0"></i>
              <div>
                <span data-purecounter-start="0" data-purecounter-end="10" data-purecounter-duration="1"
                  class="purecounter" data-plus="true"></span>
                <p>Staff Profesional</p>
              </div>
            </div>
          </div><!-- End Stats Item -->

        </div>

      </div>
    </section><!-- End Stats Counter Section -->

    <!-- ======= Alt Services Section 2 ======= -->
    <section id="alt-services-2" class="alt-services section-bg">
      <div class="container" data-aos="fade-up">

        <div class="row justify-content-around gy-4">
          <div class="col-lg-5 d-flex flex-column justify-content-center">
            <h3>Visi Perusahaan</h3>
            <p>Menjadi perusahaan yang sehat, mandiri, berdaya saing serta mampu memenuhi kepuasan pelanggan dengan produk dan layanan yang berkualitas.</p>
            <h3>Misi Perusahaan</h3>
            <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="100">
              <i class="fas fa-list-ul flex-shrink-0"></i>
              <div>
                <h4>Memberikan pelayanan terbaik serta menjaga kepercayaan pelanggan maupun mitra bisnis.</h4>
                {{-- <p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate
                  non provident</p> --}}
              </div>
            </div><!-- End Icon Box -->
            <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="200">
              <i class="fas fa-list-ul flex-shrink-0"></i>
              <div>
                <h4>Membangun usaha yang memiliki keunggulan kopetitif & berkompeten.</h4>
                {{-- <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum
                  deleniti atque</p> --}}
              </div>
            </div><!-- End Icon Box -->
            <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="300">
              <i class="fas fa-list-ul flex-shrink-0"></i>
              <div>
                <h4>Menjalin hubungan kerja sama yang baik dengan partner jangka pendek maupun jangka panjang.</h4>
                {{-- <p>Explicabo est voluptatum asperiores consequatur magnam. Et veritatis odit. Sunt aut deserunt minus
                  aut eligendi omnis</p> --}}
              </div>
            </div><!-- End Icon Box -->
            <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="400">
              <i class="fas fa-list-ul flex-shrink-0"></i>
              <div>
                <h4>Berinovasi untuk produk dan layanan agar dapat lebih baik dan memenuhi keinginan pasar/calon pelanggan.</h4>
                {{-- <p>Est voluptatem labore deleniti quis a delectus et. Saepe dolorem libero sit non aspernatur odit amet.
                  Et eligendi</p> --}}
              </div>
            </div><!-- End Icon Box -->
          </div>
          <div class="col-lg-6 img-bg" style="background-image: url(/img/about2.jpg);" data-aos="zoom-in"
            data-aos-delay="100"></div>
        </div>
      </div>
    </section><!-- End Alt Services Section 2 -->

    <!-- ======= Our Team Section ======= -->
    {{-- <section id="team" class="team">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Our Team</h2>
          <p>Aperiam dolorum et et wuia molestias qui eveniet numquam nihil porro incidunt dolores placeat sunt id nobis
            omnis tiledo stran delop</p>
        </div>

        <div class="row gy-5">

          <div class="col-lg-4 col-md-6 member" data-aos="fade-up" data-aos-delay="100">
            <div class="member-img">
              <img src="/img/team/team-1.jpg" class="img-fluid" alt="">
            </div>
            <div class="member-info text-center">
              <h4>Walter White</h4>
              <span>Chief Executive Officer</span>
              <p>Aliquam iure quaerat voluptatem praesentium possimus unde laudantium vel dolorum distinctio dire flow
              </p>
            </div>
          </div><!-- End Team Member -->

          <div class="col-lg-4 col-md-6 member" data-aos="fade-up" data-aos-delay="200">
            <div class="member-img">
              <img src="/img/team/team-2.jpg" class="img-fluid" alt="">
            </div>
            <div class="member-info text-center">
              <h4>Sarah Jhonson</h4>
              <span>Product Manager</span>
              <p>Labore ipsam sit consequatur exercitationem rerum laboriosam laudantium aut quod dolores exercitationem
                ut</p>
            </div>
          </div><!-- End Team Member -->

          <div class="col-lg-4 col-md-6 member" data-aos="fade-up" data-aos-delay="300">
            <div class="member-img">
              <img src="/img/team/team-3.jpg" class="img-fluid" alt="">
            </div>
            <div class="member-info text-center">
              <h4>William Anderson</h4>
              <span>CTO</span>
              <p>Illum minima ea autem doloremque ipsum quidem quas aspernatur modi ut praesentium vel tque sed facilis
                at qui</p>
            </div>
          </div><!-- End Team Member -->

          <div class="col-lg-4 col-md-6 member" data-aos="fade-up" data-aos-delay="400">
            <div class="member-img">
              <img src="/img/team/team-4.jpg" class="img-fluid" alt="">
            </div>
            <div class="member-info text-center">
              <h4>Amanda Jepson</h4>
              <span>Accountant</span>
              <p>Magni voluptatem accusamus assumenda cum nisi aut qui dolorem voluptate sed et veniam quasi quam
                consectetur</p>
            </div>
          </div><!-- End Team Member -->

          <div class="col-lg-4 col-md-6 member" data-aos="fade-up" data-aos-delay="500">
            <div class="member-img">
              <img src="/img/team/team-5.jpg" class="img-fluid" alt="">
            </div>
            <div class="member-info text-center">
              <h4>Brian Doe</h4>
              <span>Marketing</span>
              <p>Qui consequuntur quos accusamus magnam quo est molestiae eius laboriosam sunt doloribus quia impedit
                laborum velit</p>
            </div>
          </div><!-- End Team Member -->

          <div class="col-lg-4 col-md-6 member" data-aos="fade-up" data-aos-delay="600">
            <div class="member-img">
              <img src="/img/team/team-6.jpg" class="img-fluid" alt="">
            </div>
            <div class="member-info text-center">
              <h4>Josepha Palas</h4>
              <span>Operation</span>
              <p>Sint sint eveniet explicabo amet consequatur nesciunt error enim rerum earum et omnis fugit eligendi
                cupiditate vel</p>
            </div>
          </div><!-- End Team Member -->

        </div>

      </div>
    </section> --}}
    <!-- End Our Team Section -->
@endsection
@section('client')
    @include('fe.client')
@endsection