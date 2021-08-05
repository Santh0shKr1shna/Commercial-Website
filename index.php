<?php
    session_start();
    require "head.php";
?>
    <body>

        

        <header>
            <div class="container">
                <h1><span class="high">PETER</span> GRIFFIN'S Aeronautical Museum</h1>
                <div id="brand">
                    <nav>
                        <ul>
                            <li class="cur"><a href="index.php">Home</a></li>
                            <li><a href="History.php">History</a></li>
                            <li><a href="Events.php">Events</a></li>
                        </ul>
                    </nav>
                </div>
                <?php
                    if (isset($_SESSION['user_email'])) {

                        
                        "<div class='dropdown'>
                            <label id='profile'>Profile</label>
                            <button id='profile' class='dropbtn'>▼</button>
                            <div class='dropdown-content'>
                                <a href='../include./logout.inc.php'>Logout</a>
                        </div>";
                    }

                    else {
                        
                        "<div class='profile'>
                            <a href='../Project/signup.html' target='_blank'><button class='button-sign'><span>Signup</span></button></a>
                        </div>";
                    }
                ?>
            </div>
            <ul class="donate">
                <li style="margin-top: 10px; text-align: right;">  
                    <a href="signup.php" target="_blank"><button class="button"><span>Donate Now</span></button></a>
                </li> 
            </ul>     
        </header>
        
        <section id="showcase">
            <div class="container">
                <h2>WELCOME TO,<br> THE PETER GRIFFIN'S MUSEUM</h2>
                <p>An elegant and alluring gallery of visual prsentation and behind the scene facts of<br>almost all the 
                    interstellar feats acieved by humanhind</p>
            </div>
        </section>
        
        <section id="newsletter">
            <div class="container">
            <?php

                if (isset($_SESSION['user_email'])) {
                    echo    "<h2 style='float: left'>You have subscribed to our newsletter!</h2>";
                }
                else {
                    echo    "<h2 style='float: left'>Subscribe to Our Newsletter</h2>
                            <form action='process.php' style='float: right;'>
                                <input type='email' placeholder='Enter email here'>
                                <button type='submit' class='button_1'><a href='signup.php'>Subscribe</a></button>
                            </form>";
                }
            ?>
            </div>
        </section>

        <section id="events">
            <h1>Events:</h1>
            <div class="container">
                    <div class="event">
                        <a href="Events.php"><img src="./img/evt1_new.jpg"></a>
                        <p>Get closer to place where <br>a space craft is made.</p>
                    </div>
                    <div class="event">
                        <a href="Events.php"><img src="https://media.wired.com/photos/5de68313a4136b0008e27b3b/master/w_1600%2Cc_limit/10228%252520GEMINI%2525206%2C%252520Vintage%252520Color%252520Photograph%252520of%252520Wally%252520Schirra.jpg"></a>
                        <p>Smell the rust in air, as you <br>hear the stories of vintage space.</p>
                    </div>
                    <div class="event">
                        <a href="Events.php"><img src="https://api.timeforkids.com/wp-content/uploads/2019/12/flags.jpg"></a>
                        <p>Be a delegate, voicing your country<br> at the space MUN.</p>
                    </div>
            </div>
        </section>    

        <section id="gallery">
            <div class="container">
                <h1>Memories...</h1>
                <p style="margin-bottom: 25px; margin-left: 10px;">Share your selfies and photos on twitter with <b>#nerd_photos</b> to get featured in the gallery :)</p>
                <div class="row">
                    <div class="column">
                        <img src="https://thumbs-prod.si-cdn.com/vyl2UHeKZ4PLlOVEa4cXfASsFsk=/fit-in/1600x0/https://public-media.si-cdn.com/filer/2c/67/2c67673a-3d62-4b68-a4c1-2a53c7e2c63f/img_0613.jpg" style="width: 100%;">
                        <img src="https://www.tripsavvy.com/thmb/7w0qbAPjvJFbX077WrjOHbN7lRA=/904x678/smart/filters:no_upscale()/U-HM_2014-4-56a2380a3df78cf7727360eb.jpg" style="width: 100%;">
                        <img src="https://media.tacdn.com/media/attractions-splice-spp-674x446/06/71/56/2e.jpg" style="width: 100%;">
                        <img src="" style="width: 150%;">
                    </div>
                    <div class="column">
                        <img src="https://mediaim.expedia.com/destination/2/a222385248a6b927b0516d684b04d711.jpg?impolicy=fcrop&w=536&h=384&q=high" style="width: 100%;">
                        <img src="https://washington-org.s3.amazonaws.com/s3fs-public/styles/gallery_full/public/gls_photos_space-shuttle-discovery-at-air-and-space-udvar-hazy_yesmydccool.jpg?itok=yy-ATlvNhttps://mk0dcphotoguide69e7p.kinstacdn.com/wp-content/uploads/2018/01/01-copyright-havecamerawilltravel-com-1.jpg" style="width: 100%;">
                        <img src="https://media-library.stackla.com/10/nasm/2021-05/60987b7f7d1b54a6299aaf21_f47d6a30-b280-11eb-93df-411a94f210f0.jpeg" style="width: 100%;">

                    </div>
                    <div class="column">
                        <div class="contain">
                            <div class="img_twitter">
                                <a href="https://twitter.com/?lang=en" target="_blank"><img src="https://media.timeout.com/images/105653190/image.jpg" style="width: 300%;"></a>
                                <div class="top-left" style="color:rgb(255, 255, 255)">Follow us on Twitter >></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <?php

            require "foot.php"
        ?>