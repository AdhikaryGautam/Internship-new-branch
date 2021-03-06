<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tutor Finder</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Style CSS -->
    <link rel="stylesheet" href="./student-courses-options.css">
     <link rel="stylesheet" href="../../../Header/header.css">
      <link rel="stylesheet" href="../../../Footer/footer.css">
    <!--fontawesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" />

    <!--AJAX AND JAVASCRIPT-->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    
   
</head>

<body>

<!--START OF PROFILES SECTION -->

<?php include "../../../Header/header.php" ?>

<section class="student-panel">
    <div class="container user-profile">
        <div class="row py-4 ">   
            <div class="col-12 col-sm-6 col-md-4">
                <div class="p-3 mx-auto card h-100" style="width:185px">
                    <img src="../../../assets/assignment.png" style="width:100px" class="mx-auto">
                    <h5 class=" text-center">Assignments</h5>
                    <a href="#" class="stretched-link"></a>
                </div>
            </div>

            <div class="col-12 col-sm-6 col-md-4 mt-3 mt-sm-0">
                <div class="card p-3 mx-auto" style="width:185px">
                    <img src="../../../assets/notes.png" style="width:100px" class="mx-auto">
                    <h5 class="card-title text-center">Notes</h5>
                    <a href="#" class="stretched-link"></a>
                </div>
            </div>

            <div class="col-12 col-sm-6 col-md-4 mt-3 mt-md-0">
                <div class="card p-3 mx-auto" style="width:185px">
                    <img src="../../../assets/megaphone.png" style="width:100px" class="mx-auto">
                    <h5 class="card-title text-center">Announcements</h5>
                    <a href="#" class="stretched-link"></a>
                </div>
            </div>

            <div class="col-12 col-sm-6 col-md-4 mt-3">
                <div class="card p-3 mx-auto " style="width:185px">
                    <img src="../../../assets/teacher.png" style="width:100px" class="mx-auto">
                    <h5 class="card-title text-center">Teacher Profile</h5>
                    <a href="#" class="stretched-link"></a>
                </div>
            </div>

            <div class="col-12 col-sm-6 col-md-4 mt-3">
                <div class="card p-3 mx-auto" style="width:185px">
                    <img src="../../../assets/calendar.png" style="width:100px" class="mx-auto">
                    <h5 class="card-title text-center">Calendar</h5>
                    <a href="#" class="stretched-link"></a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include "../../../Footer/footer.php" ?>

<!--Javascipt-->
    <script src="./js/script.js"></script>
    <!--JAVSCRIPT CDN OF BOOTSTRAP-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
        crossorigin="anonymous"></script>
</body>

</html>