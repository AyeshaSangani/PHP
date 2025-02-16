 

<?php

include 'connection.php';

$title = "";
$msg = "";
$titleErr = "";
$msgErr = "";
$successMsg = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = trim($_POST['title']);
    $msg = trim($_POST['msg']);

    if (empty($title)) {
        $titleErr = "Title cannot be empty!";
    }

    if (empty($msg)) {
        $msgErr = "Message cannot be empty!";
    }

    if (empty($titleErr) && empty($msgErr)) {
        $sql = "INSERT INTO keepnotes.stickynotes (title, msg) VALUES ('$title', '$msg')";
        $result = mysqli_query($connection, $sql);

        if ($result) {
            $successMsg = "Data added successfully!";
            // Reset fields after successful submission
            $title = "";
            $msg = "";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($connection);
        }
    }

    mysqli_close($connection);
}
?>


<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>KeepNotes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./style.css">
</head>

<body>

    <div class="topbar p-3 text-center text-white" style="background-color: black; border-top:5px solid rgb(25, 85, 175);">
        <h3><b><u>CRUD APP using PHP</u></b></h3>
    </div>

    <div class="container">
        <div class="card p-3 mt-5">
            <h2 class="text-uppercase"><b><u>Keep Notes App</u></b></h2>

            <?php if (!empty($successMsg)) : ?>
                <div class="alert alert-success"><?php echo $successMsg; ?></div>
            <?php endif; ?>

            <form method="post">

                <div class="mb-3">
                    <label for="title" class="form-label">Enter Title</label>
                    <input type="text" class="form-control" placeholder="Enter Your Title" name="title" value="<?php echo htmlspecialchars($title); ?>">
                    <small class="text-danger"><?php echo $titleErr; ?></small>
                </div>

                <div class="mb-3">
                    <label for="message" class="form-label">Enter Your Message</label>
                    <textarea class="form-control" name="msg" placeholder="Enter Your Message" rows="3"><?php echo htmlspecialchars($msg); ?></textarea>
                    <small class="text-danger"><?php echo $msgErr; ?></small>
                </div>

                <button class="btn btn-outline-dark" type="submit" name="submit"><b>Save</b></button>

            </form>
        </div>
    </div>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</html>
