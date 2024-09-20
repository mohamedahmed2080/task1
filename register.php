<?php
session_start();
include('head.php');
?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body style="background-color:green">
    <div  style="margin: 20px;"  class="row justify-content-center">
        <div style="border: 3px solid black; padding: 15px; border-radius: 10px;box-shadow: 10px 10px  10px greenyellow; "  class="col-md-6">
            <h2 style="margin: 10px;text-align: center; color: gold;">Register</h2>
            <form action="register_action.php" method="POST">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Name" required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                </div>
                <button type="submit" class="btn btn-primary">Register</button>
            </form>
        </div>
    </div>

    </body>
    </html>