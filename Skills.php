<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&family=Poppins:wght@100;200;700&display=swap" rel="stylesheet">

    <title>SKILLS</title>

    <style>
        *{
            padding: 0;
            margin: 0;
            
        }
        body{
            box-sizing: border-box;
            font-family: 'Roboto', sans-sarif;
        }

        .inner{
            padding-top: 90px;
        }

        .header{
            text-align: center;
            color: #fff;
            padding: 1rem;
            position: relative;
        }

        .header:after{
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            height: 4px;
            width: 100px;
             background-color: purple;

        }

        .container{
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            justify-self: center;
            text-align:center;
            grid-gap: 1rem;
            padding: 1rem 80px;
            font-size: 1.2rem;
        }

        .skill-box{
            padding: 1rem;
            color: #ddd;
            cursor: pointer;
        }
        
        .skill-title{
            display: flex;
            flex-direction: columns;
            align-items: center;
            padding:  0.5rem;
            margin-bottom: 0.5;
            position: relative;
        }

        .skill-box:hover > .skill-title:after, skill-box:hover > .skill-title:before{
            width: 35px;
        }

        .skill-box:hover .img{
            transform: translateY(-10px)
        }

        .skill-title:after{
            content: '';
            position: absolute;
            bottom: 0;
            right: 50%;
            width: 0;
            height: 4px;
            border-radius: 2px 0 0 2px;
            background-color: #2ecc71;
            transition: .5s;
        }

        .skill-title:before{
            content: '';
            position: absolute;
            bottom: 0;
            right: 50%;
            width: 0;
            height: 4px;
            border-radius: 0 2px 2px 0;
            background-color: #2ecc71;
            transition: .5s;
        }

        .img{
            width: 90px;
            height: 90px;
            position: relative;
            border-radius: 45px;
            display: flex;
            background-color: #fff;
            justify-content: center;
            align-items: center;
           transition: .5s;
        }

        .img:after{
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 50%;
            height: 90%;
            background-color:   rgba(100, 100, 100, 0.5);
            border-radius: 45px 0 0 45px;
        }

        .skill-title h3{
            color: $fff;
            margin: 0.5rem;
        }

        .skill-icon{
            width: 50px;
            z-index: 3;
        }

        @media screen and (max-width: 990px) {
            .container{
                grid-template-columns: repeat(2, 1fr);
                padding: 2rem 50px;
            }
        }


    </style>
</head>
<body>
    <div class="inner">
        <div class="header">
            <h1>My Skills</h1>
        </div>
        <div class="container">

        <!-- HTML -->
        <div class="skill-box">
                <div class="skill-title">
                    <div class="img">
                        <img src="images/html.png" class="skill-icon">
                    </div>
                    <h3>HTML</h3>
                </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam iusto nesciunt quasi nobis, saepe nihil. Laudantium mollitia suscipit eos omnis magnam modi ex hic. Similique in reiciendis id temporibus quasi.</p>
            </div>

            <!-- CSS -->
            <div class="skill-box">
                <div class="skill-title">
                    <div class="img">
                        <img src="images/css.png" class="skill-icon">
                    </div>
                    <h3>CSS</h3>
                </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam iusto nesciunt quasi nobis, saepe nihil. Laudantium mollitia suscipit eos omnis magnam modi ex hic. Similique in reiciendis id temporibus quasi.</p>
            </div>

            <!-- JAVASCRIPT -->
            <div class="skill-box">
                <div class="skill-title">
                    <div class="img">
                        <img src="images/js.png" class="skill-icon">
                    </div>
                    <h3>JAVASCRIPT</h3>
                </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam iusto nesciunt quasi nobis, saepe nihil. Laudantium mollitia suscipit eos omnis magnam modi ex hic. Similique in reiciendis id temporibus quasi.</p>
            </div>

            <!-- MYSQL -->
            <div class="skill-box">
                <div class="skill-title">
                    <div class="img">
                        <img src="images/mysql.png" class="skill-icon">
                    </div>
                    <h3>MYSQL</h3>
                </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam iusto nesciunt quasi nobis, saepe nihil. Laudantium mollitia suscipit eos omnis magnam modi ex hic. Similique in reiciendis id temporibus quasi.</p>
            </div>

            <!-- java -->
            <div class="skill-box">
                <div class="skill-title">
                    <div class="img">
                        <img src="images/java.png" class="skill-icon">
                    </div>
                    <h3>JAVA</h3>
                </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam iusto nesciunt quasi nobis, saepe nihil. Laudantium mollitia suscipit eos omnis magnam modi ex hic. Similique in reiciendis id temporibus quasi.</p>
            </div>

            <!-- PYTHON -->
            <div class="skill-box">
                <div class="skill-title">
                    <div class="img">
                        <img src="images/python.png" class="skill-icon">
                    </div>
                    <h3>PYTHON</h3>
                </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam iusto nesciunt quasi nobis, saepe nihil. Laudantium mollitia suscipit eos omnis magnam modi ex hic. Similique in reiciendis id temporibus quasi.</p>
            </div>

            <!-- PHP -->
            <div class="skill-box">
                <div class="skill-title">
                    <div class="img">
                        <img src="images/php.png" class="skill-icon">
                    </div>
                    <h3>PHP</h3>
                </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam iusto nesciunt quasi nobis, saepe nihil. Laudantium mollitia suscipit eos omnis magnam modi ex hic. Similique in reiciendis id temporibus quasi.</p>
            </div>

            <div class="skill-box">
                <div class="skill-title">
                    <div class="img">
                        <img src="images/c.png" class="skill-icon">
                    </div>
                    <h3>C</h3>
                </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam iusto nesciunt quasi nobis, saepe nihil. Laudantium mollitia suscipit eos omnis magnam modi ex hic. Similique in reiciendis id temporibus quasi.</p>
            </div>
            <div class="skill-box">
                <div class="skill-title">
                    <div class="img">
                        <img src="images/iot.png" class="skill-icon">
                    </div>
                    <h3>IOT</h3>
                </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam iusto nesciunt quasi nobis, saepe nihil. Laudantium mollitia suscipit eos omnis magnam modi ex hic. Similique in reiciendis id temporibus quasi.</p>
            </div>
        </div>
    </div>
</body>
</html>