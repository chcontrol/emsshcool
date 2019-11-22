<?php $this->load->view('site/header'); ?>
<div class="wrapper">
    <div class="page-header header-filter header-small" data-parallax="active" style="background-image: url('https://images.unsplash.com/photo-1423655156442-ccc11daa4e99?crop=entropy&dpr=2&fit=crop&fm=jpg&h=750&ixjsv=2.1.0&ixlib=rb-0.3.5&q=50&w=1450');height:20vh;">
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
						<h2 class="text-center title" style="margin-bottom: 0;">ลืมรหัสผ่าน</h2><br/>						
						<legend></legend>
                   		<div class="card card-signup">                   			
							<form class="form" method="POST" action="<?php echo base_url('users/change_password')?>">
                                <div class="content">								
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="material-icons">email</i>
                                        </span>
                                        <input type="email" name="email" required="required" placeholder="อีเมล" class="form-control" />
                                        <input type="hidden" name="type" value="send_mail" />
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