<?php define('farmer_text', 'A Husk Root Farmer'); define('buyer_text', 'A Husk Root Buyer');  ?>
<!-- START MINI-PROFILE -->
<div class="user-info-wrapper sm">
  <div class="profile-wrapper sm">
    <img src="/assets/img/users/default.jpg" alt="" data-src="/assets/img/users/default.jpg" data-src-retina="/assets/img/users/default.jpg" width="69" height="69" />
    <div class="availability-bubble online"></div>
  </div>
  <div class="user-info sm">
    <div class="username" style="font-size: 17px;"><?php echo $user['first_name']; ?> <span class="semi-bold"><?php echo $user['last_name']; ?></span></div>
    <div class="status"><?php if($user['type']==1){echo farmer_text;}else{echo buyer_text;} ?></div>
  </div>
</div>
<!-- END MINI-PROFILE -->