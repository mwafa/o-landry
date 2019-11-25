<?php 
defined('BASEPATH') OR exit('No direct script access allowed');


?>
<div class="row">
        <div class="card col-lg-4 d-none d-md-block">
            <div class="card-body">
                <div class="title-box strech">
                    <h3>My Profile Picture</h3>
                </div>
            </div>
            <div class="card-body text-center">
                <img class="rounded-circle img-fluid" src="<?=base_url()."avatar/".$me->avatar?>" alt="">
                <h4 class="p-4"><?=$me->username?></h4>
            </div>
        </div>
    <div class="col-lg-8">
        <div class="card">
            <div class="card-body">
                <div class="title-box">
                    <h3>Upload New Profile Picture</h3>
                </div>
            </div>
            <div class="card-body">

                <?php
                if(strlen($error)){
                    ?> 
                <div class="alert alert-<?= isset($alert)?$alert:'danger'?>">
                    <?php echo $error;?>
                </div>
                    <?php
                }
                ?>
                
                <?php echo form_open_multipart('setting/do_upload');?>
                
                <input type="file" name="userfile" size="20" />
                
                <br /><br />
                
                <input class="btn btn-primary btn-lg" type="submit" value="upload" />
                
            </form>
        </div>
        </div>
    </div>
</div>