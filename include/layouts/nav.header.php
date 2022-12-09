<!-- BEGIN TOP NAVIGATION BAR -->
<div class="navbar-inner">
  <div class="header-seperation">
    <ul class="nav pull-left notifcation-center visible-xs visible-sm">
      <li class="dropdown">
        <a href="#main-menu" data-webarch="toggle-left-side">
          <i class="material-icons">menu</i>
        </a>
      </li>
    </ul>
    <!-- BEGIN LOGO -->
    <a href="/explore?token=<?php echo $user['token']; ?>">
      <img src="/assets/img/logo2x.png" class="logo" alt="" data-src="/assets/img/logo2x.png" data-src-retina="/assets/img/logo2x.png" width="140" />
    </a>
    <!-- END LOGO -->
    <ul class="nav pull-right notifcation-center">
      <li class="dropdown hidden-xs hidden-sm">
        <a href="/explore?token=<?php echo $user['token']; ?>" class="dropdown-toggle active" data-toggle="">
          <i class="material-icons">home</i>
        </a>
      </li>
    </ul>
  </div>
  <!-- END RESPONSIVE MENU TOGGLER -->
  <div class="header-quick-nav">
    <!-- BEGIN TOP NAVIGATION MENU -->
    <div class="pull-left">
      <ul class="nav quick-section">
        <li class="quicklinks">
          <a href="#" class="" id="layout-condensed-toggle">
            <i class="material-icons">menu</i>
          </a>
        </li>
      </ul>
      <ul class="nav quick-section">
        <li class="quicklinks  m-r-10">
          <a href="#" onclick="window.history.back(-1)" class="">
            <i class="material-icons">arrow_back</i>
          </a>
        </li>
        <li class="quicklinks  m-r-10">
          <a href="" onclick="location.reload()" class="">
            <i class="material-icons">refresh</i>
          </a>
        </li>
        <li class="quicklinks  m-r-10">
          <a href="#" onclick="window.history.forward()" class="">
            <i class="material-icons">arrow_forward</i>
          </a>
        </li>
        <li class="quicklinks"> <span class="h-seperate"></span></li>
        <li class="input-prepend inside search-form no-boarder">
          <span class="add-on"> <i class="material-icons">search</i></span>
          <input name="" type="text" class="no-boarder " placeholder="Search" style="width:250px;">
        </li>
      </ul>
    </div>
    <!-- END TOP NAVIGATION MENU -->
    <!-- BEGIN CHAT TOGGLER -->
    <div class="pull-right">
      <div class="chat-toggler sm">
        <div class="profile-pic">
          <img src="/assets/img/users/default.jpg" alt="" data-src="/assets/img/users/default.jpg" data-src-retina="/assets/img/users/default.jpg" width="35" height="35" />
          <div class="availability-bubble online"></div>
        </div>
      </div>
      <ul class="nav quick-section ">
        <li class="quicklinks">
          <a data-toggle="dropdown" class="dropdown-toggle pull-right" href=""><i class="fa fa-cog fa-lg"></i></a>
          <ul class="dropdown-menu  pull-right" role="menu" aria-labelledby="user-options">
            <li><a href="/account/settings?token=<?php echo $user['token']; ?>"><i class="fa fa-user fa-lg"></i>&nbsp;Account&nbsp;Settings</a></li>
            <li><a href="#" onclick="logout()"><i class="fa fa-sign-out fa-lg"></i>&nbsp;Log&nbsp;Out</a></li>
          </ul>
        </li>
      </ul>
    </div>
    <!-- END CHAT TOGGLER -->
  </div>
  <!-- END TOP NAVIGATION MENU -->
</div>
<!-- END TOP NAVIGATION BAR -->