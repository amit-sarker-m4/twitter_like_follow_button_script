<?php
include("session.php");
include("db.php");

?>

<html>
<head>

	<script type="text/javascript" src="jquery.min.js"></script>
	<script type="text/javascript" src="follow.js"></script>

	<link rel="stylesheet" type="text/css" href="wtfdiary.css" media="screen" />
	<link rel="stylesheet" href="bootstrap.css">

	<title>
	Twitter Like Follow Button | www.amit.com
	</title>
</head>
<body>
<h2>Twitter Like Follow Button (Php, jquery, Ajax)</h2>


	<?php
	$result=mysql_query("SELECT * from users");
	while($row=mysql_fetch_row($result))
	{
		$userid=$row[0];
	?>

	<div class="box">
	<div class="picture"><img src="<?php echo $row[2];?>"></div>
		<div class="user_row">

			<div class="follow_box">
				<?php

					$follow_check="select * from follow_user WHERE uid_fk='$uid' and user_id='$userid' ";
					$user_sql=mysql_query($follow_check);
					$count=mysql_num_rows($user_sql);
					if($count==0)
					{
						echo "<div id='follow$userid'><a href='' class='follow' id='$userid'><span class='btn' style='width:70px;'><b> Follow </b></span></a></div>";
						echo"<div id='remove$userid' style='display:none'><a href='#' class='remove' id='$userid'><span class='btn btn-info' style='width:70px;'><b> Following </b></span></a></div>";
					}
					else
					{
						echo "<div id='follow$userid' style='display:none'><a href='' class='follow' id='$userid'><span class='btn' style='width:70px;'><b> Follow </b></span></a></div>";
						echo"<div id='remove$userid'><a href='#' class='remove' id='$userid'><span class='btn btn-info' style='width:70px;'><b> Following </b></span></a></div>";
					}
				?>
			</div>
			<div><b><?php echo $row[1];?></b></div>

		</div>
	</div>


	<?php
	}

	?>


</body>

</html>