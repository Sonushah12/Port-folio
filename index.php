<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>



    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&family=Poppins:wght@100;200;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://unpkg.com/transition-style">
    <title>Sonu - Devloper Portfolio</title>
</head>
<body>


<div transition-style="in:circle:bottom-right">
    <header>
<?php include "navbar.php" ?>
</header>


<main>
    <section class="firstsection">
        <div class="leftsection">
            Hi, My name is <span class="purple">Sonu</span>
             
            <span>and I am a web passionate</span>
            <span id="element"></span>
        </div>
        <div class="rightsection">
            <img src="bg.png" alt="">
        </div>
    </section>
<hr>
    <section>
    <!-- Introduction -->
    <?php include "introduction.php"?>
    </section>


    <section>
    <!-- My SKills -->
    <?php include "Skills.php"?>
    <!-- <section class="thirdSection">

        <h1>Skill</h1>
        <span class="skills"></span>

     <div class="box">
        <div class="vertical">
            <img class="image-top" src="bg.png" alt="">
            <div class="title">
                TECHNICAL SKILL
            </div>
            <div class="desc">
                <p>Programming Languages</p>
                (PHP, 
                JAVA, C, PYTHON, 
                BASIC JAVASCRIPT, 
                DART, BASIC RUBY)
            </div>
            
        </div>
        <div class="vertical">
            <img class="image-top" src="bg.png" alt="">
            <div class="title">
                Web Development 
            </div>
            <div class="desc">
                HTML, CSS, PHP, 
                BASIC JAVA SCRIPT
            </div>
        </div>

        <div class="vertical">
            <img class="image-top" src="bg.png" alt="">
            <div class="title">
                Programming languages
            </div>
            <div class="desc">
                PHP, JAVA, C, PYTHON, 
                    BASIC JAVASCRIPT, 
                    DART, BASIC RUBY
            </div>
        </div>

        <div class="vertical">
            <img class="image-top" src="bg.png" alt="">
            <div class="title">
                Programming languages
            </div>
            <div class="desc">
                PHP, JAVA, C, PYTHON, 
                    BASIC JAVASCRIPT, 
                    DART, BASIC RUBY
            </div>
        </div>
       
     </div>

    </section> -->
    </section>

    <!-- Contact-Form -->
    <?php include "contact_form.php" ?>
</main>


</div>
   
    <script src="https://unpkg.com/typed.js@2.0.16/dist/typed.umd.js"></script>
    <!-- Setup and start animation! -->
  <script>
    var typed = new Typed('#element', {
      strings: ['Web Developer', 'App Developer', 'IOT Developer'],
      typeSpeed: 50,
    });
  </script>
</body>
</html>