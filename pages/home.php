<?php
if (!isset($_COOKIE['isLogin'])) {
    header("location: ../login.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hoopz</title>

    <!-- MATERIAL ICONS -->
    <link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp" rel="stylesheet">
    <!-- STYLESHEET -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="./style.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>

<body>
    <div class="container">
        <aside>
            <div class="top">
                <div class="logo">
                    <img src="./images/hoopzlogo.png" alt="">
                    <h2 class="danger">HO<span class="score">OPZ</span></h2>
                </div>
                <div class="close" id="close-btn">
                    <span class="material-icons-sharp">close</span>
                </div>
            </div>

            <div class="sidebar">

                <a href="#">
                    <span class="material-icons-sharp">grid_view</span>
                    <h3>Dashboard</h3>
                </a>

                <a href="#" class="active">
                    <span class="material-icons-outlined">sports_esports</span>
                    <h3>Matches</h3>
                </a>

                <a href="#">
                    <span class="material-icons-outlined">shopping_bag</span>
                    <h3>Purchases</h3>
                </a>

                <a href="#">
                    <span class="material-icons-outlined">book</span>
                    <h3>Logs</h3>
                </a>

                <a href="#">
                    <span class="material-icons-outlined">mail_outline</span>
                    <h3>Messages</h3>
                    <span class="message-count">26</span>
                </a>

                <a href="#">
                    <span class="material-icons-outlined">trending_up</span>
                    <h3>Analytics</h3>
                </a>

                <a href="#">
                    <span class="material-icons-sharp">settings</span>
                    <h3>Settings</h3>
                </a>

                <a id="logoutBtn" class="logout">
                    <span class="material-icons-outlined">logout</span>
                    <h3>Logout</h3>
                </a>
            </div>
        </aside>

        <!-- END OF ASIDE -->

        <main>
            <div class="right">
                <h1 style>Matches</h1>
                <!-- <div class="text">
                    <input type="text" placeholder="Search Player">
                </div> -->
                <div class="top">
                    <button id="menu-btn">
                        <span class="material-icons-round">menu</span>
                    </button>
                    <div class="theme-toggler">
                        <span class="material-icons-round">light_mode</span>
                        <span class="material-icons-round">dark_mode</span>
                    </div>

                    <div class="profile">
                        <div class="info">
                            <p>Welcome, <b>Zenovain</b></p>
                            <small class="text-muted"><b class="success">Head of Staff</b></small>
                        </div>
                        <div class="profile-photo">
                            <img src="./images/zenovain.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>

            <!-- page content here -->
            <div class="content">
                <?php include 'matches.php' ?>
            </div>

        </main>
        <!-- END OF MAIN -->
    </div>

    <script src="./index.js"></script>
    <script src="../js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>