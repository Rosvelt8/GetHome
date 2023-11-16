<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Agence Location</title>
    <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet" />
    <link
      href="assets/vendor/bootstrap/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link
      href="assets/vendor/bootstrap-icons/bootstrap-icons.css"
      rel="stylesheet"
    />
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet" />

    <!-- Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet" />
  </head>

  <body>
    <div class="click-closed"></div>
    <!--/ Form Search Star /-->
    <div class="box-collapse">
      <div class="title-box-d">
        <h3 class="title-d">Recherche des prestations</h3>
      </div>
      <span class="close-box-collapse right-boxed bi bi-x"></span>
      <div class="box-collapse-wrap form">
        <form method="GET" class="form-a">
          <div class="row">
            <div class="col-md-12 mb-2">
              <div class="form-group">
                <label class="pb-2" for="Type">Statut</label>
                <select
                  class="form-control form-select form-control-a"
                  id="Type" name="locationSearch"
                >
                <option value="Tout">Tout</option>
                <option value="A louer">A louer</option>
                <option value="A vendre">A vendre</option>
                </select>
              </div>
            </div>
            
            </div>
            <div class="col-md-12">
              <button type="submit" name="search" class="btn btn-b">Recherche des prestations</button>
            </div>
          </div>
        </form>
      </div>
    </div>
    <!-- End Property Search Section -->>

    <!-- ======= Header/Navbar ======= -->
    <nav class="navbar navbar-default navbar-trans navbar-expand-lg fixed-top">
      <div class="c1 container">
        <button
          class="navbar-toggler collapsed"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarDefault"
          aria-controls="navbarDefault"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span></span>
          <span></span>
          <span></span>
        </button>
        <a class="navbar-brand text-brand" href="index.html"
          >Agence<span class="color-b">Location</span></a
        >

        <div
          class="navbar-collapse collapse justify-content-center"
          id="navbarDefault"
        >
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" href="">Acceuil</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="allLocationPage.php">Prestations</a>
            </li>
            <?php if(isset($_SESSION['auth']) AND $_SESSION['statut'] != "Client"){ ?>

            <li class="nav-item">
              <a class="nav-link" href="my-location.php">Vos prestations</a>
            </li>
            <?php } ?>

            <li class="nav-item">
              <a class="nav-link" href="">Nos Agents</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="contact.html">Contact</a>
            </li>
          </ul>
        </div>

        <button
          type="button"
          class="btn btn-b-n navbar-toggle-box navbar-toggle-box-collapse"
          data-bs-toggle="collapse"
          data-bs-target="#navbarTogglerDemo01"
        >
          <i class="bi bi-search"></i>
        </button>
        <?php if($_SESSION['auth']) ?>
        <div class="drop1">
          <span class="bi bi-menu-app icon-others"></span>
          <div class="drop1_content">
          <?php if(isset($_SESSION['auth']) AND $_SESSION['statut'] != "Client"){ ?>
                <p><a href="AddLocationPage.php">Ajouter un Local</a></p>
            <?php }if(!$_SESSION['auth']){ ?>
                <p><a href="loginPage.php">Se connecter</a></p>
                <p><a href="signUpPage.php">S'inscrire</a></p>
                <?php }else{ ?>
                <p><a href="loginPage.php">Deconnecter</a></p>
                <?php } ?>
          </div>
        </div>
      </div>
    </nav>