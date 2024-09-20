<?php
session_start();
include('head.php');
?>
    <body style="background-color: crimson;">
    <div style="margin: 20px;" class="row justify-content-center">
        <div  style="border: 3px solid black; padding: 15px; border-radius: 10px;box-shadow: 10px 10px  10px orangered; " class="col-md-6">
            <h2>Add Employee</h2>
            <form action="add_employee_action.php" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Name" required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
                </div>
                <div class="form-group">
                    <label for="phone">Phone</label>
                    <input type="text" class="form-control" id="phone" name="phone" placeholder="Phone">
                </div>
                <div class="form-group">
                    <label for="picture">Picture</label>
                    <input type="file" class="form-control-file" id="picture" name="picture">
                </div>
                <div class="form-group">
                        <label for="manager_id">manager_id</label>
                        <input type="text" name="manager_id" id="manager_id" class="form-control-file" value="<?php echo $_SESSION['manager_id']; ?>">
                </div>
                <button type="submit" class="btn btn-primary">Add Employee</button>
            </form>
        </div>
    </div>
    </body>
