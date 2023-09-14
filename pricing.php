<!doctype html>
<html lang="en">

<?php include 'head.php' ?>


<body>
    <div class="preheader"
        style=" line-height: 40px; height: 40px; background: linear-gradient(17deg, rgba(253,137,45,0.6156708533022583) 0%, rgba(244,93,255,0.6262811398973651) 23%, rgba(155,45,253,0.5226396833147322) 54%, rgba(34,193,195,0.5898665740710347) 100%); ">

        <p class="  text-white text-center">Notez-Nous fait peau neuve ! Nous sommes fiers de vous présenter notre
            nouveau
            site internet</p>

    </div>
    <?php include 'header.php' ?>
    <div class="mt-5">
        <div class="col-12 mt-3"
            style="background-size: contain; background-position:right;  background-repeat: no-repeat;background-image: url('images/p3.png');">
            <div style="border-radius:40px;">
                <section class="  pt-5 m-auto">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">

                                <h2 class="section-title mt-3" style="color: #000699;"><strong>Laissez-vous guider afin
                                        d'obtenir les informations tarifaires les prix
                                        juste pour chaque activitées</strong></h2>
                                <p class="" style="color: #000699;">Lorem ipsum dolor sit amet, consectetur
                                    adipiscing elit. Donec posuere auctor dui sit
                                    amet egestas. Pellentesque massa augue, sodales sed iaculis vel, malesuada vel
                                    tellus. </p>
                                <div class="mt-3 d-flex align-items-center ">
                                    <img src="images/p1.png" alt="" style="max-width: 10%;">
                                    <p class="ml-2 mt-2" style="color:#4245a2;">Essayez comme +350 entreprises !</p>
                                </div>
                            </div>
                            <div class="col-md-6 wh-100">



                                <!-- partie secteur -->
                                <div id="secteur" style="height:580px;border-radius:40px;"
                                    class="shadow-lg p-3 mb-5 bg-body   m-auto bg-light">
                                    <div class="row" style="text-align: center">
                                        <div style="">
                                            <h6 class="mb-3" style="color: #000699"><strong>Tarification</strong> </h6>

                                            <div class="mb-3 d-flex gap-1 justify-content-center ">

                                                <div class=""
                                                    style=" Width:20px;height: 4px;border-radius: 2px;background: var(--blue-regular, #1B66F9);">
                                                </div>
                                                <div class=""
                                                    style=" Width:20px;height: 4px;border-radius: 2px;background: var(--blue-regular, #CCDDFF);">
                                                </div>
                                                <div class=""
                                                    style=" Width:20px;height: 4px;border-radius: 2px;background: var(--blue-regular, #CCDDFF);">
                                                </div>
                                                <div class=""
                                                    style=" Width:20px;height: 4px;border-radius: 2px;background: var(--blue-regular, #CCDDFF);">
                                                </div>



                                            </div>
                                            <p class="fs-6 mb-4 mt-2" style="color: #000699 ">Quels est votre secteur
                                                d’activitée ?
                                            </p>
                                            <div class="row  justify-content-center">
                                                <div class="col-6">
                                                    <a class="btnpricing p-3" id="btn-sante" href="#contact">
                                                        👨🏻‍⚕️ La santé
                                                    </a>
                                                </div>
                                                <div class="col-6 ">
                                                    <a class="btnpricing p-3" id="btn-formation" href="#contact">
                                                        🏗️ La formation
                                                    </a>
                                                </div>
                                                <div class="col-6 mt-2">
                                                    <a class="btnpricing p-3" id="btn-autre" href="#contact">
                                                        👀 Autres
                                                    </a>
                                                </div>
                                                <div class="col-6 mt-2">
                                                    <a class="btnpricing p-3" id="btn-artisant" href="#contact">
                                                        📚Artisant
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="mb-3 mt-5 d-flex  justify-content-end ">
                                                <button style="color: #000699;border: none;border-radius: 50px;"
                                                    class="btn px-4 btn-reset " type="button">Reinitialiser</button>

                                                <button id="btn-secteur-next" type="button" class="px-4 btn btn-primary"
                                                    style="border: none;border-radius: 50px; background-color: #1B66F9; color: white;">Suivant</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- partie métier -->
                                <div id="sante" style="height:580px;border-radius:40px; display: none;"
                                    class="shadow-lg p-3 mb-5 bg-body   m-auto bg-light">
                                    <div class="row" style="text-align: center">
                                        <div>
                                            <h6 class="mb-3" style="color: #000699"><strong>Tarification</strong> </h6>

                                            <div class="mb-3 d-flex gap-1 justify-content-center ">

                                                <div class=""
                                                    style=" Width:20px;height: 4px;border-radius: 2px;background: var(--blue-regular, #1B66F9);">
                                                </div>
                                                <div class=""
                                                    style=" Width:20px;height: 4px;border-radius: 2px;background: var(--blue-regular,#1B66F9);">
                                                </div>
                                                <div class=""
                                                    style=" Width:20px;height: 4px;border-radius: 2px;background: var(--blue-regular, #CCDDFF);">
                                                </div>
                                                <div class=""
                                                    style=" Width:20px;height: 4px;border-radius: 2px;background: var(--blue-regular, #CCDDFF);">
                                                </div>



                                            </div>
                                            <p class="fs-6 mb-4 mt-2" style="color: #000699 ">Quels logiciel métier
                                                utiliser vous ?
                                            </p>
                                            <div class="row  ">
                                                <div class="col-md-6">
                                                    <a class="btnpricing p-3 " href="#contact" id="btn-veasy">
                                                        <img class="mr-2" src="images/veasy.png" alt=""
                                                            style="max-width: 20%;"> Veasy
                                                    </a>
                                                </div>
                                                <div class="col-md-6 ">
                                                    <a class="btnpricing p-3" href="#contact" id="btn-orthalis">
                                                        <img class="mr-2" src="images/orthalis.png" alt=""
                                                            style="max-width: 20%;"> Orhalis
                                                    </a>
                                                </div>
                                                <div class="col-md-6 mt-2">
                                                    <a class="btnpricing p-3" href="#contact" id="btn-orthokis">
                                                        <img class="mr-2" src="images/orthokis.png" alt=""
                                                            style="max-width: 20%;"> Orthokis
                                                    </a>
                                                </div>
                                                <div class="col-md-6 mt-2">
                                                    <a class="btnpricing p-3" href="#contact" id="btn-custom">
                                                        <img class="mr-2" src="images/custom.png" alt=""
                                                            style="max-width: 20%;">Custom
                                                    </a>
                                                </div>

                                            </div>


                                            <div class="mb-3 mt-5 d-flex  justify-content-end ">

                                                <button style="color: #000699;border: none;border-radius: 50px;"
                                                    class="btn px-4 btn-reset " type="button">Reinitialiser</button>

                                                <button type="button" class="px-4 btn btn-primary" id="btn-sante-next"
                                                    style="border: none;border-radius: 50px; background-color: #1B66F9; color: white;">Suivant</button>
                                            </div>

                                        </div>
                                    </div>

                                </div>
                                <!-- partie établissements -->

                                <div id="formation" style="border-radius:40px;display: none;"
                                    class="shadow-lg p-3 mb-5 bg-body   m-auto bg-light">
                                    <div class="row" style="text-align: center">

                                        <div>
                                            <h6 class="mb-3" style="color: #000699"><strong>Tarification</strong> </h6>

                                            <div class="mb-3 d-flex gap-1 justify-content-center ">

                                                <div class=""
                                                    style=" Width:20px;height: 4px;border-radius: 2px;background: var(--blue-regular, #1B66F9);">
                                                </div>
                                                <div class=""
                                                    style=" Width:20px;height: 4px;border-radius: 2px;background: var(--blue-regular, #1B66F9);">
                                                </div>
                                                <div class=""
                                                    style=" Width:20px;height: 4px;border-radius: 2px;background: var(--blue-regular, #1B66F9);">
                                                </div>
                                                <div class=""
                                                    style=" Width:20px;height: 4px;border-radius: 2px;background: var(--blue-regular, #CCDDFF);">
                                                </div>



                                            </div>
                                            <p class="fs-6 mb-4 mt-2" style="color: #000699 ">Quels types
                                                d’établissements ?
                                            </p>
                                            <div class="row  justify-content-center">
                                                <div class="col-md-6">
                                                    <a class="btnpricing p-3" id="btn-moinp" href="#contact">
                                                        👨🏻‍⚕️ Moins de 2 practiciens
                                                    </a>
                                                </div>
                                                <div class="col-md-6 ">
                                                    <a class="btnpricing p-3 " id="btn-plusp" href="#contact">
                                                        🏥 Plus de 3 pratciens
                                                    </a>
                                                </div>



                                            </div>



                                            <div class="mb-3 mt-5 d-flex  justify-content-end ">

                                                <button style="color: #000699;border: none;border-radius: 50px;"
                                                    class="btn px-4 btn-reset " type="button">Reinitialiser</button>

                                                <button id="btn-plusp-next" type="button" class="px-4 btn btn-primary"
                                                    style="border: none;border-radius: 50px; background-color: #1B66F9; color: white;">Suivant</button>
                                            </div>

                                        </div>
                                    </div>

                                </div>
                                <!-- partie autre -->


                                <div id="autre"
                                    style="display: none; border-radius:40px;background: linear-gradient(7deg, #ED7C14 55%, #FAEB98 100%);"
                                    class="shadow-lg p-3 mb-5 bg-body   m-auto bg-light">
                                    <div class="row" style="text-align: center">

                                        <div style=" ">
                                            <h6 class="mb-3" style="color: #fff"><strong>Tarification</strong> </h6>

                                            <div class="mb-3 d-flex gap-1 justify-content-center ">

                                                <div class=""
                                                    style=" Width:20px;height: 4px;border-radius: 2px;background: var(--blue-regular, #fff);">
                                                </div>
                                                <div class=""
                                                    style=" Width:20px;height: 4px;border-radius: 2px;background: var(--blue-regular, #fff);">
                                                </div>
                                                <div class=""
                                                    style=" Width:20px;height: 4px;border-radius: 2px;background: var(--blue-regular, #fff);">
                                                </div>
                                                <div class=""
                                                    style=" Width:20px;height: 4px;border-radius: 2px;background: var(--blue-regular, #fff);">
                                                </div>



                                            </div>
                                            <h2 class=" mb-4 mt-2" style="color: #fff ">49€/mois</h2>
                                            <div class="m-5">
                                                <div class="mt-3 d-flex align-items-center ">
                                                    <img src="images/i1.png" alt="" style="max-width: 5%;">
                                                    <p class="ml-2 mt-2 " style="color:#fff;font-size:16px;">Essayez
                                                        comme +350 entreprises !</p>
                                                </div>
                                                <div class=" d-flex align-items-center ">
                                                    <img src="images/i2.png" alt="" style="max-width: 5%;">
                                                    <p class="ml-2 mt-2 " style="color:#fff;font-size:16px;">Envoi et
                                                        relance automatique, manuel ou planifié</p>
                                                </div>
                                                <div class=" d-flex align-items-center ">
                                                    <img src="images/i3.png" alt="" style="max-width: 5%;">
                                                    <p class="ml-2 mt-2 " style="color:#fff;font-size:16px;">
                                                        Statistiques et messagerie</p>
                                                </div>
                                                <div class="d-flex align-items-center ">
                                                    <img src="images/i4.png" alt="" style="max-width: 5%;">
                                                    <p class="ml-2 mt-2 " style="color:#fff;font-size:16px;">Module de
                                                        gestion des avis Google</p>
                                                </div>
                                            </div>


                                            <div class="pl-5 pr-5">
                                                <div class="row">


                                                    <button type="button" class=" btn btn-primary"
                                                        style="border: none;border-radius: 50px; background-color: #fff; color: #1B66F9;">Suivant</button>
                                                </div>

                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <!-- partie orthalis -->


                                <div id="orthalis"
                                    style="border-radius: 40px; display: none;     background-color: #ef7827 !important;"
                                    class="shadow-lg p-3 mb-5 bg-body m-auto bg-light">
                                    <div class="row" style="text-align: center">

                                        <!-- Image in the top-right corner -->
                                        <img class="mr-2" src="images/orthalis.png" alt=""
                                            style="max-width: 20%; position: absolute; top: 39px; right:12px;">

                                        <div style="">
                                            <h6 class="mb-3" style="color: #fff"><strong>Tarification</strong> </h6>

                                            <div class="mb-3 d-flex gap-1 justify-content-center">
                                                <div class=""
                                                    style=" Width:20px;height: 4px;border-radius: 2px;background: var(--blue-regular, #fff);">
                                                </div>
                                                <div class=""
                                                    style=" Width:20px;height: 4px;border-radius: 2px;background: var(--blue-regular, #fff);">
                                                </div>
                                                <div class=""
                                                    style=" Width:20px;height: 4px;border-radius: 2px;background: var(--blue-regular, #fff);">
                                                </div>
                                                <div class=""
                                                    style=" Width:20px;height: 4px;border-radius: 2px;background: var(--blue-regular, #fff);">
                                                </div>
                                            </div>
                                            <h2 class=" mb-4 mt-2" style="color: #fff ">49€/mois</h2>
                                            <div class="m-5">
                                                <div class="mt-3 d-flex align-items-center ">
                                                    <img src="images/i1.png" alt="" style="max-width: 5%;">
                                                    <p class="ml-2 mt-2 " style="color:#fff;font-size:16px;">Essayez
                                                        comme +350 entreprises !</p>
                                                </div>
                                                <div class=" d-flex align-items-center ">
                                                    <img src="images/i2.png" alt="" style="max-width: 5%;">
                                                    <p class="ml-2 mt-2 " style="color:#fff;font-size:16px;">Envoi et
                                                        relance automatique, manuel ou planifié</p>
                                                </div>
                                                <div class=" d-flex align-items-center ">
                                                    <img src="images/i3.png" alt="" style="max-width: 5%;">
                                                    <p class="ml-2 mt-2 " style="color:#fff;font-size:16px;">
                                                        Statistiques et messagerie</p>
                                                </div>
                                                <div class="d-flex align-items-center ">
                                                    <img src="images/i4.png" alt="" style="max-width: 5%;">
                                                    <p class="ml-2 mt-2 " style="color:#fff;font-size:16px;">Module de
                                                        gestion des avis Google</p>
                                                </div>
                                            </div>

                                            <div class="pl-5 pr-5">
                                                <div class="row">
                                                    <button type="button" class=" btn btn-primary"
                                                        style="border: none;border-radius: 50px; background-color: #fff; color: #1B66F9;">Suivant</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <!-- plusp -->


                                <div id="plusp"
                                    style="height:580px; border-radius: 40px; display: none;   background: linear-gradient(17deg, rgba(253,137,45,0.6156708533022583) 0%, rgba(244,93,255,0.6262811398973651) 23%, rgba(155,45,253,0.5226396833147322) 54%, rgba(34,193,195,0.5898665740710347) 100%); !important;"
                                    class="shadow-lg p-3 mb-5 bg-body m-auto bg-light">
                                    <div class="row" style="text-align: center">

                                        <!-- Image in the top-right corner -->

                                        <div style="">
                                            <h6 class="mb-3" style="color: #fff"><strong>Tarification</strong> </h6>

                                            <div class="mb-3 d-flex gap-1 justify-content-center">
                                                <div class=""
                                                    style=" Width:20px;height: 4px;border-radius: 2px;background: var(--blue-regular, #fff);">
                                                </div>
                                                <div class=""
                                                    style=" Width:20px;height: 4px;border-radius: 2px;background: var(--blue-regular, #fff);">
                                                </div>
                                                <div class=""
                                                    style=" Width:20px;height: 4px;border-radius: 2px;background: var(--blue-regular, #fff);">
                                                </div>
                                                <div class=""
                                                    style=" Width:20px;height: 4px;border-radius: 2px;background: var(--blue-regular, #fff);">
                                                </div>
                                            </div>
                                            <h2 class=" mb-4 mt-2" style="color: #fff ">89€/mois</h2>
                                            <p style="color: #fff ">Frais d'installation: 249€ 149€HT</p>
                                            <p style="color: #fff ">Inscription, installation et formation par nos
                                                équipes</p>
                                            <div class="m-5">
                                                <div class="mt-3 d-flex align-items-center ">
                                                    <img src="images/i1.png" alt="" style="max-width: 5%;">
                                                    <p class="ml-2 mt-2 " style="color:#fff;font-size:16px;">Essayez
                                                        comme +350 entreprises !</p>
                                                </div>
                                                <div class=" d-flex align-items-center ">
                                                    <img src="images/i2.png" alt="" style="max-width: 5%;">
                                                    <p class="ml-2 mt-2 " style="color:#fff;font-size:16px;">Envoi et
                                                        relance automatique, manuel ou planifié</p>
                                                </div>
                                                <div class=" d-flex align-items-center ">
                                                    <img src="images/i3.png" alt="" style="max-width: 5%;">
                                                    <p class="ml-2 mt-2 " style="color:#fff;font-size:16px;">
                                                        Statistiques et messagerie</p>
                                                </div>
                                                <div class="d-flex align-items-center ">
                                                    <img src="images/i4.png" alt="" style="max-width: 5%;">
                                                    <p class="ml-2 mt-2 " style="color:#fff;font-size:16px;">Module de
                                                        gestion des avis Google</p>
                                                </div>
                                                <div class="d-flex align-items-center ">
                                                    <img src="images/i5.png" alt="" style="max-width: 5%;">
                                                    <p class="ml-2 mt-2 " style="color:#fff;font-size:16px;">
                                                        Multi-comptes / Profiles</p>
                                                </div>
                                            </div>

                                            <div class="pl-5 pr-5">
                                                <div class="row">
                                                    <button type="button" class=" btn btn-primary"
                                                        style="border: none;border-radius: 50px; background-color: #fff; color: #1B66F9;">Suivant</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- moinp -->


                                <div id="moinp"
                                    style="border-radius: 40px; display: none;   background: linear-gradient(17deg, rgba(253,137,45,0.6156708533022583) 0%, rgba(244,93,255,0.6262811398973651) 23%, rgba(155,45,253,0.5226396833147322) 54%, rgba(34,193,195,0.5898665740710347) 100%); !important;"
                                    class="shadow-lg p-3 mb-5 bg-body m-auto bg-light">
                                    <div class="row" style="text-align: center">

                                        <!-- Image in the top-right corner -->
                                        <img class="mr-2" src="images/orthalis.png" alt=""
                                            style="max-width: 20%; position: absolute; top: 39px; right:12px;">

                                        <div style="">
                                            <h6 class="mb-3" style="color: #fff"><strong>Tarification</strong> </h6>

                                            <div class="mb-3 d-flex gap-1 justify-content-center">
                                                <div class=""
                                                    style=" Width:20px;height: 4px;border-radius: 2px;background: var(--blue-regular, #fff);">
                                                </div>
                                                <div class=""
                                                    style=" Width:20px;height: 4px;border-radius: 2px;background: var(--blue-regular, #fff);">
                                                </div>
                                                <div class=""
                                                    style=" Width:20px;height: 4px;border-radius: 2px;background: var(--blue-regular, #fff);">
                                                </div>
                                                <div class=""
                                                    style=" Width:20px;height: 4px;border-radius: 2px;background: var(--blue-regular, #fff);">
                                                </div>
                                            </div>
                                            <h2 class=" mb-4 mt-2" style="color: #fff ">89€/mois</h2>
                                            <p style="color: #fff ">Frais d'installation: 249€ 149€HT</p>
                                            <p style="color: #fff ">Inscription, installation et formation par nos
                                                équipes</p>
                                            <div class="m-5">
                                                <div class="mt-3 d-flex align-items-center ">
                                                    <img src="images/i1.png" alt="" style="max-width: 5%;">
                                                    <p class="ml-2 mt-2 " style="color:#fff;font-size:16px;">Essayez
                                                        comme +350 entreprises !</p>
                                                </div>
                                                <div class=" d-flex align-items-center ">
                                                    <img src="images/i2.png" alt="" style="max-width: 5%;">
                                                    <p class="ml-2 mt-2 " style="color:#fff;font-size:16px;">Envoi et
                                                        relance automatique, manuel ou planifié</p>
                                                </div>
                                                <div class=" d-flex align-items-center ">
                                                    <img src="images/i3.png" alt="" style="max-width: 5%;">
                                                    <p class="ml-2 mt-2 " style="color:#fff;font-size:16px;">
                                                        Statistiques et messagerie</p>
                                                </div>
                                                <div class="d-flex align-items-center ">
                                                    <img src="images/i4.png" alt="" style="max-width: 5%;">
                                                    <p class="ml-2 mt-2 " style="color:#fff;font-size:16px;">Module de
                                                        gestion des avis Google</p>
                                                </div>
                                                <div class="d-flex align-items-center ">
                                                    <img src="images/i5.png" alt="" style="max-width: 5%;">
                                                    <p class="ml-2 mt-2 " style="color:#fff;font-size:16px;">
                                                        Multi-comptes / Profiles</p>
                                                </div>
                                            </div>

                                            <div class="pl-5 pr-5">
                                                <div class="row">
                                                    <button id="btn-moinp-next" type="button" class=" btn btn-primary"
                                                        style="border: none;border-radius: 50px; background-color: #fff; color: #1B66F9;">Suivant</button>
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
        </div>
    </div>













<div class="ftr"></div>
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