<?php
    require "controllers/connection.php";
    session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

    <!-- FONTS -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Homemade+Apple&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Cabin+Sketch:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">

    <!-- CSS -->
    <!-- <link rel="stylesheet" href="assets/css/style.css"> -->
    
    <?php
        $user_id =  $_SESSION['user']['id'];
        $themes_query = "SELECT theme FROM users WHERE id = $user_id";
        $theme = mysqli_fetch_assoc(mysqli_query($conn, $themes_query));
        // var_dump($theme);

        if($theme['theme'] === "1"){
            ?>
            <link rel="stylesheet" href="assets/css/slate.css">
            <?php
        }
        else if($theme['theme'] === "2"){
            ?>
            <link rel="stylesheet" href="assets/css/light.css">
            <?php
        }
        else if($theme['theme'] === "3"){
            ?>
            <link rel="stylesheet" href="assets/css/forest.css">
            <?php
        }
        else if($theme['theme'] === "4"){
            ?>
            <link rel="stylesheet" href="assets/css/salmon.css">
            <?php
        }
        else if($theme['theme'] === "5"){
            ?>
            <link rel="stylesheet" href="assets/css/cloud.css">
            <?php
        }
        else {
            ?>
            <link rel="stylesheet" href="assets/css/style.css">
            <?php
        }
   
    ?>

    <!-- FONTAWESOME JS & CSS -->
    <script src="https://use.fontawesome.com/20ea9f8427.js" defer></script>
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">

    <!-- TIPPY CSS -->
    <link rel="stylesheet"href="https://unpkg.com/tippy.js@6/animations/scale.css"/>

    <!-- TIPPY JS -->
    <script src="https://unpkg.com/@popperjs/core@2/dist/umd/popper.min.js"></script>
    <script src="https://unpkg.com/tippy.js@6/dist/tippy-bundle.umd.js"></script>

    <!-- JQUERY -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" defer></script>
    
    <!-- JS -->
    <script src="assets/js/main.js" defer></script>
    <script src="assets/js/updatePassword.js" defer></script>
    <script src="assets/js/updateProfile.js" defer></script>
    <script src="assets/js/addTask.js" defer></script>
    <!-- <script type="module" src="assets/js/mainCalendar.js" defer></script> -->
    <!-- <script type="module" src="assets/js/tasksData.js" defer></script> -->
    <!-- <script type="module" src="assets/js/calendar.js" defer></script> -->



    <title>Produktibo | Main Page</title>

</head>
<body>

    <div id="draggableContainer">
                    <?php
    
                    $user_id =  $_SESSION['user']['id'];
                    $notes_query = "SELECT * FROM motivations WHERE user_id = $user_id && desk = 1";
                    $notes = mysqli_query($conn, $notes_query);

                    // var_dump($tasks);
                    // die();
                    foreach($notes as $indivNote){

                    $nickNameSender = $indivNote['sender_Id'];

                    $notes_query2 = "SELECT nickName FROM users WHERE id = $nickNameSender";
                    $sender = mysqli_fetch_assoc(mysqli_query($conn, $notes_query2));

                    ?>
                <div id="scaler2">
            <div style="background: <?php echo $indivNote['color']?>; transform: rotate(-<?php echo $indivNote['rotate']?>deg)" class="motivationalNoteDesk">
                <h3><?php echo $indivNote['message']; ?></h3><br><br>
                <p><?php echo "--".$sender['nickName']?></p>

                <a href="controllers/process_delete_desk_note.php?note_id=<?php echo $indivNote['id'];?>" class="noteButtonDesk">X</a>
                </div>
            </div>
            <?php
                }
            
            ?>
    </div>

<div class="addTaskInputWrapper">


</div>
<button type="button" class="calendarExit" id="calendarExit">X</button>

<iframe id="calendarIframe" src="calendarPage.php" width="100%" height="100%">

</iframe>

    <div class="updateprofileWrapper" id="updateprofileWrapper">
        <div class="updateprofileWindow">
            <div class="updateprofileSVGContainer">

                <svg class="updateprofileSVG" id="updateprofileSVG"  width="400" height="119" viewBox="0 0 300 119" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path id="updateprofileSVGpath1" d="M43.15 102.95C46.95 102.95 50.45 102.2 53.65 100.7C56.85 99.2 59.25 97.2 60.85 94.7C62.45 92.2 63.5 89.75 64 87.35H82C81 91.85 79.35 95.95 77.05 99.65C74.85 103.35 72.05 106.55 68.65 109.25C65.25 111.85 61.4 113.9 57.1 115.4C52.8 116.8 48.15 117.5 43.15 117.5C37.35 117.5 31.9 116.45 26.8 114.35C21.8 112.25 17.4 109.25 13.6 105.35C9.89999 101.45 6.99999 96.85 4.89999 91.55C2.89999 86.15 1.89999 80.35 1.89999 74.15C1.89999 67.95 2.89999 62.2 4.89999 56.9C6.99999 51.5 9.94999 46.9 13.75 43.1C17.55 39.2 22.05 36.2 27.25 34.1C32.45 32 38.05 30.95 44.05 30.95C49.65 30.95 54.85 31.95 59.65 33.95C64.45 35.85 68.6 38.6 72.1 42.2C75.6 45.8 78.3 50.1 80.2 55.1C82.1 60.1 83.05 65.55 83.05 71.45L82.45 78.65H19.45C20.15 86.15 22.65 92.1 26.95 96.5C31.35 100.8 36.75 102.95 43.15 102.95ZM43.15 45.5C38.75 45.5 34.75 46.6 31.15 48.8C27.55 51 24.9 53.75 23.2 57.05C21.5 60.35 20.4 63.7 19.9 67.1H65.5C65.3 62.3 63.95 58.15 61.45 54.65C58.95 51.15 55.95 48.75 52.45 47.45C49.05 46.15 45.95 45.5 43.15 45.5Z" stroke="black" stroke-width="2" mask="url(#path-1-outside-1)"/>
                    <path id="updateprofileSVGpath2" d="M114.232 74.15C114.232 77.15 114.582 80.3 115.282 83.6C115.982 86.8 117.232 89.8 119.032 92.6C120.932 95.4 123.482 97.8 126.682 99.8C129.982 101.8 134.032 102.8 138.832 102.8C143.632 102.8 147.832 101.7 151.432 99.5C155.132 97.2 158.132 93.9 160.432 89.6C162.732 85.3 163.882 80.15 163.882 74.15C163.882 68.25 162.732 63.15 160.432 58.85C158.132 54.55 155.132 51.3 151.432 49.1C147.832 46.8 143.632 45.65 138.832 45.65C136.032 45.65 133.132 46.15 130.132 47.15C127.232 48.05 124.582 49.7 122.182 52.1C119.882 54.4 117.982 57.4 116.482 61.1C114.982 64.8 114.232 69.15 114.232 74.15ZM163.732 46.1V1.54998H180.832V116H163.732V102.05C160.832 106.95 156.982 110.75 152.182 113.45C147.382 116.15 141.982 117.5 135.982 117.5C130.182 117.5 124.832 116.5 119.932 114.5C115.032 112.4 110.832 109.45 107.332 105.65C103.832 101.75 101.132 97.15 99.2324 91.85C97.3324 86.45 96.3824 80.6 96.3824 74.3C96.3824 68 97.2824 62.2 99.0824 56.9C100.982 51.5 103.682 46.9 107.182 43.1C110.682 39.2 114.882 36.2 119.782 34.1C124.782 32 130.232 30.95 136.132 30.95C142.132 30.95 147.532 32.3 152.332 35C157.132 37.6 160.932 41.3 163.732 46.1Z" stroke="black" stroke-width="2" mask="url(#path-1-outside-1)"/>
                    <path id="updateprofileSVGpath3" d="M205.197 116V32.45H222.297V116H205.197ZM213.897 23C210.897 23 208.297 21.95 206.097 19.85C203.997 17.65 202.947 15.05 202.947 12.05C202.947 9.04997 203.997 6.49998 206.097 4.39998C208.297 2.19998 210.897 1.09998 213.897 1.09998C216.897 1.09998 219.447 2.19998 221.547 4.39998C223.647 6.49998 224.697 9.04997 224.697 12.05C224.697 15.05 223.647 17.65 221.547 19.85C219.447 21.95 216.897 23 213.897 23Z" stroke="black" stroke-width="2" mask="url(#path-1-outside-1)"/>
                    <path id="updateprofileSVGpath4" d="M248.902 94.55V46.25H238.402V32.45H248.902V11.9H266.002V32.45H286.552V46.25H266.002V92.45C266.002 95.95 266.752 98.5 268.252 100.1C269.752 101.7 272.202 102.5 275.602 102.5C277.302 102.5 279.202 102.25 281.302 101.75C283.402 101.25 285.202 100.6 286.702 99.8V114.2C282.402 116.4 277.402 117.5 271.702 117.5C264.202 117.5 258.502 115.6 254.602 111.8C250.802 107.9 248.902 102.15 248.902 94.55Z" stroke="black" stroke-width="2" mask="url(#path-1-outside-1)"/>
                </svg>
            </div> <br>
            
            <div class="updatechangeprofilePicWrap" >
                <!-- <div id="output2" class="updateprofileChangePic" id="updateprofileChangePic" style="background-image: url(<?php echo $_SESSION['user']['profilePic']?>);"> -->
                <div class="updateprofileChangePic" id="updateprofileChangePic">
                <img id="output2" width="100%" src="<?php echo $_SESSION['user']['profilePic']?>" alt="">

                    <label for="updateprofileprofilePic" class="updateprofileprofilePic" style="color:white; font-family:'Roboto';">
                        <i id="updateprofileprofilefaCamera2" class="fa fa-camera-retro" aria-hidden="true" style="color:white;"></i>Change your picture.
                    </label>

                </div>
            </div>
            <hr>
 
            <form class="updateprofileprofileInfo" action="controllers/process_update_profile.php" method="POST" enctype="multipart/form-data"> 

                <input id="updateprofileprofilePic" name="changeProfilePic" type="file" onchange="loadFile(event)"/>
                <h3>Change your basic info</h3><br>

                <label for="changeFirstName">First Name:</label>
                <input type="text" id="changeFirstName" name="changeFirstName" class="changeFirstName updateprofilechange" placeholder="  &#xf007; <?php echo $_SESSION['user']['firstName']?>" value="<?php echo $_SESSION['user']['firstName']?>"><br>

                <label for="changeLastName">Last Name:</label>
                <input type="text" id="changeLastName" name="changeLastName" class="changeLastName updateprofilechange" placeholder="  &#xf2bb; <?php echo $_SESSION['user']['lastName']?>" value="<?php echo $_SESSION['user']['lastName']?>"><br>

                <label for="changeNickName">Nickname:</label>
                <input type="text" id="changeNickName" name="changeNickName" class="changeNickName updateprofilechange" placeholder="  &#xf2bb; <?php echo $_SESSION['user']['nickName']?>" value="<?php echo $_SESSION['user']['nickName']?>"><br>

                <label for="changeMotto">Motto:</label>
                <input type="text" id="changeMotto" name="changeMotto" class="changeMottos updateprofilechange" placeholder="  &#xf075; <?php echo $_SESSION['user']['motto']?>" value="<?php echo $_SESSION['user']['motto']?>"><br>

                <label for="changeEmail">Email:</label>
                <input type="text" id="changeEmail" name="changeEmail" class="changeEmail updateprofilechange" placeholder="  &#xf0e0; <?php echo $_SESSION['user']['email']?>" value="<?php echo $_SESSION['user']['email']?>"><br>
                <button type="button" class="updateProfile" id="updateProfile">Save Info</button><br>

                <hr><br>
                <h3>Change your password</h3><br>

                <label for="oldPassword">Old Password:</label>
                <input type="password" id="oldPassword" name="oldPassword" class="oldPassword updateprofilechange" placeholder="  &#xf023;">
                <button type="button" id="showPassword3">&#xf06e;</button>
                <button type="button" id="showPassword4">&#xf070;</button>

                <label for="newPassword">New Password:</label>
                <input type="password" id="newPassword" name="newPassword" class="changeConfirmPassword updateprofilechange" placeholder="  &#xf084;">
                <button type="button" id="showPassword5">&#xf06e;</button>
                <button type="button" id="showPassword6">&#xf070;</button>

                <label for="confimNewPassword">Confirm New Password:</label>
                <input type="password" id="confirmNewPassword" name="confirmNewPassword" class="confirmNewPassword updateprofilechange" placeholder="  &#xf084;"><br>
                <button type="button" id="showPassword11">&#xf06e;</button>
                <button type="button" id="showPassword12">&#xf070;</button>

                <button href="" type="button" style="font-size:20px; width: 30%; text-decoration: none;" class="savePassword" id="savePassword">Save Password</button>


            </form>

            <!-- <hr> -->
        </div>
        <button type="button" class="profileExit2" id="profileExit2">X</button>

    </div>

    <div class="profileWrapper" id="profileWrapper">
        <div class="profileWindow">
            <div class="profileSVGContainer">
                <svg class="profileSVG" id="profileSVG" width="477" height="152" viewBox="0 0 477 152" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path id="profileSVGpath1" d="M67.75 75.3C67.75 72.3 67.4 69.2 66.7 66C66 62.7 64.7 59.65 62.8 56.85C61 54.05 58.45 51.65 55.15 49.65C51.95 47.65 47.95 46.65 43.15 46.65C40.35 46.65 37.45 47.15 34.45 48.15C31.55 49.15 28.9 50.85 26.5 53.25C24.1 55.55 22.1 58.55 20.5 62.25C19 65.95 18.25 70.3 18.25 75.3C18.25 78.1 18.6 81.1 19.3 84.3C20.1 87.5 21.45 90.55 23.35 93.45C25.25 96.35 27.85 98.8 31.15 100.8C34.45 102.8 38.45 103.8 43.15 103.8C45.95 103.8 48.8 103.35 51.7 102.45C54.7 101.45 57.35 99.8 59.65 97.5C62.05 95.1 64 92.05 65.5 88.35C67 84.65 67.75 80.3 67.75 75.3ZM18.25 103.35V150.75H1.14999V33.45H18.25V47.4C21.15 42.5 25 38.7 29.8 36C34.6 33.3 40 31.95 46 31.95C51.8 31.95 57.15 33 62.05 35.1C66.95 37.1 71.15 40.05 74.65 43.95C78.15 47.75 80.85 52.35 82.75 57.75C84.65 63.05 85.6 68.85 85.6 75.15C85.6 81.45 84.65 87.3 82.75 92.7C80.95 98 78.3 102.6 74.8 106.5C71.3 110.3 67.05 113.25 62.05 115.35C57.15 117.45 51.75 118.5 45.85 118.5C39.85 118.5 34.45 117.2 29.65 114.6C24.95 111.9 21.15 108.15 18.25 103.35Z" stroke="black" stroke-width="2" mask="url(#path-1-outside-1)"/>
                    <path id="profileSVGpath2" d="M121.814 72.6V117H104.714V33.45H121.814V46.05C123.914 41.65 126.614 38.2 129.914 35.7C133.314 33.2 137.114 31.95 141.314 31.95C142.814 31.95 144.164 32.15 145.364 32.55C146.664 32.95 147.564 33.45 148.064 34.05V52.35C145.764 50.65 142.814 49.8 139.214 49.8C138.314 49.8 136.714 50 134.414 50.4C132.214 50.8 130.164 51.85 128.264 53.55C126.364 55.15 124.814 57.45 123.614 60.45C122.414 63.45 121.814 67.5 121.814 72.6Z" stroke="black" stroke-width="2" mask="url(#path-1-outside-1)"/>
                    <path id="profileSVGpath3" d="M201.129 31.95C207.129 31.95 212.729 33 217.929 35.1C223.229 37.2 227.779 40.2 231.579 44.1C235.479 47.9 238.479 52.5 240.579 57.9C242.779 63.2 243.879 68.95 243.879 75.15C243.879 81.35 242.779 87.15 240.579 92.55C238.379 97.85 235.279 102.45 231.279 106.35C227.279 110.25 222.629 113.25 217.329 115.35C212.029 117.45 206.379 118.5 200.379 118.5C194.379 118.5 188.729 117.45 183.429 115.35C178.129 113.25 173.479 110.25 169.479 106.35C165.579 102.45 162.529 97.85 160.329 92.55C158.229 87.15 157.179 81.35 157.179 75.15C157.179 68.95 158.279 63.2 160.479 57.9C162.779 52.5 165.929 47.9 169.929 44.1C173.929 40.2 178.629 37.2 184.029 35.1C189.429 33 195.129 31.95 201.129 31.95ZM200.829 46.95C196.529 46.95 192.279 48.05 188.079 50.25C183.979 52.45 180.779 55.85 178.479 60.45C176.179 64.95 175.029 69.85 175.029 75.15C175.029 78.35 175.479 81.65 176.379 85.05C177.279 88.35 178.729 91.35 180.729 94.05C182.829 96.75 185.529 99 188.829 100.8C192.129 102.6 195.979 103.5 200.379 103.5C205.579 103.5 210.129 102.2 214.029 99.6C217.929 97 220.879 93.65 222.879 89.55C224.979 85.45 226.029 80.7 226.029 75.3C226.029 72.1 225.579 68.85 224.679 65.55C223.879 62.15 222.429 59.1 220.329 56.4C218.229 53.7 215.529 51.45 212.229 49.65C209.029 47.85 205.229 46.95 200.829 46.95Z" stroke="black" stroke-width="2" mask="url(#path-1-outside-1)"/>
                    <path id="profileSVGpath4" d="M264.418 117V47.25H254.518V33.45H264.418V29.1C264.418 20.1 266.668 13.35 271.168 8.85001C275.668 4.25001 282.268 1.95001 290.968 1.95001C293.468 1.95001 295.768 2.25001 297.868 2.85001C300.068 3.35001 301.718 4.00001 302.818 4.80001V19.05C300.318 17.35 297.168 16.5 293.368 16.5C291.268 16.5 289.218 16.9 287.218 17.7C285.318 18.5 283.868 19.95 282.868 22.05C281.968 24.15 281.518 26.75 281.518 29.85V33.45H302.968V47.25H281.518V117H264.418Z" stroke="black" stroke-width="2" mask="url(#path-1-outside-1)"/>
                    <path id="profileSVGpath5" d="M316.824 117V33.45H333.924V117H316.824ZM325.524 24C322.524 24 319.924 22.95 317.724 20.85C315.624 18.65 314.574 16.05 314.574 13.05C314.574 10.05 315.624 7.50001 317.724 5.40001C319.924 3.20001 322.524 2.10001 325.524 2.10001C328.524 2.10001 331.074 3.20001 333.174 5.40001C335.274 7.50001 336.324 10.05 336.324 13.05C336.324 16.05 335.274 18.65 333.174 20.85C331.074 22.95 328.524 24 325.524 24Z" stroke="black" stroke-width="2" mask="url(#path-1-outside-1)"/>
                    <path id="profileSVGpath6" d="M358.279 117V2.55001H375.529V117H358.279Z" stroke="black" stroke-width="2" mask="url(#path-1-outside-1)"/>
                    <path id="profileSVGpath7" d="M435.88 103.95C439.68 103.95 443.18 103.2 446.38 101.7C449.58 100.2 451.98 98.2 453.58 95.7C455.18 93.2 456.23 90.75 456.73 88.35H474.73C473.73 92.85 472.08 96.95 469.78 100.65C467.58 104.35 464.78 107.55 461.38 110.25C457.98 112.85 454.13 114.9 449.83 116.4C445.53 117.8 440.88 118.5 435.88 118.5C430.08 118.5 424.63 117.45 419.53 115.35C414.53 113.25 410.13 110.25 406.33 106.35C402.63 102.45 399.73 97.85 397.63 92.55C395.63 87.15 394.63 81.35 394.63 75.15C394.63 68.95 395.63 63.2 397.63 57.9C399.73 52.5 402.68 47.9 406.48 44.1C410.28 40.2 414.78 37.2 419.98 35.1C425.18 33 430.78 31.95 436.78 31.95C442.38 31.95 447.58 32.95 452.38 34.95C457.18 36.85 461.33 39.6 464.83 43.2C468.33 46.8 471.03 51.1 472.93 56.1C474.83 61.1 475.78 66.55 475.78 72.45L475.18 79.65H412.18C412.88 87.15 415.38 93.1 419.68 97.5C424.08 101.8 429.48 103.95 435.88 103.95ZM435.88 46.5C431.48 46.5 427.48 47.6 423.88 49.8C420.28 52 417.63 54.75 415.93 58.05C414.23 61.35 413.13 64.7 412.63 68.1H458.23C458.03 63.3 456.68 59.15 454.18 55.65C451.68 52.15 448.68 49.75 445.18 48.45C441.78 47.15 438.68 46.5 435.88 46.5Z" stroke="black" stroke-width="2" mask="url(#path-1-outside-1)"/>
                </svg>
            </div> 
            
            <div class="changeprofilePicWrap" >
                <div class="profileChangePic" id="profileChangePic" style="background-image: url(<?php echo $_SESSION['user']['profilePic']?>);">

                    <!-- <label for="profileprofilePic" class="profileprofilePic">
                        <i id="profilefaCamera2" class="fa fa-camera-retro" aria-hidden="true"></i>Change your picture.
                    </label>
                    <input id="profileprofilePic" name="profileprofilePic" type="file"/> -->

                    <label for="profileprofilePic" class="profileprofilePic">
                    </label>
                    <input id="profileprofilePic" name="profileprofilePic" type="file"/>

                </div>
            </div>
            <hr>

            <div class="profileInfo">
                <p>Produktibo ID:</p>
                    <h2 class="produktiboID" id="produktiboID"><?php echo $_SESSION['user']['uniqueid']?></h2><br>
                <p>Full Name:</p>
                    <h2 class="profileFullName" id="profileFullName"><?php echo $_SESSION['user']['firstName'] . " " . $_SESSION['user']['lastName']?></h2><br>
                <p>Nickname:</p>
                    <h2 class="profileNickName" id="profileNickName"><?php echo $_SESSION['user']['nickName']?></h2><br>
                <p>Email:</p>
                    <h2 class="profileNickName" id="profileNickName"><?php echo $_SESSION['user']['email']?></h2><br>
                <p>Member since:</p>
                    <h2 class="profileMemberSince" id="profileMemberSince"><?php echo $_SESSION['user']['joined']?></h2><br>
                <p >Your Motto:</p>
                <h2 class="profileMemberSince" id="profileMemberSince"><?php echo $_SESSION['user']['motto']?></h2>
            </div>
            <!-- <div class="profileChangeMotto"> -->
                <!-- <p>Change Motto:</p> -->
                <!-- <label for="changeMotto">Change your Motto:</label> -->

                <!-- <div class="changeWrap">
                    <input type="text" name="changeMotto" class="changeMotto" placeholder="  &#xf075; current motto">
                </div> -->
            <!-- </div> -->
            <hr>
            <div class="profileLogout">
                <button type="button" class="logoutButton" id="logoutButton"><a href="controllers/process_logout.php" style="text-decoration:none; color:white;">Logout</a></button>
                <button type="button" class="updateProfileA" id="updateProfileA">Edit</button>
            </div>

        </div>
            <button type="button" class="profileExit" id="profileExit">X</button>
    </div>

    <div class=themesWrapper id="themesWrapper">
        <button type="button" class="themesExit" id="themesExit">X</button>
        <form class="themesWindow" action="controllers/process_change_theme.php" method="POST">
            <div class="themesSVGContainer">

            <svg class="themesSVG" id="themesSVG" width="570" height="119" viewBox="0 0 570 119" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path id="themesSVGpath1" d="M12.4 94.55V46.25H1.90002V32.45H12.4V11.9H29.5V32.45H50.05V46.25H29.5V92.45C29.5 95.95 30.25 98.5 31.75 100.1C33.25 101.7 35.7 102.5 39.1 102.5C40.8 102.5 42.7 102.25 44.8 101.75C46.9 101.25 48.7 100.6 50.2 99.8V114.2C45.9 116.4 40.9 117.5 35.2 117.5C27.7 117.5 22 115.6 18.1 111.8C14.3 107.9 12.4 102.15 12.4 94.55Z" stroke="black" stroke-width="2" mask="url(#path-1-outside-1)"/>
                <path id="themesSVGpath2" d="M67.1324 116V1.54999H84.2324V45.2C86.7324 40.7 90.2324 37.2 94.7324 34.7C99.2324 32.2 104.182 30.95 109.582 30.95C113.782 30.95 117.782 31.75 121.582 33.35C125.382 34.85 128.682 37.1 131.482 40.1C134.382 43 136.632 46.7 138.232 51.2C139.832 55.7 140.632 60.7 140.632 66.2V116H123.532V68.9C123.532 61.5 121.782 55.8 118.282 51.8C114.782 47.8 109.982 45.8 103.882 45.8C97.8824 45.8 93.0824 47.8 89.4824 51.8C85.9824 55.8 84.2324 61.5 84.2324 68.9V116H67.1324Z" stroke="black" stroke-width="2" mask="url(#path-1-outside-1)"/>
                <path id="themesSVGpath3" d="M200.984 102.95C204.784 102.95 208.284 102.2 211.484 100.7C214.684 99.2 217.084 97.2 218.684 94.7C220.284 92.2 221.334 89.75 221.834 87.35H239.834C238.834 91.85 237.184 95.95 234.884 99.65C232.684 103.35 229.884 106.55 226.484 109.25C223.084 111.85 219.234 113.9 214.934 115.4C210.634 116.8 205.984 117.5 200.984 117.5C195.184 117.5 189.734 116.45 184.634 114.35C179.634 112.25 175.234 109.25 171.434 105.35C167.734 101.45 164.834 96.85 162.734 91.55C160.734 86.15 159.734 80.35 159.734 74.15C159.734 67.95 160.734 62.2 162.734 56.9C164.834 51.5 167.784 46.9 171.584 43.1C175.384 39.2 179.884 36.2 185.084 34.1C190.284 32 195.884 30.95 201.884 30.95C207.484 30.95 212.684 31.95 217.484 33.95C222.284 35.85 226.434 38.6 229.934 42.2C233.434 45.8 236.134 50.1 238.034 55.1C239.934 60.1 240.884 65.55 240.884 71.45L240.284 78.65H177.284C177.984 86.15 180.484 92.1 184.784 96.5C189.184 100.8 194.584 102.95 200.984 102.95ZM200.984 45.5C196.584 45.5 192.584 46.6 188.984 48.8C185.384 51 182.734 53.75 181.034 57.05C179.334 60.35 178.234 63.7 177.734 67.1H223.334C223.134 62.3 221.784 58.15 219.284 54.65C216.784 51.15 213.784 48.75 210.284 47.45C206.884 46.15 203.784 45.5 200.984 45.5Z" stroke="black" stroke-width="2" mask="url(#path-1-outside-1)"/>
                <path id="themesSVGpath4" d="M259.466 116V32.45H276.566V45.05C279.066 40.55 282.516 37.1 286.916 34.7C291.316 32.2 296.216 30.95 301.616 30.95C307.616 30.95 313.066 32.55 317.966 35.75C322.966 38.85 326.716 43.25 329.216 48.95C331.416 43.25 334.966 38.85 339.866 35.75C344.766 32.55 350.416 30.95 356.816 30.95C360.016 30.95 363.116 31.4 366.116 32.3C369.116 33.1 371.866 34.35 374.366 36.05C376.866 37.75 379.066 39.85 380.966 42.35C382.866 44.85 384.516 48.1 385.916 52.1C387.316 56 388.016 60.7 388.016 66.2V116H370.916V68.9C370.916 61.5 369.166 55.8 365.666 51.8C362.266 47.8 357.616 45.8 351.716 45.8C345.816 45.8 341.116 47.8 337.616 51.8C334.116 55.8 332.366 61.5 332.366 68.9V116H315.266V68.9C315.266 61.5 313.516 55.8 310.016 51.8C306.516 47.8 301.816 45.8 295.916 45.8C290.016 45.8 285.316 47.8 281.816 51.8C278.316 55.8 276.566 61.5 276.566 68.9V116H259.466Z" stroke="black" stroke-width="2" mask="url(#path-1-outside-1)"/>
                <path id="themesSVGpath5" d="M448.25 102.95C452.05 102.95 455.55 102.2 458.75 100.7C461.95 99.2 464.35 97.2 465.95 94.7C467.55 92.2 468.6 89.75 469.1 87.35H487.1C486.1 91.85 484.45 95.95 482.15 99.65C479.95 103.35 477.15 106.55 473.75 109.25C470.35 111.85 466.5 113.9 462.2 115.4C457.9 116.8 453.25 117.5 448.25 117.5C442.45 117.5 437 116.45 431.9 114.35C426.9 112.25 422.5 109.25 418.7 105.35C415 101.45 412.1 96.85 410 91.55C408 86.15 407 80.35 407 74.15C407 67.95 408 62.2 410 56.9C412.1 51.5 415.05 46.9 418.85 43.1C422.65 39.2 427.15 36.2 432.35 34.1C437.55 32 443.15 30.95 449.15 30.95C454.75 30.95 459.95 31.95 464.75 33.95C469.55 35.85 473.7 38.6 477.2 42.2C480.7 45.8 483.4 50.1 485.3 55.1C487.2 60.1 488.15 65.55 488.15 71.45L487.55 78.65H424.55C425.25 86.15 427.75 92.1 432.05 96.5C436.45 100.8 441.85 102.95 448.25 102.95ZM448.25 45.5C443.85 45.5 439.85 46.6 436.25 48.8C432.65 51 430 53.75 428.3 57.05C426.6 60.35 425.5 63.7 425 67.1H470.6C470.4 62.3 469.05 58.15 466.55 54.65C464.05 51.15 461.05 48.75 457.55 47.45C454.15 46.15 451.05 45.5 448.25 45.5Z" stroke="black" stroke-width="2" mask="url(#path-1-outside-1)"/>
                <path id="themesSVGpath6" d="M519.932 54.35C519.932 55.95 520.382 57.45 521.282 58.85C522.182 60.25 523.732 61.5 525.932 62.6C528.132 63.7 533.182 65.15 541.082 66.95C549.082 68.75 554.682 70.7 557.882 72.8C561.082 74.9 563.332 77.05 564.632 79.25C566.032 81.45 566.932 83.65 567.332 85.85C567.832 87.95 568.082 89.95 568.082 91.85C568.082 99.55 565.182 105.75 559.382 110.45C553.582 115.15 545.832 117.5 536.132 117.5C526.132 117.5 517.882 114.9 511.382 109.7C504.982 104.4 501.432 97.05 500.732 87.65H517.982C518.482 92.65 520.282 96.55 523.382 99.35C526.582 102.15 530.932 103.55 536.432 103.55C540.732 103.55 544.232 102.65 546.932 100.85C549.632 98.95 550.982 96.5 550.982 93.5C550.982 92.3 550.732 91.05 550.232 89.75C549.832 88.35 549.032 87.1 547.832 86C546.632 84.9 545.032 83.9 543.032 83C541.032 82.1 535.932 80.65 527.732 78.65C519.632 76.65 514.082 74.55 511.082 72.35C508.182 70.15 506.082 67.7 504.782 65C503.482 62.3 502.832 59.05 502.832 55.25C502.832 52.05 503.482 49 504.782 46.1C506.182 43.1 508.132 40.5 510.632 38.3C513.232 36 516.432 34.2 520.232 32.9C524.132 31.6 528.432 30.95 533.132 30.95C542.432 30.95 550.032 33.55 555.932 38.75C561.932 43.85 565.332 51.2 566.132 60.8H549.332C548.932 57.3 547.832 54.25 546.032 51.65C544.232 49.05 542.132 47.3 539.732 46.4C537.332 45.4 535.082 44.9 532.982 44.9C528.882 44.9 525.682 45.8 523.382 47.6C521.082 49.3 519.932 51.55 519.932 54.35Z" stroke="black" stroke-width="2" mask="url(#path-1-outside-1)"/>
            </svg>

            </div>
            <div class="themesSelector">
                <label for="themesSelect">Select a Theme</label><br>
                <select name="themesselect" id="themesSelect" class="themesSelect">
                    <option value="" disabled selected>themes</option>
                    <option value="1">Slate</option>
                    <option value="2">Light</option>
                    <option value="3">Forest</option>
                    <option value="4">Salmon</option>
                    <option value="5">Cloud</option>
                    <option value="6">Banana</option>
                </select>
            </div>
            <div class="themesButtons">
                <!-- <button type="button" class="applyButton" id="applyButton">Apply</button> -->
                <button type="submit" class="saveButton" id="saveButton">Save</button>
            </div>
        </form>
    </div>

    <div id="markerDrag" class="markerSVG"><img src="/assets/images/marker.svg" alt=""></div>
    <div id="phoneDrag" class="phoneSVG drag">
        <img src="/assets/images/phone.svg" alt="">
        <div class="phoneStatsWrapper">
            <h1 class="phoneStats1" id="phoneStats1">
                <?php $user_id =  $_SESSION['user']['id'];
                            $tasks_query = "SELECT * FROM tasks WHERE user_id = $user_id && status_id = 2";

                            $tasks = mysqli_query($conn, $tasks_query);
                            
                            echo mysqli_num_rows($tasks)
                            
                            ?>
                            
                        
                </h1>
            <h4 class="phoneStats2">no. of tasks today.</h4>
        </div>
    </div>
    <div id="eraserDrag" class="eraserSVG drag"><img src="/assets/images/eraser.svg" alt=""></div>
    <div id="pencilDrag" class="pencilSVG drag"><img src="/assets/images/pencil.svg" alt=""></div>

    <div class="deskContainer">
        <div class="deskFiller"></div>
        <div class="desk"></div>
    </div>

    <div class="deskContainerWoodGrain">
        <div class="deskFillerWoodGrain"></div>
        <div class="deskWoodGrain"></div>
    </div>

    <div class=watermark>
        <svg id="watermarkSVG" width="888" height="228" viewBox="0 0 888 228" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path id="fillPath" d="M48.3633 25.8L77.9633 21.8L63.7633 88.6C70.1633 88.0667 76.03 85.2667 81.3633 80.2C86.83 75.1333 91.0966 68.8667 94.1633 61.4C97.23 53.9333 98.7633 46.6 98.7633 39.4C98.7633 31.4 96.6966 24.8667 92.5633 19.8C88.43 14.7333 82.23 12.2 73.9633 12.2C57.6966 12.2 44.9633 16.4667 35.7633 25C26.6966 33.5333 22.1633 45.4667 22.1633 60.8C22.1633 65.7333 22.63 69.2 23.5633 71.2C24.4966 73.0667 24.9633 74.1333 24.9633 74.4C17.7633 74.4 12.3633 72.9333 8.76329 70C5.29663 66.9333 3.56329 61.9333 3.56329 55C3.56329 46.4667 7.02996 38.2 13.9633 30.2C21.03 22.0667 30.03 15.5333 40.9633 10.6C51.8966 5.53334 62.83 3 73.7633 3C84.2966 3 93.0966 4.8 100.163 8.4C107.23 12 112.43 16.8 115.763 22.8C119.23 28.6667 120.963 35.2 120.963 42.4C120.963 51.0667 118.563 59.5333 113.763 67.8C109.097 76.0667 102.363 82.8667 93.5633 88.2C84.7633 93.4 74.63 96 63.1633 96H62.1633L49.9633 153H21.1633L48.3633 25.8Z" stroke="black" stroke-width="6" mask="url(#path-1-outside-1)"/>
            <path d="M130.612 53H159.412L156.812 65.4C161.345 61.4 165.412 58.3333 169.012 56.2C172.745 54.0667 176.745 53 181.012 53C185.278 53 188.612 54.4667 191.012 57.4C193.545 60.3333 194.812 63.8667 194.812 68C194.812 71.8667 193.545 75.2667 191.012 78.2C188.478 81.1333 184.945 82.6 180.412 82.6C177.478 82.6 175.478 81.9333 174.412 80.6C173.478 79.1333 172.745 77.0667 172.212 74.4C171.812 72.6667 171.412 71.4 171.012 70.6C170.612 69.8 169.878 69.4 168.812 69.4C166.012 69.4 163.612 70 161.612 71.2C159.745 72.2667 157.278 74.2 154.212 77L138.212 153H109.412L130.612 53Z" stroke="black" stroke-width="2" mask="url(#path-1-outside-1)"/>
            <path d="M221.407 153.8C211.54 153.8 203.74 151.267 198.007 146.2C192.274 141.133 189.407 133.133 189.407 122.2C189.407 113.133 191.274 103.067 195.007 92C198.74 80.9333 204.74 71.4 213.007 63.4C221.274 55.2667 231.674 51.2 244.207 51.2C261.274 51.2 269.807 61.8667 269.807 83.2V83.4C270.207 83.5333 270.94 83.6 272.007 83.6C276.407 83.6 281.474 82.4667 287.207 80.2C292.94 77.8 298.14 74.9333 302.807 71.6L304.607 77C300.74 81.1333 295.674 84.6667 289.407 87.6C283.274 90.4 276.54 92.4 269.207 93.6C268.14 105.733 265.407 116.333 261.007 125.4C256.607 134.467 250.94 141.467 244.007 146.4C237.074 151.333 229.54 153.8 221.407 153.8ZM229.407 135.8C232.607 135.8 235.807 134 239.007 130.4C242.207 126.667 245.007 121.667 247.407 115.4C249.807 109 251.54 101.933 252.607 94.2C249.007 93.4 247.207 90.6 247.207 85.8C247.207 80.3333 249.274 76.7334 253.407 75C253.14 70.6 252.474 67.6 251.407 66C250.34 64.2667 248.474 63.4 245.807 63.4C241.407 63.4 237.14 66.6 233.007 73C228.874 79.4 225.54 87.0667 223.007 96C220.474 104.933 219.207 112.8 219.207 119.6C219.207 126 219.94 130.333 221.407 132.6C222.874 134.733 225.54 135.8 229.407 135.8Z" stroke="black" stroke-width="2" mask="url(#path-1-outside-1)"/>
            <path d="M304.098 154.2C296.498 154.2 290.164 151.6 285.098 146.4C280.031 141.2 277.498 133.067 277.498 122C277.498 112.133 279.431 101.8 283.298 91C287.298 80.0667 293.164 70.8667 300.898 63.4C308.764 55.8 318.098 52 328.898 52C334.364 52 338.431 52.9333 341.098 54.8C343.764 56.6667 345.098 59.1333 345.098 62.2V63L354.898 17L384.498 13L361.498 121C360.964 123 360.698 125.133 360.698 127.4C360.698 130.067 361.298 132 362.498 133.2C363.831 134.267 365.964 134.8 368.898 134.8C372.631 134.8 375.831 133.2 378.498 130C381.298 126.8 383.498 122.533 385.098 117.2H393.498C385.364 141.067 371.964 153 353.298 153C347.831 153 343.364 151.533 339.898 148.6C336.564 145.667 334.498 141.4 333.698 135.8C330.231 141.133 326.031 145.533 321.098 149C316.298 152.467 310.631 154.2 304.098 154.2ZM317.098 134.8C320.298 134.8 323.498 133.333 326.698 130.4C330.031 127.467 332.298 123.4 333.498 118.2V117.2L343.298 71.4C342.098 66.7333 339.364 64.4 335.098 64.4C329.764 64.4 324.964 67.5333 320.698 73.8C316.431 79.9333 313.098 87.4 310.698 96.2C308.298 104.867 307.098 112.533 307.098 119.2C307.098 125.867 308.031 130.133 309.898 132C311.898 133.867 314.298 134.8 317.098 134.8Z" stroke="black" stroke-width="2" mask="url(#path-1-outside-1)"/>
            <path d="M404.976 154.2C398.576 154.2 393.376 152.2 389.376 148.2C385.509 144.2 383.576 138.2 383.576 130.2C383.576 126.867 384.109 122.533 385.176 117.2L398.776 53H427.576L413.176 121C412.776 123 412.576 124.867 412.576 126.6C412.576 132.067 414.576 134.8 418.576 134.8C422.309 134.8 425.509 133.267 428.176 130.2C430.842 127 432.976 122.667 434.576 117.2L448.176 53H476.976L462.576 121C462.042 123 461.776 125.133 461.776 127.4C461.776 130.067 462.376 132 463.576 133.2C464.909 134.267 467.042 134.8 469.976 134.8C473.709 134.8 476.909 133.2 479.576 130C482.376 126.8 484.576 122.533 486.176 117.2H494.576C489.642 131.6 483.509 141.4 476.176 146.6C468.976 151.667 461.709 154.2 454.376 154.2C448.642 154.2 444.042 152.6 440.576 149.4C437.242 146.2 435.242 141.467 434.576 135.2C430.042 142.533 425.242 147.533 420.176 150.2C415.242 152.867 410.176 154.2 404.976 154.2Z" stroke="black" stroke-width="2" mask="url(#path-1-outside-1)"/>
            <path d="M561.352 154.2C553.086 154.2 546.819 152.267 542.552 148.4C538.286 144.4 536.152 138.733 536.152 131.4C536.152 128.2 536.552 124.733 537.352 121L538.952 113.2C539.486 110.933 539.752 108.467 539.752 105.8C539.752 99.4 537.352 96.2 532.552 96.2C530.419 96.2 528.152 96.8 525.752 98C523.486 99.2 520.819 101.067 517.752 103.6L507.352 153H478.552L507.552 17L537.152 13L522.152 83.4L560.752 53H580.552L540.552 80.8C542.552 80.2667 544.752 80 547.152 80C554.352 80 559.819 82.2 563.552 86.6C567.286 91 569.152 96.6 569.152 103.4C569.152 106.2 568.886 108.733 568.352 111L566.152 121C565.486 123.4 565.152 125.533 565.152 127.4C565.152 132.333 567.752 134.8 572.952 134.8C576.952 134.8 580.152 133.4 582.552 130.6C584.952 127.667 587.352 123.2 589.752 117.2H598.152C589.886 141.867 577.619 154.2 561.352 154.2Z" stroke="black" stroke-width="2" mask="url(#path-1-outside-1)"/>
            <path d="M609.468 154.2C603.068 154.2 597.868 152.2 593.868 148.2C590.001 144.2 588.068 138.2 588.068 130.2C588.068 126.867 588.601 122.533 589.668 117.2L601.668 61H595.068L596.668 53H603.268L609.268 25.4L638.868 21.4L632.068 53H644.068L642.468 61H630.468L617.668 121C617.135 123 616.868 125.133 616.868 127.4C616.868 130.067 617.468 132 618.668 133.2C620.001 134.267 622.135 134.8 625.068 134.8C628.935 134.8 632.535 133.2 635.868 130C639.201 126.667 641.601 122.4 643.068 117.2H651.468C646.535 131.6 640.201 141.4 632.468 146.6C624.735 151.667 617.068 154.2 609.468 154.2Z" stroke="black" stroke-width="2" mask="url(#path-1-outside-1)"/>
            <path d="M676.388 42.2C671.988 42.2 668.255 40.6667 665.188 37.6C662.122 34.5333 660.588 30.8 660.588 26.4C660.588 22 662.122 18.2667 665.188 15.2C668.255 12 671.988 10.4 676.388 10.4C680.788 10.4 684.522 12 687.588 15.2C690.788 18.2667 692.388 22 692.388 26.4C692.388 30.8 690.788 34.5333 687.588 37.6C684.522 40.6667 680.788 42.2 676.388 42.2ZM662.788 154.2C656.388 154.2 651.188 152.2 647.188 148.2C643.322 144.2 641.388 138.2 641.388 130.2C641.388 126.867 641.922 122.533 642.988 117.2L656.588 53H685.388L670.988 121C670.455 123 670.188 125.133 670.188 127.4C670.188 130.067 670.788 132 671.988 133.2C673.322 134.267 675.455 134.8 678.388 134.8C682.255 134.8 685.855 133.2 689.188 130C692.522 126.667 694.922 122.4 696.388 117.2H704.788C699.855 131.6 693.522 141.4 685.788 146.6C678.055 151.667 670.388 154.2 662.788 154.2Z" stroke="black" stroke-width="2" mask="url(#path-1-outside-1)"/>
            <path d="M722.909 154.2C713.842 154.2 706.909 152 702.109 147.6C697.309 143.067 694.909 136.733 694.909 128.6C694.909 124.6 695.375 120.8 696.309 117.2L717.709 17L747.309 13L737.709 58C741.442 55.7333 744.509 54.2667 746.909 53.6C749.309 52.8 751.709 52.4 754.109 52.4C769.842 52.4 777.709 63.8 777.709 86.6C777.709 95.8 775.909 105.667 772.309 116.2C768.842 126.6 762.975 135.533 754.709 143C746.575 150.467 735.975 154.2 722.909 154.2ZM734.109 134.8C738.242 134.8 742.109 132.267 745.709 127.2C749.309 122 752.175 115.6 754.309 108C756.442 100.267 757.509 92.8667 757.509 85.8C757.509 80.4667 756.575 75.9333 754.709 72.2C752.842 68.4667 750.242 66.6 746.909 66.6C744.909 66.6 742.642 66.9333 740.109 67.6C737.709 68.1333 736.042 69 735.109 70.2L724.109 121C723.709 122.6 723.509 124.133 723.509 125.6C723.509 131.733 727.042 134.8 734.109 134.8Z" stroke="black" stroke-width="2" mask="url(#path-1-outside-1)"/>
            <path d="M814.376 153.8C804.509 153.8 796.709 151.267 790.976 146.2C785.242 141.133 782.376 133.133 782.376 122.2C782.376 113 784.176 102.933 787.776 92C791.376 80.9333 797.242 71.4 805.376 63.4C813.509 55.2667 823.909 51.2 836.576 51.2C852.309 51.2 860.776 60.2 861.976 78.2C864.909 77.5333 867.509 75.9333 869.776 73.4C872.042 70.7333 874.176 67.7333 876.176 64.4H882.576C878.976 71.6 875.776 77.2667 872.976 81.4C870.176 85.4 866.509 88.6667 861.976 91.2C861.176 103.733 858.576 114.733 854.176 124.2C849.909 133.667 844.309 141 837.376 146.2C830.442 151.267 822.776 153.8 814.376 153.8ZM822.376 135.8C827.309 135.8 831.909 131.8 836.176 123.8C840.442 115.8 843.376 105.933 844.976 94.2C841.776 93 840.176 90 840.176 85.2C840.176 80 842.042 76.5333 845.776 74.8C845.509 70.5333 844.776 67.6 843.576 66C842.509 64.2667 840.709 63.4 838.176 63.4C833.776 63.4 829.576 66.6 825.576 73C821.576 79.2667 818.309 86.9333 815.776 96C813.376 104.933 812.176 112.8 812.176 119.6C812.176 126 812.909 130.333 814.376 132.6C815.842 134.733 818.509 135.8 822.376 135.8Z" stroke="black" stroke-width="2" mask="url(#path-1-outside-1)"/>
            <path class="subtitle" d="M258.392 199.05C258.392 200.05 258.508 201.1 258.742 202.2C258.975 203.267 259.392 204.267 259.992 205.2C260.625 206.133 261.475 206.933 262.542 207.6C263.642 208.267 264.992 208.6 266.592 208.6C268.192 208.6 269.592 208.233 270.792 207.5C272.025 206.733 273.025 205.633 273.792 204.2C274.558 202.767 274.942 201.05 274.942 199.05C274.942 197.083 274.558 195.383 273.792 193.95C273.025 192.517 272.025 191.433 270.792 190.7C269.592 189.933 268.192 189.55 266.592 189.55C265.658 189.55 264.692 189.717 263.692 190.05C262.725 190.35 261.842 190.9 261.042 191.7C260.275 192.467 259.642 193.467 259.142 194.7C258.642 195.933 258.392 197.383 258.392 199.05ZM274.892 189.7V185.15H280.592V213H274.892V208.35C273.925 209.983 272.642 211.25 271.042 212.15C269.442 213.05 267.642 213.5 265.642 213.5C263.708 213.5 261.925 213.167 260.292 212.5C258.658 211.8 257.258 210.817 256.092 209.55C254.925 208.25 254.025 206.717 253.392 204.95C252.758 203.15 252.442 201.2 252.442 199.1C252.442 197 252.742 195.067 253.342 193.3C253.975 191.5 254.875 189.967 256.042 188.7C257.208 187.4 258.608 186.4 260.242 185.7C261.908 185 263.725 184.65 265.692 184.65C267.692 184.65 269.492 185.1 271.092 186C272.692 186.867 273.958 188.1 274.892 189.7Z" stroke="black" stroke-width="1" mask="url(#path-1-outside-1)"/>
            <path class="subtitle" d="M300.401 205.85V189.75H296.901V185.15H300.401V178.3H306.101V185.15H312.951V189.75H306.101V205.15C306.101 206.317 306.351 207.167 306.851 207.7C307.351 208.233 308.167 208.5 309.301 208.5C309.867 208.5 310.501 208.417 311.201 208.25C311.901 208.083 312.501 207.867 313.001 207.6V212.4C311.567 213.133 309.901 213.5 308.001 213.5C305.501 213.5 303.601 212.867 302.301 211.6C301.034 210.3 300.401 208.383 300.401 205.85Z" stroke="black" stroke-width="1" mask="url(#path-1-outside-1)"/>
            <path class="subtitle" d="M331.056 184.65C333.056 184.65 334.923 185 336.656 185.7C338.423 186.4 339.94 187.4 341.206 188.7C342.506 189.967 343.506 191.5 344.206 193.3C344.94 195.067 345.306 196.983 345.306 199.05C345.306 201.117 344.94 203.05 344.206 204.85C343.473 206.617 342.44 208.15 341.106 209.45C339.773 210.75 338.223 211.75 336.456 212.45C334.69 213.15 332.806 213.5 330.806 213.5C328.806 213.5 326.923 213.15 325.156 212.45C323.39 211.75 321.84 210.75 320.506 209.45C319.206 208.15 318.19 206.617 317.456 204.85C316.756 203.05 316.406 201.117 316.406 199.05C316.406 196.983 316.773 195.067 317.506 193.3C318.273 191.5 319.323 189.967 320.656 188.7C321.99 187.4 323.556 186.4 325.356 185.7C327.156 185 329.056 184.65 331.056 184.65ZM330.956 189.65C329.523 189.65 328.106 190.017 326.706 190.75C325.34 191.483 324.273 192.617 323.506 194.15C322.74 195.65 322.356 197.283 322.356 199.05C322.356 200.117 322.506 201.217 322.806 202.35C323.106 203.45 323.59 204.45 324.256 205.35C324.956 206.25 325.856 207 326.956 207.6C328.056 208.2 329.34 208.5 330.806 208.5C332.54 208.5 334.056 208.067 335.356 207.2C336.656 206.333 337.64 205.217 338.306 203.85C339.006 202.483 339.356 200.9 339.356 199.1C339.356 198.033 339.206 196.95 338.906 195.85C338.64 194.717 338.156 193.7 337.456 192.8C336.756 191.9 335.856 191.15 334.756 190.55C333.69 189.95 332.423 189.65 330.956 189.65Z" stroke="black" stroke-width="1" mask="url(#path-1-outside-1)"/>
            <path class="subtitle" d="M349.603 202.15V197.35H366.153V202.15H349.603Z" stroke="black" stroke-width="1" mask="url(#path-1-outside-1)"/>
            <path class="subtitle" d="M376.409 199.05C376.409 200.05 376.526 201.1 376.759 202.2C376.993 203.267 377.409 204.267 378.009 205.2C378.643 206.133 379.493 206.933 380.559 207.6C381.659 208.267 383.009 208.6 384.609 208.6C386.209 208.6 387.609 208.233 388.809 207.5C390.043 206.733 391.043 205.633 391.809 204.2C392.576 202.767 392.959 201.05 392.959 199.05C392.959 197.083 392.576 195.383 391.809 193.95C391.043 192.517 390.043 191.433 388.809 190.7C387.609 189.933 386.209 189.55 384.609 189.55C383.676 189.55 382.709 189.717 381.709 190.05C380.743 190.35 379.859 190.9 379.059 191.7C378.293 192.467 377.659 193.467 377.159 194.7C376.659 195.933 376.409 197.383 376.409 199.05ZM392.909 189.7V174.85H398.609V213H392.909V208.35C391.943 209.983 390.659 211.25 389.059 212.15C387.459 213.05 385.659 213.5 383.659 213.5C381.726 213.5 379.943 213.167 378.309 212.5C376.676 211.8 375.276 210.817 374.109 209.55C372.943 208.25 372.043 206.717 371.409 204.95C370.776 203.15 370.459 201.2 370.459 199.1C370.459 197 370.759 195.067 371.359 193.3C371.993 191.5 372.893 189.967 374.059 188.7C375.226 187.4 376.626 186.4 378.259 185.7C379.926 185 381.743 184.65 383.709 184.65C385.709 184.65 387.509 185.1 389.109 186C390.709 186.867 391.976 188.1 392.909 189.7Z" stroke="black" stroke-width="1" mask="url(#path-1-outside-1)"/>
            <path class="subtitle" d="M419.631 184.65C421.631 184.65 423.497 185 425.231 185.7C426.997 186.4 428.514 187.4 429.781 188.7C431.081 189.967 432.081 191.5 432.781 193.3C433.514 195.067 433.881 196.983 433.881 199.05C433.881 201.117 433.514 203.05 432.781 204.85C432.047 206.617 431.014 208.15 429.681 209.45C428.347 210.75 426.797 211.75 425.031 212.45C423.264 213.15 421.381 213.5 419.381 213.5C417.381 213.5 415.497 213.15 413.731 212.45C411.964 211.75 410.414 210.75 409.081 209.45C407.781 208.15 406.764 206.617 406.031 204.85C405.331 203.05 404.981 201.117 404.981 199.05C404.981 196.983 405.347 195.067 406.081 193.3C406.847 191.5 407.897 189.967 409.231 188.7C410.564 187.4 412.131 186.4 413.931 185.7C415.731 185 417.631 184.65 419.631 184.65ZM419.531 189.65C418.097 189.65 416.681 190.017 415.281 190.75C413.914 191.483 412.847 192.617 412.081 194.15C411.314 195.65 410.931 197.283 410.931 199.05C410.931 200.117 411.081 201.217 411.381 202.35C411.681 203.45 412.164 204.45 412.831 205.35C413.531 206.25 414.431 207 415.531 207.6C416.631 208.2 417.914 208.5 419.381 208.5C421.114 208.5 422.631 208.067 423.931 207.2C425.231 206.333 426.214 205.217 426.881 203.85C427.581 202.483 427.931 200.9 427.931 199.1C427.931 198.033 427.781 196.95 427.481 195.85C427.214 194.717 426.731 193.7 426.031 192.8C425.331 191.9 424.431 191.15 423.331 190.55C422.264 189.95 420.997 189.65 419.531 189.65Z" stroke="black" stroke-width="1" mask="url(#path-1-outside-1)"/>
            <path class="subtitle" d="M451.164 213V174.85H456.914V213H451.164Z" stroke="black" stroke-width="1" mask="url(#path-1-outside-1)"/>
            <path class="subtitle" d="M465.031 213V185.15H470.731V213H465.031ZM467.931 182C466.931 182 466.065 181.65 465.331 180.95C464.631 180.217 464.281 179.35 464.281 178.35C464.281 177.35 464.631 176.5 465.331 175.8C466.065 175.067 466.931 174.7 467.931 174.7C468.931 174.7 469.781 175.067 470.481 175.8C471.181 176.5 471.531 177.35 471.531 178.35C471.531 179.35 471.181 180.217 470.481 180.95C469.781 181.65 468.931 182 467.931 182Z" stroke="black" stroke-width="1" mask="url(#path-1-outside-1)"/>
            <path class="subtitle" d="M483.25 192.45C483.25 192.983 483.4 193.483 483.7 193.95C484 194.417 484.516 194.833 485.25 195.2C485.983 195.567 487.666 196.05 490.3 196.65C492.966 197.25 494.833 197.9 495.9 198.6C496.966 199.3 497.716 200.017 498.15 200.75C498.616 201.483 498.916 202.217 499.05 202.95C499.216 203.65 499.3 204.317 499.3 204.95C499.3 207.517 498.333 209.583 496.4 211.15C494.466 212.717 491.883 213.5 488.65 213.5C485.316 213.5 482.566 212.633 480.4 210.9C478.266 209.133 477.083 206.683 476.85 203.55H482.6C482.766 205.217 483.366 206.517 484.4 207.45C485.466 208.383 486.916 208.85 488.75 208.85C490.183 208.85 491.35 208.55 492.25 207.95C493.15 207.317 493.6 206.5 493.6 205.5C493.6 205.1 493.516 204.683 493.35 204.25C493.216 203.783 492.95 203.367 492.55 203C492.15 202.633 491.616 202.3 490.95 202C490.283 201.7 488.583 201.217 485.85 200.55C483.15 199.883 481.3 199.183 480.3 198.45C479.333 197.717 478.633 196.9 478.2 196C477.766 195.1 477.55 194.017 477.55 192.75C477.55 191.683 477.766 190.667 478.2 189.7C478.666 188.7 479.316 187.833 480.15 187.1C481.016 186.333 482.083 185.733 483.35 185.3C484.65 184.867 486.083 184.65 487.65 184.65C490.75 184.65 493.283 185.517 495.25 187.25C497.25 188.95 498.383 191.4 498.65 194.6H493.05C492.916 193.433 492.55 192.417 491.95 191.55C491.35 190.683 490.65 190.1 489.85 189.8C489.05 189.467 488.3 189.3 487.6 189.3C486.233 189.3 485.166 189.6 484.4 190.2C483.633 190.767 483.25 191.517 483.25 192.45Z" stroke="black" stroke-width="1" mask="url(#path-1-outside-1)"/>
            <path class="subtitle" d="M506.162 205.85V189.75H502.662V185.15H506.162V178.3H511.862V185.15H518.712V189.75H511.862V205.15C511.862 206.317 512.112 207.167 512.612 207.7C513.112 208.233 513.929 208.5 515.062 208.5C515.629 208.5 516.262 208.417 516.962 208.25C517.662 208.083 518.262 207.867 518.762 207.6V212.4C517.329 213.133 515.662 213.5 513.762 213.5C511.262 213.5 509.362 212.867 508.062 211.6C506.796 210.3 506.162 208.383 506.162 205.85Z" stroke="black" stroke-width="1" mask="url(#path-1-outside-1)"/>
            <path class="subtitle" d="M539.544 199.05C539.544 200.05 539.661 201.1 539.894 202.2C540.127 203.267 540.544 204.267 541.144 205.2C541.777 206.133 542.627 206.933 543.694 207.6C544.794 208.267 546.144 208.6 547.744 208.6C549.344 208.6 550.744 208.233 551.944 207.5C553.177 206.733 554.177 205.633 554.944 204.2C555.711 202.767 556.094 201.05 556.094 199.05C556.094 197.083 555.711 195.383 554.944 193.95C554.177 192.517 553.177 191.433 551.944 190.7C550.744 189.933 549.344 189.55 547.744 189.55C546.811 189.55 545.844 189.717 544.844 190.05C543.877 190.35 542.994 190.9 542.194 191.7C541.427 192.467 540.794 193.467 540.294 194.7C539.794 195.933 539.544 197.383 539.544 199.05ZM556.044 189.7V185.15H561.744V213H556.044V208.35C555.077 209.983 553.794 211.25 552.194 212.15C550.594 213.05 548.794 213.5 546.794 213.5C544.861 213.5 543.077 213.167 541.444 212.5C539.811 211.8 538.411 210.817 537.244 209.55C536.077 208.25 535.177 206.717 534.544 204.95C533.911 203.15 533.594 201.2 533.594 199.1C533.594 197 533.894 195.067 534.494 193.3C535.127 191.5 536.027 189.967 537.194 188.7C538.361 187.4 539.761 186.4 541.394 185.7C543.061 185 544.877 184.65 546.844 184.65C548.844 184.65 550.644 185.1 552.244 186C553.844 186.867 555.111 188.1 556.044 189.7Z" stroke="black" stroke-width="1" mask="url(#path-1-outside-1)"/>
            <path class="subtitle" d="M592.065 199.1C592.065 198.1 591.949 197.067 591.715 196C591.482 194.9 591.049 193.883 590.415 192.95C589.815 192.017 588.965 191.217 587.865 190.55C586.799 189.883 585.465 189.55 583.865 189.55C582.932 189.55 581.965 189.717 580.965 190.05C579.999 190.383 579.115 190.95 578.315 191.75C577.515 192.517 576.849 193.517 576.315 194.75C575.815 195.983 575.565 197.433 575.565 199.1C575.565 200.033 575.682 201.033 575.915 202.1C576.182 203.167 576.632 204.183 577.265 205.15C577.899 206.117 578.765 206.933 579.865 207.6C580.965 208.267 582.299 208.6 583.865 208.6C584.799 208.6 585.749 208.45 586.715 208.15C587.715 207.817 588.599 207.267 589.365 206.5C590.165 205.7 590.815 204.683 591.315 203.45C591.815 202.217 592.065 200.767 592.065 199.1ZM575.565 208.45V224.25H569.865V185.15H575.565V189.8C576.532 188.167 577.815 186.9 579.415 186C581.015 185.1 582.815 184.65 584.815 184.65C586.749 184.65 588.532 185 590.165 185.7C591.799 186.367 593.199 187.35 594.365 188.65C595.532 189.917 596.432 191.45 597.065 193.25C597.699 195.017 598.015 196.95 598.015 199.05C598.015 201.15 597.699 203.1 597.065 204.9C596.465 206.667 595.582 208.2 594.415 209.5C593.249 210.767 591.832 211.75 590.165 212.45C588.532 213.15 586.732 213.5 584.765 213.5C582.765 213.5 580.965 213.067 579.365 212.2C577.799 211.3 576.532 210.05 575.565 208.45Z" stroke="black" stroke-width="1" mask="url(#path-1-outside-1)"/>
            <path class="subtitle" d="M626.587 199.1C626.587 198.1 626.47 197.067 626.237 196C626.004 194.9 625.57 193.883 624.937 192.95C624.337 192.017 623.487 191.217 622.387 190.55C621.32 189.883 619.987 189.55 618.387 189.55C617.454 189.55 616.487 189.717 615.487 190.05C614.52 190.383 613.637 190.95 612.837 191.75C612.037 192.517 611.37 193.517 610.837 194.75C610.337 195.983 610.087 197.433 610.087 199.1C610.087 200.033 610.204 201.033 610.437 202.1C610.704 203.167 611.154 204.183 611.787 205.15C612.42 206.117 613.287 206.933 614.387 207.6C615.487 208.267 616.82 208.6 618.387 208.6C619.32 208.6 620.27 208.45 621.237 208.15C622.237 207.817 623.12 207.267 623.887 206.5C624.687 205.7 625.337 204.683 625.837 203.45C626.337 202.217 626.587 200.767 626.587 199.1ZM610.087 208.45V224.25H604.387V185.15H610.087V189.8C611.054 188.167 612.337 186.9 613.937 186C615.537 185.1 617.337 184.65 619.337 184.65C621.27 184.65 623.054 185 624.687 185.7C626.32 186.367 627.72 187.35 628.887 188.65C630.054 189.917 630.954 191.45 631.587 193.25C632.22 195.017 632.537 196.95 632.537 199.05C632.537 201.15 632.22 203.1 631.587 204.9C630.987 206.667 630.104 208.2 628.937 209.5C627.77 210.767 626.354 211.75 624.687 212.45C623.054 213.15 621.254 213.5 619.287 213.5C617.287 213.5 615.487 213.067 613.887 212.2C612.32 211.3 611.054 210.05 610.087 208.45Z" stroke="black" stroke-width="1" mask="url(#path-1-outside-1)"/>
        </svg>
    </div>

    <!-- <div class="editTaskField">
        <input type="text" class="editTaskInputField">
        
    </div> -->

    <div class=mainPageWrapper>

        <div class="mainPageFiller1"></div>

        <div class="mainContentWrapper">
            <div class="contentFiller"></div>
            <div class="contentWrapper">
                <div class="picMottoContainer">
                    <div class="pPicture">

                        <div class="profilePicWrap2" id="profilePicWrap" style="background-image: url(<?php echo $_SESSION['user']['profilePic']?>);"></div>
                    </div>
                    <div class="motto">
                        <p id="mottohide" style="display:none"><?php echo $_SESSION['user']['motto']?></p>
                        <h1 class="mottoWords" id="mottoWords"></h1>
                        <h1 class="mottoTyper">|</h1>
                        <svg  class="speechBubble" id="speechBubble" width="1962" height="500" viewBox="0 -10 1962 500" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M11.1127 341.982L11.1152 341.983L11.1507 341.996L11.2521 342.034C11.34 342.067 11.4684 342.114 11.6356 342.175C11.97 342.297 12.4596 342.472 13.0909 342.69C14.3533 343.127 16.1836 343.737 18.4739 344.435C23.0518 345.831 29.4818 347.587 36.8986 349.026C50.6734 351.7 68.1655 353.349 83.5424 349.32C85.3029 418.202 141.694 473.5 211 473.5H1831.5C1901.92 473.5 1959 416.416 1959 346V130C1959 59.5837 1901.92 2.5 1831.5 2.5L211 2.5C140.584 2.5 83.5 59.5837 83.5 130V259.681C78.0024 280.646 60.1249 300.011 43.1799 314.323C34.7203 321.468 26.6014 327.265 20.5964 331.275C17.5955 333.279 15.1266 334.835 13.4122 335.886C12.5551 336.412 11.8868 336.812 11.4354 337.079C11.2096 337.212 11.0381 337.313 10.9243 337.379C10.8674 337.412 10.8249 337.436 10.7973 337.452L10.767 337.47L10.7592 337.474L6.16516 340.1L11.1112 341.981" stroke="black" stroke-width="10"/>
                        </svg>
                    </div>
                </div>
                <div class="fillerContent"></div>
                <div class="menuBar">
                    <div class="userMenu"><a href="mainPage.php" id="userLink"><?php echo $_SESSION['user']['nickName']?>'s Desk</a></div>
                    <div class="profileMenu"><a id="profileLink">Your Profile</a></div>
                    <div class="calendarMenu"><a id="calendarLink">Calendar</a></div>
                    <div class="motivationsMenu"><a href="motivationsPage.php" id="motivationsLink">Motivations</a></div>
                    <div class="achievementsMenu"><a href="achievementsPage.php" id="achievementsLink">Achievements</a></div>
                    <div class="themesMenu"><a id="themesLink">Themes</a></div>
                </div>
                <div class="navTasks">
                    <div class="navBar">
                        <div class="note">
                            </br>
                            <h2>filter tasks</h2><hr></br>
                            <a id="allFilter" href="mainPage.php">1.) All</a></br>
                            <a href="mainPage.php?status_id=4">2.) Important</a></br>
                            <a href="mainPage.php?status_id=5">3.) Favorites</a></br>
                        </div></br>

                        <div class="note2 note">
                            </br>
                            <h2>filter task status</h2><hr></br>
                            <a href="mainPage.php?status_id=1">1.) Done</a></br>
                            <a href="mainPage.php?status_id=2">2.) Pending</a></br>
                        </div>

                    </div>
                    <div class="tasks">
                        <div class="tasksFiller"></div>
                        <div class="ringBind"></div>
                        <div class="pad">
                            <div class="dateWrapper">
                                <!-- <button type="button" class="previousDate" id="previousDate"><i class="fas fa-chevron-circle-left"></i></button> -->
                                <div class="dateToday" id="dateToday"></div>
                                <!-- <button type="button" class="nextDate" id="nextDate"><i class="fas fa-chevron-circle-right"></i></button> -->
                            </div>
                            <button type="button" class="addButton" id="addButton"><i class="fas fa-plus-circle"></i></button>
                            <input type="text" id="addTaskInput" class="inputField2" placeholder="add a task..."><br><br>
                            
                            <?php

                            // $tasks = mysqli_query($conn, $tasks_query);


                            // $user_id =  $_SESSION['user']['id'];
                            // $tasks_query = "SELECT * FROM tasks WHERE user_id = $user_id";

                            if(isset($_GET['status_id'])){

                                $user_id =  $_SESSION['user']['id'];
                                $tasks_query = "SELECT * FROM tasks WHERE user_id = $user_id";

                                $statusId = $_GET['status_id'];
                                $tasks_query .= "&& status_id = $statusId";
        
                            }

                            else {

                                $user_id =  $_SESSION['user']['id'];
                            $tasks_query = "SELECT * FROM tasks WHERE user_id = $user_id";

                            }

                            $tasks = mysqli_query($conn, $tasks_query);

                            // var_dump($tasks);
                            // die();
                            foreach($tasks as $indivTask){
                            
                            ?>

                            <form action="controllers/process_update_task.php" method="POST" id="tasksForm">
                            <div class="taskTest" id="taskTest"  <?php
                                
                                if($indivTask['status_id'] === "1"){
                                    ?>  
                                    style="background-color:rgba(80, 185, 70, 0.5);box-shadow:0px 0px 10px 10px rgba(80, 185, 70, 0.3);"
                                    <?php
                                }
                                else if($indivTask['status_id'] === "4"){
                                    ?>  
                                    style="background-color:rgba(247, 44, 44, 0.5);box-shadow:0px 0px 10px 10px rgba(247, 44, 44, 0.5)"
                                    <?php
                                }
                                else if($indivTask['status_id'] === "5"){
                                    ?>  
                                    style="background-color:rgba(218, 183, 28, 0.5);box-shadow:0px 0px 10px 10px rgba(218, 183, 28, 0.5)"
                                    <?php
                                }
                                ?>>

                                <button class="editTask" type="submit"><i class="fa fa-pencil" aria-hidden="true"></i></button>
                                <input name="taskuser_id" id="taskuser_id" type="hidden" value="<?php echo $indivTask['id'];?>">
                                
                                <a href="controllers/process_favorite_task.php?task_id=<?php echo $indivTask['id'];?>" class="favoriteTask" type="submit"><i class="fa fa-star-o" aria-hidden="true"></i></a>
                                <a href="controllers/process_important_task.php?task_id=<?php echo $indivTask['id'];?>" class="importantTask" type="submit"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i></a>
                                <input name="task"class="task" id="taskFieldInput" value="<?php echo $indivTask['name']?>"></i></h3>

                                <div id="taskButtonWrapper">    
                                    <a href="controllers/process_done_task.php?task_id=<?php echo $indivTask['id'];?>" type="button" class="finishedTask"><i class="far fa-check-circle"></i></a>
                                    <a href="controllers/process_delete_task.php?task_id=<?php echo $indivTask['id'];?>" type="button" class="deleteTask"><i class="far fa-times-circle"></i></a>
                                </div>
                            </div>
                            </form>

                            <?php
                            }
                            ?>
                          

        
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="mainPageFiller2"></div>

    </div>

 

</body>
</html>
