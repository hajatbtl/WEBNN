<!doctype html>
<html lang="en">

<?php include 'head.php' ?>


<body>
    <div  style="background-image: url('images/bg.png');     background-repeat: no-repeat; ">
        <div class="row  m-0">
            <div class="preheader"
                style=" line-height: 40px; height: 40px; background: linear-gradient(17deg, rgba(253,137,45,0.6156708533022583) 0%, rgba(244,93,255,0.6262811398973651) 23%, rgba(155,45,253,0.5226396833147322) 54%, rgba(34,193,195,0.5898665740710347) 100%); ">

                <p class="  text-white text-center">Notez-Nous fait peau neuve ! Nous sommes fiers de vous présenter
                    notre
                    nouveau
                    site internet</p>

            </div>
            <?php include 'header.php' ?>
        </div>

        <div class="container ">
            <div class="row mt-5 " style="text-align: center;">

                <p class="mt-5 gaegu" style="font-family: Gaegu; font-size: 24px;color: #1B66F9;"><strong>Pourquoi Notez-Nous ?</strong>
                </p>
                <h2 style="color: #000699;">Vous souhaitez en savoir plus ?</h2>
                <p style="color: #000699;">Contactez-nous en utilisant le formulaire ci-dessous et nous<br> reviendrons
                    vers vous dans les plus brefs délais.</p>


            </div>
            <!-- <div class="d-flex col-8 m-auto align-items-center mb-5 "
            style=" background-color:#EAECF0;  border-radius: 50px; width:100%;height:56px">
            <div class="col-6">
                <button class=""
                    style=" font-size:0.7rem !important;background-color:#fff; border:none; border-radius: 50px; width:100%;height:44px;">
                    Prise de Contact

                </button>
            </div>
            <div class="col-6">
                <button class="" style="font-size:0.7em !important; border:none;background-color:#EAECF0;  ">
                    Réserver une démo

                </button>
            </div>

        </div> -->



            <br>
            <div class="container mt-5 ">
                <div class="col-md-8 m-auto mb-5 text-center">
                    <ul class="gap-2 nav nav-tabs justify-content-center" id="myTabs"
                        style="background: #EAECF0; padding: 10px; border-radius: 29px;">

                        <li class="custom-button1">
                            <a class="active " data-toggle="tab" href="#tab1" style="color:#344054;">
                                Prise de Contact
                            </a>
                        </li>
                        <li class="custom-button2">
                            <a class=" " data-toggle="tab" href="#tab2" style="color:#344054;">
                                Réserver une démo
                            </a>
                        </li>
                    </ul>
                </div>


                <div class="tab-content mt-3">
                    <div id="tab1" class="tab-pane fade show active">
                        <div class="row">
                            <div style=" width:100%;border-radius:40px;"
                                class="mt-5 col-8 p-4 shadow-lg bg-body  m-auto bg-light">
                                <div class="row">

                                    <div class="col-md-6">
                                        <label style="color:#000699;"><strong>Nom</strong></label>
                                        <input
                                            style="border: 1px solid var(--blue-dark-100, #D1E0FF); width:100%;height:40px;border-radius: 28px;"></input>
                                    </div>
                                    <div class="col-md-6">
                                        <label style="color:#000699;"><strong>Email</strong></label>
                                        <input
                                            style="border: 1px solid var(--blue-dark-100, #D1E0FF); width:100%;height:40px;border-radius: 28px;"></input>
                                    </div>


                                </div>
                                <div class="row mt-2">

                                    <div class="col-md-6">
                                        <label style="color:#000699;"><strong>Tel</strong></label>
                                        <input
                                            style="border: 1px solid var(--blue-dark-100, #D1E0FF); width:100%;height:40px;border-radius: 28px;"></input>
                                    </div>
                                    <div class="col-md-6">
                                        <label style="color:#000699;"><strong>Société</strong></label>
                                        <input
                                            style="border: 1px solid var(--blue-dark-100, #D1E0FF); width:100%;height:40px;border-radius: 28px;"></input>
                                    </div>


                                </div>
                                <div class="row mt-2">

                                    <div class="col-md-12">
                                        <label style="color:#000699;"><strong>Message</strong></label>
                                        <input class=""
                                            style="border: 1px solid var(--blue-dark-100, #D1E0FF); width:100%;height:155px;border-radius: 28px;"></input>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="mb-3 mt-5 d-flex  justify-content-end ">
                                            <button style="color: #000699;border: none;border-radius: 50px;"
                                                class="btn px-4 btn-reset " type="button">Reinitialiser</button>

                                            <button id="btn-secteur-next" type="button" class="px-4 btn btn-primary"
                                                style="border: none;border-radius: 50px; background-color: #1B66F9; color: white;">Suivant</button>
                                        </div>

                                    </div>
                                </div>

                            </div>




                        </div>
                    </div>
                    <div id="tab2" class="tab-pane fade">
                        test
                    </div>
                </div>
            </div>
        </div>


    </div>
    </div>




</body>

<?php include 'footer.php' ?>
<!-- jQuery -->
<script src="as/plugins/jQuery/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<!-- Bootstrap JS -->
<script src="as/plugins/bootstrap/bootstrap.min.js"></script>
<!-- slick slider -->
<script src="as/plugins/slick/slick.min.js"></script>
<!-- venobox -->
<script src="as/plugins/Venobox/venobox.min.js"></script>
<!-- aos -->
<script src="as/plugins/aos/aos.js"></script>
<!-- Main Script -->
<script src="as/js/script.js"></script>


<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.sticky.js"></script>
<script src="js/main.js"></script>

</html>