
<!DOCTYPE html>

<html lang="en">
<head>
<base href="./">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
<meta name="description" content="CoreUI - Bootstrap Admin Template">
<meta name="author" content="Łukasz Holeczek">
<meta name="keyword" content="Bootstrap,Admin,Template,SCSS,HTML,RWD,Dashboard">
<title>CoreUI Bootstrap Admin Template</title>
<link rel="apple-touch-icon" sizes="57x57" href="assets/favicon/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="assets/favicon/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="assets/favicon/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="assets/favicon/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="assets/favicon/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="assets/favicon/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="assets/favicon/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="assets/favicon/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="assets/favicon/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192" href="assets/favicon/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="assets/favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="assets/favicon/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="assets/favicon/favicon-16x16.png">
<link rel="manifest" href="assets/favicon/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="assets/favicon/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/prismjs@1.23.0/themes/prism.css">
<link rel="stylesheet" href="vendors/simplebar/css/simplebar.css">
<link rel="stylesheet" href="css/vendors/simplebar.css">

<link href="css/style.css" rel="stylesheet">

<script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-118965717-1"></script>
<script>
      window.dataLayer = window.dataLayer || [];

      function gtag() {
        dataLayer.push(arguments);
      }
      gtag('js', new Date());
      gtag('config', 'UA-118965717-1');
    </script>
</head>
<body>
<div class="bg-light min-vh-100 d-flex flex-row align-items-center">
<div class="container">
<div class="row justify-content-center">
<div class="col-md-6">
<div class="card mb-4 mx-4">
<div class="card-body p-4">
<h1>Register</h1>
<p class="text-medium-emphasis">Create your account</p>
<div class="input-group mb-3"><span class="input-group-text">
<svg class="icon">
<use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-user"></use>
</svg></span>
<input class="form-control" type="text" placeholder="Username">
</div>
<div class="input-group mb-3"><span class="input-group-text">
<svg class="icon">
<use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-envelope-open"></use>
</svg></span>
<input class="form-control" type="text" placeholder="Email">
</div>
<div class="input-group mb-3"><span class="input-group-text">
<svg class="icon">
 <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-lock-locked"></use>
</svg></span>
<input class="form-control" type="password" placeholder="Password">
</div>
<div class="input-group mb-4"><span class="input-group-text">
<svg class="icon">
<use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-lock-locked"></use>
</svg></span>
<input class="form-control" type="password" placeholder="Repeat password">
</div>
<button class="btn btn-block btn-success" type="button">Create Account</button>
</div>
</div>
</div>
</div>
</div>
</div>

<script src="vendors/@coreui/coreui-pro/js/coreui.bundle.min.js"></script>
<script src="vendors/simplebar/js/simplebar.min.js"></script>
<script>
      if (document.body.classList.contains('dark-theme')) {
        var element = document.getElementById('btn-dark-theme');
        if (typeof(element) != 'undefined' && element != null) {
          document.getElementById('btn-dark-theme').checked = true;
        }
      } else {
        var element = document.getElementById('btn-light-theme');
        if (typeof(element) != 'undefined' && element != null) {
          document.getElementById('btn-light-theme').checked = true;
        }
      }

      function handleThemeChange(src) {
        var event = document.createEvent('Event');
        event.initEvent('themeChange', true, true);

        if (src.value === 'light') {
          document.body.classList.remove('dark-theme');
        }
        if (src.value === 'dark') {
          document.body.classList.add('dark-theme');
        }
        document.body.dispatchEvent(event);
      }
    </script>
<script src="https://cdn.jsdelivr.net/npm/prismjs@1.23.0/prism.js"></script>
<script src="https://cdn.jsdelivr.net/npm/prismjs@1.23.0/plugins/autoloader/prism-autoloader.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/prismjs@1.23.0/plugins/unescaped-markup/prism-unescaped-markup.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/prismjs@1.23.0/plugins/normalize-whitespace/prism-normalize-whitespace.js"></script>
<script>
    </script>
</body>
</html>