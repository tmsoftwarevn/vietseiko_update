<?php
require_once "header.php";
?>
    <!-- BEGIN CONTENT -->
    <div id="content">
        <div id="content-header">
            <div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom current"><i class="icon-home"></i>
                    Home</a></div>
            <h1>Add New Product</h1>
        </div>
        <div class="container-fluid">
            <hr>
            <div class="row-fluid">
                <div class="span12">
                    <div class="widget-box">
                        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
                            <h5>Product info</h5>
                        </div>
                        <div class="widget-content nopadding">


                        <!-- ____________________________________________________________________________________________________ -->
                        <!-- FUNCTION: Update products. -->
                        <?php
                            if(isset($_GET['functionType']) == TRUE && $_GET['functionType']=="job" && isset($_GET['id_job'])==TRUE) {
                                $selectedJOb = Job::getJob_ByID($_GET['id_job']);
                        ?>
                            <!-- BEGIN USER FORM -->
                            <form action="update_product.php" method="post" class="form-horizontal"
                                enctype="multipart/form-data">
                                <div class="control-group">
                                    <label class="control-label">ID :</label>
                                    <div class="controls">
                                    <input type="text" name="id" value="<?php echo $selectedProduct['id']; ?>" readonly>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Name :</label>
                                    <div class="controls">
                                        <input type="text" class="span11" placeholder="Product name" name="name" value="<?php echo $selectedProduct['name']; ?>" required /> *
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Choose a manufacture:</label>
                                    <div class="controls">
                                        <?php
                                            $list_of_nganhnghe = Nganhnghe::getAllNganhnghe();
                                        ?>
                                        <select name="id_nganhnghe" id="cate">
                                            <?php
                                                foreach($list_of_nganhnghe as $key => $value) {
                                            ?>
                                            <option value="<?php echo $value['id_nganhnghe']; ?>" <?php if($selectedProduct['id_nganhnghe']==$value['manu_id']) { echo "selected"; } ?>>
                                                <?php echo $value['name_nganhnghe']; ?>
                                            </option>
                                            <?php
                                                }
                                            ?>
                                        </select> *
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Choose a product type:</label>
                                    <div class="controls">
                                        <?php
                                            $list_of_hinhthuc = Hinhthuc::getAllHinhthuc();
                                        ?>
                                        <select name="id_hinhthuc" id="subcate">
                                            <?php
                                                foreach($list_of_hinhthuc as $key => $value) {
                                            ?>
                                            <option value="<?php echo $value['id_hinhthuc']; ?>" <?php if($selectedProduct['id_hinhthuc']==$value['type_id']) { echo "selected"; } ?>>
                                                <?php echo $value['name_hinhthuc']; ?>
                                            </option>
                                            <?php
                                                }
                                            ?>
                                        </select> *
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label">Current image :</label>
                                        <div class="controls" style="width:25%;height:auto;">
                                            <img
                                                src="../images/<?= $selectedProduct['pro_image']; ?>"
                                                alt="" />
                                            <input type="text" name="fileName" id="fileName" value="<?php echo $selectedProduct['pro_image']; ?>" readonly style="font-style:italic;">
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label">Change image :</label>
                                        <div class="controls">
                                            <input type="file" name="fileUpload" id="fileUpload">
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label">Description</label>
                                        <div class="controls">
                                            <textarea class="span11" placeholder="Description" name="description"><?php echo $selectedProduct['description']; ?></textarea>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label">Price :</label>
                                            <div class="controls">
                                                <input type="text" class="span11" placeholder="price" name="price" value="<?php echo $selectedProduct['price']; ?>" required /> *
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label">Feature :</label>
                                            <div class="controls">
                                                <input type="number" class="span11" name="feature" min="0" max="1" value="<?php echo $selectedProduct['feature']; ?>" required /> *
                                            </div>
                                        </div>
                                        <div class="form-actions" style="text-align:center;">
                                            <button type="submit" name="submit" class="btn btn-success" style="padding:5px 50px;">Update</button>
                                        </div>
                                    </div>
                            </form>
                            <!-- INSERT RESULT: -->
                            <div style="padding:30px 0;text-align:center;font-weight:bold;font-size:15px;">
                                <?php
                                    echo "<div style=\"text-decoration:underline;\">RESULT:</div>";
                                    if(isset($_GET['updateResult']) == TRUE) {
                                        if($_GET['updateResult'] > 0) {
                                            echo "<span style=\"color:green;\">" . "Updated successfully!" . "</span>";
                                        }
                                        else {
                                            echo "<span style=\"color:red;\">" . "Fail to update!" . "</span>";
                                        }
                                    }
                                ?>
                            </div>
                            <!-- END USER FORM -->
                        <?php
                            }
                        ?>



                        <!-- ____________________________________________________________________________________________________ -->
                        <!-- FUNCTION: Update nganhnghe. -->
                        <?php
                            if(isset($_GET['functionType']) == TRUE && $_GET['functionType']=="job_nganhnghe" && isset($_GET['id_nganhnghe'])==TRUE) {
                                $selectedNganhnghe = Nganhnghe::getBrand($_GET['id_nganhnghe']);
                        ?>
                        <!-- BEGIN USER FORM -->
                        <form action="update_nganhnghe.php" method="get" class="form-horizontal"
                            enctype="multipart/form-data">
                            <div class="control-group">
                                <label class="control-label">Ngành nghề ID :</label>
                                <div class="controls">
                                <input type="text" name="id_nganhnghe" value="<?php echo $_GET['id_nganhnghe']; ?>" readonly>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Ngành Nghề name:</label>
                                <div class="controls">
                                    <input type="text" class="span11" placeholder="Ngành nghề name" name="name_nganhnghe" required value="<?php echo $selectedManu; ?>" /> *
                                </div>
                                <div class="form-actions" style="text-align:center;">
                                    <button type="submit" name="submit" class="btn btn-success" style="padding:5px 50px;">Update</button>
                                </div>
                            </div>
                        </form>
                        <!-- INSERT RESULT: -->
                        <div style="padding:30px 0;text-align:center;font-weight:bold;font-size:15px;">
                            <?php
                                echo "<div style=\"text-decoration:underline;\">RESULT:</div>";
                                if(isset($_GET['updateResult']) == TRUE) {
                                    if($_GET['updateResult'] > 0) {
                                        echo "<span style=\"color:green;\">" . "Updated successfully!" . "</span>";
                                    }
                                    else {
                                        echo "<span style=\"color:red;\">" . "Fail to update!" . "</span>";
                                    }
                                }
                            ?>
                        </div>
                        <!-- END USER FORM -->
                        <?php
                            }
                        ?>



                        <!-- ____________________________________________________________________________________________________ -->
                        <!-- FUNCTION: Update product types. -->
                        <?php
                            if(isset($_GET['functionType']) == TRUE && $_GET['functionType']=="protypes" && isset($_GET['type_id'])==TRUE) {
                                $selectedProtype = Protype::getTypeName($_GET['type_id']);
                        ?>
                        <!-- BEGIN USER FORM -->
                        <form action="update_protype.php" method="get" class="form-horizontal"
                            enctype="multipart/form-data">
                            <div class="control-group">
                                <label class="control-label">Type ID :</label>
                                <div class="controls">
                                <input type="text" name="type_id" value="<?php echo $_GET['type_id']; ?>" readonly>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Product type:</label>
                                <div class="controls">
                                    <input type="text" class="span11" placeholder="Product type" name="type_name" value="<?php echo $selectedProtype; ?>" required /> *
                                </div>
                                <div class="form-actions" style="text-align:center;">
                                    <button type="submit" name="submit" class="btn btn-success" style="padding:5px 50px;">Update</button>
                                </div>
                            </div>
                        </form>
                        <!-- INSERT RESULT: -->
                        <div style="padding:30px 0;text-align:center;font-weight:bold;font-size:15px;">
                            <?php
                                echo "<div style=\"text-decoration:underline;\">RESULT:</div>";
                                if(isset($_GET['updateResult']) == TRUE) {
                                    if($_GET['updateResult'] > 0) {
                                        echo "<span style=\"color:green;\">" . "Updated successfully!" . "</span>";
                                    }
                                    else {
                                    echo "<span style=\"color:red;\">" . "Fail to update!" . "</span>";
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
    <!--Footer-part-->
    <div class="row-fluid">
        <div id="footer" class="span12"> 2017 &copy; TDC - Lập trình web 1</div>
    </div>
    <!--end-Footer-part-->
    <script src="js/jquery.min.js"></script>
    <script src="js/jquery.ui.custom.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.uniform.js"></script>
    <script src="js/select2.min.js"></script>
    <script src="js/jquery.dataTables.min.js"></script>
    <script src="js/matrix.js"></script>
    <script src="js/matrix.tables.js"></script>
</body>

</html>