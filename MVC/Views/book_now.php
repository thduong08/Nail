<?php
include('../Models/database.php');
?>
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