<footer class="content-info">
  <div class="container">
    @php dynamic_sidebar('sidebar-footer') @endphp
  </div>
  <div class="footer-container p-4">
  	<div class="footer-company">
  		<h4>Company</h4>
  		<p><a href="">About Us</a></p>
  		<p><a href="">Terms and Conditions</a></p>
  		<p><a href="">Contact Us</a></p>
  	</div>
  	<div class="footer-learn-more">
  		<h4>Learn More</h4>
  		<p><a href="">Order Online</a></p>
  		<p><a href="">Catering</a></p>
  	</div>
  	<div class="social">
  		<h4 class="join-us text-uppercase text-secondary">join us</h4>
  		<p><a href=""><img src="@asset('images/facebook-icon.png')"></a></p>
  		<p><a href=""><img src="@asset('images/instagram-icon.png')"></a></p>
  		<p><a href=""><img src="@asset('images/google-plus-icon-1.png')"></a></p>
  	</div>
  </div>
</footer>

<style type="text/css">
	.footer-container div h4 {
		font-size: 1rem;
	    line-height: 1.2;
	    margin: 0 0 .5rem;
	    font-weight: 700;
	    font-feature-settings: 'dlig' 1, 'liga' 1, 'lnum' 1, 'kern' 1;
	}
	.footer-container div p a {
		color: #3333ff;
		font-size: 0.9rem;
    	font-weight: 700;
    	line-height: 1.5;
    	text-decoration: underline;
	}
	.footer-container div p {
		margin-bottom: 2px;
	}

	.footer-container div h4.join-us {
		font-weight: 600;
	}

	.footer-container {
		display: grid;
		grid-auto-flow: column;
		justify-content: end;
		grid-gap: 40px;
	}

	.social {
		display: grid;
		grid-template-columns: repeat(3,auto);
		grid-template-rows: auto auto;
		align-content: start;
		grid-gap: 15px;
	}

	.social h4 {
		grid-row: 1 / span 1;
		grid-column: 1 / -1;
	}
	.social p {
		grid-row: 2 / span 1;
	}


</style>
