<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03"
      aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="#">Online-Shop</a>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
            <a class="nav-link" href="show_products.php">
              <span><i class="fas fa-home "></i>All products</span>

            </a>
        </li>
      <?php
      if ($_SESSION['user'] == 'admin') {
        echo '  
                                <li class="nav-item ">
                              <a class="nav-link" href="show_products_admin.php">
                                  <span><i class="fas  fa-wrench "> </i>admin page</span>

                                </a>
                                 </li>

                         <li class="nav-item   ">
                          <a class="nav-link" href="show_order.php">
                            <span><i class="fa-brands fa-shopify"></i>Show order</span>

                          </a>
                        </li>
                        <li class="nav-item ">
                          <a class="nav-link" href="add_product.php">
                            <span><i class="fa-brands fa-shopify"></i> Add prodcut</span>

                          </a>
                        </li>
                        
                        ';
      } 
      ?>



                  <li class="nav-item dropdown me-3 me-lg-1">
                    <a class="nav-link " href="show_cart.php">
                      <i class="fa fa-cart-plus mr-2"></i>
                      <span class="badge badge-notification bg-danger">
                        <?php $count = count($_SESSION['cart']);
                        echo $count ?>
                      </span>
                    </a>

                  </li>

                  
                  




      </ul>

      <div class="img-sing" style='display: flex;align-items: center;padding-right: 5px;padding-right: 50px;'>
                    <img class="logo" alt="logo" src="logo/user.png">
                    <?php
                    if (isset($_SESSION['user']) && isset($_SESSION['login'])) {
                      echo "<span style='color: white;'> Welcome : " . $_SESSION['user'] . "</span>";

                    } else {
                      header('Location:login.php');
                    }
                    ?>
                    </div> 
        <?php
        echo "<form action='logout.php' method='POST'>
                <button type='submit' style='margin: 0;background-color: #4CAF50;border: none; color: white;
                padding: 10px 10px;text-align: center;' name='logout'>Logout</button>
                </form>";
        ?>      
    </div>
  </div>
</nav>
