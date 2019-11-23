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
                <div class="tab-content">                   
                    <div class="tab-pane active work" id="article">
                        <div class="row tim-row">
                        <h2 class="text-center title">หน่วยที่ 1 </h2>                            
                        <h2 class="text-center title">อาการฉุกเฉินวิกฤตที่ส่งผลต่อต่อชีวิตและอวัยวะสำคัญ</h2>   
                        <p>
                        1. อาการฉุกเฉินวิกฤตที่ส่งผลต่อต่อชีวิตและอวัยวะสำคัญ
	การเจ็บป่วยฉุกเฉิน หมายถึง การได้รับบาดเจ็บหรือมีอาการเจ็บป่วยกะทันหันที่มีผลต่อชีวิตหรือการทำงานของอวัยวะสำคัญ จำเป็นต้องได้รับการตรวจและรักษาอย่างทันท่วงทีเพื่อป้องกันการเสียชีวิตหรืออาการเจ็บป่วย บาดเจ็บรุนแรงขึ้น 
                        </p>                         
                            <div class="col-md-8 col-md-offset-2">                             
                                <div class="row collections">
                                    <img src="<?php echo base_url('static/img/lesson/less-1.jpg')?>" class="img-responsive" alt="">                                                                                      
                                    <br/>                                                                                     
                                </div>
                                <p>
                                ผู้ป่วยฉุกเฉินวิกฤต คือ บุคคลซึ่งได้รับบาดเจ็บหรือมีอาการป่วยกะทันหัน  ซึ่งมีภาวะคุกคามต่อชีวิต และหากไม่ได้รับปฏิบัติการแพทย์ทันทีเพื่อแก้ไขระบบการหายใจ ระบบไหลเวียนเลือด หรือระบบประสาทแล้ว ผู้ป่วยจะมีโอกาสเสียชีวิตได้สูง หรือทำให้การบาดเจ็บหรืออาการป่วยของผู้ป่วยฉุกเฉินนั้นรุนแรงขึ้นหรือเกิดภาวะแทรกซ้อนขึ้นได้อย่างฉับไว และเมื่อมาถึงสถานพยาบาลแล้วผู้ป่วยฉุกเฉินวิกฤติจะต้องได้รับการตรวจรักษาภายใน 0-4 นาที ทั้งนี้ สัญญาณของอาการฉุกเฉินวิกฤติมี 6 อาการ ได้แก่ 
<li>หัวใจหยุดเต้น ไม่หายใจ ไม่ตอบสนองต่อการเรียกหรือกระตุ้น ไม่มีชีพจร จำเป็นต้องได้รับการกู้ชีพทันที</li>
<li>การรับรู้ สติเปลี่ยนไป บอกเวลา สถานที่ คนที่คุ้นเคยผิดอย่างเฉียบพลัน</li>
<li>ระบบหายใจมีอาการดังนี้ ไม่สามารถหายใจได้ปกติ หายใจเร็ว แรง และลึก หายใจมีเสียงดังผิดปกติ พูดได้แค่สั้น ๆ หรือร้องไม่ออก ออกเสียงไม่ได้ สำลักอุดทางเดินหายใจกับมีอาการเขียวคล้ำ</li>
<li>ระบบไหลเวียนเลือดวิกฤติอย่างน้อย 2 ข้อ คือ ตัวเย็นและซีด เหงื่อแตกจนท่วมตัว หมดสติชั่ววูบ หรือวูบเมื่อลุกยืนขึ้น</li>
<li>อวัยวะฉีกขาด เสียเลือดมาก เสี่ยงต่อการพิการ</li>
 <li>อาการอื่นๆ ที่มีภาวะเสี่ยงต่อชีวิตสูง เช่น เจ็บหน้าอกรุนแรง แขนขาอ่อนแรงทันทีทันใด หรือกำลังชักขณะแรกรับที่จุดคัดแยก</li>
   




                                </p>
                                <div class="row collections">
                                    <img src="<?php echo base_url('static/img/lesson/less-1-2.jpg')?>" class="img-responsive" alt="">                                                                                      
                                    <br/>                                                                                     
                                </div>
                                <div class="pull-right" style="margin:20px 0;">
                                    <a href="<?php echo base_url('lessons')?>"><< บทเรียน</a>
                                </div>
                            </div>
                        </div>
                    </div>                     
                </div>
            </div>
        </div>
    </div>
<?php $this->load->view('site/footer'); ?>