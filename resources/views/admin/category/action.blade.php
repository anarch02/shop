@extends('layouts.admin')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ isset($category) ? __('Edit') :  __('Create')}}</div>

                <div class="card-body">
                    <form method="post" action="{{isset($category) ? route('category.update', $category) : route('category.store')}}">    
                        @csrf           
                        <div class="form-floating">
                        <input type="text" @if(isset($category)) value="{{$category->title}}" @endif name="title" class="form-control" id="floatingInput">
                        <label for="floatingInput"> {{__('Category name')}} </label>
                        </div>

                        @error('title')
                            <div class="alert alert-danger mt-2">
                                {{$message}}
                            </div>
                        @enderror
                
                        </div>
                        <button class="btn btn-lg btn-primary m-3" type="submit"> {{__('Create')}} </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection