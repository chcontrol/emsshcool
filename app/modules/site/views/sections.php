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
                                        <a href="<?php echo base_url('lessons')?>">
                                            <div class="card card-background" style="background-image: url('<?php echo base_url('static/img/lesson/l01.jpg') ?>')">
                                                <div class="content">
                                                    <h2 class="card-title">บทเรียน</h2>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-md-6">
                                        <a href="<?php echo base_url('addition-contents')?>">
                                            <div class="card card-background" style="background-image: url('<?php echo base_url('static/img/lesson/l06.jpg') ?>')">
                                                <div class="content">
                                                    <h2 class="card-title">ความรู้เพิ่มเติม</h2>
                                                </div>
                                            </div>
                                        </a>
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