<div class="container">
    <nav>
        <div class="nav nav-tabs bg-warning" id="nav-tab" role="tablist" style="margin-top: 50px; margin-bottom: 30px;">
            <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Quản lý thức ăn</a>
            <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Quản lý nhân viên</a>
            <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Quản lý khách hàng</a>
        </div>
    </nav>
    <div class="tab-content" id="nav-tabContent">
        <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
            <h1 style="text-align: center;">DANH SÁCH THỨC ĂN</h1>
            <P style="text-align: center;">
                <a href="index.php?action=thucan&act=add_thucan">
                    <button type="button" class="btn btn-success">Thêm</button>
                </a>
            </P>
            <div class="row">
                <table class="table table-striped" style="width: 100%;">
                    <thead>
                        <tr class="table bg-dark text-light">
                            <th>Mã</th>
                            <th>Ảnh</th>
                            <th>Món ăn</th>
                            <th>Loại</th>
                            <th>Mô tả </th>
                            <th>Giá</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $hh = new thucan();
                        $result = $hh->getthucan();
                        while ($set = $result->fetch()) :
                        ?>
                            <?php
                            if ($set['hidden'] == 0) {
                            ?>
                                <tr>
                                    <td><?php echo $set['mata']; ?></td>
                                    <td><img src="./Content/picture/<?php echo $set['hinhta']; ?>" alt="" style="width: 50%;">
                                    </td>
                                    <td><?php echo $set['tenta']; ?></td>
                                    <td><?php echo $set['maloaita']; ?></td>
                                    <td><?php echo $set['motata']; ?></td>
                                    <td><?php echo $set['giata']; ?></td>
                                    <td><a href="index.php?action=thucan&act=update_thucan&id=<?php echo $set['mata']; ?>"><button type="button" class="btn btn-primary"><i class="fas fa-edit"></i></button></a>
                                    </td>
                                    <td><a href="index.php?action=thucan&act=hidden_thucan&id=<?php echo $set['mata']; ?>"><button type="button" class="btn btn-danger"><i class="fa fa-eye-slash" aria-hidden="true"></i></button></a>
                                    </td>
                                </tr>
                            <?php
                            } else {
                            ?>
                                <tr>
                                    <td colspan="8">
                                        <a href="index.php?action=thucan&act=hidden_thucan&id=<?php echo $set['mata']; ?>"><button type="button" class="btn btn-danger" style="width: 100%;"><i class="fa fa-eye-slash" aria-hidden="true"></i></button></a>
                                    </td>
                                </tr>
                            <?php
                            }
                            ?>
                        <?php
                        endwhile;
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
            <h1 style="text-align: center;">DANH SÁCH NHÂN VIÊN</h1>
            <P style="text-align: center;">
                <a href="index.php?action=thucan&act=add_nhanvien">
                    <button type="button" class="btn btn-success">Thêm</button>
                </a>
            </P>
            <div class="row">
                <table class="table table-striped" style="width: 100%;">
                    <thead>
                        <tr class="table bg-dark text-light">
                            <th>Mã nhân viên</th>
                            <th>Họ và tên</th>
                            <th>Địa chỉ</th>
                            <th>Username</th>
                            <th>Vị trí</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $hh = new nhanvien();
                        $result = $hh->getnhavien();
                        while ($set = $result->fetch()) :
                        ?>
                            <tr>
                                <td><?php echo $set['idnv']; ?></td>
                                <td><?php echo $set['hoten']; ?></td>
                                <td><?php echo $set['dia']; ?></td>
                                <td><?php echo $set['username']; ?></td>
                                <td>
                                    <?php
                                    switch ($set['role']) {
                                        case 1:
                                            echo "Admin";
                                            break;
                                        case 2:
                                            echo "Quản lý";
                                            break;
                                        case 3:
                                            echo "Nhân viên";
                                            break;
                                    }
                                    ?>
                                </td>
                                <td><a href="index.php?action=thucan&act=update_nhanvien&id=<?php echo $set['idnv']; ?>"><button type="button" class="btn btn-primary"><i class="fas fa-edit"></i></button></a>
                                </td>
                                <td><a href="index.php?action=thucan&act=delete_nhavien&id=<?php echo $set['idnv']; ?>"><button type="button" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></button></a>
                                </td>
                            </tr>
                        <?php
                        endwhile;
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
            <h1 style="text-align: center;">DANH SÁCH KHÁC HÀNG</h1>
            <div class="row">
                <table class="table table-striped" style="width: 100%;">
                    <thead>
                        <tr class="table bg-dark text-light">
                            <th>Mã khách hàng</th>
                            <th>Họ và tên</th>
                            <th>Username</th>
                            <th>Email</th>
                            <th>Địa chỉ</th>
                            <th>Số điện thoại</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $hh = new khachhang();
                        $result = $hh->getkhachhang();
                        while ($set = $result->fetch()) :
                            if ($set['cam'] == 0) {
                        ?>
                                <tr>
                                    <td><?php echo $set['makh']; ?></td>
                                    <td><?php echo $set['tenkh']; ?></td>
                                    <td><?php echo $set['username']; ?></td>
                                    <td><?php echo $set['email']; ?></td>
                                    <td><?php echo $set['diachi']; ?></td>
                                    <td><?php echo $set['sodienthoai']; ?></td>
                                    <td><a href="index.php?action=thucan&act=silent&id=<?php echo $set['makh']; ?>"><button type="button" class="btn btn-warning"><i class="fa fa-user-times" aria-hidden="true"></i></button></a>
                                    </td>
                                    <td><a href="index.php?action=thucan&act=ban&id=<?php echo $set['makh']; ?>"><button type="button" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></button></a>
                                    </td>
                                </tr>
                            <?php
                            } else {
                            ?>
                                <tr>
                                    <td colspan="4"><a href="index.php?action=thucan&act=silent&id=<?php echo $set['makh']; ?>"><button type="button" class="btn btn-warning" style="width: 100%;"><i class="fa fa-user-times" aria-hidden="true"></i></button></a></td>
                                    <td colspan="4">
                                        <a href="index.php?action=thucan&act=ban&id=<?php echo $set['makh']; ?>"><button type="button" class="btn btn-danger" style="width: 100%;"><i class="fa fa-trash" aria-hidden="true"></i></button></a>
                                    </td>
                                </tr>
                        <?php
                            }
                        endwhile;
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>