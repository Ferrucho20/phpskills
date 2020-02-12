<?php
    $sql = "SELECT * FROM tbl_users";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
      // output data of each row
      while($row = $result->fetch_assoc()) {
          echo "id: " . $row["id"]. " - correo: " . $row["correo"]."-password:".$row["password"]. "<br>";
      }
    } else {
      echo "0 results";
}
 ?>
