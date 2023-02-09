@extends('layouts.app')

@section('css_link')
<link rel="stylesheet" type="text/css" href="{{asset('styles/product.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('styles/product_responsive.css')}}">  
@endsection

@section('content')

    <!-- Product Details -->

	<div class="product_details">
		<div class="container">
			<div class="row details_row">

				<!-- Product Image -->
				<div class="col-lg-6">
					<div class="details_image">
						<div class="details_image_large"><img src="{{Vite::image('content2.jpg')}}" alt=""><div class="product_extra product_new"><a href="products.html">New</a></div></div>
					</div>
				</div>

				<!-- Product Content -->
				<div class="col-lg-6">
					<div class="details_content">
						<div class="details_name"> {{$product->title}} </div>
						{{-- <div class="details_discount">$890</div> --}}
						<div class="details_price"> {{$product->price}} UZS</div>

						<!-- In Stock -->
						<div class="in_stock_container">
							<div class="availability">Availability:</div>
							<span>In Stock</span>
						</div>
						<div class="details_text">
							<p> {{$product->prev}} </p>
						</div>

						<!-- Share -->
						<div class="details_share">
							<span>Share:</span>
							<ul>
								<li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>

			<div class="row description_row">
				<div class="col">
					<div class="description_title_container">
						<div class="description_title">Description</div>
						{{-- <div class="reviews_title"><a href="#">Reviews <span>(1)</span></a></div> --}}
					</div>
					<div class="description_text">
						<p> {{$product->description}} </p>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Products -->

	<div class="products">
		{{-- <div class="container">
			<div class="row">
				<div class="col text-center">
					<div class="products_title">Related Products</div>
				</div>
			</div>
			<div class="row">
				<div class="col">
					
					<div class="product_grid">

						<!-- Product -->
						<div class="product">
							<div class="product_image"><img src="img/content2.jpg" alt=""></div>
							<div class="product_extra product_new"><a href="products.html">New</a></div>
							<div class="product_content">
								<div class="product_title"><a href="product.html">Product</a></div>
								<div class="product_price">$670</div>
							</div>
						</div>

						<!-- Product -->
						<div class="product">
							<div class="product_image"><img src="img/content2.jpg" alt=""></div>
							<div class="product_extra product_sale"><a href="products.html">Sale</a></div>
							<div class="product_content">
								<div class="product_title"><a href="product.html">Smart Phone</a></div>
								<div class="product_price">$520</div>
							</div>
						</div>

						<!-- Product -->
						<div class="product">
							<div class="product_image"><img src="img/content2.jpg" alt=""></div>
							<div class="product_content">
								<div class="product_title"><a href="product.html">Smart Phone</a></div>
								<div class="product_price">$710</div>
							</div>
						</div>

						<!-- Product -->
						<div class="product">
							<div class="product_image"><img src="img/content2.jpg" alt=""></div>
							<div class="product_content">
								<div class="product_title"><a href="product.html">Smart Phone</a></div>
								<div class="product_price">$330</div>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div> --}}
	</div>

@endsection

@section('js_link')
<script src="{{asset('js/product.js')}}"></script>
@endsection