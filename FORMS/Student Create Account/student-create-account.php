<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Create Account</title>
    <!--CSS-->
    <link rel="stylesheet" href="./style.css" />

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
    <?php include "../header.php" ?>
      <section class="student-form-section">
      <div class="container-md">
        <div class="row">
          <div class="card-group justify-content-center">
            <div class="col-lg-5 col-md-5 col-sm-12 p-0">
            <div
              class="text-center card student-info p-5 h-100"
            >
            <i class="fas fa-user-graduate fa-8x"></i>
              <h2 class="mt-5">Student's Detail</h2>
              <p>Connecting students with hundreds of teachers</p>
              <p>
              Lorem ipsum dolor, sit amet consectetur adipisicing elit. Provident sapiente nam numquam molestias eveniet veritatis repellat perferendis tempora quibusdam eaque.
              </p>
              <div class="text-center mt-4">
              <button type="button" class="mb-2">Sign In</button>
              <a href="#" class="text-decoration-none text-light">
                <p>Already Have An account?</p>
              </a>
              </div>
            </div>
            </div>
            <div class="col-lg-7 col-md-7 col-sm-12 p-0">
            <div class="card student-form p-5 h-100">
              <h2 class="text-center">Create Account</h2>
              <form action="#" class="mt-3">
                <div class="form-row">
                  <div class="form-group col-xl-6 col-lg-6 col-md-6 col-sm-12">
                    <label for="fullName"
                      >Full Name</label
                    >
                    <div class="input-group">
                      <span class="input-group-addon"
                        ><i class="fas fa-user"></i></i
                      ></span>
                      <input
                        type="text"
                        id="fullName"
                        class="form-control"
                        placeholder="Full Name"
                        required
                      />
                    </div>
                  </div>
                  <div class="form-group col-xl-6 col-lg-6 col-md-6 col-sm-12">
                    <label for="address"
                      >Address</label
                    >
                    <div class="input-group">
                      <span class="input-group-addon"><i class="fas fa-map-marker-alt"></i></i></span>
                    <input
                      type="text"
                      id="address"
                      class="form-control"
                      placeholder="address"
                      required
                    />
                    </div>
                  </div>
                  <div class="form-group col-xl-6 col-lg-6 col-md-6 col-sm-12">
                    <label for="Email"
                      >Email</label
                    >
                    <div class="input-group">
                      <span class="input-group-addon"><i class="fas fa-envelope"></i></i></span>
                    <input
                      type="email"
                      id="email"
                      class="form-control"
                      placeholder="Email"
                      required
                    />
                    </div>
                  </div>
                <div class="form-group col-xl-6 col-lg-6 col-md-6 col-sm-12">
                    <label for="password">Password</label>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fas fa-lock"></i></i></span>
                        <span class="input-group-addon" onclick="myFunction()"><i id="passwordEye" class="fas fa-eye"></i></span>
                        <input type="password" id="password" class="form-control" placeholder="Password"
                         required />
                    </div>
                </div>
                  <div class="form-group col-xl-6 col-lg-6 col-md-6 col-sm-12">
                    <label for="confirmPassword">Confirm Password</label>
                    <div class="input-group">
                      <span class="input-group-addon"><i class="fas fa-lock"></i></i></span>
                      <input type="password" id="confirmPassword" class="form-control" placeholder="Confirm Password" required />
                    </div>
                  </div>
                <div class="form-group col-xl-6 col-lg-6 col-md-6 col-sm-12">
                    <label for="phoneNumber">Phone Number</label>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fas fa-phone-alt"></i></i></span>
                        <input type="phoneNumber" id="phoneNumber" class="form-control" placeholder="Phone Number"
                        required />
                    </div>
                </div>
                <div class="form-group col-xl-6 col-lg-6 col-md-6 col-sm-12">
                    <label for="previousTutions">Previous Tutions</label>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fas fa-history"></i></span>
                        <select name="previousTutions" class="form-control" id="previousTutions" required>
                            <option value="Yes">Yes</option>
                            <option value="No">No</option>
                        </select>
                    </div>
                </div>
                <div class="form-group col-xl-6 col-lg-6 col-md-6 col-sm-12">
                    <label for="password"
                      >Education</label
                    >
                    <div class="input-group">
                      <span class="input-group-addon"><i class="fas fa-book-reader"></i></span>
                    <select
                      name="education"
                      class="form-control"
                      id="education"
                      required
                    >
                    <option value="Nursery">Nursery</option>
                    <option value="L.K.G">L.K.G</option>
                    <option value="U.K.G">U.K.G</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                    <option value="+2">+2</option>
                    <option value="Bachelors">Bachelors</option>
                    <option value="Masters">Masters</option>
                    </select>
                    </div>
                  </div>

                  <div
                    class="form-group col-12"
                  >
                    <label>Identification Proof</label>
                    <div class="parent">
                      <label for="identificationProof" class="btn">
                        <span><i class="fas fa-cloud-upload-alt mr-2"></i></span
                        >Choose File
                        <input id="identificationProof" class="file-upload" type="file" hidden required/>
                      </label>
                        <p class="file-upload-filename "></p>
                    </div>
                  </div>
                 
                <button type="submit" class="d-block mx-auto btn">
                  Submit<span><i class="fas fa-paper-plane ml-2"></i></span>
                </button>
              </form>
            </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <?php include "../footer.php" ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script>
        
   
      var fileNames = document.querySelectorAll('.student-form .file-upload');
      Array.from(fileNames).forEach(function(fileName){
        fileName.addEventListener('change',function(e){

          const exactfile = e.target.files[0].name;
          const write = $(e.target).parent().parent().find('.file-upload-filename');
          write.text(exactfile);    
    
      });
    });


    function myFunction() {
            const password1 = document.getElementById("password");
            const password2 = document.getElementById("confirmPassword");
            if (password1.type === "password" || password2.type === "password") {
                password1.type = "text";
                password2.type = "text";
                document.getElementById("passwordEye").className = "fas fa-eye-slash";
            } else {
                password1.type = "password";
                password2.type = "password";
                document.getElementById("passwordEye").className = "fas fa-eye";
            }
        }
</script>
  </body>
</html>
