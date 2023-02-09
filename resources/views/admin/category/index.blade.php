@extends('layouts.admin')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    <input type="text" placeholder="search" name="search" id="search" class="form-control">
                </div>

                <div class="card-body">
                    <a href="{{route('category.create')}}" class="text-center btn btn-primary"> {{__('Create')}} </a>
                    <div class="table-responsive m-3">
                        <table class="table table-striped table-sm">
                          <thead>
                            <tr>
                              <th scope="col">#</th>
                              <th scope="col"> {{__('Title')}} </th>
                              <th scope="col"> {{__('Actions')}} </th>
                            </tr>
                          </thead>
                          <tbody>
                            @foreach ($categories as $category)
                            <tr>
                                <td> {{$loop->iteration}} </td>
                                <td> {{$category->title}} </td>
                                <td class="d-flex justify-contant-end">
                                    <a href="{{route('category.show', $category->id)}}" class="btn btn-success">
                                        {{__('show')}}
                                    </a>
                                    <a href="{{route('category.edit', $category->id)}}" class="btn btn-warning">
                                        {{__('edit')}}
                                    </a>
                                    <a href="{{route('category.destroy', $category->id)}}" class="btn btn-danger">
                                        {{__('delete')}}
                                    </a>
                                </td>
                              </tr> 
                            @endforeach
                            
                          </tbody>
                        </table>
                      </div>
                </div>

                <div class="card-footer">
                    {{$categories->links()}}
                </div>
            </div>
        </div>
    </div>
</div>
    
@endsection