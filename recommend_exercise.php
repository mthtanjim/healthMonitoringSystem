<?php
// Add CORS headers (same as in calculate_bmi.php)

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $activityLevel = $_POST["activityLevel"];
    
    // Basic recommendations based on activity level (adjust as needed)
    switch ($activityLevel) {
        case "sedentary":
            $feedback = "Start with light activities like walking or swimming for 30 minutes most days of the week.";
            break;
        case "lightly_active":
            $feedback = "Aim for moderate-intensity activities like brisk walking, cycling, or dancing for 150 minutes per week.";
            break;
        case "moderately_active":
            $feedback = "Continue with your current routine and consider adding more vigorous activities like running or HIIT.";
            break;
        case "very_active":
            $feedback = "You're doing great! Maintain your current exercise routine and consider adding variety to your workouts.";
            break;
        default:
            $feedback = "Invalid activity level selection.";
    }

    // Send feedback back to JavaScript
    echo $feedback;
}
?>
