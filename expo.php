<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta name="keywords" content="Portfolio, Works, Photography, Photos, 3D, 3D scans, Animations, Art">
    <meta name="author" content="Adam Sochorec">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Expo 2023 | Adam Sochorec</title>
    <?php $IPATH = $_SERVER["DOCUMENT_ROOT"]."/assets/php/"; include($IPATH."global-head.php"); ?>
</head>

<body id="expo-in-kolding">
    <!-- HEADER START -->
    <header>
        <?php $IPATH = $_SERVER["DOCUMENT_ROOT"]."/assets/php/"; include($IPATH."global-nav-bar.php"); ?>
    </header>
    <!-- HEADER END -->
    <!-- SCROLL STATUS START -->
    <aside>
        <?php $IPATH = $_SERVER["DOCUMENT_ROOT"]."/assets/php/"; include($IPATH."global-progress-bar.php"); ?>
    </aside>
    <!-- SCROLL STATUS END -->
    <main>
        <article>
            <h1 class="page-start-margin">Expo in Knuds garage</h1>
            <br>
            <h2>Jan 2023 - Feb 2023</h2>
            <hr>
            <article class="expo grid-container">
                <section class="expo grid-item">
                    <fieldset>
                        <legend>
                            <h3>Knuds Garage</h3>
                        </legend>
                        <p>Munkegade 5A<br>6000 Kolding<br>Denmark</p>
                    </fieldset>
                </section>
                <section class="expo grid-item">
                    <fieldset>
                        <legend>
                            <h3>Opening hours</h3>
                        </legend>
                        <p>Mon - Sat<br>12.00-02.00<br>Sun:<br>14.00-22.00</p>
                    </fieldset>
                </section>
            </article>
            <hr>
            <section>
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2260.4536767478503!2d9.475265615916156!3d55.48961928048376!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x464c9f7aed9ccbcd%3A0x4beb056a0a3fdde7!2sKnuds%20Garage!5e0!3m2!1sen!2scz!4v1663570078678!5m2!1sen!2scz"
                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade">
                    <p class="placeholder">Google map of Knuds Garage surroundings
                </iframe>
                <a href="https://knuds-garage.business.site/"><i
                        class="note">https://knuds-garage.business.site/</i></a>
            </section>
            <hr>
            <picture>
                <source srcset="/img/avif/IMG_0438.avif" type="image/avif">
                <img src="/img/jpg/IMG_0438.jpg"
                    alt="#">
            </picture>
            </section>
        </article>
        <hr>
    </main>
    <!-- FOOTER START -->
    <footer>
        <?php $IPATH = $_SERVER["DOCUMENT_ROOT"]."/assets/php/"; include($IPATH."global-footer.php"); ?>
    </footer>
    <!-- FOOTER END -->
</body>

</html>