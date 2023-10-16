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
                                <li class="breadcrumb-item  home"><a href="?mod=admin-user&act=main">Sản phẩm</a></li>
                                <li class="breadcrumb-item  active"><a href="">Danh mục</a></li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-4 col-12">
                <form action="" method="">
                    <label for="">Hình ảnh danh mục</label>
                    <div class="group">
                        <img src="" alt="" id="img-category" class="add-img-post">
                        <input type="file" class="form-control-file" name="" id="file-category" required>
                    </div>
                    <div class="group">
                        <label for="">Tên danh mục</label>
                        <input type="text" class="form-control" required>
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
            <div class="col-lg-8 col-md-8 col-12">
                <div class="card text-white mb-3">
                    <div class="card-head bg-light text-dark px-3 py-3">
                        Danh sách danh mục
                    </div>
                    <div class="card-body">
                        <div id="card-scroll">
                            <table class="table table-striped table-checkall">
                                <thead>
                                    <tr>
                                        <td><input type="checkbox" name="checkall" id=""></td>
                                        <td>#</td>
                                        <td></td>
                                        <td>Ảnh</td>
                                        <td>Tên danh mục</td>
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
                                        <td><img style="width:auto;height:50px;" src="public/images/ao-thun-adidas-nu-logo-3-la-chtt-1.jpg" alt=""></td>
                                        <td>Áo thun tay ngắn</td>
                                        <td>Nguyễn Thành Đạt</td>
                                        <td class="text-success">Đang hoạt động</td>
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
    let img_category = document.getElementById("img-category");
    let file_category = document.getElementById("file-category");
    file_category.onchange = (e) =>{
        if(file_category.files[0]){
            img_category.src = URL.createObjectURL(file_category.files[0]);
        }
    }
</script>
<?php echo get_footer_admin(); ?>