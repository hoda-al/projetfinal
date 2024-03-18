<!DOCTYPE html>
<html lang="en">


<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>تسجيل الدخول</title>
  <link rel="stylesheet" href="{{asset('assets/sing_in/style.css')}}">
  <link rel="stylesheet" href="{{asset('assets/css/font-awesome.min.css')}}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
</head>



<body>
  <div class="wrapper">
    <header>تسجيل الدخول</header>
    <form action="#">
      <div class="field email">
        <div class="input-area">
          <input type="text" placeholder="البريد الالكتروني">
          <i class="icon fas fa-envelope"></i>
          <i class="error error-icon fas fa-exclamation-circle"></i>
        </div>
        <div class="error error-txt">Email can't be blank</div>
      </div>
      <div class="field password">
        <div class="input-area">
          <input type="password" placeholder="كلمة المرور">
          <i class="icon fas fa-lock"></i>
          <i class="error error-icon fas fa-exclamation-circle"></i>
        </div>
        <div class="error error-txt">Password can't be blank</div>
      </div>
      <div class="pass-txt"><a href="#">هل نسيت كلمة المرور ؟</a></div>
      <input type="submit" value="تسجيل دخول">
    </form>
  </div>

  <script src="{{asset('assets/sing_in/script.js')}}"></script>

</body>
</html>
