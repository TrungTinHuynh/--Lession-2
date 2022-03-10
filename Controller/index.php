<?php
    // Controler
    $page = '';
    if(isset($_GET['page'])==true) $page =  $_GET['page'];
    // PDO
    require_once '../Models/pdo.php';
    require_once '../Models/product.php';
    require_once '../Models/category.php';


    require_once '../Views/header.php';
    switch($page){
        case 'product':
        if(isset($_POST['search'])&&($_POST['search'])){
            $keyword = $_POST['keyword'];
            $category = $_POST['category'];
        }else{
            $keyword = "";
            $category = 0;
        }
        $categories = loadall_category();
        $products = loadall_product($keyword, $category);
        require_once '../Views/products/product.php';
        break;
        case 'category':
        $categories = loadall_category();
        require_once '../Views/categories/category.php';
        break;
        default: require_once '../Views/404.php';
        break;
    }
    require_once '../Views/products/add_product.php';
    require_once '../Views/products/detail_product.php';
    require_once '../Views/products/edit_product.php';
    require_once '../Views/categories/add_category.php';
    require_once '../Views/categories/edit_category.php';
    require_once '../Views/footer.php';
?>