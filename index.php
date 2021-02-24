<php>
  <head>
    <title>Hoai An Nguyen Portfolio</title>
    <link rel="stylesheet" href="resume-styles.css">
  </head>
  <body>

    <!-- Header with picture -->
    <header>
      <div class="header1">
        <img src="pic/111.jpg" alt="Photo." style="width:14%;">
        <h1>Hoai An Nguyen</h1>
        <h3>Software Engineer</h3>
      </div>

      <table class = "info-table">
        <tr>
          <th>&#9993; anamatxcova@gmail.com</th>
          <th>&#128205; 4239 Ruby Ave, San Jose, CA 95135, United States</th>
          <th>&#9743; 669 213 7932</th>
        </tr>
      </table>
      <hr>
    </header>

    <!-- Navigation bar -->
    <nav>
      <div class="navbar">
        <a class="active" href="Resume.php">General Information</a>
        <a href="transcript-protected.php">Transcript</a>
        <div class="dropdown">
          <button class="dropbtn">Projects
            <i class="fa fa-caret-down"></i>
          </button>
          <div class="dropdown-content">
            <a href="prj1.php">Organic Food Store</a>
            <a href="prj2.php">Games</a>
            <a href="prj2.php">Mechatronics</a>
          </div>
        </div>
      </div>
    </nav>

    <!-- Main section -->
    <section>
      <dr>
      <div class="row">
        <!-- Left column with main Information -->
        <div class="column left" style="padding: 30px 30px 0px 50px;">
          <dr>
          <h3> &#10070; Profile  &#10070;</h3>
          <div class = "section">
            <p>Junior engineer skilled in Java Programming. Bringing forth a motivated attitude and the ability to multitask and adjust to different environment. Committed to working as a positive team member to achieve success.
            <p>Currently a third year student with <a href="Transcript-protected.php ">GPA of 3.89</a> at San Jose State University.
          </div>

          <div class = "section">
            <h3>&#10070; Experience  &#10070;</h3>
            <div style=" text-indent: 20px;">
            International Student Assosiation | Evergreen Valley College
            <p style="font-size:15px; font: italic; color:#656666";line-height: 0.7;>Spring 2018-Fall 2018</p>
            <ul>
              <li> Maintained office scheduling and event calendars </li>
              <li> Composed meeting minutes</li>
              <li> Prepared and organized paperwork and other materials as needed for meetings</li>
              <li> Answered emails and provided information to people interested in the club</li>
            </ul>
            </div>
          </div>

          <div class = "section">
            <h3>  &#10070; Education  &#10070;</h3>
            <ul>
              <li> BS Software Engineering, San Jose State University, San Jose
                <p style="font-size:15px; font: italic; color:#656666";line-height: 0.7;>August 2020-Present</p>
              </li>
              <li>AS-T Math, Evergreen Valley College, San Jose
                <p style="font-size:15px; font: italic; color:#656666";line-height: 0.7;>January 2018-May 2020</p>
              </li>
              <li>Lomonosov Moscow State University, Moscow
                <p style="font-size:15px; font: italic;line-height: 0.7; color:#656666">September 2016-May 2017</p>
              </li>
            </ul>
          </div>

          <div class = "section">
            <h3>  &#10070; Projects  &#10070;</h3>
            <form name="projects">
              <select id="projects">
                <option value="ofs">Organic Food Store</option>
                <option value="games">Games</option>
                <option value="mechatronics">Mechatronics</option>
              </select>
              <button class="btn btn-default" id="projects" onclick="submission();" type="button"><span class="glyphicon glyphicon-check"></span> Submit</button>
            </form>
          </div>

        </div>

        <!-- Right column -->
        <div class="column right" style = "text-align: center">
          <h3>Details</h3>
          <hr>
          <p style="font-size:15px; font: italic;line-height: 0.7; color:#656666">Contacts</p>
          <p>4239 Ruby Ave, San Jose, 95135,
          <p>United States
          <p>669 213 7932
          <div style="text-decoration: underline;text-align: left;">
            <dr>
            <p>anamatxcova@gmail.com
          </div>
          <hr>
          <p style="font-size:15px; font: italic;line-height: 0.7; color:#656666">Place of birth</p>
          <p>Moscow, Russia
          <p style="font-size:15px; font: italic;line-height: 0.7; color:#656666">Nationality</p>
          <p>Vietnamse
          <hr>

          <p style="font-size:15px; font: italic;line-height: 0.7; color:#656666">Technical Skills</p>
          <p>Java
          <p>php
          <p>CSS
          <p>Bootstrap 4
          <p>JavaScript
          <p>PHP
          <p>SQL
          <hr>

          <p style="font-size:15px; font: italic;line-height: 0.7; color:#656666">Languages</p>
          <p>English
          <p>Russian
          <p>Vietnamese
          <p>Japanese
        </div>
      </div>
      <hr>
    </section>
    <footer>
      &#169; 2020 Hoai An Nguyen
    </footer>
    <script src="script.js"></script>
  </body>
</php>
