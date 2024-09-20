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
    <body style="background-color:red"  >
    <div  style="margin: 20px;"  class="row justify-content-center">
        <div style="border: 3px solid black; padding: 15px; border-radius: 10px;box-shadow: 10px 10px  5px gold; " class="col-md-6">
            <h2 style="margin: 10px;text-align: center; color:yellow">Login</h2>
            <form action="login_action.php" method="POST">
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                </div>
                <button type="submit" class="btn btn-primary">Login</button>
            </form>
        </div>
    </div>

        
    </body>
    </html>