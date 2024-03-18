<!DOCTYPE html>
<html lang="en" >

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="etender">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>E-Tendering</title>

    <!-- Bootstrap core CSS -->
    <link href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('vendor/bootstrap/css/bootstrap.css')}}" rel="stylesheet">




    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="{{asset('assets/css/tender.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/fontawesome.css')}}">

    <link rel="stylesheet" href="{{asset('assets/css/owl.css')}}">
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
              <li><a href="{{route('singin')}}" >Sing Up</a></li>
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
              <li class="nav-item active">
                <a class="nav-link" href="{{url('/')}}">الرائيسي
                  <span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('about')}}">حول المنصة</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('service_register')}}">خدمات التسجيل</a>
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
    <!-- Banner Starts Here -->
    <div class="main-banner header-text" id="top">
        <div class="Modern-Slider">
          <!-- Item -->
          <div class="item item-1">
            <div class="img-fill">
                <div class="text-content">
                  <h6>E-Tendering</h6>
                  <h4>المنصة الالكترونية للعطاءات<br> والمناقصات</h4>
                  <p> المناقصات الليبية هي مزود معلومات المناقصات عبر الإنترنت  <br> تساعد الشركات في العثور على فرص عمل في ليبيا.</p>
                  <a href="about.html" class="filled-button">حول المنصة</a>
                </div>
            </div>
          </div>
          <!-- // Item -->




          <!-- Item -->
          <div class="item item-2">
            <div class="img-fill">
                <div class="text-content">
                  <h6>E-Tendring</h6>
                  <h4>التسجيل <br> الحسابات &amp;</h4>
                  <p>  تقدم المنصة العديد من الخدمات لمختلف الجهات الحكومية والشركات الخاصة<br>  مما يعزز الشراكة بينهم لتحقيق مستهدفات المشاريع التنموية وتمكينًا للتحول الرقمي <br> لتلك الخدمات، ورفع الشفافية والكفاءة، وتسهيلًا لإجراء الخدمات </p>
                  <a href="services.html" class="filled-button">التفاصيل</a>
                </div>
            </div>
          </div>
          <!-- // Item -->



          <!-- Item -->
          <div class="item item-3">
            <div class="img-fill">
                <div class="text-content">
                  <h6>E-Tendering</h6>
                  <h4>تواصل معانا</h4>
                  <p> نسعد بتواصلكم من خلال وسائل عدة تضمن سرعة <br> وصول مقترحاتكم وآرائكم والاستجابة معها بكل موثوقية وشفافية </p>
                  <a href="contact.html" class="filled-button">تواصل معانا</a>
                </div>
            </div>
          </div>
          <!-- // Item -->
        </div>
    </div>
    <!-- Banner Ends Here -->




<!-------------------conect us------------------------->
    <div class="request-form">
      <div class="container">
        <div class="row">


          <div class="col-md-8">
            <h4>هل تملك حساب في المنصة ؟</h4>
            <span>اذا كنت تملك حساب سابق في المنصة يمكنك تسجيل الدخول</span>
          </div>

          <div class="col-md-4">
            <a href="{{route('singin')}}" class="border-button">تسجيل الدخول</a>
          </div>

        </div>
      </div>
    </div>



    <!--------------------------------------who we are ------------------------------>
    <div class="more-info1">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="more-info-content1">
              <div class="row">
                <div class="col-md-6">
                  <div class="left-image1">
                    <img src="{{asset('assets/images/blog-img.jpg')}}" alt="">
                  </div>
                </div>
                <div class="col-md-6 align-self-center">
                  <div class="right-content1">
                    <span>من نحن</span>
                    <h2>المنصة الالكترونية للعطاءات <em>والمناقصات</em></h2>
                    <p> هي منصة رائدة على الإنترنت توفر معلومات شاملة عن المناقصات ، وتمكين الشركات في جميع أنحاء العالم من فتح فرص تجارية مربحة في ليبيا. من خلال قاعدة بياناتنا الواسعة وواجهتنا سهلة الاستخدام ، نقوم بربط الشركات العالمية بفرص المناقصات القيمة في ليبيا ، مما يسهل التجارة الدولية ويعزز النمو الاقتصادي</p>
                    <a href="about.html" class="filled-button">المزيد</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!----------------------------------service----------------------------->
    <div class="services">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>بماذا ساهمت <em>المنصة</em></h2>
            </div>
          </div>

          <div class="col-md-4">
            <div class="service-item">
              <img src="assets/images/User-management-icon-1.svg" alt="">
              <div class="down-content">
                <p>تمكين الشركات من خلال الحصول على رؤية في الوقت المناسب بشأن المناقصات العامة في ليبيا</p>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="service-item">
              <img src="assets/images/Dev-portal-icon.svg" alt="">
              <div class="down-content">
                <p > لاعلان عن العطاء وتحقيق اقصى قدرة لظهور العطاءات وزيادة الشفافية في المنافسات الحكومية</p>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="service-item">
              <img src="assets/images/Reports-icon.svg" alt="">
              <div class="down-content">
                <p>
                  تقديم مساعدة شاملة في اعداد وثائق العطاء
                  وتسهيل الاجراءات وتوحيدها</p>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>


    <!-----------------------------------------------الاحصائيات------------------------------------------->
    <div class="fun-facts">
      <div class="container">
        <div class="row">

          <div class="col-md-6">
            <div class="left-content">
              <span>منذ انطلاق المنصة</span>
              <h2>اهم الاحصائيات في <br><em> المنصة </em></h2>
            </div>
          </div>


          <div class="col-md-6 align-self-center">
            <div class="row">
              <div class="col-md-6">
                <div class="count-area-content">
                  <div class="count-digit">45</div>
                  <div class="count-title">مستخدم جهة حكومية</div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="count-area-content">
                  <div class="count-digit">1280</div>
                  <div class="count-title"> ملفات تقديم الطلب</div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="count-area-content">
                  <div class="count-digit">578</div>
                  <div class="count-title"> المنافسات المطروحة </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="count-area-content">
                  <div class="count-digit">126</div>
                  <div class="count-title">مستخدم شركات</div>
                </div>
              </div>
            </div>
          </div>


        </div>
      </div>
    </div>
<!--------------------------------------------------------------------------------------------------------------->


		   <!-- rigeter........................ -->


  <div class="body2">
    <div class="container">
      <input type="radio" name="dot" id="one" />
      <input type="radio" name="dot" id="two" />

      <div class="button">
        <label for="one" class="active one">للموؤسسات</label>
        <label for="two" class="two">لشركات</label>
      </div>

    <div class="main-card">

    <div class="content">

      <div class="card one">
        <div class="top">
          <div class="title">لوحة التحكم</div>

        </div>
        <div class="info">يمكنك الوصول إلى لوحة تحكم سهلة الاستخدام تتيح لك إدارة وتتبع العطاء المعلن عنه بسهولة. يتضمن ذلك ميزات مثل الإحصائيات في الوقت الفعلي حول طرق عرض المناقصة والاستجابا ، مما يساعدك على تقييم أداء عطائك</div>
        <div class="details">
        </div>
      </div>

      <div class="card two">
        <div class="top">
          <div class="title"> تحميل مستندات</div>
        </div>
        <div class="info">  امكانية تحميل وثائق المناقصة مباشرة إلى منصتنا ، مما يلغي الحاجة إلى مشاركة المستندات بشكل منفصل وتبسيط عملية مشاركة مستندات المناقصة لمقدمي العروض المحتملين ، كما يمكنك مراقبة عدد التنزيلات لكل مستند </div>


      </div>
      <div class="card three">
        <div class="top">
          <div class="title"> ادارة المناقصات </div>
        </div>

        <div class="info"> يمكنك إنشاء وحفظ مناقصة كمسودة ، وإجراء مراجعات قبل نشرها بمجرد نشرها ، تصبح مناقصتك مرئية لمقدمي العروض المحتملين. بعد ترسية المناقصة على مقدم العطاء الفائز ، يمكنك تحديث حالتها إلى "تمت ترسيتها". </div>

      </div>
    </div>






    <div class="content">

      <div class="card one">
        <div class="top">
          <div class="title">لوحة التحكم</div>

        </div>
        <div class="info">يمكنك الوصول إلى لوحة تحكم سهلة الاستخدام تتيح لك إدارة وتتبع العطاء المعلن عنه بسهولة. يتضمن ذلك ميزات مثل الإحصائيات  حول طرق عرض المناقصة مما يساعدك على تقييم عطائك</div>
        <div class="details">
        </div>
      </div>

      <div class="card two">
        <div class="top">
          <div class="title">  واجهة سهلة الاستخدام</div>
        </div>
        <div class="info">   توفير واجهة سهلة الاستخدام تجعل من السهل على المستخدمين التنقل واستخدام المنصة. تم تصميم النظام الأساسي ليكون بديهيا وسهل الاستخدام ، مما يضمن أن المستخدمين يمكنهم الوصول بسرعة وسهولة إلى معلومات المناقصة التي يحتاجون إليها. </div>


      </div>
      <div class="card three">
        <div class="top">
          <div class="title">  الاشعارات</div>
        </div>

        <div class="info">
            إعداد تنبيهات لتلقي الإخطارات كلما تم نشر مناقصة جديدة أو تحديث مناقصة موجودة. وهذا يضمن بقاء المستخدمين على اطلاع دائم بأحدث فرص الشراء في ليبيا ويمكنهم الاستجابة الفورية للمناقصات الجديدة</div>

      </div>
    </div>






  </div>

  </div>
  </div>



    <!--------------------------------------------------------------------->

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
                <img src="assets/images/client-01.png" title="1" alt="1">
              </div>

              <div class="partner-item">
                <img src="assets/images/client-01.png" title="2" alt="2">
              </div>

              <div class="partner-item">
                <img src="assets/images/client-01.png" title="3" alt="3">
              </div>

              <div class="partner-item">
                <img src="assets/images/client-01.png" title="4" alt="4">
              </div>

              <div class="partner-item">
                <img src="assets/images/client-01.png" title="5" alt="5">
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>


    <!-- Footer Starts Here -->




		  <!-------------------------------------- footer -------------------------------------------->


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
            <h6>© 2024 - E-tendering,All Right Reserved</h6>

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
