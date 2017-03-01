<!DOCTYPE html>
<html>
<head>
<?php 
include('config.php');



$current_date = new DateTime();
$current_date -> modify ("-30 day");
$start = $current_date->format('m/d/Y');

?>
<?php 

	$current_date = new DateTime();
	$current_date -> modify ("-1 day");
	$end = $current_date->format('m/d/Y');
	

?>	



  <title>Thailand Active Fire Reporting System</title>
  
  <meta name="viewport" content="width=device-width, initial-scale=1">
 <meta name="description" content="Thailand Active Fire Reporting System | Regional Center of Geo-Informatics and Space Technology, Lower Northern Region, Naresuan University">

  <link rel="icon" type="image/png" href="assets/images/favicon.png">
  <link rel="stylesheet" type="text/css" href="./assets/css/vendor.css">
  <link rel="stylesheet" type="text/css" href="./assets/css/flat-admin.css">

  <!-- Theme -->
  <link rel="stylesheet" type="text/css" href="./assets/css/theme/blue-sky.css">
  <link rel="stylesheet" type="text/css" href="./assets/css/theme/blue.css">
  <link rel="stylesheet" type="text/css" href="./assets/css/theme/red.css">
  <link rel="stylesheet" type="text/css" href="./assets/css/theme/yellow.css">

   <meta charset="utf-8">
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
      <li class="">
        <a href="./index.php">
          <div class="icon">
            <i class="fa fa-home" aria-hidden="true"></i>
          </div>
          <div class="title">HOME</div>
        </a>
      </li>
      <li class="dropdown">
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
      <li class="dropdown">
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
      <li class="active">
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
        <li  ><img class="profile-img"  align="left"  src="./assets/images/fire_banner.png" width="100%" ></li>
      </ul>
    </div>
  </div>
</nav>

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

	
		<div class="col-lg-7">
			<div class="row">
				<div class="col-lg-12 col-md-6 col-sm-12 col-xs-12">
						<div class="card card-banner card-chart  no-br">
						  <div class="card-header">
							<div class="card-title">
							  <div class="title">ข้อมูลการติดต่อ</div>
							</div>
						  </div>
						  <div class="card-body"><h5>
						&nbsp  &nbsp &nbsp  สถานภูมิภาคเทคโนโลยีอวกาศและภูมิสารสนเทศภาคเหนือตอนล่าง มหาวิทยาลัยนเรศวร  <br>
						&nbsp &nbsp &nbsp   Regional Center of Geo-Informatics and Space Technology, Lower Northern Region, Naresuan University <br> <br> <br>
						&nbsp &nbsp &nbsp ชั้น 4 ตึก A<br>
						&nbsp &nbsp &nbsp อาคารมหาธรรมราชา <br>
						&nbsp &nbsp &nbsp มหาวิทยาลัยนเรศวร <br>
						&nbsp &nbsp &nbsp อำเภอเมือง จังหวัดพิษณุโลก 65000<br><br><br>
						&nbsp &nbsp &nbsp โทรศัพท์ 055-968707<br>
						&nbsp &nbsp &nbsp โทรสาร 055-968807<br>
						&nbsp &nbsp &nbsp Website: http://www.cgistln.nu.ac.th <br>
						&nbsp &nbsp &nbsp E-Mail : cgistln@nu.ac.th<br>
						 </h5> </div>
						</div>
				</div>
				
				

	
			</div>
		</div>
	
	
	
		 <div class="col-lg-5">
				<div class="row">
				
				<div class="col-lg-12">
				<div class="card card-banner card-chart  no-br"><div class="card-header">
						<div class="card-title">
							  <div class="title">ตำแหน่งที่ตั้งหน่วยงาน</div>
							</div>
						 </div>
				  <div class="card card-tab card-mini">
				  
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3820.6907103138024!2d100.19200562028273!3d16.74227718846832!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30dfbea2ae8ac66d%3A0xbd6f8f18a85e7f27!2z4Liq4LiW4Liy4LiZ4Lig4Li54Lih4Li04Lig4Liy4LiE4LmA4LiX4LiE4LmC4LiZ4LmC4Lil4Lii4Li14Lit4Lin4LiB4Liy4Lio4LmB4Lil4Liw4Lig4Li54Lih4Li04Liq4Liy4Lij4Liq4LiZ4LmA4LiX4LioIOC4oOC4suC4hOC5gOC4q-C4meC4t-C4reC4leC4reC4meC4peC5iOC4suC4hw!5e0!3m2!1sth!2sth!4v1488341547012" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
					
				  </div>
				</div>
				</div>

				<hr>

				  
				</div>
		</div>

	

  <footer class="app-footer"> 
  <div class="row">
    <div class="col-xs-12">
      <div class="footer-copyright">Regional Center of Geo-Informatics and Space Technology, Lower Northern Region, Naresuan University
      </div>
    </div>
  </div>
</footer>
</div>

  </div>
  <script src="https://code.highcharts.com/highcharts.js"></script>
	<script src="https://code.highcharts.com/modules/exporting.js"></script>

  <script type="text/javascript" src="./assets/js/vendor.js"></script>
  
  <script type="text/javascript" src="./assets/js/app.js"></script>
  <script type="text/javascript" >

 Highcharts.chart('chartmodis', {
    chart: {
        type: 'column'
    },
    title: {
        text: ''
    },
    subtitle: {
        text: ''
    },
    xAxis: {
        categories: [
		<?php $result = pg_query($db, "SELECT pv_tn,count(*) as sum_hot
FROM modisgeo 
where acq_date = '$end' 
group by pv_tn
order by sum_hot DESC limit 10;");
				while ($arr = pg_fetch_array($result))
										
										{ ?>	
	
            '<?php echo $arr[pv_tn]; ?>',
										<?php } ?>
        ],
        crosshair: true
    },
    yAxis: {
        min: 0,
        title: {
            text: 'จำนวนจุดความร้อน (จุด)'
        }
    },
    tooltip: {
        headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
        pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
            '<td style="padding:0"><b>{point.y:.0f} จุด</b></td></tr>',
        footerFormat: '</table>',
        shared: true,
        useHTML: true
    },
    plotOptions: {
        column: {
            pointPadding: 0.2,
            borderWidth: 0
        }
    },
    series: [{
		
        name: 'จำนวนจุดความร้อนรายวัน',
        data: [ 
			<?php $result = pg_query($db, "SELECT pv_tn,count(*) as sum_hot
FROM modisgeo 
where acq_date = '$end' 
group by pv_tn
order by sum_hot DESC limit 10;");
				while ($arr = pg_fetch_array($result))
										
										{ ?>
		<?php echo $arr[sum_hot]; ?>,
		<?php } ?>
		]
		

    }]
});




 Highcharts.chart('chartviirs', {
    chart: {
        type: 'column'
    },
    title: {
        text: ''
    },
    subtitle: {
        text: ''
    },
    xAxis: {
        categories: [
		<?php $result = pg_query($db, "SELECT pv_tn,count(*) as sum_hot
FROM npp_viirsgeo 
where acq_date = '$end' 
group by pv_tn
order by sum_hot DESC limit 10;");
				while ($arr = pg_fetch_array($result))
										
										{ ?>	
	
            '<?php echo $arr[pv_tn]; ?>',
										<?php } ?>
        ],
        crosshair: true
    },
    yAxis: {
        min: 0,
        title: {
            text: 'จำนวนจุดความร้อน (จุด)'
        }
    },
    tooltip: {
        headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
        pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
            '<td style="padding:0"><b>{point.y:.0f} จุด</b></td></tr>',
        footerFormat: '</table>',
        shared: true,
        useHTML: true
    },
    plotOptions: {
        column: {
            pointPadding: 0.2,
            borderWidth: 0
        }
    },
    series: [{
		
        name: 'จำนวนจุดความร้อนรายวัน',
        data: [ 
			<?php $result = pg_query($db, "SELECT pv_tn,count(*) as sum_hot
FROM npp_viirsgeo 
where acq_date = '$end' 
group by pv_tn
order by sum_hot DESC limit 10;");
				while ($arr = pg_fetch_array($result))
										
										{ ?>
		<?php echo $arr[sum_hot]; ?>,
		<?php } ?>
		]
		

    }]
});





Highcharts.chart('MODIS', {
    chart: {
        type: 'line',
        spacingBottom: 30
    },
    title: {
        text: ''
    },
    subtitle: {
        text: '',
        floating: true,
        align: 'right',
        verticalAlign: 'bottom',
        y: 15
    },
    legend: {
        layout: 'vertical',
        align: 'left',
        verticalAlign: 'top',
        x: 150,
        y: 100,
        floating: true,
        borderWidth: 1,
        backgroundColor: (Highcharts.theme && Highcharts.theme.legendBackgroundColor) || '#FFFFFF'
    },
    xAxis: {
        categories: [   
		<?php $result = pg_query($db, "with cte as (
SELECT acq_date,time,count(*) as sumpoint 
FROM modisgeo 
where acq_date = '$end' 
group by acq_date,time
order by acq_date asc
 )
SELECT acq_date,time,sumpoint,sum(sumpoint) over (order by acq_date) 
from cte
order by time asc;");
				while ($arr = pg_fetch_array($result))
										
										{ ?>
	'<?php echo $arr[time]; ?>',
	<?php } ?>
		]
    },
    yAxis: {
        title: {
            text: 'จำนวนจุดความร้อนรายวัน'
        },
        labels: {
            formatter: function () {
                return this.value;
            }
        }
    },
    tooltip: {
        formatter: function () {
            return '<b>' + this.series.name + '</b><br/>' +
                this.x + ': ' + this.y + ' จุด';
        }
    },
    plotOptions: {
        area: {
            fillOpacity: 0.5
        }
    },
    credits: {
        enabled: false
    },
    series: [{
        name: 'จำนวนจุดความร้อนรายวัน',
        data: [<?php $result = pg_query($db, "with cte as (
SELECT acq_date,time,count(*) as sumpoint 
FROM modisgeo 
where acq_date = '$end' 
group by acq_date,time
order by acq_date asc
 )
SELECT acq_date,time,sumpoint,sum(sumpoint) over (order by acq_date) 
from cte
order by time asc;");
				while ($arr = pg_fetch_array($result))
										
										{ ?>
	<?php echo $arr[sumpoint]; ?>,
	<?php } ?>]
    }]
});






Highcharts.chart('VIIRS', {
    chart: {
        type: 'line',
        spacingBottom: 30
    },
    title: {
        text: ''
    },
    subtitle: {
        text: '',
        floating: true,
        align: 'right',
        verticalAlign: 'bottom',
        y: 15
    },
    legend: {
        layout: 'vertical',
        align: 'left',
        verticalAlign: 'top',
        x: 150,
        y: 100,
        floating: true,
        borderWidth: 1,
        backgroundColor: (Highcharts.theme && Highcharts.theme.legendBackgroundColor) || '#FFFFFF'
    },
    xAxis: {
        categories: [   
		<?php $result = pg_query($db, "with cte as (
SELECT acq_date,time,count(*) as sumpoint 
FROM npp_viirsgeo 
where acq_date = '$end' 
group by acq_date,time
order by acq_date asc
 )
SELECT acq_date,time,sumpoint,sum(sumpoint) over (order by acq_date) 
from cte
order by time asc;");
				while ($arr = pg_fetch_array($result))
										
										{ ?>
	'<?php echo $arr[time]; ?>',
	<?php } ?>
		]
    },
    yAxis: {
        title: {
            text: 'จำนวนจุดความร้อนรายวัน'
        },
        labels: {
            formatter: function () {
                return this.value;
            }
        }
    },
    tooltip: {
        formatter: function () {
            return '<b>' + this.series.name + '</b><br/>' +
                this.x + ': ' + this.y + ' จุด';
        }
    },
    plotOptions: {
        area: {
            fillOpacity: 0.5
        }
    },
    credits: {
        enabled: false
    },
    series: [{
        name: 'จำนวนจุดความร้อนรายวัน',
        data: [<?php $result = pg_query($db, "with cte as (
SELECT acq_date,time,count(*) as sumpoint 
FROM npp_viirsgeo 
where acq_date = '$end' 
group by acq_date,time
order by acq_date asc
 )
SELECT acq_date,time,sumpoint,sum(sumpoint) over (order by acq_date) 
from cte
order by time asc;");
				while ($arr = pg_fetch_array($result))
										
										{ ?>
	<?php echo $arr[sumpoint]; ?>,
	<?php } ?>]
    }]
});

 </script>
</body>
</html>