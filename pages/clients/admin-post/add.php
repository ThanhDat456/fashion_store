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
                <div class="card mb-3  border-0">
                    <div class="card-head ">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb bg-white">
                                <li class="breadcrumb-item home"><a href="?mod=admin&act=dashboard">Dashboard</a></li>
                                <li class="breadcrumb-item  home"><a href="?mod=admin-user&act=main">Tin tức</a></li>
                                <li class="breadcrumb-item  active"><a href="">Thêm tin tức</a></li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-12">
                <form action="" method="">
                    <div class="group">
                        <img src="" alt="" id="upload-thumb" class="add-img-post" >
                        <input type="file" class="form-control-file" name="" id="upload-file" required>
                    </div>
                    <div class="group">
                        <label for="">Tiêu đề</label>
                        <textarea name="" class="form-control" id="" cols="30" rows="2" required></textarea>
                    </div>
                    <div class="group">
                        <label for="">Nội dung</label>
                        <textarea name="" class="form-control" id="" cols="30" rows="10" required></textarea>
                    </div>
                    <div class="group">
                        <label for="">Danh mục</label>
                        <select class="form-control">
                            <option selected>-- chọn --</option>
                            <option value="1">Đang hoạt động</option>
                            <option value="2">Vô hiệu hóa</option>
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
    let img = document.getElementById("upload-thumb");
    let input = document.getElementById("upload-file");
    input.onchange = (e)=>{
        if(input.files[0]){
            img.src = URL.createObjectURL(input.files[0]);
        }
    }
</script>
<?php echo get_footer_admin(); ?>