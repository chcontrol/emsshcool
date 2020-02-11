<style>
div{
    padding:5px;
}
</style>
<?php $this->load->view('site/header'); ?>
<div class="wrapper">
    <div class="page-header header-filter header-small" data-parallax="active" style="background-image: url('<?php echo base_url('static/img/cover.jpg'); ?>');">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <!-- <h1 class="title text-center">Tutorial</h1> -->
                </div>
            </div>
        </div>
    </div>

    <div class="main main-raised">
        <div class="section">
            <div class="container">
                <div class="row tim-row">
                    <h2 class="text-center title">กิจกรรม</h2>
                    <legend></legend>
                    <div class="col-md-8 col-md-offset-2">
                        <p><b>การถ่ายทอดโปรแกรมการเรียนรู้ </b></p>
                        <p>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;วันที่ 5-6 ธันวาคม 2562 มีการจัดประชุมเชิงปฏิบัติการ 
                            “การถ่ายทอดโปรแกรมการเรียนรู้และกระบวนการถ่ายทอดความรู้ด้านการแพทย์ฉุกเฉินสู่การนำร่องไปใช้ในโรงเรียนต้นแบบ 
                            จังหวัดเชียงราย” ณ โรงเรียนเวียงเชียงรุ้งวิทยาคม จังหวัดเชียงราย โดยมีกิจกรรมที่สำคัญได้แก่ การให้ความรู้ด้านการแพทย์ฉุกเฉินทั้งด้านการแจ้งเหตุ 
                            การปฐมพยาบาลเบื้องต้น การฝึกอบรมการทำ CPR และการใช้เครื่อง AED การใช้เวปไซด์ประกอบการเรียนการสอน โดยมีทีมวิทยากรจาก 
                            โรงพยาบาลเชียงรายประชานุเคราะห์ สำนักงานสาธารณสุขจังหวัดเชียงราย และสถาบันการแพทย์ฉุกเฉินแห่งชาติ (สพฉ.) 
                            นอกจากนี้มีการมอบเครื่องช่วยฟื้นคืนชีพ (AED) และหุ่นให้กับโรงเรียนที่เข้าร่วมโครงการเพื่อนำไปใช้ในการเรียนการสอนในโรงเรียนอีกด้วย
                        </p>
                        <br />
                        <div>
                            <a href="<?php echo base_url('activity')?>"><< กลับสู้หน้ากิจกรรม</a>
                        </div>
                        <br />
                        <ul class="no-list">
                            <div class="col-sm-12">
                                <img src="<?php echo base_url('static/img/activity/activity-2-1.jpg') ?>" style="width:100%; " alt="">
                            </div>
                            <div class="col-sm-6 text-center">
                                <img src="<?php echo base_url('static/img/activity/activity-2-2.jpg') ?>" style="width:100%; " alt="">
                            </div>
                            <div class="col-sm-6 text-center">
                                <img src="<?php echo base_url('static/img/activity/activity-2-3.jpg') ?>" style="width:100%; " alt="">
                            </div>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $this->load->view('site/footer'); ?>