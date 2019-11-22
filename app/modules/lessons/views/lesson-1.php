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
                <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                        <div class="profile-tabs">
                            <div class="nav-align-center">
                                <?php $this->load->view('lessons/menu'); ?>
                            </div>
                        </div>
                        <!-- End Profile Tabs -->
                    </div>
                </div>
                <div class="tab-content">                   
                    <div class="tab-pane active work" id="article">
                        <div class="row tim-row">
                            <h2 class="text-center title">ขั้นตอนการแจ้ง 1669</h2>                            
                            <div class="col-md-8 col-md-offset-2">                             
                                <div class="row collections">
                                    <img src="<?php echo base_url('static/img/lesson/help17.jpg')?>" class="img-responsive" alt="">                                                                                      
                                    <br/>
                                    <h2 class="text-center title">ระบบปฏิบัติการการแพทย์ฉุกเฉิน</h2>
                                    <img src="<?php echo base_url('static/img/lesson/help18.jpg')?>" class="img-responsive" alt="">                                                                                      
                                </div>
                                <div class="pull-right" style="margin:20px 0;">
                                    <a href="<?php echo base_url('lessons')?>"><< บทเรียน</a>
                                </div>
                            </div>
                        </div>
                    </div>                     
                </div>
            </div>
        </div>
    </div>
<?php $this->load->view('site/footer'); ?>