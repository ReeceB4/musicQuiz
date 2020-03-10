<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
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
                    'CorrectAnswer' => 'B'
            ),
            'question2' => array(
                    'Question' => 'Which artist sang "Baddest"?',
                    'Answers' => array(
                        'A' => 'Akon',
                        'B' => 'Jamie Foxx',
                        'C' => 'Chris Brown',
                        'D' => 'AKA'
                    ),
                    'CorrectAnswer' => 'D'
                ),
            'question3' => array(
                'Question' => 'Who sang "Teach Me How To Dougie?',
                'Answers' => array(
                    'A' => 'Cali Swag District',
                    'B' => 'Drake ',
                    'C' => 'Eminem',
                    'D' => 'Justin Bieber'
                ),
                'CorrectAnswer' => 'A'
            ),
            'question4' => array(
                'Question' => 'Tell me the artist wrote this?',
                'Answers' => array(
                    'A' => 'Ed Sheeran',
                    'B' => 'T-pain',
                    'C' => 'Maroon 5',
                    'D' => 'Ariana Grande'
                ),
                'CorrectAnswer' => 'B'
            ),
            'question5' => array(
            'Question' => 'Which song is Wiz Khalifas famous song?',
            'Answers' => array(
                'A' => 'Sugar',
                'B' => 'I Wanna Dance With Somebody',
                'C' => 'Young, Wild and Free',
                'D' => 'Uptown Funk'
            ),
            'CorrectAnswer' => 'C'
            ),
            'question6' => array(
                'Question' => 'Who wrote the song',
                'Answers' => array(
                    'A' => 'Beyonce',
                    'B' => 'Kendrick lamar',
                    'C' => 'Post Malone',
                    'D' => 'Drake'
                ),
                'CorrectAnswer' => 'D'
            ),
            'question7' => array(
                'Question' => 'Which song did he sing?',
                'Answers' => array(
                    'A' => 'Slow Motion',
                    'B' => 'Party in the U.S.A',
                    'C' => 'Sorry',
                    'D' => 'No Scrubs'
                ),
                'CorrectAnswer' => 'A'
            ),
            'question8' => array(
            'Question' => 'Who sang this track?',
            'Answers' => array(
                'A' => 'Jay Z',
                'B' => 'Travis Scott',
                'C' => 'Drake',
                'D' => 'Shawn Mendes'
            ),
            'CorrectAnswer' => 'C'
            ),
            'question9' => array(
                'Question' => 'Which one of his most popular tracks?',
                'Answers' => array(
                    'A' => 'Despacito',
                    'B' => 'Jika',
                    'C' => 'One More Time',
                    'D' => 'Bad and Boujee'
                ),
                'CorrectAnswer' => 'B'
            ),
            'question10' => array(
                'Question' => 'One of her hit tracks?',
                'Answers' => array(
                    'A' => 'We Found Love',
                    'B' => 'Only',
                    'C' => 'Bodak Yellow',
                    'D' => 'Hollaback Girl'
                ),
                'CorrectAnswer' => 'B'
            ),
            'question11' => array(
                'Question' => 'Who wrote this song?',
                'Answers' => array(
                    'A' => 'J.cole',
                    'B' => 'Travis Scott',
                    'C' => 'Kid ink',
                    'D' => 'The Weekend'
                ),
                'CorrectAnswer' => 'A'
            ),
            'question12' => array(
                'Question' => 'Name the track artist?',
                'Answers' => array(
                    'A' => 'Justin Timberlake',
                    'B' => 'Sam Smith',
                    'C' => 'Lil Wayne',
                    'D' => 'Kid Cudi'
                ),
                'CorrectAnswer' => 'D'
            ),
            'question13' => array(
                'Question' => 'Which is one of there popular tracks?',
                'Answers' => array(
                    'A' => 'Happy',
                    'B' => 'September',
                    'C' => 'Ms. Jackson',
                    'D' => 'Cry Me a River'
                ),
                'CorrectAnswer' => 'B'
            ),
            'question14' => array(
                'Question' => 'Which artist sang this hit?',
                'Answers' => array(
                    'A' => 'Shawn Mendes',
                    'B' => 'Bruno Mars',
                    'C' => 'Kanye West',
                    'D' => 'Tyga'
                ),
                'CorrectAnswer' => 'C'
            ),
            'question15' => array(
                'Question' => 'All I have to say is "Thriller"?',
                'Answers' => array(
                    'A' => 'Elvis Presley',
                    'B' => 'Micheal Jackson',
                    'C' => 'Elton John',
                    'D' => 'Jay Z'
                ),
                'CorrectAnswer' => 'B'
            ),
            'question16' => array(
                'Question' => 'Which is one of Rihannas songs?',
                'Answers' => array(
                    'A' => 'Beez in the Trap',
                    'B' => 'Hollaback Girl',
                    'C' => 'Drop It Like It’s Hot',
                    'D' => 'Pon de Repay'
                ),
                'CorrectAnswer' => 'D'
            ),
            'question17' => array(
                'Question' => 'Recent hit "BOP" who is the artist?  ',
                'Answers' => array(
                    'A' => 'Khalid',
                    'B' => 'Travis Scott',
                    'C' => 'Da Baby',
                    'D' => 'Lil Wayne'
                ),
                'CorrectAnswer' => 'C'
            ),
            'question18' => array(
                'Question' => 'Which song did he sing?  ',
                'Answers' => array(
                    'A' => 'Taste',
                    'B' => 'DNA',
                    'C' => 'In Da Club',
                    'D' => 'Runaway'
                ),
                'CorrectAnswer' => 'A'
            ),
            'question19' => array(
                'Question' => 'Who sang this old classsic "Boom boom pow"?  ',
                'Answers' => array(
                    'A' => 'One Direction',
                    'B' => 'Black Eye Peas',
                    'C' => 'The Beatles',
                    'D' => 'The Rolling Stones'
                ),
                'CorrectAnswer' => 'B'
            ),
            'question20' => array(
                'Question' => 'The song he dedicated to his daughter?',
                'Answers' => array(
                    'A' => 'Baby One More Time',
                    'B' => 'Isnt she lovely',
                    'C' => 'Single Ladies (Put a Ring on It)',
                    'D' => 'I Wanna Dance With Somebody'
                ),
                'CorrectAnswer' => 'B'
            )
        );
            
        if(isset($_POST['']))
            ?>
            <form class="" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" id="">
                <?php foreach (=>){ ?>
                    <h4 id=""
                }
            </form>
</body>
</html>