<?php
// sdk/userApi.php

function fetchUserProfile($userId) {
    // Example of fetching user data from a database or API
    $profileData = [
        'userId' => $userId,
        'name' => 'John Doe',
        'email' => 'john@example.com',
        'profileImage' => 'profile.jpg'
    ];
    
    return $profileData;
}
?>