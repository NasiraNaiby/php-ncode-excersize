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
    
  <h1 id="demo">
  <?php echo "Bonjour ...";   ?>
  </h1>


  <?php $bonjour = "heello in everyone";  
    
  
  ?>
 <h4> <?php echo $bonjour  ?> </h4>

 <?php  $a = "hello"; $$a = "world"; echo "$a {$$a}"; ?>

<?php 
     $x =10; 
     $y = 'hello'; 
     $z = (string) $x; 
     if ($z === $y) {
        echo "they have the same type ";
    }

    $array = [2654,256536,88562,89652446,3252,98972,24512]; // simple array
    sort($array);
    foreach($array as $i){
        echo  "sorted numbers " . $i . "<br>" ;
    }
    $array_asort = [2654,256536,88562,89652446,3252,98972,24512]; // simple array
    arsort($array_asort);
    foreach($array_asort as $i){
        echo  "descending sorted numbers " . $i . "<br>" ;
    }
    $numbers = [     //associative array 
        "first" => 2,
        "second" => 4,
        "third" => 6,
        "forth" => 8
    ];

    $price = $numbers["first"]; // here i accessed one array element 
    //echo $price; 
    if ($price < 10){
        echo "here is your number " . $price; // concatination is done by . in php
    }
    foreach($numbers as $i =>$value){
        echo $i . " = " . $value;
    }

    echo "<br> here I want to show an ex of focing the type of variable!";
    $n =125.4578;
    $p = true;
    settype($n, "string");
    echo var_dump($n);


    if($n === $p){
        echo "<br>Bonjour voice les data" ;
    }
    else{
        echo "<br>error occured !!!!" ;
        error_log("oh il ya un problem!");
    }
    echo $_SERVER['SERVER_NAME'];
    echo $_SERVER['SERVER_SOFTWARE'];
    //var_dump($_SERVER);   //displays all the variables inside this system variable 
    $h = "hannah";
    switch($h){
        case 'C':
            echo "coucou ma chéré!";
        break;
        case 'A':
            echo "coucou ma chéré!";
        break;
        case 'b':
            echo "coucou ma chéré!";
        default: 
            echo "elle n'est pas a la maison";
        break;
    }

    $names = ['ALI ADIL', 'HANNAH', 'PARIYA', 'REZWAN'];
    for($i = 0; $i < count($names); $i++){
        echo "<br> here are the cuties :) " . $names[$i];
    }

    // $chiffre = 100;
    // while($chiffre <= 1000){
    //     echo $chiffre;
    // }
    $i = 0;
    while($i < count($names)){
        echo "<br>".$names[$i]." Cutie ";
        $i++; 
    }

    // $n= 0;
    // do{
    //     if($n > 0){
    //         echo "<br> here is the do result!111".$n;
    //         break;
    //     }
    //     if($n == 0){
    //         echo "<br> here is the do result!00".$n;
    //         break;
    //     }
    // }
    // while($n > 5);

            
        $counter = 1;
        do {
            echo "<br> The counter is: $counter\n";
            $counter++;
        } while ($counter < 5);  //it will be excute until it is samaller than 5 because the condition in the while is true 
        // while ($counter > 5); if i put this condition it while excute once because when it check the condition it is false ans whill stop

        $backup = 500;
        for($i = 0; $i < $backup; $i++){
            echo "<br> i have to do  regular backup of myfiles! ";
        }

        // $oddnumber = 151;

        // for($q = 0; $q <$oddnumber; $q++ ){
        //   if($oddnumber % 2 != 0 ){
        //     echo "<br>the odd number is ".$q;
        //   }else{
        //     echo "the number is even ";
        // }
        // }

        for($oddnumber = 1; $oddnumber<150; $oddnumber++){
            if($oddnumber % 2 !=0){
                echo "<br>the number is: ".$oddnumber."<br>";
            }
        }

        $evenNumber = 0;
        do{
            echo "<br>the number is: ".$evenNumber;
            $evenNumber += 2;
        }
        while($evenNumber <=150);

        $myvalue = 0;
        while($myvalue <=150){
            echo "<br> this the number ".$myvalue;
            $myvalue += 5;
        }
       ?>  
       
       <table border="1">
            <thead>
                <th>x</th>
                <?php 
                for($i = 0; $i<=9; $i++){
                    echo "<th>".$i."</th>";
                } ?>
            </thead>
            <tbody>
            <?php 
                for($row = 0; $row<=9; $row++){
                    echo "<tr>";
                    echo "<th>".$row."</th>";
                    for($col = 0; $col<=9; $col++){
                        echo "<td>".$row*$col."</td>";
                    }
                    echo "</tr>";
                } ?>
            </tbody>
       </table>
        <?php
            $myarray = array();
            $myarray[0] = "Hannah Nazari ";
            $myarray[1] = "Ali Adil Nazari  ";
            $myarray[2] = "Ali sajad Naeibi ";
            echo "<h4>Ma jolie fille ".$myarray[0]." Mon cutie ".$myarray[1]." et ma gentil frere ".$myarray[2]."</h4>";
            


            $enfants = array(
                array ("Hannah", "Ali Adil", "Pariya", "Rezwan"),
                array("Nazari", "Nazari", "Hussaini", "Niyazi"),
                array(5, 1, 3, 1)
            );
            echo "My children ".$enfants[0][0]." and ".$enfants[0][2];
            echo "<br>Maryams daughter is  ".$enfants[0][2].$enfants[1][2]." she is ".$enfants[2][2];
            echo "<br>Maryas SON is  ".$enfants[0][3].$enfants[1][3]." he is ".$enfants[2][3];
            foreach($enfants as $items){
                foreach($items as $arrayitems){
                    echo "<br>".$arrayitems;
                }
            }
        ?>
       <table border="1">
        <thead>
            <th>Name</th>
            <th>last name </th>
            <th>age</th>
            <th>M/F</th>
        </thead>
        <tbody>
            <?php $enfants =  array(
                array("Hannah", "Ali Adil ", "Rezwan ", "Pariya"),
                array("Nazari", "Nazari ", "Niyazi ", "hussaini"),
                array(2019,2023,2023,2021),
                array("girl", "boy", "boy","girl")
            );
            for($i = 0; $i< count($enfants[0]); $i++){
                echo "<tr>";
                echo "<td>".$enfants[0][$i]."</td>";
                echo "<td>".$enfants[1][$i]."</td>";
                echo "<td>".$enfants[2][$i]."</td>";
                echo "<td>".$enfants[3][$i]."</td>";
                echo "</tr>";
            }
         ?>
        </tbody>
       </table>
     <?php   
     $fature = array("janvier"=>700,"février"=>500,"Mars"=>250,"Avril"=>800,"mai"=>700,"juin"=>900,"juillet"=>700,"auot"=>700,"septembre"=>400,"octobre"=>200 ,"novembre"=>600,"decembre"=>400);
    //sort($fature);    
        foreach($fature as $mois => $value) {
                echo "<br>hello dear customer these are your factures! ".$mois." ".$value;
                
            }

        $array_count_function =[1,2,8,3,5,8,8,8,5,1,1,7,8,5,2,1,58,855,9663,48522,585];
           $count =  count($array_count_function);
          echo "<h1>this the number of element we have ".$count."</h1>";

          $array_names = ["Ahmad ", "Mohammad", "Ali Adil", "hannah"];
          rsort($array_names);
          foreach($array_names as $arrayname){
            echo "<h1> ".$arrayname."</h1>";
          }

          $array_names2 = ["Ahmad "=>25, "Mohammad"=>10, "Ali Adil"=>1, "hannah"=>5];
          arsort($array_names2);
          foreach($array_names2 as $name => $ages){
            echo "<h1 style = 'color:blue;'> ".$name.$ages."</h1>";
          }

          $enfant_names = ["pariya ", "rezwan", "Ali Adil", "hannah"];
          sort($enfant_names);
          array_push($enfant_names, "ali sajad");
          foreach($enfant_names as $arrayname){
            echo "<h1 style = 'color:red;'> ".$arrayname."</h1>";
          }
          $enfant_names2 = ["pariya ", "rezwan", "Ali Adil", "hannah"];
          sort($enfant_names2);
          array_pop($enfant_names2);
          foreach($enfant_names2 as $arrayname){
            echo "<h1 style = 'color:green;'> ".$arrayname."</h1>";
          }
          $enfant_names3 = ["pariya ", "rezwan", "Ali Adil", "hannah"];
          sort($enfant_names3);
          array_unshift($enfant_names3, "elyas", "nihal");
          foreach($enfant_names3 as $arrayname){
            echo "<h1 style = 'color:pink;'> ".$arrayname."</h1>";
          }
          $enfant_names4 = ["pariya ", "rezwan", "Ali Adil", "hannah"];
          sort($enfant_names4);
          $shifted = array_shift($enfant_names4);
         echo "<h1 style = 'color:cyan;'> ".$shifted."</h1>";
          foreach($enfant_names4 as $arrayname){
            echo "<h1 style = 'color:purple;'> ".$arrayname."</h1>";
          }
          
     ?> 

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.min.js"></script>


</body>
</html>





