<!DOCTYPE html>
<html lang="en" dir="rtl">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title> انشاء حساب</title>

    <!-- CSS -->
    <link rel="stylesheet" href="{{asset('assets/for_goverment/style.css')}}" />
    <link rel="stylesheet" href="font/fontawsem/css/all.min.css" />

    <!-- Boxicons CSS -->
    <link
      href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css"
      rel="stylesheet"
    />

   <!-- Fontawesome CDN Link -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
   <meta name="viewport" content="width=device-width, initial-scale=1.0" />


  </head>
  <body>


    <div class="container">
      <header> نموذج التسجيل </header>
      <hr>
      <h2><a href="{{route('service_register')}}"> خدمات التسجيل </a> > تسجيل جهة حكومية</h2>


      <form action="">

      <div class="dbl-field">

        <div class="field">
          <label for="">اسم الجهة :</label>
          <input type="text" name="name" >
        </div>

        <div class="field">
          <label>نشاط الجهة :</label>
                            <select required>
                                <option disabled selected>Select gender</option>
                                <option>Male</option>
                                <option>Female</option>
                                <option>Others</option>
                            </select>
        </div>

      </div>


      <div class="dbl-field">
        <div class="field">
          <label for="">رقم الهاتف :</label>
          <input type="text" name="phone" >
        </div>

        <div class="field">
          <label for="">العنوان :</label>
          <input type="text" name="website" >
          <i class='fa-solid fa-location-dot'></i>
        </div>

       </div>



        <div class="field email-field">
          <div class="input-field">
            <label for="">البريد الالكتروني :</label><br>
            <input type="email" class="email" />
          </div>
          <span class="error email-error">
            <i class="bx bx-error-circle error-icon"></i>
            <p class="error-text">Please enter a valid email</p>
          </span>
        </div>


        <div class="field create-password">
          <div class="input-field">
            <label for="">كلمة المرور :</label><br>
            <input type="password" class="password"/>
          </div>
          <span class="error password-error">
            <i class="bx bx-error-circle error-icon"></i>
            <p class="error-text">
              Please enter atleast 8 charatcer with number, symbol, small and
              capital letter.
            </p>
          </span>
        </div>


        <div class="field confirm-password">
          <div class="input-field">
            <label for="">تأكيد كلمة المرور :</label><br>
            <input
              type="password"
              class="cPassword"
            />
          </div>
          <span class="error cPassword-error">
            <i class="bx bx-error-circle error-icon"></i>
            <p class="error-text">Password don't match</p>
          </span>
        </div>




        <div class="input-button">
          <button class="sub">ارسال</button>
        </div>


      </form>
    </div>

    <!-- JavaScript -->
    <script src="{{asset('assets/for_goverment/script1.js')}}"></script>
  </body>
</html>
