
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="src/styles.css">
  <script src="https://kit.fontawesome.com/b3efaa88b1.js" crossorigin="anonymous"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700;800&amp;display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600&amp;family=Poppins:wght@300;400;600;700;800&amp;display=swap" rel="stylesheet">
  <link rel='stylesheet' href="https://bootswatch.com/cosmo/bootstrap.min.css">
  <title>Portfolio</title>
</head>
<body>
  <section class="hero">
    <nav>
      <img class="logo" src="src/images/JA-logos_white.png" alt="Jelani Alexander's logo">
      <ul id="nav-list">
        <li>
          <a href="#about-me">About me</a>
        </li>
        <li>
          <a href="#projects">Projects</a>
        </li>
        <li>
          <a href="#contact-me">Contact</a>
        </li>
        <div class="langWrap">
          <a href="#" language="english">EN</a> <a href="#" language="english">JP</a>
        </div>
      </ul><button class="hamburger" id="hamburger"></button>
    </nav>
    <div class="hero-area">
      <div class="hero-text">
        <h1>Jelani Alexander</h1>
        <p>Full Stack Developer</p>
        <div class="button">
          <a href="#about-me">About me</a>
        </div>
      </div>
      <div class="socials">
        <div>
          <a href="https://www.linkedin.com/in/jelani-alexander-a4a18025/" class="social"><svg xmlns="http://www.w3.org/2000/svg" fill="#ffffff" width="50" height="50" viewbox="0 0 24 24">
          <path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"></path></svg></a>
        </div>
        <div>
          <a href="https://github.com/AlexJelani" class="social"><svg xmlns="http://www.w3.org/2000/svg" fill="#ffffff" width="50" height="50" viewbox="0 0 24 24">
          <path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-4.466 19.59c-.405.078-.534-.171-.534-.384v-2.195c0-.747-.262-1.233-.55-1.481 1.782-.198 3.654-.875 3.654-3.947 0-.874-.312-1.588-.823-2.147.082-.202.356-1.016-.079-2.117 0 0-.671-.215-2.198.82-.64-.18-1.324-.267-2.004-.271-.68.003-1.364.091-2.003.269-1.528-1.035-2.2-.82-2.2-.82-.434 1.102-.16 1.915-.077 2.118-.512.56-.824 1.273-.824 2.147 0 3.064 1.867 3.751 3.645 3.954-.229.2-.436.552-.508 1.07-.457.204-1.614.557-2.328-.666 0 0-.423-.768-1.227-.825 0 0-.78-.01-.055.487 0 0 .525.246.889 1.17 0 0 .463 1.428 2.688.944v1.489c0 .211-.129.459-.528.385-3.18-1.057-5.472-4.056-5.472-7.59 0-4.419 3.582-8 8-8s8 3.581 8 8c0 3.533-2.289 6.531-5.466 7.59z"></path></svg></a>
        </div>
      </div>
    </div>
  </section>
  <section class="sub-section" id="about-me">
    <div class="information">
      <h2>About me</h2>
      <p>Hello. My name is Jelani Alexander. I am a Software Developer with a passion for developing user friendly applications.</p>
    </div>
    <div class="headshot-container"><img class="headshot" src="src/images/jelaniAlexander.jpg" alt="Jelani Alexander headshot"></div>
  </section>
  <section class="sub-section-alternative" id="projects">
    <h2>Projects</h2>
    <div class="project-container">
      <div class="project-card">
        <img class="project-image" src="" alt="Project One Image">
        <h3>Project One</h3>
        <p class="subtext">This is my project and some text about it. I enjoyed making this project.</p>
        <hr>
        <p class="subtext"><a class="project-link" href="https://github.com/AlexJelani">View here</a></p>
      </div>
      <div class="project-card">
        <img class="project-image" src="" alt="Project One Image">
        <h3>Project Two</h3>
        <p class="subtext">This is my project and some text about it. I enjoyed making this project.</p>
        <hr>
        <p class="subtext"><a class="project-link" href="https://github.com/AlexJelani">View here</a></p>
      </div>
      <div class="project-card">
        <img class="project-image" src="" alt="Project One Image">
        <h3>Project Three</h3>
        <p class="subtext">This is my project and some text about it. I enjoyed making this project.</p>
        <hr>
        <p class="subtext"><a class="project-link" href="https://github.com/AlexJelani">View here</a></p>
      </div>
      <div class="project-card">
        <img class="project-image" src="" alt="Project One Image">
        <h3>Project Four</h3>
        <p class="subtext">This is my project and some text about it. I enjoyed making this project.</p>
        <hr>
        <p class="subtext"><a class="project-link" href="https://github.com/AlexJelani">View here</a></p>
      </div>
    </div>
  </section>
  <footer id="contact-me">
    <div class="container">
    
      <h1 class="contact">Contact me</h1>
      <p class="contact-two">Feel free to contact me!</p>


    <form action="mail.php"      method="post" >
        <label for="name">Name</label> <input type="text" name="name" id="name"> 
        <label for="email">Email:</label> <input type="email" name="email" id="email"> 
        <label for="subject">Subject:</label> <input type="text" name="subject" id="subject">
         <label for="message">Message</label> 
        <textarea name="message" id="message" cols="30" rows="10"></textarea>
         <input type="submit" name="submit" value="submit">
      </form>
    </div>
    <p>Contact me</p>
    <p>jelanialexander82@gmail.com</p>
    
  </footer>
  <script src="src/app.js"></script>
</body>
</html>