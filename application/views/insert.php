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
    <title>Crud Operation - Insert Data</title>
</head>
<body>
    <div class="container">
        <?php 
            if(!empty($arr->id)) {
                echo form_open_multipart('crudcontroller/update-data');
            }
            else {
                echo "<a href='all-data' class='btn btn-info text-light mt-5'>View data</a>";
                echo form_open_multipart('crudcontroller/add-data');

            }
        ?>
        <div class="row mt-5">
            <div class="col-md-12 col-lg-12">
                    <div class="col-md-6 col-lg-6 mb-3 m-auto">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" name="name" id="name" placeholder="Enter your name" class="form-control" value="<?=set_value('name',(!empty($arr->name) ? $arr->name: ''))?>">
                        <?=form_error('name')?>
                    </div>
                    <div class="col-md-6 col-lg-6 mb-3 m-auto">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" name="email" id="email" placeholder="Enter your email" class="form-control" value="<?=set_value('email',(!empty($arr->email) ? $arr->email: ''))?>">
                        <?=form_error('email')?>
                    </div>
                    <div class="col-md-6 col-lg-6 mb-3 m-auto">
                        <label for="phone" class="form-label">Phone</label>
                        <input type="phone" name="phone" id="phone" placeholder="Enter your phone" class="form-control" value="<?=set_value('phone',(!empty($arr->phone) ? $arr->phone: ''))?>">
                        <?=form_error('phone')?>
                    </div>
                    <div class="col-md-6 col-lg-6 mb-3 m-auto">
                        <label for="language" class="form-label">Language</label>
                        <select name="language" id="language" class="form-select">
                            <option value="">Select language</option>
                            <option value="PHP" <?=set_select('language', 'PHP', (!empty($arr->id) && $arr->language=='PHP'))?>>PHP</option>
                            <option value="JAVA" <?=set_select('language', 'JAVA', (!empty($arr->id) && $arr->language=='JAVA'))?>>JAVA</option>
                            <option value="Python" <?=set_select('language', 'Python', (!empty($arr->id) && $arr->language=='Python'))?>>Python</option>
                        </select>
                        <?=form_error('language')?>
                    </div>
                    <div class="col-md-6 col-lg-6 m-auto">
                        <label for="gender" class="form-label">Gender:</label>
                        <input type="radio" name="gender" id="gender" value="Male" <?=set_radio('gender', 'Male', (!empty($arr->id) && $arr->gender=='Male'))?> class="form-radio mx-2">Male
                        <input type="radio" name="gender" id="gender" value="Female" <?=set_radio('gender', 'Female', (!empty($arr->id) && $arr->gender=='Female'))?> class="form-radio mx-2">Female
                        <?=form_error('gender')?>
                    </div>
                    <div class="col-md-6 col-lg-6 m-auto">
                        <label for="qualification" class="form-label">Qualification</label>
                        <div class="form-group mx-5">
                            <input type="checkbox" name="qualification" id="qualification" value="BTech" <?=set_checkbox('qualification', 'BTech', (!empty($arr->id) && $arr->qualification=='BTech'))?>> BTech
                            <input type="checkbox" name="qualification" id="qualification" value="BCA" <?=set_checkbox('qualification', 'BCA', (!empty($arr->id) && $arr->qualification=='BCA'))?>> BCA
                            <input type="checkbox" name="qualification" id="qualification" value="BSC" <?=set_checkbox('qualification', 'BSC', (!empty($arr->id) && $arr->qualification=='BSC'))?>> BSC
                        </div>
                        <?=form_error('qualification')?>
                    </div>
                    <div class="col-md-6 col-lg-6 mb-3 m-auto">
                        <label for="image" class="form-label">Image</label>
                        <input type="file" name="image" id="image" class="form-control">
                        <?php
                            if(!empty($arr->id)) {?>
                            <img src="<?=base_url()?>/uploads/<?=$arr->image?>" alt="image" width="50%">
                        <?php }?>
                        <?=form_error('image')?>
                    </div>
                    <div class="col-md-6 col-lg-6 mb-3 m-auto">
                        <label for="status" class="form-label">Status</label>
                        <select name="status" id="status" class="form-select">
                            <option value="">Select status</option>
                            <option value="0" <?php if(!empty($arr->id) && $arr->status=='0') { echo "selected";}?>>Deactive</option>
                            <option value="1" <?php if(!empty($arr->id) && $arr->status=='1') { echo "selected";}?>>Active</option>
                        </select>
                        <?=form_error('status')?>
                    </div>
                    <div class="col-md-6 col-lg-6 mb-3 m-auto text-center">
                        <input type="hidden" name="id" value="<?=$arr->id ?? ''?>">
                        <input type="submit" value="Submit" class="btn btn-info">
                    </div>
            </div>
        </div>
        <?=form_close()?>
    </div>
</body>
</html>