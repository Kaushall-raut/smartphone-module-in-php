<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Smartphone Store</title>
    <link rel="stylesheet" href="styles.css" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />
  </head>
  <body>
    <nav class="navbar">
      <div class="logo">
        <a href="#">SmartphoneStore</a>
      </div>
      <div class="search-bar">
        <input type="text" placeholder="Search for smartphones..." />
        <button type="submit">Search</button>
      </div>
      <div class="nav-links">
        <a href="index.html">Home</a>
        <a href="products.php">Products</a>
        <a href="#">Cart</a>
        <a href="#">Account</a>
      </div>
    </nav>
    <section>
      <div id="btn">
        <a href="add.html" id="add">  <button type="submit" class="btn btn-primary" id="">Add mobile</button>    </a>

      </div>

     <div>
     <table class="table container" border >
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">company</th>
      <th scope="col">model</th>
      <th scope="col">RAM</th>
      <th scope="col">price</th>
      <th scope="col">camera Zoom</th>
      <th scope="col">dual sim</th>
      <th scope="col">Buy</th>
    </tr>
  </thead>
  <tbody class="table-group-divider">
  <?php 
$conn=mysqli_connect("localhost","root","","assignments");


if($conn){

  $cmd="select * from `mobile`";

  $query=mysqli_query($conn,$cmd);
  while($result=mysqli_fetch_array($query)){
    // echo $result['company'];
?>
   <tr>
    <td><?php echo $result['id'] ?></td>
    <td><?php echo $result['company'] ?></td>
    <td><?php echo $result['model'] ?></td>
    <td><?php echo $result['RAM'] ?></td>
    <td><?php echo $result['price'] ?></td>
    <td><?php echo $result['camera zoom'] ?></td>
    <td> <?php echo $result['dual sim']==true?"yes":"no"; ?></td>
    <td><a href="bill.php?company=<?php echo $result['company']?>&model=<?php echo $result['model'] ?>&price=<?php echo $result['price'] ?>"><button type="button" class="btn btn-success">buy</button></a></td>
   </tr>
   
  </tbody>
  <?php 
}
  }
  ?>
</table>
     </div>
    </section>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
