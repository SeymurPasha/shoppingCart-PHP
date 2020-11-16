<!DOCTYPE html>
<html>
    <head>
        <title>E-Commerce | Store</title>
        <meta name="description" content="This is the description">
        <link rel="stylesheet" href="style.css" />
        <script src="store.js" async></script>
    </head>
    <body>
        <header class="main-header">
            <h1 class="band-name band-name-large">E-Commerce</h1>
        </header>
        <section class="container content-section">
            <h2 class="section-header">Watches</h2>
            <div class="shop-items">
                <form class="shop-item" action="item.php" method="post">
                    <span class="shop-item-title">Classic 1</span>
                    <img class="shop-item-image" src="Images/watch1.jpg">
                    <div class="shop-item-details">
                        <span class="shop-item-price">$212.99</span>
                        <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                    </div>
                </form>
                <form class="shop-item">
                    <span class="shop-item-title"> Classic 2</span>
                    <img class="shop-item-image" src="Images/watch2.jpg">
                    <div class="shop-item-details">
                        <span class="shop-item-price">$314.99</span>
                        <button class="btn btn-primary shop-item-button"type="button">ADD TO CART</button>
                    </div>
                </form>
                <form class="shop-item">
                    <span class="shop-item-title">Classic 3</span>
                    <img class="shop-item-image" src="Images/watch3.png">
                    <div class="shop-item-details">
                        <span class="shop-item-price">$229.99</span>
                        <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                    </div>
                    </form>
                <form class="shop-item">
                    <span class="shop-item-title">Classic 4</span>
                    <img class="shop-item-image" src="Images/watch4.jpg">
                    <div class="shop-item-details">
                        <span class="shop-item-price">$419.99</span>
                        <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                    </div>
                    </form>
            </div>
        </section>
        <section class="container content-section">
            <h2 class="section-header">MERCH</h2>
            <div class="shop-items">
                <form class="shop-item">
                    <span class="shop-item-title">Retro</span>
                    <img class="shop-item-image" src="Images/watch5.jpg">
                    <div class="shop-item-details">
                        <span class="shop-item-price">$219.99</span>
                        <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                    </div>
                </form>
                <form class="shop-item">
                    <span class="shop-item-title">Old School</span>
                    <img class="shop-item-image" src="Images/watch6.jpg">
                    <div class="shop-item-details">
                        <span class="shop-item-price">$226.99</span>
                        <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                    </div>
                </form>
            </div>
        </section>
        <section class="container content-section">
            <h2 class="section-header">CART</h2>
            <div class="cart-row">
                <span class="cart-item cart-header cart-column">ITEM</span>
                <span class="cart-price cart-header cart-column">PRICE</span>
                <span class="cart-quantity cart-header cart-column">QUANTITY</span>
            </div>
            <div class="cart-items">
            </div>
            <div class="cart-total">
                <strong class="cart-total-title">Total</strong>
                <span class="cart-total-price">$0</span>
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