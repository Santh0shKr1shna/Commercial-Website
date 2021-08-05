<!DOCTYPE php>
<php lang='en'>
    <head>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Poiret+One&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Zilla+Slab+Highlight&display=swap" rel="stylesheet">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://fonts.googleapis.com/css?family=Muli:900&display=swap" rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="stylesX.css">
        <script src="project.js"></script>
        <title>Events | PG</title>
    </head>
    <body>

        <style>
            #newsletter {
                padding: 5px;
            }
            #newsletter form {
                float: left;
                width: 60%;
            }
            #end {
                margin-top: 100px;
                border-top: #c93e34 3px solid;
            }
            
        </style>

        <header>
            <div class="container">
                <h1><span class="high">PETER</span> GRIFFIN'S Aeronautical Museum</h1>
                <div id="brand">
                    <nav>
                        <ul>
                            <li><a href="index.php">Home</a></li>
                            <li><a href="History.php">History</a></li>
                            <li class="cur"><a href="Events.php">Events</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
            <ul class="donate">
                <li style="margin-top: 10px; text-align: right;">  
                    <a href="../Project/signup.php" target="_blank"><button class="button"><span>Donate Now</span></button></a>
                </li> 
            </ul>     
        </header>

        <section id="newsletter">
            <div class="container">
                <h2 style="float: left">Subscribe to Our Newsletter</h2>
                <form action="process.php" style="float: right;">
                    <input type="email" placeholder="Enter email here">
                    <button type="submit" class="button_1">Subscribe</button>
                </form>
            </div>
        </section>
        
        <section id="evt">
            <div class="container">
                <article id="main">
                    <h1>Workshop:</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque vulputate accumsan risus. Aenean pretium, nibh in suscipit consectetur, tellus mi ultrices erat, finibus volutpat ante lacus ac sem. Suspendisse rutrum vel purus sit amet feugiat. Etiam mollis ligula nisi, eget laoreet lorem sollicitudin quis. Sed sem sapien, lobortis ac tempor at, laoreet vel mauris. Sed vitae odio venenatis, ullamcorper orci a, sodales tellus. Aenean elementum massa eu metus eleifend posuere. Proin ac dictum libero. Donec interdum posuere semper. In justo nisl, lobortis vitae dignissim ut, pharetra finibus diam.</p>
                    <img src="https://i.ytimg.com/vi/XSqaA6qgx1w/maxresdefault.jpg" height="360" width="640">
                    <h1>NASA in its 80's:</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque vulputate accumsan risus. Aenean pretium, nibh in suscipit consectetur, tellus mi ultrices erat, finibus volutpat ante lacus ac sem. Suspendisse rutrum vel purus sit amet feugiat. Etiam mollis ligula nisi, eget laoreet lorem sollicitudin quis. Sed sem sapien, lobortis ac tempor at, laoreet vel mauris. Sed vitae odio venenatis, ullamcorper orci a, sodales tellus. Aenean elementum massa eu metus eleifend posuere. Proin ac dictum libero. Donec interdum posuere semper. In justo nisl, lobortis vitae dignissim ut, pharetra finibus diam.</p>
                    <img src="https://s.abcnews.com/images/Technology/GTY_Challenger_Astronauts_ER_160128_16x9_1600.jpg" height="338" width="600">                    
                    <h1>Space MUN:</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque vulputate accumsan risus. Aenean pretium, nibh in suscipit consectetur, tellus mi ultrices erat, finibus volutpat ante lacus ac sem. Suspendisse rutrum vel purus sit amet feugiat. Etiam mollis ligula nisi, eget laoreet lorem sollicitudin quis. Sed sem sapien, lobortis ac tempor at, laoreet vel mauris. Sed vitae odio venenatis, ullamcorper orci a, sodales tellus. Aenean elementum massa eu metus eleifend posuere. Proin ac dictum libero. Donec interdum posuere semper. In justo nisl, lobortis vitae dignissim ut, pharetra finibus diam.</p>
                    <img src="https://noticias.upc.edu.pe/wp-content/uploads/2019/08/upcmun-1.jpg" height="259" width="430">
                </article>
            </div>
        </section>

<?php
    require "foot.php"
?>