<?php
require_once 'header.php';

require_once "models/user_candidate.php";

$user_candidate = new User_candidate;
?>

<div class="content-body" style="min-height: 796px;">
    <div class="container-fluid">

        <div class="row page-titles">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Users</a></li>
                <li class="breadcrumb-item"><a href="javascript:void(0)">Candidate</a></li>
            </ol>
        </div>
        <!-- row -->


        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Users Candidate</h4>
                        <a href="new-candidate.php" class="btn btn-primary me-3 btn-sm"><i class="fas fa-plus me-2"></i>Add Candidate</a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <div id="example3_wrapper" class="dataTables_wrapper no-footer">
                                <div class="dataTables_length" id="example3_length"><label>Show <select name="example3_length" aria-controls="example3" class="">
                                            <option value="10">10</option>
                                            <option value="25">25</option>
                                            <option value="50">50</option>
                                            <option value="100">100</option>
                                        </select> entries</label></div>
                                <div id="example3_filter" class="dataTables_filter"><label>Search:<input type="search" class="" placeholder="" aria-controls="example3"></label></div>
                                <table id="example3" class="display dataTable no-footer" style="min-width: 845px" role="grid" aria-describedby="example3_info">
                                    <thead>
                                        <tr role="row">
                                            <th class="sorting_asc" tabindex="0" aria-controls="example3" rowspan="1" colspan="1" aria-sort="ascending" aria-label=": activate to sort column descending" style="width: 30.4688px;"></th>
                                            <th class="sorting" tabindex="0" aria-controls="example3" rowspan="1" colspan="1" aria-label="Name: activate to sort column ascending" style="width: 104.172px;">Họ Tên</th>
                                            <th class="sorting" tabindex="0" aria-controls="example3" rowspan="1" colspan="1" aria-label="Gender: activate to sort column ascending" style="width: 51.2812px;">Giới Tính</th>
                                            <th class="sorting" tabindex="0" aria-controls="example3" rowspan="1" colspan="1" aria-label="Education: activate to sort column ascending" style="width: 93.2969px;">Bằng Cấp</th>
                                            <th class="sorting" tabindex="0" aria-controls="example3" rowspan="1" colspan="1" aria-label="Mobile: activate to sort column ascending" style="width: 75.1875px;">SĐT</th>
                                            <th class="sorting" tabindex="0" aria-controls="example3" rowspan="1" colspan="1" aria-label="Email: activate to sort column ascending" style="width: 107.906px;">Email</th>
                                            <th class="sorting" tabindex="0" aria-controls="example3" rowspan="1" colspan="1" aria-label="Joining Date: activate to sort column ascending" style="width: 87.7188px;">Joining Date</th>
                                            <th class="sorting" tabindex="0" aria-controls="example3" rowspan="1" colspan="1" aria-label="Action: activate to sort column ascending" style="width: 46.375px;">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $page = 1;
                                        $resultsPerPage = 5;
                                        $totalResults = count(User_candidate::getAllCandidate());
                                        /* var_dump(User_candidate::getAllCandidate());
                                        $totalLinks = ceil($totalResults / $resultsPerPage); */
                                        if (isset($_GET['page']) == TRUE) {
                                            $page = $_GET['page'];
                                        }
                                        $list_of_users = User_candidate::getAllUsers_andCreatePagination($page, $resultsPerPage);
                                        // Output:
                                        echo "<p style=\"text-align:center;\"><b>There are $totalResults results.</b></p>";
                                        if (isset($_SESSION['user']) && $_SESSION['user']['permission'] == 1) {
                                            foreach ($list_of_users as $key => $value) {
                                        ?>
                                                <tr role="row" class="odd">
                                                    <td class="sorting_1">
                                                        <img class="rounded-circle" width="35" src="images/profile/small/pic1.jpg" alt="">
                                                    </td>
                                                    <td><?php echo $value['username'] ?></td>
                                                    <td><?php echo $value['gioitinh'] ?></td>
                                                    <td><?php echo $value['bangcap'] ?></td>
                                                    <td><a href="javascript:void(0);"><strong><?php echo $value['sodienthoai'] ?></strong></a></td>
                                                    <td><a href="javascript:void(0);"><strong><?php echo $value['email'] ?></strong></a></td>
                                                    <td><?php echo $value['created_at'] ?></td>
                                                    <td><?php if ($value['permission'] == "Admin") {
                                                            echo "Admin";
                                                        } else {
                                                            echo "candidate";
                                                        } ?></td>
                                                    <td>
                                                        <div class="d-flex">
                                                            <a href="edit-user-candidate.php" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
                                                            <a href="delete-user-candidate.php?id=<?php echo $value['id'] ?>" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                            <?php
                                            }
                                        } else {
                                            foreach ($list_of_users as $key => $value) {
                                                // if($_SESSION['users']['id'] == $value['id']){
                                            ?>
                                                <tr role="row" class="even">
                                                    <td class="sorting_1">
                                                        <img class="rounded-circle" width="35" src="images/profile/small/pic1.jpg" alt="">
                                                    </td>
                                                    <td><?php echo $value['username'] ?></td>
                                                    <td><?php echo $value['gioitinh'] ?></td>
                                                    <td><?php echo $value['bangcap'] ?></td>
                                                    <td><a href="javascript:void(0);"><strong><?php echo $value['sodienthoai'] ?></strong></a></td>
                                                    <td><a href="javascript:void(0);"><strong><?php echo $value['email'] ?></strong></a></td>
                                                    <td><?php echo $value['created_at'] ?></td>
                                                    <td><?php if ($value['permission'] == "Admin") {
                                                            echo "Admin";
                                                        } else {
                                                            echo "candidate";
                                                        } ?></td>
                                                    <td>
                                                        <div class="d-flex">
                                                            <a href="edit-user-candidate.php" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
                                                            <a href="delete-user-candidate.php?id=<?php echo $value['id'] ?>" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                        <?php
                                            }
                                        } ?>

                                    </tbody>
                                </table>
                                <div class="d-flex align-items-center justify-content-sm-between justify-content-center flex-wrap">
                                    <span>Page 1 of 5, showing 2 records out of 8 total,
                                        starting on record 1, ending on 2</span>
                                    <nav aria-label="Page navigation example">
                                        <ul class="pagination my-2 my-md-0">
                                            <?php echo User_candidate::paginate("users-candidate.php?", $page, $totalResults, $resultsPerPage, 1) ?>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php
    require_once 'footer.php';
    ?>