@extends('layouts.admin')

@section('content')
<div class="row justify-content-center">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xl-12">
        <div class="row m-3">

            <div class="col-lg-6 col-md-6 col-sm-12 col-xl-3">
                <div class="card overflow-hidden">
                    <a href="#" class="card-body text-dark">
                        <div class="d-flex">
                            <div class="mt-2">
                                <h6 class=""> {{__('Categories')}} </h6>
                                <h2 class="mb-0 number-font"> {{$category}} </h2>
                            </div>
                
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xl-3">
                <div class="card overflow-hidden">
                    <a href="#" class="card-body text-dark">
                        <div class="d-flex">
                            <div class="mt-2">
                                <h6 class=""> {{__('Subcategories')}} </h6>
                                <h2 class="mb-0 number-font">{{$subcategory}}</h2>
                            </div>
                
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xl-3">
                <div class="card overflow-hidden">
                    <a href="#" class="card-body text-dark">
                        <div class="d-flex">
                            <div class="mt-2">
                                <h6 class=""> {{__('Products')}} </h6>
                                <h2 class="mb-0 number-font">{{$products}}</h2>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12 col-xl-3">
                <div class="card overflow-hidden">
                    <a href="#" class="card-body text-dark">
                        <div class="d-flex">
                            <div class="mt-2">
                                <h6 class=""> {{__('Products')}} </h6>
                                <h2 class="mb-0 number-font">{{$products}}</h2>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

  {{-- <div class="table-responsive m-3">
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Header</th>
          <th scope="col">Header</th>
          <th scope="col">Header</th>
          <th scope="col">Header</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>1,001</td>
          <td>random</td>
          <td>data</td>
          <td>placeholder</td>
          <td>text</td>
        </tr>
        <tr>
          <td>1,002</td>
          <td>placeholder</td>
          <td>irrelevant</td>
          <td>visual</td>
          <td>layout</td>
        </tr>
        <tr>
          <td>1,003</td>
          <td>data</td>
          <td>rich</td>
          <td>dashboard</td>
          <td>tabular</td>
        </tr>
        <tr>
          <td>1,003</td>
          <td>information</td>
          <td>placeholder</td>
          <td>illustrative</td>
          <td>data</td>
        </tr>
        <tr>
          <td>1,004</td>
          <td>text</td>
          <td>random</td>
          <td>layout</td>
          <td>dashboard</td>
        </tr>
        <tr>
          <td>1,005</td>
          <td>dashboard</td>
          <td>irrelevant</td>
          <td>text</td>
          <td>placeholder</td>
        </tr>
        <tr>
          <td>1,006</td>
          <td>dashboard</td>
          <td>illustrative</td>
          <td>rich</td>
          <td>data</td>
        </tr>
        <tr>
          <td>1,007</td>
          <td>placeholder</td>
          <td>tabular</td>
          <td>information</td>
          <td>irrelevant</td>
        </tr>
        <tr>
          <td>1,008</td>
          <td>random</td>
          <td>data</td>
          <td>placeholder</td>
          <td>text</td>
        </tr>
        <tr>
          <td>1,009</td>
          <td>placeholder</td>
          <td>irrelevant</td>
          <td>visual</td>
          <td>layout</td>
        </tr>
        <tr>
          <td>1,010</td>
          <td>data</td>
          <td>rich</td>
          <td>dashboard</td>
          <td>tabular</td>
        </tr>
        <tr>
          <td>1,011</td>
          <td>information</td>
          <td>placeholder</td>
          <td>illustrative</td>
          <td>data</td>
        </tr>
        <tr>
          <td>1,012</td>
          <td>text</td>
          <td>placeholder</td>
          <td>layout</td>
          <td>dashboard</td>
        </tr>
        <tr>
          <td>1,013</td>
          <td>dashboard</td>
          <td>irrelevant</td>
          <td>text</td>
          <td>visual</td>
        </tr>
        <tr>
          <td>1,014</td>
          <td>dashboard</td>
          <td>illustrative</td>
          <td>rich</td>
          <td>data</td>
        </tr>
        <tr>
          <td>1,015</td>
          <td>random</td>
          <td>tabular</td>
          <td>information</td>
          <td>text</td>
        </tr>
      </tbody>
    </table>
  </div> --}}
@endsection