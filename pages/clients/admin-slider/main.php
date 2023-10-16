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
                                <li class="breadcrumb-item home"><a href="?mod=admin&act=dashboard">Dashboard</a></li>
                                <li class="breadcrumb-item active"><a href="?mod=admin-slider&act=main">Slider</a></li>
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
                        <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                            <div class="group">
                                <label for="">Slider_1</label>
                                <img src="" alt="" id="slider-1" class="add-img-post">
                                <input type="file" class="form-control-file" name="" id="file-slider-1">
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                            <div class="group">
                                <label for="">Slider_2</label>
                                <img src="" alt="" id="slider-2" class="add-img-post">
                                <input type="file" class="form-control-file" name="" id="file-slider-2">
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                            <div class="group">
                                <label for="">Slider_3</label>
                                <img src="" alt="" id="slider-3" class="add-img-post">
                                <input type="file" class="form-control-file" name="" id="file-slider-3">
                            </div>
                        </div>
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
        <div class="row">
            <div class="col-lg-12 col-md-12 col-12">
                <div class="card mb-3">
                    <div class="card-head">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb bg-white">
                                <li class="breadcrumb-item home"><a href="?mod=admin&act=dashboard">Dashboard</a></li>
                                <li class="breadcrumb-item  active"><a href="#">Slider</a></li>
                            </ol>
                        </nav>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="nav-center">
                                    <div class="repost">
                                        <a href="" class="repost-title">Tất cả</a>
                                        <p class="repost-num">(<span>1</span>)</p>
                                    </div>
                                    <div class="repost">
                                        <a href="" class="repost-title">Duyệt</a>
                                        <p class="repost-num">(<span>2</span>)</p>
                                    </div>
                                    <div class="repost">
                                        <a href="" class="repost-title">Chờ duyệt</a>
                                        <p class="repost-num">(<span>3</span>)</p>
                                    </div>
                                    <div class="repost">
                                        <a href="" class="repost-title">Thùng rác</a>
                                        <p class="repost-num">(<span>5</span>)</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-12 my-3 my-sm-0">
                                <nav class="navbar navbar-light navbar-right">
                                    <form class="form-inline" action="" autocomplete="off">
                                        <input class="form-control mr-sm-2 all-page" type="search" id="search" name="keyword" value="" placeholder="Tìm kiếm..." aria-label="Search">
                                        <button class="btn" type="submit">Tìm kiếm</button>
                                    </form>
                                    <ul class="list-group search-ajax-result">
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-12">
                                <nav class="navbar navbar-light navbar-left">
                                    <form action="" method="post" class="form-inline">
                                        <select name="act" id="" class="form-control mr-sm-2 all-page">
                                            <option value="">Chọn</option>
                                            <option value="">Xóa</option>
                                            <option value="">Khôi phục</option>
                                        </select>
                                        <button class="btn  my-2 my-sm-0" type="submit">Tác vụ</button>
                                    </form>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-12">
                <div class="card text-white mb-3">
                    <div class="card-head bg-light text-dark px-3 py-3">
                        Danh sách slider
                    </div>
                    <div class="card-body">
                        <div id="card-scroll">
                            <table class="table table-striped table-checkall">
                                <thead>
                                    <tr>
                                        <td><input type="checkbox" name="checkall" id=""></td>
                                        <td>#</td>
                                        <td></td>
                                        <td>Logo website</td>
                                        <td>slider_1</td>
                                        <td>slider_2</td>
                                        <td>slider_3</td>
                                        <td>Người tạo</td>
                                        <td>Trạng thái</td>
                                        <td>Ngày tạo</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><input type="checkbox" name="" id=""></td>
                                        <td>1</td>
                                        <td>
                                            <a href="" title="Cập nhật" class="action"><i class="fa-regular fa-pen-to-square"></i></a>
                                            <a href="" title="Xóa" class="action" onclick="return confirm('Bạn có muốn xóa bản ghi này?')"><i class="fa-regular fa-trash-can"></i></a>
                                        </td>
                                        <td><img style="width:auto;height:80px" src="public/images/Adidas_Logo.png" alt=""></td>
                                        <td><img style="width:auto;height:80px" src="public/images/adidas_banner_1.webp" alt=""></td>
                                        <td><img style="width:auto;height:80px" src="public/images/adidas_banner_1.webp" alt=""></td>
                                        <td><img style="width:auto;height:80px" src="public/images/adidas_banner_1.webp" alt=""></td>
                                        <td>Nguyễn Thành Đạt</td>
                                        <td><span class="badge badge-success py-1 px-1 text-light" style="width:70px;">Đã duyệt</span></td>
                                        <td>2023-27-09</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="paginate mx-3">
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    let img_slider_1 = document.getElementById("slider-1");
    let input_slider_1 = document.getElementById("file-slider-1");
    input_slider_1.onchange = (e) => {
        if (input_slider_1.files[0]) {
            img_slider_1.src = URL.createObjectURL(input_slider_1.files[0]);
        }
    }
</script>
<script>
    let img_slider_2 = document.getElementById("slider-2");
    let input_slider_2 = document.getElementById("file-slider-2");
    input_slider_2.onchange = (e) => {
        if (input_slider_2.files[0]) {
            img_slider_2.src = URL.createObjectURL(input_slider_2.files[0]);
        }
    }
</script>
<script>
    let img_slider_3 = document.getElementById("slider-3");
    let input_slider_3 = document.getElementById("file-slider-3");
    input_slider_3.onchange = (e) => {
        if (input_slider_3.files[0]) {
            img_slider_3.src = URL.createObjectURL(input_slider_3.files[0]);
        }
    }
</script>
<?php echo get_footer_admin(); ?>