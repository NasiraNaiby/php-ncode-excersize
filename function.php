<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php functions Example</title>
    
</head>
<body>

    <?php 
        //$text = "bonjour le monde ";
        $text = "hello everyone";
        $show = ucfirst($text);
        echo $show;

        function myfunction(){
            echo "<br>this is a very simple function!";
        }
        myfunction();

        function second_function($mytext){
            echo "<br>this is a  function with parameters!".$mytext;
        }
        second_function(" hello  programmers");

        function third_function($text1, $text2){
            echo "<br>this is a  function with two parameters!".$text1.$text2;
        }
        third_function(" hello  programmers", " here are 6 devs");

        function test(){
           static $a = 0;
            echo "<br>".$a."<br>";
            $a++;
        }
        test();
        test();
        test();

        
        function somme_array($sum){
            $total = 0;
            foreach($sum as $result){
                $total +=$result;
            }
            echo $total;
        }
        somme_array($array = [1,2,3,3]);

        function generate_link($link, $title){
            echo "<a href='".$link."'>".$title."</a>";
        }
        generate_link("https://www.reddit.com/", "Reddit Hug");

        function check_password($password){
            // $mypassword =  preg_match('/[^a-zA-Z0-9]/', $password) ;
            // if($mypassword  && strlen($password) > 8){
            //     echo "bonjour";
            //     return true;
            // }
            // else{
            //     echo "bye!";
            // }
            $result = false;
            if(strlen($password) <= 8 ){
                echo "your password is not accptable";
            }
            if(!preg_match("/\d/", $password ) ){
                echo "your password is deos not containe a number ";
            }
            if(!preg_match("/[a-z]/", $password ) ){
                echo "your password is deos not containe at least one letter ";
            }
            if(!preg_match("/[A-Z]/", $password ) ){
                echo "your password is deos not containe at least one capitalletter ";
            }
            if(!preg_match("/[@$!%*?&]/", $password ) ){
                echo "your password is deos not containe at least one special charachter ";
            }
            else {
                echo "your password is correct";
                return true;
            }
        }
        check_password("455jdshjkFDd");

       

    ?>

</body>
</html>





