<?php
session_start();

// initializing variables
$firstname = "";
$lastname = "";
$username = "";
$password = "";
$email    = "";
$age = "";
$gender = "";
$description = "";
$errors = array();

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'testing');

// REGISTER USER
if (isset($_POST['reg_user'])) {

    // receive all input values from the form
    $firstname = mysqli_real_escape_string($db, $_POST['firstname']);
    $lastname = mysqli_real_escape_string($db, $_POST['lastname']);
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $password = mysqli_real_escape_string($db, $_POST['password']);
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $age= mysqli_real_escape_string($db, $_POST['age']);
    $gender = mysqli_real_escape_string($db, $_POST['gender']);
    $description = mysqli_real_escape_string($db, $_POST['description']);

    // form validation: ensure that the form is correctly filled ...
    // by adding (array_push()) corresponding error unto $errors array
    if (empty($firstname)) { array_push($errors, "First name is required"); }
    if (empty($lastname)) { array_push($errors, "Last name is required"); }
    if (empty($username)) { array_push($errors, "Username is required"); }
    if (empty($password)) { array_push($errors, "Password is required"); }
    if (empty($email)) { array_push($errors, "Email is required"); }
    if (empty($age)) { array_push($errors, "Age is required"); }

    // first check the database to make sure
    // a user does not already exist with the same username and/or email
    $user_check_query = "SELECT * FROM users WHERE username='$username' OR password='$password' LIMIT 1";
    $result = mysqli_query($db, $user_check_query);
    $user = mysqli_fetch_assoc($result);

    if ($user) { // if user exists
        if ($user['username'] === $username) {
            array_push($errors, "Username already exists");
        }

        if ($user['email'] === $password) {
            array_push($errors, "Password already exists");
        }
    }

  // Finally, register user if there are no errors in the form
    if (count($errors) == 0) {
    
        $query = "INSERT INTO users(firstname, lastname, username, password, email, age, gender, description)
                VALUES('$firstname','$lastname' , '$username','$password' , '$email', '$age', '$gender', '$description')";
        $results = mysqli_query($db, $query);
        $_SESSION['username'] = $username;
        $_SESSION['password'] = $password;
        $_SESSION['firstname'] = $firstname;
        $_SESSION['lastname'] = $lastname;
        $_SESSION['email'] = $email;
        $_SESSION['gender'] = $gender;
        $_SESSION['age'] = $age;
        $_SESSION['success'] = "You are now logged in";

        //id for skills and others
        $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
        $results = mysqli_query($db, $query);
        $row = mysqli_fetch_array($results, MYSQLI_ASSOC);
        $id = $row["id"];
        $_SESSION['id'] = $id;
        //skills
        $query2 = "INSERT INTO skills (id) VALUES('$id')";
        $result = mysqli_query($db, $query2);
        //Education
        $query2 = "INSERT INTO tbl_edu (id) VALUES('$id')";
        $result = mysqli_query($db, $query2);
        //Experience
        $query2 = "INSERT INTO tbl_exp (id) VALUES('$id')";
        $result = mysqli_query($db, $query2);

        header('location: index.php');
    }
}

//loginstation
if (isset($_POST['login_user'])) {
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $password = mysqli_real_escape_string($db, $_POST['password']);

    if (empty($username)) {
        array_push($errors, "Username is required");
    }
    if (empty($password)) {
        array_push($errors, "Password is required");
    }

    if (count($errors) == 0) {

        $query = "SELECT * FROM users WHERE username='$username' AND password=$password";
        $results = mysqli_query($db, $query);
        $row = mysqli_fetch_array($results, MYSQLI_ASSOC);
        if (mysqli_num_rows($results) == 1) {
        $_SESSION['id'] = $row["id"];
        $_SESSION['username'] = $username;
        $_SESSION['password'] = $password;
        $_SESSION['firstname'] = $row["firstname"];
        $_SESSION['lastname'] = $row["lastname"];
        $_SESSION['email'] = $row["email"];
        $_SESSION['gender'] = $row["gender"];
        $_SESSION['age'] = $row["age"];
        $_SESSION['success'] = "You are now logged in";
        header('location: index.php');
        } else {
            array_push($errors, "Wrong username/password combination");
        }
    }
}

//About update
if (isset($_POST['about_user'])) {
    $firstname = mysqli_real_escape_string($db, $_POST['firstname']);
    $lastname = mysqli_real_escape_string($db, $_POST['lastname']);
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $password = mysqli_real_escape_string($db, $_POST['password']);
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $age= mysqli_real_escape_string($db, $_POST['age']);
    $gender = mysqli_real_escape_string($db, $_POST['gender']);
    $description = mysqli_real_escape_string($db, $_POST['description']);

    $query = "UPDATE users (firstname, lastname, username, password, email, age, gender, description)
            VALUES('$firstname','$lastname' , '$username','$password' , '$email', '$age', '$gender', '$description')";
    mysqli_query($db, $query);
    $_SESSION['username'] = $username;
    $_SESSION['password'] = $password;
    $_SESSION['firstname'] = $firstname;
    $_SESSION['lastname'] = $lastname;
    $_SESSION['email'] = $email;
    $_SESSION['gender'] = $gender;
    $_SESSION['age'] = $age;

    $_SESSION['success'] = "You are now logged in";
    header('location: settings.php');
}

//Skills update
if (isset($_POST['skill_user'])) {
    $s1 = mysqli_real_escape_string($db, $_POST['s1']);
    $v1 = mysqli_real_escape_string($db, $_POST['v1']);
    $s2 = mysqli_real_escape_string($db, $_POST['s2']);
    $v2 = mysqli_real_escape_string($db, $_POST['v2']);
    $s3 = mysqli_real_escape_string($db, $_POST['s3']);
    $v3 = mysqli_real_escape_string($db, $_POST['v3']);
    $s4 = mysqli_real_escape_string($db, $_POST['s4']);
    $v4 = mysqli_real_escape_string($db, $_POST['v4']);
    $s5 = mysqli_real_escape_string($db, $_POST['s5']);
    $v5 = mysqli_real_escape_string($db, $_POST['v5']);

    $id = $_SESSION['id'];
    $query = "UPDATE skills
                SET s1 = '$s1', v1 = '$v1', s2 = '$s2',
                v2 = '$v2', s3 = '$s3', v3 = '$v3',
                s4 = '$s4', v4 = '$v4',
                s5 = '$s5', v5 = '$v5'
                WHERE id = $id";
    mysqli_query($db, $query);

    $_SESSION['s1'] = $s1;
    $_SESSION['v1'] = $v1;
    $_SESSION['s2'] = $s2;
    $_SESSION['v2'] = $v2;
    $_SESSION['s3'] = $s3;
    $_SESSION['v3'] = $v3;
    $_SESSION['s4'] = $s4;
    $_SESSION['v4'] = $v4;
    $_SESSION['s5'] = $s5;
    $_SESSION['v5'] = $v5;
    header('location: settings.php');
}

//Portfolio
$msg = "";
if(isset($_POST['upload'])){

    $target = "img/".basename($_FILES['image']['name']);
    $image = $_FILES['image']['name'];
    $text = $_POST['text'];

    $sql = "INSERT INTO images (image, text) VALUES ('$image','$text')";
    mysqli_query($db, $sql);

    if(move_uploaded_file($_FILES['image']['tmp_name'], $target)){
      $msg = "Image uploaded succesfully";
    } else {
      $img = "There was a problem uploading image";
    }
  }
