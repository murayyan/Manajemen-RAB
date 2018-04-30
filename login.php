  <body>

    <!-- Header -->
      <section id="header">
        <header class="major">
          <h1>Highlights</h1>
          <p>A fun little { responsive } single pager by <a href="http://html5up.net">HTML5 UP</a></p>
        </header>
        <div class="container">
          <ul class="actions">
            <li><a href="#one" class="button special scrolly">Begin</a></li>
            <li><button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Login</button> </li>
          </ul>
        </div>
      </section>
<!--login-->
      <div id="id01" class="modal">
  <form class="modal-content animate" action="/action_page.php">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="image/1.png" alt="Avatar" class="avatar">
    </div>

    <div class="container">
      <label><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="uname" required>

      <label><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>
        
      <button type="submit">Login</button>
      <input type="checkbox" checked="checked"> Remember me
    </div>

    <div class="container">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="psw">Forgot <a href="#">password?</a></span>
    </div>
  </form>
</div>

    <!-- One -->
      <section id="one" class="main special">
        <div class="container">
          <span class="image fit primary"><img src="image/pic01.jpg" alt="" /></span>
          <div class="content">
            <header class="major">
              <h2>Who I am</h2>
            </header>
            <p>Aliquam ante ac id. Adipiscing interdum lorem praesent fusce pellentesque arcu feugiat. Consequat sed ultricies rutrum. Sed adipiscing eu amet interdum lorem blandit vis ac commodo aliquet integer vulputate phasellus lorem ipsum dolor lorem magna consequat sed etiam adipiscing interdum.</p>
          </div>
          <a href="#two" class="goto-next scrolly">Next</a>
        </div>
      </section>

    <!-- Two -->
      <section id="two" class="main special">
        <div class="container">
          <span class="image fit primary"><img src="image/pic02.jpg" alt="" /></span>
          <div class="content">
            <header class="major">
              <h2>Stuff I do</h2>
            </header>
            <p>Consequat sed ultricies rutrum. Sed adipiscing eu amet interdum lorem blandit vis ac commodo aliquet vulputate.</p>
            <ul class="icons-grid">
              <li>
                <span class="icon major fa-camera-retro"></span>
                <h3>Magna Etiam</h3>
              </li>
              <li>
                <span class="icon major fa-pencil"></span>
                <h3>Lorem Ipsum</h3>
              </li>
              <li>
                <span class="icon major fa-code"></span>
                <h3>Nulla Tempus</h3>
              </li>
              <li>
                <span class="icon major fa-coffee"></span>
                <h3>Sed Feugiat</h3>
              </li>
            </ul>
          </div>
          <a href="#three" class="goto-next scrolly">Next</a>
        </div>
      </section>

    <!-- Three -->
      <section id="three" class="main special">
        <div class="container">
          <span class="image fit primary"><img src="image/pic03.jpg" alt="" /></span>
          <div class="content">
            <header class="major">
              <h2>One more thing</h2>
            </header>
            <p>Aliquam ante ac id. Adipiscing interdum lorem praesent fusce pellentesque arcu feugiat. Consequat sed ultricies rutrum. Sed adipiscing eu amet interdum lorem blandit vis ac commodo aliquet integer vulputate phasellus lorem ipsum dolor lorem magna consequat sed etiam adipiscing interdum.</p>
          </div>
          <a href="#footer" class="goto-next scrolly">Next</a>
        </div>
      </section>
    <!-- Scripts -->
      <script src="assets/js/jquery.min.js"></script>
      <script src="assets/js/jquery.scrollex.min.js"></script>
      <script src="assets/js/jquery.scrolly.min.js"></script>
      <script src="assets/js/skel.min.js"></script>
      <script src="assets/js/util.js"></script>
      <!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
      <script src="assets/js/main.js"></script>
      <script src="js/login.js"></script>
  </body>
</html>