<div>
  <h2>Movie Items</h2>
  <table class="table">
    <thead>
      <tr>
        <th class="text-center">S.N.</th>
        <th class="text-center">Movie Image</th>
        <th class="text-center">Name</th>
        <th class="text-center">Description</th>
        <th class="text-center">Rating</th>
        <th class="text-center">Year</th>
        <th class="text-center" colspan="2">Action</th>
      </tr>
    </thead>
    <?php
      include_once "../config/dbconnect.php";  // Ensure the path is correct
      
      $sql = "SELECT * FROM movies";
      $result = $conn->query($sql);
      
      if (!$result) {
          die("Query failed: " . $conn->error);
      }
      
      $count = 1;
      
      if ($result->num_rows > 0) {
          // Start of loop to fetch and display each row
          while ($row = $result->fetch_assoc()) {
    ?>
    <tr>
      <td class="text-center"><?= $count ?></td>
      <td class="text-center"><img height="100px" src="<?= htmlspecialchars($row['image'] ?? 'default-image.jpg') ?>"></td>
      <td class="text-center"><?= htmlspecialchars($row['name'] ?? 'N/A') ?></td>
      <td class="text-center"><?= htmlspecialchars($row['description'] ?? 'No description available') ?></td>
      <td class="text-center"><?= htmlspecialchars($row['rating'] ?? '0.0') ?></td>
      <td class="text-center"><?= htmlspecialchars($row['year'] ?? 'Unknown') ?></td>
      <td class="text-center">
        <button class="btn btn-primary" style="height:40px" onclick="itemEditForm('<?= $row['id'] ?>')">Edit</button>
      </td>
      <td class="text-center">
        <button class="btn btn-danger" style="height:40px" onclick="itemDelete('<?= $row['id'] ?>')">Delete</button>
      </td>
    </tr>
    <?php
              $count++;
          }
      } else {
          echo "<tr><td colspan='8' class='text-center'>No movies found</td></tr>";
      }
    ?>
  </table>
</div>
