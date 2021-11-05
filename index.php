<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Student grade system using switch statement in PHP</title>
</head>
<body>
<form align="center" action="index.php"  method="POST">
	<h1>Student Grade System using switch statement </h1>
	<label>Enter stuent grade</label>
	<input type="text" name="sgrade"><br><br>
<input type="submit" name="submit">	<br>
</form>
<?php
$sgrade=$_POST['sgrade'];
if(isset($_POST['submit']))
{

switch ($sgrade) {
	case 'O':
		echo "Student grade point is : 10";
		break;
	case 'A+':
		echo "Student grade point is : 9";
		break;
		case 'A':
		echo "Student grade point is : 8";
		break;
			case 'B+':
		echo "Student grade point is : 7";
		break;
			case 'B':
		echo "Student grade point is : 6";
		break;
			case 'RA':
		echo "Student grade point is : 0";
		break;
	default:
		echo "Student grade invalid";
		break;
}
}
?>
</body>
</html>
