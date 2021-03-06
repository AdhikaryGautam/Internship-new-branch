<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Teachers' Detail</title>

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
    <section class="detail-section">
      <div class="container-md">
        <div class="row">
          <div class="card-group">
            <div class="col-lg-5 col-md-5 col-sm-12 text-center p-0">
            <div
              class="card info p-5 justify-content-center h-100 border-0"
            >
              <i class="fas fa-id-card-alt fa-5x"></i>
              <h2 class="mt-5">Teacher's Detail</h2>
              <p>Connecting teachers with hundreds of students</p>
              <p>
               Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam accusamus omnis porro delectus voluptatibus consequuntur, sit et minus veritatis id?
              </p>
            </div>
            </div>
            <div class="col-lg-7 col-md-7 col-sm-12 p-0"> 
            <div class="card detail p-5 h-100 border-0">
              <h2 class="text-center">Create Id</h2>
              <form action="#" class="mt-3">
                <div class="form-row">
                  <div class="form-group col-xl-6 col-lg-6 col-md-6 col-sm-12">
                    <label for="permanentAddress"
                      >Permanent Address</label
                    >
                    <div class="input-group">
                      <span class="input-group-addon"
                        ><i class="fas fa-map-marker-alt"></i></i
                      ></span>
                      <input
                        type="text"
                        id="permanentAddress"
                        class="form-control"
                        placeholder="Permanent Address"
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

                  <div class="col-12">
                    <p>Online Payments</p>
                  </div>

                  <div class="form-group col-xl-6 col-lg-6 col-md-6 col-sm-12">
                    <label for="paymentOption"
                      >Payment Option</label
                    >
                    <div class="input-group">
                      <span class="input-group-addon"><i class="far fa-credit-card"></i></i></span>
                    <select
                      name="paymentOption"
                      class="form-control"
                      id="paymentOption"
                      required
                    >
                      <option value="online">Esewa</option>
                      <option value="bank">Khalti</option>
                    </select>
                    </div>
                  </div>

                  <div class="form-group col-xl-6 col-lg-6 col-md-6 col-sm-12">
                    <label for="onlinePaymentId" class="pointer"
                      >Online Payment Id(Esewa, Khalti)</label
                    >
                    <div class="input-group">
                      <span class="input-group-addon"><i class="fas fa-money-check"></i></span>
                    <input
                      type="tel"
                      id="onlinePaymentId"
                      class="form-control"
                      placeholder="Online Payment Id"
                      required
                    />
                    </div>
                  </div>

                  <div class="col-12">
                    <p>Bank Details</p>
                  </div>

                  <div class="form-group col-xl-6 col-lg-6 col-md-6 col-sm-12">
                    <label for="accountName" class="pointer"
                      >Account Name</label
                    >
                    <div class="input-group">
                      <span class="input-group-addon"><i class="fas fa-user"></i></span>
                    <input
                      type="tel"
                      id="accountName"
                      class="form-control"
                      placeholder="Full Account Name"
                      required
                    />
                    </div>
                  </div>

                  <div class="form-group col-xl-6 col-lg-6 col-md-6 col-sm-12">
                    <label for="bankName" class="pointer"
                      >Bank Name</label
                    >
                    <div class="input-group">
                      <span class="input-group-addon"><i class="fas fa-university"></i></span>
                    <input
                      type="tel"
                      id="bankName"
                      class="form-control"
                      placeholder="Bank Name"
                      required
                    />
                    </div>
                  </div>

                  <div class="form-group col-xl-6 col-lg-6 col-md-6 col-sm-12">
                    <label for="bankBranch" class="pointer"
                      >Bank Branch</label
                    >
                    <div class="input-group">
                      <span class="input-group-addon"><i class="fas fa-university"></i></span>
                    <input
                      type="tel"
                      id="bankBranch"
                      class="form-control"
                      placeholder="Bank Branch Name"
                      required
                    />
                    </div>
                  </div>

                  <div class="form-group col-xl-6 col-lg-6 col-md-6 col-sm-12">
                    <label for="accountNumber" class="pointer"
                      >Account Number</label
                    >
                    <div class="input-group">
                      <span class="input-group-addon"><i class="fas fa-sort-numeric-up-alt"></i></span>
                    <input
                      type="tel"
                      id="accountNumber"
                      class="form-control"
                      placeholder="Bank Account Number"
                      required
                    />
                    </div>
                  </div>

                  <div
                    class="form-group col-xl-6 col-lg-4 col-md-6 col-sm-12 text-center"
                  >
                    <p>Identification Proof</p>
                    <p>(Id, Citizenship, Driving License etc.)</p>
                    <div class="parent">
                      <label for="identificationProof" class="btn">
                        <span><i class="fas fa-cloud-upload-alt mr-2"></i></span
                        >Choose File
                        <input id="identificationProof" class="file-upload" type="file" hidden required/>
                      </label>
                        <p class="file-upload-filename "></p>
                    </div>
                    <p>(Max: 2MB)</p>
                  </div>
                  <div class="form-group col-xl-6 col-lg-4 col-md-6 col-sm-12 text-center">
                    <p>Education Certificate</p>
                    <p>(Accepts multiple files)</p>
                    <div class="parent">
                      <label for="educationCertificate" class="btn">
                        <span><i class="fas fa-cloud-upload-alt mr-2"></i></span
                        >Choose File
                        <input id="educationCertificate" class="file-upload" type="file" hidden required />
                      </label>
                      <p class="file-upload-filename"></p>
                    </div>
                    <p>(Max: 6MB)</p>
                  </div>
                  <!-- <div
                    class="form-group col-xl-4 col-lg-4 col-md-6 mx-auto col-sm-12 text-center"
                  >
                    <p>Payment Detail</p>
                    <div class="parent">
                      <label for="paymentDetails" class="btn">
                        <span><i class="fas fa-cloud-upload-alt mr-2"></i></span
                        >Choose File
                        <input id="paymentDetails" class="file-upload" type="file" hidden required />
                      </label>
                      <p class="file-upload-filename"></p>
                    </div>
                  </div> -->
                </div>
                <button type="button" class="d-block mx-auto mt-4 btn">
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
   
      var fileNames = document.querySelectorAll('.detail .file-upload');
      Array.from(fileNames).forEach(function(fileName){
        fileName.addEventListener('change',function(e){

          const exactfile = e.target.files[0].name;
          const write = $(e.target).parent().parent().find('.file-upload-filename');
          write.text(exactfile);    
    
      });
    });
    
    

    </script>
  </body>
</html>
