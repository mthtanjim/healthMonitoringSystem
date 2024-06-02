<?php
// Add CORS headers
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Allow-Headers: Content-Type");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get values from form
    $calories = $_POST["calories"];
    $age = $_POST["age"];
    $gender = $_POST["gender"];

    // Input validation
    if ($calories <= 0 || $age <= 0) {
        echo "Invalid input. Please enter positive values for calories and age.";
        return;
    }

    // Calculate BMR (Basal Metabolic Rate) - Example Formula (Adjust as needed)
    if ($gender == "male") {
        $bmr = 66.47 + (13.75 * 80) + (5.003 * 180) - (6.755 * $age); 
    } else { // female
        $bmr = 655.1 + (9.563 * 80) + (1.85 * 180) - (4.676 * $age); 
    }

    // Generate feedback based on BMR and calorie intake
    $feedback = "Your estimated daily calorie needs: " . round($bmr) . " calories<br>";
    if ($calories < $bmr * 0.8) {
        $feedback .= "You might be consuming too few calories. Consider increasing your intake for proper energy and nutrition.";
    } else if ($calories > $bmr * 1.2) {
        $feedback .= "You might be consuming too many calories. Consider reducing your intake to maintain a healthy weight.";
    } else {
        $feedback .= "Your calorie intake seems to be appropriate for your age and gender.";
    }

    // Send feedback back to the browser
    echo $feedback;
}
?>
