<?php
header('Cache-Control: no-cache');
header('Pragma: no-cache');
session_cache_limiter('private_no_expire'); // works
session_start();
date_default_timezone_set('Asia/Yerevan');
  if($_SESSION['user_id'] != ''){
  ?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <title>Air Tickets</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Angular js-->
  <!-- Include AngularJS library -->
  <script src="backend/lib/angular/angular.min.js"></script>
  <!-- Include controller -->
  <script src="backend/js/angular-script.js"></script>
  <!-- INclude Pagination -->
  <script src="backend/lib/angular/dirPagination.js"></script>
  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="../public/css/bootstrap-datetimepicker.min.css">
  <link href="../public/css/ticket.css" rel="stylesheet">
  <link rel="stylesheet" href="frontend/dataTables/css/buttons.dataTables.min.css" type="text/css"  />
  <link rel="stylesheet" href="frontend/dataTables/css/jquery.dataTables.min.css" type="text/css" />
  <link rel="stylesheet" href="frontend/dataTables/css/dataTables.bootstrap.min.css" type="text/css" />
  <link rel="stylesheet" href="frontend/dataTables/css/buttons.bootstrap.min.css" type="text/css" />
  <link rel="stylesheet" href="frontend/dataTables/css/bootstrap.min.css" type="text/css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="../public/js/moment-with-locales.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="../public/js/bootstrap-datetimepicker.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

  <link rel="stylesheet" href="frontend/dataTables/css/style.css" type="text/css" />
  
</head>
<body>
<!--Database connections-->
<?php include 'config.php'; ?>
<!--start navbar-->
<?php include 'frontend/navbar.php'; ?>
<!-- Helper Functions -->
<?php require_once 'backend/helpers/functions.php'; ?>
<!-- Helper DB Functions -->
<?php require_once 'backend/helpers/db_functions.php'; ?>
<!--end navbar-->
<!--start content-->
<div class="container-fluid content" ><br>
<?php    

    switch ($page) {
        case 'search':
            include('frontend/search.php');
            break;
        case 'agents':
            include('frontend/agents.php');
            break;
        case 'flights':
            include('frontend/flights.php');
            break;
        case 'history':
            include('frontend/history.php');
            break;
        case 'exchange_rate':
            include('frontend/exchange_rate.php');
            break;
        case 'reminder':
            include('frontend/reminder.php');
            break;
		case 'edit_flight':
            include('frontend/edit_flight.php');
            break;
		case 'available_options':
            include('frontend/search/available_options.php');
            break;
		case 'traveler_info':
            include('frontend/search/traveler_info.php');
            break;
        case 'flight_information':
            include('frontend/search/flight_info.php');
            break;
		case 'confirm':
            include('frontend/search/confirm.php');
            break;	
		case 'edit_agents':
            include('frontend/editAgent.php');
            break;
		case 'ticketing':
            include('frontend/ticketing.php');
            break;
    case 'seats_price':
            include('frontend/seats_price/search.php');
            break;

    case 'seats_price_page':
            include('frontend/seats_price/index.php');
            break;
    case 'seats_airplane':
            include('frontend/seats_price/airseats.php');
            break;
    case 'flights_archive_page':
            include('frontend/flights_archive.php');
            break;
    case 'flight_reports':
            include('frontend/flight_reports/flightreports.php');
            break;
        default :
            include('frontend/search.php');
            break;

    }
?>
</div>     
<!--end content-->
<!--footer-->
<footer class="container"><br>
        <p class="text-muted pull-right">© FESTA <?php echo date('Y');?>. All rights reserved</p>
</footer>
<!--ej@ postov poxelu hamar-->
<form action="#" id="pageForm" method="post" style="display:none">
    <input type="hidden" name="page" id="page" value="">
</form>
<!---->
<script src="../public/js/tickets.js"></script>
<!--<script src="https://use.fontawesome.com/bff293a9c0.js"></script>-->
<!-- BEGIN JIVOSITE CODE {literal} -->
<script type='text/javascript'>
(function(){ var widget_id = 'mcw9c1Uie4';var d=document;var w=window;function l(){
var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = '//code.jivosite.com/script/widget/'+widget_id; var ss = document.getElementsByTagName('script')[0]; ss.parentNode.insertBefore(s, ss);}if(d.readyState=='complete'){l();}else{if(w.attachEvent){w.attachEvent('onload',l);}else{w.addEventListener('load',l,false);}}})();</script>
<!-- {/literal} END JIVOSITE CODE -->
</body>
</html>
<?php
}else{
?>
<script type="text/javascript">
  window.location.href = "http://festatour.smarts.am/";
</script>
<?php } ?>



