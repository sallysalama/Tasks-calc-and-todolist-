
<html>
<h>Calculate</h> <br><br>  
<body>
<?php 
$calculate=$val1=$val2=0;
$num1Err=$num2Err=$typ1Err=$typ2Err="";
   if(isset($_GET['submit']))
    {
        if (empty($_GET["num1"]))
         {
            $num1Err = "num1 is required";
          }
        elseif (!is_numeric($_GET["num1"]))
         {
            $typ1Err = "number only";
           //echo "numberonly";
         } 
       
        elseif (empty($_GET["num2"]))
           {
            $num2Err = "num2 is required";
           } 
          elseif (!is_numeric($_GET["num2"])) {
            $typ2Err = "number only";
           //echo "numberonly";
          } 
         else 
         {
        
            $val1=$_GET["num1"];
            $val2=$_GET["num2"];
         }
      //echo $val1;
      
      //echo $val2; 
      
        $calculate=($val1*$val2)/100;
    
   // echo "$calculate";
    }
?>
<p><span class="error"></span></p>
<form  action="calc.php" method="get">
Num1: <input type="text" name="num1">
<span class="error">* <?php echo $num1Err;?></span>
<span class="error">* <?php echo $typ1Err;?></span><br><br>
Num2: <input type="text" name="num2">
<span class="error">* <?php echo $num2Err;?></span>
<span class="error">* <?php echo $typ1Err;?></span><br><br>
<input type="submit" name="submit"><br><br>
output:<input type="text" name= "output" value="<?php echo $calculate; ?>">

</form>

</body>
</html>





