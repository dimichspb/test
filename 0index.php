<?
$path='inc/';
$curURL=(array_pop(explode("/",$_SERVER['REQUEST_URI'])));
include "$path/classGr.php";
$primo=new site;
header('Content-Type: text/html; charset=utf-8');		
$id=strtolower(trim(strip_tags($_GET['id'])));
switch ($id) {
	default: 
			$title=$primo->home()['title'];
			$header=$primo->home()['header'];
			$content=$primo->home()['startMenu'];
}
?>
<!doctype html>
<html>
 <head>
  <meta charset="utf-8">
  <title>Трёхколоночный макет</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/dopstyle.css" rel="stylesheet">
 </head>
 <body>

<div class='container'>
	<div class="text-center">
		 <div class="row ">
			<div class="col-md-12 top">			
			<h3>Photoshop</h3>							
			</div>
		</div>	
	</div>		
	<div class="text-center">
		 <div class="row ">
			<div class="col-md-4 top2">
			<h3>123</h3>		
			</div>
			<div class="col-md-4 top2">
			<h3>456</h3>		
			</div>
			<div class="col-md-4 top2">
			<h3>789</h3>		
			</div>
		</div>	
	</div>	
 
	<div class="row ">
	  <div class="col-sm-6 col-md-4 ">
		<div class="thumbnail space">
		  <!--<img src="..." alt="...">-->
		  <div class="caption">
			
			<h3>Photoshop</h3> 	
			
			</div>
		</div>
	  </div>
	  
	  <div class="col-sm-6 col-md-4 ">
		<div class="thumbnail space">
		  <!--<img src="..." alt="...">-->
		  <div class="caption">
		  
			<h3>Photoshop</h3>
				
			</div>
		</div>
	  </div>
	  
	  <div class="col-sm-6 col-md-4 ">
		<div class="thumbnail space">
		  <!--<img src="..." alt="...">-->
		  <div class="caption">
			
			<h3>Photoshop</h3>
			 	
		   </div>
		</div>
	  </div>
	  <div class="col-sm-6 col-md-4">
		<div class="thumbnail space">
		  <!--<img src="..." alt="...">-->
		  <div class="caption">
			
			<h3>Photoshop</h3>
			 
			</div>
		</div>
	  </div>
	  
	  <div class="col-sm-6 col-md-4">
		<div class="thumbnail space">
		  <!--<img src="..." alt="...">-->
		  <div class="caption">
			
			<h3>Photoshop</h3>
			 
			</div>
		</div>
	  </div>
	  
	  <div class="col-sm-6 col-md-4">
		<div class="thumbnail space">
		  <!--<img src="..." alt="...">-->
		  <div class="caption">
			
			<h3>Photoshop</h3>
			 
		   </div>
		</div>
	  </div>
	</div>
</div>

  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
 </body>
</html>