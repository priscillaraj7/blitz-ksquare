<!DOCTYPE html>
<html lang="en">
<head>
    <title>Job Details</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        .body{
            background-image: url("images/back.png");
        }
        .job-container {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background-image: url("images/back.png");
            background-size: contain;
        }
        .job-card {
            width: 60%;
            padding: 20px;

        }
    </style>
</head>
<body>
    <div class="container job-container">
        <div class="card job-card">
            <div class="card-body">
                <?php
                include 'db.php';

                if (isset($_GET['id'])) {
                    $job_id = intval($_GET['id']);
                    $stmt = $conn->prepare("SELECT title, department, location, description FROM jobs WHERE id = ?");
                    $stmt->bind_param("i", $job_id);
                    $stmt->execute();
                    $result = $stmt->get_result();

                    if ($result->num_rows > 0) {
                        $row = $result->fetch_assoc();
                        echo "<h2 class='card-title text-center'>" . htmlspecialchars($row['title']) . "</h2>";
                        echo "<h5 class='card-subtitle mb-2 text-muted text-center'>" . htmlspecialchars($row['department']) . " - " . htmlspecialchars($row['location']) . "</h5>";
                        echo "<hr>";
                        echo "<p class='card-text'>" . nl2br(htmlspecialchars($row['description'])) . "</p>";
                        echo "<div class='text-center'><a href='apply.php?job_id=" . $job_id . "' class='btn btn-success'>Apply Now</a></div>";
                    } else {
                        echo "<p class='text-center'>Job not found.</p>";
                    }
                } else {
                    echo "<p class='text-center'>No job selected.</p>";
                }
                ?>
            </div>
        </div>
    </div>
</body>
</html>
