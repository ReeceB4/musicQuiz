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
    <img src="images/logo.gif" alt="Image of quiz wizard" class="wizard2">
    <div class="exit">
    <a href="#exit" style="color:black">X</a>
    </div>
    <h3 class="quest-pb">Question 1 to 20</h3>
    <img src="" alt="">
    <!--Response Bar-->
    <br>
    <div class="question-container">
    <?php
        $Questions = array(
            'question1' => array(
                    'Question' => 'Which song did Chris Brown artist sing?',
                    'Answers' => array(
                        'A' => 'Waiting for love',
                        'B' => 'Look at me now',
                        'C' => 'Dance in mirror',
                        'D' => 'Ghost town'
                    ),
                    'rightAnswer' => 'B'
            ),
            'question2' => array(
                    'Question' => 'Which artist sang "Baddest"?',
                    'Answers' => array(
                        'A' => 'Akon',
                        'B' => 'Jamie Foxx',
                        'C' => 'Chris Brown',
                        'D' => 'AKA'
                    ),
                    'rightAnswer' => 'D'
                ),
            'question3' => array(
                'Question' => 'Who sang "Teach Me How To Dougie?',
                'Answers' => array(
                    'A' => 'Cali Swag District',
                    'B' => 'Drake ',
                    'C' => 'Eminem',
                    'D' => 'Justin Bieber'
                ),
                'rightAnswer' => 'A'
            ),
            'question4' => array(
                'Question' => 'Tell me the artist wrote this?',
                'Answers' => array(
                    'A' => 'Ed Sheeran',
                    'B' => 'T-pain',
                    'C' => 'Maroon 5',
                    'D' => 'Ariana Grande'
                ),
                'rightAnswer' => 'B'
            ),
            'question5' => array(
            'Question' => 'Which song is Wiz Khalifas famous song?',
            'Answers' => array(
                'A' => 'Sugar',
                'B' => 'I Wanna Dance With Somebody',
                'C' => 'Young, Wild and Free',
                'D' => 'Uptown Funk'
            ),
            'rightAnswer' => 'C'
            ),
            'question6' => array(
                'Question' => 'Who wrote the song',
                'Answers' => array(
                    'A' => 'Beyonce',
                    'B' => 'Kendrick lamar',
                    'C' => 'Post Malone',
                    'D' => 'Drake'
                ),
                'rightAnswer' => 'D'
            ),
            'question7' => array(
                'Question' => 'Which song did he sing?',
                'Answers' => array(
                    'A' => 'Slow Motion',
                    'B' => 'Party in the U.S.A',
                    'C' => 'Sorry',
                    'D' => 'No Scrubs'
                ),
                'rightAnswer' => 'A'
            ),
            'question8' => array(
            'Question' => 'Who sang this track?',
            'Answers' => array(
                'A' => 'Jay Z',
                'B' => 'Travis Scott',
                'C' => 'Drake',
                'D' => 'Shawn Mendes'
            ),
            'rightAnswer' => 'C'
            ),
            'question9' => array(
                'Question' => 'Which one of his most popular tracks?',
                'Answers' => array(
                    'A' => 'Despacito',
                    'B' => 'Jika',
                    'C' => 'One More Time',
                    'D' => 'Bad and Boujee'
                ),
                'rightAnswer' => 'B'
            ),
            'question10' => array(
                'Question' => 'One of her hit tracks?',
                'Answers' => array(
                    'A' => 'We Found Love',
                    'B' => 'Only',
                    'C' => 'Bodak Yellow',
                    'D' => 'Hollaback Girl'
                ),
                'rightAnswer' => 'B'
            ),
            'question11' => array(
                'Question' => 'Who wrote this song?',
                'Answers' => array(
                    'A' => 'J.cole',
                    'B' => 'Travis Scott',
                    'C' => 'Kid ink',
                    'D' => 'The Weekend'
                ),
                'rightAnswer' => 'A'
            ),
            'question12' => array(
                'Question' => 'Name the track artist?',
                'Answers' => array(
                    'A' => 'Justin Timberlake',
                    'B' => 'Sam Smith',
                    'C' => 'Lil Wayne',
                    'D' => 'Kid Cudi'
                ),
                'rightAnswer' => 'D'
            ),
            'question13' => array(
                'Question' => 'Which is one of there popular tracks?',
                'Answers' => array(
                    'A' => 'Happy',
                    'B' => 'September',
                    'C' => 'Ms. Jackson',
                    'D' => 'Cry Me a River'
                ),
                'rightAnswer' => 'B'
            ),
            'question14' => array(
                'Question' => 'Which artist sang this hit?',
                'Answers' => array(
                    'A' => 'Shawn Mendes',
                    'B' => 'Bruno Mars',
                    'C' => 'Kanye West',
                    'D' => 'Tyga'
                ),
                'rightAnswer' => 'C'
            ),
            'question15' => array(
                'Question' => 'All I have to say is "Thriller"?',
                'Answers' => array(
                    'A' => 'Elvis Presley',
                    'B' => 'Micheal Jackson',
                    'C' => 'Elton John',
                    'D' => 'Jay Z'
                ),
                'rightAnswer' => 'B'
            ),
            'question16' => array(
                'Question' => 'Which is one of Rihannas songs?',
                'Answers' => array(
                    'A' => 'Beez in the Trap',
                    'B' => 'Hollaback Girl',
                    'C' => 'Drop It Like It’s Hot',
                    'D' => 'Pon de Repay'
                ),
                'rightAnswer' => 'D'
            ),
            'question17' => array(
                'Question' => 'Recent hit "BOP" who is the artist?  ',
                'Answers' => array(
                    'A' => 'Khalid',
                    'B' => 'Travis Scott',
                    'C' => 'Da Baby',
                    'D' => 'Lil Wayne'
                ),
                'rightAnswer' => 'C'
            ),
            'question18' => array(
                'Question' => 'Which song did he sing?  ',
                'Answers' => array(
                    'A' => 'Taste',
                    'B' => 'DNA',
                    'C' => 'In Da Club',
                    'D' => 'Runaway'
                ),
                'rightAnswer' => 'A'
            ),
            'question19' => array(
                'Question' => 'Who sang this old classsic "Boom boom pow"?  ',
                'Answers' => array(
                    'A' => 'One Direction',
                    'B' => 'Black Eye Peas',
                    'C' => 'The Beatles',
                    'D' => 'The Rolling Stones'
                ),
                'rightAnswer' => 'B'
            ),
            'question20' => array(
                'Question' => 'The song he dedicated to his daughter?',
                'Answers' => array(
                    'A' => 'Baby One More Time',
                    'B' => 'Isnt she lovely',
                    'C' => 'Single Ladies (Put a Ring on It)',
                    'D' => 'I Wanna Dance With Somebody'
                ),
                'rightAnswer' => 'B'
            )
        );
            
        if(isset($_POST['answers'])) {
            $Answers = $_POST['answers'];

            $points = 0;
            echo "<br>.<h1 class>Your Music Report </h1> ";
            foreach($Questions as $QuestionNo => $result) {
                echo $result['Question'].'<br>';

                if($Answers[$QuestionNo] != $result['rightAnswer']){
                    echo 'You chose: <span style="color:red; font-size: 20px;">'.$result['Answers'][$Answers[$QuestionNo]].'</span><br>';
                    echo 'Right answer: <span style="color:green; font-size:20px">'.$result['Answers'][$result['rightAnswer']].'</span>';
                }
                else {
                    echo 'You chose: <span style="color:#2f479d ; font-size:20px;">'.$result ['Answers'][$Answers[$QuestionNo]].'</span><br>';
                    echo 'You are correct: <span style="color: green; font-size:20px">'.$result['Answers'][$Answers[$QuestionNo]].'</span>';
                    $points++;
                }
                echo '<br/><hr>';
            }
            if($points <10){
                echo "<h2s>Your Final Score is :$points of 20</h2>";
                echo "<br>";
                echo "<h2>Unlucky mahn, I am sure you can do better next time</h2>";
            } else if ($points <= 15) {
                echo "<h2>Your Final Score : $points of 20</h2>";
                echo "<br>";
                echo "<h2>NICE JOB! </h2>";
            } else {
                echo "<h2>YOUR FINAL RESULT : $points of 20</h2>";
                echo "<h2>You are a music GENIUS!</h2>";
            }
        }
        else{
            ?>
            <form class="form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" id="">
                <?php foreach ($Questions as $QuestionNo=> $result){ ?>

                    <h4 id="questionColor"><?php echo $result['Question'];?></h4>
                    <?php
                        foreach ($result['Answers'] as $Tag  => $Answer){
                        $Label = 'question-'.$QuestionNo. '-answers-' . $Tag ;
                        ?>
                        <div id="">
                            <input type="radio" name="answers[<?php echo $QuestionNo ; ?>]" id="<?php echo $Label ; ?>" value="<?php echo $Tag ; ?>"required/>
                            <label class="label" for="<?php echo $Tag ; ?>"><?php echo $Tag ; ?>) <?php echo $Answer ; ?></label>
                        </div>
                        <?php } ?>
                        <br>
                        <?php } ?>
                        <input class="button button span button span:after button:hover span button:hover span:after" type="submit" value="SUBMIT" />
                }
            </form>
            <?php
            }
            ?>
            </div>
    </div>














</body>
</html>