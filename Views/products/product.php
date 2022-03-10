<div class="container mt-3">
    <table class="table table-bordered text-center">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Product name</th>
            <th scope="col">Category</th>
            <th scope="col">Image</th>
            <th scope="col">Operations</th>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach($products as $product){
                    extract($product);
                    $link = "index.php?page=product&detail=".$id_product;
            ?>
            <?php
                    echo '
                        <tr>
                            <th scope="row">'.$id_product.'</th>
                            <td>'.$name_product.'</td>
                            <td>'.$id_cate.'</td>
                            <td>'.$image_product.'</td>
                            <td>
                                <i type="click" data-bs-toggle="modal" data-bs-target="#add" class="fa fa-light fa-circle-plus"></i>
                                <i type="click" data-bs-toggle="modal" data-bs-target="#edit" class="fa fa-solid fa-pen-to-square"></i>
                                <i class="fa fa-solid fa-copy"></i>
                                <i type="click" data-bs-toggle="modal" data-bs-target="#detail" class="fa fa-solid fa-eye"></i>
                            </td>
                        </tr>
                    ';
                }
            ?>
        </tbody>
    </table>
</div>
    <nav aria-label="Page navigation example">
        <ul class="pagination justify-content-center">
            <li class="page-item">
            <a href="index.php?page=product&current_page=1" class="page-link">Previous</a>
            </li>
            <li class="page-item"><a class="page-link" href="index.php?page=product&current_page=1">1</a></li>
            <li class="page-item"><a class="page-link" href="index.php?page=product&current_page=2">2</a></li>
            <li class="page-item">
            <a class="page-link" href="index.php?page=product&current_page=2">Next</a>
            </li>
        </ul>
    </nav>