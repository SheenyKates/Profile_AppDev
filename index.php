<?php
include 'sdk/ProfileCard.php'; 
include 'sdk/profileFunctions.php';  

$name = "Sheeny Kates Dagala";
$age = 21;
$address = "Pagatpat, Cagayan de Oro City";
$email = "dagalasheenykates@gmail.com";
$phone = "09922156277";
$about = "I am a motivated and detail-oriented aspiring UI/UX designer and front-end developer, eager to build user-friendly interfaces, learn new technologies, and continuously improve my skills through hands-on projects.";
$skills = ["UI/UX Design", "Front-End Development", "Responsive Web Design", "User Interface Design"];
$languages = ["English", "Tagalog", "Bisaya"];
$profileImage = "profile.png"; 
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
    <?php echo createProfileCard($name, $profileImage); ?>

    <!-- ABOUT ME -->
    <?php echo renderAboutMe($about, $age, $address); ?>

    <!-- EDUCATION -->
    <?php echo renderEducation(); ?>

    <!-- SKILLS -->
    <?php echo renderSkills($skills); ?>

    <!-- LANGUAGES -->
    <?php echo renderLanguages($languages); ?>

    <!-- CONTACT -->
    <?php echo renderContactInfo($email, $phone); ?>

    <!-- FOOTER -->
    <footer>
        <p>&copy; <?php echo date("Y"); ?> <?php echo $name; ?></p>
    </footer>

</div>

</body>
</html>