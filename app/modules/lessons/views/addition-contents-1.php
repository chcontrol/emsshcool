<?php $this->load->view('site/header'); ?>
    <div class="wrapper profile-page">
        <div class="page-header header-filter header-small" data-parallax="active" style="background-image: url('<?php echo base_url('static/img/cover.jpg'); ?>');"></div>
        <div class="main main-raised">
        <div class="profile-content">
            <div class="container">

                <div class="row">
                    <div class="col-xs-6 col-xs-offset-3">
                       <div class="profile">
                            <div class="avatar">
                            <?php
                                if($this->session->userdata('fb_id') !=''){
                                    $avatar = 'https://graph.facebook.com/'.$this->session->userdata('fb_id').'/picture?height=300&width=300';
                                }else{
                                    $avatar = base_url('static/img/faces/christian.jpg');
                                }                          
                            ?>
                                <img src="<?php echo $avatar; ?>" alt="Circle Image" class="img-circle img-responsive img-raised">
                            </div>
                            <div class="name">
                                <h3 class="title"><?php echo $this->session->userdata('name'); ?></h3>                              
                            </div>
                        </div>
                    </div>                    
                </div>                                
                <div class="tab-content">                   
                    <div class="tab-pane active work" id="article">
                        <div class="row tim-row">
                            <h2 class="text-center title">ภาวะภัยพิบัต</h2>
                            <div class="col-md-8 col-md-offset-2">                             
                                <div class="row collections">
                                    <img src="<?php echo base_url('static/img/lesson/help3.jpg')?>" class="img-responsive" alt="">
                                    <br/>
                                    <img src="<?php echo base_url('static/img/lesson/help4.jpg')?>" class="img-responsive" alt="">
                                    <br/>
                                    <img src="<?php echo base_url('static/img/lesson/help5.jpg')?>" class="img-responsive" alt="">
                                    <br/>
                                    <img src="<?php echo base_url('static/img/lesson/help6.jpg')?>" class="img-responsive" alt="">
                                    <br/>
                                    <img src="<?php echo base_url('static/img/lesson/help7.jpg')?>" class="img-responsive" alt="">
                                    <br/>
                                    <img src="<?php echo base_url('static/img/lesson/help8.jpg')?>" class="img-responsive" alt="">
                                    <br/>
                                    <img src="<?php echo base_url('static/img/lesson/help9.jpg')?>" class="img-responsive" alt="">
                                    <br/>
                                    <img src="<?php echo base_url('static/img/lesson/help10.jpg')?>" class="img-responsive" alt="">
                                    <br/>
                                    <img src="<?php echo base_url('static/img/lesson/help11.jpg')?>" class="img-responsive" alt="">
                                    <br/>
                                    <img src="<?php echo base_url('static/img/lesson/help12.jpg')?>" class="img-responsive" alt="">
                                    <br/>
                                    <img src="<?php echo base_url('static/img/lesson/help13.jpg')?>" class="img-responsive" alt="">
                                    <br/>
                                    <img src="<?php echo base_url('static/img/lesson/help14.jpg')?>" class="img-responsive" alt="">
                                    <div class="pull-right" style="margin-bottom:20px;">
                                        <a href="<?php echo base_url('addition-contents')?>"><< ความรู้เพิ่มเติม</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>                     
                </div>
            </div>
        </div>
    </div>
<?php $this->load->view('site/footer'); ?>