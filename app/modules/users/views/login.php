<?php $this->load->view('site/header'); ?>
<div class="wrapper">
    <div class="page-header header-filter header-small" data-parallax="active" style="background-image: url('<?php echo base_url('static/img/cover.jpg'); ?>');height:30vh;">
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
						<h2 class="text-center title" style="margin-bottom: 0;">เข้าสู่ระบบ</h2><br/>
						<div class="text-center">
							<!-- <a style="margin: 0;padding:0;" href="<?php echo $login_url;?>" class="btn btn-just-icon btn-simple">
								<i class="fa fa-facebook-square"></i>
	                            <small>ลงชื่อเข้าใช้ด้วยบัญชีเฟสบุ๊ค</small>
							</a><br/><br/> -->
							<a style="margin: 0;padding:0;" href="<?php echo base_url('signup')?>" class="btn btn-just-icon btn-simple">								
	                            <small>สมัครสมาชิกใหม่</small>
							</a><br/>							
						</div>
						<legend></legend>
                   		<div class="card card-signup">                   			
							<form class="form" method="POST" action="<?php echo base_url('login')?>">														
								<div class="content">			
									<div class="input-group">
										<span class="input-group-addon">
											<i class="material-icons">email</i>
										</span>
										<input type="text" name="email" class="form-control" placeholder="you@example.com">
									</div>

									<div class="input-group">
										<span class="input-group-addon">
											<i class="material-icons">lock_outline</i>
										</span>
										<input type="password" name="password" placeholder="password" class="form-control" />
									</div>
									<div class="input-group" style="width: 100%">
										<?php if($this->session->flashdata('error')): ?>
										<div class="text-center">
										<small style="color: red"><?php echo $this->session->flashdata('error'); ?></small>
										</div>
										<?php endif; ?>
									</div>
								</div>
								<div class="footer text-center">
									<button type="submit" name="submit" value="submit" class="btn btn-primary btn-simple btn-wd btn-lg">LOG IN</button>								
								</div>
							</form>							
						</div>
						<div style="margin: 0;padding:0; text-align:center;">
							<a href="<?php echo base_url('users/forgot_password')?>">								
								<small>ลืมรหัสผ่าน</small>
							</a>
						</div>
					</div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $this->load->view('site/footer'); ?>