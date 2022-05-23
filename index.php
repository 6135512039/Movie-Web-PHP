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

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">

            <a class="navbar-brand" href="#">Movie-PHP</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">

            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">หน้าแรก</a>
                </li>

                <li class="nav-item dropdown me-auto">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      หมวดหมู่
                    </a>
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                      <li><a class="dropdown-item" href="#">Action</a></li>
                      <li><a class="dropdown-item" href="#">Another action</a></li>
                      <li><a class="dropdown-item" href="#">Something else here</a></li>
                  </ul>
                </li>
               
                <li class="nav-item">
                    <a class="nav-link" href="#">ติดต่อเรา</a>
                </li>
            </ul>
            </div>

            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            </form>
            &nbsp;&nbsp;
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit" style="display: flex;">ค้นหา</button>
                
        </div>

    </nav>

    <div class="album py-5 bg-light">
    <div class="container">

      <nav class="navbar navbar-light bg-dark" style="border-radius: 0.5rem;">
        <form class="container-fluid justify-content-start">
          <a class="nav-link" style="text-decoration: none; color: #fff;" href="#">หน้าแรก</a>
          &nbsp;
          <a class="nav-link" style="text-decoration: none; color: #fff;" href="#">ล่าสุด</a>
        </form>
      </nav>
      <br/>
      <div class="row">

      <?php for($i=1;$i<=12;$i++){ ?>

        <div class="col-md-3">
          <div class="card mb-4 shadow-sm">
            <a class="text-center" style="color: black; text-decoration: none;" href="./">
            <img src="https://www.fairy-anime.com/wp-content/uploads/2020/01/%E0%B8%99%E0%B8%B2%E0%B8%A3%E0%B8%B9%E0%B9%82%E0%B8%95%E0%B8%B0-%E0%B8%95%E0%B8%B3%E0%B8%99%E0%B8%B2%E0%B8%99%E0%B8%A7%E0%B8%B2%E0%B8%A2%E0%B8%B8%E0%B8%AA%E0%B8%A5%E0%B8%B2%E0%B8%95%E0%B8%B1%E0%B8%99-%E0%B9%80%E0%B8%94%E0%B8%AD%E0%B8%B0%E0%B8%A1%E0%B8%B9%E0%B8%9F%E0%B8%A7%E0%B8%B5%E0%B9%88-10-%E0%B8%9B%E0%B8%B4%E0%B8%94%E0%B8%95%E0%B8%B3%E0%B8%99%E0%B8%B2%E0%B8%99%E0%B8%A7%E0%B8%B2%E0%B8%A2%E0%B8%B8%E0%B8%AA%E0%B8%A5%E0%B8%B2%E0%B8%95%E0%B8%B1%E0%B8%99.jpg" alt="" width="100%" height="400" class="card-img-top"/> 
            
            <div class="card-body">
              <p class="card-text text-center">Naruto</p>
            </div>
            
            </a>
          </div>
        </div>
      <?php } ?>

      <div class="btn-toolbar text-center" role="toolbar" aria-label="Toolbar with button groups" style="display: block;">
        <div class="btn-group me-2" role="group" aria-label="First group">
          <button type="button" class="btn btn-dark">1</button>
          <button type="button" class="btn btn-dark">2</button>
          <button type="button" class="btn btn-dark">3</button>
          <button type="button" class="btn btn-dark">4</button>
          <button type="button" class="btn btn-dark">5</button>
          <button type="button" class="btn btn-dark">6</button>
          <button type="button" class="btn btn-dark">7</button>
          <button type="button" class="btn btn-dark">8</button>
        </div>
      </div>

      </div> <!-- ROW -->

      </div> <!-- Container -->
      </div>

    <footer class="text-center">
      <p class="bg-dark" style="margin: 0; color: #fff;">ดูหนัง ออนไลน์ฟรี ที่นี้เลย<a href="./" style="color: #fff; text-decoration: none;"> Movie PHP</a></p>
    </footer>

    </body>
</html>