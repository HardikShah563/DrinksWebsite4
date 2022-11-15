<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'head-links.php' ?>
    <title>Drinksify | Contact Us</title>
</head>

<body>
    <!-- Everything inside the file will be contained inside the box to get that effect -->
    <div class="box all-pages">
    <?php include 'navbar.php' ?>

        <section class="contact-us" id="contact-us">
            <div class="main-text-pages">
                <h1>Contact Us</h1>
            </div>

            <form class="input-form">
                <input type="text" name="name" id="name" placeholder="Your Name Here" required>
                <input type="email" name="email" id="email" placeholder="Your Email Here" required>
                <textarea name="message" id="message" cols="" rows="5" placeholder="Your Message Here" required></textarea>
                <button type="submit">Send Message</button>
            </form>

            <diiv class="contact-links">
                <i class="fa-brands fa-github"></i>
                <i class="fa-brands fa-instagram"></i>
                <i class="fa-brands fa-facebook"></i>
                <i class="fa-brands fa-linkedin"></i>
            </diiv>
        </section>

        <?php include 'footer.php' ?>
    </div>
</body>

</html>