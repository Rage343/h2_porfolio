<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>

    <!---=======================================================================
      facebook OG
    ========================================================================-->
    <meta property="og:url"                content="http://hernandez2.com/" />
    <meta property="og:type"               content="website" />
    <meta property="og:title"              content="web design and web applications solutions" />
    <meta property="og:description"        content="Hello, I’m William Hernández, a Full Stack Web Developer specialized in building custom web applications solutions for your particular business needs." />
    <meta property="og:image"              content="{{ URL::to('assets/img/facebook-sh.jpg') }}" />
    <!---=======================================================================
      twitter OG
    ========================================================================-->
    <meta name="twitter:card"              content="summary" />
    <meta name="twitter:site"              content="@Hernandez__2" />
    <meta property="og:url"                content="http://hernandez2.com/" />
    <meta property="og:title"              content="web design and web applications solutions" />
    <meta property="og:description"        content="Hello, I’m William Hernández, a Full Stack Web Developer specialized in building custom web applications solutions for your particular business needs." />
    <meta property="og:image"              content="{{ URL::to('assets/img/twitter-sh.jpg') }}" />

    <!---=======================================================================
      Style
    ========================================================================-->
    <!-- bootstrap -->
    <link rel="stylesheet" href="{{ URL::to('assets/css/bootstrap.min.css') }}">
    <!-- font awesome -->
    <link rel="stylesheet" href="{{ URL::to('assets/css/font-awesome/css/font-awesome.min.css') }}">
    <!-- custom style -->
    <link rel="stylesheet" href="{{ URL::to('assets/css/main.css') }}">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
       <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
       <!--[if lt IE 9]>
         <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
         <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
       <![endif]-->

    @yield('styles')
  </head>
  <body>
    @yield('content')
    <!---=======================================================================
    Footer
    ========================================================================-->
    <footer class="footer">
      <div class="footer__container container">
        <ul class="footer__nav">
          <li class="footer__list"><a class="footer__link" href="#"><i class="fa fa-google-plus footer__fa footer__fa--g" aria-hidden="true"></i> A little different.</a></li>
          <li class="footer__list"><a class="footer__link" href="#"><i class="fa fa-twitter footer__fa footer__fa--tw" aria-hidden="true"></i> Fallow me fallow!</a></li>
          <li class="footer__list"><a class="footer__link" href="#"><i class="fa fa-facebook footer__fa footer__fa--fk" aria-hidden="true"></i> Want to know more?</a></li>
        </ul>
      </div>
    </footer>

    <!---=======================================================================
      JS
    ========================================================================-->
    <!-- jqury -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js" ></script>
    <!-- bootstrap js -->
    <script src="{{ URL::to('assets/js/bootstrap.min.js') }}" ></script>
      <!-- custom js -->
    <script src="{{ URL::to('assets/js/main.js') }}" ></script>
    <!-- contact ajax -->
    <script type="text/javascript">
    $(window).load(function(){
        $('#myModal').modal('show');
    });
</script>
  </body>
</html>
