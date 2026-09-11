<?php

require_once 'dbcontroller.php';

$dbhandler = new DBController();

if(isset($_GET["submit"])) {

    $where = array();

    $query = "SELECT * FROM students WHERE ";

    if($_GET["student_id"]) {
        $where[] = "student_id LIKE '{$_GET["student_id"]}%'";
    }

    if($_GET["student_fname"]) {
        $where[] = "student_fname LIKE '{$_GET["student_fname"]}%'";
    }

    if($_GET["student_mname"]) {
        $where[] = "student_mname LIKE '{$_GET["student_mname"]}%'";
    }

    if($_GET["student_lname"]) {
        $where[] = "student_lname LIKE '{$_GET["student_lname"]}%'";
    }

    if($_GET["student_gender"]) {
        $where[] = "student_gender LIKE '{$_GET["student_gender"]}%'";
    }

    if(!(count($where) === 0)) {

        $query .= implode(" AND ", $where);

        $query .= " ORDER BY student_lname";

        $result = $dbhandler->executeQuery($query);

        $where = array();

    } else {

        $query = "SELECT * FROM students ORDER BY student_lname";

        $result = $dbhandler->executeQuery($query);

    }

} else {

    $query = "SELECT * FROM students ORDER BY student_lname";

    $result = $dbhandler->executeQuery($query);

}

?>

<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>PHP Output 3</title>

    <link href="DataTables/datatables.min.css"
          rel="stylesheet"/>

    <?php include 'layout.php'; ?>

</head>

<body>

<!-- for registration -->
<h1>PHP Output 3</h1>

<p>
    This output connects to the database and allows the user to save records into it.
</p>


<form action="redirect.php" method="POST">

    <h2>Register Person</h2>

    <table class="register">

        <table>
            <tr>
                <td>First Name</td>
                <td>
                    <input type="text" class="form-control" name="fname" placeholder="Enter First Name" required />
                </td>
            </tr>
            <tr>
                <td>Middle Name</td>
                <td>
                    <input type="text" class="form-control" name="mname" placeholder="Enter Middle Name" required />
                </td>
            </tr>
            <tr>
                <td>Last Name</td>
                <td>
                    <input type="text" class="form-control"  name="lname" placeholder="Enter Last Name" required />
                </td>
            </tr>
            <tr>
                <td>Age</td>
                <td>
                    <input type="number" class="form-control" name="age" placeholder="Enter Age" required />
                </td>
            </tr>
            <tr>
                <td>Gender</td>
                <td>
                    <label for="gender" class="form-label" ></label>
                    <select class="form-select" class="form-control" name="gender" required>
                        <option value="M">Male    </option>
                        <option value="F">Female  </option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Email</td>
                <td>
                    <input type="email" class="form-control" name="email" placeholder="Enter Email" required />
                </td>
            </tr>
            <tr>
                <td>Address</td>
                <td>
                    <input type="text" class="form-control" name="address" placeholder="Enter Complete Address" required />
                </td>
            </tr>
            <tr>
                <td>Contact Number</td>
                <td>
                    <input type="tel" class="form-control"  name="contact_number" placeholder="Enter Contact Number" maxlength="11" pattern="[0-9]{11}"  required />
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" class="btn btn-primary" value="Submit Data">
                    <input type="reset" class="btn btn-danger" value="Cancel">
                </td>
            </tr>
        </table>
</form>


<!-- inputted date from the registration -->

<h2>List Student's Information</h2>

<p>
    This output connects to the database, retrieves data and allows user to
    filter and search records.
</p>


<form action="index.php" method="GET">

<table id="example">

    <thead>

        <tr>

            <th>Student Id</th>

            <th>First Name</th>

            <th>Middle Name</th>

            <th>Last Name</th>

            <th>Gender</th>

            <th>Action</th>

        </tr>


        <tr>

            <th>

                <input
                    type="text"
                    name="student_id"
                    value="<?php

                    echo isset($_GET['student_id'])
                        ? $_GET['student_id']
                        : "";

                    ?>">

            </th>


            <th>

                <input
                    type="text"
                    name="student_fname"
                    value="<?php

                    echo isset($_GET['student_fname'])
                        ? $_GET['student_fname']
                        : "";

                    ?>">

            </th>


            <th>

                <input
                    type="text"
                    name="student_mname"
                    value="<?php

                    echo isset($_GET['student_mname'])
                        ? $_GET['student_mname']
                        : "";

                    ?>">

            </th>


            <th>

                <input
                    type="text"
                    name="student_lname"
                    value="<?php

                    echo isset($_GET['student_lname'])
                        ? $_GET['student_lname']
                        : "";

                    ?>">

            </th>


            <th>

                <select
                    name="student_gender"
                    id="student_gender">

                    <option value="">
                        Select All
                    </option>

                    <option value="M"
                        <?php

                        echo isset($_GET['student_gender'])
                        ?
                        (($_GET['student_gender']) == "M"
                        ? "selected"
                        : "")
                        : "";

                        ?>>

                        Male

                    </option>

                    <option value="F"
                        <?php

                        echo isset($_GET['student_gender'])
                        ?
                        (($_GET['student_gender']) == "F"
                        ? "selected"
                        : "")
                        : "";

                        ?>>

                        Female

                    </option>

                </select>

            </th>


            <th>

                <input
                    type="submit"
                    name="submit"
                    value="Filter">

            </th>

        </tr>

    </thead>


    <tbody>

    <?php

    if($result) {

        foreach ($result as $key => $value) {

            echo '

            <tr>

                <td>
                    '. $value['student_id'] .'
                </td>

                <td>
                    '. $value['student_fname'] .'
                </td>

                <td>
                    '. $value['student_mname'] .'
                </td>

                <td>
                    '. $value['student_lname'] .'
                </td>

                <td>
                    '. $value['student_gender'] .'
                </td>

                <td>
                </td>

            </tr>

            ';

        }

    }

    ?>

    </tbody>

</table>

</form>


<script src="DataTables/jQuery-3.6.0/jquery-3.6.0.min.js">
</script>

<script src="DataTables/datatables.min.js">
</script>


<script>

$(document).ready(() => {

    $('#example').DataTable({

        order: [],

        bFilter: false,

        bSortCellsTop: true,

        pageLength: 25

    });

});

</script>


</body>

</html>