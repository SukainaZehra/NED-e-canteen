<?php
require("header.php");
?>
    <body >
    <div class="breadcrubs">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcurbs-inner text-center">
                        <h3 class="breadcrubs-title">
                        Feedback
                        </h3>
                        <ul>
                            <li>Please provide your feedback below:</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <div class="container">
            <div class="imagebg"></div>
            <div class="row " >
                <div class="col-md-6 col-md-offset-3 form-container">
                    <form role="form" method="post" id="reused_form">
                        <div class="row">
                            <div class="col-sm-12 form-group">
                                <label>How do you rate your overall experience?</label>
                                <p>
                                    <label class="radio-inline">
                                        <input type="radio" name="experience" id="radio_experience" value="bad" >
                                        Bad 
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="experience" id="radio_experience" value="average" >
                                        Average 
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="experience" id="radio_experience" value="good" >
                                        Good 
                                    </label>
                                </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 form-group">
                                <label for="comments"> Comments:</label>
                                <textarea class="form-control" type="textarea" name="comments" id="comments" placeholder="Your Comments" maxlength="6000" rows="7"></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6 form-group">
                                <label for="name"> Your Name:</label>
                                <input type="text" class="form-control" id="name" name="name" required>
                            </div>
                            <div class="col-sm-6 form-group">
                                <label for="email"> Email:</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 form-group">
                                <a style="
                                background: #e54c2a none repeat scroll 0 0;
                                color: #fff;
                                display: inline-block;
                                font-weight: 600;
                                padding: 13px 35px;
                                text-transform: uppercase;
                                float:  right;
                            " href="succeed.php">Post </a>
                            </div>
                        </div>
                    </form>
                    <!--<div id="success_message" style="width:100%; height:100%; display:none; "> <h3>Posted your feedback successfully!</h3> </div>-->
                    <!--<div id="error_message" style="width:100%; height:100%; display:none; "> <h3>Error</h3> Sorry there was an error sending your form. </div>-->
                </div>
            </div>
        </div>
    </body>

<?php
require("footer.php");
?>