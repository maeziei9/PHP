<?php

require_once 'dbcontroller.php';

$dbhandler = new DBController();

$isSuccess = false;

if(isset($_POST['submit'])) {

    $fname = $_POST['fname'];
    $mname = $_POST['mname'];
    $lname = $_POST['lname'];

    $fname = $dbhandler->verifyData($fname);
    $mname = $dbhandler->verifyData($mname);
    $lname = $dbhandler->verifyData($lname);

    $sql = "INSERT INTO persons
            (person_fname, person_mname, person_lname)
            VALUES
            ('$fname', '$mname', '$lname')";

    if($dbhandler->executeNonQueryIUP($sql)) {
        $isSuccess = true;
    }

}

?>

<!DOCTYPE html>
<html>

<head>

    <title>PHP Output 3</title>

    <style>

        body {
            font-family: Arial;
            margin: 30px;
        }

        h3 {
            font-size: 16px;
        }

    </style>

</head>

<body>

<?php if($isSuccess): ?>

    <h3>Record Successfully Inserted to Database</h3>

<?php endif; ?>

<a href="index.php">Back to Main Form</a>

</body>

</html>