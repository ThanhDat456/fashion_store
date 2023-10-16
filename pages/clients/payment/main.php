<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="icon" href="public/images/Adidas_Logo.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- jquery -->
    <script src="public/js/jquery.js"></script>
    <!-- css -->
    <link rel="stylesheet" href="public/css/payment.css">
    <title>Fashion</title>
</head>

<body>
    <div id="wrapper-content">
        <div class="container">
            <div class="row" id="content">
                <div class="main col-lg-8 col-md-12 col-12">
                    <div class="img-thumb">
                        <a href="?mod=home&act=main">
                            <img src="public/images/Adidas_Logo.png" alt="">
                        </a>
                    </div>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb bg-white">
                            <li class="breadcrumb-item home"><a href="?mod=cart&act=main">Giỏ hàng</a></li>
                            <li class="breadcrumb-item active"><a href="#">Thông tin giao hàng</a></li>
                        </ol>
                    </nav>
                    <div class="detail">
                        <span>Thông tin giao hàng</span>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="username" required>
                        <label for="">Họ và tên</label>
                    </div>
                    <div class="row">
                        <div class="col-lg-8 col-md-12 col-12">
                            <div class="form-group">
                                <input type="text" class="form-control" name="email"  required>
                                <label for="">Email</label>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12 col-12">
                            <div class="form-group">
                                <input type="text" class="form-control" name="numberphone" required>
                                <label for="">Số điện thoại</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="address"  required>
                        <label for="">Địa chỉ</label>
                    </div>
                    <div class="detail">
                        <span>Phương thức thanh toán</span>
                    </div>
                    <div class="payment">
                        <div class="pay">
                            <input type="radio" name="payment" id="OCD" value="OCD" checked>
                            <label for="OCD">
                                <img src="public/images/ocd.png" alt="">
                                <span>Thanh toán khi giao hàng (OCD)</span>
                            </label>
                        </div>
                        <div class="pay">
                            <input type="radio" name="payment" id="MoMo" value="MoMo">
                            <label for="MoMo">
                                <img src="public/images/momo.png" alt="">
                                <span>Thanh toán MoMo</span>
                            </label>
                        </div>
                    </div>
                    <div class="complete">
                        <a href="?mod=cart&act=main">Giỏ hàng</a>
                        <input type="submit" class="btn-order" name="btn_order" value="Đặt hàng">
                    </div>
                </div>
                <div class="sidebar col-lg-4 col-md-12 col-12">
                    <div class="summary-order">
                        <div class="order">
                            <div class="summary-left">
                                <div class="img-order">
                                    <a href="">
                                        <img src="public/images/970d213c54764c0f9a2daf150099f6a7-9366.webp" alt="">
                                    </a>
                                </div>
                                <div class="number-order">
                                    1
                                </div>
                            </div>
                            <div class="summary-right">
                                <a href="">Áo thun nam nữ chính hãng</a>
                            </div>
                            <div class="summary-total">
                                90,000<span>đ</span>
                            </div>
                        </div>
                        <div class="order">
                            <div class="summary-left">
                                <div class="img-order">
                                    <a href="">
                                        <img src="public/images/970d213c54764c0f9a2daf150099f6a7-9366.webp" alt="">
                                    </a>
                                </div>
                                <div class="number-order">
                                    1
                                </div>
                            </div>
                            <div class="summary-right">
                                <a href="">Áo thun nam nữ chính hãng</a>
                            </div>
                            <div class="summary-total">
                                90,000<span>đ</span>
                            </div>
                        </div>
                    </div>
                    <div class="pay-total">
                        <div class="left">
                            Tổng cộng
                        </div>
                        <div class="right">
                            90,000,000<span>đ</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>