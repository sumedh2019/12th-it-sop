<!DOCTYPE html> 
<html> 
<head> 
    <title>Eligible to Vote or Not</title> 
</head> 
<body> 
    <h2>Check Voting Eligibility</h2>
    <form action="" method="post"> 
        Enter your age: 
        <input type="text" name="t1" placeholder="Enter your age" required><br><br>
        <input type="submit" name="submit" value="Check Eligibility"> 
    </form> 

    <?php 
    if (isset($_POST['submit'])) { 
        vote(); 
    } 

    // Function to check voting eligibility
    function vote() { 
        $a = $_POST['t1']; 

        // Validate if the input is numeric
        if (!is_numeric($a)) {
            echo "<p>Please enter a valid numeric age.</p>";
            return;
        }

        $a = intval($a); // Convert the input to an integer

        // Decision-making statement
        if ($a >= 18) { 
            echo "<p>You are eligible to vote.</p>"; 
        } else { 
            echo "<p>You are not eligible to vote.</p>"; 
        } 
    } 
    ?> 
</body> 
</html>
