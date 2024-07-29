<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>



    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&family=Poppins:wght@100;200;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="form_validation.js"></script>
    <title>Document</title>


    <style>
        body{
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center
        }
        h2{
            color: #fff;
            text-align: center;
            font-size: 35px;
            text-transform: uppercase;
            margin-bottom:; 30px;
        }
        .contact-form{
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 10px;
        }

        .contect-info{
            color: #fff;
            max-width: 500px;
            line-height: 65px;
            padding-left: 20px;
            font-size : 18px; 
        }

        .contect-info i{
            margin-right: 20px;
            font-size: 20px;
        }
        
        
        .form {
            max-width : 700px;
            margin-right: 50px;  
        }

        .form .text-box{
            background-color : #000;
            color : #fff;
            border : calc(50% -10px);
            height: 30px;
            width: 70%;
            padding: 12px;
            font-size : 15px;
            border-radius: 5px;
            box-shadow: 0 1px 1px rgba(0, 0, 0, 0, 0.1);
            margin-bottom : 20px;
            opacity:  0.9;
        }

        .form .text-box:first-child{
            margin-right : 15px;
        }

        .form textarea{
            background-color: #000;
            color : #fff;
            border: none;
            width :100%;
            padding: 12px;
            font-size : 15px;
            min-height : 200px;
            max-height: 400px;
            resize : vertical;
            border-radius: 5px;
            box-shadow :  0 1px 1px rgba(0, 0, 0, 0, 0.1);
            opacity: 0.9;
        }

        .form .btn{
            float: right;
            background: #2e94e3;
            color : #fff;
            border : none;
            width: 120px;
            height:  40px;
            font-size : 15px;
            font-weight : 600;
            text-transform : uppercase;
            letter-spacing : 2px; 
            border-radius : 5px; 
            cursor: pointer;
            transition : 0.3s;
            transition-property : background;
        }

        .form .btn:hover{
            background : #00a877;
        }

        @media screen and (max-width : 950) {
            .contact-form{
                flex-direction : column;
             }

             .contect-info, .form{
                margin : 30px 50px;
             }
             h2{
                font-size : 30px;
             }

             .form .text-box{
                width 100%;
             }
            
        }

        /* css for alert */
        .alert-success{
            z-index: 1;
            background: #D4EDDA;
            font-size : 18px;
            padding : 20px 40px;
            min-width: 420px;
            position: fixed;
            right : 0;
            top : 10px;
            border-left : 8px solid #3AD66E;
            border-radius : 4px;
        }
        .alert-error{
            z-index: 1;
            background: #ed6767;
            font-size : 18px;
            padding : 20px 40px;
            min-width: 420px;
            position: fixed;
            right : 0;
            top : 10px;
            border-left : 8px solid #3AD66E;
            border-radius : 4px;
        }
       
        /* Style the link */
        .email-link {
            text-decoration: none; /* Remove underlines */
            color: #007bff; /* Link color (blue in this example) */
        }

        /* Style the icon (you can use an actual image or an icon font) */
        .email-icon::before {
            content: "\2709"; /* Unicode character for envelope icon */
            font-family: Arial, sans-serif; /* Specify a font for the icon */
            margin-right: 5px; /* Add some spacing between the icon and text */
        }

        .git-link{
            text-decoration: none;
            color: #007bff;
        }

        .git-link::before{
            
            font-family: Arial, sans-serif; /* Specify a font for the icon */
            margin-right: 5px;
        }
        .tel-link{
            text-decoration: none;
            color: #007bff;
        }
        .tel-link::before{
            font-family: Arial, sans-serif; /* Specify a font for the icon */
            margin-right: 5px;
        }
        .add{
            font-weight: bold !important ;
            font-family: Arial, sans-serif; /* Specify a font for the icon */
            margin-right: 5px;
        }
        .time{
            font-weight: bold !important ;
            font-family: Arial, sans-serif; /* Specify a font for the icon */
            margin-right: 20px;
        }

   

    </style>
</head>
<body>

 

    <!-- alert Messege start-->
    <!-- <div class="alert-success">
        <span style = "color: black">Message Sent! Thank you for contacting us.</span>
    </div> -->
    <!-- alert Messege end -->

    <!-- <div class="alert-error">
        <span style = "color: black">Message Not Sent! Please Try again.</span>
    </div> -->

    <br><br><br>
<h2 style="text-align: center;">Contact Me</h2><br />
    <div class="contact-form">
        <div class="contect-info">
            <div><p class= "add"><i class="fas fa-map-marker-alt">    </i>Address, city, state</p></div>
            <div> <a href="mailto:sonu.shah99098@gmail.com" class="email-link"><i class="fas fa-envelope"></i>Email</a></div>
            <div><a href="https://github.com/sonushah12" class=  "git-link"><i class="fa-brands fa-github"></i>GitHub</a></div>
            <div><a href="tel:+919909843221" class = "tel-link"><i class="fas fa-phone">  </i> +91 99 0984 3221 </a></div>
            <div><p class = "time"><i class="fas fa-clock"> </i> Mon - Fri : 10am - 5pm  </p></div>
        </div>

        <!-- FORM -->
       <div class="form">
       <form action="insert.php" method="post" onsubmit="return validationForm()">
             <input  type="text" id = "name" name = "name" class="text-box" placeholder = "Enter Name" >
            
            <input type="email" id="email" name="email" class="text-box" placeholder = "Email" required>
            <textarea name="description" id="description" name = "description" class="description" cols="70" rows="10" placeholder = "Your Massege" ></textarea>
            <input type="submit" name= "submit" value="Submit" class ="btn" >
       </div>
        </form>
    </div>
</body>
</html>
