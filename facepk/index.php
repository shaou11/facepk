

<?php
	session_start();
	require "connect_database.php";


	if(!isset($_SESSION['x']))

		$_SESSION['x']=1;	  

	if(!isset($_SESSION['y']))

		$_SESSION['y']=12;



	$xx = $_SESSION['x']; 
	$yy = $_SESSION['y']; 
	$query_x = "select address from PET where id = $xx";
	$query_y = "select address from PET where id = $yy";

	$resulet_x = mysql_query("$query_x");
	$row_x = mysql_fetch_array($resulet_x);
	$resulet_y = mysql_query("$query_y");
	$row_y = mysql_fetch_array($resulet_y);

// 传送地址
//			$_SESSION['a'] = $row_x['address'];
//			$_SESSION['b'] = $row_y['address'];			
//
      
?>
<html>
      <head>
      
            <title> 萌宠大PK </title>
            <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
            <style type="text/css">
                   body {background:black}
                   h1 {color:white; font-size:50; text-align:center; position:absolute; left:50%; margin-left: -90px; top:10px;}
                   h2  {position:absolute; left:5%; top:150px;}
                   h3  {position:absolute; right:5%; margin-right: -15px; top:150px;}
                   h4  {color:white; text-align:center;}
                   h5  {color:white; font-style:italic; font-size:23; position:absolute; right:10%; margin-left: -90px; top:20px;}
                   p {color:red; font-size:99; line-hight; position:absolute; left:47%;  top:30%;}
            </style>

            <body>
            		<a href="index.php"> <h1> 萌宠大PK </h1> </a>
            		<br/> <br/><br/> <br/>
                  	<h4> 点击此处回到首页 </h4>        <h5> <a href="rank.php" target="_blank"> <u>萌宠排行榜</u> </a> </h5>

                  	 
                  	<h4> 说明：点击你想要PK掉的宠物，进入下一轮PK </h4>        		
            <p></p>
            
<br/>  
<h2>
		<?php
			echo "<a href='left.php'> <img src='{$row_x['address']}' width = '500' height='400'> </a>";
		?>
</h2>

<h3>
		<?php
			echo "<a href='right.php'> <img src='{$row_y['address']}' width = '500' height='400'> </a>";
		?>
</h3>              
            <p>      VS       </p>
            <p>         
           </p>

      </body>
            </body>
     

      </head>
</html>
