<!DOCTYPE html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <title>Website Kursus</title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="icon" type="image/png" href="{{ asset('favicon.png') }}" />
    <link
      href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
      rel="stylesheet"
    />

    <link rel="stylesheet" href="assets/css/slick/slick.css" />
    <link rel="stylesheet" href="assets/css/slick/slick-theme.css" />
    <link rel="stylesheet" href="assets/css/animate.css" />
    <link rel="stylesheet" href="assets/css/iconfont.css" />
    <link rel="stylesheet" href="assets/css/font-awesome.min.css" />
    <link rel="stylesheet" href="assets/css/bootstrap.css" />
    <link rel="stylesheet" href="assets/css/magnific-popup.css" />
    <link rel="stylesheet" href="assets/css/bootsnav.css" />
    <link rel="stylesheet" href="assets/css/style.css" />
    <link rel="stylesheet" href="assets/css/responsive.css" />

    <script src="assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
  </head>

  <body data-spy="scroll" data-target=".navbar-collapse">
    @include('fragment.alert')
    <div id="loading">
      <div id="loading-center">
        <div id="loading-center-absolute">
          <div class="object" id="object_one"></div>
          <div class="object" id="object_two"></div>
          <div class="object" id="object_three"></div>
          <div class="object" id="object_four"></div>
        </div>
      </div>
    </div>

    <div class="culmn">
      <nav class="navbar navbar-default bootsnav navbar-fixed">
        <div class="navbar-top bg-grey fix">
          <div class="container">
            <div class="row">
              <div class="col-md-6">
                <div class="navbar-callus text-left sm-text-center">
                  <ul class="list-inline">
                    <li>
                      <a href=""
                        ><i class="fa fa-phone"></i>1234 5678 90</a>
                    </li>
                    <li>
                      <a href=""
                        ><i class="fa fa-envelope-o"></i>gudangskill@kursus.com</a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="col-md-6">
                <div class="navbar-socail text-right sm-text-center">
                  <ul class="list-inline">
                    <li>
                      <a href="https://www.facebook.com" target="_blank"
                        ><i class="fa fa-facebook"></i
                      ></a>
                    </li>
                    <li>
                      <a href="https://twitter.com" target="_blank"
                        ><i class="fa fa-twitter"></i
                      ></a>
                    </li>
                    <li>
                      <a href="https://www.linkedin.com" target="_blank"
                        ><i class="fa fa-linkedin"></i
                      ></a>
                    </li>
                    <li>
                      <a href="https://www.instagram.com" target="_blank"
                        ><i class="fa fa-instagram"></i
                      ></a>
                    </li>
                    <li>
                      <a
                        href="https://youtube.com"
                        target="_blank"
                        ><i class="fa fa-youtube"></i
                      ></a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="top-search">
          <div class="container">
            <div class="input-group">
              <span class="input-group-addon"
                ><i class="fa fa-search"></i
              ></span>
              <input type="text" class="form-control" placeholder="Search" />
              <span class="input-group-addon close-search"
                ><i class="fa fa-times"></i
              ></span>
            </div>
          </div>
        </div>

        <div class="container">
          <div class="attr-nav">
            <ul>
              <li class="search">
                <a href="#"><i class="fa fa-search"></i></a>
              </li>
            </ul>
          </div>
          <div class="navbar-header">
            <button
              type="button"
              class="navbar-toggle"
              data-toggle="collapse"
              data-target="#navbar-menu"
            >
              <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand" href="#brand">
              <img src="assets/images/logo.png" class="logo" alt="" />
            </a>
          </div>

          <div class="collapse navbar-collapse" id="navbar-menu">
            <ul class="nav navbar-nav navbar-right">
              <li><a href="#home">Home</a></li>
              <li><a href="#features">About</a></li>
              <li><a href="#business">Service</a></li>
              <li><a href="#test">Blog</a></li>
              <li><a href="#contact">Contact</a></li>
              <li><a href="#portfolio">Portfolio</a></li>
              <li><a href="{{ route('auth') }}">Login</a></li>
            </ul>
          </div>
        </div>
      </nav>

      <section id="home" class="home bg-black fix">
        <div class="overlay"></div>
        <div class="container">
          <div class="row">
            <div class="main_home text-center">
              <div class="col-md-12">
                <div class="hello_slid">
                  <div class="slid_item">
                    <div class="home_text">
                      <h2 class="text-white">
                        Welcome to <strong>GudangSkill</strong>
                      </h2>
                      <h1 class="text-white">
                        We Spread Knowledge All the Time
                      </h1>
                      <h3 class="text-white">
                        {{-- - We Create a <strong>Websites</strong> on Youtube - --}}
                      </h3>
                    </div>

                    <div class="home_btns m-top-40">
                      <a
                        href="{{ route('auth') }}"
                        class="btn btn-primary m-top-20"
                        >Daftar Sekarang</a
                      >
                      <a
                        href=""
                        class="btn btn-default m-top-20"
                        >Selengkapnya</a
                      >
                    </div>
                  </div>
                  <div class="slid_item">
                    <div class="home_text">
                      <h2 class="text-white">
                        Welcome to <strong>GudangSkill</strong>
                      </h2>
                      <h1 class="text-white">
                        We Spread Knowledge All the Time
                      </h1>
                      <h3 class="text-white">
                        {{-- - We Create a <strong>Websites</strong> on Youtube - --}}
                      </h3>
                    </div>

                    <div class="home_btns m-top-40">
                      <a
                        href="{{ route('auth') }}"
                        class="btn btn-primary m-top-20"
                        >Daftar Sekarang</a
                      >
                      <a
                        href=""
                        class="btn btn-default m-top-20"
                        >Selengkapnya</a
                      >
                    </div>
                  </div>
                  <div class="slid_item">
                    <div class="home_text">
                      <h2 class="text-white">
                        Welcome to <strong>GudangSkill</strong>
                      </h2>
                      <h1 class="text-white">
                        We Spread Knowledge All the Time
                      </h1>
                      <h3 class="text-white">
                        {{-- - We Create a <strong>Websites</strong> on Youtube - --}}
                      </h3>
                    </div>

                    <div class="home_btns m-top-40">
                      <a
                        href="{{ route('auth') }}"
                        class="btn btn-primary m-top-20"
                        >Daftar Sekarang</a
                      >
                      <a
                        href=""
                        class="btn btn-default m-top-20"
                        >Selengkapnya</a
                      >
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section id="features" class="features">
        <div class="container">
          <div class="row">
            <div class="main_features fix roomy-70">
              <div class="col-md-4">
                <div class="features_item sm-m-top-30">
                  <div class="f_item_icon">
                    <i class="fa fa-thumbs-o-up"></i>
                  </div>
                  <div class="f_item_text">
                    <h3>Kursus Online dan Offline Terbaik</h3>
                    <p>
                      Lorem ipsum dolor sit amet consectetur adipiscing elit
                      pellentesque eleifend in sit amet mattis volutpat rhoncus.
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="features_item sm-m-top-30">
                  <div class="f_item_icon">
                    <i class="fa fa-tablet"></i>
                  </div>
                  <div class="f_item_text">
                    <h3>Kursus Responsif</h3>
                    <p>
                      Lorem ipsum dolor sit amet consectetur adipiscing elit
                      pellentesque eleifend in sit amet mattis volutpat rhoncus.
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="features_item sm-m-top-30">
                  <div class="f_item_icon">
                    <i class="fa fa-sliders"></i>
                  </div>
                  <div class="f_item_text">
                    <h3>Mudah untuk dipahami</h3>
                    <p>
                      Lorem ipsum dolor sit amet consectetur adipiscing elit
                      pellentesque eleifend in sit amet mattis volutpat rhoncus.
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section id="business" class="business bg-grey roomy-70">
        <div class="container">
          <div class="row">
            <div class="main_business">
              <div class="col-md-6">
                <div class="business_slid">
                  <div class="slid_shap bg-grey"></div>
                  <div class="business_items text-center">
                    <div class="business_item">
                      <div class="business_img">
                        <img src="assets/images/about-img1.png" alt="" />
                      </div>
                    </div>

                    <div class="business_item">
                      <div class="business_img">
                        <img src="assets/images/about-img1.png" alt="" />
                      </div>
                    </div>

                    <div class="business_item">
                      <div class="business_img">
                        <img src="assets/images/about-img1.png" alt="" />
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-md-6">
                <div class="business_item sm-m-top-50">
                  <h2 class="text-uppercase">
                    <strong  style="color: rgb(0, 168, 133)">GudangSkill</strong> adalah website layanan kursus
                  </h2>
                  <ul>
                    <li>
                      <i class="fa fa-arrow-circle-right"></i> Kursus bersih dan modern
                    </li>
                    <li>
                      <i class="fa fa-arrow-circle-right"></i> Mudah dipahami
                    </li>
                    <li>
                      <i class="fa fa-arrow-circle-right"></i> Bersertifikat
                    </li>
                  </ul>
                  <p class="m-top-20">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit
                    pellentesque eleifend in mi sit amet mattis suspendisse ac
                    ligula volutpat nisl rhoncus sagittis cras suscipit lacus
                    quis erat malesuada lobortis eiam dui magna volutpat commodo
                    eget pretium vitae elit etiam luctus risus urna in malesuada
                    ante convallis.
                  </p>

                  <div class="business_btn">
                    <a href="" class="btn btn-default m-top-20">Selengkapnya</a>
                    <a href="{{ route('auth') }}" class="btn btn-primary m-top-20"
                      >Mulai Sekarang</a
                    >
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section id="courses" class="product">
        <div class="container">
            <div class="main_product roomy-80">
                <div class="head_title text-center fix">
                    <h2 class="text-uppercase">Kursus Tersedia</h2>
                    <h5>Pilih kursus yang sesuai dengan kebutuhan Anda</h5>
                </div>
    
                <div class="course-card" style="display: grid; grid-template-columns: repeat(auto-fill, minmax(300px, 1fr)); gap: 16px;">
                    @if($courses->isEmpty())
                        <p>Tidak ada kursus yang tersedia.</p>
                    @else
                        @foreach ($courses as $course)
                            <a href="{{ route('courses.show', $course->id) }}" class="course" style="border: 1px solid #ccc; padding: 16px; border-radius: 8px; text-decoration: none; color: inherit;">
                                <img src="{{ asset($course->foto_kursus) }}" alt="Foto Kursus" style="width:100%; height:auto;">
                                <div class="course-details">
                                    <h2>{{ $course->nama_kursus }}</h2>
                                    <div class="instructor-info">
                                        <img src="{{ asset($course->foto_pengajar) }}" alt="Foto Instruktur" style="width:50px; height:50px; border-radius:50%;">
                                        <div>
                                            <h4>{{ $course->nama_pengajar }}</h4>
                                            <p>{{ $course->pekerjaan_pengajar }}</p>
                                        </div>
                                    </div>
                                    <div class="rating">
                                        <p>
                                            @for ($i = 0; $i < 5; $i++)
                                                @if ($i < $course->rating)
                                                    ★
                                                @else
                                                    ☆
                                                @endif
                                            @endfor
                                        </p>
                                    </div>
                                    <p>Harga: Rp{{ number_format($course->harga, 0, ',', '.') }}</p>
                                    @if($course->diskon)
                                        <p>Diskon: Rp{{ number_format($course->diskon, 0, ',', '.') }}</p>
                                    @endif
                                    <p>Jenis Kursus: {{ $course->type == 'online' ? 'Online' : 'Offline' }}</p>
                                    <p>Slot Tersedia: {{ $course->stok }}</p>
                                </div>
                            </a>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
    </section>
    
    
              <a
                class="left carousel-control"
                href="#carousel-example-generic"
                role="button"
                data-slide="prev"
              >
                <i class="fa fa-angle-left" aria-hidden="true"></i>
                <span class="sr-only">Previous</span>
              </a>

              <a
                class="right carousel-control"
                href="#carousel-example-generic"
                role="button"
                data-slide="next"
              >
                <i class="fa fa-angle-right" aria-hidden="true"></i>
                <span class="sr-only">Next</span>
              </a>
            </div>
          </div>
        </div>
      </section>

      <section id="test" class="test bg-grey roomy-60 fix">
        <div class="container">
          <div class="row">
            <div class="main_test fix">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="head_title text-center fix">
                  <h2 class="text-uppercase">Apa Kata Pengajar</h2>
                  <h5>Kursus Bersih dan Modern adalah spesialis terbaik kami</h5>
                </div>
              </div>

              <div class="col-md-6">
                <div class="test_item fix">
                  <div class="item_img">
                    <img
                      class="img-circle"
                      src="assets/images/test-img1.jpg"
                      alt=""
                    />
                    <i class="fa fa-quote-left"></i>
                  </div>

                  <div class="item_text">
                    <h5>Sri Susanti</h5>
                    <h6>Nasional Geographic</h6>

                    <p>
                      "Sebagai pengajar, saya merasa siswa di sini sangat antusias dan siap belajar. Fasilitas yang disediakan juga mendukung proses belajar mengajar, sehingga kami bisa fokus memberikan pelajaran praktis dan teori dengan baik."
                    </p>
                  </div>
                </div>
              </div>

              <div class="col-md-6">
                <div class="test_item fix sm-m-top-30">
                  <div class="item_img">
                    <img
                      class="img-circle"
                      src="assets/images/test-img2.jpg"
                      alt=""
                    />
                    <i class="fa fa-quote-left"></i>
                  </div>

                  <div class="item_text">
                    <h5>Khumaidi</h5>
                    <h6>kode.id</h6>

                    <p>
                      "Mengajar di GudangSkill sangat memuaskan karena siswa benar-benar fokus dan termotivasi untuk berkarir di industri teknologi. Kurikulum kami terstruktur dengan baik, dan kami sebagai pengajar diberi kebebasan untuk menambahkan studi kasus dari pengalaman nyata. Tantangan terbesar adalah menjaga intensitas belajar yang sangat tinggi."
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      {{-- <div _ngcontent-sc38="" class="container-content">
        <p _ngcontent-sc38="" class="title-text gotham-bold"> Telah Terdaftar oleh </p>
        <div _ngcontent-sc38="" class="row mt-16">
          <div _ngcontent-sc38="" class="col-lg-4 col-md-12 break-word">
            <img _ngcontent-sc38="" src="../../../assets/icons/shared/kominfo.svg" class="desc-image">
            <p _ngcontent-sc38="" class="small-text mt-12"> PB-UMKU: 912020024242500040001 </p>
            <p _ngcontent-sc38="" class="small-text"> PSE: 008628.01/DJAI.PSE/12/2022 </p>
          </div>
          <div _ngcontent-sc38="" class="col-lg-4 col-md-12 break-word">
            <img _ngcontent-sc38="" src="../../../assets/icons/shared/Kemendikbud white.svg" 
            class="desc-image"><p _ngcontent-sc38="" class="small-text mt-12"> Nama: LKP CAKAP (PT. CERDAS DIGITAL NUSANTARA) </p>
            <p _ngcontent-sc38="" class="small-text"> NPSN: K9996958 </p>
          </div>
            <div _ngcontent-sc38="" class="col-lg-4 col-md-12 break-word">
              <img _ngcontent-sc38="" src="../../../assets/icons/shared/kemenker.svg" class="desc-image">
              <p _ngcontent-sc38="" class="small-text mt-12"> Lisensi: 2/G.1/31.73.02.1001.01.004.C.1.a.b/3/-1.851.332/e/2021</p>
            </div>
          </div>
            <div _ngcontent-sc38="" class="line-divider"></div>
            <div _ngcontent-sc38="" class="row">
              <div _ngcontent-sc38="" class="col-12 iso-container">
                <p _ngcontent-sc38="" class="no-margin text prakerja-text"> Mendukung </p>
                <img _ngcontent-sc38="" src="../../../assets/icons/shared/prakerja.svg" class="prakerja-image"></div>
              </div>
            </div> --}}

            

      <section id="brand" class="brand fix roomy-80">
        <div class="container">
          <div class="row">
            <div class="main_brand text-center">
              <div class="col-md-2 col-sm-4 col-xs-6">
                <div class="brand_item sm-m-top-20">
                  <img src="assets/images/cbrand-img1.png" alt="" />
                </div>
              </div>
              <div class="col-md-2 col-sm-4 col-xs-6">
                <div class="brand_item sm-m-top-20">
                  <img src="assets/images/cbrand-img2.png" alt="" />
                </div>
              </div>
              <div class="col-md-2 col-sm-4 col-xs-6">
                <div class="brand_item sm-m-top-20">
                  <img src="assets/images/cbrand-img3.png" alt="" />
                </div>
              </div>
              <div class="col-md-2 col-sm-4 col-xs-6">
                <div class="brand_item sm-m-top-20">
                  <img src="assets/images/cbrand-img4.png" alt="" />
                </div>
              </div>
              <div class="col-md-2 col-sm-4 col-xs-6">
                <div class="brand_item sm-m-top-20">
                  <img src="assets/images/cbrand-img5.png" alt="" />
                </div>
              </div>
              <div class="col-md-2 col-sm-4 col-xs-6">
                <div class="brand_item sm-m-top-20">
                  <img src="assets/images/cbrand-img6.png" alt="" />
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>


      <footer id="contact" class="footer action-lage bg-black p-top-80">
        <div class="container">
          <div class="row">
            <div class="widget_area">
              <div class="col-md-3">
                <div class="widget_item widget_about">
                  <h5 class="text-white">Tentang Kami</h5>
                  <p class="m-top-20">
                    Lorem ipsum dolor sit amet consec tetur adipiscing elit
                    nulla aliquet pretium nisi in cursus maecenas nec eleifen.
                  </p>
                  <div class="widget_ab_item m-top-30">
                    <div class="item_icon">
                      <i class="fa fa-location-arrow"></i>
                    </div>
                    <div class="widget_ab_item_text">
                      <h6 class="text-white">Lokasi</h6>
                      <p>
                        123 suscipit ipsum nam auctor mauris dui, ac
                        sollicitudin mauris, Indonesia
                      </p>
                    </div>
                  </div>
                  <div class="widget_ab_item m-top-30">
                    <div class="item_icon"><i class="fa fa-phone"></i></div>
                    <div class="widget_ab_item_text">
                      <h6 class="text-white">Whatsapp :</h6>
                      <p>+1 2345 6789</p>
                    </div>
                  </div>
                  <div class="widget_ab_item m-top-30">
                    <div class="item_icon">
                      <i class="fa fa-envelope-o"></i>
                    </div>
                    <div class="widget_ab_item_text">
                      <h6 class="text-white">Email :</h6>
                      <p>gudangskill@kursus.com</p>
                    </div>
                  </div>
                </div>
                <!-- End off widget item -->
              </div>
              <!-- End off col-md-3 -->

              <div class="col-md-3">
                <div class="widget_item widget_latest sm-m-top-50">
                  <h5 class="text-white">Berita Terkini</h5>
                  <div class="widget_latst_item m-top-30">
                    <div class="item_icon">
                      <img src="assets/images/ltst-img-1.jpg" alt="" />
                    </div>
                    <div class="widget_latst_item_text">
                      <p>Lorem ipsum dolor sit amet, consectetur</p>
                      <a href="">21<sup>th</sup> July 2016</a>
                    </div>
                  </div>
                  <div class="widget_latst_item m-top-30">
                    <div class="item_icon">
                      <img src="assets/images/ltst-img-2.jpg" alt="" />
                    </div>
                    <div class="widget_latst_item_text">
                      <p>Lorem ipsum dolor sit amet, consectetur</p>
                      <a href="">21<sup>th</sup> July 2016</a>
                    </div>
                  </div>
                  <div class="widget_latst_item m-top-30">
                    <div class="item_icon">
                      <img src="assets/images/ltst-img-3.jpg" alt="" />
                    </div>
                    <div class="widget_latst_item_text">
                      <p>Lorem ipsum dolor sit amet, consectetur</p>
                      <a href="">21<sup>th</sup> July 2016</a>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-md-3">
                <div class="widget_item widget_service sm-m-top-50">
                  <h5 class="text-white">Berita Terkini</h5>
                  <ul class="m-top-20">
                    <li class="m-top-20">
                      <a
                        href="https://www.youtube.com/watch?v=tj2TJ66QRIo"
                        target="_blank"
                        ><i class="fa fa-angle-right"></i> Chat App</a
                      >
                    </li>
                    <li class="m-top-20">
                      <a
                        href="https://www.youtube.com/watch?v=YMj-tYrnOuQ"
                        target="_blank"
                        ><i class="fa fa-angle-right"></i> Template Website
                        Premium</a
                      >
                    </li>
                    <li class="m-top-20">
                      <a
                        href="https://www.youtube.com/watch?v=QqOg2xQw2Yw"
                        target="_blank"
                        ><i class="fa fa-angle-right"></i> Cara Hosting
                        Website</a
                      >
                    </li>
                    <li class="m-top-20">
                      <a
                        href="https://www.youtube.com/watch?v=51OqEADQfpQ"
                        target="_blank"
                        ><i class="fa fa-angle-right"></i> Deploy Restfull
                        API</a
                      >
                    </li>
                    <li class="m-top-20">
                      <a
                        href="https://www.youtube.com/watch?v=dcCYgvZ_kxc"
                        target="_blank"
                        ><i class="fa fa-angle-right"></i> Laravel Breeze</a
                      >
                    </li>
                    <li class="m-top-20">
                      <a
                        href="https://www.youtube.com/watch?v=q_yJV1xElt0"
                        target="_blank"
                        ><i class="fa fa-angle-right"></i> Membuat Web
                        Autentikasi</a
                      >
                    </li>
                  </ul>
                </div>
              </div>
              <div class="col-md-3">
                <div class="widget_item widget_newsletter sm-m-top-50">
                  <h5 class="text-white">Newsletter</h5>
                  <form class="form-inline m-top-30">
                    <div class="form-group">
                      <input
                        type="email"
                        class="form-control"
                        placeholder="Enter you Email"
                      />
                      <button type="submit" class="btn text-center">
                        <i class="fa fa-arrow-right"></i>
                      </button>
                    </div>
                  </form>
                  <div class="widget_brand m-top-40">
                    <a href="" class="text-uppercase">GudangSkill</a>
                    <p>
                      Lorem ipsum dolor sit amet consec tetur adipiscing elit
                      nulla aliquet pretium nisi in
                    </p>
                  </div>
                  <ul class="list-inline m-top-20">
                    <li>
                      - <a href=""><i class="fa fa-facebook"></i></a>
                    </li>
                    <li>
                      <a href=""><i class="fa fa-twitter"></i></a>
                    </li>
                    <li>
                      <a href=""><i class="fa fa-linkedin"></i></a>
                    </li>
                    <li>
                      <a href=""><i class="fa fa-instagram"></i></a>
                    </li>
                    <li>
                      <a href="https://youtube.com" target="_blank"><i class="fa fa-youtube"></i></a> -
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div
          class="main_footer fix bg-mega text-center p-top-40 p-bottom-30 m-top-80"
        >
          <div class="col-md-12">
            <p class="wow fadeInRight" data-wow-duration="1s">
              Made with
              <i class="fa fa-heart"></i>
              by
              <a
                >Defghijamal</a
              >
              2024. All Rights Reserved
            </p>
          </div>
        </div>
      </footer>
    </div>

    <script src="assets/js/vendor/jquery-1.11.2.min.js"></script>
    <script src="assets/js/vendor/bootstrap.min.js"></script>

    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/jquery.magnific-popup.js"></script>
    <script src="assets/js/jquery.easing.1.3.js"></script>
    <script src="assets/css/slick/slick.js"></script>
    <script src="assets/css/slick/slick.min.js"></script>
    <script src="assets/js/jquery.collapse.js"></script>
    <script src="assets/js/bootsnav.js"></script>

    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/main.js"></script>
  </body>
</html>
