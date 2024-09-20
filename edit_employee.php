
    <?php
    session_start();
    include "head.php";
    include "db.php";
    if($_SERVER['REQUEST_METHOD']=='POST'){
        $id=$_GET['id'];
        $name=$_POST['name'];
        $email=$_POST['email'];
        $phone=$_POST['phone'];
        $picture = null;
        if (isset($_FILES['picture']) ) {
            $picture = 'imges/' . $_FILES['picture']['name'];
            move_uploaded_file($_FILES['picture']['tmp_name'], $picture);
        }
        $manager_id=$_POST['manager_id'];
        $sql="UPDATE `employees` SET `id`='$id',
        `name`='$name',
        `email`='$email',
        `phone`='$phone',
        `picture`='$picture',
        `manager_id`='$manager_id'
         WHERE id=?";
         $res=$pdo->prepare($sql);
         $data=$res->execute([$id]);
         if($data == true){
            header("Location: employees.php");
            exit();
         }
         

       
    }

    
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body style="background-color: aqua;">
    <div style="margin: 20px;" class="row justify-content-center">
        <div style="border: 3px solid black; padding: 15px; border-radius: 10px;box-shadow: 10px 10px  4px cornflowerblue; " class="col-md-6">
            <h2 style="text-align: center; margin:10px">Edit_Employee</h2>
            <form action="" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" name="name"   required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="phone">Phone</label>
                    <input type="text" class="form-control" id="phone" name="phone" >
                </div>
                <div class="form-group">
                    <label for="picture">Picture</label>
                    <input type="file" class="form-control-file" id="picture" name="picture">
                </div>
                <div class="form-group">
                        <label for="manager_id">manager_id</label>
                        <input type="text" name="manager_id" id="manager_id" class="form-control-file" value="<?php echo $_SESSION['manager_id']; ?>">
                </div>
                <button type="submit" class="btn btn-primary">Update Employee</button>
            </form>
        </div>
    </div>
        
    </body>
    </html>