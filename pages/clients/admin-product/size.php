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
                                <li class="breadcrumb-item  active"><a href="">Bảng kích cỡ</a></li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-12 col-12">
                <form action="" method="">
                    <div class="group">
                        <label for="">Kí hiệu kích cỡ</label>
                        <input type="text" class="form-control" required>
                    </div>
                    <div class="group">
                        <label for="">Cân nặng</label>
                        <input type="text" class="form-control" required>
                    </div>
                    <div class="group">
                        <label for="">Chiều cao</label>
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
            <div class="col-lg-9 col-md-12 col-12">
                <div class="card text-white mb-3">
                    <div class="card-head bg-light text-dark px-3 py-3">
                        Danh sách bảng kích cỡ
                    </div>
                    <div class="card-body">
                        <div id="card-scroll">
                            <table class="table table-striped table-checkall">
                                <thead>
                                    <tr>
                                        <td><input type="checkbox" name="checkall" id=""></td>
                                        <td>#</td>
                                        <td></td>
                                        <td>Kích cỡ</td>
                                        <td>Cân nặng (kg)</td>
                                        <td>Chiều cao (cm)</td>
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
                                        <td>S</td>
                                        <td>38-43</td>
                                        <td>148-153</td>
                                        <td>Nguyễn Thành Đạt</td>
                                        <td>Đang hoạt động</td>
                                        <td>2023-27-09</td>
                                    </tr>
                                    <tr>
                                        <td><input type="checkbox" name="" id=""></td>
                                        <td>2</td>
                                        <td>
                                            <a href="" title="Cập nhật" class="action"><i class="fa-regular fa-pen-to-square"></i></a>
                                            <a href="" title="Xóa" class="action" onclick="return confirm('Bạn có muốn xóa bản ghi này?')"><i class="fa-regular fa-trash-can"></i></a>
                                        </td>
                                        <td>M</td>
                                        <td>43-46</td>
                                        <td>157-158</td>
                                        <td>Nguyễn Thành Đạt</td>
                                        <td>Đang hoạt động</td>
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
<?php echo get_footer_admin(); ?>