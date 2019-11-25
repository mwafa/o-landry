<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<div class="row">
	<div class="col">
		<div class="card">
			<div class="card-body">
				<div class="title-box">
					<h4>Profile Setting</h4>
				</div>
			</div>
			<div class="card-body">
				<?php
                if(isset($error)){
                    ?>
				<div class="alert alert-<?= isset($alert)? $alert:'danger'?>">
					<?=$error?><?php echo validation_errors(); ?></div>
				<?php
                }?>
				<?php echo form_open('setting'); ?>
				<div class="form-group">
					<label for="">Username</label>
					<input class="form-control" type="username" name="username" placeholder="Username"
						value="<?=$me->username?>">
				</div>
				<div class="form-group">
					<label for="">Email</label>
					<input class="form-control" type="email" name="email" placeholder="Email" value="<?=$me->email?>">
				</div>
				<input type="submit" value="Update" class="btn btn-primary">
				</form>
			</div>
		</div>
	</div>
</div>
