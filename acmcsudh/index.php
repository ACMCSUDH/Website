<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>CSUDH ACM</title>
        <link rel="stylesheet" href="stylesheets/styles.css">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    </head>

    <body>
        <div id="header" style="background-color:#ab2227"> <!-- you can add style="background-color:#ab2227" to change header border color -->
            <div id="logo">
                <div id="logo_text">
                    <!-- class="logo_colour", allows you to change the colour of the text -->
                    <img src="img/CSUDHACMLogo1.png" style="width:60%"> 
                    
                    <!--<h1 class="bigfont">Association for Computing Machinery</h1>-->
                </div>
            </div>
            <div id="menubar">
                <ul id="menu">
                    <!-- put class="selected" in the li tag for the selected page - to highlight which page you're on -->
                    <li class="selected">
                        <a href="index.php">Home</a></li>
                    <li><a href="roster.html"> Sponsors</a></li>
                    <li><a href="about.html">About</a></li>
                    <li><a href="contact.html">Contact Us</a></li>
                </ul>
            </div>

        </div>

        <h2 class="w3-center" >Android Workshops</h2>

        <div class="w3-content w3-display-container"style="width:20%">
            <img class="mySlides" src="img/appOne.png" style="width:100%">
            <img class="mySlides" src="img/appTwo.png" style="width:100%">

            <button class="w3-button w3-black w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
            <button class="w3-button w3-black w3-display-right" onclick="plusDivs(1)">&#10095;</button>
        </div>

        <script>


            var slideIndex = 1;
            showDivs(slideIndex);

            function plusDivs(n) {
                showDivs(slideIndex += n);
            }

            function showDivs(n) {
                var i;
                var x = document.getElementsByClassName("mySlides");
                if (n > x.length) {slideIndex = 1} 
                if (n < 1) {slideIndex = x.length} ;
                for (i = 0; i < x.length; i++) {
                    x[i].style.display = "none"; 
                }
                x[slideIndex-1].style.display = "block"; 
            }

        </script>



        <h2 class="midfont"> General Meetings</h2>
        <p class="para" style="font-family: Segoe UI,Arial,sans-serif"> Tuesdays 10:30am - 11:15am in LIB 5717</p>
        <p>
        <div class="regfont" style="font-family: Segoe UI,Arial,sans-serif">
            <b>Purpose for 17-18:</b> 
            <div id="main2">
            <p class="para" style="font-family: Segoe UI,Arial,sans-serif">
                To introduce and use the proper tools to develop software that members are interested. The use of Ardunio will be use to 
                learn and understand use of circuits ,voltage and hardware. App development will be the main activity that will be concentrated
                throught the semester.
            </p>
                </div>
        </div>

        <div class="regfont">
        </div>
        <br>
      
        </p>
    </body>
</html>
