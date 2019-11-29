<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
// var_dump($me);
$image = base_url()."avatar/";
$image .= $me->avatar ? $me->avatar : "avatar.jpg";

?>

<style>
    .menu{
        height: 55px;
        line-height: 55px;
        padding: 0px 30px;
        display: block;
        vertical-align: middle;
        right: 0px;
        left: 0px;
        background: #fff;
        box-shadow: 0px 0px 3px #eee;
    }
    .menu .navigation{
        display: inline-block;
        height: 55px;
        /* padding: 10px 10px; */
    }
</style>
<div id="right-panel" class="right-panel">
        <!-- Header-->
        <div class="no-print menu fixed-top d-flex justify-content-between">
            <div class="left align-self-center">
                <div id="menuToggle" style="width: 30px;display: inline-block;border-right: solid 1px #aaa;margin-right: 10px;">
                    <i class="fa fa-bars"></i>
                </div>
                <a class="navbar-brand"  style="width:inherit" href="./"><img src="/elaadmin/images/logo123.png" alt="Logo"></a>
            </div>
            <div class="right">
                <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle active" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="user-avatar rounded-circle" src="<?=$image?>" alt="User Avatar">
                        </a>
                        <div class="user-menu dropdown-menu">
                            <a class="nav-link" href="<?=base_url()?>setting/do_upload"><i class="fa fa- user"></i>Change Picture</a>
                            <a class="nav-link" href="<?=base_url()?>setting"><i class="fa fa -cog"></i>Settings</a>
                            <a class="nav-link" href="<?=base_url()?>setting/password"><i class="fa fa- user"></i>Change Password</a>
                            <a class="nav-link" href="<?=base_url()?>login/logout"><i class="fa fa-power -off"></i>Logout</a>
                        </div>
                    </div>
            </div>
        </div>
        <!-- /#header -->
<div class="content">