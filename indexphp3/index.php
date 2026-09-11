<?php include './layout/head.php'; ?>

<div class="container py-4">

    <h1 class="display-5 fw-bold text-primary">PHP Output 3</h1>
    <p class="text-muted">
        This output connects to the database and allows the user to save records into it.
    </p>

    <div class="card shadow-sm mt-4" style="max-width: 650px;">
        <div class="card-header bg-primary text-white">
            <h2 class="h4 mb-0">Register Person</h2>
        </div>

        <div class="card-body">

            <form action="redirect.php" method="POST">

                <table class="table table-borderless align-middle">

                    <tr>
                        <td>
                            <label for="fname" class="form-label">First Name</label>
                        </td>
                        <td>
                            <input type="text" name="fname" id="fname"
                                   class="form-control"
                                   placeholder="Enter First Name">
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label for="mname" class="form-label">Middle Name</label>
                        </td>
                        <td>
                            <input type="text" name="mname" id="mname"
                                   class="form-control"
                                   placeholder="Enter Middle Name">
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label for="lname" class="form-label">Last Name</label>
                        </td>
                        <td>
                            <input type="text" name="lname" id="lname"
                                   class="form-control"
                                   placeholder="Enter Last Name">
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label for="age" class="form-label">Age</label>
                        </td>
                        <td>
                            <input type="number" name="age" id="age"
                                   class="form-control"
                                   placeholder="Enter Age">
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label for="gender" class="form-label">Gender</label>
                        </td>
                        <td>
                            <select class="form-select" name="gender" id="gender" required>
                                <option value="M">Male</option>
                                <option value="F">Female</option>
                            </select>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label for="email" class="form-label">Email</label>
                        </td>
                        <td>
                            <input type="email" name="email" id="email"
                                   class="form-control"
                                   placeholder="Enter Email"
                                   required>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label for="address" class="form-label">Address</label>
                        </td>
                        <td>
                            <input type="text" name="address" id="address"
                                   class="form-control"
                                   placeholder="Enter Complete Address"
                                   required>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label for="contact" class="form-label">Contact Number</label>
                        </td>
                        <td>
                            <input type="tel" name="contact" id="contact"
                                   class="form-control"
                                   placeholder="Enter Contact Number"
                                   maxlength="11"
                                   pattern="[0-9]{11}">
                        </td>
                    </tr>

                    <tr>
                        <td></td>
                        <td class="pt-3">
                            <input type="submit"
                                   class="btn btn-success px-4"
                                   name="submit"
                                   value="Submit">

                            <input type="reset"
                                   class="btn btn-danger px-4"
                                   name="cancel"
                                   value="Cancel">
                        </td>
                    </tr>

                </table>

            </form>

        </div>
    </div>

</div>

<?php include './layout/foot.php'; ?>
