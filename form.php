<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>FeedBack Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>



        <form action="database.php" method="post">
            <h2>FeedBack Form</h2>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Username </label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter Your Username" required
                    name="username">
            </div>

            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Email </label>
                <input type="email" class="form-control" id="exampleFormControlInput1"
                    placeholder="Enter name@example.com" name="email" required>
            </div>

            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Number </label>
                <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="Enter Your Number" required
                    name="number">
            </div>

            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Enter Your Feedback</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="feedback" required></textarea>
            </div>

            <button class="btn btn-outline-warning">Submit</button>
        </form>










    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>
