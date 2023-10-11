<?php
include('../Models/database.php');
?>
<div class="container">
    <div class="row">
        <?php
        $sql = "SELECT * FROM Appointments";
        $result = $conn->query($sql);


        if ($result->num_rows > 0) {

            while ($row = $result->fetch_assoc()) {
                echo '<div class="col-md-3 mb-4">
                    <div class="card">
                        <img src="../../img/image/nail1.jpg" class="card-img-top" alt="">
                        <div class="card-body">
                            <h5 class="card-title">' . $row["AppointmentTime"] . '</h5>
                            <p class="card-text">$' . $row["ServiceType"] . '</p>
                            <p class="card-text">$' . $row["Status"] . '</p>
                        </div>
                    </div>
                </div>';
            }
        } else {
            echo "No products found.";
        }
        ?>
    </div>
</div>