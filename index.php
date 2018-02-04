<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Brian Martinez's Portfolio</title>
       <h1>Brian Martinez's Portfolio</h1>
        <style type="text/css">
            @import url("CSS/styles.css");
        </style>
        
        <link href="css/styles.css" rel="stylesheet" type="text/css" />
        <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
    </head>
    
    <body style="background-color:black; color=white ">
      <div class="navbar">
        <a href="index.html">Home</a>
        <a href="about.html">About</a>
        <a href="contact.html">Contact</a>
        <div class="dropdown">
          <button class="dropbtn" onclick="myFunction()">Media
            <i class="fa fa-caret-down"></i>
          </button>
          <div class="dropdown-content" id="myDropdown">
            <a href="https://www.facebook.com/profile.php?id=100014640902512">Facebook</a>
            <a href="https://www.linkedin.com/in/bmartinez55/">LinkedIn</a>
          </div>
        </div> 
      </div>
      <script>
        /* When the user clicks on the button, 
        toggle between hiding and showing the dropdown content */
        function myFunction() {
            document.getElementById("myDropdown").classList.toggle("show");
        }
        
        // Close the dropdown if the user clicks outside of it
        window.onclick = function(e) {
          if (!e.target.matches('.dropbtn')) {
            var myDropdown = document.getElementById("myDropdown");
              if (myDropdown.classList.contains('show')) {
                myDropdown.classList.remove('show');
              }
          }
        }
      </script>
      <br /><br />
        
        <main>
            <figure id="me">
                <img src="https://scontent-lax3-1.xx.fbcdn.net/v/t1.0-9/19702455_247778645720164_7999420145603026267_n.jpg?oh=86257cc2e53df7af2d69b9a3e1688675&oe=5AEBFF60" alt="Random Picture For Testing" width="450" height="750"/>
            </figure>
            <div id="welcomeText">
                <br>Hello</br>
                <p>Thank you for visiting my professional portolio website.</p>
                <p>I am a Junior Computer Science student that is a member of the CSin3 Program. 
                <p>Currently, I"m pursuing my Bachelor's Degree at California State University of Monterey Bay.</p>
                <p>I'm looking for a internship opportunity. Feel free to contact me for any questions or concerns.</p>
                <p>Thank you!</p>
                <br /><br />
                <em>"With ordinary talent and extraordinary <strong>preservance</strong>, all things are attainable"</em><br /> - Thomas F. Buxton
            </div>
        </main>
        
    </body>
    <footer>
            <hr>
            CST-336. 2018&copy; Martinez <br/>
            <strong>Disclaimer:</strong>
            The information in this website is fictious.</br>
            It is used for academic purposes.
            <figure id="foot">
                <img src="csumb.jpg">
            </figure>
    </footer>
</html>