<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h3>Chess Board using Nested For Loop</h3>
 
 <form action="chess.php" method="post">
 <label for="unit">units:</label><br>
 <input type="text" name= "unit">
 <button name="unit-submit">submit</button>

 
 </form>
     
          <?php
          if(isset($_POST['unit-submit'])){
            $x = $_POST['unit'];
            if($x){
        $result= electricBill($x);
        echo $result_str = "Your electric bill for:".$x. "units"." ". "is".$result; 
            }
        }
    
          function electricBill($x){
              if($x <= 50){
                  $bill = 3.5 * $x;
                  $bill; 
              }else if ($x>50 && $x<=150) {
                  $bill = 4 * $x;
                   $bill;
              }
              else if ($x>150 && $x<=250){
                $bill = 5.20 * $x;
                $bill;
              }
              else{
                $bill = 6.50 * $x;
                 $bill;
                  
              }
               return $bill;
              }
              
?>
</body>
</html>