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
                    <div class="card-head">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb bg-white">
                                <li class="breadcrumb-item home"><a href="?mod=admin&act=dashboard">Dashboard</a></li>
                                <li class="breadcrumb-item  active"><a href="#">Quản trị viên</a></li>
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
                                        <a href="" class="repost-title">Công khai</a>
                                        <p class="repost-num">(<span>2</span>)</p>
                                    </div>
                                    <div class="repost">
                                        <a href="" class="repost-title">Vô hiệu hóa</a>
                                        <p class="repost-num">(<span>3</span>)</p>
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
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-12">
                <div class="card text-white mb-3">
                    <div class="card-head bg-light text-dark px-3 py-3">
                        Danh sách người dùng
                    </div>
                    <div class="card-body">
                        <div id="card-scroll">
                            <table class="table table-striped table-checkall">
                                <thead>
                                    <tr>
                                        <td><input type="checkbox" name="checkall" id=""></td>
                                        <td>#</td>
                                        <td></td>
                                        <td>Họ và tên</td>
                                        <td>Tên đăng nhập</td>
                                        <td>Email</td>
                                        <td>Quyền</td>
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
                                        <td>Nguyễn Thành Đạt</td>
                                        <td>thanhdat</td>
                                        <td>ndat32454@gmail.com</td>
                                        <td>Admintrater</td>
                                        <td><span class="badge badge-light py-1 px-4"><i class="bi bi-check2-circle text-success" style="font-size:18px;"></i></span></td>
                                        <td>2023-27-09</td>
                                    </tr>
                                    <tr>
                                        <td><input type="checkbox" name="" id=""></td>
                                        <td>2</td>
                                        <td>
                                            <a href="" title="Cập nhật" class="action"><i class="fa-regular fa-pen-to-square"></i></a>
                                            <a href="" title="Xóa" class="action" onclick="return confirm('Bạn có muốn xóa bản ghi này?')"><i class="fa-regular fa-trash-can"></i></a>
                                        </td>
                                        <td>Nguyễn Thành Đạt</td>
                                        <td>thanhdat</td>
                                        <td>ndat32454@gmail.com</td>
                                        <td>Subscriber</td>
                                        <td><span class="badge badge-light py-1 px-4"><i class="bi bi-x-circle text-danger" style="font-size:18px;"></i></span></td>
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