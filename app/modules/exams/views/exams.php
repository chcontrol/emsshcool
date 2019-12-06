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
                    <div class="row tim-row">
                        <h2 class="text-center title">
                            <?php if($exam_type==1): ?>
                            แบบทดสอบก่อนเรียน
                            <?php else: ?>
                            แบบทดสอบหลังเรียน
                            <?php endif; ?>
                        </h2>
                        <legend></legend>
                        <div class="col-md-8 col-md-offset-2">
                            <form action="<?php echo base_url('submit'); ?>" method="POST">
                            <input type="hidden" name="exam_id" value="<?php echo $exam_id?>">
                            <input type="hidden" name="exam_type" value="<?php echo $exam_type?>">                            
                            <?php
                                $i = 1;
                                foreach ($exams as $row) {
                                echo $i++.'. '.$row->question.'<br/>';
                                $objs = get_ans($row->id);            
                                echo '<ul class="martop">';
                                foreach ($objs as $ans) {
                                    
                                    $choice = "";
                                    if($ans->id % 4 == 1 ){
                                        $choice = "ก";             
                                    }else if($ans->id % 4 == 2 ){
                                        $choice = "ข";             
                                    } else if($ans->id % 4 == 3 ){
                                        $choice = "ค";             
                                    }   else if($ans->id % 4 == 0 ){
                                        $choice = "ง";             
                                    }     
                                    echo '<li style="list-style:none"><div class="radio"><label><input type="radio" name="questions['.$row->id.']" value="'.$ans->id.'">'.$choice.'. '.$ans->answers.'</label></div></li>';
                                }
                                echo '</ul>';
                            }
                            ?>  
                                <div class="text-center">
                                    <input type="submit" class="btn" name="submit" value="ส่ง">  
                                </div>
                            </form>                            
                        </div>
                    </div>                        
                </div>
            </div>
        </div>
    </div>
<?php $this->load->view('site/footer'); ?>