<html>

    <head>

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

        <title>Userdashbord Footer</title>

        <style>

            *{

                margin: 0;

                padding: 0;

                box-sizing: border-box;

                font-family: sans-serif;

            }

            

            .body{

                display: flex;

                justify-content: flex-end;

                align-items: center;

                min-height: 100vh;

                flex-direction: column;

/*                margin-top: -150px;*/

            }

            

            footer{

                position: relative;

                width: 100%;

                height: auto;

                padding: 50px 100px;

                background: #111;

                display: flex;

                justify-content: space-between;

                flex-wrap: wrap;

            }

            

            footer .container{

                display: flex;

                justify-content: space-between;

                flex-wrap: wrap;

                flex-direction: row;

            }

            

            footer .container .sec{

                margin-right: 30px;

            }

            

            footer .container .sec.aboutus{

                width: 40%;

            }

            

            footer .container h2{

                position: relative;

                color: #fff;

                font-weight: 500;

                margin-bottom: 15px;

            }

            

            footer .container h2:before{

                content: '';

                position: absolute;

                bottom: -5px;

                left: 0;

                width: 50px;

                height: 2px;

                background: #f00;

            }

            

            footer p{

                color: #999;

            }

            

            .sci{

                margin-top: 20px;

                display: flex;

            }

            

            .sci li{

                list-style: none;

            }

            

            .sci li a{

                display: inline-block;

                width: 40px;

                height: 40px;

                background: #222;

                display: flex;

                justify-content: center;

                align-items: center;

                margin-right: 10px;

                text-decoration: none;

                border-radius: 4px;

            }

            

            .sci li a:hover{

                background: #f00;

            }

            

            .sci li a .fa{

                color: #fff;

                font-size: 20px;

            }

            

            .quickLinks{

                position: relative;

                width: 25%;

            }

            

            .quickLinks ul li{

                list-style: none;

            }

            

            .quickLinks ul li a{

                color: #999;

                text-decoration: none;

                margin-bottom: 10px;

                display: inline-block;

            }

            

            .quickLinks ul li a:hover{

                color: #fff;

            }

            

            .contact{

                width: calc(35% - 60px);

                margin-right: 0 !important;

            }

            

            .contact .info{

                position: relative;

            }

            

            .contact .info li{

                display: flex;

                margin-bottom: 16px;

            }

            

            .contact .info li span:nth-child(1){

                color: #fff;

                font-size: 20px;

                margin-right: 10px;

            }

            

            .contact .info li span{

                color: #999;

            }

            

            .contact .info li a{

                color: #999;

                text-decoration: none;

            }

            

            .contact .info li a:hover{

                color: #fff;

            }

            

            .copyrightText{

                width: 100%;

                background: #181818;

                padding: 8px 100px;

                text-align: center;

                color: #999;

            }

            

            @media (max-width: 991px){

                footer{

                    padding: 40px;

                    margin-top: 150px;

                }

                footer .container{

                    flex-direction: column;

                }

                footer .container .sec{

                    margin-right: 0;

                    margin-bottom: 40px;

                }

                footer .container .sec.aboutus,

                .quickLinks,

                .contact{

                    width: 100%;

                }

                .copyrightText{

                    padding: 8px 40px;

                }

            }

            

        </style>

    </head>

    <body>

        <div class="body">

        <footer>

            <div class="container">

                <div class="sec aboutus">

                    <h2>About Us</h2>

                    <p>In 2020,  we started ESST as dedicated Efficient shopping in minimum time platform to locate people on perticular product which they want to buy in short time.In following years, the website will turned into one of the most significant information security channels and working as a bridge between a large number of communities including leading security researchers, geeks, techies, business grads, CISOs, along with thousands of security professionals.We are continuously working in the direction to better the platform and would love to hear your valuable thoughts and feedback to make it more resourceful.</p>

                    <ul class="sci">

                    <li><a href="https://facebook.com"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>

                    <li><a href="https://instagram.com"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>

                    <li><a href="https://twitter.com"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>

                    <li><a href="https://github.com"><i class="fa fa-github" aria-hidden="true"></i></a></li>

                </ul>

                </div>

                <div class="sec quickLinks">

                    <h2>Quick Links</h2>

                    <ul>

                        <li><a href="user_aboutus.php">About</a></li>

                        <li><a href="user_contactus.php">Contact</a></li>

                        <li><a href="user_Report.php">Report Bug</a></li>

                        <li><a href="user_Team.php">Team</a></li>

                    </ul>

                </div>

                <div class="sec contact">

                    <h2>Contact</h2>

                    <ul class="info">

                        <li>

                            <span><i class="fa fa-map-marker" aria-hidden="true"></i></span>

                            <span>Efficient Shopping in Short Time<br>

                                SSEC, Sidsar, Bhavnagar, 364060<br>

                                India

                            </span>

                        </li>

                        

                        <li>    

                            <span><i class="fa fa-phone" aria-hidden="true"></i></span>

                            <p><a href="tel:180-222-1111">180-222-1111</a><br>

                            <a href="tel:180-222-1112">180-222-1112</a>

                            </p>

                        </li>

                        

                        <li>    

                            <span><i class="fa fa-envelope" aria-hidden="true"></i></span>

                            <p><a href="mailto:admin@esst.infinityfreeapp.com">esst@gmail.com</a></p>

                        </li>

                    </ul>

                </div>

            </div>

        </footer>

        <div class="copyrightText">

            <p>Copyright © 2021 Efficient Shopping in Short Time. All Rights Reserved.</p>

        </div>

        </div>

    </body>

</html>