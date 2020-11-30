<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login Page</title>
    <!--CSS-->
    <link rel="stylesheet" href="./style.css" />

    <!--Bootstrap-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous" />

    <!--fontawesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" />
</head>

<body>
     <?php include "../header.php" ?>
    <section class="student-login-section">
        <div class="container-md">
            <div class="row">
                <div class="card-group justify-content-center">
                    <div class="col-lg-4 col-md-5 col-sm-6 p-0">
                    <div class="card welcome-section text-center h-100 p-5">
                        <h3>Welcome</h3>
                        <p class="mt-3">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla quasi eum illo suscipit
                            dolores eos aliquid adipisci, iste dolorem dolorum ea nisi excepturi voluptas, dicta
                            distinctio quam facere saepe at?
                        </p>
                        <button type="button" class="mt-3 btn d-inline-block  mx-4" id="studentLoginButton">Login As Student</button>
                        <button type="button" class="mt-3 btn">Create Account</button>
                        <a href="#" class="text-decoration-none text-light">
                            <p class="mt-2">Dont't Have An account?</p>
                        </a>
                    </div>
                    </div>
                    <div class="col-lg-4 col-md-7 col-sm-6 p-0">
                    <div class="card login-form h-100 p-2">
                        <h3 class="text-center mt-5">Login</h3>
                        <form>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fas fa-envelope"
                                        aria-hidden="true"></i></span>
                                <input id="email" type="text" class="form-control" name="email" placeholder="Email" />
                            </div>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fas fa-lock"></i></span>
                                <span class="input-group-addon" onclick="myFunction()"><i id="passwordEye"
                                        class="fas fa-eye"></i></span>
                                <input id="password" type="password" class="form-control" name="password"
                                    placeholder="Password" />
                            </div>
                            <input class="mr-3" type="checkbox" />Remember Me?
                        </form>
                        <button type="submit" class="btn text-light w-25 mx-auto">
                            Sign In
                        </button>
                        <div class="text-center mt-0 pt-0 mt-2">
                            <a href="#/" class="text-decoration-none">Forgot Password?</a>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </section>
    <?php include "../footer.php" ?>
    <script>
        function myFunction() {
            const password1 = document.getElementById("password");
            if (password1.type === "password") {
                password1.type = "text";
                document.getElementById("passwordEye").className = "fas fa-eye-slash";
            } else {
                password1.type = "password";
                document.getElementById("passwordEye").className = "fas fa-eye";
            }
        }
    </script>
</body>

</html>