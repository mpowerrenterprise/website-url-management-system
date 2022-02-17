
<?php include('dashboard-asset/head-template.php');?>


<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "my_personal_system";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM website_data";
    $result = $conn->query($sql);

    $conn->close();
?>

<table class="table table-striped table-dark">
  <thead>
    <tr>
      <th>No</th>
      <th scope="col">Website Name</th>
      <th scope="col">URL</th>
      <th scope="col">Description</th>
      <th scope="col">View Site</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>


    <?php

        if ($result->num_rows > 0) {

            $counter = 1;

            while($row = $result->fetch_assoc()) {
                echo "<tr>";
                    echo "<td>$counter</td>";
                    echo '<td>'.$row["website_name"].'</td>';
                    echo '<td>'.$row["website_url"].'</td>';
                    echo '<td>'.$row["description"].'</td>';
                    echo "<td><a href='".$row["website_url"]."' target='_blank' class='btn btn-success'>Open</a></td>";
                    echo "<td><a href='delete-data.php?id=".$row["auto_id"]."' class='btn btn-danger'>Delete</a></td>";
                echo "</tr>";

                $counter++;
            }

        }

    ?>


  </tbody>
</table>

<?php include('dashboard-asset/foot-template.php');?>
