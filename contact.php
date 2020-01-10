
<!DOCTYPE html>
<html>
  <head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    
    
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  </head>

  <body style="background-color: #f2f2f2;">
     
    <!-- Navigation Section -->
    <nav>
      <div class="nav-wrapper grey darken-4">
        <a href="./index.html" class="brand-logo"><span class="logo grey-text text-lighten-2">Jacky Tam</span</a>
        <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
        <ul class="right hide-on-med-and-down" id="right">
          <li><a href="about.html">About</a></li>
          <li><a href="contact.html">Contact Me</a></li>
          <li><a href="">Resume</a></li>
        </ul>
      </div>
    </nav>
  
    <ul class="sidenav" id="mobile-demo">
      <li><a href="about.html">About</a></li>
      <li><a href="contact.html">Contact Me</a></li>
      <li><a href="">Resume</a></li>
    </ul>

    <!-- About me section -->
    <div class="container">
      <div class="row">
          <div id="contact-title">
              <h4 style="font-weight: 500; color: #0277bd; margin-top: 50px;">Contact</h4>
              <div id="line"></div>
          </div>
      </div>
      
      <div class="row">
        <div id="contact-title">
            <h5>Let's work together!</h5>
        </div>
      </div>
      
      <div class="container">
        <div class="row">
          <form class="col s12" action="contact-form.php" method="post" enctype="text/plain">
            <div class="row">
              <div class="input-field col s6" >
                <input placeholder="First Name" name="first_name" type="text" class="validate">
              </div>
              <div class="input-field col s6">
                <input name="last_name" type="text" class="validate">
                <label for="last_name">Last Name</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12">
                <input name="email" type="email" class="validate">
                <label for="email">Email</label>
              </div>
            </div>
            <div class="row">
              <form class="col s12">
                <div class="row">
                  <div class="input-field col s12">
                    <textarea name="message" class="materialize-textarea"></textarea>
                    <label for="textarea1">Your Message</label>
                  </div>
                </div>
              </form>
            </div>
            <input type="submit" name="submit" value="Submit" class="waves-effect waves-light btn red darken-1">
          </form>
        </div>
      </div>
            
      <div class="row">
        <div id="contact-title">
            <h4 style="font-weight: 500; color: #0277bd; margin-top: 50px;">My LinkedIn</h4>
            <div id="line"></div>
        </div>
    </div>

    <div class="row">
      <div id="contact-title">
          <div id="Linkedin-logo" onclick="location.href='https://www.linkedin.com/in/jackytam1996/';"></div>
      </div>
  </div>

    </div>

 

    <!--Import Jquery-->
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <Script type="text/javascript" src="assets/js/scripts.js"></Script>
  </body>
</html>