 <?php
	$link= basename($_SERVER['PHP_SELF']);
	$active_home='';
	$active_church='';
	$active_hall='';
	$active_school='';
	$active_contacts='';

	
	
	switch($link){
		case'index.php':
			$active_home="active";
			break;
		case'church.php':
			$active_church="active";
			break;
		case'hall.php':
			$active_hall="active";
			break;
		case'school.php':
			$active_school="active";
			break;
		case'contacts.php':
			$active_contacts="active";
			break;	
		
		
		
	}
	
?>

		<nav class="navbar navbar-inverse navbar-fixed-top" style="margin-bottom:0px;border-style:none;border-bottom-style:solid;border-bottom-width:0.5px;border-bottom-color:black;">
      <div class="container" style="text-align:center;">
        <div class="navbar-header" style="">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href=""></a>
        </div>
        <div id="navbar" class="collapse navbar-collapse" style="margin-bottom:0px;">
          <ul class="nav navbar-nav">
			<li class=<?php echo $active_home?> ><a href="index.php" >&nbsp <span class="glyphicon glyphicon-home" aria-hidden="true"></span>&nbsp HOME</a></li>
            <li class=<?php echo $active_church?> ><a href="church.php"> &nbsp CHURCH </a></li>
            <li class=<?php echo $active_hall?> ><a href="hall.php" > &nbsp HALL</a></li>
            <li class=<?php echo $active_school?> ><a href="school.php" > &nbsp &nbsp <i class="fa fa-graduation-cap" aria-hidden="true"></i> &nbsp SCHOOL</a></li>
			<li class=<?php echo $active_contacts?> ><a href="contacts.php" > &nbsp &nbsp <span class="glyphicon glyphicon-phone" aria-hidden="true"></span>&nbsp CONTACTS</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
	

	
	<div class="page-header" style="background-color:#0577bc;color:white;margin-top:6px;border-topstyle=solid;border-width:0.5px;border-color:black;margin-bottom:0px;">
	<br>

		<div class="col-lg-4" style="text-align:right;"><img src="images/logo6small.png" width="220px"></div>
		<div class="col-lg-8" style="text-align: left;"><h1 style="text-align: left;">CHRIST THE KING <br><small style="color:white;">Tabata parish Archdioces of Dar es salaam Tanzania</small></h1></div>
	
	  &nbsp
	<!--  <h1 style="text-align: center;"> <img src="images/logo6small.png" width="150px"> &nbsp &nbsp &nbsp <span>CHRIST THE KING <br><small style="color:white;">Tabata parish Archdioces of Dar es salaam Tanzania</small></span></h1>-->
	</div>