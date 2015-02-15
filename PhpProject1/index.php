<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <!-- Core Bootstrap CSS -->
        <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
        <!-- Fonts -->
        <link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet">
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>         
        <link href='http://fonts.googleapis.com/css?family=Megrim' rel='stylesheet' type='text/css'>        
        <link href="master.css" rel="stylesheet">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>

        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
        <script type="text/javascript" src="master.js"></script>
        <meta charset="UTF-8">
        <title> Mido Assran </title>
    </head>
    <body>

        <div class="jumbotron">
            <div class="container">
                <h1> Mido Assran </h1>
            </div>
        </div>

         <div class="errMsge">
            <div class="alert alert-warning">
                <a href="#" class="close">&times;</a>
                <p><strong>Uh oh!</strong> Did you make sure to fill out all of the fields?<p/>
            </div>
        </div>
        <div class="msge">
            <div class="alert alert-success">
                <a href="#" class="close">&times;</a>
                <p><strong>Success!</strong> Your feedback has been sent successfully.<p/>
            </div>
        </div>
        <!-- Beginning of the About Me section-->
        <section class="about" id="about">
            <br><br><br><br><br><br>
            <div class="about-me-title">
                <h1> About Me </h1>
            </div>
            <br><br><br>
            <div class="container">
                <div class="row">
                    <div class="col-sm-7 col-md-3">
                        <h3>Summary</h3>
                        <p>I am a 3rd year (Junior) honours electrical engineering student (with a software concentration) at McGill University, with an interest in technology - particularly programming; nanotechnology and semiconductor applications engineering; remote banking (database security); web scripting; digital and analog circuits; alternative energy engineering; web development; and mobile application development. <br><br> My long term objective is to utilize my passion for technology to create a positive impact on the world, and the people who live in it.</p>
                    </div>
                    <!-- View only visible on mobile -->
                    <div class="col-sm-5 visible-sm visible-xs">
                        <img src="mcgill.png" width:"116" height:"220">
                    </div>
                    <div class="col-md-6 hidden-sm hidden-xs">
                        <img src="ewblogo.png" width:"116" height:"220">
                             <img src="mcgill.png" width:"116" height:"220">
                    </div>
                    <div class="col-sm-7 col-md-3">
                        <h3>Involvement</h3>
                        <p>I am a workshop facilitator working for the Engineers Without Borders NGO under the Youth Engagement branch.<br><br> The McGill Chapter of Youth Engagement Initiative seeks to address issues in the Montreal education system to create a better learning environment wherein students become self engaged learners and activists in their own communities. <br><br> I truly believe that we can create a better global environment if we give people the tools to better their communities and the belief that they can.</p>
                    </div>
                    <div class="col-sm-5 visible-sm visible-xs">
                        <img src="ewblogo.png" width:"116" height:"220">
                    </div>
                </div>
            </div>
            <br><br><br><br><br><br><br><br>
        </section>



        <!-- Beginning of the projects section-->
        <section class="projects" id="projects">
            <br><br><br>
            <div class="section-title">
                <h1> Projects </h1>
            </div>
            <br><br/>
            <div class="container">
                <h3>iPhone App |&nbsp Fletcha</h3>
                <!-- App Icon and description visible on mobile devices-->
                <div class="row visible-xs visible-sm mobileView" id="appIC">
                    <div class="col-xs-5">
                        <img src="fletcha.png">
                    </div>
                    <div class="col-xs-7">
                        <p>Fletcha makes your friends just a pointer away! Request a friend's location, then wait until they accept... then the magic happens. A pointer will rotate to point at your friend (with the added option to see them on a map) while their distance from you is displayed below. Never get lost in a crowd again!</p>
                    </div>
                </div>
                <br>
                <!-- Screenshots visible only on non-mobile devices-->
                <div class="row screenshots hidden-xs hidden-sm thumbnail">
                    <div class="col-md-4">
                        <img src="fsc32.png">
                    </div>
                    <div class="col-md-4">
                        <img src="fsc22.png">
                    </div>
                    <div class="col-md-4">
                        <img src="fsc12.png">
                    </div>
                    <!-- Used to fix alignment issues in rows-->
                    <div class="clearfix visible-md-block"></div>
                </div>
                <div class="icon-container">
                    <a href="https://itunes.apple.com/us/app/fletcha/id912162737?mt=8">
                        <img src="download.png" width="203" height="60">
                    </a>
                </div>
                <br><br><br><br><br><br><br><br>
            </div>
        </section>

        <section class="contact" id="contact">
            <br><br><br><br><br><br><br><br>
            <div class="container">
                <div class="section-title" >
                    <h1>Contact</h1>
                    <br>
                </div>				
                <h4> Feel free to reach out for collaboration or other information. </h4> <br>
                <div class="contact-banner" align="center">
                    <ul class="list-inline">
                        <li>
                            <a href="mailto:mahmoud.assran@mail.mcgill.ca" class="btn btn-default btn-lg">
                                <i class="fa fa-envelope fa-fw"></i>
                                <span class="network-name">Email</span>
                            </a>
                        </li>
                        <li>
                            <a href="http://ca.linkedin.com/pub/mido-assran/a7/8b8/757" class="btn btn-default btn-lg">
                                <i class="fa fa-linkedin-square fa-fw"></i>
                                <span class="network-name">LinkedIn</span>
                            </a>
                        </li>
                        <li>
                            <a href="http://google.com/+midoassran" class="btn btn-default btn-lg">
                                <i class="fa fa-google-plus fa-fw"></i> 
                                <span class="network-name">Google+</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </section>

        <?php
        // If this URI received a POST request with the given variable id
        if (isset($_POST['add'])) {
            $servername = "127.0.0.1";
            $username = "homestead";
            $password = "secret";
            $database = "homestead";
            $port = "33060";

            // Create connection
            $conn = new mysqli($servername, $username, $password, $database, $port);

            // Check connection
            if ($conn->connect_error) {
                // die("Connection failed: " . $conn->connect_error);
            }
            // echo "Connected successfully";
            // For compatability with older PHP
            if (!get_magic_quotes_gpc()) {
                $name = addslashes($_POST['name']);
                $feedback = addslashes($_POST['feedback']);
                $canuse = addslashes($_POST['canuse']);
                $email = addslashes($_POST['email']);
            } else {
                $name = $_POST['name'];
                $canuse = $_POST['canuse'];
                $feedback = $_POST['feedback'];
                $email = $_POST['email'];
            }
            $sql = "INSERT INTO Comments (feedback, name, canuse, email)" .
                    "VALUES ('$feedback', '$name', $canuse, '$email')";
            if ($conn->query($sql) === TRUE) {
                echo '<script type="text/javascript">'
                , 'PFEEDBACK.subFeedback();'
                , '</script>'
                ;
                // $last_id = $conn->insert_id;
                // echo "New record created successfully. Last inserted ID is: " . $last_id;
            } else {
                 echo '<script type="text/javascript">',
                         'PFEEDBACK.errorMsge();',
                         '</script>';
            }
        }
        ?>  

        <section id="feedback">
            <div class="container">

                <form method="post" action="<?php $_PHP_Self ?>">
                    <div class="form-group">
                        <input type="text" name="name" id="name"
                               class="form-control status-box" 
                               placeholder="Got a name?">
                        <br>
                        <input type='email' name='email' id='email'
                               class='form-control status-box'
                               placeholder="How about an email address?">
                        <br/>
                        <textarea name="feedback" id="feedback"  cols="2" rows="4" 
                                  class="form-control status-box" 
                                  placeholder="Any feedback on this webpage?"></textarea>

                        <br/>

                        <label>Are you ok with being contact for more information?</label><br/>
                        <input type="radio" name="canuse" value='1'> Yes
                        <input type="radio" name="canuse" value='0'> No<br><br/>
                        <input name="add" type="submit" id="add" class="btn btn-default pull-right"
                               value="Submit"><br/>
                    </div>
                </form>
                <ul class="posts">
                </ul>
            </div>
        </section>
        <br><br><br><br><br><br><br><br>
        <h5 class="copyright">Mido Assran &copy 2014</h5>
        <br><br><br>
    </body>

</html>