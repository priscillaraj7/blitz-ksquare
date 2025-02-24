<?php
include 'db_connect.php'; // Database Connection

// Get Product ID from URL
if (isset($_GET['id'])) {
    $product_id = $_GET['id'];
} else {
    die("Product ID is missing.");
}

// Fetch Product Details
$product_query = "SELECT * FROM products WHERE id = $product_id";
$product_result = mysqli_query($conn, $product_query);
$product = mysqli_fetch_assoc($product_result);

// Fetch Technical Data from Product-Specific Table
$table_name = "product_" . $product_id . "_details"; // Dynamic table name
$details_query = "SELECT * FROM $table_name";
$details_result = mysqli_query($conn, $details_query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $product['title']; ?> - Details</title>
    <link rel="stylesheet" href="product.css"> <!-- Custom CSS -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> <!-- jQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script> <!-- Animation Library -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="path/to/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="product.css">
</head>
<body>

<div class="container my-5">
    <!-- Product Title with Animation -->
    <h2 class="text-center wow title-heading fadeInDown"><?php echo $product['title']; ?></h2>
    <h5 class="text-center text-muted wow title-text fadeInUp"><?php echo $product['short_desc']; ?></h5>

    <!-- Product Image & Table Section -->
    <div class="row align-items-center my-4">
    <!-- Product Image Section -->
    <div class="col-md-6 text-center">
        <div class="product-image-container">
            <img src="<?php echo $product['image']; ?>" class="product-img wow zoomIn" alt="Product Image">
        </div>
    </div>

    <!-- Technical Specifications Table -->
    <div class="col-md-6">
    <h4 class="wow fadeInLeft">Technical Specifications</h4>
    <div class="table-container">
        <table class="table table-bordered wow fadeInRight">
            <thead class="table-dark">
                <tr>
                    <th>Technical Parameters</th>
                    <th>Specifications</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                $delay = 0; // Initial delay
                while ($row = mysqli_fetch_assoc($details_result)) { ?>
                    <tr class="animate__animated animate__fadeInUp" style="animation-delay: <?php echo $delay; ?>s;">
                        <td><?php echo $row['technical_params']; ?></td>
                        <td><?php echo $row['specifications']; ?></td>
                    </tr>
                <?php 
                    $delay += 0.2; // Staggered animation effect
                } ?>
            </tbody>
        </table>
    </div>
</div>

</div>
   <!-- Product Construction & Dimensions 
    <h3 class="text-center wow fadeInUp">Product Construction & Dimensions</h3>
    <div class="text-center my-3">
        <img src="images/dimensions1.jpg" class="animated-img wow fadeInLeft" alt="Dimension 1">
        <img src="images/dimensions2.jpg" class="animated-img wow fadeInRight" alt="Dimension 2">
    </div>
    -->
    <!-- About Section -->
    <h3 class="text-center wow about-product-heading fadeInUp">About</h3>
    <p class="wow about-product-text fadeIn">
        <?php echo $product['long_desc']; ?>
    </p>
</div>

<script>
    new WOW().init(); // Initialize Animation Library

    // Zoom In/Out Effect on Image
    $(".product-img").hover(
        function() { $(this).css({"transform": "scale(1.2)", "transition": "0.5s"}); },
        function() { $(this).css({"transform": "scale(1)"}); }
    );
    
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
<script>
    new WOW().init();
</script>

</body>
</html>
