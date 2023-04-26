<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DonkeyStay</title>

    <!-- FONTAWESOME JS -->
    <script src="https://kit.fontawesome.com/803e922635.js" crossorigin="anonymous"></script>
    
    <!-- CUSTOM CSS (Bootsrap 5.3.0 Alpha 3 inside)-->
    <link href="../core/scss/custom.css" rel="stylesheet">

</head>
<body>
    <header>
        <nav class="navbar navbar-dark bg-donkey-primary" aria-label="offcanvas navbar">
            <div class="container-fluid flex-nowrap">
                <div class="text-center navbar-brand">
                    <img src="donkey.png" alt="DonkeyStay Logo" title="DonkeyStay Alive" class="img-fluid w-25">
                </div>
                <div class="collapse navbar-collapse d-flex justify-content-end" id="navbarNavDropdown">
                    <ul class="navbar-nav text-center flex-md-row">
                        <li class="nav-item me-3">
                            <a class="nav-link active" aria-current="page" href=".">
                                <i class="fa-solid fa-house"></i>
                                <p>Home</p>
                            </a>
                        </li>
                        <li class="nav-item me-3">
                            <a class="nav-link" href=".">
                                <i class="fa-solid fa-calendar-days"></i>
                                <p>Reservations</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="." class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                                <i class="fa-solid fa-user-lock"></i>
                                <p>Connection</p>
                            </a>
                        </li>
                    </ul>
                </div>
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
            </div>
        </nav>
    </header>
    <!-- BOOTSTRAP JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
</body>
</html>