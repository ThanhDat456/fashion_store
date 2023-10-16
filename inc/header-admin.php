<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="public/images/Adidas-logo.png">
    <!-- link bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <!-- link css -->
    <link rel="stylesheet" href="public/css/admin.css">
    <link rel="stylesheet" href="public/css/admin-product.css">
    <link rel="stylesheet" href="public/css/admin-child.css">
    <!-- fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <!-- link javascript jquery-->
    <script src="public/js/jquery.js"></script>
    <script src="public/js/admin.js"></script>
    <title>Page Admin</title>
</head>

<body>
    <div id="wrapper">
        <div class="container">
            <div class="row">
                <div class="wp-header col-lg-12 col-md-12 col-12">
                    <div class="left">
                        <a href="?mod=home&act=main" class="img-store">
                            <img src="public/images/Adidas-logo.png" alt="">
                        </a>
                        <div class="add-func">
                            <i class="fa-solid fa-plus"></i>
                            <ul class="add-menu">
                                <li class="add-item">
                                    <a href="?mod=admin-product&act=add" class="add-link">Thêm sản phẩm</a>
                                </li>
                                <li class="add-item">
                                    <a href="?mod=admin-post&act=add" class="add-link">Thêm bài viết</a>
                                </li>
                                <li class="add-item">
                                    <a href="?mod=admin-user&act=add" class="add-link">Thêm quản trị viên</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="admin">
                        <div class="username">
                            <a href="?mod=admin-user&act=update-image" title="Đổi ảnh">
                                <img src="public/images/icon.jpg" alt="">
                                <span>Admin</span>
                            </a>
                        </div>
                        <div class="arrow-down">
                            <i class="fa-solid fa-sort-down"></i>
                            <ul class="menu">
                                <li class="add-item">
                                    <a href="?mod=admin-user&act=update-image" class="add-link">Đổi Avatar</a>
                                </li>
                                <li class="add-item">
                                    <a href="?mod=admin-user&act=update-password" class="add-link">Đổi mật khẩu</a>
                                </li>
                                <li class="add-item">
                                    <a href="?mod=admin&act=login" class="add-link">Đăng xuất</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>