<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Teachers' Detail</title>

    <!--CSS-->
    <link rel="stylesheet" href="./teacher-update-bank-details.css" />
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
    <section class="detail-section">
      <div class="container-md">
        <div class="row">
          <div class="card-group">
            <div class="col-lg-5 col-md-5 col-sm-12 text-center p-0">
            <div
              class="card info p-5 justify-content-center h-100 border-0"
            >
              <i class="fas fa-money-check fa-5x"></i>
              <h2 class="mt-5">Bank's Details</h2>
              <p>Connecting teachers with hundreds of students</p>
              <p>
               Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam accusamus omnis porro delectus voluptatibus consequuntur, sit et minus veritatis id?
              </p>
            </div>
            </div>
            <div class="col-lg-7 col-md-7 col-sm-12 p-0"> 
            <div class="card detail p-5 h-100 border-0">
              <h2 class="text-center">Bank's Details</h2>
              <form action="#" class="mt-3">
                <div class="form-row">

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

        
               
                </div>
                <button type="button" class="d-block mx-auto mt-4 btn">
                  Save Changes<span><i class="fas fa-paper-plane ml-2"></i></span>
                </button>
              </form>
            </div>
</div>
          </div>
        </div>
      </div>
    </section>
    <?php include "../../Footer/footer.php" ?>
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
