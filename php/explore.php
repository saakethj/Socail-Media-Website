<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Seek</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="image/x-icon" href="../images/icons/icon.ico" />
  <link rel="stylesheet" href="../css/homepage.css">
  <link rel="stylesheet" href="../css/explore.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
    integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
    crossorigin="anonymous" />
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

    <a href="explore" class="links">
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
      <h2>Explore</h2>
      <div class="widgets__input">
        <span class="material-icons widgets__searchIcon"> search </span>
        <input type="text" placeholder="Search" />
      </div>
    </div>
    <div class="first_news">
      <div class="first_news_info">
        <span style="color: white; font-size: x-small;">Entertainment</span>
        <p>Dragons are coming to Disney+ Hotstar. House of the Dragon, starts streaming 22 Aug. #HOTDonHotstar</p>
      </div>
    </div>

    <!-- <div class="normal_news">
        <span class="span_headings">Movies and Tv</span>
        <p class="hashtags">#Adipurush</p>
        <span class="span_headings">20k Posts</span>
      </div>

      <div class="normal_news">
        <span class="span_headings">Trending in Politics</span>
        <p class="hashtags">Punjab CM</p>
        <span class="span_headings">13k Posts</span>
      </div>

      <div class="normal_news">
        <span class="span_headings">Techcnology</span>
        <p class="hashtags">#Nothing</p>
        <div class="inside_content">
          <div class="inside_matter">
            <p>The Nothing Phone (1) boasts an elegant style that comes to life with beautiful symbols to enable an enriched connection between you and your device.</p>
          </div>
          <div class="inside_matter_image"> -->
    <!-- <img src="../images/explore/nothing.jpg" alt="" height="50px"> -->
    <!-- </div>
        </div>
        <span class="span_headings">14k Posts</span>
      </div>

      <div class="normal_news">
        <span class="span_headings">War in Ukraine</span>
        <p class="hashtags">Latest updates on the war in Ukraine</p>
        <span class="span_headings">6.7k Posts</span>
      </div>

      <div class="normal_news">
        <span class="span_headings">Entertainment · Trending</span>
        <p class="hashtags">#ShreyasTalpade</p>
        <div class="inside_content">
        <div class="inside_matter">
            <p>#ShreyasTalpade as Prime Minister #AtalBihariVajpayee in #KanganaRanaut's ‘#Emergency’ looks impressing! @shreyastalpade1 </p>
          </div>
        </div>
        <span class="span_headings">1.8k Posts</span>
      </div> -->
    <div class="tagembed-container" style=" width:620px;height:600px;overflow: auto;">
      <div class="tagembed-socialwall" data-wall-id="80090" view-url="https://widget.tagembed.com/80090"> </div>
      <script src="//widget.tagembed.com/embed.min.js" type="text/javascript"></script>
    </div>
  </div>


  <!-- feed ends -->

  <!-- widgets starts -->
  <div class="widgets">
    <div class="widgets__widgetContainer">
      <h2>Who to follow</h2>
      <br>
      <div class="follow_friends">
        <div class="friends_dp">
          <img src="../images/explore/matt.jpg" alt="jeaniedp" />
        </div>
        <div class="username_follow">
          <div class="post__headerText">
            <h3>Matt Ramos</h3>
            <span class="post__headerSpecial">@therealsupes</span>
          </div>
          <div class="follow_button">
            <button class="follow">Follow</button>
          </div>
        </div>
      </div>

      <br>
      <div class="follow_friends">
        <div class="friends_dp">
          <img src="../images/explore/mcu.jpg" alt="film" />
        </div>
        <div class="username_follow">
          <div class="post__headerText">
            <h3>MCU - The Direct</h3>
            <span class="post__headerSpecial">@MCU_Direct</span>
          </div>
          <div class="follow_button">
            <button class="follow">Follow</button>
          </div>
        </div>
      </div>

      <br>
      <div class="follow_friends">
        <div class="friends_dp">
          <img src="../images/explore/kf.jpg" alt="film" />
        </div>
        <div class="username_follow">
          <div class="post__headerText">
            <h3>Kevin Feige</h3>
            <span class="post__headerSpecial">@Kevfeige</span>
          </div>
          <div class="follow_button">
            <button class="follow">Follow</button>
          </div>
        </div>
      </div>
    </div>
    <div class="policies">
      <div class="tos">
        <a href="">
          <span class="end_description">Terms Of Service</span>
        </a>
      </div>
      <div class="tos">
        <a href="">
          <span class="end_description">Cookie policy</span>
        </a>
      </div>
      <div class="tos">
        <a href="">
          <span class="end_description">Accesibility</span>
        </a>
      </div>
    </div>
  </div>
  <!-- widgets ends -->
  <script src="../js/app.js"></script>
</body>

</html>