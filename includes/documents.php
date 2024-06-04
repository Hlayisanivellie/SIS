<?php
include("./db-form.php");


// Allow requests from any origin
header("Access-Control-Allow-Origin: *");
// Allow CORS (Cross-Origin Resource Sharing)
header("Access-Control-Allow-Methods: GET, POST, OPTIONS");

// Allow specified headers
header("Access-Control-Allow-Headers: Content-Type");

//Allow the browser to cache the preflight response for 3600 seconds (1 hour)
header("Access-Control-Max-Age: 3600");

// Check if it's an OPTIONS request (preflight)
if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
    http_response_code(200);
    exit();
}

// Database connection parameters
// $servername = "localhost";
// $username = "root"; // Replace with your database username
// $password = ""; // Replace with your database password
// $dbname = "reunert"; // Replace with your database name

// Create connection
// $conn = new mysqli($servername, $username, $password, $dbname);


// Check if the request method is GET
if ($_SERVER['REQUEST_METHOD'] === 'GET' && !isset($_GET['route'])) {
  // Query to fetch data from the database (replace 'table_name' with your actual table name)
  $sql = "SELECT * FROM downloads ORDER BY release_date DESC";

  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
    // Fetch data from each row and store it in an array
    $data = array();
    while ($row = $result->fetch_assoc()) {
      $data[] = $row;
    }

    // Close database connection
    $conn->close();

    // Convert data array to JSON
    $json_data = json_encode($data);
    echo $json_data;
  } else {
    echo "No data found";
  }
} else if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['route']) && $_GET['route'] === 'viewSuites') {
  // Query to fetch data from the database (replace 'table_name' with your actual table name)
  $sqlSub = "SELECT * FROM sub_downloads ORDER BY release_date DESC";
  $resultSub = $conn->query($sqlSub);
  if ($resultSub->num_rows > 0) {
    // Fetch data from each row and store it in an array
    $dataSub = array();
    while ($rowSub = $resultSub->fetch_assoc()) {
      $dataSub[] = $rowSub;
    }

    // Close database connection
    $conn->close();

    // Convert data array to JSON
    $json_dataSub = json_encode($dataSub);
    echo $json_dataSub;
  } else {
    http_response_code(401);
    echo json_encode(array('error' => 'No  downloads found'));
  }
} else if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['route']) && $_GET['route'] === 'selectSuites') {
  // Query to fetch data from the database (replace 'table_name' with your actual table name)
  $sqlSub = "SELECT * FROM downloads WHERE rep_suite = 1 ORDER BY release_date DESC";
  $resultSub = $conn->query($sqlSub);
  if ($resultSub->num_rows > 0) {
    // Fetch data from each row and store it in an array
    $dataSub = array();
    while ($rowSub = $resultSub->fetch_assoc()) {
      $dataSub[] = $rowSub;
    }

    // Close database connection
    $conn->close();

    // Convert data array to JSON
    $json_dataSub = json_encode($dataSub);
    echo $json_dataSub;
  } else {
    http_response_code(401);
    echo json_encode(array('error' => 'No  downloads found'));
  }
} else if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_GET['route']) && $_GET['route'] === 'addDoc') {
  // Query to fetch data from the database (replace 'table_name' with your actual table name)


  $json = file_get_contents('php://input');
  $data = json_decode($json);

  if (isset($data->rep_suite) && ($data->rep_suite == '1')) {
    $sql = "INSERT INTO downloads (item_name,file_size, file_pages, release_date, rep_type, rep_suite, file_name, reporting_year)
        VALUES ('$data->item_name','$data->file_size', '$data->file_pages', '$data->release_date', '$data->rep_type', '1', '$data->file_name', '$data->reporting_year')";

    if ($conn->query($sql) === TRUE) {
      http_response_code(201);
      echo json_encode(array('message' => 'Data added'));
    } else {
      http_response_code(401);
      echo json_encode(array('error' => 'Failed to add document'));
    }
  }else if(isset($data->rep_suite) && ($data->rep_suite == 'n')) {
    $sql = "INSERT INTO downloads (item_name,file_size, file_pages, release_date, rep_type, rep_suite, file_name, reporting_year)
        VALUES ('$data->item_name','$data->file_size', '$data->file_pages', '$data->release_date', '$data->rep_type', '0', '$data->file_name', '$data->reporting_year')";

    if ($conn->query($sql) === TRUE) {
      http_response_code(201);
      echo json_encode(array('message' => 'Data added'));
    } else {
      http_response_code(401);
      echo json_encode(array('error' => 'Failed to add document'));
    }
  } else if (isset($data->rep_suite) && ($data->rep_suite == '0')) {
    $sql = "INSERT INTO sub_downloads (item_name,file_size, file_pages, release_date, file_name, reporting_year, suite_rel, external_link)
        VALUES ('$data->item_name','$data->file_size', '$data->file_pages', '$data->release_date', '$data->file_name', '$data->reporting_year', '$data->suite_rel','$data->external_link')";
    // Execute the statement

    if ($conn->query($sql) === TRUE) {
      http_response_code(201);
      echo json_encode(array('message' => 'Data added'));
    } else {
      http_response_code(401);
      echo json_encode(array('error' => 'Failed to add document'));
    }
  }


} else {
  // If the request method is not GET, return an error
  http_response_code(405);
  echo json_encode(array('error' => 'Method Not Allowed'));
}
