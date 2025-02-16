<?php

include 'connection.php';

?>



<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>KeepNotes-READ</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>


    <!-- ============ -->
    <div class="header p-3 text-center text-white" style="background-color: black; border-top:5px solid darkgoldenrod ;">
    <!-- <div class="topbar bg-dark text-center text-white p-3"> -->
        <h3><b><u>CRUD APP using PHP</u></b></h3>
    </div>

    <!-- ============ -->


    <div class="container">

        <div class="card p-3 mt-5">
            <h2 class="text-uppercase"><b><u>Keep Notes Display Data </u></b></h2>


            <table class="table">
         <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">TITLE</th>
                <th scope="col">MASSAGE</th>

            </tr>
         </thead>

         <tbody>
            <tr>
                <th scope="row">01</th>
                <td>abc</td>
                <td>xyz</td>
                <td>
                <a href="#" class="btn btn-info">Update</a>
                <a href="#" class="btn btn-danger">Delete</a>
                </td>
            </tr>
         </tbody>
         </table>

         <a href="./index.php" class="btn btn-outline-primary">Go to Add Data</a>

        </div>



    </div>



</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</html>