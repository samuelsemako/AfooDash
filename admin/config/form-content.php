<?php if($page=='passwordResetSuccessful'){?>
    <div class="successful-div animated bounceInDown">
        <div class="success-in">
            <div class="gif">
                <img src="<?php echo $websiteUrl?>/all-images/images/success.gif" alt="successful gif">
            </div>
            <h3>PASSWORD RESET SUCCESSFULLY</h3>
            <button class="btn" onclick="location.href='<?php echo $websiteUrl?>/admin'">OKAY <i class="bi-check2-all"></i></button>
        </div> 
    </div>
<?php }?>