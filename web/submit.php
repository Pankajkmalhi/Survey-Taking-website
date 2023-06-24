<!DOCTYPE html>
<html>
<head>
  <title>Survey Completed</title>
   <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <!-- Animate.css -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
  <!-- Custom CSS -->
  <style>
    body {
      display: flex;
      flex-direction: row;
      align-items: center;
      justify-content: center;
    }
    
    .animation {
      width: 200px;
      height: 400px;
     padding-top: 15%;
      animation-name: example;
      animation-duration: 2s;
      animation-iteration-count: infinite;
    }
   
    @keyframes fade-in-left {
      from {
        opacity: 0;
        transform: translateX(-200px);
      }
      to {
        opacity: 1;
        transform: translateX(0);
      }
    }
    
    /* Apply the animation to the element */
    .fade-in-left {
      animation: fade-in-left 2s ease-out;
    }

  </style>
</head>
<body style="background-color:#F2F2F2;">
  <div class="animation fade-in-left">
  <h1 class="mb-4">
  Thank you for completing the survey!
  </h1>  
</div>
</body>
</html>

<?php
// Step 1: Establish a connection to the database
$servername = "localhost";
$username = "id20508219_maze";
$password = "|zpaQphRrMMV4|{D";
$dbname = "id20508219_sueverformdata";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// Step 2: Retrieve the data from the form
$gender = $_POST['gender'];
$year1 = $_POST['year1'];
$course = $_POST['course'];
$age = $_POST['age'];
$grade = $_POST['grade'];
$question1 = $_POST['question1'];
$question2 = $_POST['question2'];
$question3 = $_POST['question3'];
$question4 = $_POST['question4'];
$question5 = $_POST['question5'];
$question6 = $_POST['question6'];
$question7 = $_POST['question7'];
$question8 = $_POST['question8'];
$question9 = $_POST['question9'];
$question10 = $_POST['question10'];

// Step 3: Insert the data into the database
$sql = "INSERT INTO survey_results (gender, year1 , course,age,grade,question1, question2, question3, question4, question5, question6, question7, question8, question9, question10)
VALUES ('$gender', '$year1' , '$course','age' , '$grade','$question1', '$question2', '$question3', '$question4', '$question5', '$question6', '$question7', '$question8', '$question9', '$question10')";

if (mysqli_query($conn, $sql)) {
  // Step 4: Close the database connection
  mysqli_close($conn);
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}


// Step 4: Close the database connection
?>


