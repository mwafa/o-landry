<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <div class="title-box">
                    <h4>Change Password</h4>
                </div>
            </div>
            <div class="card-body">
                <?php
                if(isset($error) || validation_errors()){
                    ?>
                    <div class="alert alert-<?= isset($alert)? $alert:'danger'?>"><?=isset($error)?$error:""?><?php echo validation_errors(); ?></div>
                    <?php
                }?>
                <?php echo form_open('setting/password'); ?>
                <div class="form-group">
                    <label for="">Old Password</label>
                    <input class="form-control" type="password" name="password" placeholder="Old Password" >
                </div>
                <div class="form-group">
                    <label for="">Password</label>
                    <input class="form-control" type="password" name="newpassword" placeholder="New-Password" >
                </div>
                <div class="form-group">
                    <label for="">Password</label>
                    <input class="form-control" type="password" name="newpasswordcf" placeholder="Confirm New-Password" >
                </div>
                <input type="submit" value="Update" class="btn btn-primary">
                </form>
            </div>
        </div>
    </div>
</div>