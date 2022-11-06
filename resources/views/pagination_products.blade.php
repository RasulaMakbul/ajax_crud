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