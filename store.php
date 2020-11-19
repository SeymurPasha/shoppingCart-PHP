<!DOCTYPE html>
<html>
    <head>
        <title>E-Commerce | Store</title>
        <meta name="description" content="This is the description">
        <link rel="stylesheet" href="style.css" />
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</body>
</html>

    </head>
    <body>

    <?php 
    include './classes/db.php';

    session_start();

    if (isset($_POST['submit'])){
        if(isset($_SESSION['cart'])){
    
            $item_array_id = array_column($_SESSION['cart'], "id");
    
            if(in_array($_POST['id'], $item_array_id)){
                echo "<script>alert('Product is already added in the cart..!')</script>";
                echo "<script>window.location = 'store.php'</script>";
            }else{
    
                $count = count($_SESSION['cart']);
                $item_array = array(
                    'id' => $_POST['id']
                );
    
                $_SESSION['cart'][$count] = $item_array;
            }
    
        }else{
    
            $item_array = array(
                    'id' => $_POST['id']
            );
    
            // Create new session variable
            $_SESSION['cart'][0] = $item_array;
        }
    }
    ?>

    <?php
    
    if (isset($_POST['remove'])){
        if ($_GET['action'] == 'remove'){
            foreach ($_SESSION['cart'] as $key => $value){
                if($value["id"] == $_GET['id']){
                    unset($_SESSION['cart'][$key]);
                    echo "<script>alert('Product has been Removed...!')</script>";
                    echo "<script>window.location = 'store.php'</script>";
                }
            }
        }
      }
    
    
    ?>
        <header class="main-header">
            <h1 class="band-name band-name-large">E-Commerce</h1>
        </header>
        <section class="container content-section">
            <h2 class="section-header">Watches</h2>
            <div class="shop-items">
                <form class="shop-item" action="store.php" method="POST">
                    <span class="shop-item-title">Classic 1</span>
                    <input type="hidden">
                    <img class="shop-item-image" src="Images/watch1.jpg">
                    <input type='hidden' name='id' value = "1">
                    <div class="shop-item-details">
                        <span class="shop-item-price">$212.99</span>
                        <input class="btn btn-primary shop-item-button" type="submit"  name = "submit"  value="ADD TO CART"/>
                    </div>
                </form>
                <form class="shop-item"  action="store.php" method="POST">
                    <span class="shop-item-title"> Classic 2</span>
                    <img class="shop-item-image" src="Images/watch2.jpg">
                    <input type='hidden' name='id' value = "2">
                    <div class="shop-item-details">
                        <span class="shop-item-price">$314.99</span>
                        <input class="btn btn-primary shop-item-button" type="submit"  name = "submit"  value="ADD TO CART"/>
                    </div>
                </form>
                <form class="shop-item"  action="store.php" method="POST">
                    <span class="shop-item-title">Classic 3</span>
                    <img class="shop-item-image" src="Images/watch3.png">
                    <input type='hidden' name='id' value = "3">
                    <div class="shop-item-details">
                        <span class="shop-item-price">$229.99</span>
                        <input class="btn btn-primary shop-item-button" type="submit"  name = "submit"  value="ADD TO CART"/>
                    </div>
                    </form>
                <form class="shop-item"  action="store.php" method="POST">
                    <span class="shop-item-title">Classic 4</span>
                    <img class="shop-item-image" src="Images/watch4.jpg">
                    <input type='hidden' name='id' value = "4">
                    <div class="shop-item-details">
                        <span class="shop-item-price">$419.99</span>
                        <input class="btn btn-primary shop-item-button" type="submit"  name = "submit"  value="ADD TO CART"/>
                    </div>
                    </form>
            </div>
        </section>
        <section class="container content-section">
            <h2 class="section-header">MERCH</h2>
            <div class="shop-items">
                <form class="shop-item"  action="store.php" method="POST">
                    <span class="shop-item-title">Retro</span>
                    <img class="shop-item-image" src="Images/watch5.jpg">
                    <input type='hidden' name='id' value = "5">
                    <div class="shop-item-details">
                        <span class="shop-item-price">$219.99</span>
                        <input class="btn btn-primary shop-item-button" type="submit"  name = "submit"  value="ADD TO CART"/>
                    </div>
                </form>
                <form class="shop-item"  action="store.php" method="POST">
                    <span class="shop-item-title">Old School</span>
                    <img class="shop-item-image" src="Images/watch6.jpg">
                    <input type='hidden' name='id' value = "6">
                    <div class="shop-item-details">
                        <span class="shop-item-price">$226.99</span>
                        <input class="btn btn-primary shop-item-button" type="submit"  name = "submit"  value="ADD TO CART"/>
                    </div>
                </form>
            </div>
        </section>
        <section class="container content-section">
            <h2 class="section-header">CART</h2>

            <div class = "cart-items">
            <?php

$total = 0;
    if (isset($_SESSION['cart'])){
        $ID = array_column($_SESSION['cart'], 'id');

        while ($row = mysqli_fetch_assoc($result)){
            foreach ($ID as $id){
                if ($row['id'] == $id){

                    $productid  = $row['id'];
                    $productname = $row['title'];
                    $productprice = $row['price'];
                    $productimg = $row['image'];
    
    
    echo   "
    <form action=\"store.php?action=remove&id=$productid\" method=\"post\" class=\"cart-items\">
                    <div class=\"border rounded\">
                        <div class=\"row bg-white\">
                            <div class=\"col-md-3 pl-0\">
                                <img src=$productimg alt=\"Image1\" class=\"img-fluid\">
                            </div>
                            <div class=\"col-md-6\">
                                <h5 class=\"pt-2\">$productname</h5>
                                <h5 class=\"pt-2\">$$productprice</h5>
                                <button type=\"submit\" class=\"btn btn-danger mx-2\" name=\"remove\">Remove</button>
                            </div>
                            <div class=\"col-md-3 py-5\">
                                <div>
                                    <button type=\"button\" class=\"btn bg-light border rounded-circle\"><i class=\"fas fa-minus\"></i></button>
                                    <input type=\"text\" value=\"1\" class=\"form-control w-25 d-inline\">
                                    <button type=\"button\" class=\"btn bg-light border rounded-circle\"><i class=\"fas fa-plus\"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
    
    ";
                    $total = $total + (int)$row['price'];
                }
            }
        }
    }else{
        echo "<h5>Cart is Empty</h5>";
    }

?>
            </div>
            
            <div class="cart-total">
                <strong class="cart-total-title">Total</strong>
                <span class="cart-total-price"><?php echo $total ?></span>
            </div>
            <button class="btn btn-primary btn-purchase" type="button">PURCHASE</button>
        </section>
        <footer class="main-footer">
            <div class="container main-footer-container">
                <h3 class="band-name">E-Commerce</h3>
                <ul class="nav footer-nav">
                    <li>
                        <a href="https://www.youtube.com" target="_blank">
                            <img src="Images/YouTube Logo.png">
                        </a>
                    </li>
                    <li>
                        <a href="https://www.spotify.com" target="_blank">
                            <img src="Images/Spotify Logo.png">
                        </a>
                    </li>
                    <li>
                        <a href="https://www.facebook.com" target="_blank">
                            <img src="Images/Facebook Logo.png">
                        </a>
                    </li>
                </ul>
            </div>
        </footer>
    </body>
</html>


