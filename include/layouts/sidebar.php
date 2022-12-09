<div class="page-sidebar " id="main-menu">
  <div class="page-sidebar-wrapper scrollbar-dynamic" id="main-menu-wrapper">
    <?php include($_SERVER['DOCUMENT_ROOT']."/include/layouts/profile.sidebar.php"); ?>
    <!-- BEGIN SIDEBAR MENU -->
    <p class="menu-title sm text-white">BROWSE HUSK ROOT</p>
    <ul>
<?php
  // Show menu for farmers only.
  if ($user['type'] == 1) {
?>
    <li class="<?php if($scriptName == 'dashboard'){echo 'active';}; ?>">
        <a href="/dashboard?token=<?php echo $user['token']; ?>">
          <i class="material-icons">dashboard</i>
          <span class="title">My Dashboard</span> 
          <span class="selected"></span> 
        </a>
      </li>
<?php } ?>
      <li class="<?php if(in_array($scriptName, array('explore', 'categories'))){echo 'active';}; ?>">
        <a href="/explore?token=<?php echo $user['token']; ?>">
          <i class="material-icons">explore</i>
          <span class="title">Explore Harvest</span> 
          <span class="selected"></span> 
        </a>
      </li>
      <p class="menu-title sm text-white">BROWSE OUR PRODUCTS</p>
      <li class="<?php if(in_array($scriptName, array('index', 'view'))){echo 'active';}; ?>">
        <a href="/product/index?token=<?php echo $user['token']; ?>">
          <i class="material-icons">inbox</i>
          <span class="title">Products</span> 
          <span class="selected"></span> 
        </a>
      </li>
<?php
  // Show menu for farmers only.
  if ($user['type'] == 1) {
?>
    <li class="<?php if(in_array($scriptName, array('add', 'farmer', 'edit'))){echo 'active';}; ?>">
        <a href="#">
          <i class="material-icons">perm_data_setting</i>
          <span class="title">Manage Products</span> 
          <span class=" arrow"></span>
        </a>
          <ul class="sub-menu">
            <li class="<?php if(in_array($scriptName, array('add'))){echo 'active';}; ?>">
              <a href="/product/add?token=<?php echo $user['token']; ?>">
                  <span class="title">Add Product</span>
              </a>
            </li>
            <li class="<?php if(in_array($scriptName, array('farmer', 'edit'))){echo 'active';}; ?>"> 
              <a href="/product/farmer?id=<?php echo $user['person_id']; ?>&token=<?php echo $user['token']; ?>">
                  <span class="title">My Products</span>
              </a>
            </li>
        </ul>
      </li>
<?php } ?>
      <p class="menu-title sm text-white">SETTINGS</p>
      <li class="<?php if(in_array($scriptName, array('settings', 'password'))){echo 'active';}; ?>">
        <a href="/account/settings?token=<?php echo $user['token']; ?>">
          <i class="material-icons">settings_applications</i>
          <span class="title">Account Settings</span> 
          <span class="selected"></span> 
        </a>
      </li>
      <li>
        <a href="#" onclick="logout()">       
          <i class="material-icons">exit_to_app</i>
          <span class="title">Logout</span> 
          <span class="selected"></span> 
        </a>
      </li>
    </ul>
    <div class="clearfix"></div>
    <!-- END SIDEBAR MENU -->
  </div>
</div>
<!-- END SIDEBAR