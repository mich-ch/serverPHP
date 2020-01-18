<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title></title>
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
    </head>
    <body>

        <!--navbar-->
        <div class="outnav">
          <div class="navbar">
              <ul>
              <li><a class="active" href="#home">UniStud</a></li>
              <li style="float:right"><a href="#about">About</a></li>
              </ul>
          </div>
        </div>

        <!--sticky-->
        <div class="middle">
          <img src="img/user2.png" alt="Avatar" style="width:200px">

          <div class="menu">
              <li class="item" id='profile'>
                <a href="#profile" class="btn"><i class="far fa-user"></i>Profile</a>
                <div class="smenu">
                    <a href="#">Posts</a>
                    <a href="#">Picture</a>
                </div>
              </li>

              <li class="item" id="messages">
                <a href="#messages" class="btn"><i class="far fa-envelope"></i>Messages</a>
                <div class="smenu">
                    <a href="#">new</a>
                    <a href="#">Sent</a>
                    <a href="#">Spam</a>
                </div>
              </li>

              <li class="item" id="settings">
                <a href="#settings" class="btn"><i class="fas fa-cog"></i>Settings</a>
                <div class="smenu">
                    <a href="#">Password</a>
                    <a href="#">Language</a>
                    <a href="#">About me</a>
                    <a href="#">About me</a>
                </div>
              </li>

              <li class="item" id="portfolio">
                <a href="portfolio.php" class="btn"><i class="fa fa-briefcase"></i>Portfolio</a>
              </li>

              <li class="item" id="calendar">
                <a href="calendar.php" class="btn"><i class="fa fa-calendar"></i>Calendar</a>
              </li>

              <li class="item">
                <a class="btn" href="#"><i class="fas fa-sign-out-alt"></i>Logout</a>
              </li>
          </div>
        </div>

        <!--Cards-->
        <div class="out">
          <div class="card">
              <h2 style="text-align: center;">About</h2>
              <br>
              <div class="grid-container">
              <div class="grid-item">Το Lorem Ipsum είναι απλά ένα κείμενο χωρίς νόημα για τους επαγγελματίες της τυπογραφίας και στοιχειοθεσίας.
                  Το Lorem Ipsum είναι το επαγγελματικό πρότυπο όσον αφορά το κείμενο χωρίς νόημα.
              </div>
              <div class="grid-item">Το Lorem Ipsum είναι απλά ένα κείμενο χωρίς νόημα για τους επαγγελματίες της τυπογραφίας και στοιχειοθεσίας.
                  Το Lorem Ipsum είναι το επαγγελματικό πρότυπο όσον αφορά το κείμενο χωρίς νόημα
              </div>
              <div class="grid-item">Το Lorem Ipsum είναι απλά ένα κείμενο χωρίς νόημα για τους επαγγελματίες της τυπογραφίας και στοιχειοθεσίας.
                  Το Lorem Ipsum είναι το επαγγελματικό πρότυπο όσον αφορά το κείμενο χωρίς νόημα,
              </div>
              </div>

              <div class="container">
              <br>
              <br>
              <br>
              <br>
              </div>
          </div>
          <!--Card2-->
          <div class="card2">
              <h2 style="text-align: center;">Skills</h2>
              <br>
              <div class="grid-container">
              <div class="grid-item">
                  <canvas id="myChart" width="400" height="400"></canvas>
                  <script>
                  var ctx = document.getElementById('myChart');
                  var myChart = new Chart(ctx, {
                      type: 'horizontalBar',
                      data: {
                          labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
                          datasets: [{
                              label: '# of Votes',
                              data: [12, 19, 3, 5, 2, 3],
                              backgroundColor: [
                                  'rgba(255, 99, 132, 0.2)',
                                  'rgba(54, 162, 235, 0.2)',
                                  'rgba(255, 206, 86, 0.2)',
                                  'rgba(75, 192, 192, 0.2)',
                                  'rgba(153, 102, 255, 0.2)',
                                  'rgba(255, 159, 64, 0.2)'
                              ],
                              borderColor: [
                                  'rgba(255, 99, 132, 1)',
                                  'rgba(54, 162, 235, 1)',
                                  'rgba(255, 206, 86, 1)',
                                  'rgba(75, 192, 192, 1)',
                                  'rgba(153, 102, 255, 1)',
                                  'rgba(255, 159, 64, 1)'
                              ],
                              borderWidth: 1
                          }]
                      },
                      options: {
                          scales: {
                              yAxes: [{
                                  ticks: {
                                      beginAtZero: true
                                  }
                              }]
                          }
                      }
                  });
                  </script>
              </div>
              </div>
              <div class="container">
              <br>
              <br>
              <br>
              <br>
              </div>
          </div>

          <!--Card3-->
          <div style="width: 66%; margin-left: 1%;" class="card2">
              <h2 style="text-align: center;">Education</h2>
              <br>
              <div class="grid-container">
              <div class="grid-item">Το Lorem Ipsum είναι απλά ένα κείμενο χωρίς νόημα για τους επαγγελματίες της τυπογραφίας και στοιχειοθεσίας.
                  Το Lorem Ipsum είναι το επαγγελματικό πρότυπο όσον αφορά το κείμενο χωρίς νόημα.
                  Το Lένα κείμενο χωρίς νόημα για τους επαγγελματίες της τυπογραφίας και στοιχειοθεσίας.
                      Το Lorem Ipsum είναι το επαγγελματικό πρότυπο όσον αφορά το κείμενο χωρίς νόημα.
              </div>
              </div>
              <div class="container">
              <br>
              <br>
              <br>
              <br>
              </div>
          </div>

          <!--Card4-->
          <div style="width: 66%; margin-left: 1%;" class="card2">
              <h2 style="text-align: center;">Portfolio</h2>
              <br>

              <div class="grid-container">
              <div class="grid-item">Το Lorem Ipsum είναι απλά ένα κείμενο χωρίς νόημα για τους επαγγελματίες της τυπογραφίας και στοιχειοθεσίας.
                  Το Lorem Ipsum είναι το επαγγελματικό πρότυπο όσον αφορά το κείμενο χωρίς νόημα.
                  Το Lorem Ipsum είναι απλά ένα κείμενο χωρίς νόημα για τους επαγγελματίες της τυπογραφίας και στοιχειοθεσίας.
                  Το Lorem Ipsum ι το επαγγελματικό πρότυπο όσον αφορά το κείμενο χωρίς νόημα.
              </div>
              </div>
              <div class="container">
                <br>
                <br>
                <br>
                <br>
              </div>
          </div>
        </div>



    </body>
</html>
