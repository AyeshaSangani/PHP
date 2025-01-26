<?php


$eng = $_GET['eng'];
$phy = $_GET['phy'];
$chem = $_GET['chem'];
  

if ($eng >=98) {
    $msg = 'Max Value 98';

    }  else {
        echo 'true';
}


?>




<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>


    <div class="container mt-5 p-5">

        <div class="card p-5">

            <h1>Marks Calculate</h1>

            <form action="#" method="get">

                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">English</label>
                    <input type="number" name="eng" class="form-control" 
                    id="exampleFormControlInput1" placeholder="Enter English Marks">
                    <span class="text-danger"> <?php echo $msg ?></span>

                </div>

                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Physics</label>
                    <input type="number" name="phy" class="form-control" 
                    id="exampleFormControlInput1" placeholder="Enter Physics Marks">
                    <span class="text-danger"> <?php echo $msg ?></span>
                </div>

                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">chemistry</label>
                    <input type="number" name="chem" class="form-control" 
                    id="exampleFormControlInput1" placeholder="Enter chemistry Marks">
                    <span class="text-danger"> <?php echo $msg ?></span>
                </div>
                <button class="btn btn-primary" > Submit </button>

            </form>



        </div>

    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>