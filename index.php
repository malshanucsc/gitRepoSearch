<?php
if (isset($_POST['keyword'])) {
    $location=$_POST['keyword'];
    $map_url='http://api.github.com/search/repositories?q=login&language=php&sort=stars&order=desc';
    //'https://maps.googleapis.com/maps/api/geocode/json?address='.urlencode($location);
    $maps_json=file_get_contents($map_url);
    $maps_array=json_decode($maps_json,true);
echo "<script>alert('asasd')</alert>";
//echo "$maps_array";
   // $latitude=$maps_array['results'][0]['geometry']['location']['lat'];
   // $longitude=$maps_array['results'][0]['geometry']['location']['lat'];

    //$insta_url='https://api.instagram.com/v1/media/search?lat='.$latitude.'&lng='.$longitude.'&client_id=80af76d6cc464409be091cc993a7e6ea';

       // $insta_json=file_get_contents($insta_url);
       // $insta_array=json_decode($insta_json,true);

}



?>



<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/searchRepo.css">
	<title></title>
</head>
<body>

<div id=searchbox>
<div class="container">
	<div class="row">
		
 <nav class="navbar navbar-default">
        <div class="nav nav-justified navbar-nav">
 
            <form class="navbar-form navbar-search" role="search" method="post" action="">
                <div class="input-group">
                
                    <div class="dropdown">
  <button class="dropbtn searchbutton">Search By</button>
  <div class="dropdown-content">
    <a href="#">Repository</a>
    <a href="#">User</a>
    <a href="#">Link 3</a>
  </div>
</div>
        
                    
                
                    <div class="input-group-btn">
                        <input type="text" id=search_input name="keyword" class="form-control">

                        <button type="submit" class="searchbutton" >GO
                        </button>
                         
                         
                    </div>
                </div>  
            </form>   
         
        </div>
    </nav>
	</div>
</div>
</div>
<div id=resultbox>
	
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<?php
//search1();

?>

<script type="text/javascript" src="js/searchRepo.js"></script>
<script src="js/umd/popper.min.js" type="text/javascript"></script>
<script type="text/javascript" src="css/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>
