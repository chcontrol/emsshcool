<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>
     <?php if(isset($meta_title)){
        echo $meta_title.' - อาสาฉุกเฉินชุมชน';
     }else{
        echo 'อาสาฉุกเฉินชุมชน';
     }
     ?>
    </title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link href="https://fonts.googleapis.com/css?family=Prompt:400,500" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />
    <!-- CSS Files -->
    <link href="<?php echo base_url('static/css/bootstrap.min.css')?>" rel="stylesheet" />
    <link href="<?php echo base_url('static/css/material-kit.css')?>" rel="stylesheet"/>    
    <link href="<?php echo base_url('static/css/custom.css')?>" rel="stylesheet" />        
    <style>
        html,body{
            background: #FFF;
            color: #000 !important;
        }
        body{
            padding-top: 20px;
            padding-bottom: 20px;
        }       
    </style>
    <style type="text/css" media="print">
        .btn{
            display: none;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row">            
            <div class="col-xs-6">
                <div style="font-size: 20px;">                    
                    ผู้สอบ: <?php echo $user->name ?><br/>
                    ผลคะแนนสอบ
                </div>            
            </div>
            <div class="col-xs-6 text-right">
                <button class="btn" onclick="print()">PRINT</button><br/>
            </div>
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
        </div>
    </div>    
    <script>
        print();
    </script>
</body>
</html>