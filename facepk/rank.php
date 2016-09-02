<?php
      require "connect_database.php";
      $query_rank = "select address, rank from  pet order by rank DESC";
      $result = mysql_query("$query_rank");
      
?>
<html>
      <head>
      
            <title> 萌宠排行榜 </title>
            <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
            <style type="text/css">
                   body {background:black}
                   h1 {color:white; font-size:50; text-align:center; position:absolute; left:50%; margin-left: -150px; top:10px;}
                   h2  {color:white; position:absolute; left:30%; top:20%;}
                   h3  {position:absolute; right:5%; margin-right: -70px; top:150px;}
                   h4  {color:white; text-align:center; position:absolute; left:50%; margin-left: -150px; top:100px;}
                   p {color:white; font-size:99 ;line-hight; position:absolute; left:47%;  top:30%;}
            </style>

            <body>
            		<h1> 萌宠排行榜 </h1> </a>

                  	
                  	<h4> 说明：本排行榜是根据得分结果动态更新，每次PK掉其它所有萌宠可以得1分 </h4>        		
            <p></p>
            
                        <h2>  
                  <?php
                  for ($i=1; $i <= 3; $i++) 
                  {
                        $row = mysql_fetch_array($result);
                        echo "TOP".$i."<br>"."得分：";
                        echo $row[1]."<br>";
                        echo "<img src='{$row['address']}' width = '500' height='400'> </a>"."<br>"."<br>"."<br>";
                  }                        
                  ?>
                        </h2>


      </head>
</html>
