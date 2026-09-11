<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Output 1</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #e8f0ff, #f8f9ff);
            margin: 0;
            padding: 40px 20px;
            color: #333;
        }

        h1 {
            text-align: center;
            color: #1d3557;
            margin-bottom: 35px;
        }

        fieldset {
            max-width: 700px;
            margin: 0 auto;
            padding: 25px 35px 30px;
            background: white;
            border: none;
            border-radius: 15px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.12);
        }

        fieldset + fieldset {
            margin-top: 30px;
        }

        legend {
            background-color: #1d3557;
            color: white;
            padding: 10px 18px;
            border-radius: 8px;
            font-weight: bold;
        }

        table {
            width: 100%;
            border-collapse: separate;
            border-spacing: 0 15px;
        }

        td:first-child {
            width: 35%;
            font-weight: bold;
            color: #1d3557;
        }

        td:last-child {
            width: 65%;
        }

        input[type="text"],
        input[type="number"],
        input[type="email"],
        input[type="tel"],
        select {
            width: 100%;
            padding: 12px;
            border: 1px solid #ccd3df;
            border-radius: 8px;
            font-size: 14px;
            outline: none;
            background-color: #fafbff;
        }

        input[type="text"]:focus,
        input[type="number"]:focus,
        input[type="email"]:focus,
        input[type="tel"]:focus,
        select:focus {
            border-color: #457b9d;
            box-shadow: 0 0 5px rgba(69, 123, 157, 0.3);
        }

        input[type="submit"],
        input[type="reset"] {
            padding: 11px 20px;
            border: none;
            border-radius: 8px;
            font-weight: bold;
            cursor: pointer;
        }

        input[type="submit"] {
            background-color: #1d3557;
            color: white;
        }

        input[type="submit"]:hover {
            background-color: #457b9d;
        }

        input[type="reset"] {
            background-color: #e63946;
            color: white;
            margin-left: 5px;
        }

        input[type="reset"]:hover {
            background-color: #c92f3b;
        }

        @media (max-width: 600px) {
            fieldset {
                padding: 20px 15px;
            }

            table,
            tbody,
            tr,
            td {
                display: block;
                width: 100%;
            }

            td:first-child {
                margin-bottom: 5px;
            }
        }
    </style>
</head>

<body>

    <h1>PHP Output No. 1</h1>

    <!-- GET FORM -->
    <fieldset>
        <legend>This form uses GET request</legend>

        <form action="redirect.php" method="GET">

            <table>

                <tr>
                    <td>First Name</td>
                    <td>
                        <input type="text" name="fname"
                               placeholder="Enter First Name" required>
                    </td>
                </tr>

                <tr>
                    <td>Middle Name</td>
                    <td>
                        <input type="text" name="mname"
                               placeholder="Enter Middle Name" required>
                    </td>
                </tr>

                <tr>
                    <td>Last Name</td>
                    <td>
                        <input type="text" name="lname"
                               placeholder="Enter Last Name" required>
                    </td>
                </tr>

                <tr>
                    <td>Age</td>
                    <td>
                        <input type="number" name="age"
                               placeholder="Enter Age" required>
                    </td>
                </tr>

                <tr>
                    <td>Gender</td>
                    <td>
                        <select name="gender" required>
                            <option value="M">Male</option>
                            <option value="F">Female</option>
                        </select>
                    </td>
                </tr>

                <tr>
                    <td>Email</td>
                    <td>
                        <input type="email" name="email"
                               placeholder="Enter Email" required>
                    </td>
                </tr>

                <tr>
                    <td>Address</td>
                    <td>
                        <input type="text" name="address"
                               placeholder="Enter Complete Address" required>
                    </td>
                </tr>

                <tr>
                    <td>Contact Number</td>
                    <td>
                        <input type="tel" name="contact_number"
                               placeholder="Enter Contact Number"
                               maxlength="11"
                               pattern="[0-9]{11}"
                               required>
                    </td>
                </tr>

                <tr>
                    <td></td>
                    <td>
                        <input type="submit" value="Submit Data">
                        <input type="reset" value="Cancel">
                    </td>
                </tr>

            </table>

        </form>
    </fieldset>


    <!-- POST FORM -->
    <fieldset>
        <legend>This form uses POST request</legend>

        <form action="redirect.php" method="POST">

            <table>

                <tr>
                    <td>First Name</td>
                    <td>
                        <input type="text" name="fname"
                               placeholder="Enter First Name" required>
                    </td>
                </tr>

                <tr>
                    <td>Middle Name</td>
                    <td>
                        <input type="text" name="mname"
                               placeholder="Enter Middle Name" required>
                    </td>
                </tr>

                <tr>
                    <td>Last Name</td>
                    <td>
                        <input type="text" name="lname"
                               placeholder="Enter Last Name" required>
                    </td>
                </tr>

                <tr>
                    <td>Age</td>
                    <td>
                        <input type="number" name="age"
                               placeholder="Enter Age" required>
                    </td>
                </tr>

                <tr>
                    <td>Gender</td>
                    <td>
                        <select name="gender" required>
                            <option value="M">Male</option>
                            <option value="F">Female</option>
                        </select>
                    </td>
                </tr>

                <tr>
                    <td>Email</td>
                    <td>
                        <input type="email" name="email"
                               placeholder="Enter Email" required>
                    </td>
                </tr>

                <tr>
                    <td>Address</td>
                    <td>
                        <input type="text" name="address"
                               placeholder="Enter Complete Address" required>
                    </td>
                </tr>

                <tr>
                    <td>Contact Number</td>
                    <td>
                        <input type="tel" name="contact_number"
                               placeholder="Enter Contact Number"
                               maxlength="11"
                               pattern="[0-9]{11}"
                               required>
                    </td>
                </tr>

                <tr>
                    <td></td>
                    <td>
                        <input type="submit" value="Submit Data">
                        <input type="reset" value="Cancel">
                    </td>
                </tr>

            </table>

        </form>
    </fieldset>

</body>
</html>