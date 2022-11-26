<section class="nav">
            <nav>
                <div class="logo">
                    <p>Drink<label class="white">sify</label></p>
                </div>
                <div class="nav-lines">
                    <i class="fa-solid fa-bars-staggered"></i>
                </div>
                <div class="nav-links">
                    <li><a href="index.php">Home
                            <hr>
                        </a> </li>
                    <li><a href="about-us.php">About
                            <hr>
                        </a> </li>
                    <li><a href="explore.php">Explore
                            <hr>
                        </a> </li>
                    <li><a href="contact-us.php">Contact
                            <hr>
                        </a> </li>
                    <li class="contact"><a href="cart.php"><i class="fa-solid fa-bag-shopping"></i>
                            <hr>
                        </a> </li>
                    
                    <?php if (isset($_SESSION['u_id'])) { ?>
                        <?php if ($_SESSION['type'] == 'admin') { ?>
                            <li class="admin">
                                <a href="admin.php"><i class="fa-solid fa-screwdriver-wrench"></i> 
                                    <hr> 
                                </a> </li>
                    <?php } ?>
 
                    <li><a href="myaccount.php"><i class="fa-solid fa-user-pen"></i> 
                            <hr> 
                        </a> </li>

                    <li><a href="logout.php"><i class="fa-solid fa-arrow-right-from-bracket"></i> 
                            <hr> 
                        </a> </li>

                    <?php } else { ?>
                        <li><a href="login.php"><i class="fa-solid fa-user"></i>
                            <hr>
                        </a> </li>
                    <?php } ?>
                </div>
            </nav>
        </section>