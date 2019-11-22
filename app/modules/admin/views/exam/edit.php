<?php $this->load->view('admin/header'); ?>
<div class="wrapper">
    <div class="page-header header-filter header-small" data-parallax="active" style="background-image: url('<?php echo base_url('static/img/cover.jpg'); ?>');"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <!--<h1 class="title text-center">เข้าสู่ระบบ</h1>-->
                </div>
            </div>
        </div>
    </div>

    <div class="main main-raised">
        <div class="section">
            <div class="container">
                <div class="row tim-row">
					<div class="col-xs-6 col-xs-offset-3">
						<h2 class="text-center title" style="margin-bottom: 0;">แก้ไขข้อมูลชื่อชุดแบบทดสอบ</h2><br/>						
						<legend></legend>
                   		<div class="card card-signup">                   			
							<form class="form" method="POST" action="<?php echo base_url('admin/exams/'.$id.'/update')?>">
                                <div class="content">								
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="material-icons">book</i>
                                        </span>
                                        <input type="text" name="name" class="form-control" required="required" placeholder="ชื่อแบบทดสอบ" value="<?php echo $obj->name?>">
                                    </div>                                    
                                </div>
                                <div class="footer text-center">
                                    <button type="submit" name="submit" value="submit" class="btn btn-primary btn-simple btn-wd btn-lg">SAVE</button>								
                                </div>
                            </form>	
						</div>
                    </div>                    
                </div>
            </div>
        </div>
    </div>
</div>
<?php $this->load->view('site/footer'); ?>