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
                        <div>
                            <h2 class="text-center title">ฐานและสถานการณ์ EMS Rally</h2>
                            <div class="col-md-8 col-md-offset-2">                             
                                <div class="row collections">
                                    <h4 class="title" style="color:#9c27b0">ฐานที่ 1 การช่วยเหลือผู้บาดเจ็บอวัยวะฉีกขาด</h4>                                    
                                    <h5 class="title">สถานการณ์จำลอง :</h5>
                                    <p>
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;เวลา 10.30 น.  คาบเรียนวิชาเกษตร  กลุ่มนักเรียนชาย ประมาณ 5 คน  ทะเลาะวิวาทกันแย่งจอบและมีด เพื่อทำการเกษตร  ผลปรากฏว่ามีนักเรียนคนหนึ่งพลาดได้รับบาดเจ็บ มีมีดดาบแทงที่ท้องผู้บาดเจ็บ 1 ครั้ง  โดยมีดไม่หลุดออกมา ยังปักอยู่ที่ท้อง และโดนมีดตัดนิ้วชี้มือซ้ายขาดหลุดออก  จากนั้นกลุ่มนักเรียนชายที่เหลือได้วิ่งหนีหายออกไป  มีเพียงผู้บาดเจ็บนอนร้องครวญคราง  ท่านกับเพื่อนๆ อยู่ในเหตุการณ์ เห็นผู้บาดเจ็บนอนอยู่ที่พื้น  ท่านจะทำอย่างไร
                                    </p>
                                    <h5 class="title">ประวัติเพิ่มเติม :</h4>
                                    <p>
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;มีคนมามุงดู  และพยายามให้ผู้บาดเจ็บลุกขึ้นเดินไปขึ้นรถเพื่อไปโรงพยาบาล( โรงพยาบาลไม่ไกลจากจุดเกิดเหตุ  ประมาณ 500 เมตร )
 นิ้วมือที่ขาด ตกอยู่ที่พื้น ห่างจากผู้บาดเจ็บ 1 เมตร  
                                    </p>
                                    <h4 class="title" style="color:#9c27b0">ฐานที่ 2 การแจ้งเหตุฉุกเฉิน 1669 และการดูแลผู้ป่วยเด็กไข้สูง</h4>
                                    <h5 class="title">สถานการณ์จำลอง :</h5>
                                    <p>
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;เพื่อนบ้านของท่าน ร้องตะโกนขอความช่วยเหลือจากท่าน บอกว่าลูกอายุ 10 ขวบ ไข้สูง ตาลอย  ขอให้ท่านช่วยเหลือ  ท่านจะทำอย่างไร
                                    </p>
                                    <h5 class="title">ประวัติเพิ่มเติม :</h4>
                                    <p>
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;มารดา  อายุ 35 ปี  ขณะเกิดเหตุอยู่บ้านกับบุตร เพียง 2 คน  ไม่ทราบจะดูแลลูกอย่างไร มีอาการตกใจร้องไห้ฟูมฟาย   เด็ก 10 ปี  เคยมีประวัติชัก  วันนี้เพิ่งมีไข้ ตัวร้อน  ตาลอย ซึม ไม่รับประทานอาหาร
 อยู่บ้านเลขที่ 191   ม.3  ต.แม่ฟ้าหลวง อ.แม่ฟ้าหลวง   จ.เชียงราย  ซอยที่จะเข้ามาบ้านผู้ป่วย ถนนแคบ  รถยนต์วิ่งได้ 1 เลน  บ้านอยู่สุดซอย หลังซ้ายมือ ห่างจากถนนหลัก 200 เมตร
                                    </p>
                                    <h4 class="title" style="color:#9c27b0">ฐานที่ 3  การช่วยเหลือผู้ป่วยกล้ามเนื้อหัวใจตายเฉียบพลันและ การช่วยฟื้นคืนชีพเบื้องต้น(CPR ) เรียนรู้การใช้เครื่อง AED(Automated External Defibrillator)</h4>                                    
                                    <h5 class="title">สถานการณ์จำลอง :</h5>
                                    <p>
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;เวลา 12.00 น.  บริเวณสนามฟุตบอล นายน้อย ใจใหญ่   อายุ 16  ปี  มีโรคประจำตัว คือ เบาหวาน  รับประทานยาประจำทุกวัน  วันนี้วิ่งเล่นเตะฟุตบอลที่สนาม เกิดอาการเจ็บหน้าอก  และหมดสติ 
                                    </p>
                                    <h5 class="title">ประวัติเพิ่มเติม :</h4>
                                    <p>
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ผู้ป่วยรับประทานยาเบาหวานตอนเช้าทุกวัน  รับยาที่ โรงพยาบาลส่งเสริมสุขภาพห้วยน้ำขุ่น
วันนี้ตอนเช้า  ผู้ป่วยบ่นเหนื่อย  เจ็บหน้าอก  แน่นหน้าอกมากเหมือนก้อนหินทับอก</p>
                                    <h4 class="title" style="color:#9c27b0">ฐานที่ 4 การช่วยเหลือผู้ป่วยชัก</h4>                                    
                                    <h5 class="title">สถานการณ์จำลอง :</h5>
                                    <p>
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;เวลา 10.00 น.  นายจัน สามแสง นักการภารโรง     อายุ 40 ปี  มีโรคประจำตัว คือ ลมชัก  ขาดยา 1 เดือน  และดื่มสุราเป็นประจำทุกวัน  วันนี้  รู้สึกอยากรับประทานมะม่วงมาก ระหว่างเดินไปต้นมะม่วง    มีอาการชักเกร็ง  จึงตกลง   ท่านอยู่ในเหตุการณ์  ท่านจะทำอย่างไร
                                    </p>
                                    <h5 class="title">ประวัติเพิ่มเติม :</h4>
                                    <p>
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;วันนี้ชัก 2 ครั้ง  ตอน 7 นาฬิกา  ชักไม่นาน  ไม่ได้ไปโรงพยาบาล
พบผู้บาดเจ็บนอนตะแคงหน้า มีอาการชักเกร็ง กัดฟันแน่น  (ชักประมาณ 30 วินาที) เมื่อผู้บาดเจ็บรู้สึกตัว  บ่นปวดขา  ขาท่อนล่างด้านขวาบวมผิดรูป </p>
                                    <h4 class="title" style="color:#9c27b0">ฐานที่ 5 การช่วยเหลือผู้ป่วยโรคหลอดเลือดสมอง</h4>                                    
                                    <h5 class="title">สถานการณ์จำลอง :</h5>
                                    <p>
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;เวลา 20.00 น.  บริเวณห้องน้ำบ้านนางอาหมี หมื่อแล  อายุ 60 ปี  ห้องน้ำแคบ พื้นมีน้ำเปียก บ้านไฟดับ     มีโรคประจำตัว คือ ความดันโลหิตสูง  ขาดยา 1 สัปดาห์เดินไปเข้าห้องน้ำ  มีอาการแขน-ขาอ่อนแรง  ผู้ป่วยล้มลงที่พื้นห้องน้ำ  ศีรษะกระแทกขอบอ่าง  มีแผลเลือดออกที่ศีรษะผู้ป่วยจึงร้องขอความช่วยเหลือ  แต่เสียงพูดไม่ชัดเจน  ลูกสาวผู้ป่วยวิ่งไปตามท่านที่บ้าน  ท่านจะทำอย่างไร
                                    </p>
                                    <h5 class="title">ประวัติเพิ่มเติม :</h4>
                                    <p>
                                    ขาดยาความดันโลหิตสูง 1 สัปดาห์<br/>
                                    ผู้ป่วย พูดด้วย  แต่มีอาการปาดเบี้ยว  พูดไม่ชัด<br/>
                                    แขน – ขาข้าง ซ้าย  อ่อนแรง  ยกไม่ได้</p>
                                    <br/>
                                </div>
                            </div>
                        </div>
                    </div>                     
                </div>
            </div>
        </div>
    </div>
<?php $this->load->view('site/footer'); ?>