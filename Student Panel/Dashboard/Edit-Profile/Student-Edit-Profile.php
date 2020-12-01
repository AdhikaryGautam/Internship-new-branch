<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Student Edit Profile</title>

    <!--CSS-->
    <link rel="stylesheet" href="./Student-Edit-Profile.css" />
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

    <section class="teachers-id">
      <div class="container parentContainer">
        <div class="main-section">
          <h2 class="text-center">Student Edit Profile</h2>
          <form action="#" class="teachers-form mt-5">
            <div class="row">
              <div class="form-group col-xl-6 col-lg-6 col-md-6 col-sm-12">
                <label for="fullName">Full Name</label>
                <div class="input-group">
                  <span class="input-group-addon"
                    ><i class="fas fa-user-tie"></i
                  ></span>
                  <input
                    type="text"
                    id="fullName"
                    class="form-control"
                    placeholder="Enter Full Name"
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
                <label for="temporaryAddress"
                  >Temporary Address</label
                >
                <div class="input-group">
                  <span class="input-group-addon"><i class="fas fa-map-marker-alt"></i></i></span>
                <input
                  type="text"
                  id="temporaryAddress"
                  class="form-control"
                  placeholder="Temporary Address"
                  required
                />
                </div>
              </div>

              <div class="form-group col-xl-6 col-lg-6 col-md-6 col-sm-12">
                    <label for="phoneNumber" class="pointer"
                      >Phone Number</label
                    >
                    <div class="input-group">
                      <span class="input-group-addon"><i class="fas fa-phone-alt"></i></i></span>
                    <input
                      type="tel"
                      id="phoneNumber"
                      class="form-control"
                      placeholder="Phone Number"
                      required
                    />
                    </div>
                  </div>

                  <div class="form-group col-xl-6 col-lg-6 col-md-6 col-sm-12">
                    <label for="alternateNumber" class="pointer"
                      >Alternate Number</label
                    >
                    <div class="input-group">
                      <span class="input-group-addon"><i class="fas fa-phone-alt"></i></i></span>
                    <input
                      type="tel"
                      id="alternateNumber"
                      class="form-control"
                      placeholder="Phone Number"
                      required
                    />
                    </div>
                  </div>


              <div
                    class="form-group col-xl-6 col-lg-4 col-md-6 col-sm-12 text-center"
                  >
                    <p>Identification Proof(Max:2MB)</p>
                    <div class="parent">
                      <label for="identificationProof" class="btn">
                        <span><i class="fas fa-cloud-upload-alt mr-2"></i></span
                        >Choose File
                        <input id="identificationProof" class="file-upload" type="file" hidden required/>
                      </label>
                        <p class="file-upload-filename "></p>
                    </div>
                  </div>

            </div>
            <button type="submit" class="d-block mx-auto mt-2 btn btn-lg" id="submitButton">
              Save Changes
            </button>
          </form>
        </div>
      </div>
    </section>
    <?php include "../../Footer/footer.php" ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script>
      var fileNames = document.querySelectorAll(".teachers-id .file-upload");
      Array.from(fileNames).forEach(function (fileName) {
        fileName.addEventListener("change", function (e) {
          const exactfile = e.target.files[0].name;
          const write = $(e.target)
            .parent()
            .parent()
            .find(".file-upload-filename");
          write.text(exactfile);
        });
      });

      $(document).ready(function () {
        $('[data-toggle="tooltip"]').tooltip();
      });
    </script>
  </body>
</html>
