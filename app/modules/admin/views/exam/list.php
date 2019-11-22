<?php $this->load->view('admin/header'); ?>
<div class="wrapper profile-page">
        <div class="page-header header-filter header-small" data-parallax="active" style="background-image: url('<?php echo base_url('static/img/cover.jpg'); ?>');"></div>
        <div class="main main-raised">
            <div class="container">
                <div class="row">
                    <div class="col-xs-10 col-xs-offset-1">
                        <div id="users-list">
                        <div class="pull-right" style="margin-bottom: 10px;">
                                <a href="<?php echo base_url('admin/exams/create')?>">เพิ่มชุดแบบทดสอบ</a>
                        </div>
                            <h2 class="text-center title" style="margin-bottom: 20px;">รายชื่อชุดแบบทดสอบ</h2>
                            <table id="users-list-table" class="display" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>ชื่อ</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody></tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $this->load->view('site/footer'); ?>
<script src="<?php echo base_url('static/vendor/data-table/media/js/jquery.dataTables.min.js')?>" type="text/javascript"></script>
<script>    
    $(document).ready(function() {      
        $('#users-list-table').dataTable({    
            "processing": true,
            "serverSide": true,
            "responsive": true,
            "order": [[ 0, "DESC" ]],                   
            "ajax": '<?php echo base_url("admin/exam-list/get")?>',
            "stateSave": true,
            "columns": [
                { "data": "id" },
                { "data": "name" },                
                { "data": "name" }
            ],
            "columnDefs":[
                {
                  "render": function ( data, type, row ) {                
                    show = '<a href="<?php echo base_url("admin/exams/")?>'+row.id+'">ดู</a>';
                    edit = '<a href="<?php echo base_url("admin/exams/")?>'+row.id+'/edit">แก้ไข</a>';
                    return show+' '+edit;
                  },
                  "targets": 2
                }
            ]
        });             
    });
</script>