<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>
    <header>
        <div class="container mt-3">
            <a href="index.php?page=product" type="button" class="btn btn-primary">Products</a>
            <a href="index.php?page=category" type="button" class="btn btn-primary">Categories</a>
            <form action="index.php?page=product" method="post">
            <div class="input-group mb-3 mt-3 w-25%">
                <input type="text" name="keyword" class="form-control" placeholder="Search">
            </div>
            <select class="form-select" name="category" aria-label="Default select example">
                <option value="0" selected>Category</option>
                <?php
                    foreach($categories as $category){
                        extract($category);
                        echo '
                            <option value="'.$id_category.'">'.$name_category.'</option>
                        ';
                    }
                ?>
            </select>
            <input type="submit" class="btn btn-primary mt-3" name="search" value="Go">
            </form>
        </div>
    </header>