<!DOCTYPE html> 
<html lang="en">
     
<head>
         <meta charset="UTF-8">
          <meta http-equiv="X-UA-Compatible" content="IE=edge">
           <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
           <title>PET MANSION</title>
           
           <link href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" rel="stylesheet">
           
           <link rel="stylesheet" href=
        </head>

         <body>

<section id="header">
                 <a href="#"><img src="img/logo.jpg" class="logo" alt=""></a>
                 <div>
                     <ul id="navbar"> 
                        <li><a href="./index.php"> Home </a></li>
                        <li><a class="active" href="./shop.php"> Shop </a></li> 
                        <li><a href="./training.php"> Training & Grooming </a></li>
                        <li><a href="contact.html"> Contact </a></li>
                        <li><a href="./cart.php"> Cart </a></li>
                        <li><a href="./cart.php"><i class="fa-thin fa-cart-shopping"></i>
                           
                      </a></li> 
                      <li><a href="./cart.php">Log Out</a></li>
                        </ul>
                    </div>
   </section>

<section id="page-header"> 
                  
                   <h2>#stayhome</h2>
                    
                     <p>Save more with coupons & up to 70% off!</p>
                      
   </section> 
                     
 <section id="product1" class="section-p1">
      <div class="pro-container">
      <?php
        $query = "SELECT * FROM supitem WHERE status='Approved'";
        $query_run = mysqli_query($connection,$query);

        if(mysqli_num_rows($query_run) > 0)
        {
          foreach($query_run as $row)
          { 
            $product=$row['image'];
            $price=$row['price'];
            $name=$row['itemname'];
            $compname=$row['compname'];
            $link = $row['link'];
      ?>
       
        <div class="pro" onclick="window.location.href='productPage.php?productName=<?php echo $name ?> ';">
          <img src="<?php echo 'prd/'.$product;?>" alt=""> 
          <div class="des">
            <span><?php echo $compname ?></span>
            <h5><?php echo $name ?></h5>
              <div class="star">
                <i class="fa fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fas fa-star"></i> 
                <i class="fas fa-star"></i>
              </div>
              <h4><?php echo "Rs.".$price ?></h4>
          </div>
          <a href="#"><i class="fal fa-shopping-cart cart"></i></a> 
        </div>
      <?php
          }
        }
      ?>
    </div>
  </section>
      <section id="pagination" class="section-p1">
        <a href="#"> 1 </a>
        <a href="#"> 2 </a>
        <a href="#"><i class="fal fa-long-arrow-alt-right"></i></a>
        </section>

      <footer class="section-p1"> 
         <div class="col"> 
             <h4>Contact</h4> <p><strong>Address: </strong> 562 Wellington Road, Street 32, San Francisco</p> 
             <p><strong>Phone:</strong> +01 2222 365 /(+91) 01 2345 6789</p>
              <p><strong>Hours:</strong> 10:00 - 18:00, Mon - Sat</p> 
              <div class="follow">
               <h4>Follow us</h4>
                <div class="icon">
                  <i class="fab fa-facebook-f"></i>
                   <i class="fab fa-twitter"></i> 
                   <i class="fab fa-instagram"></i>
                    <i class="fab fa-pinterest-p"></i>
                     <i class="fab fa-youtube"></i>
                </div>
                </div> 
               </div>

               <div class="col"> 
                  <h4>About</h4>
                   <a href="#"> About us </a>
                    <a href="#"> Delivery Information </a>
                     <a href="#"> Privacy Policy </a>
                      <a href="#"> Terms & Conditions </a>
                       <a href="#"> Contact Us </a>
                      </div>

                      <div class="col"> 
                        <h4>My Account</h4>
                         <a href="#"> View Cart </a>
                          <a href="#"> My Wishlist </a>
                           <a href="#"> Track My Order </a>
                            <a href="#"> Help </a>
                           </div>
                            
                           <div class="col install">
                               <h4>Install App</h4>
                                <p>From App Store or Google Play</p>
                                 <div class="row"> 
                                    <img src="img/pay/app." alt=""> 
                                    <img src="img/pay/play.jpg" alt=""> 
                                 </div> 
                                 <p>Secured Payment Gateways </p>
                                  <img src="img/pay/pay.jpg" alt="">
                                  </div>


             </footer>
    
                <script src="script.js">

             </script> 
             </body>
 </html>