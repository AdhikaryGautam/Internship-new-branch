<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Teacher</title>


     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Style CSS -->
    <link rel="stylesheet" href="./teachers-search-panel.css">
    <!--fontawesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" />

    <!--AJAX AND JAVASCRIPT-->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>



</head>
<body>
    

    <?php include "./header.php" ?>


    <section class="student-panel">

        <div class="searchTeachers">
            

            <div class="row headers">
            

                <div class="col-sm-12">

                  <h3 >Teachers</h3>

                    <form action="#/" class="form searchForm mt-3">
                        <input class="form-control form-control-lg" type="search" placeholder="Search for Teacher..." aria-label="Search">
                        <button class="btn" type="search"><span class=""><i class="fas fa-search"></i></span></button>
                    </form>

                </div>

            </div>

            <hr class="mb-0">
    

            
                 <!-- DROPOWN FOR THE FILTER BELOW 992PX -->

                <div class="row mt-md-0 mt-5">
                    <div class="dropdown d-md-none d-block col-sm-12 m-0">
                        <h5 onclick="myFunction()" class="dropbtn d-block p-2">FILTER BY<span class="float-right mr-2"><i class="fas fa-chevron-down"></i></span></h5>
                        <div id="myDropdownss" class="dropdown-content">
                            <form action="#/" class="mr-2 p-2">

                                <p class="mb-0">Teaching Methodology:</p>

                                <div class="form-check mt-2">
                                    <input class="form-check-input" type="radio" name="methodologyFilter" id="Online" value="Online">
                                    <label class="form-check-label" for="Online">
                                        Online
                                    </label>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="methodologyFilter" id="Home" value="Home">
                                    <label class="form-check-label" for="Home">
                                        Home
                                    </label>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="methodologyFilter" id="Group" value="Group">
                                    <label class="form-check-label" for="Group">
                                        Group
                                    </label>
                                </div>

                                <p class="mb-0 mt-3">Location:</p>

                                <div class="form-group col-md-8 p-0 ">
                                    <select id="location" class="form-control mt-2">
                                        <option selected disabled>Location</option>
                                        <option>Kathmandu</option>
                                        <option>Chitwan</option>
                                        <option>Pokhara</option>
                                    </select>
                                </div>

                            </form>

                        </div>
                    </div>
                </div>
                    

                <!-- END OF DROPDOWN FOR FILTER BELOW 992PX -->
                
                
             <div class="row mt-md-5 mt-1">

                <div class="col-md-4  d-none d-md-block">

                    <div class="card filters mr-2 h-100">
                        <form action="#/" class="p-4">

                            <h5>Filter By : </h5>

                            <p class="mb-0">Teaching Methodology:</p>

                            <div class="form-check mt-2">
                                <input class="form-check-input" type="radio" name="methodologyFilter" id="Online" value="Online">
                                <label class="form-check-label" for="Online">
                                    Online
                                </label>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="methodologyFilter" id="Home" value="Home">
                                <label class="form-check-label" for="Home">
                                    Home
                                </label>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="methodologyFilter" id="Group" value="Group">
                                <label class="form-check-label" for="Group">
                                    Group
                                </label>
                            </div>

                    

                            <p class="mb-0 mt-3">Location:</p>

                            <div class="form-group col-lg-8 col-md-12 p-0 ">
                                <select id="location" class="form-control mt-2">
                                    <option selected disabled>Location</option>
                                    <option>Kathmandu</option>
                                    <option>Chitwan</option>
                                    <option>Pokhara</option>
                                </select>
                            </div>

                        </form>
                    
                    </div>



                </div>


                <div class="col-md-8 col-sm-12 p-0">


                    <div class="card container mainContent h-100">

                        <div class="row teacherLists p-3">

                            <div class="col-xl-4 col-sm-6 mt-4">

                                <div class="card h-100">
                                    <img src="./searchPic-1.jpg" class="card-img-top img-fluid" alt="">
                                    <div class="card-body">
                                        <div class="mr-3 d-inline">
                                            <h5 class="card-title d-inline">Sagar Chettri</h5>
                                            <a href="#/" data-toggle="tooltip" title="Active" class="d-inline text-decoration-none mt-2"><img src="./online.png" class="active mb-2" alt="Online" width="13px"></a>
                                        </div>
                                        <p class="badge badge-pill badge-primary p-2 d-inline-block mt-2">Available</p>
                                        <hr class="m-0">
                                        <p class="mb-0 mt-2 cardInfo">Address : Chitwan</p>
                                        <p class="mb-0 mt-2 cardInfo">Subjects : Maths , Science</p>
                                        <p class="mb-0 mt-2 cardInfo">Methodology : Online</p>
                                        <hr class="mb-2">

                                        <div class="text-center">
                                        <a href="#/" class="btn btns mt-2">View Profile</a>
                                        </div>   

                                    </div>
                                </div>

                            </div>

                            <div class="col-xl-4 col-sm-6 mt-4">

                                <div class="card h-100">
                                    <img src="./searchPic-2.jpg" class="card-img-top img-fluid" alt="">
                                    <div class="card-body">
                                        <div class="mr-3 d-inline">
                                            <h5 class="card-title d-inline">Sagar Chettri</h5>
                                            <a href="#/" data-toggle="tooltip" title="Offline" class="d-inline text-decoration-none mt-2"><img src="./offline.png" class="active mb-2" alt="Online" width="13px"></a>
                                        </div>
                                        <p class="badge badge-pill badge-primary p-2 d-inline-block mt-2">Available</p>
                                        <hr class="m-0">
                                        <p class="mb-0 mt-2 cardInfo">Address : Chitwan</p>
                                        <p class="mb-0 mt-2 cardInfo">Subjects : Maths , Science</p>
                                        <p class="mb-0 mt-2 cardInfo">Methodology : Online</p>
                                        <hr class="mb-2">

                                        <div class="text-center">
                                        <a href="#/" class="btn btns mt-2">View Profile</a>
                                        </div>  

                                    </div>
                                </div>

                            </div>


                             <div class="col-xl-4 col-sm-6 mt-4">

                                <div class="card h-100">
                                    <img src="./searchPic-3.jpg" class="card-img-top img-fluid" alt="">
                                    <div class="card-body">
                                        <div class="mr-3 d-inline">
                                            <h5 class="card-title d-inline">Sagar Chettri</h5>
                                            <a href="#/" data-toggle="tooltip" title="Active" class="d-inline text-decoration-none mt-2"><img src="./online.png" class="active mb-2" alt="Online" width="13px"></a>
                                        </div>
                                        <p class="badge badge-pill badge-danger p-2 d-inline-block mt-2">Booked</p>
                                        <hr class="m-0">
                                        <p class="mb-0 mt-2 cardInfo">Address : Chitwan</p>
                                        <p class="mb-0 mt-2 cardInfo">Subjects : Maths , Science</p>
                                        <p class="mb-0 mt-2 cardInfo">Methodology : Online</p>
                                        <hr class="mb-2">

                                        <div class="text-center">
                                        <a href="#/" class="btn btns mt-2">View Profile</a>
                                        </div>   

                                    </div>
                                </div>

                            </div>


                             <div class="col-xl-4 col-sm-6 mt-4">

                                <div class="card h-100">
                                    <img src="./searchPic-4.jpg" class="card-img-top img-fluid" alt="">
                                    <div class="card-body">
                                        <div class="mr-3 d-inline">
                                            <h5 class="card-title d-inline">Sagar Chettri</h5>
                                            <a href="#/" data-toggle="tooltip" title="Active" class="d-inline text-decoration-none mt-2"><img src="./online.png" class="active mb-2" alt="Online" width="13px"></a>
                                        </div>
                                        <p class="badge badge-pill badge-primary p-2 d-inline-block mt-2">Available</p>
                                        <hr class="m-0">
                                       <p class="mb-0 mt-2 cardInfo">Address : Chitwan</p>
                                        <p class="mb-0 mt-2 cardInfo">Subjects : Maths , Science</p>
                                        <p class="mb-0 mt-2 cardInfo">Methodology : Online</p>
                                        <hr class="mb-2">

                                        <div class="text-center">
                                        <a href="#/" class="btn btns mt-2">View Profile</a>
                                        </div>  

                                    </div>
                                </div>

                            </div>


                             <div class="col-xl-4 col-sm-6 mt-4">

                                <div class="card h-100">
                                    <img src="./searchPic-7.jpg" class="card-img-top img-fluid" alt="">
                                    <div class="card-body">
                                        <div class="mr-3 d-inline">
                                            <h5 class="card-title d-inline">Sagar Chettri</h5>
                                            <a href="#/" data-toggle="tooltip" title="Offline" class="d-inline text-decoration-none mt-2"><img src="./offline.png" class="active mb-2" alt="Online" width="13px"></a>
                                        </div>
                                        <p class="badge badge-pill badge-danger p-2 d-inline-block mt-2">Booked</p>
                                        <hr class="m-0">
                                        <p class="mb-0 mt-2 cardInfo">Address : Chitwan</p>
                                        <p class="mb-0 mt-2 cardInfo">Subjects : Maths , Science</p>
                                        <p class="mb-0 mt-2 cardInfo">Methodology : Online</p>
                                        <hr class="mb-2">

                                        <div class="text-center">
                                        <a href="#/" class="btn btns mt-2">View Profile</a>
                                        </div>  

                                    </div>
                                </div>

                            </div>


                             <div class="col-xl-4 col-sm-6 mt-4">

                                <div class="card h-100">
                                    <img src="./searchPic-6.jpg" class="card-img-top img-fluid" alt="">
                                    <div class="card-body">
                                        <div class="mr-3 d-inline">
                                            <h5 class="card-title d-inline">Sagar Chettri</h5>
                                            <a href="#/" data-toggle="tooltip" title="Offline" class="d-inline text-decoration-none mt-2"><img src="./offline.png" class="active mb-2" alt="Online" width="13px"></a>
                                        </div>
                                        <p class="badge badge-pill badge-primary p-2 d-inline-block mt-2">Available</p>
                                        <hr class="m-0">
                                        <p class="mb-0 mt-2 cardInfo">Address : Chitwan</p>
                                        <p class="mb-0 mt-2 cardInfo">Subjects : Maths , Science</p>
                                        <p class="mb-0 mt-2 cardInfo">Methodology : Online</p>
                                        <hr class="mb-2">

                                        <div class="text-center">
                                        <a href="#/" class="btn btns mt-2">View Profile</a>
                                        </div>  

                                    </div>
                                </div>

                            </div>


                            

                        </div>
                
                    </div>
                    
                </div>


            </div>

        </div>


    </section>








    <?php include "./footer.php" ?>

    <!--JAVSCRIPT CDN OF BOOTSTRAP-->

    <script>

    $(function () {
    $('[data-toggle="tooltip"]').tooltip()
    })
    function myFunction() {
        document.getElementById("myDropdownss").classList.toggle("d-block");
        }
</script>



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