<!DOCTYPE html>
<html>
<head>
  <title>Thailand Active Fire Reporting System</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
 <meta name="description" content="Thailand Active Fire Reporting System | Regional Center of Geo-Informatics and Space Technology, Lower Northern Region, Naresuan University">

  <link rel="icon" type="image/png" href="assets/images/favicon.png">
   <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="./assets/css/vendor.css">
  <link rel="stylesheet" type="text/css" href="./assets/css/flat-admin.css">

  <!-- Theme -->
  <link rel="stylesheet" type="text/css" href="./assets/css/theme/blue-sky.css">
  <link rel="stylesheet" type="text/css" href="./assets/css/theme/blue.css">
  <link rel="stylesheet" type="text/css" href="./assets/css/theme/red.css">
  <link rel="stylesheet" type="text/css" href="./assets/css/theme/yellow.css">

</head>
<body>
  <div class="app app-red">
<aside class="app-sidebar" id="sidebar">
  <div class="sidebar-header">
    <a class="sidebar-brand" href=""><img class="profile-img"  src="./assets/images/logo_gistv1.png" ></a>
    <button type="button" class="sidebar-toggle">
      <i class="fa fa-times"></i>
    </button>
  </div>
  <div class="sidebar-menu">
    <ul class="sidebar-nav">
      <li >
        <a href="./index.php">
          <div class="icon">
            <i class="fa fa-home" aria-hidden="true"></i>
          </div>
          <div class="title">HOME</div>
        </a>
      </li>
      <li class=" dropdown">
        <a href="./map.php" class="dropdown-toggle" data-toggle="dropdown">
          <div class="icon">
            <i class="fa fa-map-marker" aria-hidden="true"></i>
          </div>
          <div class="title">MAP</div>
        </a>
		<div class="dropdown-menu">
          <ul>
		    <li><a href="./modis.php">MODIS Hotspot</a></li>
            <li><a href="./viirs.php">VIIRS Hotspot</a></li>
          </ul>
        </div>
      </li>
       <li class="dropdown">
        <a href="report.php" class="dropdown-toggle" data-toggle="dropdown">
          <div class="icon">
            <i class="fa fa-bar-chart" aria-hidden="true"></i>
          </div>
          <div class="title">REPORT</div>
        </a>
		<div class="dropdown-menu">
          <ul>
		    <li><a href="./heatmap.php">รายงานในรูปแบบ HeatMap</a></li>
            <li><a href="./point.php">รายงานในรูปแบบขอบเขตการปกครอง</a></li>
          </ul>
        </div>
      </li>
      <li class="active dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
          <div class="icon">
            <i class="fa fa-share-alt-square" aria-hidden="true"></i>
          </div>
          <div class="title">SERVICES</div>
        </a>
        <div class="dropdown-menu">
          <ul>
            <li><a href="./services.php">Services</a></li>
            <li><a href="./document.php">Document</a></li>
            <li><a href="./teams.php">Teams</a></li>
          </ul>
        </div>
      </li>
      <li class="">
        <a href="./contact.php">
          <div class="icon">
            <i class="fa fa-user" aria-hidden="true"></i>
          </div>
          <div class="title">CONTACT</div>
        </a>
      </li>
    </ul>
  </div>
  <div class="sidebar-footer">
    <ul class="menu">
      <li>
        <a href="/" class="dropdown-toggle" data-toggle="dropdown">
          <i class="fa fa-cogs" aria-hidden="true"></i>
        </a>
      </li>
      <li><a href="#"><span class="flag-icon flag-icon-th flag-icon-squared"></span></a></li>
    </ul>
  </div>
</aside>

<script type="text/ng-template" id="sidebar-dropdown.tpl.html">
  <div class="dropdown-background">
    <div class="bg"></div>
  </div>
  <div class="dropdown-container">
    {{list}}
  </div>
</script>
<div class="app-container app-full">
  <nav class="navbar navbar-default" id="navbar">
  <div class="container-fluid">
    <div class="navbar-collapse collapse in">
      <ul class="nav navbar-nav navbar-mobile">
        <li>
          <button type="button" class="sidebar-toggle">
            <i class="fa fa-bars"></i>
          </button>
        </li>
        <li class="logo">
          <a class="navbar-brand" href="#"><img class="profile-img"  src="./assets/images/logo_gistv1.png" ></a>
        </li>
      </ul>
      <ul class="nav navbar-nav navbar-left">
        <li  ><img class="profile-img"  align="left"  src="./assets/images/fire_banner.png" width="100%" ></li>
      </ul>
    </div>
  </div>
</nav>
  <div class="app-messaging-container">
    <div class="app-messaging" id="collapseMessaging">
			<iframe name="my_iframe" src="http://www2.cgistln.nu.ac.th/web2016/#blog-full-width" style="width: 100%; height: 850px;" frameborder="0" ></iframe>
	
	
    </div>
  </div>
  
  
  
</div>
  </div>
  
    <div class="btn-floating" id="help-actions">
  <div class="btn-bg"></div>
  <button type="button" class="btn btn-default btn-toggle" data-toggle="toggle" data-target="#help-actions">
    <i class="icon fa fa-plus"></i>
    <span class="help-text">Shortcut</span>
  </button>
  <div class="toggle-content">
    <ul class="actions">
      <li><a href="http://www.cgistln.nu.ac.th/9/" target="_blank">Website</a></li>
      <li><a href="https://www.facebook.com/Gistlnnu"  target="_blank">Facebook</a></li>
      <li><a href="http://www2.cgistln.nu.ac.th/web2016/"  target="_blank">GISTNU portal</a></li>
    </ul>
  </div>
</div>
  <script type="text/javascript" src="./assets/js/vendor.js"></script>
  <script type="text/javascript" src="./assets/js/app.js"></script>
  <script>
  function resizeIframe(obj) {
    obj.style.height = obj.contentWindow.document.body.scrollHeight + 'px';
  }
</script> 
    
</body>
</html>