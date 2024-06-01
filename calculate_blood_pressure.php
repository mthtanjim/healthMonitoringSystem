<?php
// Add CORS headers (same as in calculate_bmi.php)

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $systolic = $_POST["systolic"];
    $diastolic = $_POST["diastolic"];

    // Input validation
    if ($systolic <= 0 || $diastolic <= 0) {
        echo "Invalid input. Please enter positive values for systolic and diastolic pressure.";
        return;
    }

    // Classify blood pressure
    if ($systolic < 120 && $diastolic < 80) {
        $category = "Normal";
        $feedback = "Your blood pressure is normal. Keep up the healthy lifestyle!";
    } elseif ($systolic >= 120 && $systolic < 130 && $diastolic < 80) {
        $category = "Elevated";
        $feedback = "Your blood pressure is elevated. Monitor it regularly and consider making healthy lifestyle changes.";
    } elseif (($systolic >= 130 && $systolic < 140) || ($diastolic >= 80 && $diastolic < 90)) {
        $category = "Hypertension Stage 1";
        $feedback = "You have stage 1 hypertension. Consult your doctor for further evaluation and treatment options.";
    } else {
        $category = "Hypertension Stage 2";
        $feedback = "You have stage 2 hypertension. Seek medical attention promptly.";
    }

    // Send feedback back to JavaScript
    echo "$feedback (Systolic: $systolic mmHg, Diastolic: $diastolic mmHg)";
}
?>
