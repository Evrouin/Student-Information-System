<?php
function displayStudentSubjectTable($subject_code)
{
    require "../__database_connection/db_conn.php";
    $sql = "SELECT subject_code, full_name, section FROM subjects WHERE subject_code='$subject_code' ORDER BY section ASC;";
    $result = mysqli_query($connect, $sql);

    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        $counter = 1;
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td style='text-align: center;'>" . $counter++ . "</td>";
            echo "<td style='text-align: center;'>" . $row["subject_code"] . "</td>";
            echo "<td style='text-align: center;'>" . $row["full_name"] . "</td>";
            echo "<td style='text-align: center;'>" . $row["section"] . "</td>";
            echo "</tr>";
        }
    } else {
        echo "<tr>";
        echo "<td colspan='4'> No record found!</td>";
        echo "</tr>";
    }

    mysqli_close($connect);
}
