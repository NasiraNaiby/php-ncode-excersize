<?php

   $filename = "test1.txt";
$myfile = fopen($filename, "r");
while(($line = fgets($myfile)) !== false){
    echo $line."<br>";
}
//fclose($myfile);


function readcontent(){
    $content = file_get_contents('test.html');
    echo $content;
}
readcontent();


// function writefile(){
//     file_put_contents('home.txt', 'hello i was created by file_get_contents function!');
// }
// writefile();

function writefile(){
    $mytxt = "jzhfkjzsbhedkjfbds;bvjk;bsd;jkvb;fdwsvjdfmyname6456646546565";
    $myfile = fopen('home.txt', 'w');
    fputs($myfile, $mytxt);
}
writefile();
$myfile1 = fopen('home.txt', 'r');
while(!feof($myfile1)){
    $line = fgets($myfile1, 500);
    echo $line."<br>";
}

$path = "foo/foo.txt";
$file = basename($path);
echo $file;

$mainfile = "home.txt";
copy($mainfile, "test1.txt");


 function excersizfirst(){
    $read = "text2.txt";
    $readfile = fopen($read, 'r');
    while(!feof($readfile)){
        $line = fgets($readfile);
         echo "<br><a href='{$line}'>Click here</a>";
    }
    fclose($readfile);
 }
 excersizfirst();

 function excersizSecond(){
    $lines = file('customers.csv');
    ?>
    <html>
        <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"  crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"  crossorigin="anonymous"></script>
        </head>
        <body>
            <div class="container">
                <div class="row">

               
            <table border="1" class="table table-hover table-dark ">
                <thead class="">
                <th>NO.</th>
                    <th>Name</th>
                    <th>Lastname</th>
                    <th>Email</th>
                    <th>Phone Number</th>
                    <th>City</th>
                    <th>State</th>
                </thead>
                <tbody>
                    <?php
                    $i = 1;
                    foreach ($lines as $row) { // Split the row into fields 
                        $fields = explode(',', $row); // Display each row in the table 
                        echo '<tr>'; 
                        echo '<td>' . $i++ . '</td>'; 
                        foreach ($fields as $field) { 
                            
                            echo '<td>' . htmlspecialchars($field) . '</td>'; 
                        } 
                        echo '</tr>'; 
                        }
                    } 
                     excersizSecond();


                ?>
                </tbody>
            </table>
            </div>
            </div>
        </body>
    </html>

    
 


<?php
// mkdir('foo');
//rmdir('foo');

?>

