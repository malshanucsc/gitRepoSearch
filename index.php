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
 
            <form class="navbar-form navbar-search" role="search">
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
                        <input type="text" id=search_input class="form-control">

                        <button class="searchbutton" onclick="search()">GO
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
