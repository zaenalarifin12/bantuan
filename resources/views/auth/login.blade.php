<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <title>
    Bantuan
  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
  <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
  <!-- Nucleo Icons -->
  <link href="{{ asset("assetLogin/css/nucleo-icons.css")}}" rel="stylesheet" />
  <link href="{{ asset("assetLogin/css/nucleo-svg.css")}}" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <link href="{{ asset("assetLogin/css/font-awesome.css")}}" rel="stylesheet" />
  <link href="{{ asset("assetLogin/css/nucleo-svg.css")}}" rel="stylesheet" />
  <!-- CSS Files -->
  <link href="{{ asset("assetLogin/css/argon-design-system.css?v=1.2.2")}}" rel="stylesheet" />
</head>

<body class="login-page" style="background-color: #23689b">
  <!-- End Navbar -->
  <section class="section section-shaped section-lg">
    <div class="container pt-lg-7">
      <div class="row justify-content-center">
        <div class="col-lg-5">
          <div class="card bg-secondary shadow border-0">
            <div class="card-header bg-white pb-5">
            </div>
            <div class="card-body px-lg-5 py-lg-5">
              <div class="text-center text-muted mb-4">
                <small>Sign In</small>
              </div>
              <form role="form" action="{{ url("/login") }}" method="POST">
                <div class="form-group mb-3">
                  <div class="input-group input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                    </div>
                    <input class="form-control" placeholder="Email" name="email" type="email">
                  </div>
                </div>
                <div class="form-group focused">
                  <div class="input-group input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                    </div>
                    <input class="form-control" placeholder="Password" name="password" type="password">
                  </div>
                </div>
                <div class="text-center">
                    @csrf
                  <button type="submit" class="btn btn-primary my-4">Sign in</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--   Core JS Files   -->
  <script src="{{ asset("assetLogin/js/core/jquery.min.js")}}" type="text/javascript"></script>
  <script src="{{ asset("assetLogin/js/core/popper.min.js")}}" type="text/javascript"></script>
  <script src="{{ asset("assetLogin/js/core/bootstrap.min.js")}}" type="text/javascript"></script>
  <script src="{{ asset("assetLogin/js/plugins/perfect-scrollbar.jquery.min.js")}}"></script>
  <!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
  <script src="{{ asset("assetLogin/js/plugins/bootstrap-switch.js")}}"></script>
  <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
  <script src="{{ asset("assetLogin/js/plugins/nouislider.min.js") }}" type="text/javascript"></script>
  <script src="{{ asset("assetLogin/js/plugins/moment.min.js") }}"></script>
  <script src="{{ asset("assetLogin/js/plugins/datetimepicker.js") }}"" type="text/javascript"></script>
  <script src="{{ asset("assetLogin/js/plugins/bootstrap-datepicker.min.js")}}"></script>
  <!-- Control Center for Argon UI Kit: parallax effects, scripts for the example pages etc -->
  <script src="{{ asset("assetLogin/js/argon-design-system.min.js?v=1.2.2")}}" type="text/javascript"></script>
  <script src="https://cdn.trackjs.com/agent/v3/latest/t.js"></script>
  <script>
    window.TrackJS &&
      TrackJS.install({
        token: "ee6fab19c5a04ac1a32a645abde4613a",
        application: "argon-design-system-pro"
      });
  </script>
</body>

</html>