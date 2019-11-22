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
					<div class="col-md-4 col-md-offset-4">
						<h2 class="text-center title" style="margin-bottom: 0;">เพิ่มผู้ดูแลระบบ</h2><br/>						
						<legend></legend>
                   		<div class="card card-signup">                   			
							<form class="form" method="POST" action="<?php echo base_url('admin/admin/insert')?>">
							<div class="content">								
                                <div class="input-group">
									<span class="input-group-addon">
										<i class="material-icons">face</i>
									</span>
									<input type="text" name="username" class="form-control" required="required" placeholder="ชื่อเข้าใช้งาน">
								</div>
								<div class="input-group">
									<span class="input-group-addon">
										<i class="material-icons">lock_outline</i>
									</span>
									<input type="password" name="password" required="required" placeholder="รหัสผ่าน" class="form-control" />
								</div>
                                <div class="input-group">
									<span class="input-group-addon">
										<i class="material-icons">lock_outline</i>
									</span>
									<input type="password" name="password2" required="required" placeholder="ยืนยันรหัสผ่าน" class="form-control" />
								</div>
							</div>
							<div class="footer text-center">
                                <button type="submit" name="submit" value="submit" class="btn btn-primary btn-simple btn-wd btn-lg">SIGN UP</button>								
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