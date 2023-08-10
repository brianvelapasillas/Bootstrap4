<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <link rel="stylesheet" href="css/footersimple.css">

    <title>Titles List</title>
  </head>
  <body>


<div class="container-fluid mb-2">
  <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #2E9604;">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
      <a class="navbar-brand" href="#">Hidden brand</a>
      <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
        <li class="nav-item active">
          <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled">Disabled</a>
        </li>
      </ul>
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>
    </div>
  </nav> 
</div> 




    <?php
      include 'conection.php';
      $consult = "SELECT * FROM titles";
      $result = mysqli_query($conection, $consult);
    ?>



    <!-- Agregamos Tabla -->
<div class="container">

  <div class="card border-primary mb-2 " >
    <div class="card-header">
      <a href="addTitle.php"class=" btn btn-outline-success">Add</a>
    </div>
  </div>    



<div class="card border-primary " >
    <div class="card-body">
        <table class="table table-bordered table-hover table-striped">
      <thead class="bg-success">
        <tr>
          <th scope="col">id_titles</th>
          <th scope="col">Title</th>
          <th scope="col">Type</th>
          <th scope="col">Price</th>
          <th scope="col">Down Payment</th>
          <th scope="col">Total Sales</th>
          <th scope="col">Publication Date</th>
          <th scope="col">Note</th>
          <th scope="col">id_editorials</th>
          <th scope="col">Modify</th>
          <th scope="col">Delete</th>
          <th scope="col">Consult</th>
        </tr>
      </thead>
      <tbody>

        <?php

          while($row = mysqli_fetch_array($result)){


            echo '<tr>';
            echo '<td>'.$row['id_titles'].'</td>';
            echo '<td>'.$row['title'].'</td>';
            echo '<td>'.$row['type'].'</td>';
            echo '<td>'.$row['price'].'</td>';
            echo '<td>'.$row['down_payment'].'</td>';
            echo '<td>'.$row['total_sales'].'</td>';
            echo '<td>'.$row['publication_date'].'</td>';
            echo '<td>'.$row['note'].'</td>';
            echo '<td>'.$row['id_editorials'].'</td>';
           echo '<td>'.'<a href= "modifyTitle.php?id_titles='.$row['id_titles'].'" class="btn btn-success">Modify</a>'.'</td>';
            echo '<td>'.'<a href= "eraseTitle.php?id_titles='.$row['id_titles'].'" class="btn btn-danger">Delete</a>'.'</td>';
            echo '<td>'.'<a href= "consultTitle.php?id_titles='.$row['id_titles'].'" class="btn btn-primary">Consult</a>'.'</td>';
            echo '</tr>';

          }
        ?>
      </tbody>
    </table>
    


    </div>

    <div class="card-footer bg-transparent">
            <nav aria-label="...">
        <ul class="pagination">
          <li class="page-item disabled">
            <a class="page-link">Previous</a>
          </li>
          <li class="page-item"><a class="page-link" href="#">1</a></li>
          <li class="page-item active" aria-current="page">
            <a class="page-link" href="#">2</a>
          </li>
          <li class="page-item"><a class="page-link" href="#">3</a></li>
          <li class="page-item">
            <a class="page-link" href="#">Next</a>
          </li>
        </ul>
      </nav>
  </div>

  </div> 


</div>


<div class="container-fluid">
    <div class="row footer">
        <div class="col-md-4 text-center">
          <h3>sistema de biblioteca</h3>
          <p>LeBron Raymone James Sr. (Akron, Ohio, 30 de diciembre de 1984) es un jugador de baloncesto estadounidense que actualmente pertenece a la plantilla de Los Angeles Lakers de la NBA. Con 2,06 metros de estatura</p>
        </div>

        <div class="col-md-4 text-center">
          <h3>Servicios</h3>
          <p>LeBron Raymone James Sr. (Akron, Ohio, 30 de diciembre de 1984) es un jugador de baloncesto estadounidense que actualmente pertenece a la plantilla de Los Angeles Lakers de la NBA. Con 2,06 metros de estatura</p>
        </div>

        <div class="col-md-4 text-center">
          <h3>Contacto</h3>
          <p>LeBron Raymone James Sr. (Akron, Ohio, 30 de diciembre de 1984) es un jugador de baloncesto estadounidense que actualmente pertenece a la plantilla de Los Angeles Lakers de la NBA. Con 2,06 metros de estatura</p>
        </div>
      
    </div>
</div>



    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

  </body>
</html>