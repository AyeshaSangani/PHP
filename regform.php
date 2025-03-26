
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registeration Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
   

  <div class="card" style="width:16rem;">

<ul class="list-group list-group-Flush">

 <li class="list-group-Item">  <?php echo $id?></li>

 <li class="list-group-Item">  <?php echo $name?></li>

 <li class="list-group-Item">  <?php echo $email?></li>

 <li class="list-group-Item">  <?php echo $address?></li>

 <li class="list-group-Item">  <?php echo $phone?></li>
  
 <li class="list-group-Item">  <?php echo $work?></li>

</ul>

</div>

<div class="cotaniner mt-5 p-5">

<div class="card">

<form action="info.php" method="get"> 

<h1 style="text-align: center;">Registeration Form</h1>



</div>







<div class="mb-2 p-5">

<input type="text" name="name" class="form-control" id="name" placeholder="name">

</div>

<div class="mb-2 p-5">

<label for="exampleFormControlInput1" class="form-label">Email</label>

<input type="email" name="email" class="form-control" id="email" placeholder="name@example.com">

</div>

<div class="mb-2 p-5">

<label for="exampleFormControlInput1" class="form-label">password</label>

<input type="password" name="password" class="form-control" id="password" placeholder="password">

</div>

 <button class="btn btn-primary">Submit</button>



</form>

</div>

</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
