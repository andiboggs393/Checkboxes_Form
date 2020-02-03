<?php

if(isset($_POST['formWheelchair']) && 
   $_POST['formWheelchair'] == 'Wheelchair') 
{
    echo "Need wheelchair access.";
} 
else
{
    echo "Do not Need wheelchair access.";
}	 

?>

<br>Welcome <?php echo $_POST["name"]; ?><br>
Your email address is: <?php echo $_POST["email"]; ?><br>
Your favorite subject is: <?php echo $_POST["formWheelchair"]; ?> <br>