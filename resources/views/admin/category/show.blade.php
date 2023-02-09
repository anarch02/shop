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

    {{$category->title}}
@endsection