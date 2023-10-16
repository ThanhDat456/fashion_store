<?php echo get_header_admin(); ?>
<div class="row" id="wp-body">
    <?php echo get_sidebar_admin(); ?>
    <div class="main col-lg-10 col-md-12 col-12">
        <div class="sidebar-icon">
            <i class="fa-solid fa-wave-square"></i>
            <i class="fa-solid fa-xmark"></i>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-12">
                <div class="card mb-3">
                    <div class="card-head ">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb bg-white">
                                <li class="breadcrumb-item home"><a href="{{url('dashboard')}}">Dashboard</a></li>
                                <li class="breadcrumb-item  home"><a href="{{url('admin/product/list')}}">Sản phẩm</a></li>
                                <li class="breadcrumb-item  active"><a href="{{url('admin/product/add')}}">Thêm sản phẩm</a></li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-12">
                <form action="" method="">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-4 col-12">
                            <div class="group">
                                <label for="">Mã sản phẩm</label>
                                <input type="text" class="form-control" required>
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-8 col-sm-8 col-12">
                            <div class="group">
                                <label for="">Tên sản phẩm</label>
                                <input type="text" class="form-control" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-12">
                            <label for="">Hình ảnh sản phẩm</label>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                            <div class="group">
                                <img src="" alt="" id="product-thumb-1" class="add-img-post">
                                <input type="file" class="form-control-file" name="" id="file-product-thumb-1" required>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                            <div class="group">
                                <img src="" alt="" id="product-thumb-2" class="add-img-post">
                                <input type="file" class="form-control-file" name="" id="file-product-thumb-2">
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                            <div class="group">
                                <img src="" alt="" id="product-thumb-3" class="add-img-post">
                                <input type="file" class="form-control-file" name="" id="file-product-thumb-3">
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                            <div class="group">
                                <img src="" alt="" id="product-thumb-4" class="add-img-post">
                                <input type="file" class="form-control-file" name="" id="file-product-thumb-4">
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                            <div class="group">
                                <img src="" alt="" id="product-thumb-5" class="add-img-post">
                                <input type="file" class="form-control-file" name="" id="file-product-thumb-5">
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                            <div class="group">
                                <img src="" alt="" id="product-thumb-6" class="add-img-post">
                                <input type="file" class="form-control-file" name="" id="file-product-thumb-6">
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                            <div class="group">
                                <img src="" alt="" id="product-thumb-7" class="add-img-post">
                                <input type="file" class="form-control-file" name="" id="file-product-thumb-7">
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                            <div class="group">
                                <img src="" alt="" id="product-thumb-8" class="add-img-post">
                                <input type="file" class="form-control-file" name="" id="file-product-thumb-8">
                            </div>
                        </div>
                    </div>
                    <!-- thêm vào bảng img-product -->
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-4 col-12">
                            <div class="group">
                                <label for="">Màu</label>
                                <input type="text" class="form-control mb-3" required>
                                <input type="text" class="form-control mb-3">
                                <input type="text" class="form-control mb-3">
                                <input type="text" class="form-control mb-3">
                                <input type="text" class="form-control mb-3">
                                <input type="text" class="form-control mb-3">
                                <input type="text" class="form-control mb-3">
                                <input type="text" class="form-control mb-3">
                            </div>
                        </div>
                        <!-- thêm vào bảng màu -->
                        <div class="col-ld-8 col-md-8 col-sm-8 col-12">
                            <div class="col-lg-12 col-md-12 col-12">
                                <div class="group">
                                    <label for="" class="mb-3">Kích cỡ</label>
                                    <div class="group">
                                        <input type="checkbox" name="" id="S" required>
                                        <label for="S" class="mr-3">S</label>
                                        <input type="checkbox" name="" id="M">
                                        <label for="M" class="mr-3">M</label>
                                        <input type="checkbox" name="" id="L">
                                        <label for="L" class="mr-3">L</label>
                                        <input type="checkbox" name="" id="XL">
                                        <label for="XL" class="mr-3">XL</label>
                                    </div>
                                </div>
                                <!-- đổ từ bảng size lên -->
                                <!-- và thêm vào bảng size-product -->
                            </div>
                            <div class="col-lg-12 col-md-12 col-12">
                                <div class="group">
                                    <label for="">Mô tả</label>
                                    <textarea name="" class="form-control" id="" cols="30" rows="13" required></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="group">
                        <label for="">Danh mục</label>
                        <select class="form-control">
                            <option selected>-- chọn --</option>
                            <option value="1">Áo khoát</option>
                            <option value="2">Áo thun</option>
                        </select>
                    </div>
                    <div class="group">
                        <label for="">Người tạo</label>
                        <select class="form-control">
                            <option selected>-- chọn --</option>
                            <option value="1">Nguyễn Thành Đạt</option>
                            <option value="2">Nguyễn Xuân Lộc</option>
                        </select>
                    </div>
                    <div class="group">
                        <label class="mb-3 d-block">Trạng thái</label>
                        <div class="group-child">
                            <input class="" type="radio" name="status" value="1" id="1" checked>
                            <label class="text-dark mx-2" for="1">Đang hoạt động</label>
                        </div>
                        <div class="group-child mb-3">
                            <input class="" type="radio" name="status" value="2" id="2">
                            <label class="text-dark mx-2" for="2">Vô hiệu hóa</label>
                        </div>
                    </div>
                    <button class="btn mb-5" type="submit" id="img-password">Thêm</button>
                </form>
            </div>
        </div>
    </div>
</div>
    <script>
        let product_thumb_1 = document.getElementById("product-thumb-1");
        let input_file_product_thumb_1 = document.getElementById("file-product-thumb-1");
        input_file_product_thumb_1.onchange = (e) => {
            if (input_file_product_thumb_1.files[0]) {
                product_thumb_1.src = URL.createObjectURL(input_file_product_thumb_1.files[0]);
            }
        }
    </script>
    <script>
        let product_thumb_2 = document.getElementById("product-thumb-2");
        let input_file_product_thumb_2 = document.getElementById("file-product-thumb-2");
        input_file_product_thumb_2.onchange = (e) => {
            if (input_file_product_thumb_2.files[0]) {
                product_thumb_2.src = URL.createObjectURL(input_file_product_thumb_2.files[0]);
            }
        }
    </script>
    <script>
        let product_thumb_3 = document.getElementById("product-thumb-3");
        let input_file_product_thumb_3 = document.getElementById("file-product-thumb-3");
        input_file_product_thumb_3.onchange = (e) => {
            if (input_file_product_thumb_3.files[0]) {
                product_thumb_3.src = URL.createObjectURL(input_file_product_thumb_3.files[0]);
            }
        }
    </script>
    <script>
        let product_thumb_4 = document.getElementById("product-thumb-4");
        let input_file_product_thumb_4 = document.getElementById("file-product-thumb-4");
        input_file_product_thumb_4.onchange = (e) => {
            if (input_file_product_thumb_4.files[0]) {
                product_thumb_4.src = URL.createObjectURL(input_file_product_thumb_4.files[0]);
            }
        }
    </script>
    <script>
        let product_thumb_5 = document.getElementById("product-thumb-5");
        let input_file_product_thumb_5 = document.getElementById("file-product-thumb-5");
        input_file_product_thumb_5.onchange = (e) => {
            if (input_file_product_thumb_5.files[0]) {
                product_thumb_5.src = URL.createObjectURL(input_file_product_thumb_5.files[0]);
            }
        }
    </script>
    <script>
        let product_thumb_6 = document.getElementById("product-thumb-6");
        let input_file_product_thumb_6 = document.getElementById("file-product-thumb-6");
        input_file_product_thumb_6.onchange = (e) => {
            if (input_file_product_thumb_6.files[0]) {
                product_thumb_6.src = URL.createObjectURL(input_file_product_thumb_6.files[0]);
            }
        }
    </script>
    <script>
        let product_thumb_7 = document.getElementById("product-thumb-7");
        let input_file_product_thumb_7 = document.getElementById("file-product-thumb-7");
        input_file_product_thumb_7.onchange = (e) => {
            if (input_file_product_thumb_7.files[0]) {
                product_thumb_7.src = URL.createObjectURL(input_file_product_thumb_7.files[0]);
            }
        }
    </script>
    <script>
        let product_thumb_8 = document.getElementById("product-thumb-8");
        let input_file_product_thumb_8 = document.getElementById("file-product-thumb-8");
        input_file_product_thumb_8.onchange = (e) => {
            if (input_file_product_thumb_8.files[0]) {
                product_thumb_8.src = URL.createObjectURL(input_file_product_thumb_8.files[0]);
            }
        }
    </script>
    <?php echo get_footer_admin(); ?>