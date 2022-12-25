<html>
    <head>
        <title>PHP Simple Calculator</title>
        <link rel="stylesheet" href="./style.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
         <body>

        <?php 
        
       
               if(isset($_GET["operation"])){
                $number1 = $_GET['number1'];
                $number2 = $_GET['number2'];
                $sign = $_GET['operation'];

                if($sign === "add"){
                   $results =  $number1 + $number2;
             
                }
                else if($sign === "divide"){
                    $results =  $number1 - $number2;
 
                }
                else if($sign === "multiply"){
                    $results =  $number1 * $number2;
         
             
                }
                else if($sign === "division"){
                    $results =  $number1 / $number2;
           
             
                }
               }
          
        ?>

            <h3>Simple Calculator</h3>
            <form method="GET" action  = "./index.php">
                 <div class = "form-group">
                      <label for = "number1">Enter first Number</label>
                      <input class = "form-control" value = "<?=$number1?>"  type = "number" name = "number1" placeholder = "enter first number">
                 </div>

                 <div class = "form-group">
                      <label for = "number2">Enter Second Number</label>
                      <input class = "form-control" value = "<?=$number2?>"   type = "number" name = "number2" placeholder = "enter second number">
                 </div>

                 <div class = "form-group">
                      <label>Total Results</label>
                      <input type = "text" value = "<?= $results ?>">
                 </div>

                 <div class = "form-group">
                      <button name = "operation" class = "form-control btn btn-primary my-2 rounded" value = "add">Add</button>
                      <button name = "operation" class = "form-control btn btn-primary my-2 rounded" value = "divide">Divide</button>
                      <button name = "operation" class = "form-control btn btn-primary my-2 rounded" value = "multiply">Multiply</button>
                      <button name = "operation" class = "form-control btn btn-primary my-2 rounded" value = "division">Division</button>
                 </div>
            </form>
              
         </body>
    </head>
</html>
