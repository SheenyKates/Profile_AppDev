<?php
// sdk/ProfileCard.php

function createProfileCard($name, $imageUrl) {
    return "
    <div class='profile-card'>
        <img src='$imageUrl' alt='$name' class='profile-image'>
        <h2>$name</h2>
    </div>
    ";
}
?>