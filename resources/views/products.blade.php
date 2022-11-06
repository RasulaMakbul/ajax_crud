<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}"><!-- copied from https://laravel.com/docs/9.x/csrf#csrf-x-csrf-token -->

    <title>Ajax Crud</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-2">

            </div>
            <div class="col-md-8">
                <h2 class="my-5 text-center">Laravel 9 crud using ajax</h2>
                <a href="#" class="btn btn-outline-success my-3" data-bs-toggle="modal" data-bs-target="#addProductModal"><i class="las la-plus"></i></a>
                <input type="text" name="search" id="search" class="form-control mb-3" placeholder="search here..">
                <div class="table-data">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Price</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($products as $key=>$product)
                            <tr>
                                <td>{{$product->id}}</td>
                                <td>{{$product->name}}</td>
                                <td>{{$product->price}}</td>
                                <td><a href="#" class="btn btn-outline-info update_product_form" data-bs-toggle="modal" data-bs-target="#updateProductModal" data-id="{{$product->id}}" data-name="{{$product->name}}" data-price="{{$product->price}}">
                                        <i class="las la-edit"></i>
                                    </a>
                                    <a href="#" data-id="{{$product->id}}" class="btn btn-outline-danger delete_product"><i class="las la-trash"></i></a>
                                </td>
                            </tr>
                            @endforeach


                        </tbody>
                    </table>
                    {!! $products->links() !!}
                </div>
            </div>
        </div>
    </div>
    @include('partials.add_product')
    @include('partials.update_product')
    @include('product_js')
    {!! Toastr::message() !!}
</body>

</html>