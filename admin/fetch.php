<?php
//fetch.php
// $connect = mysqli_connect("localhost", "root", "", "test");
require_once "../__database_connection/db_conn.php";
if (isset($_POST["query"])) {
  $request = mysqli_real_escape_string($connect, $_POST["query"]);
  $query = "
  SELECT * FROM users 
  WHERE user_name LIKE '%" . $request . "%' 
  OR name LIKE '%" . $request . "%' 
  OR email LIKE '%" . $request . "%'
  OR section LIKE '%" . $request . "%'
  ORDER BY section
  ";
  $result = mysqli_query($connect, $query);
  $data = array();
  $html = '';
  $html .= '
  <div class="card">
  <div class="card-header">
  <h6>Students S/Y 2020-2021: </h6>
  </div>
  <div class="card-body">
  <table class="table table-bordered">
    <tr>
      <th style="text-align:center;  width:30%">Student Number</th>
      <th style="text-align:center;  width:15%">Student Name</th>
      <th style="text-align:center;  width:25%">Email</th>
      <th style="text-align:center;  width:25%">Section</th>
    </tr>
  ';
  if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_array($result)) {
      $data[] = $row["user_name"];
      $data[] = $row["name"];
      $data[] = $row["last_name"];
      $data[] = $row["email"];
      $data[] = $row["section"];
      $html .= '
    <tr>
      <td style="text-align: center;">' . $row["user_name"] . '</td>
      <td style="text-align: center;">' . $row["name"] . ' ' . $row["last_name"] . '</td>
      <td style="text-align: center;">' . $row["email"] . '</td>
      <td style="text-align: center;">' . $row["section"] . '</td>
    </tr>
    ';
    }
  } else {
    $data = 'No Data Found';
    $html .= '
    <tr>
      <td colspan="3">No Data Found</td>
    </tr>
    ';
  }
  $html .= '</table></div></div>';
  if (isset($_POST['typehead_search'])) {
    echo $html;
  } else {
    $data = array_unique($data);
    echo json_encode($data);
  }
}
