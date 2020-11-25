<!DOCTYPE html>
<html lang="pt-br">
<head>
@yield('head')
<!-- include('includes.pwa.pwa') -->
<title>Batalha Humano x Orc</title>
<meta charset="UTF-8">
<meta name="author" content="Miguel Walquirio Diniz Machado">
<meta name="description" content="Desafio proposto pela Oliveira Trust!">
<meta name="abstract" content="Desafio proposto pela Oliveira Trust!">
<meta name="keywords" content="deesafio, Oliveira Trust, miguel w d machado, miguel machado, miguelwdmachado">
<meta property="og:locale" content="pt-br">
<meta property="og:url" content="http://localhost:8000/">
<meta property="og:type" content="website">
<meta http-equiv="Content-Language" content="pt-br">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=2.0, user-scalable=yes" />
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="theme-color" content="#38D3FF">
<link rel="canonical" href="http://localhost:8000" />
<link rel="publisher" href="http://localhost:8000" />
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/bootstrap-grid.min.css">
<link rel="stylesheet" href="css/all.css">
<link rel="stylesheet" href="css/custom.css">
<link href="https://fonts.googleapis.com/css?family=Nunito:200,300,400,700,800,500" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Calligraffitti&display=swap" rel="stylesheet">

</head>

<body>
<!-- header e section da página home -->
@yield('header')
<!-- Header -->
<session>

<header>
  <nav class="navbar navbar-dark bg-info fixed-top">
      <a class="navbar-brand pb-2 fbold" href="http://localhost:8000">Home</a>
  </nav>
  @if ($errors->any())
  <div class="alert alert-danger">
      <ul>
          @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
          @endforeach
      </ul>
  </div>
  @endif
  @if (Session::has('message'))
  <div class="alert alert-danger">
    <ul>{{ Session::get('message') }}</ul>
  </div>
  @endif
</header>

</session>

@yield('section1')

@yield('footer')
<!-- Footer -->
<footer style="background-color: #606060">
</footer>
@yield('script')
<!-- Scripts -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>
