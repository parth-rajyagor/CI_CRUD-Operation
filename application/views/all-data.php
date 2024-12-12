<?php
defined('BASEPATH') OR exit('No direct script allowed');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Crud Operation - Read Data</title>
</head>
<body>
    <div class="container">
        <a href="add-data" class="btn btn-info text-light my-3 d-flex justify-content-center">Add data</a>
        <h3 class="text-success text-center mb-3">User's Data</h3>
        <table class="table-bordered d-flex justify-content-center">
            <?php if(!empty($arr)) {?>
                <tr class="bg-info text-center">
                    <th>Sr No</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Language</th>
                    <th>Gender</th>
                    <th>Qualification</th>
                    <th>Image</th>
                    <th>Added_on</th>
                    <th>Updated_on</th>
                    <th>Status</th>
                    <th colspan="2">Action</th>
                </tr>
            <?php
                foreach($arr as $key=>$value) {
                    if($value->status=='1'){
                        $status='<span class="badge bg-success">Active</span>';
                    }
                    else {
                        $status='<span class="badge bg-danger">Deactive</span>';
                    }
                    ?>
                <tr class="bg-secondary text-light text-center">
                    <td><?=++$key?></td>
                    <td><?=$value->name?></td>
                    <td><?=$value->email?></td>
                    <td><?=$value->phone?></td>
                    <td><?=$value->language?></td>
                    <td><?=$value->gender?></td>
                    <td><?=$value->qualification?></td>
                    <td><img src="<?=base_url()?>/uploads/<?=$value->image?>" alt="user_image" width="100em"></td>
                    <td><?=$value->added_on?></td>
                    <td><?=$value->updated_on?></td>
                    <td><?=$status?></td>
                    <td><a href="all-data/<?=$value->id?>" class="btn btn-primary text-light mx-3">Update</a></td>
                    <td><a href="delete-data/<?=$value->id?>" class="btn btn-danger text-light mx-3">Delete</a></td>
                </tr>
                <?php }
            }
            else echo "<h1 class='text-center text-danger mt-5'>No record found</h1>"?>
        </table>
    </div>
</body>
</html>
