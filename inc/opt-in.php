<?php
function gift_optin() { ?>
   <!-- Begin Signup Form -->
<div id="signup" class="news widget_newsletters bg-primary">
         <div>
            <h3 class="hcopy-text">Download your copy of:</br> <strong class="book-title">Is <span class="boko font-italic">Boko Haram</span>? </strong>instantly. Enter your email below:</h3>
            <?php
                 echo newsletters_hardcode(false, false, false, 1);
            ?>
        </div>
</div>
<!--End signup-->
<?php }
add_action('opt_in', 'gift_optin'); ?>




