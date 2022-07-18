
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>Signin Template · Bootstrap</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/sign-in/">

    <!-- Bootstrap core CSS -->
<link href="<?=base_url('assets/css/bootstrap.css')?>" rel="stylesheet">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">
  </head>
  <body class="text-center" style="background-image:url(<?=base_url('img/bgg.png')?>)">
  <br>
  <br>
  <br>
  <br>
  <center><div class="col-md-4"><div class="card">
  <div class="col-md-12">
    <form class="form-signin" action="<?=base_url('Welcome/login_action')?>" method="post">
  <img class="mt-3 mb-4" src="<?=base_url('img/logo2.png')?>" alt="" width="92" height="92">
  <h1 class="h3 mb-3 font-weight-normal">Perkebunan Riau</h1>
  <label for="inputEmail" class="sr-only">Nama Pengguna</label>
  <input type="text" name="inputEmail" class="form-control" placeholder="Masukan nama pengguna" required autofocus><br>
  <label for="inputPassword" class="sr-only">Kata Sandi</label>
  <input type="password" name="inputPassword" class="form-control" placeholder="Masukan kata sandi" required><br>
  <button class="btn btn-lg btn-success btn-block" type="submit">MASUK</button>
  <p class="mt-5 mb-3 text-muted">SURVEI HARGA TBS DI RIAU </p>
</form></div>
</div></div></center>
</body>
</html>
