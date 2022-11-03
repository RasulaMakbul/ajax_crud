<div class="modal fade" id="updateProductModal" tabindex="-1" aria-labelledby="updateModalLabel" aria-hidden="true">
    <form action="#" method="post" id="updateProductForm">
        @csrf
        <input type="hidden" id="up_id">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="updateModalLabel"><i class="las la-edit"></i>update Product</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="errorMsgContainer mb-3">

                    </div>
                    <div class="form-group">
                        <label for="up_name">Product Name</label>
                        <input type="text" class="form-control mt-2" name="up_name" id="up_name">
                    </div>
                    <div class="form-group mt-3">
                        <label for="up_price">Price</label>
                        <input type="text" class="form-control mt-2" name="up_price" id="up_price">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary update_product"><i class="las la-edit"></i> update</button>
                </div>
            </div>
        </div>
    </form>
</div>