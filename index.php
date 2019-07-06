<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Comment Section</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container py-4">
        <nav class="mb-5">
            <ul class="pr-3">
                <li class="mr-3"><a class="cd-signin" href="#0" data-toggle="modal" data-target="#signin">Login</a></li>
                <li><a class="cd-signup" href="#0" data-toggle="modal" data-target="#signup">Register</a></li>
            </ul>
        </nav>
        <main class="px-3">
            <form action="post">
                <textarea class="form-control" name="comment" id="comment" rows="4"
                    placeholder="Type a Comment ....."></textarea>
                <input type="submit" value="Post Comment" name="submit" class="mt-4 float-right py-2 px-4 submit-btn">
            </form> 
        </main>
    </div>


<!-- user login modal -->

<div class="modal fade" id="signin" role="dialog">
    <div class="modal-dialog modal-dialog-centered" style="width: 400px;">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">User Login</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <form action="" method="post">
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" class="form-control" id="email" placeholder="Enter email" name="useremail"
                            autofocus required>
                    </div>
                    <div class="form-group">
                        <label for="pwd">Password:</label>
                        <input type="password" class="form-control" id="pwd1" placeholder="Enter password"
                            name="userpassword" required>
                    </div>
                    <button type="submit" class="btn btn-default text-center" name="login"
                        style="background-color: green;color: white;font-family: sans-serif; margin-left: 145px;">Login</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- user register modal -->

<div class="modal fade" id="signup" role="dialog">
    <div class="modal-dialog modal-dialog-centered" style="width: 400px;">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title text-center">User Signup</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <form action="" method="post">
                    <div class="form-group">
                        <label for="name">Name:</label>
                        <input type="name" class="form-control" id="name" placeholder="Enter name" name="username"
                            autofocus required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" class="form-control" id="email" placeholder="Enter email" name="useremail"
                            autofocus required>
                    </div>
                    <div class="form-group">
                        <label for="pwd">Password:</label>
                        <input type="password" class="form-control" id="pwd1" placeholder="Enter password"
                            name="userpassword" required>
                    </div>
                    <button type="submit" class="btn btn-default text-center" name="login"
                        style="background-color: green;color: white;font-family: sans-serif; margin-left: 145px;">Login</button>
                </form>
            </div>
        </div>
    </div>
</div>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</body>

</html>