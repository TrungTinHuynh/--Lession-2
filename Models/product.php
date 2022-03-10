<?php
    // Function lấy tất cả sản phẩm
    function loadall_product($keyword, $category){
        if(isset($_GET['current_page'])){
            $current_page = $_GET['current_page'];
        }else{
            $current_page = 1;
        }
        $per_page = 10;
        $offset = ($current_page - 1) * $per_page ;
        $sql = "SELECT *  FROM product WHERE 1";
        if($keyword!=''){
            $sql .= " AND name_product LIKE '%".$keyword."%'";
        }
        if($category>0){
            $sql .= " AND id_cate LIKE '%".$category."%'";
        }
        $sql .= " ORDER BY id_product ASC LIMIT ".$per_page." OFFSET ".$offset."";
        $list_product = pdo_query($sql);
        return $list_product;
    }
    // Function lấy 1 sản phẩm
    function loadone_product($id){
        $sql = "SELECT * FROM product WHERE id_product=".$id;
        $one_product = pdo_query_one($sql);
        return $one_product;
    }
?>