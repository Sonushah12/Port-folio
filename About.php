<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link rel="stylesheet" href="https://unpkg.com/transition-style">


    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&family=Poppins:wght@100;200;700&display=swap" rel="stylesheet">
    <title>Document</title>
</head>
<style>
    *{
        
        margin: 0;
        padding: 0;
        
    }

    header {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    background-color: #fff; /* Change to your desired background color */
    /* Additional styling such as padding, border, etc. */
    z-index: 100; /* Ensure a high z-index to keep it above other content */
}

    body{
        margin: 0;
        padding:0;
        background-color: rgb(33, 33, 49);
        color: aliceblue;
        font-family: 'Poppins', sans-serif;
    }
    h3{
        text-align: start;
        ccolor: #8a0ac3;
        font-size: 25px;
    }
    .aboutMe{
        display: flex;
        margin-top: 100px;
        justify-content: center;
        align-items: center;
    }
   
    .img img{
        max-width: 100%; /* Make the image responsive */
    height: auto;
    margin-right: 20px; 
        
    }

    .text .para {
        display: flex;
        flex-direction : relative;
        align-items: center;
        text-align: center;
        padding: 50px;
    }
    .text .para{
         font-size: 16px;
    }
    .text .para a{
        color: #c0c0c0;
        align-items : relative;
        text-decoration : none;
    }
    .text .para a:hover{
        color : #464ff6;
        transition: .5s;
    }
    

    /* Define a grid container */


/* Style the grid items */
/* .pic{
    border: 1px solid #ddd;
    padding: 20px;
    text-align: center;
}

.pic img{
    height: 300px;
    border: 1px solid #ddd;
    padding: 20px;
    text-align: center;
} */

/* Basic styling for the image container */
.image-container {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(300px, 1fr)); /* Adjust column size as needed */
    gap: 20px; /* Adjust the gap between grid items */
    padding: 20px; 
    
}

/* Style the image */
img {
    position: relative;
    max-width: 100%;
    height: auto;
    
}

/* Animated border line styling */
.border-line {
    margin : 50px;
    position: space-between;
    width: relative;
    height: auto;
    border: 5px solid transparent; /* Start with a transparent border */
    animation: borderAnimation 2.2s linear infinite; /* Adjust the animation duration and timing function as needed */
}



/* Keyframes for the animation */
 @keyframes borderAnimation {
    0% {
        border-left-color: transparent;
        border-top-color: transparent;
        border-right-color: #f9f85f; /* Change to your desired border color */
        border-bottom-color: #00bcd4;
    }
    25% {
        border-left-color: #f9f85f;
        border-top-color: transparent;
        border-right-color: transparent;
        border-bottom-color: #00bcd4;
    }
    50% {
        border-left-color: #f9f85f;
        border-top-color: #00bcd4;
        border-right-color: transparent;
        border-bottom-color: transparent;
    }
    75% {
        border-left-color: transparent;
        border-top-color: #f9f85f;
        border-right-color: #00bcd4;
        border-bottom-color: transparent;
    }
    100% {
        border-left-color: transparent;
        border-top-color: transparent;
        border-right-color: #f9f85f;
        border-bottom-color: #00bcd4;
    }
} */

.caption {
    position: absolute;
    bottom: 0;
    left: 0;
    width: 100%;
    background-color: rgba(0, 0, 0, 0.7); /* Adjust background color and transparency */
    color: #fff; /* Adjust text color */
    padding: 10px; /* Adjust padding as needed */
    text-align: center;
}


/* Style the image and overlay container */
.image-hover {
    position: relative;
}

.image-hover img {
    max-width: 100%;
    height: relative;
    display: block;
}

/* Style the overlay (initially hidden) */
.overlay-content {
    position: absolute;
    top: 0;
    left: 0;
    opacity: 0;
    background-color: rgba(0, 0, 0, 0.7); /* Adjust background color and transparency */
    color: #fff; /* Adjust text color */
    padding: 10px;
    width: 100%;
    height: 100%;
    transition: opacity 0.3s; /* Add a smooth transition effect for opacity */
}

/* When hovering over the image, display the overlay content */
.image-hover:hover .overlay-content {
    opacity: 1;
}







</style>
<body>
    <header>
        <?php include "navbar.php"?>
    </header>

<main>
    <div transition-style="in:circle:bottom-right">
    <div class="aboutMe">
        <div class="img">
            <img src="images/Avtar-2.jpeg" alt="">
        </div>
        <div class="text">
            <h3>Student of Computer Applications</h3>
            <br><br>
            <p class = "para" align-items="justify">
            About Me

            Hello! I'm Sonu Shah, an aspiring Computer Science enthusiast on a journey of continuous learning and growth. While I may be new to the industry, my passion for Information Technologies runs deep, and I'm dedicated to mastering the craft.

            With a strong foundation in MCA(Master in Computer Applications), I am eager to apply my knowledge to real-world challenges and collaborate with experienced professionals. I view every project as an opportunity to expand my horizons and refine my skills.

            I believe that learning is a lifelong adventure, and I'm excited to embrace the challenges and discoveries that come my way. Through persistence, dedication, and a hunger for knowledge, I am committed to becoming a valuable contributor in the world of [Your Field].

            Outside of work and study, I enjoy playing E-sports Games and Listning music and coding is just is my fav thing, which fuels my creativity and keeps me motivated.

            Let's connect and explore how I can be a part of your projects and bring fresh perspectives to the table. Feel free to contact me at 
            
           
            </p>
            <a href="mailto:sonu.shah99098@gmail.com"><i class="fas fa-envelope"></i>   Mail   </a>.
            Thank you for visiting my portfolio.
            <div class="cv-button">
                <?php include "CV.php"  ?>
            </div>
           
        </div>
    </div>

    <div class="image-container">
        <div class="border-line"> <!-- image-hover -->
            <div class="image-hover">
                 <img src="images/Avtar-1.jpeg" alt="">
                <div class="overlay-content">
                    <h2>Caption 1</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus fuga ipsum quasi, quidem aliquam rem temporibus eveniet aperiam molestias repudiandae quas qui illo eos, ex sint laborum. Ullam, hic animi.</p>
                </div>
            </div>
        </div>
       
        <div class="border-line"> <!-- image-hover -->
            <div class="image-hover">
                <img src="images/Avtar-2.jpeg" alt="">
                <div class="overlay-content">
                    <h2>Caption 2</h2>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nam voluptates molestiae est. Voluptatem nesciunt nisi unde sequi voluptas laboriosam esse vero in asperiores id. Laborum esse debitis eos? Nostrum, ex!</p>
                </div>
             </div>
        </div>

        <div class="border-line"> <!-- image-hover -->
            <div class="image-hover">
                <img src="images/Avtar-3.jpeg" alt="">
                <div class="overlay-content">
                    <h2>Caption 3</h2>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sequi sapiente non illum quia perferendis dignissimos deserunt dolor, voluptates libero omnis possimus perspiciatis facere beatae? Mollitia libero sequi in voluptatem odio?</p>
                </div>
             </div>
        </div>
    </div>

    
</main>
    
</body>
</html>