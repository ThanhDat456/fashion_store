</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
<script>
    let num = 0;
    function showPassword() {
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
    let num_old = 0;
    function showOldPassword() {
        if (num_old == 0) {
            document.getElementById("old-password").type = "text";
            num_old = 1;
        } else {
            document.getElementById("old-password").type = "password";
            num_old = 0;
        }
    }
</script>
<script>
    let num_confirm = 0;
    function showConfirmPassword() {
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