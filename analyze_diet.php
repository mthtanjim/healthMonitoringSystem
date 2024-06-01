<?php
// Add CORS headers (same as in calculate_bmi.php)

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $calories = $_POST["calories"];
    $age = $_POST["age"];
    $gender = $_POST["gender"];
    $feedback = "";
    // Input validation
    if ($calories <= 0 || $age <= 0) {
        echo "Invalid input. Please enter positive values for calories and age.";
        return;
    }
    
    // Example Calorie Calculation Logic (Adjust based on your requirements)
    if ($gender == "male") {
        $bmr = 66.47 + (13.75 * $weight) + (5.003 * $height) - (6.755 * $age);
    } else if ($gender == "female") {
        $bmr = 655.1 + (9.563 * $weight) + (1.85 * $height) - (4.676 * $age);
    } else {
        $feedback = "Invalid gender selection.";
    }
    
    if ($feedback == ""){

        // Example Feedback
        if ($calories < $bmr * 1.2) {
            $feedback .= "You might be consuming too few calories for your age, gender and activity level.";
        } else if ($calories > $bmr * 1.8) {
            $feedback .= "You might be consuming too many calories for your age, gender and activity level.";
        } else {
            $feedback .= "Your calorie intake seems to be appropriate for your age, gender and activity level.";
        }
    }

    // Send feedback back to JavaScript
    echo $feedback;
}
?>
