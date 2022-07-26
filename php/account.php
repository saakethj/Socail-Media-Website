<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Profile</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../css/homepage.css">
        <link rel="stylesheet" href="../css/account.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
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
      
      <a href="saved.php" class="links">
      <div class="sidebarOption">
        <span class="material-icons"> bookmark_border </span>
        <h2>Saved</h2>
      </div>
      </a>

      <a href="account.php" class="links">
      <div class="sidebarOption">
        <span class="material-icons"> perm_identity </span>
        <h2>Account</h2>
      </div>
      </a>

      <button class="sidebar__tweet">Post</button>
    </div>
    <!-- sidebar ends -->

    <!-- feed starts -->
    <div class="feed">
      <div class="feed__header">
        <h2>Saaketh Jella</h2>
        <span style="font-size: 15px;">155 posts</span>
      </div>

      <!-- cover photo starts -->
      <div class="cover_photo">
      </div>

      <div class="dp">
        <img src="../images/dp/dp.jpg" alt="" height="134px">
        <div class="edit_profile">
        <a href="">Edit Profile</a>
        </div>
      </div>
      <div class="post__headerText profile_name">
        <h3>Saaketh Jella</h3>
        <span class="post__headerSpecial">@SaakethJ</span>
      </div>

      <div class="details">
        <b>Born :</b> Jul 21, 2001
        <b>Link: </b> <a href="saakethj.github.io/Portfolio/">saakethj.github.io/Portfolio/</a>
      </div>
      <br>
      <div style="border-bottom: 1px solid var(--twitter-background);">

      </div>
      <!-- cover photo ends -->

      <!-- post starts -->
      <div class="post">
        <div class="post__avatar">
          <img
            src="../images/feed dp/saaketh jella.jpg"
            alt=""
            height="100px"
          />
        </div>

        <div class="post__body">
          <div class="post__header">
            <div class="post__headerText">
              <h3>
                Jella Saaketh
                <span class="post__headerSpecial"
                  ><span class="material-icons post__badge"> verified </span>@saakethJ</span
                >
              </h3>
            </div>
            <div class="post__headerDescription">
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ut modi cumque fuga adipisci dolore ullam! Optio architecto deleniti laudantium est, quidem ipsam, aliquam earum aperiam delectus impedit natus consequuntur nobis?</p>
            </div>
          </div>
        </div>
      </div>
      <!-- post ends -->
    </div>
    
    <!-- feed ends -->

    <!-- widgets starts -->
    <div class="widgets">
      <div class="widgets__input">
        <span class="material-icons widgets__searchIcon"> search </span>
        <input type="text" placeholder="Search" />
      </div>

      <div class="widgets__widgetContainer">
        <h2>Trending</h2>
        <br>
        <p class="trending_heading">#House of the dragon</p>
        <p class="trending_content">House of the Dragon will start streaming from Aug 16 on Disney + hotstar</p>
        <br>
        <p class="trending_heading">#Wakanda Forever</p>
        <p class="trending_content">The first trailer for ‘BLACK PANTHER: WAKANDA FOREVER’ received 172 million views in its first 24 hours</p>
        <br>
        <p class="trending_heading">#IND VS WI</p>
        <p class="trending_content">IND vs WI: Kuldeep Yadav Leaves India To Join The T20I Squad In West Indies</p>
        <br>
        <p class="trending_heading">#BreakingBad</p>
      </div>

      <div class="widgets__widgetContainer">
        <h2>People you may know</h2>
        <br>
        <div class="follow_friends">
          <div class="friends_dp">
            <img src="../images/Friends profile/friend1.jpg" alt="jeaniedp" />
          </div>
          <div class="username_follow">
            <div class="post__headerText">
              <h3>Jeanie_bts</h3>
              <span class="post__headerSpecial">@Jsk_1011</span>
            </div>
            <div class="follow_button">
              <button class="follow">Follow</button>
            </div>
          </div>
        </div>

        <br>
        <div class="follow_friends">
          <div class="friends_dp">
            <img src="../images/Friends profile/friend2.jpg" alt="film" />
          </div>
          <div class="username_follow">
            <div class="post__headerText">
              <h3>cinesthetic</h3>
              <span class="post__headerSpecial">@TheCinesthetic</span>
            </div>
            <div class="follow_button">
              <button class="follow">Follow</button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- widgets ends -->
    </body>
</html>