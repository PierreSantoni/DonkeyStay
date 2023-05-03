<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="/Oualid/favicon.ico" type="image/x-icon">
    <title>DonkeyStay</title>

    <!-- FONTAWESOME JS -->
    <script src="https://kit.fontawesome.com/803e922635.js" crossorigin="anonymous"></script>

    <!-- CUSTOM CSS (Bootsrap 5.3.0 Alpha 3 inside)-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="/Oualid/custom.css">
    <link rel="stylesheet" href="/Oualid/style.css">
    <link rel="stylesheet" href="/Oualid/Rooms.css">
    <link rel="stylesheet" href="/Oualid/contact.css">
    

</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-donkey-primary fixed-top navbar-expand-md">
            <div class="container-fluid">
                <a class="navbar-brand" href="/Oualid/index.php">
                    <img src="img/donkey.png" alt="DonkeyStay Logo" title="DonkeyStay Alive" class="img-fluid w-25">
                </a>
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
                        <div class="collapse" id="navbarToggleExternalContent1">
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
                                <button class="navbar-toggler w-100 border border-light" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggleExternalContent1" aria-controls="navbarToggleExternalContent1" aria-expanded="false" aria-label="Toggle navigation">
                                    <h5>Not registered for now</h5>
                                </button>
                            </div>
                        </nav>
                        <br>
                        <div class="collapse" id="navbarToggleExternalContent2">
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
                                <button class="navbar-toggler w-100 border border-light" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggleExternalContent2" aria-controls="navbarToggleExternalContent2" aria-expanded="false" aria-label="Toggle navigation">
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
    <main style="margin-top:96px;">