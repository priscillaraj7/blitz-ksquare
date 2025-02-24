<?php include 'db.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Ksquare Careers</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        .heading{
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 20px;
        }
        body{
            background-color:rgb(233, 225, 225);
            background-image: url("images/back.png");
        }
        .img{
            margin: auto;
        }
    </style>
</head>
<body>
<div class="image">
<img src="ksquare.png" width="1265" height="400">
</div>
<div class="container mt-5">
    <h1 class="heading">Welcome to Ksquare Energy Careers</h1>
    <h2 class="heading">Job Openings</h2>
    <div class="row">
        <?php
        $result = $conn->query("SELECT * FROM jobs");
        while ($row = $result->fetch_assoc()): ?>
            <div class="col-md-4">
                <div class="card mb-3">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $row['title']; ?></h5>
                        <p class="card-text">Department: <?php echo $row['department']; ?></p>
                        <p class="card-text">Location: <?php echo $row['location']; ?></p>
                        <a href="job-details.php?id=<?php echo $row['id']; ?>" class="btn btn-success" >View More</a>
                    </div>
                </div>
            </div>
        <?php endwhile; ?>
    </div>
</div>
</body>
</html>
