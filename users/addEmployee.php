<?php include("../conn/conn.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <title>Users</title>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <h3 class="text-center py-3">
                Add Employee Data
            </h3>
            <hr/>
            <div class="col-md-8 mx-auto border p-4 rounded shadow">
                <form action="" method="post" onsubmit="return validateForm()">
                <div class="mb-3 mt-1">
                    <label class="form-label">Name:</label>
                    <input type="text" class="form-control" id="name" placeholder="Enter Name" name="name" required>
                </div>
                <div class="mb-3 mt-3">
                    <label class="form-label">D.O.B:</label>
                    <input type="date" class="form-control" id="dob" name="dob" required>
                </div>
                <div class="mb-3 mt-3">
                    <label class="form-label">Email:</label>
                    <input type="text" class="form-control" id="email" placeholder="Enter email" name="email" required>
                </div>
                <div class="mb-3 mt-3">
                    <label class="form-label">Address:</label>
                    <textarea rows="5" class="form-control" name="address" id="address" placeholder="Enter Address" required></textarea>
                </div>
                <div class="mb-3 mt-3">
                    <label class="form-label">Joined:</label>
                    <input type="text" class="form-control" id="joined" placeholder="Enter Date Joined" name="joined" required>
                </div>
                <div class="mb-3 mt-3">
                    <label class="form-label">Qualification:</label>
                    <input type="text" class="form-control" id="qualification" placeholder="Enter Qualification" name="qualification" required>
                </div>
                <div class="mb-3 mt-3">
                    <label class="form-label">Salary:</label>
                    <input type="text" class="form-control" id="salary" placeholder="Enter Salary" name="salary" required>
                </div>
                <button type="submit" name="add" id="add" class="btn btn-primary form-control mt-2">Add Employee</button>
                </form>
            </div>
            <?php
                if(isset($_POST["add"])){
                    $name = $_POST["name"];
                    $dob = $_POST["dob"];
                    $email = $_POST["email"];
                    $address = $_POST["address"];
                    $joined = $_POST["joined"];
                    $qualification = $_POST["qualification"];
                    $salary = $_POST["salary"];


                    $sql = $conn->query("INSERT INTO users(name, age, email, address, joined, qualification, salary) 
                    VALUES ('".$name."','".$dob."','".$email."','".$address."','".$joined."','".$qualification."','".$salary."')");

                    if($sql) {
                        echo "Added Successfuly";
                    } else {
                        echo "Error Please Try Later";
                    }
                }

            ?>
        </div>
    </div>
</body>
</html>