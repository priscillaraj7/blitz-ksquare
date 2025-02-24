<?php
include 'db.php';
$query = "SELECT * FROM applications";
$result = $conn->query($query);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Admin Panel</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>Job Applications</h1>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Cover Letter</th>
            <th>Resume</th>
            <th>Actions</th>
        </tr>
        <?php while ($row = $result->fetch_assoc()) { ?>
        <tr>
            <td><?php echo (int)$row['id']; ?></td>
            <td><?php echo htmlspecialchars($row['name']); ?></td>
            <td><?php echo htmlspecialchars($row['email']); ?></td>
            <td><?php echo htmlspecialchars($row['phone']); ?></td>
            <td><?php echo nl2br(htmlspecialchars($row['cover_letter'])); ?></td>
            <td><a href="uploads/<?php echo htmlspecialchars($row['resume']); ?>" download>Download</a></td>
            <td><a href="delete.php?id=<?php echo (int)$row['id']; ?>">Delete</a></td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>
