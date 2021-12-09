<html>
<head>
	<link href="style.css" rel="stylesheet" type="text/css"/>
</head>
<body>

<?php
$shipping = $_POST["ups"];
$ship=0;
$total=0;

$username = $_POST["Username"];
$password = $_POST["Password"];

$leads = $_POST["leads"];
$papers = $_POST["papers"];
$folders = $_POST["folders"];

$l=2*$leads;
$p=1*$papers;
$f=1*$folders;

	if($shipping=="Free")
	{
		$ship=0;
	}
	if($shipping=="Three-day")
	{
		$ship=5;
	}
	if($shipping=="Express")
	{
		$ship=50;
	}
	$total=$l+$p+$f+$ship;
	echo "<h2>Your Receipt</h2>";

	echo "<p>Welcome ".$username."</p>";
	echo "<p>Password: ".$password."</p>";

echo "<table border=\"3\">";
      $cols = 4;
      $rows = 6;
	for ($b=1; $b<=$rows; $b++)
        {
            echo('<tr>');	
            	for($c=1; $c<=$cols; $c++)
		{
			if ($c==1 && $b==1)
			{
				echo('<td><center>'.' '.'</td>');
			}
			if ($c==1 && $b==2)
			{
				echo('<td><center>'.'Pack of Pencil Lead'.'</td>');
			}
			if ($c==1 && $b==3)
			{
				echo('<td><center>'.'Pack of Paper'.'</td>');
			}
			if ($c==1 && $b==4)
			{
				echo('<td><center>'.'Folders'.'</td>');
			}
			if ($c==1 && $b==5)
			{
				echo('<td><center>'.'Shipping'.'</td>');
			}
			if ($c==1 && $b==6)
			{
				echo('<td colspan="3"><center>'.'Total Cost'.'</td>');
			}

			if ($c==2 && $b==1)
			{
				echo('<td><center>'.'Quantity'.'</td>');
			}
			if ($c==2 && $b==2)
			{
				echo('<td><center>'.$leads.'</td>');
			}
			if ($c==2 && $b==3)
			{
				echo('<td><center>'.$papers.'</td>');
			}	
			if ($c==2 && $b==4)
			{
				echo('<td><center>'.$folders.'</td>');
			}
			if ($c==2 && $b==5)
			{
				echo('<td colspan="2"><center>'.$shipping.'</td>');
			}

			if ($c==3 && $b==1)
			{
				echo('<td><center>'.'Cost Per Item'.'</td>');
			}
			if ($c==3 && $b==2)
			{
				echo('<td><center>'.'$2.00'.'</td>');
			}
			if ($c==3 && $b==3)
			{
				echo('<td><center>'.'$1.00'.'</td>');
			}	
			if ($c==3 && $b==4)
			{
				echo('<td><center>'.'$1.00'.'</td>');
			}

			if ($c==4 && $b==1)
			{
				echo('<td><center>'.'Sub Total'.'</td>');
			}
			if ($c==4 && $b==2)
			{
				echo('<td><center>'.'$'.$l.'</td>');
			}
			if ($c==4 && $b==3)
			{
				echo('<td><center>'.'$'.$p.'</td>');
			}
			if ($c==4 && $b==4)
			{
				echo('<td><center>'.'$'.$f.'</td>');
			}
			if ($c==4 && $b==5)
			{
				echo('<td><center>'.'$'.$ship.'</td>');
			}
			if ($c==4 && $b==6)
			{
				echo('<td><center>'.'$'.$total.'</td>');
			}


		}
	    echo('</tr></center>');
        }
        echo("</table>");
?>
</body>
</html>