<!DOCTYPE html>
<html lang="en" dir="rtl">
  <head>
    <meta charset="utf-8">
    <title>login for company</title>
    <link rel="stylesheet" href="{{asset('assets/for_company/style.css')}}">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
       <!-- Fontawesome CDN Link -->
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
       <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  </head>



  <body>
    <div class="container">
      <header> نموذج التسجيل </header>
      <hr>
      <h2><a href="{{route('service_register')}}"> خدمات التسجيل </a> > تسجيل مورد</h2>
      <div class="progress-bar">
        <div class="step">
          <p>Name</p>
          <div class="bullet">
            <span>1</span>
          </div>
          <div class="check fas fa-check"></div>
        </div>
        <div class="step">
          <p>ducemont</p>
          <div class="bullet">
            <span>2</span>
          </div>
          <div class="check fas fa-check"></div>
        </div>
        <div class="step">
          <p>submit</p>
          <div class="bullet">
            <span>3</span>
          </div>
          <div class="check fas fa-check"></div>
        </div>

      </div>


      <div class="form-outer">
        <form action="#">
          <div class="page slide-page">



            <div class="dbl-field">
              <div class="field">
                  <label for="">اسم الشركة :</label>
                  <input type="text" name="name">
              </div>

              <div class="field">
                  <label>الشكل القانوني</label>
                  <select required>
                      <option disabled selected>Select item</option>
                      <option>Male</option>
                      <option>Female</option>
                      <option>Others</option>
                  </select>
              </div>

          </div>


          <div class="dbl-field">
              <div class="field">
                  <label for="">رقم الهاتف :</label>
                  <input type="text" name="phone">
              </div>

              <div class="field">
                  <label for="">عنوان الشركة :</label>
                  <input type="text" name="website">
              </div>

          </div>

          <div class="dbl-field">
              <div class="field">
                  <label for="">البريد الالكتروني :</label>
                  <input type="text" name="email">

                  <span class="error email-error">
          <i class="bx bx-error-circle error-icon"></i>
        </span>
              </div>


          </div>

          <div class="dbl-field">
              <div class="field">
                  <label for=""> رقم الرخصة التجارية :</label>
                  <input type="password" name="phone">
              </div>

              <div class="field">
                  <label for="">تاريخ الرخصة التجارية :</label>
                  <input type="date" name="phone">
              </div>
          </div>


          <div class="dbl-field">
              <div class="field">
                  <label for=""> اسم المخول :</label>
                  <input type="password" name="phone">
              </div>

              <div class="field">
                  <label for=""> صفة المخول :</label>
                  <input type="password" name="phone">
              </div>
          </div>
            <div class="field">
              <button class="firstNext next">Next</button>
            </div>
          </div>




          <div class="page">

            <div class="commants">
              <h1>شروط التسجيل: (يرجي تحميل المستندات في ملف واحد ) :</h1>
              <p>
                  <ol>
                      <li>صورة عن رخصة المزاولة سارية المفعول</li>
                      <li>صورة عن عضوية غرفة التجارة سارية المفعول</li>
                      <li>صورة عن شهادة السجل التجاري</li>
                      <li>صورة عن اعتماد وتوقيع مصدق للشخص المخول بالتوقيع</li>
                      <li>صورة عن عقد التأسيس</li>
                      <li>البيانات المصرفية الخاصة بالشركة/ إفادة من المصرف</li>
                      <li>مستندات اثبات الوكالات التجارية</li>
                      <li>الوضع الضريبي</li>
                  </ol>
              </p>
          </div>



          <div class="ducomont">

            <label for="">تحميل المستند :</label>
            <div class="drop_box">
              <header>
                <h4>Select File here</h4>
              </header>
              <p>Files Supported: PDF, TEXT, DOC , DOCX</p>
              <input type="file" hidden accept=".doc,.docx,.pdf" id="fileID" style="display:none;"  required>
              <button class="btn">Choose File</button>
            </div>

      </div>
      <h1>ملاحظة : لن يتم التسجيل اذا لم يكن هدا الطلب مستوفيا لجميع البيانات المطلوبة اعلاه</h1>

            <div class="field btns">
              <button class="prev-1 prev">Previous</button>
              <button class="next-1 next">Next</button>
            </div>
          </div>




          <div class="page">

            <div class="field1 email-field">
              <div class="input-field">
                <label for="">البريد الالكتروني :</label><br>
                <input type="email" class="email" />
              </div>
              <span class="error email-error">
                <i class="bx bx-error-circle error-icon"></i>
                <p class="error-text">Please enter a valid email</p>
              </span>
            </div>
            <div class="field1 create-password">
              <div class="input-field">
                <label for="">كلمة المرور :</label><br>
                <input
                  type="password"

                  class="password"
                />
                <i class="bx bx-hide show-hide"></i>
              </div>
              <span class="error password-error">
                <i class="bx bx-error-circle error-icon"></i>
                <p class="error-text">
                  Please enter atleast 8 charatcer with number, symbol, small and
                  capital letter.
                </p>
              </span>
            </div>
            <div class="field1 confirm-password">
              <div class="input-field">
                <label for="">تأكيد كلمة المرور :</label><br>
                <input
                  type="password"

                  class="cPassword"
                />
                <i class="bx bx-hide show-hide"></i>
              </div>
              <span class="error cPassword-error">
                <i class="bx bx-error-circle error-icon"></i>
                <p class="error-text">Password don't match</p>
              </span>
            </div>
            <div class="field btns">
              <button class="prev-2 prev">Previous</button>
              <button class="next-2 next">Submit</button>
            </div>
          </div>


        </form>
      </div>
    </div>

    <div class="modal_wrapper">
      <div class="shadow"></div>
      <div class="success_wrap">
        <span class="modal_icon"><div class="check fas fa-check"></div></span>
        <p>You have successfully completed the process.</p>
      </div>
    </div>

    <script src="{{asset('assets/for_company/script.js')}}"></script>



  </body>
</html>
