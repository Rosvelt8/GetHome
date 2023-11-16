<?php
session_start();
require('actions/location/getInfoOfEditedLocationAction.php');
require('actions/location/showActorInformationByLocation.php');
include("header.php");
?>


    <!-- End Header/Navbar -->

    <main id="main">
      <!-- ======= Intro Single ======= -->
      <section class="intro-single">
        <div class="container">
          <div class="row">
            <div class="col-md-12 col-lg-8">
              <div class="title-single-box">
                <h1 class="title-single"><?= $location_localisation ?></h1>
              </div>
            </div>
            <div class="col-md-12 col-lg-4">
              <nav
                aria-label="breadcrumb"
                class="breadcrumb-box d-flex justify-content-lg-end"
              >
                <ol class="breadcrumb">
                  <li class="breadcrumb-item">
                    <a href="index.html">Acceuil</a>
                  </li>
                  <li class="breadcrumb-item">
                    <a href="property-grid.html">Prestations</a>
                  </li>
                  <li class="breadcrumb-item active" aria-current="page">
                  <?= $location_localisation ?>
                  </li>
                </ol>
              </nav>
            </div>
          </div>
        </div>
      </section>
      <!-- End Intro Single-->

      <!-- ======= Property Single ======= -->
      <section class="property-single nav-arrow-b">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-8">
              <div id="property-single-carousel" class="swiper">
                <div class="swiper-wrapper">
                  <div class="carousel-item-b swiper-slide">
                    <img src="assets/locationImage/<?= $location_first_image ?>" alt="" />
                  </div>
                  <div class="carousel-item-b swiper-slide">
                    <img src="assets/locationImage/<?= $location_second_image ?>" alt="" />
                  </div>
                </div>
              </div>
              <div
                class="property-single-carousel-pagination carousel-pagination"
              ></div>
            </div>
          </div>

          <div class="row">
            <div class="col-sm-12">
              <div class="row justify-content-between">
                <div class="col-md-5 col-lg-4">
                  <div class="property-price d-flex justify-content-center foo">
                    <div class="card-header-c d-flex">
                      <div class="card-box-ico">
                        <span class="bi bi-cash">FCFA</span>
                      </div>
                      <div class="card-title-c align-self-center">
                        <h5 class="title-c"><?= $location_prix ?></h5>
                      </div>
                    </div>
                  </div>
                  <div class="property-summary">
                    <div class="row">
                      <div class="col-sm-12">
                        <div class="title-box-d section-t4">
                          <h3 class="title-d">Details</h3>
                        </div>
                      </div>
                    </div>
                    <div class="summary-list">
                      <ul class="list">
                        <li class="d-flex justify-content-between">
                          <strong>Localisation:</strong>
                          <span><?= $location_localisation ?></span>
                        </li>
                        <li class="d-flex justify-content-between">
                          <strong>Type:</strong>
                          <span><?= $location_type ?></span>
                        </li>
                        <li class="d-flex justify-content-between">
                          <strong>Statut:</strong>
                          <span><?= $location_statut ?></span>
                        </li>
                        <li class="d-flex justify-content-between">
                          <strong>Superficie:</strong>
                          <span
                            ><?= $location_superficie ?>m
                            <sup>2</sup>
                          </span>
                        </li>
                        <li class="d-flex justify-content-between">
                          <strong>Chambres:</strong>
                          <span><?= $location_chambre ?></span>
                        </li>
                        <li class="d-flex justify-content-between">
                          <strong>Douche:</strong>
                          <span><?= $location_douche ?></span>
                        </li>
                        <li class="d-flex justify-content-between">
                          <strong>Cuisine:</strong>
                          <span><?= $location_cuisine ?></span>
                        </li>
                        <li class="d-flex justify-content-between">
                          <strong>Chambre:</strong>
                          <span><?= $location_chambre ?></span>
                        </li>
                        <li class="d-flex justify-content-between">
                          <strong>Salon:</strong>
                          <span><?= $location_salon ?></span>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="col-md-7 col-lg-7 section-md-t3">
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="title-box-d">
                        <h3 class="title-d">Description de la prestation</h3>
                      </div>
                    </div>
                  </div>
                  <div class="property-description">
                    <p class="description color-text-a">
                    <?= $location_description ?>
                    </p>
                  </div>
                </div>
              </div>
            </div>
            
            </div>
            <div class="col-md-12">
              <div class="row section-t3">
                <div class="col-sm-12">
                  <div class="title-box-d">
                    <h3 class="title-d">Contact de l'agent</h3>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6 col-lg-4">
                  <img src="assets/img/agent-4.jpg" alt="" class="img-fluid" />
                </div>
                <div class="col-md-6 col-lg-4">
                  <div class="property-agent">
                    <h4 class="title-agent"><?= $actor_name. " ". $actor_surname ?></h4>
                    
                    <ul class="list-unstyled">
                      <li class="d-flex justify-content-between">
                        <strong>Phone:</strong>
                        <span class="color-text-a"><?= $actor_phone_number ?></span>
                      </li>
                      <li class="d-flex justify-content-between">
                        <strong>Email:</strong>
                        <span class="color-text-a"><?= $actor_email ?></span>
                      </li>
              
                      <li class="">
                      <a href="tel:<?= $actor_phone_number ?>" class="btn btn-a">
                            Appeler
                      </a>
                      
                      </li>
                      <br>
                      <li class="">
                  
                      <a href="mailto:<?= $actor_email ?>" class="btn btn-a">
                            Envoyer un message
                      </a>
                      </li>
                  
                    </ul>
              
                  </div>
                </div>
                
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- End Property Single-->
    </main>
    <!-- End #main -->

       <!-- ======= Footer ======= -->
<?php include("footer.php");?>