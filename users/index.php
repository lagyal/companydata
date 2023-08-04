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
            <div class="col-md-12">
                <h3 class="text-center py-3">
                    Employee Data
                </h3>
                <hr/>
                <table class="my-2 table table-hover table-striped table-bordered table-dark">
                    <thead>
                        <tr>
                            <th>
                                S/O
                            </th>
                            <th>
                                Name
                            </th>
                            <th>
                                Age
                            </th>
                            <th>
                                Email
                            </th>
                            <th>
                                Address
                            </th>
                            <th>
                                Joined
                            </th>
                            <th>
                                Qualification
                            </th>
                            <th>
                                Salary($ P.A)
                            </th>
                            <th>
                               Edit 
                            </th>
                            <th>
                               Delete 
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php

                            $sql = $conn->query("select * from users");

                            if($sql->num_rows > 0){
                                while($row = $sql->fetch_assoc()){
                        ?>
                        <tr>
                            <td>
                                <?php echo $row["id"];?>
                            </td>
                            <td>
                                <?php echo $row["name"];?>
                            </td>
                            <td>
                                <?php echo $row["age"];?>
                            </td>
                            <td>
                                <?php echo $row["email"];?>
                            </td>
                            <td>
                                <?php echo $row["address"];?>
                            </td>
                            <td>
                                <?php echo $row["joined"];?>
                            </td>
                            <td>
                                <?php echo $row["qualification"];?>
                            </td>
                            <td>
                                <?php echo $row["salary"];?>
                            </td>
                            <td>
                                <button class="btn btn-primary">Edit</button>
                            </td>
                            <td>
                            <button class="btn btn-danger">Delete</button>
                            </td>
                        </tr>
                        <?php
                                }
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>