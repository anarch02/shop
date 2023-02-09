@extends('layouts.admin')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ isset($subcategory) ? __('Edit') :  __('Create')}}</div>

                <div class="card-body">
                    <form method="post" action="{{isset($subcategory) ? route('subcategory.update', $subcategory->id) : route('subcategory.store')}}">    
                        @csrf
                        @if(isset($subcategory))
                            @method('PUT')
                        @endif 
                        <div class="form-floating">
                            <input type="text" @if(isset($subcategory)) value="{{$subcategory->title}}" @endif name="title" class="form-control" id="floatingInput">
                            <label for="floatingInput"> {{__('Subcategory name')}} </label>
                        </div>

                        <div class="mt-2">
                            <select name="category_id" class="form-select" aria-label="Default select example">
                                @foreach ($categories as $category)
                                    <option @if(isset($subcategory) && $subcategory->category->id == $category->id) selected @endif
                                    value="{{$category->id}}"> 
                                        {{$category->title}} 
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        

                        @error('title')
                            <div class="alert alert-danger mt-2">
                                {{$message}}
                            </div>
                        @enderror
                        @error('category_id')
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