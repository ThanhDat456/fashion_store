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
                                <li class="breadcrumb-item home"><a href="?mod=admin-user&act=main">Quản trị viên</a></li>
                                <li class="breadcrumb-item  active"><a href="">Đổi ảnh Avatar</a></li>
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
                        <img src="" alt="" id="img-upload">
                        <input type="file" name="" id="upload" required>
                        <!-- <small class="text-danger">
                        ảnh có đuôi jpg,png,...
                    </small> -->
                    </div>
                    <button class="btn mb-5" type="submit" id="img-password">Lưu</button>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
    let img = document.getElementById("img-upload");
    let input = document.getElementById("upload");
    input.onchange = (e) => {
        if (input.files[0])
            img.src = URL.createObjectURL(input.files[0]);
    }
</script>
<?php echo get_footer_admin(); ?>