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
                                <li class="breadcrumb-item  active"><a href="#">Sản phẩm</a></li>
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
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-12">
                <div class="card text-white mb-3">
                    <div class="card-head bg-light text-dark px-3 py-3">
                        Danh sách sản phẩm
                    </div>
                    <div class="card-body">
                        <div id="card-scroll">
                            <table class="table table-striped table-checkall">
                                <thead>
                                    <tr>
                                        <td><input type="checkbox" name="checkall" id=""></td>
                                        <td>#</td>
                                        <td></td>
                                        <td>Mã SP</td>
                                        <td>Hình ảnh</td>
                                        <td>Sản phẩm</td>
                                        <td>Giá</td>
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
                                            <a href="" title="Xóa"  class="action" onclick="return confirm('Bạn có muốn xóa bản ghi này?')"><i class="fa-regular fa-trash-can"></i></a>
                                        </td>
                                        <td>01</td>
                                        <td><img style="height:60px;width:auto;"src="public/images/970d213c54764c0f9a2daf150099f6a7-9366.webp" alt=""></td>
                                        <td>
                                            <p class="name-product">Áo thun Adidas</p>
                                            <p class="qty">1</p>
                                        </td>
                                        <td><span>70,000đ</span></td>
                                        <td><span class="badge badge-danger py-1 px-1 text-light" style="width:70px;">Chưa duyệt</span></td>
                                        <td><span>2023-27-9</span></td>
                                    </tr>
                                    <tr>
                                        <td><input type="checkbox" name="" id=""></td>
                                        <td>2</td>
                                        <td>
                                            <a href="" title="Cập nhật" class="action"><i class="fa-regular fa-pen-to-square"></i></a>
                                            <a href="" title="Xóa"  class="action" onclick="return confirm('Bạn có muốn xóa bản ghi này?')"><i class="fa-regular fa-trash-can"></i></a>
                                        </td>
                                        <td>02</td>
                                        <td><img style="height:60px;width:auto;"src="public/images/970d213c54764c0f9a2daf150099f6a7-9366.webp" alt=""></td>
                                        <td>
                                            <p class="name-product">Áo thun Adidas</p>
                                            <p class="qty">1</p>
                                        </td>
                                        <td><span>70,000đ</span></td>
                                        <td><span class="badge badge-success py-1 px-1 text-light" style="width:70px;">Đã duyệt</span></td>
                                        <td><span>2023-27-9</span></td>
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