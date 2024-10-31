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

    <link rel="stylesheet" href="/assets/css/slick/slick.css" />
    <link rel="stylesheet" href="/assets/css/slick/slick-theme.css" />
    <link rel="stylesheet" href="/assets/css/animate.css" />
    <link rel="stylesheet" href="/assets/css/iconfont.css" />
    <link rel="stylesheet" href="/assets/css/font-awesome.min.css" />
    <link rel="stylesheet" href="/assets/css/bootstrap.css" />
    <link rel="stylesheet" href="/assets/css/magnific-popup.css" />
    <link rel="stylesheet" href="/assets/css/bootsnav.css" />
    <link rel="stylesheet" href="/assets/css/style.css" />
    <link rel="stylesheet" href="/assets/css/responsive.css" />

    <script src="/assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
  </head>

  <body>
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


<section>
  <div>
    <h1>Deskripsi Kursus</h1>
    <button>daftar sekarang</button>
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
              <h3>Deskripsi Kursus</h3>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam qui repudiandae dignissimos eius odit illo nesciunt expedita quod dicta ad sunt, eos sit, soluta veritatis repellendus et id suscipit numquam.</p>
              <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quam explicabo ad et pariatur dolores tempora? Necessitatibus assumenda aut dolores quaerat dolor, recusandae quod, beatae culpa consequatur ducimus harum, impedit modi.</p>
              <div class="course-detail">
                <h1>{{ $course->nama_kursus }}</h1>
                <img src="{{ asset($course->foto_kursus) }}" alt="Foto Kursus">
                <p>Pengajar: {{ $course->nama_pengajar }}</p>
                <p>Deskripsi: {{ $course->deskripsi }}</p> <!-- Pastikan ada kolom 'deskripsi' di model -->
                <p>Harga: Rp{{ number_format($course->harga, 0, ',', '.') }}</p>
                <p>Slot Tersedia: {{ $course->stok }}</p>
                <!-- Tambahkan elemen lain sesuai kebutuhan -->
            </div>
              <button onclick="location.href='{{ route('auth') }}'">Daftar Kursus</button>
            </div>
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