<?php

 require 'config/connexion.php';

// echo $prodectId ;

?>
<?php require_once('template/header.php')?>

<!DOCTYPE html>
<html lang="en">

<head></head>
<body>
<?php 
$prodectId = $_GET['productId'];
$myquery = "SELECT * FROM produit where idProduit = '$prodectId'" ;
$outcome = mysqli_query($connet, $myquery) ;

while($row = mysqli_fetch_assoc($outcome)){
  ?>
    <main>
 <div class="container-fluid pt-5">

   <div class="row">
    <div class="col-sm-6">
    
    <img src="<?php echo $row['image']; ?>" class="img" alt="" />
     
    </div>

    <div class="col-sm-6">

     <h1><?php echo $row['libelle']; ?></h1>

     <p>$<?php echo number_format( $row['prix'],2) ; ?></p>
        <div class="product-rating--stars">

         <span class="fa fa-star checked"></span>
         <span class="fa fa-star checked"></span>
         <span class="fa fa-star checked"></span>
         <span class="fa fa-star"></span>
         <span class="fa fa-star"></span>

        </div>

        <div class="pt-4">    

         <input type="number" class="form-control" placeholder="1">

        </div> 

        <div class="pt-4">

         <button type="button" id="addTocart" class="btn btn-outline-primary">ADD TO CART</button>

        </div>    

        <div class="pt-4">

         <p><?php echo $row['description']; ?></p>
        
        </div>  

    </div>            
  </div>

 </div>
</main>

  <?php
}

?>



    

<?php require_once('template/footer_products_panier.php')?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>

</body>
</html>