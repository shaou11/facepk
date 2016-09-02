<?php
      session_start();
      require "connect_database.php";

      if(isset($_SESSION['x']))                 //防止刷新后页面改变
      {
            $xx = $_SESSION['x'];
            $yy = $_SESSION['y'];
            $_SESSION['a'] = $xx;
            $_SESSION['b'] = $yy;               
      }
      else
      {
            $xx = $_SESSION['a'];
            $yy = $_SESSION['b'];            
      }

      $query_x = "select address from PET where id = $xx";
      $query_y = "select address from PET where id = $yy";

      $resulet_x = mysql_query("$query_x");
      $row_x = mysql_fetch_array($resulet_x);
      $resulet_y = mysql_query("$query_y");
      $row_y = mysql_fetch_array($resulet_y);


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

            <h4> 点击此处回到首页 </h4>       <h5> <a href="rank.php" target="_blank"> <u>萌宠排行榜</u> </a> </h5>
            
            <p>你最喜欢的萌宠就是它了 ^_^ ^_^</p>

<h2>
		<?php
			echo "<img src='{$row_y['address']}' width = '500' height='400'>";
      if(isset($_SESSION['x']))                 //防止刷新页面后一直增加
      {
            mysql_query("update pet set rank = (rank + 1) where id = $yy");               
      }
		?> 
</h2>

<h3>
<!-- 		<?php
			echo "<img src='{$row_y['address']}' width = '500' height='400'>";

		?> -->
</h3>              

            </body>
      </head>
</html>

<?php
unset($_SESSION['x']);
unset($_SESSION['y']);
?>