<?php $this->load->view('admin/header'); ?>
<div class="wrapper profile-page">
        <div class="page-header header-filter header-small" data-parallax="active" style="background-image: url('<?php echo base_url('static/img/cover.jpg'); ?>');"></div>
        <div class="main main-raised">
            <div class="container">
                <div class="row">
                    <div class="col-xs-10 col-xs-offset-1">
                        <div id="users-list">
                            <h2 class="text-center title" style="margin-bottom: 20px;">รายชื่อผู้ดูแลระบบ</h2>
                            <div class="pull-right" style="margin-bottom: 10px;">
                                <a href="<?php echo base_url('admin/admin/create')?>">เพิ่มผู้ดูแลระบบ</a>
                            </div>
                            <table id="users-list-table" class="display" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>ชื่อผู้ใช้งาน</th>
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
            "ajax": '<?php echo base_url("admin/admin-list/get")?>',
            stateSave: true,
            "columns": [
                { "data": "id" },
                { "data": "username" },                
                { "data": "username" }
            ],
            "columnDefs":[
                {
                  "render": function ( data, type, row ) {
                    edit = '<a href="<?php echo base_url("admin/admins/")?>'+row.id+'/edit">แก้ไข</a>';
                    _delete = '<a onclick="return recheck()" href="<?php echo base_url("admin/admins/")?>'+row.id+'/delete">ลบ</a>';
                    return edit+' '+_delete;
                  },
                  "targets": 2
                }
            ]
        });             
    });
    function recheck(){
        return confirm('ต้องการลบข้อมูลใช่หรือไม่ ?');
    }
</script>