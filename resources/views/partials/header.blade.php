<header class="banner">
{{--   <div class="container">
    <a class="brand" href="{{ home_url('/') }}">{{ get_bloginfo('name', 'display') }}</a>
    <nav class="nav-primary">
      @if (has_nav_menu('primary_navigation'))
        {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']) !!}
      @endif
    </nav>
  </div> --}}
<div class="header-container">

	<div class="login-box">
		<a href="" class="">Login</a>
		<span class="text-secondary">|</span>
		<a href="" class="">Signup</a>
	</div>

	<nav class="navbar sticky-top navbar-expand-lg navbar-light px-0">
	  <a class="navbar-brand" href="#"><img class="logo-mic" src="@asset('images/indian-logo.jpg')"></a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>

	  <div class="collapse navbar-collapse pr-4" id="navbarsExample04">

	    <ul class="navbar-nav ml-auto">
	      <li class="nav-item">
	        <button type="button" class="btn text-uppercase rounded-0 font-weight-bold">menu / order online</button>
	      </li>
	      <li class="nav-item">
	        <button type="button" class="btn text-uppercase rounded-0 font-weight-bold">catering</button>
	      </li>
	      <li class="nav-item">
	        <button type="button" class="btn text-uppercase rounded-0 font-weight-bold">order catering now</button>
	      </li>
	      <li class="nav-item dropdown">
	        <button type="button" class="btn text-uppercase rounded-0 font-weight-bold">contact us</button>
	      </li>
	    </ul>
	  </div>
	</nav>
</div>

</header>

<style type="text/css">
	body {
		font-family: 'Open Sans', sans-serif;
	}
	.header-container {
		padding:0 30px;
	}
	.navbar {
		align-items: flex-end;
		background-color: white;
	}
	.logo-mic {
		max-height: 130px; 
	}
	ul.navbar-nav {
		display: grid;
		grid-auto-flow: column;
		grid-gap: 5px;
		margin-bottom: 13px;
	}

	.navbar-nav li button {
		background-color: #FFC739;
		color: #684F00;
		font-size: 19px;
		padding: .5rem .75rem;

	}
	.navbar-nav li button:hover {
		background: #843c0c;
    	color: #fff;
	}

	.login-box {
		display: grid;
		justify-content: end;
		grid-auto-flow: column;
		position: absolute;
		grid-gap: 18px;
		z-index: 9999;
		right: 40px;
		top: 25px;
		font-size: 18px;
		font-weight: bold;
	}

	.login-box a {
		color:#333;
	}
</style>
