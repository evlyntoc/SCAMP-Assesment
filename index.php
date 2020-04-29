 
<?php
// PHP code to get the Fibonacci series  Recursive function for fibonacci series. 
function Fibonacci($number){ 
      
 
    if ($number == 0) 
        return 0;     
    else if ($number == 1) 
        return 1;     
      
    else
        return (Fibonacci($number-1) +  
                Fibonacci($number-2)); 
} 
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>PHP Fibonacci</title>
</head>
 
<body>
<form action="" method="post">
	Number:<input type="text" name="number" value="<?=$_POST['number']??''?>"><br>
	<input type="submit" name="print" value="Print Fibonacci Numbers">
</form>	
<?php   
 
if(isset($_POST["print"]))
{
	$number = $_POST["number"]; 
	for ($counter = 0; $counter < $number; $counter++){   
		echo '<strong>'.Fibonacci($counter).'</strong> '; 
	} 	
}
?>
</body>
</html>