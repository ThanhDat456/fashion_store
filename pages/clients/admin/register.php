<?php  echo get_header_login(); ?>
<form action="">
    <h3>Đăng ký</h3>
    <div class="form-group">
        <input type="text" class="form-control" required>
        <label for="">Họ và tên</label>
    </div>
    <div class="form-group">
        <input type="text" class="form-control" required>
        <label for="">Tên đăng nhập</label>
    </div>
    <div class="form-group">
        <input type="text" class="form-control" required>
        <label for="">Email</label>
    </div>
    <div class="form-group">
        <input type="password" id="password" class="form-control" required>
        <label for="">Mật khẩu</label>
        <ion-icon name="eye-outline" id="eye-outline" onclick="showPass(this)"></ion-icon>
    </div>
    <div class="form-group">
        <input type="password" id="confirm-password" class="form-control" required>
        <label for="">Xác nhận mật khẩu</label>
        <ion-icon name="eye-outline" id="eye-outline" onclick="showConfirmPass(this)"></ion-icon>
    </div>
    <input type="submit" value="Đăng ký" class="form-control">
</form>
</div>
<script>
    let num = 0;

    function showPass() {
        if (num == 0) {
            document.getElementById("password").type = "text";
            num = 1;
        } else {
            document.getElementById("password").type = "password";
            num = 0;
        }
    }
</script>
<script>
    let num_confirm = 0;

    function showConfirmPass() {
        if (num_confirm == 0) {
            document.getElementById("confirm-password").type = "text";
            num_confirm = 1;
        } else {
            document.getElementById("confirm-password").type = "password";
            num_confirm = 0;
        }
    }
</script>
</body>

</html>