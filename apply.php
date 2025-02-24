<?php 
include 'db.php';

$job_id = isset($_GET['job_id']) ? intval($_GET['job_id']) : (isset($_POST['job_id']) ? intval($_POST['job_id']) : null);

if (!$job_id) {
    die("Error: Invalid Job ID");
}

$submitted = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $cover_letter = $_POST['cover_letter'];
    
    $check_job = $conn->prepare("SELECT id FROM jobs WHERE id = ?");
    $check_job->bind_param("i", $job_id);
    $check_job->execute();
    $result = $check_job->get_result();
    if ($result->num_rows === 0) {
        die("Error: The selected job does not exist.");
    }
    
    $upload_dir = "uploads/";
    if (!is_dir($upload_dir)) {
        mkdir($upload_dir, 0777, true);
    }
    
    $resume = basename($_FILES["resume"]["name"]);
    $resume_path = $upload_dir . $resume;
    
    if (move_uploaded_file($_FILES["resume"]["tmp_name"], $resume_path)) {
        $stmt = $conn->prepare("INSERT INTO applications (job_id, name, email, phone, cover_letter, resume) VALUES (?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("isssss", $job_id, $name, $email, $phone, $cover_letter, $resume);
        if ($stmt->execute()) {
            $submitted = true;
        } else {
            echo "Error: " . $stmt->error;
        }
    } else {
        echo "Error uploading file.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Apply for Job</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">

</head>
<body>
<div class="container mt-5">
    <?php if ($submitted): ?>
        <h2>Application submitted successfully!</h2>
    <?php else: ?>
        <h2>Apply for Job</h2>
        <form action="apply.php" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="job_id" value="<?php echo htmlspecialchars($job_id); ?>">
            <input type="text" name="name" class="form-control" placeholder="Enter Full Name" required><br>
            <input type="email" name="email" class="form-control" placeholder="Email" required><br>
            <input type="text" name="phone" class="form-control" placeholder="Phone Number" required><br>
            <textarea name="cover_letter" class="form-control" placeholder="Cover Letter"></textarea><br>
            <input type="file" name="resume" class="form-control" required><br>
            <button type="submit" class="btn btn-success">Apply</button>
        </form>
    <?php endif; ?>
</div>
</body>
</html>
