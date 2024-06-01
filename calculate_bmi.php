<?php
// Add CORS headers
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Allow-Headers: Content-Type");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get data from form
    $weight = $_POST["weight"];
    $height = $_POST["height"] / 100; // Convert to meters
    $age = $_POST["age"];

    // Calculate BMI
    $bmi = $weight / ($height * $height);

    // Generate feedback
    $feedback = "Your BMI is: " . round($bmi, 2);
    if ($bmi < 18.5) {
        $feedback .= " (Underweight)";
    } elseif ($bmi >= 18.5 && $bmi < 25) {
        $feedback .= " (Normal)";
    } elseif ($bmi >= 25 && $bmi < 30) {
        $feedback .= " (Overweight)";
    } else {
        $feedback .= " (Obese)";
    }
  
  if ($age > 30){
    $feedback .= "<br> Additional Health tips: You should include regular exercise in your routine.";
  }

    // Send feedback back to JavaScript
    echo $feedback;
}
?>
