<style>
    table {
      border-collapse: collapse;
      width: 100%;
      margin-bottom: 1rem;
      background-color: #fff;
      color: #212529;
      border: 2px solid #ccc;
    }
    table th,
    table td {
      padding: 0.75rem;
      vertical-align: top;
      border-top: 1px solid #dee2e6;
      border-bottom: 1px solid #dee2e6;
    }
    table th {
      font-weight: 700;
      border-bottom: 2px solid #dee2e6;
      background-color: #f5f5f5;
      text-align: center;
    }
    table tbody tr:nth-of-type(odd) {
      background-color: #f2f2f2;
    }
    table tbody tr:hover {
      background-color: #e9ecef;
    }
    table tbody td {
      text-align: center;
    }
  </style>
  
  
  <?php
  // connect to the database
  $servername = "localhost";
  $username = "id20508219_maze";
  $password = "|zpaQphRrMMV4|{D";
  $dbname = "id20508219_sueverformdata";
  
  $conn = new mysqli($servername, $username, $password, $dbname);
  
  // check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  
  // retrieve the survey results from the database
  $sql = "SELECT * FROM survey_results";
  $result = $conn->query($sql);
  
  if ($result->num_rows > 0) {
    // start the table
    echo '<table class="survey-table">';
    echo "<thead>";
    echo "<tr>";
    echo "<th>ID</th>";
    echo "<th>Gender</th>";
    echo "<th>Year</th>";
    echo "<th>Degree</th>"; 
    echo "<th>Age</th>";
    echo "<th>Grade</th>"; 
    echo "<th>Question 1</th>";
    echo "<th>Question 2</th>";
    echo "<th>Question 3</th>";
    echo "<th>Question 4</th>";
    echo "<th>Question 5</th>";
    echo "<th>Question 6</th>";
    echo "<th>Question 7</th>";
    echo "<th>Question 8</th>";
    echo "<th>Question 9</th>";
    echo "<th>Question 10</th>";
    echo "</tr>";
    echo "</thead>";
    echo "<tbody>";
  
    // output data of each row
    while($row = $result->fetch_assoc()) {
      echo "<tr>";
       echo "<td>" . $row["id"] . "</td>";
      echo "<td>" . $row["gender"] . "</td>";
      echo "<td>" . $row["year1"] . "</td>";
      echo "<td>" . $row["course"] . "</td>";
      echo "<td>" . $row["age"] . "</td>";
      echo "<td>" . $row["grade"] . "</td>";
      echo "<td>" . $row["question1"] . "</td>";
      echo "<td>" . $row["question2"] . "</td>";
      echo "<td>" . $row["question3"] . "</td>";
      echo "<td>" . $row["question4"] . "</td>";
      echo "<td>" . $row["question5"] . "</td>";
      echo "<td>" . $row["question6"] . "</td>";
      echo "<td>" . $row["question7"] . "</td>";
      echo "<td>" . $row["question8"] . "</td>";
      echo "<td>" . $row["question9"] . "</td>";
      echo "<td>" . $row["question10"] . "</td>";
      echo "</tr>";
    }
  
    // close the table
    echo "</tbody>";
    echo "</table>";
  } else {
    echo "No survey results found";
  }