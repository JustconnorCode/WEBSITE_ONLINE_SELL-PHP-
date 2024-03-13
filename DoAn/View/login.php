<div id="perloader"></div>
<div style="background-color: #D8D8D8;">
    <div class="container1">
        <div class="screen">
            <div class="screen__content">
                <form class="login" method="post" action="index.php?action=login&act=dangnhap_action">
                    <div class="login__field">
                        <input type="text" class="login__input" placeholder="User name / Email" name="tendangnhap">
                    </div>
                    <div class="login__field">
                        <input type="password" class="login__input" placeholder="Password" name="matkhau">
                    </div>
                    <button type="submit" name="submit" class="button login__submit pb-3">
                        <span class="">Đăng nhập</span>
                    </button>
                    <a href="index.php?action=forget"><button type="button" name="" class="button login__submit pb-3">
                            <span class="">Quên mật khẩu</span>
                        </button></a>
                </form>
            </div>
            <div class="screen__background">
                <span class="screen__background__shape screen__background__shape4"></span>
                <span class="screen__background__shape screen__background__shape3"></span>
                <span class="screen__background__shape screen__background__shape2"></span>
                <span class="screen__background__shape screen__background__shape1"></span>
            </div>
        </div>
    </div>
</div>
<script>
    var loader = document.getElementById('perloader');
    window.addEventListener('load', function() {
        loader.style.display = 'none';
    })
</script>