<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Practice</title>
    <link rel="stylesheet" href="style.css"/>
</head>
<body>
    <div class="flex-container">
        <div class="header">     
               <?php include 'logo.inc.php' ?>         
               <?php include 'menu.inc.php' ?>	   
        </div>       
     
        <div class="about_me">
          <h1><?php echo $p ?></h1>
            <div class="data">
                <div class="myImg">
                    <?php echo '<img src="img/jinx-arcane.gif" width="100%">'; ?>         
                </div>

                <div class="fullname">
                    <p>
                    <?php echo $name,  ' ', $surname . '<br>'; 
                          echo 'Город: ', ' ', $city; ?>                                      
                    </p> 
           
                    <p> Возраст:  
                        <?php 
                            function declension($number, array $data)
                            {
                                $rest = [$number % 10, $number % 100];
                                
                                if ($rest[1] > 10 && $rest[1] < 20) {
                                    return $data[2];
                                } elseif ($rest[0] > 1 && $rest[0] < 5) {
                                    return $data[1];
                                } else if ($rest[0] == 1) {
                                    return $data[0];
                                }
                                
                                return $data[2];
                            }
    
                            echo $age, ' ', declension($age, ['год', 'года', 'лет']);
                        ?>
                    </p>
                    <p> Simple operations with variables:</p>
                    


                    <div class="knowledge">                
                        <?php include 'knowledge.inc.php'; ?>
                        <?php echo $a, ' ', $b, ' ', $c; ?> <br>
                                        
                        <?php
                            $myKnowlege = new MyKnowleges;
                            $myKnowlege->getSumExample();
                        ?>
                        <br>  
                        <?php
                            $myKnowlege->equals();
                        ?>
                        <br>                
                        <?php echo $d; ?> 
                    </div>
                </div>
            </div>

            <div class="article">
                <p class="text">
                    <?php echo $myKnowlege->str; ?>
                </p>
            </div>
        </div>

        <?php include 'footer.inc.php' ?>
    </div>
</body>
</html>
