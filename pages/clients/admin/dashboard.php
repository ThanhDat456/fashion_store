<?php echo get_header_admin(); ?>
<div class="row" id="wp-body">
<?php echo get_sidebar_admin(); ?>
    <div class="main col-lg-10 col-md-12 col-12">
        <div class="sidebar-icon">
            <i class="fa-solid fa-wave-square"></i>
            <i class="fa-solid fa-xmark"></i>
        </div>
        <div class="row">
            <div class="col-lg-2 col-md-4 col-sm-4 col-12">
                <div class="card text-white bg-primary mb-3">
                    <div class="card-body">
                        <h5 class="card-title">3</h5>
                        <p class="card-text">Đơn hàng thành công</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-4 col-12">
                <div class="card text-white bg-warning mb-3">
                    <div class="card-body">
                        <h5 class="card-title">3</h5>
                        <p class="card-text">Đơn hàng đang xử lí</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-4 col-12">
                <div class="card text-white bg-danger mb-3">
                    <div class="card-body">
                        <h5 class="card-title">3</h5>
                        <p class="card-text">Đơn hàng đang giao</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-4 col-12">
                <div class="card text-white bg-dark mb-3">
                    <div class="card-body">
                        <h5 class="card-title">3</h5>
                        <p class="card-text">Đơn hàng bị hủy</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-4 col-12">
                <div class="card text-white bg-success mb-3">
                    <div class="card-body">
                        <h5 class="card-title">3</h5>
                        <p class="card-text">Doanh số công ty</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-4 col-12">
                <div class="card text-white bg-info mb-3">
                    <div class="card-body">
                        <h5 class="card-title">3</h5>
                        <p class="card-text">Tổng sản phẩm</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-12">
                <div class="card text-white mb-3">
                    <div class="card-head bg-light text-dark px-5 py-3">
                        Đơn hàng mới
                    </div>
                    <div class="card-body">
                        <div id="card-scroll">
                            <table class="table table-striped mb-0">
                                <thead>
                                    <tr>
                                        <td>#</td>
                                        <td>Khách hàng</td>
                                        <td>Sản phẩm</td>
                                        <td>Giá trị</td>
                                        <td>Thời gian</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>
                                            <p class="name">Nguyễn Thành Đạt</p>
                                            <p class="phone">0123456789</p>
                                        </td>
                                        <td>
                                            <p class="name-product">Áo thun Adidas</p>
                                            <p class="qty">1</p>
                                        </td>
                                        <td><span>70,000đ</span></td>
                                        <td><span>2023-27-9</span></td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>
                                            <p class="name">Nguyễn Thành Đạt</p>
                                            <p class="phone">0123456789</p>
                                        </td>
                                        <td>
                                            <p class="name-product">Áo thun Adidas</p>
                                            <p class="qty">1</p>
                                        </td>
                                        <td><span>70,000đ</span></td>
                                        <td><span>2023-27-9</span></td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>
                                            <p class="name">Nguyễn Thành Đạt</p>
                                            <p class="phone">0123456789</p>
                                        </td>
                                        <td>
                                            <p class="name-product">Áo thun Adidas</p>
                                            <p class="qty">1</p>
                                        </td>
                                        <td><span>70,000đ</span></td>
                                        <td><span>2023-27-9</span></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php  echo get_footer_admin(); ?>