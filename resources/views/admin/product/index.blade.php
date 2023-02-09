@extends('layouts.admin')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <input type="text" placeholder="search" name="search" id="search" class="form-control">
                </div>

                <div class="card-body">
                    <a href="{{route('products.create')}}" class="text-center btn btn-success">
                        {{__('Create')}}
                    </a>
                    <div class="row">
                        @foreach ($products as $product)
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xl-3">
                            <div class="card overflow-hidden" style="width: 16rem; height: 28rem">
                                <img src="{{Vite::image('content2.jpg')}}" class="card-img-top" alt="{{__("Image didn't load")}}">
                                <div class="card-body">
                                <h5 class="card-title"> {{$product->title}} </h5>
                                <p class="card-text"> {{__('Code: ') . $product->code}} </p>
                                <a href="#" class="btn btn-primary">show</a>
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked>
                                    <label class="form-check-label" for="flexSwitchCheckChecked">Checkbox</label>
                                  </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    
                    
                </div>

                <div class="card-footer">
                    {{$products->links('pagination::bootstrap-5')}}
                </div>
            </div>
        </div>
    </div>
</div>
    
@endsection