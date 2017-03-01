<!DOCTYPE html>
<html>
<head>
  <title>Thailand Active Fire Hotspot Reporting System</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="icon" type="image/png" href="assets/images/favicon.png">
  <link rel="stylesheet" type="text/css" href="./assets/css/vendor.css">
  <link rel="stylesheet" type="text/css" href="./assets/css/flat-admin.css">

   <meta charset="utf-8">
  <!-- Theme -->
  <link rel="stylesheet" type="text/css" href="./assets/css/theme/red.css">
<script language=Javascript>
        function Inint_AJAX() {
           try { return new ActiveXObject("Msxml2.XMLHTTP");  } catch(e) {} 
           try { return new ActiveXObject("Microsoft.XMLHTTP"); } catch(e) {} 
           try { return new XMLHttpRequest();          } catch(e) {}
           alert("XMLHttpRequest not supported");
           return null;
        };

        function dochange(src, val) {
             var req = Inint_AJAX();
             req.onreadystatechange = function () { 
                  if (req.readyState==4) {
                       if (req.status==200) {
                            document.getElementById(src).innerHTML=req.responseText; 
                       } 
                  }
             };
             req.open("GET", "localtion2.php?data="+src+"&val="+val); 
             req.send(null); 
        }
 
        window.onLoad=dochange('prov_name', -1);     
    </script>
</head>
<body>
  <div class="app app-red">
<aside class="app-sidebar" id="sidebar">
  <div class="sidebar-header">
    <a class="sidebar-brand" href="#"><img class="profile-img"  src="./assets/images/logo_gistv1.png" ></a>
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
      <li class="dropdown">
        <a href="./map.php">
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
       <li class="active">
        <a href="report.php" class="dropdown-toggle" data-toggle="dropdown">
          <div class="icon">
            <i class="fa fa-bar-chart" aria-hidden="true"></i>
          </div>
          <div class="title">REPORT</div>
        </a>
		<div class="dropdown-menu">
          <ul>
		    <li><a href="./heatmap.php">Heatmap</a></li>
            <li><a href="./point.php">Point & Polygon</a></li>
            <li><a href="./chart.php">Chart</a></li>
          </ul>
        </div>
      </li>
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
          <div class="icon">
            <i class="fa fa-share-alt-square" aria-hidden="true"></i>
          </div>
          <div class="title">SERVICES</div>
        </a>
        <div class="dropdown-menu">
          <ul>
		    <li class="section"><i class="fa fa-tag" aria-hidden="true"></i> Other.</li>
            <li><a href="./services.php">Services</a></li>
            <li><a href="./document.php">Document</a></li>
            <li><a href="./teams.php">Teams</a></li>
          </ul>
        </div>
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
<div class="app-container">
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
        <li class="navbar-title"><img class="profile-img"  src="./assets/images/fire_banner.png" ></li>
      </ul>
    </div>
  </div>
</nav>



		  <div class="row">
			<div class="col-md-12">
			  <div class="card">
				<div class="card-body">
				  <div class="row">
					  <div class="col-md-3">
					  
					  <form action="map_fire/dashboard.php"  method="post" target="my_iframe">
					  
					  
						 จังหวัด    
									 <span id="prov_name">
										<select class="select2">
											<option value='%'>- เลือกทุกจังหวัด -</option>
										</select>
									</span>
									
									 อำเภอ    
									<span id="amphoe_name">
										<select  class="select2">
											<option value=''>- เลือกทุกอำเภอ -</option>
										</select>
									</span>
									
									
								 ตำบล     
									<span id="tambon_name">
										<select class="select2">
											<option value=''>- เลือกทุกตำบล -</option>
										</select>
									</span>
									
									
									เลือกช่วงเวลาที่ต้องการ
							<select class="select2" id="select"  name="start_date">
								  <option value="<?php $current_date = new DateTime();
												$current_date -> modify ("-7 day");
												
												$arr = $current_date->format('m/d/Y');
												echo  $arr;
											?>">7 วันล่าสุด</option>
								  <option value="<?php $current_date = new DateTime();
												$current_date -> modify ("-14 day");
												
												$arr = $current_date->format('m/d/Y');
												echo  $arr;
											?>">14 วันล่าสุด</option>
								  <option value="<?php $current_date = new DateTime();
												$current_date -> modify ("-30 day");
												
												$arr = $current_date->format('m/d/Y');
												echo  $arr;
											?>">30 วันล่าสุด</option>
								  <option value="<?php $current_date = new DateTime();
												$current_date -> modify ("-60 day");
												
												$arr = $current_date->format('m/d/Y');
												echo  $arr;
											?>">60 วันล่าสุด</option>
								  <option value="<?php $current_date = new DateTime();
												$current_date -> modify ("-90day");
												
												$arr = $current_date->format('m/d/Y');
												echo  $arr;
											?>">90 วันล่าสุด</option>
								</select>
										
								
<hr>


								<button type="submit" class="btn btn-default"><i class="fa fa-search"></i>  ค้นหาข้อมูล</button>
						
					</form><button class="btn btn-default" onClick="window.frames['my_iframe'].print();"><i class="fa fa-print"></i> พิมพ์รายงาน</button>	
					
							<form action="map_fire/heat_fire2.php"  method="post" target="my_iframe">
								<button class="btn btn-default" ><i class="fa fa-file"></i> ดูรายงานสถานการณ์ปัจจุบัน</button>	
							</form>		
					  </div>
					  
					  
						<div class="col-md-9">
							<iframe name="my_iframe" src="map_fire/heat_fire2.php" style="width: 100%;" frameborder="0" scrolling="no" onload="resizeIframe(this)"  ></iframe>
						</div>
						
					</div>
							</div>
						  </div>
						</div>
  </div>

  
  
  
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