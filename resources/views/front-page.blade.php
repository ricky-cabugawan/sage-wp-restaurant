@extends('layouts.app')

@section('content')
  @include('partials.page-header')

  @if (!have_posts())
    <div class="alert alert-warning">
      {{ __('Sorry, no results were found.', 'sage') }}
    </div>
    {!! get_search_form(false) !!}
  @endif

  @while (have_posts()) @php the_post() @endphp
    <div class="front-page-bg">
		<div class="col-lg-6 front-page-bg-inner mx-auto text-center">
			<p>Freshly prepared, delicious, healthy meals at your doorstep!</p>
			<button class="btn text-uppercase rounded-0 my-1">order now</button>
			<h2>First Time Ordering? Use Coupon Code MIC10OFF for 10% Discount</h2>
		</div>
	</div>
	<div class="front-page-cta-box text-center p-5">
			<h2>Our Meals Include...</h2>
			<div class="cta-box-inner px-5 py-3 mx-auto">
				<div class="cta-box-item">
					<img src="@asset('images/vegetarian.png')">
					<h2>Vegetarian Options</h2>
				</div>
				<div class="cta-box-item">
					<img src="@asset('images/non-vegetarian.png')">
					<h2>Non-Vegetarian Options</h2>
				</div>
				<div class="cta-box-item">
					<img src="@asset('images/Gluten-Free.png')">
					<h2>Gluten-Free Options</h2>
				</div>
				<div class="cta-box-item">
					<img src="@asset('images/packed.png')">
					<h2>Packed with Protein</h2>
				</div>
				<div class="cta-box-item">
					<img src="@asset('images/natural.png')">
					<h2>All Natural and Fresh</h2>
				</div>
			</div>
			<button type="button" class="text-uppercase border-0 rounded-0">select your meal plan</button>
	</div>

	<style type="text/css">
		.front-page-bg {
			background-image: url(@asset('images/homepage-image-1500x835.jpg'));
			background-position: center bottom;
			padding-top: 25vh;
			padding-bottom: 25vh;
			background-size: cover;
			/*background-attachment: fixed;*/
		}
		.front-page-bg-inner {
			background-color: rgba(0,0,0,.40);
			padding: 3rem;
		}
		.front-page-bg-inner p {
			font-size: 2em;
			color: #fff;
			text-align: center;
			font-weight: 500;
			font-feature-settings: 'kern' 1, 'onum' 1, 'liga' 1;
			line-height: 1.5;
		}
		.front-page-bg-inner h2 {
			color: #fff;
		    font-size: 26px;
		    margin: 1.5rem 0 1.5rem;
		    font-weight: 700;
		    text-align: center;
		}
		.front-page-bg-inner button {
			padding: 1rem 1.5rem;
		    font-size: .9rem;
		    background: #FF8A34;
		    color: #fff;
		    border-bottom: 3px solid #b84e00;
		    font-weight: 700;
		}
		.front-page-bg-inner button:hover {
		 	background-color: #FF8A34;
	    	background-image: linear-gradient(to bottom, rgba(0,0,0,0.3),rgba(0,0,0,0.3));
		}

		.front-page-cta-box {
			background: url(@asset('images/mplan-background.jpg')) top center no-repeat;
		    background-size: cover;
		    background-attachment: fixed;
		}
		.cta-box-inner {
			display: grid;
			grid-auto-flow: column;
			justify-content: space-around;
			max-width: 1280px;
			
		}
		.cta-box-inner h2 {
		    font-size: 25px;
		    margin: 20px auto;
		    max-width: 200px;
		    font-weight: 700;
		}
		.front-page-cta-box > h2 {
			text-align: center;
		    margin-bottom: 32px;
		    font-size: 48px;
		    color: #684F00;
		    font-weight: 700;
			
		}
		.front-page-cta-box button {
			padding: 16px;
		    color: #fff;
		    font-weight: 700;
		    font-size: 20px;
		    background: linear-gradient(to bottom, #f28849 0%,#f28849 35%,#ea701c 70%,#ea701c 99%);
		    border: 1px solid transparent;
		    outline: none;
		    cursor: pointer;
		}

	</style>
  @endwhile

  {!! get_the_posts_navigation() !!}
@endsection
