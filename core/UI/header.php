<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DonkeyStay</title>
    <link rel="shortcut icon" href="/core/img/favicon.ico" type="image/x-icon">

    <!-- FONTAWESOME JS -->
    <script src="https://kit.fontawesome.com/803e922635.js" crossorigin="anonymous"></script>

    <!-- CUSTOM CSS (Bootsrap 5.3.0 Alpha 3 inside)-->
    <link href="/core/scss/custom.css" rel="stylesheet">
    <link href="/Oualid/style.css" rel="stylesheet">
    <link href="/Oualid/Rooms.css" rel="stylesheet">
    <link href="/Oualid/contact.css" rel="stylesheet">

</head>

<body>
    <header>
        <nav class="d-none d-lg-block navbar navbar-dark bg-donkey-primary fixed-top" aria-label="offcanvas navbar">
            <div class="container-fluid flex-nowrap">
                <div class="text-center navbar-brand">
                    <a href="/">
                        <img src="/core/img/donkey.png" alt="DonkeyStay Logo" title="DonkeyStay Alive" class="img-fluid w-25">
                    </a>
                </div>
                <div class="collapse navbar-collapse d-flex justify-content-end" id="navbarNavDropdown">
                    <ul class="navbar-nav text-center flex-md-row">
                        <li class="nav-item me-4">
                            <a class="nav-link active" aria-current="page" href="/">
                                <i class="fa-solid fa-house"></i>
                                <p>Home</p>
                            </a>
                        </li>
                        <li class="nav-item me-4">
                            <a class="nav-link" href="/Oualid/reservation.php">
                                <i class="fa-solid fa-calendar-days"></i>
                                <p>Reservations</p>
                            </a>
                        </li>
                        <li class="nav-item me-4">
                            <a class="nav-link" href="/Oualid/aboutUs.php">
                                <i class="fa-solid fa-users"></i>
                                <p>About Us</p>
                            </a>
                        </li>
                        <li class="nav-item me-4">
                            <a class="nav-link" href="/Oualid/rooms.php">
                                <i class="fa-solid fa-bed"></i>
                                <p>Our Rooms</p>
                            </a>
                        </li>
                        <li class="nav-item me-4">
                            <a class="nav-link" href="<?= '/user' ?>">
                                <i class="fa-solid fa-poo"></i>
                                <p>Utilisateurs</p>
                            </a>
                        </li>
                        <li class="nav-item me-4">
                            <a class="nav-link" href="<?= '/hotel' ?>">
                                <i class="fa-solid fa-poo"></i>
                                <p>Hotels</p>
                            </a>
                        </li>
                        <li class="nav-item me-4">
                            <a class="nav-link" href="<?= '/room' ?>">
                                <i class="fa-solid fa-poo"></i>
                                <p>Chambres</p>
                            </a>
                        </li>
                        <li class="nav-item me-4">
                            <a class="nav-link" href="<?= '/reservation' ?>">
                                <i class="fa-solid fa-poo"></i>
                                <p>Reservations</p>
                            </a>
                        </li>
                        <li class="nav-item me-4">
                            <a class="nav-link" href="#" class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                                <i class="fa-solid fa-user-lock"></i>
                                <p>Connection</p>
                            </a>
                        </li>
                    </ul>
                </div>

                <!-- Ne pas détruire !!!! -->
                <!-- Menu de connexion -->

                <div class="offcanvas offcanvas-end bg-donkey-primary" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Connection</h5>
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <div class="collapse" id="navbarToggleExternalContent1">
                            <div class="bg-light p-4 text-dark rounded-top">
                                <form action="." method="POST">
                                    <fieldset>
                                        <label for="userLast" class="w-100">Nom*</label>
                                        <input type="text" name="userLast" id="userLast" class="w-100" placeholder="Nom" required>
                                        <label for="userFirst" class="w-100">Prénom*</label>
                                        <input type="text" name="userFirst" id="userFirst" class="w-100" placeholder="Prénom" required>
                                        <label for="userLogin" class="w-100">Login*</label>
                                        <input type="text" name="userLogin" id="userLogin" class="w-100" placeholder="Login" required>
                                        <label for="userPass" class="w-100">Password*</label>
                                        <input type="password" name="userPass" id="userPass" class="w-100" placeholder="Password" required>
                                        <input type="password" name="userPassChecker" id="userPassChecker" class="w-100 mt-2" placeholder="Password again" required>
                                        <label for="userEmail" class="w-100">eMail*</label>
                                        <input type="email" name="userEmail" id="userEmail" class="w-100" placeholder="eMail" required>
                                        <input type="submit" class="btn btn-info w-100 mt-4" value="Subscription" name="Subscription">
                                    </fieldset>
                                </form>
                            </div>
                        </div>
                        <nav class="navbar navbar-light bg-light rounded mt-n1">
                            <div class="container-fluid">
                                <button class="navbar-toggler w-100 border border-light" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggleExternalContent1" aria-controls="navbarToggleExternalContent1" aria-expanded="false" aria-label="Toggle navigation">
                                    <h5>Not registered for now</h5>
                                </button>
                            </div>
                        </nav>
                        <br>
                        <div class="collapse" id="navbarToggleExternalContent2">
                            <div class="bg-light p-4 text-dark rounded-top">
                                <form action="." method="POST">
                                    <fieldset>
                                        <label for="userLogin" class="w-100">Login*</label>
                                        <input type="text" name="userLogin" id="userLogin" class="w-100" placeholder="Login" required>
                                        <label for="userPass" class="w-100">Password*</label>
                                        <input type="password" name="userPass" id="userPass" class="w-100" placeholder="Password" required>
                                        <input type="submit" class="btn btn-info w-100 mt-4" value="Connection" name="Connection">
                                    </fieldset>
                                </form>
                            </div>
                        </div>
                        <nav class="navbar navbar-light bg-light rounded mt-n1">
                            <div class="container-fluid">
                                <button class="navbar-toggler w-100 border border-light" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggleExternalContent2" aria-controls="navbarToggleExternalContent2" aria-expanded="false" aria-label="Toggle navigation">
                                    <h5>Already registred</h5>
                                </button>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </nav>


        <nav class="d-lg-none navbar navbar-dark bg-donkey-primary fixed-top navbar-expand-lg" aria-label="offcanvas navbar">
            <div class="container-fluid">
                <div class="navbar-brand">
                    <a href="/">
                        <img src="/core/img/donkey.png" alt="DonkeyStay Logo" title="DonkeyStay Alive" class="img-fluid" style="height:45px;">
                    </a>
                </div>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
                    <ul class="navbar-nav text-center flex-md-row">
                        <li class="nav-item me-4">
                            <a class="nav-link" aria-current="page" href="/Oualid/index.php">
                                <i class="fa-solid fa-house"></i>
                                <p>Home</p>
                            </a>
                        </li>
                        <li class="nav-item me-4">
                            <a class="nav-link" href="/Oualid/reservation.php">
                                <i class="fa-solid fa-calendar-days"></i>
                                <p>Reservations</p>
                            </a>
                        </li>
                        <li class="nav-item me-4">
                            <a class="nav-link" href="/Oualid/aboutUs.php">
                                <i class="fa-solid fa-users"></i>
                                <p>About Us</p>
                            </a>
                        </li>
                        <li class="nav-item me-4">
                            <a class="nav-link" href="/Oualid/rooms.php">
                                <i class="fa-solid fa-bed"></i>
                                <p>Our Rooms</p>
                            </a>
                        </li>
                        <li class="nav-item me-4">
                            <a class="nav-link" href="#" class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                                <i class="fa-solid fa-user-lock"></i>
                                <p>Connection</p>
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- Ne pas détruire !!!! -->
                <!-- Menu de connexion -->
                <div class="offcanvas offcanvas-end bg-donkey-primary" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Connection</h5>
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <div class="collapse" id="navbarToggleExternalContent3">
                            <div class="bg-light p-4 text-dark rounded-top">
                                <form action="." method="GET">
                                    <fieldset>
                                        <label for="newUserLogin" class="w-100">Login*</label>
                                        <input type="text" name="newUserLogin" id="newUserLogin" class="w-100" placeholder="Login" require>
                                        <label for="newUserMDP" class="w-100">Password*</label>
                                        <input type="password" name="newUserMDP" id="newUserMDP" class="w-100" placeholder="Password" require>
                                        <input type="password" name="newUserMDPtest" id="newUserMDPtest" class="w-100 mt-2" placeholder="Password again" require>
                                        <label for="newUserEmail" class="w-100">eMail*</label>
                                        <input type="email" name="newUserEmail" id="newUserEmail" class="w-100" placeholder="eMail" require>
                                        <input type="submit" class="btn btn-info w-100 mt-4" value="Subscription">
                                    </fieldset>
                                </form>
                            </div>
                        </div>
                        <nav class="navbar navbar-light bg-light rounded mt-n1">
                            <div class="container-fluid">
                                <button class="navbar-toggler w-100 border border-light" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggleExternalContent3" aria-controls="navbarToggleExternalContent3" aria-expanded="false" aria-label="Toggle navigation">
                                    <h5>Not registered for now</h5>
                                </button>
                            </div>
                        </nav>
                        <br>
                        <div class="collapse" id="navbarToggleExternalContent4">
                            <div class="bg-light p-4 text-dark rounded-top">
                                <form action="." method="GET">
                                    <fieldset>
                                        <label for="userLogin" class="w-100">Login*</label>
                                        <input type="text" name="userLogin" id="userLogin" class="w-100" placeholder="Login" require>
                                        <label for="userMDP" class="w-100">Password*</label>
                                        <input type="password" name="userMDP" id="userMDP" class="w-100" placeholder="Password" require>
                                        <input type="submit" class="btn btn-info w-100 mt-4" value="Connection">
                                    </fieldset>
                                </form>
                            </div>
                        </div>
                        <nav class="navbar navbar-light bg-light rounded mt-n1">
                            <div class="container-fluid">
                                <button class="navbar-toggler w-100 border border-light" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggleExternalContent4" aria-controls="navbarToggleExternalContent4" aria-expanded="false" aria-label="Toggle navigation">
                                    <h5>Already registred</h5>
                                </button>
                            </div>
                        </nav>
                    </div>
                </div>
                <!-- Fin Menu de connexion -->
            </div>
        </nav>


    </header>
    <main class="container-fluid" style="margin-top:96px;">

        <?php include 'ConnectForm/subscription.php'; ?>