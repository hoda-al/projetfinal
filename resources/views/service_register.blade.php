<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>خدمات التسجيل</title>

    <!-- Bootstrap core CSS -->
    <link href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="{{asset('assets/css/tender.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/owl.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/fontawesome.css')}}">


  </head>

  <body>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    <!-- ***** Preloader End ***** -->

    <!-- Header -->

    <div class="sub-header">
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-xs-12">
            <ul class="left-info">
              <li><a href="{{route('singin')}}">Sing Up</a></li>
            </ul>
          </div>
          <div class="col-md-4">
            <ul class="right-icons">
              <li><a href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>




    <header class="">
      <nav class="navbar navbar-expand-lg">
        <div class="container">
          <a class="navbar-brand" href="index.html"><h2>E-Tendering</h2></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item ">
                <a class="nav-link" href="{{route('index')}}">الرائيسي
                  <span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-item ">
                <a class="nav-link" href="{{route('about')}}">حول المنصة</a>
              </li>
              <li class="nav-item active" >
                <a class="nav-link" href="{{route('register')}}"> التسجيل</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('contact')}}">تواصل معانا</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">العطاءات</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>

    <!-- Page Content -->
    <div class="page-heading header-text">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1>خدمات التسجيل</h1>
            <span>توفر المنصة انشاء حسابات للموردين والموؤسسات</span>
          </div>
        </div>
      </div>
    </div>

    <div class="single-services" >
      <div class="container">
        <div class="row" id="tabs">

          <div class="col-md-4">
            <ul>
              <li><a href='#tabs-1'><i class="fa fa-angle-left"></i> تسجيل جهة حكومية </a></li>
              <li><a href='#tabs-2'><i class="fa fa-angle-left"></i> تسجيل مورد </a></li>
            </ul>
          </div>

          <div class="col-md-8">
            <section class='tabs-content'>
              <article id='tabs-1'>
                <img src="{{asset('assets/images/single_service_01.jpg')}}" alt="">
                <h4>  تسجيل موؤسسة / .ly </h4>
                <p>توفر  المنصة لوحة تحكم شاملة للشركات لإدارة مناقصاتها المعلن عنها ، مما يسمح لها باستهداف مقدمي العطاءات المحتملين والتفاعل معهم بشكل فعال.و توفر واجهة سهلة الاستخدام لتتبع وإدارة الاستجابات للمناقصات ، مما يضمن إدارة العطاءات بكفاءة </p>
                <a href="{{route('goverment')}}" class="login-button">تسجيل</a>
              </article>

              <article id='tabs-2'>
                <img src="{{asset('assets/images/single_service_02.jpg')}}" alt="">
                <h4> تسجيل مورد </h4>
                <p>تقدم العديد من الخدمات للقطاع الخاص التي تهدف إلى رفع نسبة المشاركة في المنافسات والمشتريات الحكومية، وزيادة دور المحتوى المحلي في التنمية الاقتصادية ورفع مساهمة المنشآت الصغيرة والمتوسطة</p>
                <a href="{{route('company')}}" class="login-button">تسجيل</a>
              </article>



            </section>
          </div>


        </div>
      </div>
    </div>


    <!----------------------------------content us------------------------>
    <div class="contact">
      <div class="container">
         <div class="row">
            <div class="col-md-12 ">
               <div class="titlepage text_align_center">
                  <h2>تواصل <em>معانا</em> </h2>
               </div>
            </div>
            <div class="col-md-8 offset-md-2">
               <form id="request" class="main_form">
                  <div class="row">
                     <div class="col-md-12 ">
                        <input class="cont_in" placeholder=" الاسم بالكامل "  type="type" name=" Name">
                     </div>
                     <div class="col-md-12">
                        <input class="cont_in" placeholder=" البريد الالكتروني" type="type" name="Email">
                     </div>
                     <div class="col-md-12">
                        <input class="cont_in" placeholder=" رقم الهاتف" type="type" name="Phone Number">
                     </div>
                     <div class="col-md-12">
                        <textarea class="textarea2"  placeholder=" تفاصيل الطلب" type="type" name="Message"> </textarea>
                     </div>
                     <div class="col-md-12">
                        <button class="send_btnt">ارسال</button>
                     </div>
                  </div>
               </form>
            </div>
         </div>
      </div>
   </div>

    <div class="partners">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="owl-partners owl-carousel">
              <div class="partner-item">
                <img src="assets/images/client-01.png" alt="">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


    <!-- Footer Starts Here -->

    <footer>
      <div class="container1">
        <div class="row1">
        <div class="col-12">
          <h5>E-Tendering</h5>
          <h4>المنصة الالكترونية للعطاءات </h4>
          <ul class="contact-nav">
          <li><a data-scroll href="{{route('index')}}"> الرائيسي </a></li>
          <li><a data-scroll href="{{route('about')}}"> حول المنصة</a></li>
          <li><a data-scroll href="{{route('service_register')}}"> التسجيل </a></li>
          <li><a data-scroll href="#blog"> العطاءات </a></li>
          <li><a data-scroll href="{{route('contact')}}"> تواصل معانا </a></li>
          </ul>
          <h6>© 2024 - E-tendering ,All Right Reserved</h6>

          <ul class="social-icons">
            <li><a href="" target="_blank"><i class="fa fa-facebook"></i></a></li>
            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
          </ul>
        </div>
        </div>
      </div>
      </footer>

     <!-- Bootstrap core JavaScript -->
     <script src= "{{asset('vendor/jquery/jquery.min.js')}}"></script>
     <script src= "{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

     <!-- Additional Scripts -->
     <script src= "{{asset('assets\js\custom.js')}}"></script>
     <script src= "{{asset('assets\js\owl.js')}}"></script>
     <script src= "{{asset('assets\js\slick.js')}}"></script>
     <script src= "{{asset('assets\js\accordions.js')}}"></script>
     <script src= "{{asset('assets\js\jquery.singlePageNav.min.js')}}"></script>


    <script language = "text/Javascript">
      cleared[0] = cleared[1] = cleared[2] = 0;
      function clearField(t){
      if(! cleared[t.id]){
          cleared[t.id] = 1;
          t.value='';
          t.style.color='#fff';
          }
      }
    </script>

  </body>
</html>
