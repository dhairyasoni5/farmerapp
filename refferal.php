<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Farmer Community Rewards</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            color: #333;
        }

        .header {
            background-color: #4CAF50;
            padding: 10px;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .logo-container {
            display: flex;
            align-items: center;
        }

        .logo {
            height: 50px;
        }

        .nav ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            display: flex;
        }

        .nav ul li {
            margin-right: 20px;
        }

        .nav ul li a {
            color: #fff;
            text-decoration: none;
        }

        .hero {
            text-align: center;
            padding: 50px 20px;
            background: url('photos/banner2.jpg') no-repeat center center/cover;
            color: #fff;
        }

        .rewards {
            display: flex;
            justify-content: space-around;
            padding: 20px;
        }

        .reward-card {
            background: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .reward-img {
            width: 100%;
            border-radius: 10px;
        }

        .referral {
            text-align: center;
            padding: 20px;
        }

        #referralLink {
            width: 80%;
            padding: 10px;
            margin-top: 10px;
            margin-bottom: 10px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        footer {
            background-color: #4CAF50;
            color: #fff;
            text-align: center;
            padding: 10px 0;
            position: fixed;
            bottom: 0;
            width: 100%;
        }

        .reward-card img{
            width: 50%;
            height: auto;
            object-fit: cover;
            border-radius: 10px;
            margin-bottom: 10px;
        }
    </style>
</head>

<body>
    <header class="header">
        <div class="logo-container">
            <a href="index.php">
                <img src="photos/logo_fin.png" alt="Logo" class="logo">
            </a>
        </div>
        <nav class="nav">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="rewards.php">Rewards</a></li>
                <li><a href="profile.php">Profile</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <section class="hero">
            <h1>Earn Rewards by Referring Friends</h1>
            <p>Invite your friends to join our farmer community and earn exclusive rewards!</p>
        </section>
        <section class="rewards">
            <div class="reward-card">
                <img src="photos/reward1.jpeg" alt="Reward 1" class="reward-img">
                <h3>Reward 1</h3>
                <p>Get a 10% discount on your next purchase from partenered stores.</p>
            </div>
            <div class="reward-card">
                <img src="photos/reward3.jpg" alt="Reward 2" class="reward-img">
                <h3>Reward 2</h3>
                <p>Receive a free farming toolkit.</p>
            </div>
            <div class="reward-card">
                <img src="photos/reward2.png" alt="Reward 3" class="reward-img">
                <h3>Reward 3</h3>
                <p>Access to exclusive farming webinars.</p>
            </div>
        </section>
        <section class="referral">
            <h2>Your Referral Link</h2>
            <p>Share this link with your friends to invite them to join our community:</p>
            <input type="text" id="referralLink" value="https://yourwebsite.com/referral.php?code=YOUR_REFERRAL_CODE"
                readonly>
            <button onclick="copyReferralLink()">Copy Link</button>
        </section>
    </main>
    <footer>
        <p>&copy; 2024 Farmer Community. All rights reserved.</p>
    </footer>
    <script>
        function copyReferralLink() {
            var copyText = document.getElementById("referralLink");
            copyText.select();
            copyText.setSelectionRange(0, 99999); // For mobile devices
            document.execCommand("copy");
            alert("Referral link copied: " + copyText.value);
        }
    </script>
</body>

</html>