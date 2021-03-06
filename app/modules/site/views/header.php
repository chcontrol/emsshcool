<!doctype html>

<html lang="en">
    <head>
        <meta charset="utf-8" />
        <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
        <link rel="icon" type="image/png" href="assets/img/favicon.png">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

        <title>
            <?php
            if (isset($meta_title)) {
                echo $meta_title . ' - อาสาฉุกเฉินชุมชน';
            } else {
                echo 'อาสาฉุกเฉินชุมชน';
            }
            ?>
        </title>

        <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
        <!--     Fonts and icons     -->
        <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
        <link href="https://fonts.googleapis.com/css?family=Prompt:400,500" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />
        <!-- CSS Files -->
        <link href="<?php echo base_url('static/css/bootstrap.min.css') ?>" rel="stylesheet" />
        <link href="<?php echo base_url('static/css/material-kit.css') ?>" rel="stylesheet"/>    
        <link href="<?php echo base_url('static/css/custom.css') ?>" rel="stylesheet" />        

    </head>

    <style>
        body{
            font-family: 'Prompt', sans-serif;

        }
    </style>

    <body class="components-page" >
        <nav class="navbar navbar-transparent navbar-primary navbar-fixed-top navbar-color-on-scroll" role="navigation">
            <div class="container" >
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button id="menu-toggle" data-toggle="collapse" data-target="#main-menu" type="button" class="navbar-toggle">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar bar1"></span>
                        <span class="icon-bar bar2"></span>
                        <span class="icon-bar bar3"></span>
                    </button>
                    <img href="<?php echo base_url(); ?>" src="<?php echo base_url('static/img/logo1_03.gif')?>" style="max-width: 120px;" alt="">
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="main-menu">
                    <ul  class="nav navbar-nav navbar-right">                    
                        <li>
                            <a href="<?php echo base_url(); ?>">หน้าหลัก</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url("aboutus"); ?>">เกี่ยวกับเรา</a>
                        </li>
                        <!-- <li>
                            <a href="<?php echo base_url('description'); ?>">คำอธิบายวิชา</a>
                        </li> -->
                        <!-- <li>
                            <a href="<?php echo base_url('recommendation'); ?>">คำแนะนำ</a>
                        </li> -->
                        <!-- <li>
                            <a href="<?php echo base_url('objective'); ?>">จุดประสงค์</a>
                        </li> -->

                        <?php if ($this->session->userdata('user_id') == ''): ?>
                            <li>
                                <a href="<?php echo base_url('login'); ?>">เข้าสู่ระบบ</a>
                            </li>                    
                            <!-- <li>
                                <a href="<?php echo base_url('creator') ?>">ผู้จัดทำ</a>
                            </li>                     -->
                            <li>
                                <a href="<?php echo base_url('activity'); ?>">กิจกรรม</a>
                            </li>
                        <?php else: ?>                    
                            <li>
                                <a href="<?php echo base_url('sections'); ?>">บทเรียน</a>
                            </li>                    
                            <li>
                                <a href="<?php echo base_url('history'); ?>">ผลคะแนนสอบ</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url('users/edit'); ?>">แก้ไขข้อมูล</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url('activity'); ?>">กิจกรรม</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url('logout'); ?>">ออกจากระบบ</a>
                            </li>
                        <?php endif; ?>     
                        <li>
                            <a href="<?php echo base_url('creator'); ?>">ติดต่อเรา</a>
                        </li>               
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>