<!doctype html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous"> -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/png" href="{{ url('images/logo-square.png') }}" />
  <meta http-equiv="Cache-control" content="max-age=0">
  <title>IIUM: Microcredentials</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://www.iium.edu.my/v2/wp-content/themes/iium-wp-theme/style.css?ver=1.0">
	<link rel="stylesheet" href="{{ url('css/master.css?ver=1.1')}}">
	@if(Route::currentRouteName() == 'show')
	<link rel="stylesheet" href="{{ url('css/jquery.readall.min.css') }}">
	@endif
	@if(Route::currentRouteName() == 'index')
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">
	@endif
	<script>
	    (function (i, s, o, g, r, a, m) {
	        i['GoogleAnalyticsObject'] = r;
	        i[r] = i[r] || function () {
	            (i[r].q = i[r].q || []).push(arguments)
	        }, i[r].l = 1 * new Date();
	        a = s.createElement(o),
	            m = s.getElementsByTagName(o)[0];
	        a.async = 1;
	        a.src = g;
	        m.parentNode.insertBefore(a, m)
	    })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

	    ga('create', 'UA-1465991-1', 'auto');
	    ga('send', 'pageview');
	</script>
</head>

<body>
<div id="page" class="site">
	<header id="masthead">
    <div class="mainmenu">
    <div class="menu-top container">
      <img src="{{$logo['logo']}}">
    </div>
    <div class="menu-bottom">
        <div class="container">
          <ul class="menu">
						<li>
							<a href="{{ route('index') }}">Microcredentials</a>
						</li>
            @foreach($primary_menus as $primary)
              <li>
                <a href="{{$primary['url'] }}">{{$primary['title']}}</a>
              </li>
            @endforeach
          </ul>
        </div>
    </div>
    <div class="menu-bottom-mobile">
        <div class="hamburger">
            <i class="fa fa-bars"></i>
        </div>

        <div class="show-menu">
          <ul class="menu">
						<li>
							<a href="/">Microcredentials</a>
						</li>
            @foreach($primary_menus as $primary)
              <li>
                <a href="{{$primary['url'] }}">{{$primary['title']}}</a>
              </li>
            @endforeach
          </ul>
        </div>

    </div>
    </div>

	</header>
	<div id="content" class="site-content">
    <div class="container">
			<div class="text-right">
				@if(Auth::user())
				<span style="padding:5px">Hi {{ Auth::user()->name }}</span>
				<span style="padding:5px"><a href="{{ route('dashboard') }}">Dashboard</a></span>
				@else
				<span style="padding:5px"><a href="{{ route('login') }}">Login</a></span>
				<span style="padding:5px"><a href="{{ route('register') }}">Register</a></span>
				@endif


			</div>
      @yield('content')
    </div>
  </div>

<footer id="colophon" class="site-footer" style="background-image: url('https://www.iium.edu.my/v2/wp-content/themes/iium-wp-theme/img/bg.jpg');">
  <div class="site-info footer" style="background-image: url('https://www.iium.edu.my/v2/wp-content/themes/iium-wp-theme/img/kerawang.png');">
      <div class="container">
      <div class="row">
          <div class="col-md-4 company-info">
          <img src="{{$logo['logo']}}" alt="">
          <br><br>

          International Islamic University Malaysia <br>
          P.O. Box 10, 50728 Kuala Lumpur <br> <br>

              <b>Phone : </b>(+603) 6421 6421 <br>
              <b>Fax : </b> (+603) 6421 4053 <br>
              <b>Email : </b> webmaster@iium.edu.my

          </div>
          <div class="col-md-2 link-subs">
              <h6>Students & Parents</h6>
              <ul>
                @foreach($students_menus as $students)
                  <li>
                    <a href="{{$students['url'] }}">{{$students['title']}}</a>
                  </li>
                @endforeach
              </ul>
          </div>
          <div class="col-md-2 link-subs">
              <h6>Researchers, Lecturers & Alumni</h6>
              <ul>
                @foreach($researcher_menus as $researcher)
                  <li>
                    <a href="{{$researcher['url'] }}">{{$researcher['title']}}</a>
                  </li>
                @endforeach
              </ul>
          </div>
          <div class="col-md-2 link-subs">
              <h6>Business, Government & Related Links</h6>
              <ul>
                @foreach($business_menus as $business)
                  <li>
                    <a href="{{$business['url'] }}">{{$business['title']}}</a>
                  </li>
                @endforeach
              </ul>
          </div>
          <div class="col-md-2 link-subs">
              <h6>Others</h6>
              <ul>
                @foreach($others_menus as $others)
                  <li>
                    <a href="{{$others['url'] }}">{{$others['title']}}</a>
                  </li>
                @endforeach
              </ul>
          </div>

          <div class="col-md-6">
              <br>
              <small>Copyright &copy; International Islamic University Malaysia 2021</small>
          </div>
          <div class="col-md-6 text-right">

          </div>
      </div>
      </div>

  </div>

</footer>

</div>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
<script src="https://www.iium.edu.my/v2/wp-content/themes/iium-wp-theme/js/master.js"></script>

@if(Route::currentRouteName() == 'show')
<script src="{{ url('js/jquery.readall.min.js') }}" charset="utf-8"></script>
<script type="text/javascript">
	$('.read').readall({
		animationspeed: 300
	});
</script>
@endif

@if(Route::currentRouteName() == 'index')
<script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js"></script>
<script type="text/javascript">
	$(function() {
		$('.selectpicker').selectpicker();
	});
</script>
@endif
</body>
</html>
