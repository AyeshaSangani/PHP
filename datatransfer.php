
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

<h1> Data Transfers </h1>

<form action="data.php" method="post">

<div class="mb-3">

<label for="exampleFormControlInput1" class="form-label">Username</label>

<input type="text" name="username" class="form-control"

id="exampleFormControlInput1" placeholder="Enter Username">

</div>

<div class="mb-3">

<label for="exampleFormControlInput1" class="form-label">Email</label>

<input type="email" name="email" class="form-control"

id="exampleFormControlInput1" placeholder="Enter Email">

</div>


</div>



<button class="btn btn-primary">Submit</button>

</form>

</div>
 
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>