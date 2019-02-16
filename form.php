<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <title>Form</title>
</head>


<body>

<?php
//set initial variables to empty
$name= $password= $employer= $role= $phone= $email= $linkedin= $github=
$twitter= $facebook= $instagram= $photo= "";
$nameErr= $passwordErr= $employerErr= $roleErr= $phoneErr= $emailErr= $linkedinErr= $githubErr=
$twitterErr= $facebookErr= $instagramErr= $photoErr= "";



if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["name"])) {
        $nameErr = "Name is required";
    } else {
        $name = test_input($_POST["name"]);
        // check if name only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z ]*$/", $name)) {
            $nameErr = "Only letters and white space allowed";
        }
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["password"])) {
        $passwordErr = "Password is required";
    } else {
        $password= test_input($_POST["password"]);
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["email"])){
        $emailErr="Email is required";
    }else{ $email = test_input($_POST["email"]);
        // check if e-mail address is well-formed
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email format";
        }
    }
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>


<!--Header on page -->
<h2>Create your profile</h2>
<!-- Wording to indicate required fields -->
<p><span class="error">* required field</span></p>

<!-- Start of form -->
<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">

    <!--Make name, password and email compulsory -->
    <label>Name:<input type="text" name="name" value="<?php echo $name;?>"></label>
    <span class="error">*<?php echo $nameErr;?></span>
    <br>
    <label>Password: <input type="password" name="password" value="<?php echo $password;?>"></label>
    <span class="error">*<?php echo $passwordErr;?></span>
    <br>
    <label>Email: <input type="email" name="email" value="<?php echo $email;?>"></label>
    <span class="error">*<?php echo $emailErr;?></span>
    <br>

    <!--Optional inputs -->
    <label>Employer:<input type="text" name="employer" value="<?php echo $employer;?>"></label>
    <br>
    <label>Role description:<input type="text" name="role" value="<?php echo $role;?>"></label>
    <br>
    <label>Telephone: <input type="text" name="phone" value="<?php echo $phone;?>"></label>
    <br>
    <label>LinkedIn: <input type="url" name="linkedin" value="<?php echo $linkedin;?>"></label>
    <br>
    <label><input type="url" name="github" value="<?php echo $github;?>"></label>
    <br>
    <label>Twitter: <input type="url" name="twitter" value="<?php echo $twitter;?>"></label>
    <br>
    <label>Facebook: <input type="url" name="facebook" value="<?php echo $facebook;?>"></label>
    <br>
    <label>Instagram: <input type="url" name="instagram" value="<?php echo $instagram;?>"></label>
    <br>
    <label>Photo: <input type="file" name="photo" value="<?php echo $photo;?>"></label>
    <br>
    <p><input type="submit" name="Submit" value="Submit"></p>

</form>
<!-- End of form -->
<br>
<br>

<!-- FOR TESTING PURPOSES ONLY -->
<h3> WORDING BELOW FOR TESTING: TO BE HIDDEN ONCE KNOW EVERYTHING WORKS</h3>
<?php
echo $name;
echo "<br>";
echo $password;
echo $employer;
echo $role;
echo $phone;
echo $email;
echo $linkedin;
echo $github;
echo $twitter;
echo $facebook;
echo $instagram;
echo $photo;

?>


</body>

