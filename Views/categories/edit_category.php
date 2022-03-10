<!--Edit Category-->
<div class="modal fade" id="edit_category" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog">
    <div class="modal-content">
    <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Category</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
        <div class="mb-3">
            <label for="disabledTextInput" class="form-label">Category</label>
            <select class="form-select form-control form-select-lg mb-3" aria-label=".form-select-lg example">
                <?php
                    foreach ($categories as $category){
                        extract($category);
                        echo '
                            <option value="1">'.$name_category.'</option>
                        ';
                    }
                ?>
            </select>
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