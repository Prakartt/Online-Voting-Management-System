<?php include('adminnav.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>
		<link rel="stylesheet" type="text/css" href="style.css">
		
	</title>
</head>
<body>
	<?php 
	 $db =mysqli_connect("localhost","root","","ovs");
    mysqli_select_db($db,'ovs');
    $query="SELECT * FROM count ";
    $v=mysqli_query($db,$query);
    
    $total=0;
    $i=0;
    $variable=array();

    while($vt =mysqli_fetch_array($v)){
    	    	$variable[$i]=$vt["votecount"];
    	$total=$total+$variable[$i];
    	$i=$i+1;

    }

    $v1=($variable[0]/$total)*100;
    $v2=($variable[1]/$total)*100;
    $v3=($variable[2]/$total)*100;
    $v4=($variable[3]/$total)*100;
    $v5=($variable[4]/$total)*100;

    

	 ?>

	<div class="red" style="width:<?php echo $v1; ?>% ; height: 100px;background:red;">
		
	</div>
	<div id="blue" style="width:<?php echo $v2; ?>% ; height: 100px;background:blue;">
		
	</div>
	<div id="green" style="width:<?php echo $v3; ?>% ; height: 100px;background:green;">
		
	</div>
	<div id="yellow" style="width:<?php echo $v4; ?>% ; height: 100px;background:yellow;">
		
	</div>
	<div id="orange" style="width:<?php echo $v5; ?>% ; height: 100px;background:orange;">
		
	</div>


</body>
</html>