<div class="modal fade" id="addProductModal" tabindex="-1" aria-labelledby="addModalLabel" aria-hidden="true">
    <form action="#" method="post" id="addProductForm">
        @csrf
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="addModalLabel"><i class="las la-plus"></i>Add Product</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="errorMsgContainer mb-3">

                    </div>
                    <div class="form-group">
                        <label for="name">Product Name</label>
                        <input type="text" class="form-control mt-2" name="name" id="name">
                    </div>
                    <div class="form-group mt-3">
                        <label for="price">Price</label>
                        <input type="text" class="form-control mt-2" name="price" id="price">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary add_product"><i class="las la-plus"></i> Add</button>
                </div>
            </div>
        </div>
    </form>
</div>