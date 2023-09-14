
<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $marks = $_POST['marks'];
        //    echo $marks;
        // Define the grading system using if-else conditions
        if ($marks <= 39) {
            $grade ='D';
        } elseif ($marks <= 49) {
            $grade = 'C';
        } elseif ($marks <=59 ) {
            $grade ='B';
        } elseif ($marks <=69 ) {
            $grade ='A-' ;
        } elseif ($marks <= 79) {
            $grade = 'A';
        } elseif ($marks>80) {
            $grade ='A+' ;
        } else {
            $grade = 'F';
        }

        // Display the grade
        echo "Your Grade is: $grade";
    }
    else{
        echo'invalid method';
    }
    ?>