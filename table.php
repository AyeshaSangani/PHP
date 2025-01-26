<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Calculator</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
  

  <div class="container mt-4">

<div class="card p-3">
    <form action="#" method="get">
        <h3><u>Calculator:</u></h3>

        <div class="items m-3">
        <label for="exampleFormControlInput1" class="form-label">Initial Value</label>
            <input type="number" name="initialvalue" class="form-control" placeholder="Enter initial value" >
        </div>

        <div class="items m-3">
        <label for="exampleFormControlInput1" class="form-label">Start Value</label>
            <input type="number" name="startingvalue" class="form-control" placeholder="Enter starting value" >
        </div>

        <div class="items m-3">
        <label for="exampleFormControlInput1" class="form-label">Loop Range</label>
            <input type="number" name="looprange" class="form-control" placeholder="Enter loop range" >
        </div>


        <button class="btn btn-dark">SUBMIT</button>
    </form>
    
    <?php


$initialvalue = $_GET['initialvalue'];
$startingvalue =  $_GET['startingvalue'];
$looprange =  $_GET['looprange'];



for($i = $initialvalue; $i <=$looprange; $i++) {

  echo "<br>";
  echo "$startingvalue x $i = " . $startingvalue * $i;

 }; 


?>
</div>

</div>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>