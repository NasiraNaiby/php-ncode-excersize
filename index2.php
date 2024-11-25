<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php Example</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.4.0/font/bootstrap-icons.min.css" rel="stylesheet">
    <style>
  
    </style>
</head>
<body>
<?php 
        $excersieA = ["janvier"=>31,"Fevrier"=>29,"Mars"=>31,"Avril"=>30,
        "Mai"=>31,"JUIN"=>30,"juilliet"=>31,"aout"=>31,"septembre"=>30,"novembre"=>30,"decembre"=>31];
        asort($excersieA);
    ?>
    <table border="1">
        <thead>
        <?php  foreach($excersieA as $mois =>$jour){
            echo "<th>".$mois."</th>";
         }?>
            
        </thead>
        <tbody>
        <?php  foreach($excersieA as $mois =>$jour){
            echo "<td>".$jour."</td>";
         }?>
        </tbody>
    </table>

         <?php
            $capitales = array(
                "Bucarest" => "Roumanie",
                "Bruxelles" => "Belgique",
                "Oslo" => "Norvège",
                "Ottawa" => "Canada",
                "Paris" => "France",
                "Port-au-Prince" => "Haïti",
                "Port-d'Espagne" => "Trinité-et-Tobago",
                "Prague" => "République tchèque",
                "Rabat" => "Maroc",
                "Riga" => "Lettonie",
                "Rome" => "Italie",
                "San José" => "Costa Rica",
                "Santiago" => "Chili",
                "Sofia" => "Bulgarie",
                "Alger" => "Algérie",
                "Amsterdam" => "Pays-Bas",
                "Andorre-la-Vieille" => "Andorre",
                "Asuncion" => "Paraguay",
                "Athènes" => "Grèce",
                "Bagdad" => "Irak",
                "Bamako" => "Mali",
                "Berlin" => "Allemagne",
                "Bogota" => "Colombie",
                "Brasilia" => "Brésil",
                "Bratislava" => "Slovaquie",
                "Varsovie" => "Pologne",
                "Budapest" => "Hongrie",
                "Le Caire" => "Egypte",
                "Canberra" => "Australie",
                "Caracas" => "Venezuela",
                "Jakarta" => "Indonésie",
                "Kiev" => "Ukraine",
                "Kigali" => "Rwanda",
                "Kingston" => "Jamaïque",
                "Lima" => "Pérou",
                "Londres" => "Royaume-Uni",
                "Madrid" => "Espagne",
                "Malé" => "Maldives",
                "Mexico" => "Mexique",
                "Minsk" => "Biélorussie",
                "Moscou" => "Russie",
                "Nairobi" => "Kenya",
                "New Delhi" => "Inde",
                "Stockholm" => "Suède",
                "Téhéran" => "Iran",
                "Tokyo" => "Japon",
                "Tunis" => "Tunisie",
                "Copenhague" => "Danemark",
                "Dakar" => "Sénégal",
                "Damas" => "Syrie",
                "Dublin" => "Irlande",
                "Erevan" => "Arménie",
                "La Havane" => "Cuba",
                "Helsinki" => "Finlande",
                "Islamabad" => "Pakistan",
                "Vienne" => "Autriche",
                "Vilnius" => "Lituanie",
                "Zagreb" => "Croatie"
            );

         asort($capitales);
         $count_num = count($capitales);
         ?>
         <h1>list of the countries with thier capitals </h1>
       
        <?php  foreach($capitales as $ville =>$pays){
            echo $ville." is located in   ".$pays."<br>";
         }
         ?>
    <h1>there the list of <?php echo $count_num; ?> countries and thier capitals!</h1>
    <table border="1">
        <tbody>
        <?php
        $i=1;
         foreach($capitales as $ville =>$pays){
            echo "<tr>";
            echo "<td>".$i++."</td>";
            echo "<th>".$pays."</th>";
            echo "<td>".$ville."</td>";
            echo "</tr>";
         }?>
        </tbody>
    </table>
        
    <h1>there the list of  countries and thier capitals (countries started with b letters are removed )!</h1>
    <table border="1">
        <tbody>
        <?php
        $i=1;
        
        
            foreach ($capitales as $pays => $ville) {
                if (strpos($pays, 'B') === 0) {
                    unset($capitales[$pays]);
                }
            }
            foreach ($capitales as $pays => $ville) {
                if (strpos($pays, 'B') === 0) {
                    unset($capitales[$pays]);
                }
            }
    
            // Display the updated table
            foreach ($capitales as $pays => $ville) {
                echo "<tr>";
                echo "<td>".$i++."</td>";
                echo "<th>".$pays."</th>";
                echo "<td>".$ville."</td>";
                echo "</tr>";
            }
        
       ?>
        </tbody>
    </table>

    <?php
          $departements = array(
            "Hauts-de-france" => array("Aisne", "Nord", "Oise", "Pas-de-Calais", "Somme"),
            "Bretagne" => array("Côtes d'Armor", "Finistère", "Ille-et-Vilaine", "Morbihan"),
            "Grand-Est" => array("Ardennes", "Aube", "Marne", "Haute-Marne", "Meurthe-et-Moselle", "Meuse", "Moselle", "Bas-Rhin", "Haut-Rhin", "Vosges"),
            "Normandie" => array("Calvados", "Eure", "Manche", "Orne", "Seine-Maritime")
        );
        $dept_num = count($departements);
    ?>
        <table border="1">
            <tbody>
                <?php 
                    $i=1;
                    foreach($departements as $region => $departements){
                        echo "<th>".$region.$departments."</th>";
                    foreach ($departements as $regions => $dept){
                        echo "<tr>";
                        echo "<td>".$i++."</td>";
                        echo "<td>".$regions.$dept."</td>";
                        echo "</tr>";
                    }
                    }

                ?>
            </tbody>
        </table>

    
        
        

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.min.js"></script>


</body>
</html>





