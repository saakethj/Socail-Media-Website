<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Messages</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/x-icon" href="../images/icons/icon.ico" />
        <link rel="stylesheet" href="../css/homepage.css">
        <link rel="stylesheet" href="../css/chats.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
        <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
        crossorigin="anonymous"
        />
    </head>
    <body>
        <!-- sidebar starts -->
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
    <!-- sidebar ends -->

    <!-- feed starts -->
    <div class="feed">
      <div class="feed__header">
        <h2>Messages</h2>
      </div>
      <div class="widgets__input">
        <span class="material-icons widgets__searchIcon"> search </span>
        <input type="text" placeholder="Search" />
      </div>
      <div class="follow_friends">
        <div class="friends_dp">
          <img src="../images/chat/shafa.jpg" alt="jeaniedp" />
        </div>

        <div class="username_profile">
          <div class="username_profile_details">
            <div class="username">
              <h3>Shafahad Shaik</h3>
            </div>

            <div class="profile">
              <span>@Skshafahad09</span>
            </div>
          </div>
          <div class="message">
            <span>Shared a Tweet</span>
          </div>
        </div>
       </div>

       <div class="follow_friends">
        <div class="friends_dp">
          <img src="../images/chat/varun.jpg" alt="jeaniedp" />
        </div>

        <div class="username_profile">
          <div class="username_profile_details">
            <div class="username">
              <h3>Varun rao</h3>
            </div>

            <div class="profile">
              <span>@rao_26</span>
            </div>
          </div>
          <div class="message">
            <span>You shared a Tweet</span>
          </div>
        </div>
       </div>

       <div class="follow_friends">
        <div class="friends_dp">
          <img src="../images/chat/venu.jpg" alt="jeaniedp" />
        </div>

        <div class="username_profile">
          <div class="username_profile_details">
            <div class="username">
              <h3>Venu Gopal 17</h3>
            </div>

            <div class="profile">
              <span>@VenuGopal8351</span>
            </div>
          </div>
          <div class="message">
            <span>Venu Gopal 17 reacted with ❤️</span>
          </div>
        </div>
       </div>

       <div class="follow_friends">
        <div class="friends_dp">
          <img src="../images/chat/jen.jpg" alt="jeaniedp" />
        </div>

        <div class="username_profile">
          <div class="username_profile_details">
            <div class="username">
              <h3>jen.</h3>
            </div>

            <div class="profile">
              <span>@jenahahahahah</span>
            </div>
          </div>
          <div class="message">
            <span>🤣😊❤️❤️</span>
          </div>
        </div>
       </div>

       <div class="follow_friends">
        <div class="friends_dp">
          <img src="../images/chat/hp.jpg" alt="jeaniedp" />
        </div>

        <div class="username_profile">
          <div class="username_profile_details">
            <div class="username">
              <h3>Haripriya</h3>
            </div>

            <div class="profile">
              <span>@Haripri59424672</span>
            </div>
          </div>
          <div class="message">
            <span>Shared a Tweet</span>
          </div>
        </div>
       </div>

       <div class="follow_friends">
        <div class="friends_dp">
          <img src="../images/chat/vamshi.jpg" alt="jeaniedp" />
        </div>

        <div class="username_profile">
          <div class="username_profile_details">
            <div class="username">
              <h3>Vamshi Somarapu PSPK</h3>
            </div>

            <div class="profile">
              <span>@VamshiSomarapu2</span>
            </div>
          </div>
          <div class="message">
            <span>Shared a Tweet</span>
          </div>
        </div>
       </div>
    </div>
    
    <!-- feed ends -->

    <!-- widgets starts -->
    <div class="widgets">
      <div class="message_container">
        <div class="message_heading">
          <h4>Start a Message</h4>
        </div>

        <div class="message_description">
          <span>Choose from your existing conversations, start a new one, or just keep swimming.</span>
        </div>

        <div class="message_button">
          <button class="message"> New message</button>
        </div>
      </div>
    </div>
    <!-- widgets ends -->
    <script src="../js/app.js"></script>
    </body>
</html>