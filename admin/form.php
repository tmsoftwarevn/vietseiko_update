<?php
require_once "header.php";
?>
<!-- BEGIN CONTENT -->
<div id="content">
    <div id="content-header" style="margin-top: 37px;margin-left: 40px;">
        <div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom current"><i class="icon-home"></i>
                Home</a></div>
        <h1 style="font-size: 20px;">Add New Job</h1>
    </div>
    <div class="container-fluid" style="padding-right: calc(var(--bs-gutter-x) * 2); padding-left: calc(var(--bs-gutter-x) * 2);">
        <hr>
        <div class="row-fluid">
            <div class="span12">
                <div class="widget-box">
                    <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
                        <h5></h5>
                    </div>
                    <div class="widget-content nopadding">


                        <!-- ____________________________________________________________________________________________________ -->
                        <!-- FUNCTION: Insert job. -->
                        <?php
                        if (isset($_GET['functionType']) == TRUE && $_GET['functionType'] == "job") {
                        ?>
                            <!-- BEGIN USER FORM -->
                            <form action="insert_job.php" method="post" class="form-horizontal" enctype="multipart/form-data">
                                <div class="control-group">
                                    <label class="control-label">Tên Công Ty :</label>
                                    <div class="controls">
                                        <input type="text" class="span11" placeholder="Tên công ty" name="name" required /> *
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Logo Cty :</label>
                                    <div class="controls">
                                        <input type="file" name="fileUpload" id="fileUpload" required>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Vị Trí :</label>
                                    <div class="controls">
                                        <input type="text" class="span11" placeholder="Vị trí" name="chucvu" required /> *
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Ngành nghề:</label>
                                    <div class="controls">
                                        <?php
                                        $list_of_nganhnghe = Nganhnghe::getAllNganhnghe();
                                        ?>
                                        <select name="id_nganhnghe" id="subcate">
                                            <?php
                                            foreach ($list_of_nganhnghe as $key => $value) {
                                            ?>
                                                <option value="<?php echo $value['id_nganhnghe']; ?>"><?php echo $value['name_nganhnghe']; ?></option>
                                            <?php
                                            }
                                            ?>
                                        </select> *
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Cấp Bậc:</label>
                                    <div class="controls">
                                        <input type="text" class="span11" placeholder="Chức vụ" name="capbac" required /> *
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Số Lượng :</label>
                                    <div class="controls">
                                        <input type="text" class="span11" placeholder="Số lượng" name="soluong" required /> *
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Kinh Nghiệm :</label>
                                    <div class="controls">
                                        <input type="text" class="span11" placeholder="Kinh nghiệm" name="kinhnghiem" required /> *
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Ngày Đăng :</label>
                                    <div class="controls">
                                        <input type="text" class="span11" placeholder="01-01-2012" name="ngaydang" required /> *
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Ngày hết hạn :</label>
                                    <div class="controls">
                                        <input type="text" class="span11" placeholder="01-01-2012" name="ngaycuoicung" required /> *
                                    </div>
                                </div>

                                <div class="control-group">
                                    <label class="control-label">Giới Tính :</label>
                                    <div class="controls">
                                        <input type="text" class="span11" placeholder="Nam/Nữ" name="gioitinh" required /> *
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Mức Lương :</label>
                                    <div class="controls">
                                        <input type="text" class="span11" placeholder="Mức lương" name="mucluong" required /> *
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Địa Chỉ :</label>
                                    <div class="controls">
                                        <input type="text" class="span11" placeholder="HCM" name="diachi" required /> *
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Địa Chỉ Cụ Thể :</label>
                                    <div class="controls">
                                        <input type="text" class="span11" placeholder="Địa chỉ củ thể" name="diachi_cuthe" required /> *
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Hình thức:</label>
                                    <div class="controls">
                                        <?php
                                        $list_of_hinhthuc = Hinhthuc::getAllHinhthuc();
                                        ?>
                                        <select name="id_hinhthuc" id="cate">
                                            <?php
                                            foreach ($list_of_hinhthuc as $key => $value) {
                                            ?>
                                                <option value="<?php echo $value['id_hinhthuc']; ?>"><?php echo $value['name_hinhthuc']; ?></option>
                                            <?php
                                            }
                                            ?>
                                        </select> *
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Mô tả công việc</label>
                                    <div class="controls">
                                        <textarea class="span11" placeholder="Mô tả công việc" name="mota"></textarea>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label">Yêu cầu</label>
                                        <div class="controls">
                                            <textarea class="span11" placeholder="Yêu cầu" name="yeucau"></textarea>
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label">Quyền Lợi</label>
                                        <div class="controls">
                                            <textarea class="span11" placeholder="Quyền lợi" name="quyenloi"></textarea>
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label">Trạng thái:</label>
                                        <div class="controls">
                                            <?php
                                            $list_of_trangthai = Trangthai::getAllTrangthai();
                                            ?>
                                            <select name="id_trangthai" id="subcate">
                                                <?php
                                                foreach ($list_of_trangthai as $key => $value) {
                                                ?>
                                                    <option value="<?php echo $value['id_trangthai']; ?>"><?php echo $value['name_trangthai']; ?></option>
                                                <?php
                                                }
                                                ?>
                                            </select> *
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label">Feature :</label>
                                        <div class="controls">
                                            <input type="number" class="span11" name="feature" min="0" max="1" required /> *
                                        </div>
                                    </div>
                                    <div class="form-actions" style="text-align:center;">
                                        <button type="submit" name="submit" class="btn btn-success" style="padding:5px 50px;">Add</button>
                                    </div>
                                </div>
                            </form>
                            <!-- INSERT RESULT: -->
                            <div style="padding:30px 0;text-align:center;font-weight:bold;font-size:15px;">
                                <?php
                                echo "<div style=\"text-decoration:underline;\">RESULT:</div>";
                                if (isset($_GET['insertResult']) == TRUE) {
                                    if ($_GET['insertResult'] > 0) {
                                        echo "<span style=\"color:green;\">" . "Data has been inserted." . "</span>";
                                    } else {
                                        echo "<span style=\"color:red;\">" . "Can not insert data!" . "</span>";
                                    }
                                }
                                ?>
                            </div>
                            <!-- END USER FORM -->
                        <?php
                        }
                        ?>



                        <!-- ____________________________________________________________________________________________________ -->
                        <!-- FUNCTION: Insert nganhnghe. -->
                        <?php
                        if (isset($_GET['functionType']) == TRUE && $_GET['functionType'] == "job_nganhnghe") {
                        ?>
                            <!-- BEGIN USER FORM -->
                            <form action="insert_nganhnghe.php" method="get" class="form-horizontal" enctype="multipart/form-data">
                                <div class="control-group">
                                    <label class="control-label">Ngành nghề name:</label>
                                    <div class="controls">
                                        <input type="text" class="span11" placeholder="Nganh nghe" name="name_nganhnghe" required /> *
                                    </div>
                                    <div class="form-actions" style="text-align:center;">
                                        <button type="submit" name="submit" class="btn btn-success" style="padding:5px 50px;">Add</button>
                                    </div>
                                </div>
                            </form>
                            <!-- INSERT RESULT: -->
                            <div style="padding:30px 0;text-align:center;font-weight:bold;font-size:15px;">
                                <?php
                                echo "<div style=\"text-decoration:underline;\">RESULT:</div>";
                                if (isset($_GET['insertResult']) == TRUE) {
                                    if ($_GET['insertResult'] > 0) {
                                        echo "<span style=\"color:green;\">" . "Data has been inserted." . "</span>";
                                    } else {
                                        echo "<span style=\"color:red;\">" . "Can not insert data!" . "</span>";
                                    }
                                }
                                ?>
                            </div>
                            <!-- END USER FORM -->
                        <?php
                        }
                        ?>



                        <!-- ____________________________________________________________________________________________________ -->
                        <!-- FUNCTION: Insert Hình thức -->
                        <?php
                        if (isset($_GET['functionType']) == TRUE && $_GET['functionType'] == "job_hinhthuc") {
                        ?>
                            <!-- BEGIN USER FORM -->
                            <form action="insert_hinhthuc.php" method="get" class="form-horizontal" enctype="multipart/form-data">
                                <div class="control-group">
                                    <label class="control-label">Hình thức:</label>
                                    <div class="controls">
                                        <input type="text" class="span11" placeholder="Hình thức" name="name_hinhthuc" required /> *
                                    </div>
                                    <div class="form-actions" style="text-align:center;">
                                        <button type="submit" name="submit" class="btn btn-success" style="padding:5px 50px;">Add</button>
                                    </div>
                                </div>
                            </form>
                            <!-- INSERT RESULT: -->
                            <div style="padding:30px 0;text-align:center;font-weight:bold;font-size:15px;">
                                <?php
                                echo "<div style=\"text-decoration:underline;\">RESULT:</div>";
                                if (isset($_GET['insertResult']) == TRUE) {
                                    if ($_GET['insertResult'] > 0) {
                                        echo "<span style=\"color:green;\">" . "Data has been inserted." . "</span>";
                                    } else {
                                        echo "<span style=\"color:red;\">" . "Can not insert data!" . "</span>";
                                    }
                                }
                                ?>
                            </div>
                            <!-- END USER FORM -->
                        <?php
                        }
                        ?>

                        <!-- ____________________________________________________________________________________________________ -->
                        <!-- FUNCTION: Insert users. -->
                        <?php
                        if (isset($_GET['functionType']) == TRUE && $_GET['functionType'] == "users") {
                        ?>
                            <!-- BEGIN USER FORM -->
                            <form action="insert_user.php" method="get" class="form-horizontal" enctype="multipart/form-data">
                                <div class="control-group">
                                    <label class="control-label">Username:</label>
                                    <div class="controls">
                                        <input type="text" class="span11" placeholder="Product type" name="username" required /> *
                                    </div>
                                    <label class="control-label">Password:</label>
                                    <div class="controls">
                                        <input type="text" class="span11" placeholder="Product type" name="password" required /> *
                                    </div>
                                    <label class="control-label">Role:</label>
                                    <div class="controls">
                                        <select name="role" id="role">
                                            <option value="1">Super Admin</option>
                                            <option value="2">Admin</option>
                                        </select> *
                                    </div>

                                    <div class="form-actions" style="text-align:center;">
                                        <button type="submit" name="submit" class="btn btn-success" style="padding:5px 50px;">Add</button>
                                    </div>
                                </div>
                            </form>
                            <!-- INSERT RESULT: -->
                            <div style="padding:30px 0;text-align:center;font-weight:bold;font-size:15px;">
                                <?php
                                echo "<div style=\"text-decoration:underline;\">RESULT:</div>";
                                if (isset($_GET['insertResult']) == TRUE) {
                                    if ($_GET['insertResult'] > 0) {
                                        echo "<span style=\"color:green;\">" . "User has been inserted." . "</span>";
                                    } else {
                                        echo "<span style=\"color:red;\">" . "Can not insert User!" . "</span>";
                                    }
                                }
                                ?>
                            </div>
                            <!-- END USER FORM -->
                        <?php
                        }
                        ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END CONTENT -->
<?php
require_once "footer.php";
?>