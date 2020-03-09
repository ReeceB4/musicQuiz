<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styles.css">
    <link href="https://fonts.googleapis.com/css?family=Luckiest+Guy&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Acme&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Trade+Winds&display=swap" rel="stylesheet">
    <script src="scripts.js" defer></script>
    <title>Document</title>
</head>
<body>

   <?php
        $large=array(array('Which song did this artist sing?',
                           'Which artist sang this song?',
                           'Who sang this track?',
                           'Tell me the artist wrote this?',
                           'Which song is Wiz Khalifas famous song?',
                           'Who wrote the song?',
                           'Which song did he sing?',
                           'Who sang this track?',
                           'Which one of his most popular tracks?',
                           'One of her hit tracks ?',
                           'Who wrote this song?',
                           'Name the track artist',
                           'Which is one of there popular tracks?',
                           'Which artist sang this hit?',
                           'All I have to say is "Thriller"',
                           'Which is one of Rihannas songs',
                           'Recent hit "BOP" who is the artist?',
                           'Which song did he sing?',
                           'who sang this old classsic "Boom boom pow"?',
                           'The song he dedicated to his daughter?',
                            ),
                    array(  'images/img1.jpg',
                            'images/img2.jpg',
                            'images/img3.jpg',
                            'images/img4.jpg',
                            'images/img5.jpg',
                            'images/img6.jpg',
                            'images/img7.jpg',
                            'images/img8.png',
                            'images/img9.jpg',
                            'images/img10.jpg',
                            'images/img11.jpg',
                            'images/img12.jpg',
                            'images/img13.jpg',
                            'images/img14.jpg',
                            'images/img15.jpg',
                            'images/img16.jpg',
                            'images/img17.jpg',
                            'images/img18.jpg',
                            'images/img19.png',
                            'images/img20.jpg',
                        ),
                    array(  'q1',
                            'q2',
                            'q3',
                            'q4',
                            'q5',
                            'q6',
                            'q7',
                            'q8',
                            'q9',
                            'q10',
                            'q11',
                            'q12',
                            'q13',
                            'q14',
                            'q15',
                            'q16',
                            'q17',
                            'q18',
                            'q19',
                            'q20',
                            ),
                            array(array('wrong','correct','wrong','wrong'),
                            array('wrong','wrong','wrong','correct'),
                            array('correct','wrong','wrong','wrong'),
                            array('wrong','correct','wrong','wrong'),
                            array('wrong','wrong','correct','wrong'),
                            array('wrong','wrong','wrong','correct'),
                            array('correct','wrong','wrong','wrong'),
                            array('wrong','wrong','correct','wrong'),
                            array('wrong','correct','wrong','wrong'),
                            array('wrong','correct','wrong','wrong'),
                            array('correct','wrong','wrong','wrong'),
                            array('wrong','wrong','wrong','correct'),
                            array('wrong','correct','wrong','wrong'),
                            array('wrong','wrong','correct','wrong'),
                            array('wrong','correct','wrong','wrong'),
                            array('wrong','wrong','wrong','correct'),
                            array('wrong','wrong','correct','wrong'),
                            array('correct','wrong','wrong','wrong'),
                            array('wrong','correct','wrong','wrong'),
                            array('wrong','correct','wrong','wrong')),
                            array(array('waiting for love','Look at me now','dance in mirror', 'ghost town'),
                                  array('Akon','Jamie Foxx','Chris Brown','AKA'),
                                  array('Cali swag district','Drake ','Eminem','Justin Bieber'),
                                  array('Ed Sheeran','T-pain','Maroon 5','Ariana Grande'),
                                  array('Sugar',,'Young,wild and free',''),
                                  array('Beyonce','Kendrick lamar','Post Malone','Drake'),
                                  array('Slow motion','','',''),
                                  array('Jay Z','Travis Scott','Drake','Shawn Mendes'),
                                  array('','Jika','',''),
                                  array('','Only','',''),
                                  array('J.cole','Travis Scott','Kid ink','The weekend'),
                                  array('Justin Timberlake','Sam Smith','Lil Wayne','Kid Cudi'),
                                  array('','September','',''),
                                  array('Shawn Mendes','Bruno Mars','Kanye West','Tyga'),
                                  array('Elvis Presley','Micheal Jackson','Elton John','Jay Z'),
                                  array('','','','Pon de Replay'),
                                  array('Khalid','Travis Scott','Da Baby','Lil Wayne'),
                                  array('Taste','','',''),
                                  array('','Black eye peas','',''),
                                  array('','Isnt she lovely','','')) 
                        );
                        ?>     
                            <form role="form" method="post" action=<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>>
                            <?php 
                                for($x=0; $x<count($large[0]);++$x){
                                    echo "/n". '<h2>'. $large[0][$x]. '</h2>';
                                    echo '</br> <img class=image src="'.$large[1][$x].'">';
                                        for($y=0;$y<count($large[4][0]);++$y){
                                        echo '</br><button class="button" type="radio" name"'.$large[2][$x].'"value="'.$large[3][$x][$y]. '">'.$large[4][$x][$y].'</button>';
                                        }}
                            ?>
                            <button class="submitButton" type="submit" value="submit" name="submit">Answer</button>
                        <?php

                        if(isset($_POST['submit'])){
                            
                            $final=0;
                            for($a=0;$a<=19;$a++){

                                $n[$a] = $_POST["q".$a];
                                if($n[$a] == 'correct'){$result++}
                            }
                            echo '<div class = "results">' .$result.' /20</div>';
                            if($result<10{
                                echo '<div class = "results">Unlucky, I am sure you can do better next time.</div>';
                            }elseif ($final>=10&&$final<16){
                                echo '<div class ="results"> Woah, that is good.Nice Job.</div>';
                            else{
                                echo '<div class="results">You are a music genius!</div>';
                            }
                            }


                        ?>
    <!--Home Page-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="background-color:#191618">
        <a class="navbar-brand" href="#">
            <img src="images/logo.gif" alt="quiz name" class="navImage">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#" style="color:#d84498">Home <span class="sr-only">(current)</span></a>
                </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Highscore</a>
            </li>
            </ul>
        </div>
</nav>
    <!--Nav Bar-->
    <div class="container2">
        <br>
        <h4 class="welcome" id="exit">Welcome !</h4>
        <h2 class="head" >Music Quiz !</h2>
        <p class="slogan">Who doesnt love music ...</p>
        <div class="container1">
        <img src="images/icon.gif" alt="user-icon" class="user-icon">
            <div class="row">
                <div class="col-sm">
                    <br>Questions<br>
                 20
                </div>
                <div class="col-sm" >
                    <br>High Scores<br>

                </div>
            </div>
        </div>

        <br>
        <img src="images/QuizName.png" alt="Image of quiz wizard" class="wizard">
        <br>
        <button type="submit" class="button" style="vertical-align:middle"><span>Play Quiz </span></button>
        <br>
        <br>
        <br>
        <br>
        <br>
        </div>
    
    <!--End of home page------------------------------------------------->
        
    <!--Question page----------------------------------------------->
    <br>
    <br>
    <br>
    <br>
    <img src="images/logo.gif" alt="Image of quiz wizard" class="wizard2"><img src="images/hint.jpg" alt="lightbulb" class="bulb">
    <div class="exit">
    <a href="#exit" style="color:black">X</a>
    </div>
    <h3 class="quest-pb">Question 1  of 20</h3>
    <!--Progress Bar-->
    <div class="progress-bar" data-label=""></div>

    <div class="question-container">
    <img src="" alt="">
    <!--Response Bar-->
    <h2>Question 1</h2>
        <button type="text" class="button1">A</button>
        <button type="text" class="button1">B</button><br>
        <button type="text" class="button1">C</button>
        <button type="text" class="button1">D</button><br>

    <button type="submit">Next</button>
    </div>
    <br>
    <div  class="question-container">
    <img src="" alt="">
    <!--Response Bar-->
    <h2>Question 2</h2>
        <button type="text" class="button1">A</button>
        <button type="text" class="button1">B</button><br>
        <button type="text" class="button1">C</button>
        <button type="text" class="button1">D</button><br>

    <button type="submit">Next</button>
    </div>
    <br>
    <div  class="question-container">
    <img src="" alt="">
    <!--Response Bar-->
    <h2>Question 3</h2>
        <button type="text" class="button1">A</button>
        <button type="text" class="button1">B</button><br>
        <button type="text" class="button1">C</button>
        <button type="text" class="button1">D</button><br>

    <button type="submit">Next</button>
    </div>
    <br>
    <div  class="question-container">
    <img src="" alt="">
    <!--Response Bar-->
    <h2>Question 4</h2>
        <button type="text" class="button1">A</button>
        <button type="text" class="button1">B</button><br>
        <button type="text" class="button1">C</button>
        <button type="text" class="button1">D</button><br>

    <button type="submit">Next</button>
    </div>
    <br>
    <div  class="question-container">
    <img src="" alt="">
    <!--Response Bar-->
    <h2>Question 5</h2>
        <button type="text" class="button1">A</button>
        <button type="text" class="button1">B</button><br>
        <button type="text" class="button1">C</button>
        <button type="text" class="button1">D</button><br>

    <button type="submit">Next</button>
    </div>
    <br>
    <div  class="question-container">
    <img src="" alt="">
    <!--Response Bar-->
    <h2>Question 6</h2>
        <button type="text" class="button1">A</button>
        <button type="text" class="button1">B</button><br>
        <button type="text" class="button1">C</button>
        <button type="text" class="button1">D</button><br>

    <button type="submit">Next</button>
    </div>
    <br>
    <div  class="question-container">
    <img src="" alt="">
    <!--Response Bar-->
    <h2>Question 7</h2>
        <button type="text" class="button1">A</button>
        <button type="text" class="button1">B</button><br>
        <button type="text" class="button1">C</button>
        <button type="text" class="button1">D</button><br>

    <button type="submit">Next</button>
    </div>
    <br>
    <div  class="question-container">
    <img src="" alt="">
    <!--Response Bar-->
    <h2>Question 8</h2>
        <button type="text" class="button1">A</button>
        <button type="text" class="button1">B</button><br>
        <button type="text" class="button1">C</button>
        <button type="text" class="button1">D</button><br>

    <button type="submit">Next</button>
    </div>
    <br>
    <div  class="question-container">
    <img src="" alt="">
    <!--Response Bar-->
    <h2>Question 9</h2>
        <button type="text" class="button1">A</button>
        <button type="text" class="button1">B</button><br>
        <button type="text" class="button1">C</button>
        <button type="text" class="button1">D</button><br>

    <button type="submit">Next</button>
    </div>
    <br>
    <div  class="question-container">
    <img src="" alt="">
    <!--Response Bar-->
    <h2>Question 10</h2>
        <button type="text" class="button1">A</button>
        <button type="text" class="button1">B</button><br>
        <button type="text" class="button1">C</button>
        <button type="text" class="button1">D</button><br>

    <button type="submit">Next</button>
    </div>















</body>
</html>