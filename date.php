<?php
    echo time(); // it is a time stamp that has been counted since 01/01/1970
    echo "<br>today is ".date('d/m/y');
    echo "<br>today is ".date('l jS \of F Y h:i:s A');
    echo "<br>the time is ".date('h:i:s');

    $date = new DateTime();
    echo "<br>the new datetime function in php resuls in ".$date->format("d/m/y h:i:s");

// ----------------------------------------
    function myformat($dateformat){
        $dateTime = DateTime::createFromFormat('m/d/Y', $dateformat);
        $errors = DateTime::getLastErrors();
        if(!empty($errors['warning_count'])){
            return FALSE;
        }
        else{
            echo "<br>here your are! ".$dateTime->format('m/d/y');
        }
    }
    myformat('11/22/2024');

// ---------------------------------
    $datepattern = "/^[0-9]{4}-[0-1][0-9]-[0-3][0-9]$/";
    $date2 = "2025-12-06";
    if(preg_match($datepattern, $date2)){
        echo "<br>this is my birthday Date ".$date2;
    } 
    else{
        echo "date ".$date2."no date found";
    }

    $dateObject = DateTime::createFromFormat("d/m/Y H:i:s", "17/25/1996 03:42:11");
    $error = DateTime::getLastErrors();
    if($error["error_count"] > 0 || $error["warning_count"] > 0){
        echo "<br>there is an error!!!";
    }
// --------------------------------------
    function findweek($week){
        $mydate = DateTime::createFromFormat('d/m/Y', $week);
        $weeknumber = $mydate->format("W");
        echo "<br>this is the week number: ".$weeknumber;
    }
    findweek("14/09/2019");

    $jour = cal_days_in_month(CAL_GREGORIAN, 7,2025);
    echo "<br>here is the number of days!".$jour;
// ----------------------------------------------

function endOfTraining($enddate){
    $currentdate = new DateTime();
    $enddate = new DateTime($enddate);
    $remainingdays = $currentdate->diff($enddate);
    echo "<br>the remaining days ".$remainingdays->days;
}
$endDate = "12/12/2024"; 
$daysRemaining = endOfTraining($endDate);
echo "There are $daysRemaining days left until the end of the training.";


// ------------------------------------------

function numOfdays($enddate){
    $currentdate = new DateTime();
    $enddate = new DateTime($enddate);
    $remainingdays = $currentdate->diff($enddate);
    echo "<br>the remaining days ".$remainingdays->days;
}
$fileopen = fopen('test1.txt', 'r');


// mkdir('foo');
//rmdir('foo');

?>
