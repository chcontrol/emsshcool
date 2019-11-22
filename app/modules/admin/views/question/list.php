<?php $this->load->view('admin/header'); ?>
<div class="wrapper profile-page">
        <div class="page-header header-filter header-small" data-parallax="active" style="background-image: url('<?php echo base_url('static/img/cover.jpg'); ?>');"></div>
        <div class="main main-raised">
            <div class="container">
                <div class="row">
                    <div class="col-xs-10 col-xs-offset-1">
                        <div id="users-list">
                            <h2 class="text-center title" style="margin-bottom: 20px;">รายชื่อชุด <?php echo $exam->name?></h2>
                            <table class="table table-striped display" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th class="text-center">ID</th>
                                        <th class="text-center">คำถาม</th>
                                        <th class="text-center"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                        $i = 1;
                                        foreach ($objs as $row) {
                                            echo '<tr>';
                                            echo '<td class="text-center">'.$i++.'</td>';
                                            echo '<td>'.$row->question.'</td>';
                                            echo '<td>';                                            
                                            echo '<a href='.base_url('admin/question/'.$row->id.'/edit').'>แก้ไข</a>';
                                            echo '</td>';
                                            echo '</tr>';
                                        }
                                    ?>
                                </tbody>
                            </table>
                            <div class="text-right"><a href="<?php echo base_url('admin/exam-list')?>" class="btn btn-primary btn-simple btn-wd btn-lg">BACK</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $this->load->view('site/footer'); ?>
<script src="<?php echo base_url('static/vendor/data-table/media/js/jquery.dataTables.min.js')?>" type="text/javascript"></script>