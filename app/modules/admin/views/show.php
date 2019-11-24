<?php $this->load->view('admin/header'); ?>
<style media="print">    
    .no-print{
        display: none;
    }
</style>
    <div class="wrapper profile-page">
        <div class="page-header header-filter header-small" data-parallax="active" style="background-image: url('<?php echo base_url('static/img/cover.jpg'); ?>');"></div>
        <div class="main main-raised">
        <div class="profile-content">
            <div class="container">
                <div class="row" class="no-print">
                    <div class="col-xs-6 col-xs-offset-3">
                       <div class="profile">
                            <div class="avatar">
                            <?php
                                if($user->fb_id !=''){
                                    $avatar = 'https://graph.facebook.com/'.$user->fb_id.'/picture?height=300&width=300';
                                }else{
                                    $avatar = base_url('static/img/faces/christian.jpg');
                                }
                            ?>
                                <img src="<?php echo $avatar; ?>" alt="Circle Image" class="img-circle img-responsive img-raised no-print">
                            </div>
                            <div class="name">
                                <h3 class="title"><?php echo $user->name ?></h3>                              
                            </div>
                        </div>
                    </div>                    
                </div>                
                <div class="row">
                    <h2 class="title text-center">ผลคะแนนสอบ</h2>
                    <!-- <div class="text-center">
                        <a target="_blank" href="<?php echo base_url('admin/users/'.$user->id.'/print')?>"><button class="btn">PRINT</button></a><br/>
                    </div> -->
                    <legend></legend>
                    <div class="col-md-8 col-md-offset-2">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th class="text-center">#</th>
                                        <th>ประเภท</th>                                                                                
                                        <th>ชื่อ</th>                                                                                
                                        <th>คะแนน</th>
                                        <th class="text-right">ผลการสอบ</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $i = 1; 
                                        $lessons = ['การแจ้งเหตุ 1669','การปฐมพยาบาลเบื้องต้น','การช่วยฟื้นคืนชีพเบื้องต้น','EMS Rally'];
                                        foreach($objs as $row): 
                                    ?>
                                    <tr>
                                        <td class="text-center"><?php echo $i++; ?></td>
                                        <td>
                                            <?php if($row->status == 1): ?>
                                                สอบก่อนเรียน
                                            <?php else: ?>
                                                สอบหลังเรียน
                                            <?php endif; ?>
                                        </td>
                                        <td>
                                            <?php echo $lessons[$row->exam_id-1]; ?>
                                        </td>
                                        <td><?php echo $row->score?>/10</td>
                                        <td class="td-actions text-right">
                                            <?php if($row->score >=5 ): ?>
                                                ผ่าน
                                            <?php else: ?>
                                                ไม่ผ่าน
                                            <?php endif; ?>
                                        </td>
                                    </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                            <div class="pull-right" style="margin-bottom:20px;">
                                <a href="<?php echo base_url('admin/user-list')?>">ดูรายชื่อผู้เรียน</a>
                            </div>
                        </div>
                    </div>
                </div>                
            </div>
        </div>
    </div>
<?php $this->load->view('site/footer'); ?>