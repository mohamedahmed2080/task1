<?php
session_start();
include('db.php');
include('head.php');

if (!isset($_SESSION['manager_id'])) {
    header("Location: login.php");
    exit();
}

$manager_id = $_SESSION['manager_id'];
$stmt = $pdo->prepare("SELECT * FROM employees WHERE manager_id = ?");
$stmt->execute([$manager_id]);
$employees = $stmt->fetchAll();
?>
    <body style="background-color:skyblue;">
    <div  class="row">
        <div class="col-md-12">
            <h2 style="text-align: center;margin: 10px;"> Employees </h2>
            <a href="add_employee.php" class="btn btn-primary mb-3">Add Employee</a>
            <table class="table table-success table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Picture</th>
                        <th>Manager_id</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($employees as $employee): ?>
                        <tr>
                            <td><?php echo $employee['id']; ?></td>
                            <td><?php echo $employee['name']; ?></td>
                            <td><?php echo $employee['email']; ?></td>
                            <td><?php echo $employee['phone']; ?></td>
                            <td><img src="<?php echo $employee['picture']; ?>" alt="Picture" width="50"></td>
                            <td><?php echo $employee['manager_id']; ?></td>
                            <td>
                                <a href="edit_employee.php?id=<?php echo $employee['id']; ?>" class="btn btn-warning btn-sm">Edit</a>
                                <a href="delete_employee.php?id=<?php echo $employee['id']; ?>" class="btn btn-danger btn-sm">Delete</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
    </body>
