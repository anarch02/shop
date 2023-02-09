@extends('layouts.app')

@section('css_link')
    <link rel="stylesheet" type="text/css" href="{{asset('styles/products.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('styles/products_responsive.css')}}">    
@endsection

@section('content')

<div class="home">
    <div class="home_container">
        <div class="home_background" style="background-image:url({{Vite::image('hero3.jpg')}})"></div>
        <div class="home_content_container">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="home_content">
                            <div class="home_title"> {{isset($subcategory_name) ? $subcategory_name : __('All Products')}}<span>.</span></div>
                            <div class="home_text"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam a ultricies metus. Sed nec molestie eros. Sed viverra velit venenatis fermentum luctus.</p></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Products -->

<div class="products">
    <div class="container">
        <div class="row">
            <div class="col">
                
                <!-- Product Sorting -->
                <div class="sorting_bar d-flex flex-md-row flex-column align-items-md-center justify-content-md-start">
                    <div class="results">Showing <span> {{count($products)}} </span> results</div>
                    <div class="sorting_container ml-md-auto">
                        <div class="sorting">
                            <ul class="item_sorting">
                                <li>
                                    <span class="sorting_text">Sort by</span>
                                    <i class="fa fa-chevron-down" aria-hidden="true"></i>
                                    <ul>
                                        <li class="product_sorting_btn" data-isotope-option='{ "sortBy": "original-order" }'><span>Default</span></li>
                                        <li class="product_sorting_btn" data-isotope-option='{ "sortBy": "price" }'><span>Price</span></li>
                                        <li class="product_sorting_btn" data-isotope-option='{ "sortBy": "stars" }'><span>Name</span></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                
                <div class="product_grid">

                    @foreach ($products as $product)
                        <!-- Product -->
                        <div class="product">
                            <div class="product_image"><img src="{{Vite::image('content2.jpg')}}" alt=""></div>
                            <div class="product_extra product_new"><a href="{{route('product', $product->id)}}">New</a></div>
                            <div class="product_content">
                                <div class="product_title"><a href="{{route('product', $product->id)}} "> {{$product->title}} </a></div>
                                <div class="product_price">Code: {{$product->code}} </div>
                            </div>
                        </div>
                    @endforeach

                    

                </div>
                <div class="product_pagination">
                    <ul>
                        <li class="active"><a href="#">01.</a></li>
                        <li><a href="#">02.</a></li>
                        <li><a href="#">03.</a></li>
                    </ul>
                </div>
                    
            </div>
        </div>
    </div>
</div>

@endsection

@section('js_link')
<script src="js/products.js"></script>
@endsection