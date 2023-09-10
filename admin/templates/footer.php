</main>
<!-- Content -->
</div>
<!--
            ___________________________________________________________________________________________
                                                    FOOTER
            ___________________________________________________________________________________________
        -->
<footer class="py-3 my-4">
    <?php
    if (isset($_SESSION['user_role'])) {
        $userRole = $_SESSION['user_role'];
        if ($userRole === 'SuperAdmin' || $userRole === 'Admin') {
            echo '<div class="row rowfooter">
        <div class="footer col-md-4 col-sm-12 mb-1">
            <h5 class="h1 text-uppercase mb-3">Horaires d\'ouverture</h5>
            <ul class="nav flex-column h2">
                <li class="nav-item mb-2">
                    <a href="#"
                       class="nav-link p-0 text-body-secondary mb-1">Lundi : 08:45 - 12:00 | 14:00 - 18:00</a>
                </li>
                <li class="nav-item mb-2">
                    <a href="#"
                       class="nav-link p-0 text-body-secondary mb-1">Mardi : 08:45 - 12:00 | 14:00 - 18:00</a>
                </li>
                <li class="nav-item mb-2">
                    <a href="#"
                       class="nav-link p-0 text-body-secondary mb-1">Mercredi : 08:45 - 12:00 | 14:00 - 18:00</a>
                </li>
                <li class="nav-item mb-2">
                    <a href="#"
                       class="nav-link p-0 text-body-secondary mb-1">Jeudi : 08:45 - 12:00 | 14:00 - 18:00</a>
                </li>
                <li class="nav-item mb-2">
                    <a href="#"
                       class="nav-link p-0 text-body-secondary mb-1">Vendredi : 08:45 - 12:00 | 14:00 - 18:00</a>
                </li>
                <li class="nav-item mb-2">
                    <a href="#"
                       class="nav-link p-0 text-body-secondary mb-1">Samedi : 08:45 - 12:00 | Fermé</a>
                </li>
                <li class="nav-item mb-2">
                    <a href="#"
                       class="nav-link p-0 text-body-secondary mb-1">Dimanche : Fermé |</a>
                </li>
            </ul>
        </div>

        <div class="footer col-md-4 col-sm-12 mb-1">
            <h5 class="h1 text-uppercase mb-3">Nous trouver</h5>
            <ul class="nav flex-column h2">
                <li class="nav-item mb-2">
                    <a href="https://www.google.com/maps/search/?api=1&query=43.605729, 1.442234"
                       class="nav-link p-0 text-body-secondary mb-1 Adress"
                       target="_blank">Garage V.Parrot</a>
                </li>
                <li class="nav-item mb-2">
                    <a href="https://www.google.com/maps/search/?api=1&query=43.605729, 1.442234"
                       class="nav-link p-0 text-body-secondary mb-1 Adress"
                       target="_blank">3 Rue Paul Ferrat</a>
                </li>
                <li class="nav-item mb-2">
                    <a href="https://www.google.com/maps/search/?api=1&query=43.605729, 1.442234"
                       class="nav-link p-0 text-body-secondary mb-1 Adress"
                       target="_blank">31200 Toulouse</a>
                </li>
            </ul>
        </div>

        <div class="footer col-md-4 col-sm-12 mb-1">
            <h5 class="h1 text-uppercase mb-3">Nous contacter</h5>
            <ul class="nav flex-column h2">
                <li class="nav-item mb-2">
                    <a href="tel:+33458235451"
                       class="nav-link p-0 text-body-secondary mb-1 Contact">Tel: 04.58.23.54.51</a>
                </li>
                <li class="nav-item mb-2">
                    <a href="mailto:contact@garagevparrot.fr"
                       class="nav-link p-0 text-body-secondary mb-1 Contact">E-mail: contact@garagevparrot.fr</a>
                </li>
                <li class="nav-item mb-2">
                    <a href="assets/html/contact.html"
                       class="nav-link p-0 text-body-secondary mb-1 Contact">Contact en ligne</a>
                </li>
            </ul>
        </div>
    </div>';
        } elseif ($userRole === 'Employé') {
            echo '<p class="text-center">';
            if (isset($_SESSION["user_id"])) {
                echo $_SESSION["user_prenom"] . " " . $_SESSION["user_nom"];
            }
            echo '</p>';
        }
    }
    ?>

    <div class="d-flex flex-column flex-sm-row justify-content-between py-4 my-4 border-top">
        <h5 class="h1 d-flex flex-column justify-content-center copyright text-uppercase text-center m-0">
            © Matthieu EBZANT, Tous droits réservés 2023 Copyright
        </h5>
        <ul class="list-follow d-flex justify-content-center align-items-center p-0 m-0">
            <li>
                <a href="https://www.facebook.com/Garage V.Parrot">
                    <img src="../assets/images/facebook.png"
                         alt="Logo Facebook"
                         width="50"
                         class="" /></a>
            </li>
            <li>
                <a href="https://www.twitter.com/Garage V.Parrot">
                    <img src="../assets/images/twitter.png"
                         alt="Logo Twitter"
                         width="50" /></a>
            </li>
            <li>
                <a href="https://www.instagram.com/Garage V.Parrot">
                    <img src="../assets/images/instagram.png"
                         alt="Logo Instagram"
                         width="50" /></a>
            </li>
        </ul>
    </div>
</footer>


<footer class="p-5">


</footer>
<!--
            ___________________________________________________________________________________________
                                                    FIN FOOTER
            ___________________________________________________________________________________________
        -->
<!-- Bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
        crossorigin="anonymous"></script>
</body>

</html>