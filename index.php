<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Anton|Yanone+Kaffeesatz" rel="stylesheet">

    <title>Jacob Edler | Homepage</title>
  </head>
  <body>

    <!-- HEADER ----------------------------------------->

    <header>
      <nav class="nav">
        <div class="container">
            <div class="logo">
                <a href="#"><img src="css/img/logo.png" alt="logo"></a>
            </div>
            <div id="mainListDiv" class="main_list">
                <ul class="navlinks">
                    <li><a href="#home">HOME</a></li>
                    <li><a href="#about">ABOUT</a></li>
                    <li><a href="#work">WORK</a></li>
                    <li><a href="#contact">CONTACT</a></li>
                </ul>
            </div>
            <span class="navTrigger">
                <i></i>
                <i></i>
                <i></i>
            </span>
        </div>
    </nav>
    </header>

<!-- HOME ----------------------------------------->

    <section id="home">
      <hr>
      <h1>JAKKSWORDS</h1>
      <h2>graphic &amp; design</h2>
      <a href="#about">
        <i class="fas fa-hand-point-down"></i>
      </a>
    </section>

<!-- ABOUT ----------------------------------------->

    <section id="about">
      <h3>ABOUT</h3>
      <hr>
      <img src="css/img/avatar.png" alt="avatar">
      <h4>JAKKSWORDS | Jacob Edler</h4>
      <p>Hello!<br>My name is Jacob Edler and I'm a 23 year-old hobby-media-designer. Currently I'm searching for a job in media design. <br>May this website be a part of my application! <br>In the moment I'm working on a example web page, with the help of a course called "The Essential Web Developer Course". The Current Status of the Website can be seen below in the section <a href="https://vast-earth-49177.herokuapp.com/">"WORK"</a>.</p>
    </section>

<!-- WORK ----------------------------------------->

    <section id="work">
      <h3>WORK</h3>
      <hr>

      <div id="projects">
        <ul>
          <li><a href="#"><img src="css/img/coming soon.png" alt="project01"></a></li>
        </ul>
      </div>
    </section>

<!-- CONTACT ----------------------------------------->

    <?php include 'contact.php' ?>
<!-- FOOTER ----------------------------------------->

    <footer>
      <p>
        &copy; 2019 Jacob Edler
      </p>
    </footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="js/scripts.js"></script>
  </body>
</html>
