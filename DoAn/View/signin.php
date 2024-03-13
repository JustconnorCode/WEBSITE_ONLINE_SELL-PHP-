<div id="perloader"></div>
<div style="background-color: #D8D8D8;" class="p-5 mt-5">
    <div class="container">
        <div class="row">
            <div class="col-2 p-0 "></div>
            <div class="col-5 bg-light p-0">
                <form action="index.php?action=signin&act=dangky_action" method="post">
                    <table class="table">
                        <tbody>
                            <tr>
                                <td scope="row">Tên Khách Hàng:</td>
                                <td><input class="form-control" name="txttenkh" placeholder="Tên khách hàng" required=""
                                        autofocus="" type="text"> </td>
                            </tr>
                            <tr>
                                <td scope="row">Địa chỉ:</td>
                                <td><input class="form-control" name="txtdiachi" placeholder="Địa chỉ khách hàng"
                                        required="" autofocus="" type="text"></td>
                            </tr>
                            <tr>
                                <td scope="row">Số Điện Thoại:</td>
                                <td><input class="form-control" name="txtsodt" placeholder="Số điện thoại khách hàng"
                                        required="" autofocus="" type="text">
                                </td>
                            </tr>
                            <tr>
                                <td>Tên Đăng Nhập:</td>
                                <td><input class="form-control" name="txtusername" placeholder="Tên đăng nhập"
                                        required="" type="text"></td>
                            </tr>
                            <tr>
                                <td>Mật khẩu</td>
                                <td><input class="form-control" name="txtpass" placeholder="Mật khẩu" type="password">
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><input class="form-control" name="retypepassword" placeholder="Nhập lại mật khẩu"
                                        type="password"></td>
                            </tr>
                            <tr>
                                <td>Email:</td>
                                <td><input class="form-control" name="txtemail" placeholder="Email" type="email">
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <button type="submit" name="submit" style="width: 100%;" class="bg-dark text-light">Đăng
                        ký</button>
                </form>
            </div>
            <div class="col-2 p-0 ">
                <img src="./Content/picture/PHO.jpg" alt="" style="height: 100%;">
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