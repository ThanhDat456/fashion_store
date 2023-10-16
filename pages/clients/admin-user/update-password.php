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
                <div class="card mb-3 border-0">
                    <div class="card-head">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb bg-white">
                                <li class="breadcrumb-item home"><a href="?mod=admin&act=dashboard">Dashboard</a></li>
                                <li class="breadcrumb-item  home"><a href="?mod=admin-user&act=main">Quản trị viên</a></li>
                                <li class="breadcrumb-item  active"><a href="">Đổi mật khẩu</a></li>
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
                        <label for="">Mật khẩu cũ</label>
                        <input type="password" class="form-control update-pass" name="" id="old-password" required>
                        <i class="fa-regular fa-eye" onclick="showOldPassword(this)"></i>
                        <!-- <small class="text-danger">
                             mật khẩu không đúng
                            </small> -->
                    </div>
                    <div class="group-img-password">
                        <label for="">Mật khẩu mới</label>
                        <input type="password" class="form-control update-pass" name="" id="password" required>
                        <i class="fa-regular fa-eye" onclick="showPassword(this)"></i>
                    </div>
                    <div class="group-img-password">
                        <label for="">Xác nhận mật khẩu</label>
                        <input type="password" class="form-control update-pass" name="" id="confirm-password" required>
                        <i class="fa-regular fa-eye" onclick="showConfirmPassword(this)"></i>
                    </div>
                    <button class="btn mb-5" type="submit" id="img-password">Lưu</button>
                </form>
            </div>
        </div>
    </div>
</div>
<?php echo get_footer_admin(); ?>