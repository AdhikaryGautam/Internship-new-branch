<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Teacher's ID</title>

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
    <section class="teachers-id">
      <div class="container">
        <div class="main-section">
          <h2 class="text-center">Teachers's Form</h2>
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
                <label for="availableDistrict">Available District</label>
                <div class="input-group">
                  <span class="input-group-addon"><i class="fas fa-map-marker-alt"></i></span>
                  <input list="availableDistricts" name="availableDistrict" id="availableDistrcit" class="form-control" required />
                  <datalist id="availableDistricts">
                    <option value="Kathmandu">
                    <option value="Chitwan">
                    <option value="Pokhara">
                  </datalist>
                </div>
              </div>
              <div class="form-group col-xl-6 col-lg-6 col-md-6 col-sm-12">
                <label for="availableAddress">Available Address</label>
                <div class="input-group">
                  <span class="input-group-addon"
                    ><i class="fas fa-map-marker-alt"></i
                  ></span>
                  <input
                    list="availableAddresses"
                    name="availableAddress"
                    id="availableAddress"
                    class="form-control"
                    required
                  />
                  <datalist id="availableAddresses">
                    <option value="Budanilkantha">
                    <option value="Nepaltar">
                    <option value="Balaju">
                    <option value="Baluwatar">
                    <option value="Koteshwor">
                    <option value="Sathdobato">
                    <option value="Ekantakuna">
                    <option value="Bhaisepati">
                    <option value="Chobar">
                    <option value="Maitidevi">
                    <option value="New Road">
                    <option value="Chabhil">
                    <option value="Bhotebahal">
                    <option value="Kalanki">
                  </datalist>
                </div>
              </div>
              <div class="form-group col-xl-6 col-lg-6 col-md-6 col-sm-12">
                <label for="availableTime">Available Time</label>
                <div class="input-group">
                  <span class="input-group-addon"
                    ><i class="fas fa-clock"></i
                  ></span>
                  <input
                    type="datetime-local"
                    id="availableTime"
                    class="form-control"
                    placeholder="Enter available time"
                    required
                  />
                </div>
              </div>
              <div class="form-group col-xl-6 col-lg-6 col-md-6 col-sm-12">
                <label for="teachingMethodology">Teaching Methodology</label>
                <div class="input-group">
                  <span class="input-group-addon"
                    ><i class="fas fa-house-user"></i
                  ></span>
                  <select
                    name="teachingMethodology"
                    class="form-control"
                    id="teachingMethodology"
                    required
                  >
                    <option value="online">Online</option>
                    <option value="home">Home</option>
                  </select>
                </div>
              </div>
              <div class="form-group col-xl-6 col-lg-6 col-md-6 col-sm-12">
                <label for="priceRate">Price Rate</label>
                <div class="input-group">
                  <span class="input-group-addon"
                    ><i class="fas fa-tags"></i
                  ></span>
                  <input
                    type="number"
                    id="priceRate"
                    class="form-control"
                    placeholder="Enter your price/hr"
                    required
                  />
                </div>
              </div>
              <div
                class="form-group col-xl-6 col-lg-6 col-md-6 col-sm-12"
                data-toggle="tooltip"
                data-placement="top"
                title="Enter the subjects you will be teaching"
              >
                <label for="subjects">Subjects</label>
                <textarea
                  class="form-control"
                  id="subjects"
                  rows="5"
                  placeholder="Enter the subjects"
                  required
                ></textarea>
              </div>
              <div
                class="form-group col-xl-6 col-lg-6 col-md-6 col-sm-12"
                data-toggle="tooltip"
                data-placement="top"
                title="Enter your teaching experience"
              >
                <label for="experience">Experiece</label>
                <textarea
                  class="form-control"
                  id="experience"
                  rows="5"
                  placeholder="Enter your experirence"
                  required
                ></textarea>
              </div>
              <div
                class="form-group col-xl-6 col-lg-6 col-md-6 col-sm-12"
                data-toggle="tooltip"
                data-placement="top"
                title="Write a short info about yourself"
              >
                <label for="aboutMe">About Me</label>
                <textarea
                  class="form-control"
                  id="aboutMe"
                  rows="5"
                  placeholder="Enter about yourself"
                  required
                ></textarea>
              </div>
              <div
                class="form-group col-xl-6 col-lg-6 col-md-6 col-sm-12"
                data-toggle="tooltip"
                data-placement="top"
                title="Enter your thoughts and ideology"
              >
                <label for="ideology">Ideology</label>
                <textarea
                  class="form-control"
                  id="ideology"
                  rows="5"
                  required
                  placeholder="Enter you ideology"
                ></textarea>
              </div>
              <div class="form-group col-xl-6 col-lg-6 col-md-6 col-sm-12" data-toggle="tooltip" data-placement="top"
                title="Enter the trial period you want to provide to your student">
                <label for="trialDays">Trial</label>
                <div class="input-group">
                  <span class="input-group-addon"></span>
                  <input type="number" id="trialDays" class="form-control" placeholder="Enter trial period" required />
                </div>
              </div>
              <div class="form-group  col-xl-6 col-lg-6 col-md-6 col-sm-12">
                <p>Photo</p>
                <div class="parent">
                  <label for="teacherPhoto" class="btn">
                    <span><i class="fas fa-cloud-upload-alt mr-2"></i></span
                    >Choose Photo
                    <input
                      id="teacherPhoto"
                      class="file-upload"
                      type="file"
                      hidden
                      required
                    />
                  </label>
                  <span class="ml-2 file-upload-filename"></span>
                </div>
              </div>
              <div
                class="custom-control custom-checkbox checkbox-lg ml-3"
              >
                <input
                  type="checkbox"
                  class="custom-control-input"
                  id="checkbox-2"
                  checked=""
                />
                <label class="custom-control-label" for="checkbox-2"
                  >Available</label
                >
              </div>
            </div>
            <button type="submit" class="d-block mx-auto mt-5 btn btn-lg btn-primary">
              Submit<span><i class="fas fa-paper-plane ml-2"></i></span>
            </button>
          </form>
        </div>
      </div>
    </section>
    <?php include "../footer.php" ?>
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
