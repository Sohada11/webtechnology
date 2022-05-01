<?php
$name = "";
session_start();
if (isset($_SESSION['uname'])) {
    $name = $_SESSION['uname'];
}
if (empty($name)) {
    header("location:LoginPage.php");
}

?>
<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="indigo.css">
    <meta charset="UTF-8">
    <title>DashBoard</title>
    <script src="JS/Form_Validation.js"></script>

<body>
    <div class="full-page">
        <?php include 'header.php'; ?>
    </div>
    <div class="header" style="font-size: 15px;">
        <h1>Make us a part of your wedding</h1>

    </div>
    <!DOCTYPE html>
    <html>

    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
            * {
                box-sizing: border-box;
            }

            .row::after {
                content: "";
                clear: both;
                display: table;
            }

            [class*="col-"] {
                float: left;
                padding: 15px;
            }

            html {
                font-family: "Lucida Sans", sans-serif;
            }

            .header {
                background-color: #E5D2E1;
                color: #000000;
                padding: 15px;
            }

            .menu ul {
                list-style-type: none;
                margin: 0;
                padding: 0;
            }

            .menu li {
                padding: 8px;
                margin-bottom: 7px;
                background-color: #E5D2E1;
                color: #000000;
                box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 2px rgba(0, 0, 0, 0.24);
            }

            .menu li:hover {
                background-color: #0099cc;
            }

            .aside {
                background-color: #E5D2E1;
                padding: 15px;
                color: #000000;
                /*E5D2E1*/
                text-align: center;
                font-size: 15px;
                box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 2px rgba(0, 0, 0, 0.24);
            }

            .footer {
                background-color: #ffffff;
                color: #000000;
                text-align: center;
                font-size: 15px;
                padding: 15px;
            }


            /* For mobile phones: */
            [class*="col-"] {
                width: 100%;
            }

            @media only screen and (min-width: 600px) {

                /* For tablets: */
                .col-s-1 {
                    width: 8.33%;
                }

                .col-s-2 {
                    width: 16.66%;
                }

                .col-s-3 {
                    width: 25%;
                }

                .col-s-4 {
                    width: 33.33%;
                }

                .col-s-5 {
                    width: 41.66%;
                }

                .col-s-6 {
                    width: 50%;
                }

                .col-s-7 {
                    width: 58.33%;
                }

                .col-s-8 {
                    width: 66.66%;
                }

                .col-s-9 {
                    width: 75%;
                }

                .col-s-10 {
                    width: 83.33%;
                }

                .col-s-11 {
                    width: 91.66%;
                }

                .col-s-12 {
                    width: 100%;
                }
            }

            @media only screen and (min-width: 768px) {

                /* For desktop: */
                .col-1 {
                    width: 8.33%;
                }

                .col-2 {
                    width: 16.66%;
                }

                .col-3 {
                    width: 25%;
                }

                .col-4 {
                    width: 33.33%;
                }

                .col-5 {
                    width: 41.66%;
                }

                .col-6 {
                    width: 50%;
                }

                .col-7 {
                    width: 58.33%;
                }

                .col-8 {
                    width: 66.66%;
                }

                .col-9 {
                    width: 75%;
                }

                .col-10 {
                    width: 83.33%;
                }

                .col-11 {
                    width: 91.66%;
                }

                .col-12 {
                    width: 100%;
                }
            }
        </style>
    </head>

    <body>

        <div class="header" style=" font-size: 15px;">
        </div>
        <div class="row">
            <div class="col-3 col-s-3 menu">
                <ul>
                    <li>Wedding</li>
                    <li>Birthdays</li>
                    <li>Prom Night</li>
                    <li>Engagements</li>
                </ul>
            </div>

            <div class="col-6 col-s-9">
                <!DOCTYPE html>
                <html>

                <head>
                    <style>
                        * {
                            box-sizing: border-box;
                        }

                        input[type=text],
                        select,
                        textarea {
                            width: 100%;
                            padding: 12px;
                            border: 1px solid #ccc;
                            border-radius: 4px;
                            resize: vertical;
                        }

                        label {
                            padding: 12px 12px 12px 0;
                            display: inline-block;
                        }

                        input[type=submit] {
                            background-color: #A8769E;
                            color: white;
                            padding: 12px 20px;
                            border: none;
                            border-radius: 4px;
                            cursor: pointer;
                            float: right;
                        }

                        input[type=submit]:hover {
                            background-color: #45a049;
                        }

                        .container {
                            border-radius: 5px;
                            background-color: #f2f2f2;
                            padding: 20px;
                        }

                        .col-25 {
                            float: left;
                            width: 25%;
                            margin-top: 6px;
                        }

                        .col-75 {
                            float: left;
                            width: 75%;
                            margin-top: 6px;
                        }

                        /* Clear floats after the columns */
                        .row:after {
                            content: "";
                            display: table;
                            clear: both;
                        }

                        /* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
                        @media screen and (max-width: 600px) {

                            .col-25,
                            .col-75,
                            input[type=submit] {
                                width: 100%;
                                margin-top: 0;
                            }
                        }
                    </style>
                </head>

                <body>
                    <?php require_once 'Controller/bookingController.php'; ?>

                    <h2>Please fill up the form below</h2>

                    <form method="post">

                        <div class="container">
                            <div class="row">
                                <div class="col-25">
                                    <label for="fname">Full Name</label>
                                </div>
                                <div class="col-75">
                                    <input type="text" id="fname" name="fname" placeholder="Your name.." onblur="checkName()" onkeyup="checkName()">
                                    <br>
                                    <span class="red">
                                        <p id="nameErr">
                                            <?php
                                            if ($nameErr) {
                                                echo $nameErr;
                                            }
                                            ?>
                                        </p>
                                    </span>
                                    <br>
                                </div>
                            </div>
                        </div>
                        <div class="container">
                            <div class="row">
                                <div class="col-25">
                                    <label for="city">The cit of your event</label>
                                </div>
                                <div class="col-75">
                                    <select id="city" name="city">
                                        <option value="Dhaka">Dhaka</option>
                                        <option value="Chittagong">Chittagong</option>
                                        <option value="Sylhet">Sylhet</option>
                                        <option value="Rajshahi">Rajshahi</option>
                                    </select>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-25">
                                    <label for="phoneNo">Contact number</label>
                                </div>
                                <div class="col-75">
                                    <input type="text" id="phoneNo" name="phoneNo" placeholder="Your contactNo.." onblur="checkPhoneNo()" onkeyup="checkPhoneNo()">
                                    <br>
                                    <span class="red">
                                        <p id="phoneNoErr">
                                            <?php
                                            if ($phoneNoErr) {
                                                echo $phoneNoErr;
                                            }
                                            ?>
                                        </p>
                                    </span>
                                    <br>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-25">
                                    <label for="eventDate">Event date</label>
                                </div>
                                <div class="col-75">
                                    <input type="date" id="eventDate" name="eventDate" placeholder="Your last name..">
                                </div>
                            </div>

                            <br>
                            <div class="row">
                                <input type="submit" name="submit" value="Submit">
                            </div>
                        </div>

                </body>

                </html>

            </div>

            <div class="col-3 col-s-12">
                <div class="aside" style="font-size: 20px;">
                    <p>We are just a click away. Just fill up the form with essential information about your most awaited event. And we will get back to you within 48 hours or sooner</p>
                </div>
            </div>
        </div>

        <div align="center">
            <?php include 'footer.php'; ?>
        </div>

        </form>

    </body>

    </html>