<?php get_header() ?>
<div id="body-store">
    <div class="container">
        <div class="row">
            <div class="cart-left col-lg-8 col-md-12 col-12">
                <div class="heading-cart">
                    <p class="heading-detail">Giỏ hàng của bạn</p>
                    <p class="title-number-cart">Bạn đang có <strong>2 sản phẩm</strong> trong giỏ hàng</p>
                </div>
                <div class="list-cart">
                    <div class="cart-row">
                        <div class="table-cart">
                            <div class="item">
                                <div class="item-left">
                                    <a href="" class="item-img">
                                        <img src="public/images/970d213c54764c0f9a2daf150099f6a7-9366.webp" alt="">
                                    </a>
                                    <div class="item-remove">
                                        <a href="" class="delete-item">Xóa</a>
                                    </div>
                                </div>
                                <div class="item-right">
                                    <a class="item-info">
                                        Áo thun nam nữ
                                    </a>
                                    <div class="item-price">
                                        900,000<span>đ</span>
                                    </div>
                                </div>
                                <div class="item-total">
                                    <div class="item-total-price">
                                        900.000<span>đ</span>
                                    </div>
                                    <div class="item-qty">
                                        <a class="minus-btn" id="minus-1"><i class="fa-solid fa-circle-minus"></i></a>
                                        <input type="text" id="number-1" value="1" maxlength="3">
                                        <a class="plus-btn" id="plus-1"><i class="fa-solid fa-circle-plus"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="item-left">
                                    <a href="" class="item-img">
                                        <img src="public/images/970d213c54764c0f9a2daf150099f6a7-9366.webp" alt="">
                                    </a>
                                    <div class="item-remove">
                                        <a href="" class="delete-item">Xóa</a>
                                    </div>
                                </div>
                                <div class="item-right">
                                    <a class="item-info">
                                        Áo thun nam nữ
                                    </a>
                                    <div class="item-price">
                                        900,000<span>đ</span>
                                    </div>
                                </div>
                                <div class="item-total">
                                    <div class="item-total-price">
                                        900.000<span>đ</span>
                                    </div>
                                    <div class="item-qty">
                                        <a class="minus-btn" id="minus-2"><i class="fa-solid fa-circle-minus"></i></a>
                                        <input type="text" id="number-2" value="1" maxlength="3">
                                        <a class="plus-btn" id="plus-2"><i class="fa-solid fa-circle-plus"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="cart-right col-lg-4 col-md-12 col-12">
                <div class="wrap-order">
                    <div class="order-sumary">
                        <div class="sumary-total">
                            <div class="total-top">
                                <p>Tổng tiền</p>
                                <div class="number-total">
                                    8,500,000<span>đ</span>
                                </div>
                            </div>
                        </div>
                        <div class="sumary-action">
                            <div>
                                ĐỔI HÀNG MIỄN PHÍ - tại tất cả các cửa hàng trong 15 ngày
                            </div>
                        </div>
                        <button class="btn w-100">
                            <a href="?mod=payment&act=main">thanh toán</a>
                        </button>
                    </div>
                    <div class="order-sumary-notify">
                        <p>Chính sách mua hàng</p>
                        <span>Hiện chúng tôi đang áp dụng giao hàng trên toàn quốc</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    var value_1 = parseInt($("#number-1").attr("value"));
    $("#plus-1").click(function() {
        value_1++;
        $("#number-1").attr("value", value_1);
        update_href(value_1);
    });
    $("#minus-1").click(function() {
        if (value_1 > 1) {
            value_1--;
            $("#number-1").attr("value", value_1);
        }
        update_href(value_1);
    });
</script>
<script>
    var value_2 = parseInt($("#number-2").attr("value"));
    $("#plus-2").click(function() {
        value_2++;
        $("#number-2").attr("value", value_2);
        update_href(value_2);
    });
    $("#minus-2").click(function() {
        if (value_2 > 1) {
            value_2--;
            $("#number-2").attr("value", value_2);
        }
        update_href(value_2);
    });
</script>