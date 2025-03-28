<div id="wrapper">
    <div id="wrapper2">

        <div id="wrapper_sub">

            <!-- header -->
            <?php include "header-menu.html" ?>
            <div class="clear"></div>
            <div id="wrapper2_sub">
                <!-- sub page header-->
                <div id="sub_page_header">
                    <div class="left">
                        <h1 class="shadow">Contact Us </h1>
                        <!-- Page navigation-->
                        <div class="breadcrumb shadow">You are here: <a href="index.php">Home</a> \ Contact Us</div>
                        <!-- /Page navigation-->
                    </div>

                </div>
                <!-- /sub page header-->


                <!-- main -->
                <div id="main">

                    <!-- Page Left-->
                    <div class="content">
                        <!-- contact form -->
                        <div id="contact_form">
                            <form name="form" id="form" method="post" action="send.php">
                                <ul>
                                    <li><label for="name">Your name: (*)</label><input id="name" type="text"
                                            name="name" /><span id="errorname" style="color: red;"></span></li>
                                    <li><label for="email">Your Email: (*)</label><input id="email" type="text"
                                            name="email" /><span id="erroremail" style="color: red;"></span></li>
                                    <li><label for="phone">Phone Number: (*) </label><input id="phone" type="text"
                                            name="phone" /> <span id="errorphone" style="color: red;"></span> </li>
                                    <li><label for="message">Your message: (*)</label><textarea id="message"
                                            name="message" rows="8" cols="40"></textarea><span id="errormessage"
                                            style="color: red;"></span></li>
                                    <li><input type="submit" class="button" value="Send" onclick="return validate()" />
                                    </li>
                                </ul>
                            </form>
                        </div>
                        <!-- /contact form -->

                    </div>
                    <!--/ Page Left-->
                    <!-- Page Right-->
                    <!-- Page Right-->
                    <div class="sidebar">
                        <div class="sidebar_header"></div>
                        <div class="sidebar_content">


                            <!-- box -->
                            <h4 class="side_title">Contact Us</h4>
                            <div class="box middle">
                                <div class="textarea">
                                    <!-- sub link -->
                                    <ul>
                                        <li><b>Address:
                                                <pre><b>New Bharath Nagar Street No.9,<br/> Near KKR Function Hall Lane, <br/>Uppal , Hyderabad , Telangana,<br/> 500039 India</b></pre>
                                        </li>
                                        <li><b>Contact No : </b> +91 9032002121 <br /></li>
                                        <li><b>E-Mail: </b> info@hansujasolutions.com</li>
                                    </ul>
                                </div>
                            </div>
                            <!-- /box -->

                            <!-- box -->
                            <h4 class="side_title">Google Map</h4>
                            <div class="box middle">
                                <div class="textarea">
                                    <iframe
                                        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15228.488722325936!2d78.5661667!3d17.4059232!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x54857b9e243aa44a!2sHansuja+Solutions!5e0!3m2!1sen!2sin!4v1502003625440"
                                        width="300" height="250" frameborder="0" style="border:0"
                                        allowfullscreen></iframe>




                                </div>
                            </div>
                            <!-- /box -->



                        </div>
                        <div class="sidebar_bottom"></div>
                    </div>
                    <!--/  Page Right -->
                    <!--/  Page Right -->
                    <div class="clear"></div>
                    <div class="cont4">

                        <h4 align="center" style="color:#E82F00; padding-top:10px; "></h4>

                    </div>
                    <!-- footer -->
                    <?php include "footer.html" ?>
                    <!-- footer -->

                </div>

                <!-- footer -->
            </div>
        </div>