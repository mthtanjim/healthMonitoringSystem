function submitBMI() {
    // Get values from form
    var weight = document.getElementById("weight").value;
    var height = document.getElementById("height").value;
    var age = document.getElementById("age").value;

    // Send data to PHP script using AJAX
    var xhr = new XMLHttpRequest();
    xhr.open("POST", "calculate_bmi.php", true);
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhr.onreadystatechange = function() {
        if (xhr.readyState == 4 && xhr.status == 200) {
            document.getElementById("BMIresult").innerHTML = xhr.responseText;
        }
    };
    xhr.send("weight=" + weight + "&height=" + height + "&age=" + age);
}




// Blood Pressure Calculation
function submitBloodPressure() {
    var systolic = document.getElementById("systolic").value;
    var diastolic = document.getElementById("diastolic").value;

    var xhr = new XMLHttpRequest();
    xhr.open("POST", "calculate_blood_pressure.php", true);
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhr.onreadystatechange = function() {
        if (xhr.readyState == 4 && xhr.status == 200) {
            document.getElementById("bloodPressureResult").innerHTML = xhr.responseText;
        }
    };
    xhr.send("systolic=" + systolic + "&diastolic=" + diastolic);
}

// Diet Analysis

function submitDiet(event) {
    event.preventDefault(); // Prevent default form submission

    var calories = document.getElementById("calories").value;
    var age = document.getElementById("age").value;
    var gender = document.getElementById("gender").value;

    var xhr = new XMLHttpRequest();
    xhr.open("POST", "analyze_diet.php", true);
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhr.onreadystatechange = function() {
        if (xhr.readyState == 4 && xhr.status == 200) {
            document.getElementById("dietResult").innerHTML = xhr.responseText;
        }
    };
    xhr.send("calories=" + calories + "&age=" + age + "&gender=" + gender);
}


// Exercise Recommendation
function submitExercise() {
    var activityLevel = document.getElementById("activityLevel").value;

    var xhr = new XMLHttpRequest();
    xhr.open("POST", "recommend_exercise.php", true);
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhr.onreadystatechange = function() {
        if (xhr.readyState == 4 && xhr.status == 200) {
            document.getElementById("exerciseResult").innerHTML = xhr.responseText;
        }
    };
    xhr.send("activityLevel=" + activityLevel);
}

// Create animated hearts dynamically (adjust quantity as needed)
for (let i = 0; i < 10; i++) {
    let heart = document.createElement('div');
    heart.classList.add('animated-heart');
    heart.style.left = Math.random() * 100 + 'vw'; // Random horizontal position
    document.querySelector('.heroSection').appendChild(heart);
}




// Create animated hearts dynamically (adjust quantity as needed)
for (let i = 0; i < 10; i++) {
    let heart = document.createElement('div');
    heart.classList.add('animated-heart');
    heart.style.left = Math.random() * 100 + 'vw'; // Random horizontal position
    document.querySelector('.heroSection').appendChild(heart);
}



// Function to scroll to a specific section
function showSection(sectionId) {
    const section = document.getElementById(sectionId);
    section.scrollIntoView({behavior: 'smooth'}); // Smooth scrolling
}

showSection('bmiSection'); 

