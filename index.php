<?php
session_start();
if (!isset($_SESSION["user"])) {
   header("Location: login.php");
}
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Whatsapp Parser</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" />

    <!-- Chart JS -->
    <script crossorigin src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.bundle.min.js"></script>

    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

    <!-- Bootstrap JS -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <style>
        .graph, .initial {
            display: none;
        }
        #top{
            text-align: center; 
            color:#16a085; 
            font-family: Helvetica, fantasy; 
            font-weight: 500;
            margin-top: 20px;
        }
        #bttn{
            margin-left: 1000px;
            color: white;
            background-color: white;
            padding: 10px 20px;
            border-top-color: white;
            border-left: white;
            border-right: white;
            border-bottom: white;
            display: flex;
        }
        a:visited{
            color: white;
        }
    </style>
  </head>
  <body>
    <div style="height:95%; width:95%; margin-left: auto; margin-right: auto;">
        <div style="height:98%; width:98%;  margin-left: auto; margin-right: auto; padding-top: 10px;">
            <button id="bttn"><a href="logout.php" class="btn btn-warning">Logout</a></button>
            <p id="top" class="display-3" style="font-size: 60px; display:inline; margin-top: 30px;">
            <img src="./icons/WhatsApp.png" alt="icon" style="width: 8%; margin-left:250px"/>
            WhatsApp Wrap
            </p><br/><br/>

            <div class="policy ">
                <div class="row">
                    <div class="col-lg-6">
                    
                        <p style="color: #16a085; font-size: 20px;">PRIVACY POLICY:</p>
                    
                        <p style="font-size: 15px; color: black;">
                        This page informs you of our policies regarding the collection, use, and
                        disclosure of personal data when you use our Service and the choices you
                        have associated with that data.
                        </p>
                    
                        <p style="color: #16a085; font-size: 20px;">INFORMATION COLLECTION AND USE</p>
                    
                        <p style="font-size: 15px; color: black; justify-content: flex-start;">
                        We <b><u>do not</u></b> collect any data. Everything happens on the client-side.
                        </p>
                    
                        <p style="color: #16a085; font-size: 20px;">TYPES OF DATA COLLECTED</p>
                    
                        <p style="color: #16a085; font-size: 18px;">PERSONAL DATA</p>
                    
                        <p style="font-size: 15px; color: black; justify-content: flex-start;">
                        No personal data is collected.
                        </p>
                    
                        <p style="color: #16a085; font-size: 20px;">USAGE DATA</p>
                    
                        <p style="font-size: 15px; color: black; justify-content: flex-start;">
                        No usage data is collected.
                        </p>
                    
                        <p style="color: #16a085; font-size: 20px;">TRACKING AND COOKIES DATA</p>
                        <p style="font-size: 15px; color: black; justify-content: flex-start;">
                        Website does not use cookies or tracking data.
                        </p>
                    
                        <p style="color: #16a085; font-size: 20px;">CONTACT US</p>
                        <p style="font-size: 15px; color: black; justify-content: flex-start;">If you have any questions about this Privacy Policy, please contact us:<br/>
                         By email: whatsappwrap13@gmail.com</p><br/>

                        <button type="button" onclick="continueFunc()" class="btn btn-success" style="background-color: #16a085; color:white; height:8%; font-size: 11px; padding:20px 50px; margin-left: 390px">
                            I UNDERSTAND AND CHOOSE TO CONTINUE
                        </button>
                    </div>
                    <div class="col-lg-6">
                        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img class="d-block w-100" src="images/part-1.png" alt="First slide" style="width: 50%">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="images/part-2.png" alt="Second slide" style="width: 50%">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="images/part-3.png" alt="Third slide" style="width: 50%">
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
   

    <div class="initial">
        <fieldset>
            <div class="form-group" style="width: 60%; margin-left: auto; margin-right: auto;">
                <div class="input-group mb-3">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="inputFile" />
                        <label class="custom-file-label" for="inputFile">Choose your Whatsapp Chat file</label>
                    </div>
                </div>
            </div>
        </fieldset>

        <br /><br />

        <div style="text-align: center;">
        <h4>Note</h4>
            <p>
                I <u><b>do not</b></u> collect any data. <br>
                This is important as it won't work otherwise. <br>
                Export the chat file with the method you are comfortable with.
            </p>
        </div>

        <br /><br />

        <div style="text-align: center;">
            <h4>How to get Whatsapp Chat file</h4><br/><br/>
                <div class="row">
                    <div class="col-lg-6">
                        Step 1. When inside the chat, click the <u>three dot icon</u> <br> <img src="images/step_1.jpg" alt="three dots" style="width: 40%"> <br> <br>

                        Step 2. Click <u>More ></u> <br> <img src="images/step_2.jpg" alt="dot menu" style="height: 30%">
                    </div>
                    <div class="col-lg-6">
                        Step 3. Click <u>Export Chat</u> <br> <img src="images/step_3.jpg" alt="more menu" style="height: 30%; width:40%"> <br><br><br/>    

                        Step 4. Select <u>WITHOUT MEDIA</u> <br><br/> <img src="images/step_4.jpg" alt="without media image" style="width: 80%; height:15%"><br><br><br><br/><br/><br/><br/><br/><br/>
                    </div>
                </div>
            </div>
        </div>

        <div>
            <div style="height: 600%; width: 87%; margin-left: auto; margin-right: auto;  padding: 5%; padding-bottom: 2.5%; text-align: center">
                <div class="row">
                    <div class="col-lg-6 graph">
                            <h4>Messages Sent</h4>
                            <canvas id="msgs" width="100%" height="100%"></canvas>
                        </div>
                        <div class="col-lg-6 graph">
                            <h4>Words Used</h4>
                            <canvas id="wrds" width="100%" height="100%"></canvas>
                        </div>
                    </div> <br>

                        <div class="col-lg-6" style="align-content: center;">
                            <a href="#first" class="graph">
                                <button type="button" class="btn btn-success" style="background-color: #FFD700; color:black">
                                    Check most used words and Media Stats
                                </button>
                            </a>
                        </div>
                    </div>
                </div>

                <div style="height: 600%; width: 87%; margin-left: auto; margin-right: auto; padding: 5%; padding-top: 2.5%; text-align: center">
                    <div class="row" id="second">
                        <div class="col-lg-6 graph">
                            <h4>Most Used non-stop Words</h4>
                            <canvas id="topWords" width="100%" height="100%; padding: 2%"></canvas>
                        </div>
                        <div class="col-lg-6 graph">
                            <h4>Media Sent</h4>
                            <canvas id="mda" width="100%" height="100%"></canvas>
                        </div>
                    </div><br><br>
                    <div class="row">
                        <div class="col-lg-4">
                            <a href="#third" class="graph">
                                <button type="button" class="btn btn-success" style="background-color: #FFD700; color:black;">
                                    View Timings Stats
                                </button>
                            </a>
                        </div>
                        <div class="col-lg-4">
                            <a href="#top" class="graph">
                                <button type="button" class="btn btn-success" style="background-color: #FF4040; color:white;">
                                    Go up
                                </button>
                            </a>
                        </div>
                    </div> <br><br><br>
                
                    <div id="third" class="graph" style="height: 600%; width: 87%; margin-left: auto; margin-right: auto; padding: 5%; padding-top: 2.5%; text-align: center">
                        <h4>Timings</h4>
                        <canvas id="times" width="100%" height="50%; padding: 2%"></canvas> <br><br>

                        <div class="row">
                            <div class="col-lg-4">
                                <a href="#fourth" class="graph">
                                    <button type="button" class="btn btn-success" style="background-color: #FFD700; color:black;">
                                        View Timings Stats By Date
                                    </button>
                                </a>
                            </div>
                            <div class="col-lg-4">
                                <a href="#top" class="graph">
                                    <button type="button" class="btn btn-success" style="background-color: #FF4040; color:white;">
                                        Go up
                                    </button>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div id="fourth" class="graph" style="height: 600%; width: 87%; margin-left: auto; margin-right: auto; padding: 5%; padding-top: 2.5%; text-align: center">
                        <h4>By Date</h4>
                        <canvas id="plotDates" width="100%" height="50%; padding: 2%"></canvas> <br><br>

                        <div class="row">
                                <div class="col-lg-3">
                                    <a href="#top" class="graph">
                                        <button type="button" class="btn btn-success" style="background-color: #FF4040; color:white;">
                                            Go up
                                        </button>
                                    </a>
                                </div>
                            </div>
                    </div>

                    <div id="fifth" class="graph" style="height: 600%; width: 87%; margin-left: auto; margin-right: auto; padding: 5%; padding-top: 2.5%; text-align: center">
                        <h4>Emojis Used</h4>
                        <canvas id="emojis" width="100%" height="50%; padding: 2%"></canvas> <br><br>

                        <div class="row">
                                <div class="col-lg-3">
                                    <a href="#top" class="graph">
                                        <button type="button" class="btn btn-success" style="background-color: #FF4040; color:white;">
                                            Go up
                                        </button>
                                    </a>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="scripts/data.js"></script>
    <script src="scripts/graph_wv.js"></script>
  </body>
</html>
