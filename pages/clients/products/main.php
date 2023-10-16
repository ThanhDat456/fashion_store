<?php get_header() ?>
<div id="body-store">
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb bg-white">
                <li class="breadcrumb-item home"><a href="?mod=home&act=main">Trang chủ</a></li>
                <li class="breadcrumb-item  active"><a href="#">Sản phẩm</a></li>
            </ol>
        </nav>
        <div class="row">
            <div class="sidebar col-lg-3">
                <div class="category">
                    <p class="title-category">
                        Danh mục sản phẩm
                    </p>
                    <ul class="menu-cat">
                        <li class="menu-item">
                            <a href="" class="menu-link">Áo thun</a>
                        </li>
                        <li class="menu-item">
                            <a href="" class="menu-link">Áo khoát</a>
                            <i class="fa-solid fa-caret-down"></i>
                            <ul class="sub-menu-cat">
                                <li class="sub-menu-item">
                                    <a href="" class="sub-menu-link">Áo dù</a>
                                </li>
                                <li class="sub-menu-item">
                                    <a href="" class="sub-menu-link">Áo lông cừu</a>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-item">
                            <a href="" class="menu-link">Áo sơ mi</a>
                            <i class="fa-solid fa-caret-down"></i>
                            <ul class="sub-menu-cat">
                                <li class="sub-menu-item">
                                    <a href="" class="sub-menu-link">Áo dù</a>
                                </li>
                                <li class="sub-menu-item">
                                    <a href="" class="sub-menu-link">Áo lông cừu</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="category ">
                    <p class="title-category">
                        Bộ lọc
                    </p>
                    <form action="">
                        <table>
                            <thead>
                                <tr>
                                    <td>Giá</td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><input type="radio" name="price" id="under"><label for="under">Dưới 1,000,000đ</label></td>
                                    <td><input type="radio" name="price" id="about"><label for="about"> 1,000,000đ - 10,000,000đ</label></td>
                                    <td><input type="radio" name="price" id="up"><label for="up">Trên 10,000,000đ</label></td>
                                </tr>
                            </tbody>
                        </table>
                        <table>
                            <thead>
                                <tr>
                                    <td>Loại</td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><input type="radio" name="type" id="T-shirt"><label for="T-shirt">Áo thun</label></td>
                                    <td><input type="radio" name="type" id="shirt"><label for="shirt">Áo sơ mi</label></td>
                                    <td><input type="radio" name="type" id="jacket"><label for="jacket">Áo khoát</label></td>
                                </tr>
                            </tbody>
                        </table>
                        <button class="btn w-100 text-light btn-outline-light">Lọc</button>
                    </form>
                </div>
                <div class="category">
                    <p class="title-category">
                        sản phẩm bán chạy
                    </p>
                    <ul class="menu-cat">
                        <li class="menu-sell">
                            <a href="" class="sell-link"><img src="public/images/970d213c54764c0f9a2daf150099f6a7-9366.webp" alt=""></a>
                            <div class="sell">
                                <a href="" class="sell-name">Áo thun nam nữ chính hãng</a>
                                <div class="price">
                                    <div class="new">
                                        90.000<span>đ</span>
                                    </div>
                                    <small class="old"><del>90.000đ</del></small>
                                </div>
                            </div>
                        </li>
                        <li class="menu-sell">
                            <a href="" class="sell-link"><img src="public/images/970d213c54764c0f9a2daf150099f6a7-9366.webp" alt=""></a>
                            <div class="sell">
                                <a href="" class="sell-name">Áo thun nam nữ chính hãng</a>
                                <div class="price">
                                    <div class="new">
                                        90.000<span>đ</span>
                                    </div>
                                    <small class="old"><del>90.000đ</del></small>
                                </div>
                            </div>
                        </li>
                        <li class="menu-sell">
                            <a href="" class="sell-link"><img src="public/images/970d213c54764c0f9a2daf150099f6a7-9366.webp" alt=""></a>
                            <div class="sell">
                                <a href="" class="sell-name">Áo thun nam nữ chính hãng</a>
                                <div class="price">
                                    <div class="new">
                                        90.000<span>đ</span>
                                    </div>
                                    <small class="old"><del>90.000đ</del></small>
                                </div>
                            </div>
                        </li>
                        <li class="menu-sell">
                            <a href="" class="sell-link"><img src="public/images/970d213c54764c0f9a2daf150099f6a7-9366.webp" alt=""></a>
                            <div class="sell">
                                <a href="" class="sell-name">Áo thun nam nữ chính hãng</a>
                                <div class="price">
                                    <div class="new">
                                        90.000<span>đ</span>
                                    </div>
                                    <small class="old"><del>90.000đ</del></small>
                                </div>
                            </div>
                        </li>
                        <li class="menu-sell">
                            <a href="" class="sell-link"><img src="public/images/970d213c54764c0f9a2daf150099f6a7-9366.webp" alt=""></a>
                            <div class="sell">
                                <a href="" class="sell-name">Áo thun nam nữ chính hãng</a>
                                <div class="price">
                                    <div class="new">
                                        90.000<span>đ</span>
                                    </div>
                                    <small class="old"><del>90.000đ</del></small>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-9 col-md-12 colsm-12">
                <div class="row">
                    <div class="first col-lg-12 col-md-12- col-sm-12 col-12">
                        <span>Sản phẩm</span>
                    </div>
                </div>
                <div class="second">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-4 col-6">
                            <div class="item-product-main">
                                <div class="product-thumbnail">
                                    <a href="?mod=products&act=detail" class="img-thumb">
                                        <img src="public/images/970d213c54764c0f9a2daf150099f6a7-9366.webp" alt="">
                                    </a>
                                    <div class="action">
                                        <span>
                                            <a href="?mod=products&act=detail" class="watch" title="xem nhanh">
                                                <i class="fa-solid fa-magnifying-glass-plus"></i>
                                            </a>
                                        </span>
                                        <span>
                                            <a href="?mod=payment&act=main" class="add-cart" title="Thêm vào giỏ hàng">
                                                <i class="fa-solid fa-cart-plus"></i>
                                            </a>
                                        </span>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <p class="product-name">
                                        <a href="?mod=products&act=detail">Áo thun nam nữ chính hãng</a>
                                    </p>
                                    <div class="product-box">
                                        10,560,000<span>đ</span>
                                        <small><del>12,500,000đ</del></small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-6">
                            <div class="item-product-main">
                                <div class="product-thumbnail">
                                    <a href="?mod=products&act=detail" class="img-thumb">
                                        <img src="public/images/970d213c54764c0f9a2daf150099f6a7-9366.webp" alt="">
                                    </a>
                                    <div class="action">
                                        <span>
                                            <a href="?mod=products&act=detail" class="watch" title="xem nhanh">
                                                <i class="fa-solid fa-magnifying-glass-plus"></i>
                                            </a>
                                        </span>
                                        <span>
                                            <a href="?mod=payment&act=main" class="add-cart" title="Thêm vào giỏ hàng">
                                                <i class="fa-solid fa-cart-plus"></i>
                                            </a>
                                        </span>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <p class="product-name">
                                        <a href="?mod=products&act=detail">Áo thun nam nữ chính hãng</a>
                                    </p>
                                    <div class="product-box">
                                        10,560,000<span>đ</span>
                                        <small><del>12,500,000đ</del></small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-6">
                            <div class="item-product-main">
                                <div class="product-thumbnail">
                                    <a href="?mod=products&act=detail" class="img-thumb">
                                        <img src="public/images/970d213c54764c0f9a2daf150099f6a7-9366.webp" alt="">
                                    </a>
                                    <div class="action">
                                        <span>
                                            <a href="?mod=products&act=detail" class="watch" title="xem nhanh">
                                                <i class="fa-solid fa-magnifying-glass-plus"></i>
                                            </a>
                                        </span>
                                        <span>
                                            <a href="?mod=payment&act=main" class="add-cart" title="Thêm vào giỏ hàng">
                                                <i class="fa-solid fa-cart-plus"></i>
                                            </a>
                                        </span>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <p class="product-name">
                                        <a href="?mod=products&act=detail">Áo thun nam nữ chính hãng</a>
                                    </p>
                                    <div class="product-box">
                                        10,560,000<span>đ</span>
                                        <small><del>12,500,000đ</del></small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-6">
                            <div class="item-product-main">
                                <div class="product-thumbnail">
                                    <a href="?mod=products&act=detail" class="img-thumb">
                                        <img src="public/images/970d213c54764c0f9a2daf150099f6a7-9366.webp" alt="">
                                    </a>
                                    <div class="action">
                                        <span>
                                            <a href="?mod=products&act=detail" class="watch" title="xem nhanh">
                                                <i class="fa-solid fa-magnifying-glass-plus"></i>
                                            </a>
                                        </span>
                                        <span>
                                            <a href="?mod=payment&act=main" class="add-cart" title="Thêm vào giỏ hàng">
                                                <i class="fa-solid fa-cart-plus"></i>
                                            </a>
                                        </span>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <p class="product-name">
                                        <a href="?mod=products&act=detail">Áo thun nam nữ chính hãng</a>
                                    </p>
                                    <div class="product-box">
                                        10,560,000<span>đ</span>
                                        <small><del>12,500,000đ</del></small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-6">
                            <div class="item-product-main">
                                <div class="product-thumbnail">
                                    <a href="?mod=products&act=detail" class="img-thumb">
                                        <img src="public/images/970d213c54764c0f9a2daf150099f6a7-9366.webp" alt="">
                                    </a>
                                    <div class="action">
                                        <span>
                                            <a href="?mod=products&act=detail" class="watch" title="xem nhanh">
                                                <i class="fa-solid fa-magnifying-glass-plus"></i>
                                            </a>
                                        </span>
                                        <span>
                                            <a href="?mod=payment&act=main" class="add-cart" title="Thêm vào giỏ hàng">
                                                <i class="fa-solid fa-cart-plus"></i>
                                            </a>
                                        </span>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <p class="product-name">
                                        <a href="?mod=products&act=detail">Áo thun nam nữ chính hãng</a>
                                    </p>
                                    <div class="product-box">
                                        10,560,000<span>đ</span>
                                        <small><del>12,500,000đ</del></small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-6">
                            <div class="item-product-main">
                                <div class="product-thumbnail">
                                    <a href="?mod=products&act=detail" class="img-thumb">
                                        <img src="public/images/970d213c54764c0f9a2daf150099f6a7-9366.webp" alt="">
                                    </a>
                                    <div class="action">
                                        <span>
                                            <a href="?mod=products&act=detail" class="watch" title="xem nhanh">
                                                <i class="fa-solid fa-magnifying-glass-plus"></i>
                                            </a>
                                        </span>
                                        <span>
                                            <a href="?mod=payment&act=main" class="add-cart" title="Thêm vào giỏ hàng">
                                                <i class="fa-solid fa-cart-plus"></i>
                                            </a>
                                        </span>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <p class="product-name">
                                        <a href="?mod=products&act=detail">Áo thun nam nữ chính hãng</a>
                                    </p>
                                    <div class="product-box">
                                        10,560,000<span>đ</span>
                                        <small><del>12,500,000đ</del></small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-6">
                            <div class="item-product-main">
                                <div class="product-thumbnail">
                                    <a href="?mod=products&act=detail" class="img-thumb">
                                        <img src="public/images/970d213c54764c0f9a2daf150099f6a7-9366.webp" alt="">
                                    </a>
                                    <div class="action">
                                        <span>
                                            <a href="?mod=products&act=detail" class="watch" title="xem nhanh">
                                                <i class="fa-solid fa-magnifying-glass-plus"></i>
                                            </a>
                                        </span>
                                        <span>
                                            <a href="?mod=payment&act=main" class="add-cart" title="Thêm vào giỏ hàng">
                                                <i class="fa-solid fa-cart-plus"></i>
                                            </a>
                                        </span>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <p class="product-name">
                                        <a href="?mod=products&act=detail">Áo thun nam nữ chính hãng</a>
                                    </p>
                                    <div class="product-box">
                                        10,560,000<span>đ</span>
                                        <small><del>12,500,000đ</del></small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-6">
                            <div class="item-product-main">
                                <div class="product-thumbnail">
                                    <a href="?mod=products&act=detail" class="img-thumb">
                                        <img src="public/images/970d213c54764c0f9a2daf150099f6a7-9366.webp" alt="">
                                    </a>
                                    <div class="action">
                                        <span>
                                            <a href="?mod=products&act=detail" class="watch" title="xem nhanh">
                                                <i class="fa-solid fa-magnifying-glass-plus"></i>
                                            </a>
                                        </span>
                                        <span>
                                            <a href="?mod=payment&act=main" class="add-cart" title="Thêm vào giỏ hàng">
                                                <i class="fa-solid fa-cart-plus"></i>
                                            </a>
                                        </span>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <p class="product-name">
                                        <a href="?mod=products&act=detail">Áo thun nam nữ chính hãng</a>
                                    </p>
                                    <div class="product-box">
                                        10,560,000<span>đ</span>
                                        <small><del>12,500,000đ</del></small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-6">
                            <div class="item-product-main">
                                <div class="product-thumbnail">
                                    <a href="?mod=products&act=detail" class="img-thumb">
                                        <img src="public/images/970d213c54764c0f9a2daf150099f6a7-9366.webp" alt="">
                                    </a>
                                    <div class="action">
                                        <span>
                                            <a href="?mod=products&act=detail" class="watch" title="xem nhanh">
                                                <i class="fa-solid fa-magnifying-glass-plus"></i>
                                            </a>
                                        </span>
                                        <span>
                                            <a href="?mod=payment&act=main" class="add-cart" title="Thêm vào giỏ hàng">
                                                <i class="fa-solid fa-cart-plus"></i>
                                            </a>
                                        </span>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <p class="product-name">
                                        <a href="?mod=products&act=detail">Áo thun nam nữ chính hãng</a>
                                    </p>
                                    <div class="product-box">
                                        10,560,000<span>đ</span>
                                        <small><del>12,500,000đ</del></small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-6">
                            <div class="item-product-main">
                                <div class="product-thumbnail">
                                    <a href="?mod=products&act=detail" class="img-thumb">
                                        <img src="public/images/970d213c54764c0f9a2daf150099f6a7-9366.webp" alt="">
                                    </a>
                                    <div class="action">
                                        <span>
                                            <a href="?mod=products&act=detail" class="watch" title="xem nhanh">
                                                <i class="fa-solid fa-magnifying-glass-plus"></i>
                                            </a>
                                        </span>
                                        <span>
                                            <a href="?mod=payment&act=main" class="add-cart" title="Thêm vào giỏ hàng">
                                                <i class="fa-solid fa-cart-plus"></i>
                                            </a>
                                        </span>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <p class="product-name">
                                        <a href="?mod=products&act=detail">Áo thun nam nữ chính hãng</a>
                                    </p>
                                    <div class="product-box">
                                        10,560,000<span>đ</span>
                                        <small><del>12,500,000đ</del></small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-6">
                            <div class="item-product-main">
                                <div class="product-thumbnail">
                                    <a href="?mod=products&act=detail" class="img-thumb">
                                        <img src="public/images/970d213c54764c0f9a2daf150099f6a7-9366.webp" alt="">
                                    </a>
                                    <div class="action">
                                        <span>
                                            <a href="?mod=products&act=detail" class="watch" title="xem nhanh">
                                                <i class="fa-solid fa-magnifying-glass-plus"></i>
                                            </a>
                                        </span>
                                        <span>
                                            <a href="?mod=payment&act=main" class="add-cart" title="Thêm vào giỏ hàng">
                                                <i class="fa-solid fa-cart-plus"></i>
                                            </a>
                                        </span>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <p class="product-name">
                                        <a href="?mod=products&act=detail">Áo thun nam nữ chính hãng</a>
                                    </p>
                                    <div class="product-box">
                                        10,560,000<span>đ</span>
                                        <small><del>12,500,000đ</del></small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-6">
                            <div class="item-product-main">
                                <div class="product-thumbnail">
                                    <a href="?mod=products&act=detail" class="img-thumb">
                                        <img src="public/images/970d213c54764c0f9a2daf150099f6a7-9366.webp" alt="">
                                    </a>
                                    <div class="action">
                                        <span>
                                            <a href="?mod=products&act=detail" class="watch" title="xem nhanh">
                                                <i class="fa-solid fa-magnifying-glass-plus"></i>
                                            </a>
                                        </span>
                                        <span>
                                            <a href="?mod=payment&act=main" class="add-cart" title="Thêm vào giỏ hàng">
                                                <i class="fa-solid fa-cart-plus"></i>
                                            </a>
                                        </span>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <p class="product-name">
                                        <a href="?mod=products&act=detail">Áo thun nam nữ chính hãng</a>
                                    </p>
                                    <div class="product-box">
                                        10,560,000<span>đ</span>
                                        <small><del>12,500,000đ</del></small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                 <div class="chart">
                    <i class="fa-solid fa-chart-simple icon"></i>
                    <i class="fa-solid fa-xmark icon2"></i>
                </div>
            </div>
        </div>
    </div>
</div>
<?php get_footer() ?>