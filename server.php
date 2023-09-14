
<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $marks = $_POST['marks'];

        // Define the grading system using if-else conditions
        if ($marks >= ) {
            $grade =;
        } elseif ($marks >=) {
            $grade = ;
        } elseif ($marks >= ) {
            $grade =;
        } elseif ($marks >= ) {
            $grade = ;
        } elseif ($marks >= ) {
            $grade = ;
        } elseif ($marks >= ) {
            $grade = ;
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