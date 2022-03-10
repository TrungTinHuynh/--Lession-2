<!--Add Product-->
<div class="modal fade" id="add" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog">
    <div class="modal-content">
    <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Product</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
        <div class="mb-3">
            <label for="disabledTextInput" class="form-label">Name Product</label>
            <input type="text" id="disabledTextInput" class="form-control" placeholder="Name Product">
        </div>
        <div class="mb-3">
            <label for="disabledTextInput" class="form-label">Category</label>
            <select class="form-select form-control form-select-lg mb-3" aria-label=".form-select-lg example">
                <?php
                    foreach ($categories as $category){
                        extract($category);
                        echo '
                            <option value="'.$id_category.'">'.$name_category.'</option>
                        ';
                    }
                ?>
            </select>
        </div>
        <div class="mb-3">
            <label for="formFile" class="form-label">Product image</label>
            <input class="form-control" type="file" id="formFile">
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
        </div>
    </div>
    </div>
</div>
</div>
</div>