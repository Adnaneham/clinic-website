<?php

$conn = mysqli_connect('localhost', 'root', '', 'contact_db') or die('connection failed');

if (isset($_POST['submit'])) {

    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $number = $_POST['number'];
    $date = $_POST['date'];

    $insert = mysqli_query($conn, "INSERT INTO `contact_form`(name, email, number, date) VALUES('$name','$email','$number','$date')") or die('query failed');

    if ($insert) {
        $message[] = 'rendez-vous pris avec succès!';
    } else {
        $message[] = 'échec du rendez-vous';
    }
}
?>


<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site Web Médical</title>

    <!-- font awesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link -->
    <link rel="stylesheet" href="css/style.css">

</head>

<body>

    <!-- section d'en-tête -->

    <header class="header">

        <a href="#" class="logo"> <i class="fas fa-heartbeat"></i> <strong>Ibn ghazi </strong>hopital </a>

        <nav class="navbar">
            <a href="#home">accueil</a>
            <a href="#about">à propos</a>
            <a href="#services">services</a>
            <a href="#doctors">médecins</a>
            <a href="#appointment">rendez-vous</a>
            <a href="#review">avis</a>
            <a href="#blogs">blogs</a>
        </nav>

        <div id="menu-btn" class="fas fa-bars"></div>

    </header>

    <!-- section d'en-tête se termine -->

    <!-- section d'accueil commence -->

    <section class="home" id="home">

        <div class="image">
            <img src="image/home-img2.gif" alt="">
        </div>

        <div class="content">
            <h3>nous prenons soin de votre santé</h3>
            <p>la santé est la plus grande richesse. Chez Ibn Ghazi Hôpital, nous nous engageons à vous offrir des soins de qualité pour un bien-être optimal.</p>
            <a href="#appointment" class="btn">prenez rendez-vous <span class="fas fa-chevron-right"></span> </a>
        </div>

    </section>

    <!-- section d'accueil se termine -->

    <!-- section des icônes commence -->

    <section class="icons-container">

        <div class="icons">
            <i class="fas fa-user-md"></i>
            <h3>150+</h3>
            <p>médecins au travail</p>
        </div>

        <div class="icons">
            <i class="fas fa-users"></i>
            <h3>1030+</h3>
            <p>patients satisfaits</p>
        </div>

        <div class="icons">
            <i class="fas fa-procedures"></i>
            <h3>490+</h3>
            <p>installations de lit</p>
        </div>

        <div class="icons">
            <i class="fas fa-hospital"></i>
            <h3>70+</h3>
            <p>hôpitaux disponibles</p>
        </div>

    </section>

    <!-- section des icônes se termine -->

    <!-- section à propos commence -->

    <section class="about" id="about">

        <h1 class="heading"> <span>à propos</span> de nous </h1>

        <div class="row">

            <div class="image">
                <img src="image/medecins.jpg" alt="">
            </div>

            <div class="content">
                <h3>prennez le meilleur traitement de qualité au monde</h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iure ducimus, quod ex cupiditate ullam in assumenda maiores et culpa odit tempora ipsam qui, quisquam quis facere iste fuga, minus nesciunt.</p>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Natus vero ipsam laborum porro voluptates voluptatibus a nihil temporibus deserunt vel?</p>
                <a href="#" class="btn"> en savoir plus <span class="fas fa-chevron-right"></span> </a>
            </div>

        </div>

    </section>

    <!-- section à propos se termine -->

    <!-- section des services commence -->

    <section class="services" id="services">

        <h1 class="heading"> nos <span>services</span> </h1>

        <div class="box-container">

            <div class="box">
                <i class="fas fa-notes-medical"></i>
                <h3>consultations gratuites</h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ad, omnis.</p>
                <a href="#" class="btn"> en savoir plus <span class="fas fa-chevron-right"></span> </a>
            </div>

            <div class="box">
                <i class="fas fa-ambulance"></i>
                <h3>ambulance 24/7</h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ad, omnis.</p>
                <a href="#" class="btn"> en savoir plus <span class="fas fa-chevron-right"></span> </a>
            </div>

            <div class="box">
                <i class="fas fa-user-md"></i>
                <h3>médecins experts</h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ad, omnis.</p>
                <a href="#" class="btn"> en savoir plus <span class="fas fa-chevron-right"></span> </a>
            </div>

            <div class="box">
                <i class="fas fa-pills"></i>
                <h3>médicaments</h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ad, omnis.</p>
                <a href="#" class="btn"> en savoir plus <span class="fas fa-chevron-right"></span> </a>
            </div>

            <div class="box">
                <i class="fas fa-procedures"></i>
                <h3>installations de lit</h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ad, omnis.</p>
                <a href="#" class="btn"> en savoir plus <span class="fas fa-chevron-right"></span> </a>
            </div>

            <div class="box">
                <i class="fas fa-heartbeat"></i>
                <h3>soins totaux</h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ad, omnis.</p>
                <a href="#" class="btn"> en savoir plus <span class="fas fa-chevron-right"></span> </a>
            </div>

        </div>

    </section>

    <!-- section des services se termine -->

    <!-- section des médecins commence -->

    <section class="doctors" id="doctors">

        <h1 class="heading"> nos <span>médecins</span> </h1>

        <div class="box-container">

            <div class="box">
                <img src="image/doc-1.jpg" alt="">
                <h3>ilyass</h3>
                <span>médecin expert</span>
                <div class="share">
                    <a href="#" class="fab fa-facebook-f"></a>
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-instagram"></a>
                    <a href="#" class="fab fa-linkedin"></a>
                </div>
            </div>

            <div class="box">
                <img src="image/doc-2.jpg" alt="">
                <h3>adnane</h3>
                <span>médecin expert</span>
                <div class="share">
                    <a href="#" class="fab fa-facebook-f"></a>
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-instagram"></a>
                    <a href="#" class="fab fa-linkedin"></a>
                </div>
            </div>

            <div class="box">
                <img src="image/doc-3.jpg" alt="">
                <h3>Victor</h3>
                <span>médecin expert</span>
                <div class="share">
                    <a href="#" class="fab fa-facebook-f"></a>
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-instagram"></a>
                    <a href="#" class="fab fa-linkedin"></a>
                </div>
            </div>

            <!-- Repeat the above structure for other doctors -->

        </div>

    </section>

    <!-- section des médecins se termine -->

    <!-- section de rendez-vous commence -->

    <section class="appointment" id="appointment">

        <h1 class="heading"> <span>rendez-vous</span> maintenant </h1>

        <div class="row">

            <!--<div class="image">
          <img src="image/"tswiraa.jpg" alt="">
            </div>-->

            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                <?php
                if (isset($message)) {
                    foreach ($message as $message) {
                        echo '<p class ="message">' . $message . '</p>';
                    }
                }
                ?>

                <h3>prendre rendez-vous</h3>
                <input type="text" name="name" placeholder="votre nom" class="box">
                <input type="number" name="number" placeholder="votre numéro" class="box">
                <input type="email" name="email" placeholder="votre e-mail" class="box">
                <input type="date" name="date" class="box">
                <input type="submit" name="submit" value="prendre rendez-vous maintenant" class="btn">
            </form>

        </div>

    </section>

    <!-- section de rendez-vous se termine -->

    <!-- section des avis commence -->

    <section class="review" id="review">

        <h1 class="heading"> avis des <span>clients</span> </h1>

        <div class="box-container">

            <div class="box">
                <img src="image/pic-1.jpg" alt="">
                <h3>Ilyass</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <p class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam sapiente nihil aperiam? Repellat sequi nisi aliquid perspiciatis libero nobis rem numquam nesciunt alias sapiente minus voluptatem, reiciendis consequuntur optio dolorem!</p>
            </div>

            <!-- Repeat the above structure for other reviews -->

        </div>

    </section>

    <!-- section des avis se termine -->

    <!-- section des blogs commence -->

    <section class="blogs" id="blogs">

                <h1 class="heading"> nos <span>blogs</span> </h1>

        <div class="box-container">

            <div class="box">
                <img src="image/blog-1.jpg" alt="">
                <h3>titre du blog</h3>
                <p class="info">publié le <span>12 avril 2023</span> par <span>adnan</span></p>
                <p class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat sequi nisi aliquid perspiciatis libero nobis rem numquam nesciunt alias sapiente minus voluptatem, reiciendis consequuntur optio dolorem!</p>
                <a href="#" class="btn">en savoir plus <span class="fas fa-chevron-right"></span> </a>
            </div>

            <!-- Repeat the above structure for other blog posts -->

        </div>

    </section>

    <!-- section des blogs se termine -->

    <!-- section du pied de page commence -->

    <section class="footer">

        <div class="box-container">

            <div class="box">
                <h3>contactez-nous</h3>
                <p><i class="fas fa-map-marker-alt"></i> votre adresse ici</p>
                <p><i class="fas fa-envelope"></i> votre.email@gmail.com</p>
                <p><i class="fas fa-phone"></i> +33 123 456 789</p>
            </div>

            <div class="box">
                <h3>à propos de nous</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad, omnis.</p>
            </div>

            <div class="box">
                <h3>suivez-nous</h3>
                <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
            </div>

        </div>

        <h1 class="credit"> créé par <span>Ilyass</span> | © tous droits réservés! </h1>

    </section>

    <!-- section du pied de page se termine -->

    <!-- lien CDN du fichier JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/all.min.js"></script>

    <!-- fichier JavaScript personnalisé -->
    <script src="js/script.js"></script>

</body>

</html>

