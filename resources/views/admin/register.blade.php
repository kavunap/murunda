<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

    <title>Hendukirwa muri byose</title>

    <meta name="description" content="discount in all services and products you need in your life like in fuel station, restaurant, and hotels.">
    <meta name="author" content="hendukirwa ktd">
    <meta name="robots" content="hendukirwa muri byose">

    <!-- Open Graph Meta -->
    <meta property="og:title" content="hendukirwa muri byose - igabanyirizwa cg discount muri services zose wakenera mubuzima">
    <meta property="og:site_name" content="hendukirwa ltd">
    <meta property="og:description" content="hendukirwa - igabanyirizwa muri fuel station, air ticket, restaurant, market, ">
    <meta property="og:type" content="website">
    <meta property="og:url" content="hendukirwa">
    <meta property="og:image" content="hendukirwa">

    <!-- Icons -->
    <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
    <link rel="shortcut icon" href="{{ asset('web/images/logo.png') }}">
    <link rel="icon" type="image/png" sizes="192x192" href="{{ asset('web/images/logo.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('web/images/logo.png') }}">
    <!-- END Icons -->

    <!-- Stylesheets -->
    <!-- Fonts and Dashmix framework -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap">
    <link rel="stylesheet" id="css-main" href="assets/css/dashmix.min.css">

    <!-- You can include a specific file from css/themes/ folder to alter the default color theme of the template. eg: -->
    <!-- <link rel="stylesheet" id="css-theme" href="assets/css/themes/xwork.min.css"> -->
    <!-- END Stylesheets -->
  </head>
  <body>
    <!-- Page Container -->
    <!--
      Available classes for #page-container:

      GENERIC

        'remember-theme'                            Remembers active color theme and dark mode between pages using localStorage when set through
                                                    - Theme helper buttons [data-toggle="theme"],
                                                    - Layout helper buttons [data-toggle="layout" data-action="dark_mode_[on/off/toggle]"]
                                                    - ..and/or Dashmix.layout('dark_mode_[on/off/toggle]')

      SIDEBAR & SIDE OVERLAY

        'sidebar-r'                                 Right Sidebar and left Side Overlay (default is left Sidebar and right Side Overlay)
        'sidebar-mini'                              Mini hoverable Sidebar (screen width > 991px)
        'sidebar-o'                                 Visible Sidebar by default (screen width > 991px)
        'sidebar-o-xs'                              Visible Sidebar by default (screen width < 992px)
        'sidebar-dark'                              Dark themed sidebar

        'side-overlay-hover'                        Hoverable Side Overlay (screen width > 991px)
        'side-overlay-o'                            Visible Side Overlay by default

        'enable-page-overlay'                       Enables a visible clickable Page Overlay (closes Side Overlay on click) when Side Overlay opens

        'side-scroll'                               Enables custom scrolling on Sidebar and Side Overlay instead of native scrolling (screen width > 991px)

      HEADER

        ''                                          Static Header if no class is added
        'page-header-fixed'                         Fixed Header


      FOOTER

        ''                                          Static Footer if no class is added
        'page-footer-fixed'                         Fixed Footer (please have in mind that the footer has a specific height when is fixed)

      HEADER STYLE

        ''                                          Classic Header style if no class is added
        'page-header-dark'                          Dark themed Header
        'page-header-glass'                         Light themed Header with transparency by default
                                                    (absolute position, perfect for light images underneath - solid light background on scroll if the Header is also set as fixed)
        'page-header-glass page-header-dark'         Dark themed Header with transparency by default
                                                    (absolute position, perfect for dark images underneath - solid dark background on scroll if the Header is also set as fixed)

      MAIN CONTENT LAYOUT

        ''                                          Full width Main Content if no class is added
        'main-content-boxed'                        Full width Main Content with a specific maximum width (screen width > 1200px)
        'main-content-narrow'                       Full width Main Content with a percentage width (screen width > 1200px)

      DARK MODE

        'sidebar-dark page-header-dark dark-mode'   Enable dark mode (light sidebar/header is not supported with dark mode)
    -->
    <div id="page-container">

      <!-- Main Container -->
      <main id="main-container">

        <!-- Page Content -->
        <div class="bg-image" style="background-image: url('assets/media/photos/photo14@2x.jpg');">
          <div class="row g-0 justify-content-center bg-black-75">
            <div class="hero-static col-sm-8 col-md-6 col-xl-10 d-flex align-items-center p-2 px-sm-0">
              <!-- Sign Up Block -->
              <div class="block block-transparent block-rounded w-100 mb-0 overflow-hidden">
                <div class="block-content block-content-full px-lg-5 px-xl-6 py-4 py-md-5 py-lg-6 bg-body-extra-light">
                  <!-- Header -->
                  <div class="mb-2 text-center">
                    <a class="link-fx fw-bold fs-1" href="/">
                      <img src="{{ asset('web/images/logo.png') }}" height="100px" height="100px">
                    </a><br>
                    <p class="text-uppercase fw-bold fs-sm text-muted">Create New Account</p>
                  </div>
                  <!-- END Header -->

                  <!-- Sign Up Form -->
                  <!-- jQuery Validation (.js-validation-signup class is initialized in js/pages/op_auth_signup.min.js which was auto compiled from _js/pages/op_auth_signup.js) -->
                  <!-- For more info and examples you can check out https://github.com/jzaefferer/jquery-validation -->
                  <form class="js-validation-signup" action="{{ route('registration.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                      <div class="col-sm-6">
                        <div class="auth-form">
                          <h4 class="text-center mb-4">Basic Information</h4>
                          
                              <div class="form-group">
                                  <label class="mb-1"><strong>First and Last names</strong></label>
                                  <input type="text" class="form-control" placeholder="username" name="name" value="{{ old('name') }}">
                                  @error('name')
                                  <span style="color:red;">{{ $message }}</span>
                                  @enderror
                              </div>
                              <div class="form-group">
                                  <label class="mb-1"><strong>Email</strong></label>
                                  <input type="email" class="form-control" placeholder="hello@example.com" name="email" value="{{ old('email') }}">
                                  @error('email')
                                  <span style="color:red;">{{ $message }}</span>
                                  @enderror
                              </div>
                              
  
                              <div class="row">
                                  <div class="col-sm-6">
                                      <div class="form-group">
                                          <label class="mb-1"><strong>Phone number</strong></label>
                                          <input type="number" class="form-control" placeholder="07822...." name="phone" value="{{ old('phone') }}">
                                          @error('phone')
                                              <span style="color:red;">{{ $message }}</span>
                                          @enderror
                                      </div>
                                  </div>
                                  <div class="col-sm-6">
                                      <div class="form-group">
                                          <label class="mb-1"><strong>Prefix</strong></label>
                                          <select name="prefix" id="" class="form-control">
                                              <option disabled selected value> -- select an Prefix -- </option>
                                              <option value="Dr.">Dr.</option>
                                              <option value="Mr.">Mr.</option>
                                              <option value="Mrs.">Mrs.</option>
                                              <option value="Miss.">Miss</option>
                                          </select>
                                          @error('prefix')
                                          <span style="color:red;">{{ $message }}</span>
                                          @enderror
                                      </div>
                                  </div>
                              </div>
  
                              <div class="row">
                                  <div class="col-sm-6">
                                      <div class="form-group">
                                          <label class="mb-1"><strong>User role</strong></label>
                                          <select name="user_role" id="" class="form-control">
                                              <option disabled selected value> -- Select an Role -- </option>
                                              <option value="user">User</option>
                                              <option value="hr">Human resource</option>
                                              <option value="admin">Admin</option>
                                          </select>
                                          @error('user_role')
                                          <span style="color:red;">{{ $message }}</span>
                                          @enderror
                                      </div>
                                  </div>
                                  <div class="col-sm-6">
                                      <div class="form-group">
                                          <label class="mb-1"><strong>Title</strong></label>
                                          <select name="title" id="" class="form-control">
                                              <option disabled selected value> -- Select an Title -- </option>
                                              <option value="nurse">Nurse</option>
                                              <option value="department_h">Head of department</option>
                                              <option value="doctor">Doctor</option>
                                          </select>
                                          @error('title')
                                          <span style="color:red;">{{ $message }}</span>
                                          @enderror
                                      </div>
                                  </div>
                              </div>
  
                              <div class="row">
                                  <div class="col-sm-6">
                                      <div class="form-group">
                                          <label class="mb-1"><strong>Password</strong></label>
                                          <input type="password" class="form-control" name="password" value="{{ old('password') }}">
                                          @error('password')
                                          <span style="color:red;">{{ $message }}</span>
                                          @enderror
                                      </div>
                                  </div>
                                  <div class="col-sm-6">
                                      <div class="form-group">
                                          <label class="mb-1"><strong>Password confirmation</strong></label>
                                          <input type="password" class="form-control" name="password_confirmation" value="{{ old('password_confirmation') }}">
                                          @error('password_confirmarion')
                                          <span style="color:red;">{{ $message }}</span>
                                          @enderror
                                      </div>
                                  </div>
                              </div>
                      </div>
                      </div>
                      <div class="col-sm-6">
                        <div class="auth-form">
                          <h4 class="text-center mb-4">More details
                          {{-- <form action="{!! url('/index'); !!}"> --}} <br><br>
                              <div class="row">
                                  <div class="col-sm-6">
                                      <div class="form-group">
                                          <label class="mb-1"><strong>Picture</strong></label>
                                          <input type="file" class="form-control" name="image" accept=".jpeg, .png, .gif, .jpg, .tiff" value="{{ old('image') }}">
                                          @error('image')
                                          <span style="color:red;">{{ $message }}</span>
                                          @enderror
                                      </div>
                                  </div>
                                  <div class="col-sm-6">
                                      <div class="form-group">
                                          <label class="mb-1"><strong>Signature</strong></label>
                                          <input type="file" class="form-control" name="signature" accept=".jpeg, .png, .gif, .jpg, .tiff">
                                          @error('signature')
                                          <span style="color:red;">{{ $message }}</span>
                                          @enderror
                                      </div>
                                  </div>
                              </div>
                              <div class="row">
                                  <div class="col-sm-6">
                                      <div class="form-group">
                                          <label class="mb-1"><strong>Stamp</strong></label>
                                          <input type="file" class="form-control" name="stamp" accept=".jpeg, .png, .gif, .jpg, .tiff">
                                          @error('stamp')
                                          <span style="color:red;">{{ $message }}</span>
                                          @enderror
                                      </div>
                                  </div>
                                  <div class="col-sm-6">
                                      <div class="form-group">
                                          <label class="mb-1"><strong>Department</strong></label>
                                          {!! Form::select('department_id', $departments, null, ['class' => 'form-control']) !!}
                                          @error('department_id')
                                          <span style="color:red;">{{ $message }}</span>
                                          @enderror
                                      </div>
                                  </div>
                              </div>
                              <div class="form-group">
                                  <label class="mb-1"><strong>Qualifications</strong></label>
                                  <textarea name="qualifications" class="form-control" cols="30" rows="6" placeholder="Describe your qualification or about you in short">{{ old('qualifications') }}</textarea>
                              </div> <br>
                              <div class="text-center">
                                  <button type="submit" class="btn btn-primary btn-block" id="toastr-success-top-right">Sign Me Up</button>
                              </div>
                              
                          
                          <div class="new-account mt-3">
                              <p>Already have an account? <a class="text-primary" href="{!! url('/login'); !!}">Sign in</a></p>
                          </div>
                      </div>
                      </div>
                    </div>
                    
                  <!-- END Sign Up Form -->
                </div>
              </div>
            </div>
            <!-- END Sign Up Block -->
          </div>

        </div>
        <!-- END Page Content -->
      </main>
      <!-- END Main Container -->
    </div>
    <!-- END Page Container -->

    <!--
      Dashmix JS
      

      Core libraries and functionality
      webpack is putting everything together at assets/_js/main/app.js
    -->
    <script>
      function yesnoCheck(that) {
          if (that.value == "Partner") {
        alert("You said you are the parter, please select your partnership category");
              document.getElementById("ifYes").style.display = "block";
          } else {
              document.getElementById("ifYes").style.display = "none";
          }
      }
    </script>
    
    <script src="assets/js/dashmix.app.min.js"></script>

    <!-- jQuery (required for jQuery Validation plugin) -->
    <script src="assets/js/lib/jquery.min.js"></script>

    <!-- Page JS Plugins -->
    <script src="assets/js/plugins/jquery-validation/jquery.validate.min.js"></script>

    <!-- Page JS Code -->
    <script src="assets/js/pages/op_auth_signup.min.js"></script>
  </body>
</html>
