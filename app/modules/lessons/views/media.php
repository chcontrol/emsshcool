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
								<ul class="nav nav-pills nav-pills-icons" role="tablist">
									<?php if($this->session->userdata('pretest')==0): ?>
                                        <li>
                                            <a href="<?php echo base_url('pretest'); ?>">
                                                <i class="material-icons">assessment</i>
                                                สอบก่อนเรียน
                                            </a>
                                        </li>
                                    <?php else: ?>
                                        <li class="disabled">
                                            <a href="#">
                                                <i class="material-icons">done</i>
                                                สอบก่อนเรียน
                                            </a>
                                        </li>
                                    <?php endif; ?>                                    
                                    <li>
			                            <a href="<?php echo base_url('lessons'); ?>">
											<i class="material-icons">book</i>
                                            บทความ
			                            </a>
			                        </li>                                    
			                        <li class="active">
                                        <a href="<?php echo base_url('media'); ?>">
                                            <i class="material-icons">camera</i>
                                            สื่อและวีดีโอ
                                        </a>
			                        </li>
                                    <li>
                                        <a href="<?php echo base_url('posttest'); ?>">
                                            <i class="material-icons">assessment</i>
                                            สอบหลังเรียน
                                        </a>
                                    </li>
			                    </ul>
							</div>
						</div>
						<!-- End Profile Tabs -->
					</div>
                </div>
                <div class="tab-content">			                           
                    <div class="tab-pane active media" id="media">
				        <div class="row">
	                        <div class="col-md-10 col-md-offset-1">		                        
		                        <div class="row collections">
                                    <div class="col-md-10 col-md-offset-1">	
                                        <h2 class="title">การปฐมพยาบาล</h2>
                                        <iframe width="100%" height="450" src="https://www.youtube.com/embed/jPvtojsY_f0" frameborder="0" allowfullscreen></iframe>                                        
                                        <h2 class="title">สพฉ 2016</h2>
                                        <iframe width="100%" height="450" src="https://www.youtube.com/embed/T5TKZKje4gQ" frameborder="0" allowfullscreen></iframe>                                        
                                        <h2 class="title">ศูนย์แจ้งเหตุ</h2>
                                        <iframe style="margin-bottom: 50px;" width="100%" height="450" src="https://www.youtube.com/embed/ErLouNMNQpI" frameborder="0" allowfullscreen></iframe>                                        
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