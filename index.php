<?php 
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Movie-Web</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </head>
    <body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">

            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">

            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#">Features</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#">Pricing</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                </li>

                <li class="nav-item dropdown me-auto">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Dropdown link
                    </a>
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                      <li><a class="dropdown-item" href="#">Action</a></li>
                      <li><a class="dropdown-item" href="#">Another action</a></li>
                      <li><a class="dropdown-item" href="#">Something else here</a></li>
                  </ul>
                </li>
            </ul>

            </div>

        </div>

    </nav>

    <div class="album py-5 bg-light">
    <div class="container">

    <nav>
      <div class="nav nav-tabs" id="nav-tab" role="tablist">
        <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Home</button>
        <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Profile</button>
        <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Contact</button>
      </div>
    </nav>

      <div class="tab-content" id="nav-tabContent">
        <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">...</div>
        <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">...</div>
        <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">...</div>
      </div>


      <div class="row">

      <?php for($i=1;$i<=12;$i++){ ?>

        <div class="col-md-3">
          <div class="card mb-4 shadow-sm">
          <img src="https://www.fairy-anime.com/wp-content/uploads/2020/01/%E0%B8%99%E0%B8%B2%E0%B8%A3%E0%B8%B9%E0%B9%82%E0%B8%95%E0%B8%B0-%E0%B8%95%E0%B8%B3%E0%B8%99%E0%B8%B2%E0%B8%99%E0%B8%A7%E0%B8%B2%E0%B8%A2%E0%B8%B8%E0%B8%AA%E0%B8%A5%E0%B8%B2%E0%B8%95%E0%B8%B1%E0%B8%99-%E0%B9%80%E0%B8%94%E0%B8%AD%E0%B8%B0%E0%B8%A1%E0%B8%B9%E0%B8%9F%E0%B8%A7%E0%B8%B5%E0%B9%88-10-%E0%B8%9B%E0%B8%B4%E0%B8%94%E0%B8%95%E0%B8%B3%E0%B8%99%E0%B8%B2%E0%B8%99%E0%B8%A7%E0%B8%B2%E0%B8%A2%E0%B8%B8%E0%B8%AA%E0%B8%A5%E0%B8%B2%E0%B8%95%E0%B8%B1%E0%B8%99.jpg" alt="" width="100%" height="400"/> 
          <div class="card-body">
              <p class="card-text text-center">Naruto</p>
            </div>
          </div>
        </div>
      <?php } ?>

      <div class="btn-toolbar text-center" role="toolbar" aria-label="Toolbar with button groups" style="display: block;">
        <div class="btn-group me-2" role="group" aria-label="First group">
          <button type="button" class="btn btn-secondary">1</button>
          <button type="button" class="btn btn-secondary">2</button>
          <button type="button" class="btn btn-secondary">3</button>
          <button type="button" class="btn btn-secondary">4</button>
          <button type="button" class="btn btn-secondary">5</button>
          <button type="button" class="btn btn-secondary">6</button>
          <button type="button" class="btn btn-secondary">7</button>
          <button type="button" class="btn btn-secondary">8</button>
        </div>
      </div>

      </div> <!-- ROW -->

      </div> <!-- Container -->
      </div>

    <footer class="blog-footer text-center">
      <p>ดูหนัง ออนไลน์ฟรี ที่นี้เลย<a href="./"> Movie PHP</a></p>
    </footer>

    </body>
</html>