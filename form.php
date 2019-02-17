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

if (empty($_POST["phone"])) {
    $phone= "";
} else {
    $phone = test_input($_POST["phone"]);
}

if (empty($_POST["employer"])) {
    $employer= "";
} else {
    $employer = test_input($_POST["employer"]);
}

if (empty($_POST["role"])) {
    $role= "";
} else {
    $role = test_input($_POST["role"]);
}


if (empty($_POST["linkedin"])) {
    $linkedin= "";
} else {
    $linkedin = test_input($_POST["linkedin"]);
}

if (empty($_POST["github"])) {
    $github= "";
} else {
    $github = test_input($_POST["github"]);
}

if (empty($_POST["twitter"])) {
    $twitter= "";
} else {
    $twitter = test_input($_POST["twitter"]);
}

if (empty($_POST["facebook"])) {
    $facebook= "";
} else {
    $facebook = test_input($_POST["facebook"]);
}

if (empty($_POST["instagram"])) {
    $instagram= "";
} else {
    $instagram = test_input($_POST["instagram"]);
}

if (empty($_POST["photo"])) {
    $photo= "";
} else {
    $photo = test_input($_POST["photo"]);
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
    <fieldset>
        <legend>Contact details</legend>
        <label>Name:<input type="text" name="name" required = "required" value="<?php echo $name;?>"></label>
            <span class="error">*<?php echo $nameErr;?></span>
        <br>
        <label>Password: <input type="password" name="password" required="required" maxlength="20" value="<?php echo $password;?>"></label>
            <span class="error">*<?php echo $passwordErr;?></span>
        <br>
        <label>Email: <input type="email" name="email" required="required" value="<?php echo $email;?>"></label>
            <span class="error">*<?php echo $emailErr;?></span>
        <br>

        <!--Optional inputs -->
        <label>Telephone: <input type="number" name="phone" maxlength="20" value="<?php echo $phone;?>"></label>
            <span class="error"><?php echo $phoneErr;?></span>
        <br>
        <label>Employer:<input type="text" name="employer" value="<?php echo $employer;?>">
            <span class="error"><?php echo $employerErr;?></span>
        <br>
        <label>Role description:<input type="text" name="role" value="<?php echo $role;?>"></label>
            <span class="error"><?php echo $roleErr;?></span>
        <br>

    </fieldset>



    <fieldset>
        <legend>Social media links </legend>
        <label>LinkedIn: <input type="url" name="linkedin" value="<?php echo $linkedin;?>"></label>
            <span class="error"><?php echo $linkedinErr;?></span>
        <br>
        <label>Github:<input type="url" name="github" value="<?php echo $github;?>"></label>
            <span class="error"><?php echo $githubErr;?></span>
        <br>
        <label>Twitter: <input type="url" name="twitter" value="<?php echo $twitter;?>"></label>
            <span class="error"><?php echo $twitterErr;?></span>
        <br>
        <label>Facebook: <input type="url" name="facebook" value="<?php echo $facebook;?>"></label>
            <span class="error"><?php echo $facebookErr;?></span>
        <br>
        <label>Instagram: <input type="url" name="instagram" value="<?php echo $instagram;?>"></label>
            <span class="error"><?php echo $instagramErr;?></span>
        <br>
    </fieldset>

    <!--Upload photo -->
    <fieldset>
        <legend>Photo</legend>
        <label>Photo: <input type="file" name="photo" value="<?php echo $photo;?>"></label>
            <span class="error"><?php echo $photoErr;?></span>
        <br>
    </fieldset>

    <!--Submit form-->
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
echo "<br>";
echo $employer;
echo "<br>";
echo $role;
echo "<br>";
echo $phone;
echo "<br>";
echo $email;
echo "<br>";
echo $linkedin;
echo "<br>";
echo $github;
echo "<br>";
echo $twitter;
echo "<br>";
echo $facebook;
echo "<br>";
echo $instagram;
echo "<br>";
echo $photo;

?>


</body>

