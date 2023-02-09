@extends('layouts.admin')

@section('content')
    @error('status')
        <div class="alert alert-primary">
            {{$message}}    
        </div>    
    @enderror

    @isset($status)
    <div class="alert alert-primary">
        {{$message}}    
    </div>
    @endisset

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">
                        {{__('Subcategory')}}
                    </div>
    
                    <div class="card-body">
                        <h3 class="text-center">{{$subcategory->title}}</h3>
                        <p class="text-center"> {{__('Category: '). $subcategory->category->title}} </p>
                    </div>
    
                    <div class="card-footer">
                        <a href="{{route('subcategory.index')}}" class="btn btn-secondary"> {{__('Back')}} </a>
                        <a href="{{route('subcategory.edit', $subcategory->id)}}" class="btn btn-warning"> {{__('Edit')}} </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection