<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Home</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../css/homepage.css">
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

      <a href="" class="links">
      <div class="sidebarOption">
        <span class="material-icons"> search </span>
        <h2>Seek</h2>
      </div>
      </a>

      <a href="" class="links">
      <div class="sidebarOption">
        <span class="material-icons"> notifications_none </span>
        <h2>Notifications</h2>
      </div>
      </a>

      <a href="" class="links">
      <div class="sidebarOption">
        <span class="material-icons"> mail_outline </span>
        <h2>Chats</h2>
      </div>
      </a>
      
      <a href="" class="links">
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
        <h2>News Feed</h2>
      </div>

      <!-- tweetbox starts -->
      <div class="tweetBox">
        <form>
          <div class="tweetbox__input">
            <img
              src="../images/profile.jpg"
              alt=""
            />
            <input type="text" placeholder="Post anything :)" />
          </div>
          <button class="tweetBox__tweetButton">Post</button>
        </form>
      </div>
      <!-- tweetbox ends -->

      <!-- post starts -->
      <div class="post">
        <div class="post__avatar">
          <img
            src="../images/feed dp/saaketh jella.jpg"
            alt=""
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
              <p><span class="highlight_words">#Neural networks</span>, also known as artificial neural networks (ANNs) or simulated neural networks (SNNs), are a subset of <span class="highlight_words">#machine learning</span> and are at the heart of deep learning algorithms. Their name and structure are inspired by the human brain, mimicking the way that biological neurons signal to one another.</p>
            </div>
          </div>
          <img
            src="../images/feed photos/neural-networks.jpg"
            alt=""
          />
          <div class="post__footer">
            <span class="material-icons"> repeat </span>
            <span class="material-icons"> favorite_border </span>
            <span class="material-icons"> publish </span>
          </div>
        </div>
      </div>
      <!-- post ends -->

      <!-- post starts -->
      <div class="post">
        <div class="post__avatar">
          <img
            src="../images/feed dp/avengers.jpg"
            alt=""
          />
        </div>

        <div class="post__body">
          <div class="post__header">
            <div class="post__headerText">
              <h3>
                David Johnson
                <span class="post__headerSpecial"
                  ><span class="material-icons post__badge"> verified </span>@David_2612</span
                >
              </h3>
            </div>
            <div class="post__headerDescription">
              <p><span class="highlight_words">#The Avengers</span>, American comic strip superhero team whose frequently
              changing roster often included some of the most popular characters
              in the <span class="highlight_words">#Marvel Comics universe</span>. </p>
            </div>
          </div>
          <img
            src="../images/feed photos/avengers.jpg"
            alt=""
          />
          <div class="post__footer">
            <span class="material-icons"> repeat </span>
            <span class="material-icons"> favorite_border </span>
            <span class="material-icons"> publish </span>
          </div>
        </div>
      </div>
      <!-- post ends -->

      <div class="post">
        <div class="post__avatar">
          <img
            src="../images/feed dp/hughie.jpg"
            alt=""
          />
        </div>

        <div class="post__body">
          <div class="post__header">
            <div class="post__headerText">
              <h3>
                Peter Hughie
                <span class="post__headerSpecial"
                  ><span class="material-icons post__badge"> verified </span>@Peter_2022</span
                >
              </h3>
            </div>
            <div class="post__headerDescription">
              <p><span class="highlight_words">Keanu Reeves</span> told Extra that he would love to play an older, wisened <span class="highlight_words">@Batman</span> someday: “It’s always been a dream, but Pattinson’s Batman right now. He’s doing awesome, but maybe down the road when they need an older Batman.”</p>
            </div>
          </div>
          <!-- <img
            src="https://www.focus2move.com/wp-content/uploads/2020/01/Tesla-Roadster-2020-1024-03.jpg"
            alt=""
          /> -->
          <div class="post__footer">
            <span class="material-icons"> repeat </span>
            <span class="material-icons"> favorite_border </span>
            <span class="material-icons"> publish </span>
          </div>
        </div>
      </div>

      <div class="post">
        <div class="post__avatar">
          <img
            src="../images/feed dp/butcher.jpg"
            alt=""
          />
        </div>

        <div class="post__body">
          <div class="post__header">
            <div class="post__headerText">
              <h3>
                Billy Butcher
                <span class="post__headerSpecial"
                  ><span class="material-icons post__badge"> verified </span>@David_2612</span
                >
              </h3>
            </div>
            <div class="post__headerDescription">
              <p>Vintage cars have a different vibe</p>
            </div>
          </div>
          <img
            src="../images/feed photos/car.jpg"
            alt=""
          />
          <div class="post__footer">
            <span class="material-icons"> repeat </span>
            <span class="material-icons"> favorite_border </span>
            <span class="material-icons"> publish </span>
          </div>
        </div>
      </div>

      <div class="post">
        <div class="post__avatar">
          <img
            src="../images/feed dp/st.jpg"
            alt=""
          />
        </div>

        <div class="post__body">
          <div class="post__header">
            <div class="post__headerText">
              <h3>
                Stranger Things
                <span class="post__headerSpecial"
                  ><span class="material-icons post__badge"> verified </span>@StrangerThings_011</span
                >
              </h3>
            </div>
            <div class="post__headerDescription">
              <p>*Waits 1000 days for Stranger Things to return* <br>
              <br>
              *Finishes it in 1 day*</p>
            </div>
          </div>
          <!-- <img
            src="https://www.focus2move.com/wp-content/uploads/2020/01/Tesla-Roadster-2020-1024-03.jpg"
            alt=""
          /> -->
          <div class="post__footer">
            <span class="material-icons"> repeat </span>
            <span class="material-icons"> favorite_border </span>
            <span class="material-icons"> publish </span>
          </div>
        </div>
      </div>
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