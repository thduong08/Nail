<?php
include('../Models/database.php');
?>
<div class="input-group mb-3">
  <label class="input-group-text" for="inputGroupSelect01">I would like to book an appointment for</label>
  <select class="form-select" id="inputGroupSelect01">
    <option selected>just me</option>
    <option value="1">just me</option>
    <option value="2">2-3 Guests</option>
  </select>
</div>
<h5 class="text-center">SELECT A SERVICE</h5>
<ol class="list-group list-group-numbered">
        <?php
        $sql = "SELECT * FROM Appointments";
        $result = $conn->query($sql);


        if ($result->num_rows > 0) {

            while ($row = $result->fetch_assoc()) {
                echo '<li class="list-group-item d-flex justify-content-between align-items-start">
                <div class="ms-2 me-auto">
                  <div class="fw-bold">' . $row["ServiceType"] . '</div>
                  ' . $row["Status"] . '
                </div>
                <span class="badge bg-primary rounded-pill">' . $row["AppointmentTime"] . '</span>
              </li>';
            }
        } else {
            echo "No products found.";
        }
        ?>
</ol>