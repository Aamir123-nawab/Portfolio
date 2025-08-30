<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MobileData</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
<style>
        body {
            font-family: Arial, sans-serif;
            background: #f9f9f9;
            color: #333;
            margin: 0;
            padding: 0;
            text-align: center;
        }
        .container {
            width: 80%;
            margin: auto;
            padding: 20px;
        }
        .profile-card, .projects-card, .cv-section {
            background: #ffffff;
            padding: 20px;
            margin: 20px 0;
            border-radius: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }
        .profile-img {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            border: 4px solid #000;
            object-fit: cover;
            aspect-ratio: 1 / 1;
            display: block;
            margin: 0 auto;
            overflow: hidden;
        }
        .social-icons a {
            margin: 0 10px;
            text-decoration: none;
            font-size: 24px;
            padding: 10px;
            border-radius: 50%;
            display: inline-block;
        }
        .social-icons .fa-facebook { color: #1877F2; }
        .social-icons .fa-instagram { color: #E4405F; }
        .social-icons .fa-envelope { color: #D44638; }
        .social-icons .fa-whatsapp { color: #25D366; }
        .btn {
            background: #000;
            color: #fff;
            border: none;
            padding: 12px 24px;
            cursor: pointer;
            border-radius: 8px;
            font-size: 16px;
            transition: 0.3s;
        }
        .btn:hover {
            background: #444;
        }
        footer {
            background: #000;
            color: #fff;
            padding: 20px;
            margin-top: 20px;
            border-radius: 10px;
        }
        .footer-links a {
            color: #ccc;
            text-decoration: none;
            margin: 0 10px;
            font-size: 14px;
        }
        
    </style>
<div class="container">
        <div class="profile-card">
            <img src="logomirwah.webp" alt="Project Logo" class="profile-img">

            <h1>Mobile Data</h1>
        <button>
            <a href="/index.html">Home</a>
        </button>
            <p>Created By Heart ❤️ | For people Like You 😍</p>
            <div class="social-icons">
                <a href="#"><i class="fa-brands fa-facebook"></i></a>
                <a href="#"><i class="fa-brands fa-instagram"></i></a>
                <a href="#"><i class="fa-solid fa-envelope"></i></a>
                <a href="https://wa.me/923043794326" target="_blank"><i class="fa-brands fa-whatsapp"></i></a>
            </div>
        </div>
    
    <div class="container">
        <h2>Search CNIC / Mobile (Only Taluka Mirwah)</h2>
        <h4>Created By AAMiR HUSSAiN</h4>

        <!-- Search Form -->
        <form id="searchForm" action="search.php" method="GET">
            <input type="text" name="search" id="searchInput"
                placeholder="Enter CNIC or Mobile Number/Number should not start from Zero 3123456789" required>
            <button type="reset">X</button>
            <button type="submit">Search</button>
        </form>

        <!-- Loading Animation -->
        <div id="loading">
            <div class="spinner"></div>
            <p>Searching, please wait... Rolling our DATABASE With over 50Thousand + Record</p>
        </div>

        <!-- Results Section -->
        <div id="results">
            <?php
            // Display results here if any
            if (isset($_GET['search'])) {
                include 'search.php'; // Include the search functionality
            }
            ?>
        </div>
    </div>
    <footer>
            <p>iTian Khairpuri Shar</p>
            <p>Technologist and BSIT Degree Holder</p>
            <div class="footer-links">
                <a href="#">Privacy Policy</a> |
                <a href="#">Terms of Service</a> |
                <a href="/projects/index.php">Projects Page</a>
            </div>
            <p>&copy; 2025 All Rights Reserved</p>
        </footer>
    <script src="script.js"></script>
</body>

</html>