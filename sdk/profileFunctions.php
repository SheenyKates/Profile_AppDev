<?php
// sdk/profileFunctions.php

// Function to render the About Me section
function renderAboutMe($about, $age, $address) {
    return "
    <div class='section'>
        <h2 class='toggle-title'>About Me</h2>
        <div class='content'>
            <p>$about</p>
            <p><strong>Age:</strong> $age</p>
            <p><strong>Address:</strong> $address</p>
        </div>
    </div>
    ";
}

// Function to render the Education section
function renderEducation() {
    return "
    <div class='section'>
        <h2 class='toggle-title'>Education</h2>
        <div class='content'>
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
    ";
}

// Function to render the Skills section
function renderSkills($skills) {
    $skillsList = '';
    foreach ($skills as $skill) {
        $skillsList .= "<li>$skill</li>";
    }

    return "
    <div class='section'>
        <h2 class='toggle-title'>Skills</h2>
        <div class='content'>
            <button class='btn' onclick='highlightSkills()'>Highlight Skills</button>
            <ul id='skills-list'>
                $skillsList
            </ul>
        </div>
    </div>
    ";
}

// Function to render the Languages section
function renderLanguages($languages) {
    $languagesList = '';
    foreach ($languages as $language) {
        $languagesList .= "<li>$language</li>";
    }

    return "
    <div class='section'>
        <h2 class='toggle-title'>Languages</h2>
        <div class='content'>
            <ul>
                $languagesList
            </ul>
        </div>
    </div>
    ";
}

// Function to render the Contact Information section
function renderContactInfo($email, $phone) {
    return "
    <div class='section'>
        <h2 class='toggle-title'>Contact Information</h2>
        <div class='content'>
            <p><strong>Email:</strong> $email</p>
            <p><strong>Phone:</strong> $phone</p>
        </div>
    </div>
    ";
}
?>