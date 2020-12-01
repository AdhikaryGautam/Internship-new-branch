<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Change Password</title>

    <!--CSS-->
    <link rel="stylesheet" href="./Change-Password.css" />
     <link rel="stylesheet" href="../../Header/header.css">
      <link rel="stylesheet" href="../../Footer/footer.css">

    <!--Bootstrap-->
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
      integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z"
      crossorigin="anonymous"
    />

    <!--fontawesome-->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css"
    />
  </head>
  <body>
     <?php include "../../Header/header.php" ?>
    <section class="register-section">
      <div class="container-md">
        <div class="row">
          <div class="card-group justify-content-center">
            <div class="col-lg-4 col-md-5 col-sm-6 p-0">
            <div
              class="card welcome-section text-center h-100"
            >
              <h3>Welcome</h3>
              <p class="mt-3">
                Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                Ducimus quo asperiores veritatis temporibus necessitatibus.
                Molestias, est nesciunt. Quod consectetur provident beatae
                aliquam corporis aperiam cum quisquam fugit repellendus, quasi
                perferendis.
              </p>

              <button type="button" class="mt-3 btn">Sign Up</button>
              <a href="#/" class="mt-2 text-decoration-none text-light">Already Have An account?</a>
            </div>
            </div>
            <div class="col-lg-4 col-md-7 col-sm-6 p-0">
            <div class="card register-form h-100">
              <h3 class="text-center mt-5">Change Password</h3>
              <form class="pb-3">
                <label for="oldPassword">Old Password:</label>
                <div class="input-group">
                  <span class="input-group-addon"
                    ><i class="fas fa-lock" aria-hidden="true"></i
                  ></span>
                  <input
                    id="oldPassword"
                    type="Password"
                    class="form-control"
                    name="oldPassword"
                    placeholder="Old Password"
                  />
                </div>

                <label for="newPassword">New Password:</label>
                <div class="input-group">
                  <span class="input-group-addon"
                    ><i class="fas fa-lock"></i
                  ></span>
                  <input
                    id="newPassword"
                    type="password"
                    class="form-control"
                    name="password"
                    placeholder="New Password"
                  />
                </div>
                
                <label for="confirmPassword">Confirm Password:</label>
                <div class="input-group">
                  <span class="input-group-addon"
                    ><i class="fas fa-lock"></i
                  ></span>
                  <input
                    id="confirmPassword"
                    type="password"
                    class="form-control"
                    name="confirmPassword"
                    placeholder="Confirm Password"
                  />
                </div>
              
                <div class="form-check">
                  <label class="form-check-label">
                    <input type="checkbox" class="form-check-input"  onclick="myFunction()">Show Password
                  </label>
                </div>
                
              </form>
              <button type="submit" class="d-block w-50 mx-auto btn mt-0">
                Save
              </button>
            </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <?php include "../../Footer/footer.php" ?>
    <!--script to show the password-->
    <script>
      function myFunction() {
        const password1 = document.getElementById("password");
        const password2 = document.getElementById("password2");
        if (password1.type === "password" || password2.type === "password") {
          password1.type = "text";
          password2.type = "text";
        } else {
          password1.type = "password";
          password2.type = "password";
        }
      }
    </script>
  </body>
</html>
