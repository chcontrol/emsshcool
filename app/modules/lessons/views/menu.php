<?php
    $check = check_pretest($this->uri->segment('2'));
    if(!$check){
        $pre_disabled = '';
        $disabled = 'disabled';
    }else{
        $pre_disabled = 'disabled';
        $disabled = '';
    }

    // $check = check_pretest($this->uri->segment('2'));
    // if(!$check){
    //     $pre_disabled = '';
    //     $disabled = '';
    // }else{
    //     $pre_disabled = '';
    //     $disabled = '';
    // }
    //$disabled = 'disabled'; //ปิดไม่ให้ทำข้อสอบ
?>
<ul class="nav nav-pills nav-pills-icons" role="tablist">
    <li <?php if($type =='pre') echo 'class="active"'; ?>>
        <a href="<?php echo base_url('pretest/'.$this->uri->segment('2')); ?>" class="<?php echo $pre_disabled?>">
            <i class="material-icons">palette</i>
            แบบทดสอบก่อนเรียน
        </a>
    </li>
    <?php if($this->uri->segment('2') != '4-2'):?>
    <li <?php if($type =='lesson') echo 'class="active"'; ?>>
        <a href="<?php echo base_url('lesson/'.$this->uri->segment('2'))?>" class="<?php echo $disabled?>">
            <i class="material-icons">book</i>
            บทความ
        </a>
    </li>  
    <?php else: ?>
    <li <?php if($type =='lesson') echo 'class="active"'; ?>>
        <a href="<?php echo base_url('lesson/4')?>" class="<?php echo $disabled?>">
            <i class="material-icons">book</i>
            บทความ
        </a>
    </li>
    <?php endif; ?>
    <!-- <?php if($this->uri->segment('2') != '4' && $this->uri->segment('2') != '4-2'): ?>
    <li <?php if($type =='media') echo 'class="active"'; ?>>
        <a href="<?php echo base_url('media/'.$this->uri->segment('2')); ?>" class="<?php echo $disabled?>">
            <i class="material-icons">camera</i>
            สื่อ
        </a>
    </li>
    <?php else: ?>
    <li <?php if($type =='media') echo 'class="active"'; ?>>
        <a href="<?php echo base_url('lesson/4-2'); ?>" class="<?php echo $disabled?>">
            <i class="material-icons">group_work</i>
            ฐานและสถานการณ์ <br/>EMS Rally
        </a>
    </li>
    <?php endif; ?> -->
    <?php if($this->uri->segment('2') == '4-2'): ?>
    <li <?php if($type =='post') echo 'class="active"'; ?>>
        <a href="<?php echo base_url('posttest/4'); ?>" class="<?php echo $disabled?>">
            <i class="material-icons">palette</i>
            แบบทดสอบหลังเรียน
        </a>
    </li>
    <?php else: ?>
    <li <?php if($type =='post') echo 'class="active"'; ?>>
        <a href="<?php echo base_url('posttest/'.$this->uri->segment('2')); ?>" class="<?php echo $disabled?>">
            <i class="material-icons">palette</i>
            แบบทดสอบหลังเรียน
        </a>
    </li>
    <?php endif; ?>
</ul>