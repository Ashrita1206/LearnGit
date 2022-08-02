


<?php
/**Using HTML and PHP develop a calculator application .Implement GET/POST/REQUEST and 
user defined function to achieve this functionality.The html form should contain two text boxes for accepting two numbers and one 
one text box to display result of calculation.Also provide one button for + (Addition),
one for -(substraction) amd one for multiplication and one for division.On click of each button 
display respective function should be called and result of the calculation should be displayed in result box
text box **/
error_reporting(0);
?>
<!DOCTYPE html>
<html>
<head>
<title>Calculator</title>
</head>
<body>
<form  action="<?php $_PHP_SELF?>" method="post">
NUM1   : <input type="number" name="num1" ><br> <br>
NUM2   : <input type="number" name="num2" ><br><br>

<Input type="submit"  name="add" value="Add">
<Input type="submit" value="Subtract" name="sub">
<Input type="submit" value="Multiply" name="mul">
<Input type="submit" value="Divide" name="div"><br>
Result : 

</form>
<?php
if(isset($_POST['add']))
{
	$num1=$_POST['num1'];
	$num2=$_POST['num2'];
	$sum=$num1+ $num2;
	echo $sum;	
}
elseif(isset($_POST['sub']))
{
	$num1=$_POST['num1'];
	$num2=$_POST['num2'];
	$subs=$num1 - $num2;
	echo $subs;	
}
elseif(isset($_POST['mul']))
{
	$num1=$_POST['num1'];
	$num2=$_POST['num2'];
	$multi=$num1 * $num2;
	echo $multi;	
}
elseif(isset($_POST['div']))
{
	$num1=$_POST['num1'];
	$num2=$_POST['num2'];
	$divi=$num1 / $num2;
	echo $divi;	
}

	?>
</body>
</html>

<?php

 echo $_GET['add'];
 echo $_GET['sub'];
 echo $_GET['mul'];
 echo $_GET['div'];
?>