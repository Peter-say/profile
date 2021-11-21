<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="web/assets/css/registration.style.css">
    <title>Document</title>
        <!-- css -->
        <style>
        * {
            padding: 0px;
            margin: 0px;
        }


        /* Add a black background color to the top navigation */
        .topnav {
            background-color: #234876;
            overflow: hidden;
        }

        /* Style the links inside the navigation bar */
        .topnav a {
            float: left;
            display: block;
            color: #f2f2f2;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            font-size: 17px;
        }

        /* Change the color of links on hover */
        .topnav a:hover {
            color: red;
        }

        /* Add an active class to highlight the current page */
        .topnav a.active {
            background-color: #234876;
            color: pink;
            font-size: 30px;
            text-transform: uppercase;
        }

        .top .icon hover {
            background: #04AA6D;
        }

        /* Hide the link that should open and close the topnav on small screens */
        .topnav .icon {
            display: none;
        }



        /* When the screen is less than 600 pixels wide, hide all links, except for the first one ("Home"). Show the link that contains should open and close the topnav (.icon) */
        @media screen and (max-width: 600px) {
            .topnav a:not(:first-child) {
                display: none;
            }

            .topnav a.icon {
                text-align: center;
                display: block;
            }

            .topnav {
                background: #234876;

            }
        }

        /* The "responsive" class is added to the topnav with JavaScript when the user clicks on the icon. This class makes the topnav look good on small screens (display the links vertically instead of horizontally) */
        @media screen and (max-width: 600px) {
            .topnav.responsive {
                position: relative;
            }

            .topnav.responsive a.icon {
                position: absolute;
                right: 0;
                top: 0;


            }

            .topnav.responsive a {
                float: none;
                display: block;
                text-align: left;
            }
        }
    </style>
    <!-- end css -->
</head>




    <body>

    <div class="topnav" id="myTopnav">
    <a href="#home" class="active">teachmefood</a>
    <a href="blog.html">News</a>
    <a href="contact.html">Contact</a>
    <a href="#about">About</a>
    <a href="register.html">Register</a>
    <a href="login.html">Login</a>
    <a href="javascript:void(0);" class="icon" onclick="myFunction()">
        <i class="fa fa-bars"></i>
    </a>

    <!-- <div class="join-us">
                <button class="btn-join-us ">Publish Now !</button>
            </div> -->
</div>

    @yield('contents')


    <script src="web\assets\javascript\main.js"></script>
    <script src="web\assets\javascript\google-map.js"></script>
</body>

</html>