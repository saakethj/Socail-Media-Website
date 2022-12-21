<?php
session_start();
if(isset($_POST['login']))
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Settings</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="image/x-icon" href="../images/icons/icon.ico" />
  <link rel="stylesheet" href="../css/main.css">
  <link rel="stylesheet" href="../css/homepage.css">
  <link rel="stylesheet" href="../css/setting.css" />
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
    integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
    crossorigin="anonymous" />
</head>

<body>
  <div class="sidebar">
    <!-- <i class="fab fa-twitter"></i> -->
    <div class="sidebarOption">
      <img src="../images/logo.png" alt="sdsa" class="logo" height="30px" style="padding-left: 20px;">
    </div>

    <a href="homepage.php" class="links">
      <div class="sidebarOption active">
        <span class="material-icons"> home </span>
        <h2>Home</h2>
      </div>
    </a>

    <a href="explore.php" class="links">
      <div class="sidebarOption">
        <span class="material-icons"> search </span>
        <h2>Seek</h2>
      </div>
    </a>

    <a href="notifications.php" class="links">
      <div class="sidebarOption">
        <span class="material-icons"> notifications_none </span>
        <h2>Notifications</h2>
      </div>
    </a>

    <a href="chats.php" class="links">
      <div class="sidebarOption">
        <span class="material-icons"> mail_outline </span>
        <h2>Chats</h2>
      </div>
    </a>

    <a href="setting.php" class="links">
      <div class="sidebarOption">
        <span class="material-symbols-outlined material-icons">settings</span>
        <h2>Settings</h2>
      </div>
    </a>

    <a href="account.php" class="links">
      <div class="sidebarOption">
        <span class="material-icons"> perm_identity </span>
        <h2>Account</h2>
      </div>
    </a>

    <button class="sidebar__tweet">Post</button>

    <button class="sidebar__tweet" id="kill">Logout</button>
  </div>

  <!-- Settings start -->

  <div class="settingsblock">
    <div class="changepassword">
      <div class="modal-body">
        <!-- <p style="color:red;"><?php echo $_SESSION['msg1'];?><?php echo $_SESSION['msg1']="";?></p> -->
        <h4>Change the password</h4>
        <div class="signupFrm">
          <form name="chngpwd" action="changepassword.php" method="post" onSubmit="return valid();">
            <div class="inputContainer">
              <input type="password" class="input" placeholder="a" name="currentpassword" id="currentpassword" />
              <label for="" class="label">Old Password</label>
            </div>
            <div class="inputContainer">
              <input type="password" class="input" placeholder="a" name="newpassword" id="newpassword" />
              <label for="" class="label">New Password</label>
            </div>
            <div class="inputContainer">
              <input type="password" class="input" placeholder="a" name="confirmpassword" id="confirmpassword" />
              <label for="" class="label">Confirm Password</label>
            </div>
            <input type="submit" name="Submit" value="Change Password" />
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- Settings end -->
  <script src="../js/validate.js"></script>
</body>

</html>