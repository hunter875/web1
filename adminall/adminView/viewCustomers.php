<?php
include_once "../config/dbconnect.php";  // Ensure the path is correct

// Define SQL Query
$sql = "SELECT * FROM users WHERE isAdmin = 1";
$result = $conn->query($sql);

if (!$result) {
    // If query fails, output the error message and terminate
    die("Query failed: " . $conn->error);
}

$count = 1;
?>

<div>
  <h2>All Admins</h2>
  <table class="table">
    <thead>
      <tr>
        <th class="text-center">S.N.</th>
        <th class="text-center">ID</th>
        <th class="text-center">Username</th>
        <th class="text-center">Email</th>
        <th class="text-center">Password</th>
        <th class="text-center">Action</th>
      </tr>
    </thead>

    <?php
    if ($result->num_rows > 0) {
        // Loop to display each admin's data
        while ($row = $result->fetch_assoc()) {
    ?>
    <tr>
      <td class="text-center"><?= $count ?></td>
      <td class="text-center"><?= htmlspecialchars($row["id"]) ?></td>
      <td class="text-center"><?= htmlspecialchars($row["username"]) ?></td>
      <td class="text-center"><?= htmlspecialchars($row["email"]) ?></td>
      <td class="text-center"><?= htmlspecialchars($row["password"]) ?></td>
      <td class="text-center">
        <button class="btn btn-primary" onclick="openEditModal(
          '<?= $row['id'] ?>',
          '<?= htmlspecialchars($row["first_name"] ?? '') ?>',
          '<?= htmlspecialchars($row["last_name"] ?? '') ?>',
          '<?= htmlspecialchars($row["email"]) ?>')">Edit</button>
      </td>
    </tr>
    <?php
            $count++;
        }
    } else {
        echo "<tr><td colspan='6' class='text-center'>No admins found</td></tr>";
    }
    ?>
  </table>
</div>

<!-- Edit Modal -->
<div class="modal fade" id="editAdminModal" tabindex="-1" role="dialog" aria-labelledby="editAdminModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="editAdminModalLabel">Edit Admin Info</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form id="editAdminForm" method="POST" action="updateAdmin.php">
        <div class="modal-body">
          <input type="hidden" name="id" id="adminId">
          <div class="form-group">
            <label for="firstName">First Name</label>
            <input type="text" class="form-control" name="first_name" id="firstName" required>
          </div>
          <div class="form-group">
            <label for="lastName">Last Name</label>
            <input type="text" class="form-control" name="last_name" id="lastName" required>
          </div>
          <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" name="email" id="email" required>
          </div>
          <div class="form-group">
            <label for="password">Password (leave blank to keep current password)</label>
            <input type="password" class="form-control" name="password" id="password">
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Save Changes</button>
        </div>
      </form>
    </div>
  </div>
</div>

<script>
function openEditModal(id, firstName, lastName, email) {
  // Populate the modal fields
  document.getElementById('adminId').value = id;
  document.getElementById('firstName').value = firstName;
  document.getElementById('lastName').value = lastName;
  document.getElementById('email').value = email;
  document.getElementById('password').value = ''; // Reset password field
  $('#editAdminModal').modal('show');  // Show modal
}
</script>
