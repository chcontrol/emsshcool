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
				        <div class="row">
	                        <div class="col-md-10 col-md-offset-1">		                        
		                        <div class="row collections">                                    
                                    <div class="col-md-6">
                                        <a href="<?php echo base_url('lesson/1')?>">
                                            <div class="card card-background" style="background-image: url('<?php echo base_url('static/img/lesson/l03.jpg') ?>')">
                                                <div class="content">
                                                    <h2 class="card-title">หน่วยที่ 1 อาการฉุกเฉินวิกฤตที่ส่งผลต่อต่อชีวิตและอวัยวะสำคัญ</h2>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-md-6">
                                        <a href="<?php echo base_url('lesson/2')?>">
                                            <div class="card card-background" style="background-image: url('<?php echo base_url('static/img/lesson/l04.jpg') ?>')">
                                                <div class="content">
                                                    <h2 class="card-title">หน่วยที่ 2. การแจ้งเหตุขอความช่วยเหลือ 1669</h2>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-md-6">
                                        <a href="<?php echo base_url('lesson/3')?>">
                                            <div class="card card-background" style="background-image: url('<?php echo base_url('static/img/lesson/l05.jpg') ?>')">
                                                <div class="content">
                                                    <h2 class="card-title">หน่วยที่ 3. การช่วยเหลือเบื้องต้นและการปฐมพยาบาล</h2>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-md-6">
                                        <a href="<?php echo base_url('lesson/4')?>">
                                            <div class="card card-background" style="background-image: url('<?php echo base_url('static/img/lesson/l06.jpg') ?>')">
                                                <div class="content">
                                                    <h2 class="card-title">หน่วยที่ 4. การช่วยฟื้นคืนชีพขั้นพื้นฐาน (CPR) และการใช้เครื่องกระตุกหัวใจด้วยไฟฟ้า (AED) </h2>
                                                </div>
                                            </div>
                                        </a>
                                    </div>		
                                    <div hidden class="col-md-6">
                                        <a href="<?php echo base_url('lesson/6')?>">
                                            <div class="card card-background" style="background-image: url('<?php echo base_url('static/img/lesson/l06.jpg') ?>')">
                                                <div class="content">
                                                    <h2 class="card-title"> </h2>
                                                </div>
                                            </div>
                                        </a>
                                        <div class="pull-right" style="margin-bottom:20px;">
                                            <a href="<?php echo base_url('addition-contents')?>">ความรู้เพิ่มเติม >></a>
                                        </div>
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