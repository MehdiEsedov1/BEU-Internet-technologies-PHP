<?php

function isUserRegistered($email, $filePath)
{
    if (file_exists($filePath)) {
        $fileHandle = fopen($filePath, "r"); // Open the file in read mode

        while (!feof($fileHandle)) {
            $line = fgets($fileHandle); // Get a line from the file
            $userData = explode(";", $line);

            if ($userData[2] == $email) {
                return true;
            }
        }
        fclose($fileHandle); // Close the file
    }
    return false;
}

function validateUser($email, $password, $filePath)
{
    if (file_exists($filePath)) { // Check if the file exists
        $isAuthenticated = false; // If email and password are correct, this becomes true
        $fileHandle = fopen($filePath, "r");

        while (!feof($fileHandle)) {
            $line = fgets($fileHandle);
            $userData = explode(";", $line);

            if ($userData[2] == $email && $userData[3] == $password) {
                echo "Welcome!";
                $isAuthenticated = true;
                break;
            }
        }

        fclose($fileHandle);

        if (!$isAuthenticated) {
            echo "Invalid email or password";
        }
    }
}

function addUser($email, $password, $filePath, $firstName, $lastName)
{
    if (!empty($firstName) && !empty($lastName) && !empty($email) && !empty($password)) {
        if (file_exists($filePath)) {
            if (empty(file_get_contents($filePath))) { // Check if the file is empty
                $userData = $firstName . ";" . $lastName . ";" . $email . ";" . $password . ";";
            } else {
                $userData = "\n" . $firstName . ";" . $lastName . ";" . $email . ";" . $password . ";";
            }
        } else {
            $userData = $firstName . ";" . $lastName . ";" . $email . ";" . $password . ";";
        }
    }

    $fileHandle = fopen($filePath, "a");
    fwrite($fileHandle, $userData);
    fclose($fileHandle);
    echo "Registration completed successfully";
}

function handleFormSubmission()
{
    if (isset($_POST["submit"])) {
        if (!empty($_POST["action"])) {
            $action = $_POST["action"];
            $filePath = "users.txt";

            $firstName = strip_tags($_POST["firstName"]); // Clean data to prevent XSS attacks
            $lastName = strip_tags($_POST["lastName"]);
            $email = strip_tags($_POST["email"]);
            $password = strip_tags($_POST["password"]);

            if ($action == "login") {
                if (isUserRegistered($email, $filePath)) {
                    validateUser($email, $password, $filePath);
                } else {
                    echo "No user exists on the site";
                }
            } elseif ($action == "register") {
                if (!empty($firstName) && !empty($lastName) && !empty($email) && !empty($password)) {
                    if (isUserRegistered($email, $filePath)) {
                        echo "An account with this email already exists";
                    } else {
                        addUser($email, $password, $filePath, $firstName, $lastName);
                    }
                } else {
                    echo "There are empty fields in the form";
                }
            }
        } else {
            echo "Please make a selection";
        }
    } else {
        echo "Please fill in the form to log in";
    }
}

handleFormSubmission();
