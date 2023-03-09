<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Project Santa</title>
        <!--Remix icons-->
        <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
        <!--Stylesheet-->
        <link rel="stylesheet" href="/css/home.css">
    </head>

    <body>
                <!-- Floating-background-image -->
                <div class="floating-background-image">
            <img src="../images/dashboard.jpg" alt="">
        </div>
        <!-- Header -->
        <header class="header">
            <nav class="nav container">
                <a href="../home/home.html" class="logo">Project Santa</a>
                <div class="nav-mobile">
                    <ul class="list">
                        <li class="list-item">
                            <a href="#" class="list-link current">Home</a>
                        </li>
                        <li class="list-item">
                            <a href="#" class="list-link">Wishlist</a>
                        </li>
                        <li class="list-item">
                            <a href="#" class="list-link">Friends</a>
                        </li>
                        <li class="list-item dropdown">
                            <button class="list-link dropdown-btn place-items-center settings-btn">
                                Settings <i class="ri-arrow-drop-right-line"></i>
                            </button>
                            <ul class="list dropdown-menu settings-dropdown">
                                <li class="list-item">
                                    <a href="#" class="list-link">Profile Settings</a>
                                </li>
                                <li class="list-item">
                                    <a href="#" class="list-link">Contact Us</a>
                                </li>
                                <li class="list-item">
                                    <a href="#" class="list-link">About</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <button class="icon-btn menu-toggle-btn menu-toggle-close place-items-center">
                        <i class="ri-close-line"></i>
                    </button>
                </div>

                <div class="align-right">
                    <button class="icon-btn menu-toggle-btn menu-toggle-open place-items-center">
                        <i class="ri-function-line"></i>
                    </button>
                    <button class="icon-btn theme-toggle-btn place-items-center">
                        <i class="ri-sun-line theme-light-icon"></i>
                        <i class="ri-moon-line theme-dark-icon"></i>
                    </button>
                </div>
                <div class="get-started">
                    <button class="get-started place-items-center started-btn">
                        <a href="../login/login.html" class="btn">Get Started</a>
                    </button>
                </div>
            </nav>
        </header>