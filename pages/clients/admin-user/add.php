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
                                <li class="breadcrumb-item  home"><a href="?mod=admin-user&act=main">Quản trị viên</a></li>
                                <li class="breadcrumb-item  active"><a href="">Thêm quản trị viên</a></li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-12">
                <form action="" method="">
                    <div class="group-img-password">
                        <label for="">Họ và tên</label>
                        <input type="text" class="form-control update-pass" name="" id="" required>
                    </div>
                    <div class="group-img-password">
                        <label for="">Tên đăng nhập</label>
                        <input type="text" class="form-control update-pass" name="" id="" required>
                    </div>
                    <div class="group-img-password">
                        <label for="">Email</label>
                        <input type="text" class="form-control update-pass" name="" id="" required>
                    </div>
                    <div class="group-img-password">
                        <label for="">Mật khẩu</label>
                        <input type="password" class="form-control update-pass" name="" id="password" required>
                        <i class="fa-regular fa-eye" onclick="showPassword(this)"></i>
                    </div>
                    <div class="group-img-password">
                        <label for="">Xác nhận mật khẩu</label>
                        <input type="password" class="form-control update-pass" name="" id="confirm-password" required>
                        <i class="fa-regular fa-eye" onclick="showConfirmPassword(this)"></i>
                    </div>
                    <div class="group-img-password">
                        <label for="">Phân quyền</label>
                        <select class="form-control update-pass">
                            <option selected>-- chọn --</option>
                            <option value="1">Đang hoạt động</option>
                            <option value="2">Vô hiệu hóa</option>
                        </select>
                    </div>
                    <div class="group-img-password mt-4">
                        <label class="mb-3 d-block">Trạng thái</label>
                        <div class="group-child">
                            <input class="" type="radio" name="status" value="1" id="1">
                            <label class="text-dark mx-2" for="1">Đang hoạt động</label>
                        </div>
                        <div class="group-child">
                            <input class="" type="radio"  name="status" value="2" id="2">
                            <label class="text-dark mx-2" for="2">Vô hiệu hóa</label>
                        </div>
                    </div>
                    <button class="btn mb-5" type="submit" id="img-password">Thêm</button>
                </form>
            </div>
        </div>
    </div>
</div>
<?php echo get_footer_admin(); ?>