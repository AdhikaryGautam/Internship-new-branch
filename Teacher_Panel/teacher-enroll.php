<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hire Requests</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- css -->
    <link rel="stylesheet" href="./teacher-enroll.css">


    <!--fontawesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" />

</head>

<body>
       <?php include "./header.php" ?>
    <section class="teacher-panel ">
        <div class="container enrollRequests mt-4">
            <div class="enrollRequest col-md-12 d-sm-inline-flex  justify-content-sm-between">

                <div>

                    <h5><span class="mr-2 icons"><i class="fas fa-user-graduate"></i></span>Lionel Messi
                    </h5>

                    <div class="d-sm-none">
                        <span class="badge badge-pill timing p-2">Student Home</span>
                        <span class="badge badge-pill badge-primary p-2">Pending</span>
                        <a href="tel:+977 9862259743" class="text-decoration-none d-block mt-2"><span class="icons"><i
                                    class="fas fa-phone-volume mr-2"></i></span>+977 9862259743</a>
                        <a href="https://mail.google.com/" class="text-decoration-none" target="_blank"><span class="icons"><i
                                    class="fas fa-envelope mr-2"></i></span>101infotech@gmail.com</a>
                    </div>

                    <div class="mt-3">
                        <p class="p-0 m-0 font-weight-bold">Grade: 8 (Group-12)</p>
                        <p class="font-weight-bold mb-0">Course: Science , Social Studies</p>
                        <p class="font-weight-bold mt-0 mb-1">Address: Nepaltar, Kathmandu</p>
                        <a href="#/" class="btn btns" data-toggle="modal" data-target="#one">Repsond</a>
                    </div>

                </div>

                <div class="d-none d-sm-block">
                    <span class="badge badge-pill timing p-2">Student Home</span>
                    <span class="badge badge-pill badge-primary p-2">Pending</span>
                    <p class="font-weight-bold mt-3 p-0 mb-0">Contacts: </p>
                    <a href="tel:+977 9862259743" class="text-decoration-none d-block"><span class="icons"><i
                                class="fas fa-phone-volume mr-2"></i></span>+977 9862259743</a>
                    <a href="https://mail.google.com/" class="text-decoration-none" target="_blank"><span class="icons"><i
                                class="fas fa-envelope mr-2"></i></span>101infotech@gmail.com</a>
                </div>

            </div>
            <hr>

            <!-- The Modal -->
            <div class="modal fade" id="one">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">

                        <!-- Modal Header -->
                        <div class="modal-header">
                            <h4 class="modal-title">Respond</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>

                        <!-- Modal body -->
                        <div class="modal-body">
                            <form action="#/"></form>
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Message:</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                            </div>

                            <div class="form-check-inline">
                              <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="optradio">Accept
                              </label>
                            </div>
                            <div class="form-check-inline">
                              <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="optradio">Reject
                              </label>
                            </div>
                            </form>
                        </div>

                        <!-- Modal footer -->
                        <div class="modal-footer">
                            <a href="#/" type="button" class="btn btn-primary">Send Message</a>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        </div>

                    </div>
                </div>
            </div>



            <div class="enrollRequest col-md-12 d-sm-inline-flex  justify-content-sm-between mt-3">

                <div>

                    <h5><span class="mr-2 icons"><i class="fas fa-user-graduate"></i></span>Lionel Messi
                    </h5>

                    <div class="d-sm-none">
                        <span class="badge badge-pill timing p-2">Student Home</span>
                        <span class="badge badge-pill badge-success p-2">Accepted</span>
                        <a href="tel:+977 9862259743" class="text-decoration-none d-block mt-2"><span class="icons"><i
                                    class="fas fa-phone-volume mr-2"></i></span>+977 9862259743</a>
                        <a href="https://mail.google.com/" class="text-decoration-none" target="_blank"><span class="icons"><i
                                    class="fas fa-envelope mr-2"></i></span>101infotech@gmail.com</a>
                    </div>

                    <div class="mt-3">
                        <p class="p-0 m-0 font-weight-bold">Grade: 8 (Group-12)</p>
                        <p class="font-weight-bold mb-0">Course: Science , Social Studies</p>
                        <p class="font-weight-bold mt-0 mb-1">Address: Nepaltar, Kathmandu</p>
                        <p class="font-weight-bold">Response: OK i can.</p>
                    </div>

                </div>

                <div class="d-none d-sm-block">
                    <span class="badge badge-pill timing p-2">Student Home</span>
                    <span class="badge badge-pill badge-success p-2">Accepted</span>
                    <p class="font-weight-bold mt-3 p-0 mb-0">Contacts: </p>
                    <a href="tel:+977 9862259743" class="text-decoration-none d-block"><span class="icons"><i
                                class="fas fa-phone-volume mr-2"></i></span>+977 9862259743</a>
                    <a href="https://mail.google.com/" class="text-decoration-none" target="_blank"><span class="icons"><i
                                class="fas fa-envelope mr-2"></i></span>101infotech@gmail.com</a>
                </div>

            </div>
            <hr>


            <div class="enrollRequest col-md-12 d-sm-inline-flex  justify-content-sm-between mt-3">

                <div>

                    <h5><span class="mr-2 icons"><i class="fas fa-user-graduate"></i></span>Lionel Messi
                    </h5>

                    <div class="d-sm-none">
                        <span class="badge badge-pill timing p-2">Teacher Home</span>
                        <span class="badge badge-pill badge-danger p-2">Rejected</span>
                        <a href="tel:+977 9862259743" class="text-decoration-none d-block mt-2"><span class="icons"><i
                                    class="fas fa-phone-volume mr-2"></i></span>+977 9862259743</a>
                        <a href="https://mail.google.com/" class="text-decoration-none" target="_blank"><span class="icons"><i
                                    class="fas fa-envelope mr-2"></i></span>101infotech@gmail.com</a>
                    </div>

                    <div class="mt-3">
                        <p class="p-0 m-0 font-weight-bold">Grade: 8 (Group-12)</p>
                        <p class="font-weight-bold mb-0">Course: Science , Social Studies</p>
                        <p class="font-weight-bold mt-0 mb-1">Address: Nepaltar, Kathmandu</p>
                        <p class="font-weight-bold">Response: Sorry i am not available.</p>
                    </div>

                </div>

                <div class="d-none d-sm-block">
                    <span class="badge badge-pill timing p-2">Teacher home</span>
                    <span class="badge badge-pill badge-danger p-2">Rejected</span>
                    <p class="font-weight-bold mt-3 p-0 mb-0">Contacts: </p>
                    <a href="tel:+977 9862259743" class="text-decoration-none d-block"><span class="icons"><i
                                class="fas fa-phone-volume mr-2"></i></span>+977 9862259743</a>
                    <a href="https://mail.google.com/" class="text-decoration-none" target="_blank"><span class="icons"><i
                                class="fas fa-envelope mr-2"></i></span>101infotech@gmail.com</a>
                </div>

            </div>
            <hr>

            <!-- The Modal -->
            <div class="modal fade" id="three">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">

                        <!-- Modal Header -->
                        <div class="modal-header">
                            <h4 class="modal-title">Respond</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>

                        <!-- Modal body -->
                        <div class="modal-body">
                            <form action="#/">
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Message:</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                            </div>
                            <div class="form-check-inline">
                              <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="optradio">Accept
                              </label>
                            </div>
                            <div class="form-check-inline">
                              <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="optradio">Reject
                              </label>
                            </div>
                            </form>
                        </div>

                        <!-- Modal footer -->
                        <div class="modal-footer">
                            <a href="#/" type="button" class="btn btn-primary">Send Message</a>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        </div>

                    </div>
                </div>
            </div>


            <div class="enrollRequest col-md-12 d-sm-inline-flex  justify-content-sm-between mt-3">

                <div>

                    <h5><span class="mr-2 icons"><i class="fas fa-user-graduate"></i></span>Lionel Messi
                    </h5>

                    <div class="d-sm-none">
                        <span class="badge badge-pill timing p-2">Teacher home</span>
                        <span class="badge badge-pill badge-primary p-2">Pending</span>
                        <a href="tel:+977 9862259743" class="text-decoration-none d-block mt-2"><span class="icons"><i
                                    class="fas fa-phone-volume mr-2"></i></span>+977 9862259743</a>
                        <a href="https://mail.google.com/" class="text-decoration-none" target="_blank"><span class="icons"><i
                                    class="fas fa-envelope mr-2"></i></span>101infotech@gmail.com</a>
                    </div>

                    <div class="mt-3">
                        <p class="p-0 m-0 font-weight-bold">Grade: 8 (Group-12)</p>
                        <p class="font-weight-bold mb-0">Course: Science , Social Studies</p>
                        <p class="font-weight-bold mt-0 mb-1">Address: Nepaltar, Kathmandu</p>
                        <a href="#/" class="btn btns" data-toggle="modal" data-target="#four">Repsond</a>
                    </div>

                </div>

                <div class="d-none d-sm-block">
                    <span class="badge badge-pill timing p-2">Teacher home</span>
                    <span class="badge badge-pill badge-primary p-2">Pending</span>
                    <p class="font-weight-bold mt-3 p-0 mb-0">Contacts: </p>
                    <a href="tel:+977 9862259743" class="text-decoration-none d-block"><span class="icons"><i
                                class="fas fa-phone-volume mr-2"></i></span>+977 9862259743</a>
                    <a href="https://mail.google.com/" class="text-decoration-none" target="_blank"><span class="icons"><i
                                class="fas fa-envelope mr-2"></i></span>101infotech@gmail.com</a>
                </div>

            </div>
            <hr>

            <!-- The Modal -->
            <div class="modal fade" id="four">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">

                        <!-- Modal Header -->
                        <div class="modal-header">
                            <h4 class="modal-title">Respond</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>

                        <!-- Modal body -->
                        <div class="modal-body">
                            <form action="#/">
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Message:</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                            </div>
                            <div class="form-check-inline">
                              <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="optradio">Accept
                              </label>
                            </div>
                            <div class="form-check-inline">
                              <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="optradio">Reject
                              </label>
                            </div>
                            </form>
                        </div>

                        <!-- Modal footer -->
                        <div class="modal-footer">
                            <a href="#/" type="button" class="btn btn-primary">Send Message</a>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        </div>

                    </div>
                </div>
            </div>


            <div class="enrollRequest col-md-12 d-sm-inline-flex  justify-content-sm-between mt-3">

                <div>

                    <h5><span class="mr-2 icons"><i class="fas fa-user-graduate"></i></span>Lionel Messi
                    </h5>

                    <div class="d-sm-none">
                        <span class="badge badge-pill timing p-2">Teacher home</span>
                        <span class="badge badge-pill badge-success p-2">Accepted</span>
                        <a href="tel:+977 9862259743" class="text-decoration-none d-block mt-2"><span class="icons"><i
                                    class="fas fa-phone-volume mr-2"></i></span>+977 9862259743</a>
                        <a href="https://mail.google.com/" class="text-decoration-none" target="_blank"><span class="icons"><i
                                    class="fas fa-envelope mr-2"></i></span>101infotech@gmail.com</a>
                    </div>

                    <div class="mt-3">
                        <p class="p-0 m-0 font-weight-bold">Grade: 8 (Group-12)</p>
                        <p class="font-weight-bold mb-0">Course: Science , Social Studies</p>
                        <p class="font-weight-bold mt-0 mb-1">Address: Nepaltar, Kathmandu</p>
                        <p class="font-weight-bold">Response: Ok i will contact you soon.</p>
                    </div>

                </div>

                <div class="d-none d-sm-block">
                    <span class="badge badge-pill timing p-2">Teacher home</span>
                    <span class="badge badge-pill badge-success p-2">Accepted</span>
                    <p class="font-weight-bold mt-3 p-0 mb-0">Contacts: </p>
                    <a href="tel:+977 9862259743" class="text-decoration-none d-block"><span class="icons"><i
                                class="fas fa-phone-volume mr-2"></i></span>+977 9862259743</a>
                    <a href="https://mail.google.com/" class="text-decoration-none" target="_blank"><span class="icons"><i
                                class="fas fa-envelope mr-2"></i></span>101infotech@gmail.com</a>
                </div>

            </div>
            <hr>

            <!-- The Modal -->
            <div class="modal fade" id="five">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">

                        <!-- Modal Header -->
                        <div class="modal-header">
                            <h4 class="modal-title">Respond</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>

                        <!-- Modal body -->
                        <div class="modal-body">
                            <form action="#/">
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Message:</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                            </div>
                            <div class="form-check-inline">
                              <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="optradio">Accept
                              </label>
                            </div>
                            <div class="form-check-inline">
                              <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="optradio">Reject
                              </label>
                            </div>
                            </form>
                        </div>

                        <!-- Modal footer -->
                        <div class="modal-footer">
                            <a href="#/" type="button" class="btn btn-primary">Send Message</a>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </section>



     <?php include "./footer.php" ?>



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