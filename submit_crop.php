<?php
$servername = "localhost";
$username = "root"; // Your database username
$password = ""; // Your database password
$dbname = "crop_marketplace";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch crop listings from the database
$sql = "SELECT crop_type, crop_name, quantity, price, harvest_date, description, image_path FROM crops";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buy Produce</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@700&family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <!-- Custom CSS -->
    <style>
        body {
            background: linear-gradient(135deg, #e0f2f1 0%, #b9fbc0 100%);
            font-family: 'Poppins', sans-serif;
        }
        .navbar {
            margin-bottom: 50px;
            padding: 0.5rem 1rem;
        }
        .navbar-brand {
            font-family: 'Raleway', sans-serif;
            font-size: 1.75rem;
            font-weight: 700;
            color: #333;
        }
        .navbar-nav .nav-link {
            font-size: 1rem;
            font-weight: 500;
            color: #333;
        }
        .navbar-nav .nav-link:hover {
            color: #007bff;
        }
        .container {
            margin-top: 20px;
        }
        .card {
            border: none;
            border-radius: 15px;
            overflow: hidden;
            transition: transform 0.3s, box-shadow 0.3s;
            background: #fff;
            box-shadow: 0 8px 16px rgba(0,0,0,0.2);
        }
        .card:hover {
            transform: scale(1.03);
            box-shadow: 0 16px 32px rgba(0,0,0,0.3);
        }
        .card-img-top {
            height: 200px;
            object-fit: cover;
            filter: brightness(0.8);
        }
        .card-img-top:hover {
            filter: brightness(1);
        }
        .card-body {
            padding: 20px;
        }
        .card-title {
            font-size: 1.5rem;
            margin-bottom: 10px;
            color: #333;
        }
        .card-text {
            color: #555;
        }
        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
            border-radius: 20px;
            padding: 10px 20px;
            transition: background-color 0.3s, border-color 0.3s;
        }
        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #004085;
        }
        .section-heading {
            background: rgba(0,0,0,0.1);
            padding: 20px;
            border-radius: 10px;
            margin-bottom: 30px;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="index.php">Crop Marketplace</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Home</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="container">
        <div class="section-heading text-center">
            <h1 class="mb-4">Available Crops for Sale</h1>
        </div>
        <div class="row">
            <?php
            if ($result->num_rows > 0) {
                // Output data of each row
                while ($row = $result->fetch_assoc()) {
                    echo "<div class='col-md-4 mb-4'>";
                    echo "<div class='card'>";
                    echo "<img src='" . htmlspecialchars($row["image_path"]) . "' class='card-img-top' alt='" . htmlspecialchars($row["crop_name"]) . "'>";
                    echo "<div class='card-body'>";
                    echo "<h5 class='card-title'>" . htmlspecialchars($row["crop_name"]) . "</h5>";
                    echo "<p class='card-text'><strong>Type:</strong> " . htmlspecialchars($row["crop_type"]) . "</p>";
                    echo "<p class='card-text'><strong>Quantity:</strong> " . htmlspecialchars($row["quantity"]) . "</p>";
                    echo "<p class='card-text'><strong>Price:</strong> $" . htmlspecialchars($row["price"]) . "</p>";
                    echo "<p class='card-text'><strong>Harvest Date:</strong> " . htmlspecialchars($row["harvest_date"]) . "</p>";
                    echo "<p class='card-text'><strong>Description:</strong> " . htmlspecialchars($row["description"]) . "</p>";
                    echo "</div>";
                    echo "</div>";
                    echo "</div>";
                }
            } else {
                echo "<p class='text-center col-md-12'>No crops available at the moment.</p>";
            }
            ?>
        </div>
    </div>

    <!-- Bootstrap JS and dependencies (optional but recommended) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

<?php
$conn->close();
?>
