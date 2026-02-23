<?php
include 'sdk/ProfileCard.php';  
include 'sdk/profileFunctions.php'; 

$name = "Sheeny Kates Dagala";
$age = 21;
$address = "Pagatpat, Cagayan de Oro City";
$email = "dagalasheenykates@gmail.com";
$phone = "09922156277";

$about = "I am a motivated and detail-oriented aspiring UI/UX designer and front-end developer, eager to build user-friendly interfaces, learn new technologies, and continuously improve my skills through hands-on projects.";

$skills = [
    "UI/UX Design",
    "Front-End Development",
    "Responsive Web Design",
    "User Interface Design"
];

$languages = ["English", "Tagalog", "Bisaya"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Personal Profile</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script src="script.js" defer></script>
</head>
<body>

<div class="container">

    <!-- PROFILE HEADER -->
    <div class="profile-header">
        <img src="profile.png" alt="Profile Picture">
        <h1><?php echo $name; ?></h1>
        <p>BSIT 3rd Year Undergraduate</p>
    </div>

    <!-- ABOUT ME -->
    <div class="section">
        <h2 class="toggle-title">About Me</h2>
        <div class="content">
            <p><?php echo $about; ?></p>
            <p><strong>Age:</strong> <?php echo $age; ?></p>
            <p><strong>Address:</strong> <?php echo $address; ?></p>
        </div>
    </div>

    <!-- EDUCATION -->
    <div class="section">
        <h2 class="toggle-title">Education</h2>
        <div class="content">
            <ul>
                <li>
                    <strong>University of Science and Technology of Southern Philippines</strong><br>
                    BS Information Technology (2023–2025)
                </li>
                <li>
                    <strong>Canitoan National High School</strong><br>
                    Accountancy, Business and Management (2021–2023)
                </li>
            </ul>
        </div>
    </div>

    <!-- SKILLS -->
    <div class="section">
        <h2 class="toggle-title">Skills</h2>
        <div class="content">
            <button class="btn" onclick="highlightSkills()">Highlight Skills</button>
            <ul id="skills-list">
                <?php
                foreach ($skills as $skill) {
                    echo "<li>$skill</li>";
                }
                ?>
            </ul>
        </div>
    </div>

    <!-- LANGUAGES -->
    <div class="section">
        <h2 class="toggle-title">Languages</h2>
        <div class="content">
            <ul>
                <?php
                foreach ($languages as $language) {
                    echo "<li>$language</li>";
                }
                ?>
            </ul>
        </div>
    </div>

    <!-- CONTACT -->
    <div class="section">
        <h2 class="toggle-title">Contact Information</h2>
        <div class="content">
            <p><strong>Email:</strong> <?php echo $email; ?></p>
            <p><strong>Phone:</strong> <?php echo $phone; ?></p>
        </div>
    </div>

    <!-- FOOTER -->
    <footer>
        <p>&copy; <?php echo date("Y"); ?> <?php echo $name; ?></p>
    </footer>

</div>

</body>
</html>
