<?php
    // Function lấy tất cả danh mục
    function loadall_category(){
        $sql = "SELECT * FROM category ORDER BY id_category";
        $list_category = pdo_query($sql);
        return $list_category;
    }
?>