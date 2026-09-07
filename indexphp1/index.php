<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Output 1</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">
    <style>
        body {
            font-family: "Arial";
        }
    </style>
</head>
<body class="bg-success p-2 text-white">
    <h1>PHP Output No. 1</h1>
    
    <fieldset>
        <legend class="fst-italic">This form uses GET request</legend>
        <form action="redirect.php" method="GET">
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
    </fieldset>
    
    <fieldset style="margin-top: 20px">
        <legend class="fst-italic">This form uses POST request</legend>
        <form action="redirect.php" method="POST">
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
    </fieldset>

</body>
</html>