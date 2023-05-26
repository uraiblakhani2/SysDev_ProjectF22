<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Register</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    </head>

    <body>
        <?php include 'app\views\includes\userHeader.php'; ?>
        <?php include 'app\views\includes\message.php'; ?>
        
        <div class='container mb-4'>
            <h2 class="h1-responsive font-weight-bold text-center my-4">Register</h2>
            <form action="" method="post">
                <div class="row">
                    <div class="col">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" name="username" placeholder="Username" required>
                            <label for="username">Username</label>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" name="fName" placeholder="First Name" required>
                            <label for="fname">First Name</label>
                        </div>
                    </div>

                    <div class="col">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" name="lName" placeholder="Last Name" required>
                            <label for="lname">Last Name</label>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <div class="form-floating mb-3">
                            <input type="tel" class="form-control" name="phone" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" placeholder="Phone" maxlength="13" required>
                            <label for="phone">Phone</label>
                            <div id="phoneHelp" class="form-text">I.e. XXX-XXX-XXXX</div>
                        </div>
                    </div>
                    
                    <div class="col">
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control" name="email" placeholder="Email" pattern="[^@\s]+@[^@\s]+\.[^@\s]+" required>
                            <label for="email">Email</label>
                            <div id="emailHelp" class="form-text">example@example.com</div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <div class="form-floating mb-3">
                            <input id="password" type="password" class="form-control" name="password" placeholder="Password" minlength="8" required>
                            <label for="password">Password</label>
                            <div id="passwordHelp" class="form-text">At least 8 characters</div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="form-floating mb-3">
                            <input id="passwordConf" type="password" class="form-control" name="passwordConf" placeholder="Password Confirmation" minlength="8"  required>
                            <label for="passwordConf">Password Confirmation</label>
                            <div id="passwordConfHelp" class="form-text">Re-enter your Password</div>
                        </div>
                    </div>
                </div>

                <div class="text-center text-md-right">
                    <button name="action" type="submit" class="btn btn-dark w-50" onclick="validate()">Sign In</button>
                </div>

                <div class="text-center text-md-right">
                    <small>Already have an Account? <a href="/User/login">Log In</a></small>
                </div>
            </form>
        </div>

        <?php include 'app\views\includes\userFooter.php'; ?>
    </body>
    
    <script>
        function validate() {
            password = document.getElementById('password').value;
            passwordConf = document.getElementById('passwordConf').value;
            if (password != passwordConf) {
                alert("Passwords are not the same.");
                event.preventDefault();
            }
        }
    </script>
</html>