<?php echo get_header_login(); ?>
<form action="">
    <h3>Đăng nhập</h3>
    <div class="form-group">
        <input type="text" class="form-control" required>
        <label for="">Tên đăng nhập</label>
    </div>
    <div class="form-group">
        <input type="password" id="password" class="form-control" required>
        <label for="">Mật khẩu</label>
        <ion-icon name="eye-outline" id="eye-outline" onclick="showPass(this)"></ion-icon>
        <!-- <p class="error">Tên đăng nhập không đúng</p> -->
    </div>
    <div class="form-group">
        <input type="checkbox" name="" id="remember">
        <label for="remember" id="check">Nhớ mật khẩu</label>
    </div>
    <input type="submit" value="Đăng nhập" class="form-control">
    <div class="form-group">
        <a href="?mod=admin&act=forget-password" class="forget-pass">Quên mật khẩu!</a>
    </div>
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
</body>

</html>