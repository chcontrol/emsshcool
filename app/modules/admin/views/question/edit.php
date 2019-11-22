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
                    <h3 class="text-center title" style="margin-bottom: 0;">แก้ไข<?php echo $obj->question?></h3><br/>
                    <legend></legend>
					<div class="col-xs-10 col-xs-offset-1 col-md-4 col-md-offset-4">
                   		<div class="card card-signup">                   			
							<form class="form" method="POST" action="<?php echo base_url('admin/question/'.$id.'/update')?>">                            
                                <div class="content">								
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            คำถาม: 
                                        </span>
                                        <textarea name="question" placeholder="คำถาม" class="form-control"><?php echo $obj->question?></textarea>                                        
                                    </div>
                                    <?php 
                                        $ans = get_ans($id); 
                                        foreach ($ans as $row):
                                    ?>
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <input type="radio" value="<?php echo $row->id?>" name="correctness" <?php echo $row->correctness==1? 'checked': '' ?>>
                                        </span>
                                        <textarea name="ans[<?php echo $row->id?>]" class="form-control"><?php echo $row->answers?></textarea>
                                    </div>                     
                                    <?php endforeach; ?>               
                                </div>
                                <div class="footer text-center">                                    
                                    <button type="submit" name="submit" value="submit" class="btn btn-primary btn-simple btn-wd btn-lg">SAVE</button>								
                                    <a href="<?php echo base_url('admin/exams/'.$exam_id)?>" class="btn btn-primary btn-simple btn-wd btn-lg">BACK</a>
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