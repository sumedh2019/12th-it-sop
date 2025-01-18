<!DOCTYPE html>
<html>
<head>
    <title>Count Vowels in a String</title>
</head>
<body>
    <h2>Find Number of Vowels in a String</h2>
    <form action="" method="post">
        <input type="text" name="string" placeholder="Enter a string" required />
        <input type="submit" value="Count Vowels" />
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') { // Use a strict check for POST request
        if (!empty($_POST['string'])) { // Check if the input string is not empty
            $string = strtolower($_POST['string']); // Convert the string to lowercase
            $vowels = array('a', 'e', 'i', 'o', 'u'); // Define vowels
            $len = strlen($string); // Get the length of the string
            $num = 0; // Initialize the vowel counter

            // Loop through each character in the string
            for ($i = 0; $i < $len; $i++) {
                if (in_array($string[$i], $vowels)) { // Check if the character is a vowel
                    $num++;
                }
            }

            echo "<p>Number of vowels: <b>$num</b></p>"; // Display the result
        } else {
            echo "<p>Please enter a valid string.</p>"; // Handle empty string input
        }
    }
    ?>
</body>
</html>
