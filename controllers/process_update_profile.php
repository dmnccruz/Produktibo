
<?php
    session_start();

    require "connection.php";

    $changeFirstName = $_POST['changeFirstName'];
    $changeLastName = $_POST['changeLastName'];
    $changeNickName = $_POST['changeNickName'];
    $changeMotto2 = $_POST['changeMotto'];
    $changeEmail = $_POST['changeEmail'];
    // $changeProfilePic = $_POST['changeProfilePic'];
    $user_id = $_SESSION['user']['id'];

    
    $destination = "../assets/images/profilePictures/";
    $fileName = $_FILES['changeProfilePic']['name'];
    move_uploaded_file($_FILES['changeProfilePic']['tmp_name'], $destination.$fileName);
    $profilePic = "assets/images/profilePictures/".$fileName;


    // $destination = "../assets/images/profilePictures/";
    // $fileName = $_FILES['changeProfilePic']['name'];
    // if(!file_exists($_FILES['myfile']['tmp_name'])){
    //     $destination = "../assets/images/profilePictures/";
    //     $fileName = "defaultProfilePicture.png";
    //     move_uploaded_file($_FILES['changeProfilePic']['tmp_name'], $destination.$fileName);
    //     $profilePic = "assets/images/profilePictures/".$fileName;
    // }

    // if(!file_exists($_FILES['changeProfilePic']['tmp_name']) || !is_uploaded_file($_FILES['changeProfilePic']['tmp_name'])) 
    // {
    //     echo 'No upload';
    //     $destination = "../assets/images/profilePictures/";
    //     $fileName = "defaultProfilePicture.png";
    //     move_uploaded_file($_FILES['changeProfilePic']['tmp_name'], $destination.$fileName);
    //     $profilePic = "assets/images/profilePictures/".$fileName;
    // }   
    // else{
    //     echo 'upload';
    //     $destination = "../assets/images/profilePictures/";
    //     $fileName = $_FILES['changeProfilePic']['name'];
    //     move_uploaded_file($_FILES['changeProfilePic']['tmp_name'], $destination.$fileName);
    //     $profilePic = "assets/images/profilePictures/".$fileName;
    // }

    
    // move_uploaded_file($_FILES['changeProfilePic']['tmp_name'], $destination.$fileName);
    // $profilePic = "assets/images/profilePictures/".$fileName;


    $update_first_query = "UPDATE users SET
    
    nickName = '$changeNickName', firstName = '$changeFirstName', lastName = '$changeLastName', email = '$changeEmail', profilePic = '$profilePic', motto = '$changeMotto2'
    

    WHERE id = $user_id";

    $update_first = mysqli_query($conn, $update_first_query);

    $user_query = "SELECT * FROM users WHERE id = $user_id";
	$user = mysqli_fetch_assoc(mysqli_query($conn, $user_query));

	unset($_SESSION['user']);
	$_SESSION['user'] = $user;


    die("success");
    
?>









                