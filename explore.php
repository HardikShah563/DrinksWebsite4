<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'head-links.php' ?>
    <title>Drinksify | Explore</title>
</head>

<body style="color: #fff;">
    <!-- Everything inside the file will be contained inside the box to get that effect -->
    <div class="box all-pages explore-cart-page ">
        <section class="nav">
            <nav>
                <div class="logo">
                    <p>Drink<label class="white">sify</label></p>
                </div>
                <div class="nav-lines">
                    <i class="fa-solid fa-bars-staggered"></i>
                </div>
                <div class="nav-links">
                    <li>
                        <a href="../index.html">Home
                            <hr />
                        </a>
                    </li>
                    <li>
                        <a href="./about-us.html">About
                            <hr />
                        </a>
                    </li>
                    <li>
                        <a href="./explore.html">Explore
                            <hr />
                        </a>
                    </li>
                    <li>
                        <a href="./contact-us.html">Contact
                            <hr />
                        </a>
                    </li>
                    <li>
                        <a href="./login.html"><i class="fa-solid fa-user"></i>
                            <hr />
                        </a>
                    </li>
                    <li class="contact">
                        <a href="./cart.html"><i class="fa-solid fa-bag-shopping"></i>
                            <hr />
                        </a>
                    </li>
                </div>
            </nav>
        </section>

        <div class="title">
            <h1>Explore the Energy!</h1>
        </div>

        
            <?php 
                $query = "select * from products where pcategory = ?";
                $category = "can";
                $stmt = $conn->prepare($query);
                $stmt = $conn->execute();
                $result = $stmt->get_result();
                $image_directory = "img/";

                if(mysqli_num_rows($result) > 0) {
            ?>
            
            <section class="explore-menu">

                <?php 
                while($row = $result->fetch_assoc()) {
                ?>
                    <div class="drink">
                        <div class="drink-img">
                            <img src="./img/drink1.png" alt="drink1">
                        </div>
                        <div class="drink-text">
                            <h1 class="drink-name">Lorem ipsum, dolor sit amet consectetur adipisicing elit.</h1>
                            <h1 class="drink-price">€99</h1>
                            <button class="add-to-cart">Add to Cart</button>
                        </div>
                    </div>
                <?php 
                    }
                ?>
            </div>
            <?php 
                }
                else {
                    ?>
                    <p class="error-msg">No wine found</p>
                    <?php
                }
            ?>

            <!-- <div class="drink">
                <div class="drink-img">
                    <img src="./img/drink1.png" alt="drink1">
                </div>
                <div class="drink-text">
                    <h1 class="drink-name">Lorem ipsum, dolor sit amet consectetur adipisicing elit.</h1>
                    <h1 class="drink-price">€99</h1>
                    <button class="add-to-cart">Add to Cart</button>
                </div>
            </div>

            <div class="drink">
                <div class="drink-img">
                    <img src="./img/drink2.png" alt="drink1">
                </div>
                <div class="drink-text">
                    <h1 class="drink-name">Lorem ipsum, dolor sit amet consectetur adipisicing elit.</h1>
                    <h1 class="drink-price">€99</h1>
                    <button class="add-to-cart">Add to Cart</button>
                </div>
            </div>

            <div class="drink">
                <div class="drink-img">
                    <img src="./img/drink3.png" alt="drink1">
                </div>
                <div class="drink-text">
                    <h1 class="drink-name">Lorem ipsum, dolor sit amet consectetur adipisicing elit.</h1>
                    <h1 class="drink-price">€99</h1>
                    <button class="add-to-cart">Add to Cart</button>
                </div>
            </div>

            <div class="drink">
                <div class="drink-img">
                    <img src="./img/drink4.png" alt="drink1">
                </div>
                <div class="drink-text">
                    <h1 class="drink-name">Lorem ipsum, dolor sit amet consectetur adipisicing elit.</h1>
                    <h1 class="drink-price">€99</h1>
                    <button class="add-to-cart">Add to Cart</button>
                </div>
            </div>

            <div class="drink">
                <div class="drink-img">
                    <img src="./img/drink5.png" alt="drink1">
                </div>
                <div class="drink-text">
                    <h1 class="drink-name">Lorem ipsum, dolor sit amet consectetur adipisicing elit.</h1>
                    <h1 class="drink-price">€99</h1>
                    <button class="add-to-cart">Add to Cart</button>
                </div>
            </div>

            <div class="drink">
                <div class="drink-img">
                    <img src="./img/drink6.png" alt="drink1">
                </div>
                <div class="drink-text">
                    <h1 class="drink-name">Lorem ipsum, dolor sit amet consectetur adipisicing elit.</h1>
                    <h1 class="drink-price">€99</h1>
                    <button class="add-to-cart">Add to Cart</button>
                </div>
            </div> -->

        </section>

        <div class="go-to-cart">
            <a href="./pages/cart.html">Go to Cart</a>
        </div>

        <hr>

        <section class="footer">
            <footer>
                <p>&copy; Copyrights reserved | Drinksify 2022</p>
                <div class="footer-links">
                    <a href="#">Privacy Policy</a>
                    <a href="#">Terms and Conditions</a>
                </div>
            </footer>
        </section>

        <div class="add-to-cart-overlay">
            <p>Product Added to Cart</p>
        </div>
    </div>
</body>

</html>