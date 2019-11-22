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
                            <h2 class="text-center title">EMS Rally (Emergency Medical Service Rally)</h2>
                            <div class="col-md-8 col-md-offset-2">                             
                                <div class="row collections">
                                    <h4 class="title" style="color:#9c27b0">การแข่งขัน EMS ต่างประเทศ    (ดร.วิภาดา วิจักขณาลัญฉ์)</h4>
                                    <p>
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;คําว่า Rally  เป็นคําที่มีความหมายหลากหลาย เช่น ระดมพล การชุมนุม หรือการปลุกระดม ดังนั้น อาจพบว่ามีการใช้คําว่า Rally ในความหมายของการเดินขบวนของบุคลากร เป็นการใช้ คําที่เหมือนกันในความหมายที่ต่างกัน 
                                    </p>
                                    <p>
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;EMS Rally เป็นการแข่งขันที่มีเอกลักษณ์ คือ ความสนุกและตื่นเต น (fun and exciting) มีวัตถุประสงค์ คือ การเพิ่มพูนความรู้สมรรถนะ แลกเปลี่ยน แนวคิด หลักการ และแนวทางการแก ปัญหา การได มิตรภาพที่ดี การฝึกการ ตัดสินใจ รวมทั้งการทํางานเป็นทีม
                                    </p>
                                    <p>
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;การแข่งขันการช่วยเหลือผู้ป่วยฉุกเฉินนอกโรงพยาบาล Competition) จัดขึ้นในหลายประเทศ อาทิ ประเทศสหรัฐอเมริกา สาธารณะรัฐเชค อังกฤษ อิสราเอล ญี่ปุ่น ประเทศ แคนาดา ออสเตรเลีย เนเธอร์แลนด์ สเปน มาเลเซีย สิงค์โปร์ ฮองกง และไทย เป็นต้น เรียกแข่งขันแตกต่างกันออกไป เช่น EMS Competition, EMS contest, EMS Challenge, Ambulance Competition, Paramedic Comp skill contest, Medical rally, EMS rally Championship เป็นต้น แต่ส่วนใหญ่จะใช้คําว่า “Competition”โดยมีรายงานว่าการแข่งขัน ก่อนปี ค.ศ. 1968 ซึ่งจัดโดย Community Rescue Service ที่เมือง Hagerstownรัฐ Maryland เป็นการแข่งขัน World Championship (rescue) ต่อมาในปีค.ศ.1975 Medical Services Competition ประเทศสหรัฐอเมริกา แล้วก็มีการแข่งขัน ท้องถิ่นและระดับประเทศเพิ่มมากขึ้นเรื่อ จนกระทั่งปี ค.ศ. 2002 จึงได มีการแข่งขัน นานาชาติ (International Emergency Medical Services Competition) ที่เมือง Utica สหรัฐอเมริกา ทั้งนี้เพื่อมุ่งค้นหา "Best of the Best" 
                                    </p>
                                    <h4 class="title" style="color:#9c27b0">Ems Rally ในประเทศไทย    ( นพ.นคร ทิพย์สุนทรศักดิ์)</h4>
                                    <p>
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;EMS Rally มาจากคำว่า“Emergency Medical Service Rally” เป็นการแข่งขันการช่วยเหลือผู้ ป่วยบาดเจ็บและป่วยฉุกเฉินนอกโรงพยาบาล ที่ศูนย์ โรงพยาบาลขอนแก่นบัญญัติขึ้นมาเพื่อใช้ ในการแข่งขันการช่วยเหลือผู้ป่วยบาดเจ็บและป่วยฉุกเฉิน การทดสอบทุกฐาน (station) ที่ได้ จําลองสถานการณ์ที่เกิดนอกโรงพยาบาล
                                    </p>
                                    <p>
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;EMS Rally  จัดเป็นครั้งแรกในประเทศไทยเมื่อวันที่ 29-30 มีนาคม 2549 ณ สวนสาธารณะรอบบึงแก่นนคร จังหวัดขอนแก่น โดยโรงพยาบาลขอนแก่น  ซึ่งถือว่า เป็นต้นตํารับและผู้ริเริ่มจัดการแข่งขันครั้งแรกขึ้น หลังจากนั้น EMS Rally ก็ถูกจัดขึ้นในหลาย ๆ พื้นที่ โดยถือว่าเป็นกิจกรรมที่ช่วยพัฒนาบุคลากร ด้านการแพทย์ฉุกเฉินได้เป็นอย่างดี เพราะเป็นเสมือนการฝึกปฏิบัติจริง ณ จุดเกิดเหตุ ซึ่งถึงแม้ว่าที่ผ่านมา จะมีการจัดการแข่งขัน EMS Rally ในพื้นที่ต่างๆ ทั้งในระดับอําเภอ  ระดับจังหวัด และในระดับเขต แต่ ทว่าประเทศไทยก็ยังไม่เคยจัดการแข่งขัน EMS Rally ในระดับชาติมาก่อน ด้วยเหตุนี้ สถาบันการแพทย์ฉุกเฉินแห่งชาติ (สพฉ.)ซึ่งมีหน้าที่ในการพัฒนาบุคลากรด้าน การแพทย์ฉุกเฉิน จึงได้จัดให้มีการแข่งขัน EMS Rally ระดับชาติ ขึ้นเป็นครั้งแรกในประเทศไทย โดยได้จัด ให้เป็นกิจกรรมส่วนหนึ่งของงานการประชุมวิชาการการแพทย์ฉุกเฉินระดับชาติ     ทั้งนี้ก็เพื่อประเมินสมรรถนะของบุคลากรผู้เข้าร่วมแข่งขันทุก ระดับ และนําผลการประเมินไปใช้เป็นข้อมูลในการวางแผนพัฒนาบุคลากรด้านการแพทย์ฉุกเฉินต่อไปใน อนาคต รวมทั้งยังเป็นการเฟ้นหา Best of the Best ของทีมในระดับเขต เพื่อเป็นตัวแทนของประเทศไทย ไปแข่งขัน EMS Rally ในระดับนานาชาติต่อไป 
                                    </p>
                                    <p>
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;โดยการแข่งขัน EMS Rally แบ่งการแข่งขันออกเป็นประเภทการแข่งขัน เช่น 
ประเภททีมชุดปฏิบัติการฉุกเฉินระดับสูง ( Advance Life Support : ALS) , ประเภททีมชุดปฏิบัติการฉุกเฉินเบื้องต้น ( First Responder : FR )  ซึ่ง ในแต่ละประเภทจะมีทีมตัวแทนจากระดับเขตเข้าร่วมแข่งขัน โดยแต่ละทีมจะต้อง เข้าร่วมทํากิจกรรมในฐานที่ได้มีการจําลองสถานการณ์ฉุกเฉินที่ครอบคลุมทั้งการบาดเจ็บ ป่วยฉุกเฉิน และ สาธารณภัย รวมทั้งสิ้น 12 ฐาน เพื่อให้ผู้เข้าร่วมแข่งขันได้แสดงความรู้ความสามารถในการวิเคราะห์ข้อมูล การสั่งการ การประเมินและควบคุมสถานการณ์ การยกและเคลื่อนย้ายผู้ป่วย การสื่อสาร และการทํางาน เป็นทีม โดยใช้หลักการช่วยเหลือผู้ป่วยฉุกเฉินนอกโรงพยาบาลตามมาตรฐานระบบการแพทย์ฉุกเฉินของ ประเทศไทย เพื่อหาทีมที่มีความพร้อมและความสามารถในการปฏิบัติการการแพทย์ฉุกเฉินที่ดีที่สุดใน
                                    </p>
                                    <p>
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;EMS Rally เป็นนวัตกรรมในการพัฒบุคลากรในระบบการแพทย์ฉุกเฉิน ทางวิชาการในรูปแบบการแข่งขันการช่วยเหลือผู้ป่วย บาดเจ็บและป่วยฉุกเฉินในสถานการณ์จําลองที่เสมือน จริง(simulation) แต่ละทีมที่เข้าร่วมแข่งขันจะต้องผ่าน การทดสอบทุกฐาน (station) ที่ได้จําลองสถานการณ์ที่เกิดนอกโรงพยาบาล  (pre-hospital)โดยใช้ผู้ป่วยจำลอง ผู้เข้าแข่งขันจะต้องแสดงการประเมินสถานการณ์ ,การประเมินผู้ป่วยและการดูแลผู้ป่วยตามหลักการสากล การใช้อุปกรณ์ต่างๆ รวมถึงการสื่อสาร และจะมีกรรมการประจําแต่ละ  station   คอยให้ข้อมูลเพิ่มเติม และประเมินผลการปฏิบัติการภาพรวมของทีม  ในการแข่งขันแต่ละทีมจะประกอบด้วยบุคลากรเหมือนที่ปฏิบัติงานในสถานการณ์จริง ได้แก่
                                    </p>
                                    <ul>
                                        <li>แพทย์ (Emergency Physician)</li>
                                        <li>พยาบาล (Paramedic Nurse/ pre-hospital Nurse)</li>
                                        <li>เจ้าพนักงานฉุกเฉินการแพทย์   Emergency Medical Technicianข- Intermediate)</li>
                                        <li>พนักงานฉุกเฉินการแพทย์ (Emergency Medical Technician - Basic)</li>
                                        <li>อาสาสมัครฉุกเฉินการแพทย์ (First Responder)</li>
                                    </ul>
                                    <h4 class="title" style="color:#9c27b0">วัตถุประสงค์ การจัดการแข่งขัน EMS Rally ดังนี้ </h4>
                                    <ul>
                                        <li>เพื่อพัฒนารูปแบบการเรียนการสอนที่มีประสิทธิภาพ สําหรับบุคลากรในระบบการแพทย์ ฉุกเฉินทุกระดับ </li>
                                        <li>เพื่อยกระดับความสามารถของทีมปฏิบัติการในเรื่องของการทํางานเป็นทีมการสื่อสาร การ ประสานงาน และการเป็นผู้นํา</li>
                                        <li>พัฒนารูปแบบของการประเมินการ ปฏิบัติงานการบริการการแพทย์ฉุกเฉิน </li>
                                        <li>ประชาสัมพันธ์เพื่อให้ประชาชน และชุมชนเห็นความจําเป็นและ ความสําคัญของการแพทย์ฉุกเฉิน </li>
                                        <li>ขยายรูปแบบการจัด ไปยังภูมิภาคอื่นของประเทศไทย </li>
                                        <li>เพื่อนําเสนอรูปแบบใหม่ของการ พัฒนาคุณภาพบุคลากรในระบบบริการการแพทย์ฉุกเฉินแก่ผู้บริหารระดับสูง</li>
                                    </ul>
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