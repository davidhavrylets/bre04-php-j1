    <?php
    
    
    
    
    
    function computeAverage(array $grades) : float {
        
       $total = array_sum($grades);
        
        $count = count($grades);
        
        return     $total / $count;
    } 
    
    

    
    $students = [
        [
            "firstName" => "Hannah",
            "lastName" => "Fields",
            "grades" => [12, 11, 15],
            "average" => -1
        ],
        [
            "firstName" => "Richard",
            "lastName" => "Stein",
            "grades" => [18, 12, 13],
            "average" => -1
        ],
        [
            "firstName" => "Mark",
            "lastName" => "Hartoff",
            "grades" => [9, 11, 10],
            "average" => -1
        ],
        [
            "firstName" => "Charlie",
            "lastName" => "Nestle",
            "grades" => [9, 8, 5],
            "average" => -1
        ],
        [
            "firstName" => "Suzy",
            "lastName" => "Brent",
            "grades" => [18, 15, 16],
            "average" => -1
        ]
    ];
    
    ?>
    
    <!doctype html>
    <html lang="fr">
        <head>
            <meta charset="utf-8" />
            <link rel="stylesheet" href="index.css" type="text/css" />
            <title>Bulletin de notes</title>
        </head>
        <body>
            <h1>
                Bulletin de notes
            </h1>
            <h2>
                Liste des étudiants
            </h2>
            <ul id="students">

             <?php foreach ($students as $user): 
              $average = computeAverage($user["grades"]); 
             
            if ($average < 10) {
                $class = "red";
            } elseif ($average <= 13) {
                $class = "orange";
            } else {
                $class = "green";
            }

            ?>     
                    
               <li>
        <article class="<?= $class ?>">
            <header>
                <h1><?= $user["firstName"] . " " . $user["lastName"]  ?> </h1>
                         
                
            </header>
            <section>
                <h2>Notes : </h2>
                <ul>
                    <?php foreach ($user["grades"] as $grade): ?>
                    <li> <?= $grade ?></li>
                    
                <?php endforeach ?> 
                
                </ul>
            </section>
            <footer>
                <h3>Moyenne des notes de l'étudiant
                
                <?= computeAverage($user["grades"])  ?>
                </h3>

                
            </footer>
        </article>
    </li>
             <?php endforeach ?>
            </ul>
        </body>
    </html>