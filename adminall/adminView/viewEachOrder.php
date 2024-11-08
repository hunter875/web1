<div class="container">
  <h3>Movie List</h3>
  <table class="table table-striped">
    <thead>
      <tr>
        <th class="text-center">S.N.</th>
        <th class="text-center">Movie Image</th>
        <th class="text-center">Name</th>
        <th class="text-center">Description</th>
        <th class="text-center">Rating</th>
        <th class="text-center">Year</th>
        <th class="text-center">Created At</th>
        <th class="text-center">Updated At</th>
        <th class="text-center" colspan="2">Action</th>
      </tr>
    </thead>
    <tbody>
      <?php
        include_once "../config/dbconnect.php";  // Đảm bảo rằng đường dẫn này đúng
        $sql = "SELECT * FROM movies";
        $result = $conn->query($sql);
        $count = 1;

        if ($result && $result->num_rows > 0) {  // Kiểm tra nếu $result hợp lệ và có dòng nào
          while ($row = $result->fetch_assoc()) {
      ?>
      <tr>
        <td class="text-center"><?= $count ?></td>
        <td class="text-center"><img height="80px" src="<?= htmlspecialchars($row["image"]) ?>"></td>
        <td class="text-center"><?= htmlspecialchars($row["name"]) ?></td>
        <td class="text-center"><?= htmlspecialchars($row["description"]) ?></td>
        <td class="text-center"><?= number_format($row["rating"], 1) ?></td>
        <td class="text-center"><?= intval($row["year"]) ?></td>
        <td class="text-center"><?= htmlspecialchars($row["created_at"]) ?></td>
        <td class="text-center"><?= htmlspecialchars($row["updated_at"]) ?></td>
        <td class="text-center">
          <button class="btn btn-primary" style="height:40px" onclick="movieEditForm('<?= $row['id'] ?>')">Edit</button>
        </td>
        <td class="text-center">
          <button class="btn btn-danger" style="height:40px" onclick="movieDelete('<?= $row['id'] ?>')">Delete</button>
        </td>
      </tr>
      <?php
            $count++;
          }
        } else {
          echo "<tr><td colspan='9' class='text-center'>No movies found</td></tr>";
        }
      ?>
    </tbody>
  </table>

  <!-- Trigger the modal with a button -->
  <button type="button" class="btn btn-secondary" style="height:40px" data-toggle="modal" data-target="#myModal">
    Add Movie
  </button>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
      <!-- Nội dung của modal -->
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">New Movie</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          <form enctype="multipart/form-data" action="./controller/addMovieController.php" method="POST">
            <div class="form-group">
              <label for="name">Movie Name:</label>
              <input type="text" class="form-control" name="name" required>
            </div>
            <div class="form-group">
              <label for="description">Description:</label>
              <textarea class="form-control" name="description" required></textarea>
            </div>
            <div class="form-group">
              <label for="rating">Rating:</label>
              <input type="number" class="form-control" name="rating" step="0.1" min="0" max="10" required>
            </div>
            <div class="form-group">
              <label for="year">Year:</label>
              <input type="number" class="form-control" name="year" min="1800" max="<?= date("Y") ?>" required>
            </div>
            <div class="form-group">
              <label for="file">Choose Image:</label>
              <input type="file" class="form-control-file" name="file" required>
            </div>
            <div class="form-group">
              <button type="submit" class="btn btn-secondary" name="upload" style="height:40px">Add Movie</button>
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal" style="height:40px">Close</button>
        </div>
      </div>
    </div>
  </div>
</div>
