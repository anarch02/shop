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
                    <a href="{{route('subcategory.create')}}" class="text-center btn btn-primary"> {{__('Create')}} </a>
                    <div class="table-responsive m-3">
                        <table class="table table-striped table-sm">
                          <thead>
                            <tr>
                              <th scope="col">#</th>
                              <th scope="col"> {{__('Title')}} </th>
                              <th scope="col"> {{__('Category')}} </th>
                              <th scope="col"> {{__('Products')}} </th>
                              <th scope="col"> {{__('Actions')}} </th>
                            </tr>
                          </thead>
                          <tbody>
                            @foreach ($subcategories as $subcategory)
                            <tr>
                                <td> {{$loop->iteration}} </td>
                                <td> {{$subcategory->title}} </td>
                                <td> {{$subcategory->category->title}} </td>
                                <td> {{count($subcategory->products)}} </td>
                                <td class="d-flex justify-contant-end">
                                    <a href="{{route('subcategory.show', $subcategory->id)}}" class="btn btn-success">
                                        {{__('show')}}
                                    </a>
                                    <a href="{{route('subcategory.edit', $subcategory->id)}}" class="btn btn-warning">
                                        {{__('edit')}}
                                    </a>
                                    <a href="{{route('subcategory.destroy', $subcategory->id)}}" class="btn btn-danger">
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
                    {{$subcategories->links('pagination::bootstrap-5')}}
                </div>
            </div>
        </div>
    </div>
</div>
    
@endsection