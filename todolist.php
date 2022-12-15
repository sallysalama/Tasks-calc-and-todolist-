<?php
session_start();
?>
<html> 
  <h>To Do List</h> <br><br>
<body>
<?php 
$task = array();
   if(isset($_POST['submit']))
    {
        if(!isset($_SESSION['task']))
          {
            $_SESSION['task'] = array();
           }
           
           if (isset($_POST)) 
           {
             $_SESSION['task'][] = $_POST['task']; 
           }
     //  $_SESSION[$_POST['task']]= array();
        foreach($_SESSION['task'] as $key=>$value) 
        {
         echo "task no ". $key . "and value is ".$value;
         echo '</br>';
        }
       // print_r ($_POST['task']);

    }
    //session_destroy();
?>

<form  action="todolist.php" method="post">
task: <input type="text" name="task"><br><br>

<input type="submit" name="submit"><br><br>

</form>

</body>
</html>
