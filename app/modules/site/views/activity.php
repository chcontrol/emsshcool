<style>
    div {
        padding: 5px;
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

                        <!--start Activity_Createing 3 -->
                        <div class="col-xs-6">
                            <div class="card" style="width: 100% ">
                                <img style="height: 250px" class="card-img-top" src="<?php echo base_url('static/img/activity/activity-1-1.jpg') ?>" alt="Card image cap">
                                <div class="card-body">
                                    <h6 class="card-title">
                                        ประชุมระดมความคิดเห็น
                                    </h6>
                                    <p class="card-text">การพัฒนาโปรแกรมการเรียนรู้และกระบวนการถ่ายทอดความรู้ ด้านการแพทย์ฉุกเฉินเชิงสร้างสรรค์อย่างมีส่วนร่วมจังหวัดเชียงราย</p>
                                    <a href="<?php echo base_url("activity_1"); ?>" class="btn btn-primary">กิจกรรม</a>
                                </div>
                            </div>
                        </div>
                        <!-- end Activity_Createing 3 -->
                        <div class="col-xs-6">
                            <div class="card" style="width: 100% ">
                                <img style="height: 250px" class="card-img-top" src="<?php echo base_url('static/img/activity/activity-2-1.jpg') ?>" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title">
                                        โปรแกรมการเรียนรู้
                                    </h5>
                                    <p class="card-text">การถ่ายทอดโปรแกรมการเรียนรู้และกระบวนการถ่ายทอดความรู้ด้านการแพทย์ฉุกเฉินสู่การนำร่องไปใช้ในโรงเรียนต้นแบบ จังหวัดเชียงราย</p>
                                    <a href="<?php echo base_url("activity_2"); ?>" class="btn btn-primary">กิจกรรม</a>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $this->load->view('site/footer'); ?>