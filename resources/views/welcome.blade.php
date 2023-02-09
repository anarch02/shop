@extends('layouts.app')

@section('css_link')
<link rel="stylesheet" type="text/css" href="styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="styles/responsive.css">   
@endsection

@section('content')

    @include('include.hero')


    <!-- Products -->

    <div class="products">
        <div class="container">
            <h1 class="text-center">
                <strong>
                    {{__('Our products')}}
                </strong>
                
            </h1>
            <div class="row">
                <div class="col">
                    
                    <div class="product_grid">

                        @foreach ($products as $product)
                        <!-- Product -->
                        <div class="product">
                            <div class="product_image"><img src="{{Vite::image('content2.jpg')}}" alt=""></div>
                            <div class="product_extra product_new"><a href="{{route('product', $product->id)}}"> {{__('New')}} </a></div>
                            <div class="product_content">
                                <div class="product_title"><a href="{{route('product', $product->id)}} "> {{$product->title}} </a></div>
                                <div class="product_price">{{$product->price}} UZS </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <div class="product_pagination">
                        <ul>
                            <li class="active"><a href="{{route('all_products')}}"> {{__('All products')}} </a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Ad -->

    <div class="avds_xl">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="avds_xl_container clearfix">
                        <div class="avds_xl_background" style="background-image:url({{Vite::image('content3.jpg')}})"></div>
                        <div class="avds_xl_content">
                            <div class="avds_title">Amazing Products</div>
                            <div class="avds_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam a ultricies metus.</div>
                            <div class="avds_link avds_xl_link"><a href="#">See More</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Newsletter -->

	@include('include.newsletter')

@endsection

@section('js_link')
<script src="js/custom.js"></script>
@endsection