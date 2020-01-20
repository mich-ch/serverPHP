<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<style>
body {font-family: Arial;}

/* Style the tab */
.tab {
  overflow: hidden;
  border: 1px solid #ccc;
  background-color: #f1f1f1;
}

/* Style the buttons inside the tab */
.tab button {
  background-color: inherit;
  float: left;
  border: none;
  outline: none;
  cursor: pointer;
  padding: 14px 16px;
  transition: 0.3s;
  font-size: 17px;
}

/* Change background color of buttons on hover */
.tab button:hover {
  background-color: #ddd;
}

/* Create an active/current tablink class */
.tab button.active {
  background-color: #ccc;
}

/* Style the tab content */
.tabcontent {
  display: none;
  padding: 6px 12px;
  border: 1px solid #ccc;
  border-top: none;
}

/*formAbout*/
form * {
    border-radius:0 !important;
}

form > fieldset > legend {
    font-size:120%;
}
</style>
</head>
<body>

<h1 style="text-align: center;">Settings</h1>


<div style="text-align: center;" class="tab">
  <button class="tablinks" onclick="openCity(event, 'About')">About</button>
  <button class="tablinks" onclick="openCity(event, 'Education')">Education</button>
  <button class="tablinks" onclick="openCity(event, 'Experience')">Experience</button>
  <button class="tablinks" onclick="openCity(event, 'Skills')">Skills</button>
</div>

<div id="About" class="tabcontent">
  <div class="container">
        <div class="row">

            <div class="col-md-8 col-md-offset-2">
                <form role="form" method="POST" action="settings.php">

                    <legend class="text-center">About me</legend>

                    <fieldset>
                        <legend>Account Details</legend>
                        <div class="form-group col-md-6">
                            <label for="first_name">First name</label>
                            <input type="text" class="form-control" value="<?php echo $_SESSION['firstname'];?>" name="firstname" id="firstname" placeholder="First Name">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="last_name">Last name</label>
                            <input type="text" class="form-control" value="<?php echo $_SESSION['lastname'];?>" name="lastname" id="lastname" placeholder="Last Name">
                        </div>
                        <div class="form-group col-md-12">
                            <label for="">Email</label>
                            <input type="email" class="form-control" value="<?php echo $_SESSION['email'];?>" name="email" id="email" placeholder="Email">
                        </div>
                        <div class="form-group col-md-12">
                            <label for="">Username</label>
                            <input type="text" class="form-control"  value="<?php echo $_SESSION['username'];?>" name="username" id="username" placeholder="Username">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" value="<?php echo $_SESSION['password'];?>" name="password" id="password" placeholder="Password">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="confirm_password">Confirm Password</label>
                            <input type="password" class="form-control" value="<?php echo $_SESSION['password'];?>" name="confirmpassword" id="confirmpassword" placeholder="Confirm Password">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="age">Age</label>
                            <input type="text" class="form-control" value="<?php echo $_SESSION['age'];?>" name="age" id="age" placeholder="Age ">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="gender">Gender</label>
                            <input type="text" class="form-control" value="<?php echo $_SESSION['gender'];?>" name="gender" id="gender" placeholder="Gender ">
                        </div>
                    </fieldset>

                    <div class="form-group">
                        <div class="col-md-12">
                            <button type="submit" name="about_user" type="submit" value="submit" class="btn btn-primary">
                                Accept
                            </button>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>

<div id="Education" class="tabcontent">
  <div class="container">
                <br />
                <br />
                <br />
                <div class="table-responsive">
                     <h3 align="center">Education</h3><br />
                     <div id="live_data"></div>
                </div>
  </div>
</div>

<div id="Experience" class="tabcontent">
  <div class="container">
                <br />
                <br />
                <br />
                <div class="table-responsive">
                     <h3 align="center">Experience</h3><br />
                     <div id="live_data"></div>
                </div>
  </div>
</div>

<div id="Skills" class="tabcontent">
  <div class="container">
        <div class="row">

            <div class="col-md-8 col-md-offset-2">
                <form role="form" method="POST" action="settings.php">

                    <legend class="text-center">Skills</legend>
                    <fieldset>
                        <legend>Account Details</legend>
                        <div class="form-group col-md-6">
                            <label for="s1">Skill 1</label>
                            <input type="text" class="form-control"
                            <?php if (isset($_SESSION['s1'])) : ?>
                                value="<?php echo $_SESSION['s1'] ?>"
                            <?php endif ?>
                             name="s1" id="s1" placeholder="Skill 1">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="v1">Value 1</label>
                            <input type="text" class="form-control"
                            <?php if (isset($_SESSION['v1'])) : ?>
                                value="<?php echo $_SESSION['v1'] ?>"
                            <?php endif ?>
                            name="v1" id="v1" placeholder="%">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="s2">Skill 2</label>
                            <input type="text" class="form-control"
                            <?php if (isset($_SESSION['s2'])) : ?>
                                value="<?php echo $_SESSION['s2'] ?>"
                            <?php endif ?>
                            name="s2" id="s2" placeholder="Skill 2">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="v2">Value 2</label>
                            <input type="text" class="form-control"
                            <?php if (isset($_SESSION['v2'])) : ?>
                                value="<?php echo $_SESSION['v2'] ?>"
                            <?php endif ?>
                            name="v2" id="v2" placeholder="%">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="s3">Skill 3</label>
                            <input type="text" class="form-control"
                            <?php if (isset($_SESSION['s3'])) : ?>
                                value="<?php echo $_SESSION['s3'] ?>"
                            <?php endif ?>
                            name="s3" id="s3" placeholder="Skill 3">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="v3">Value 3</label>
                            <input type="text" class="form-control"
                            <?php if (isset($_SESSION['v3'])) : ?>
                                value="<?php echo $_SESSION['v3'] ?>"
                            <?php endif ?>
                            name="v3" id="v3" placeholder="%">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="s4">Skill 4</label>
                            <input type="text" class="form-control"
                            <?php if (isset($_SESSION['s4'])) : ?>
                                value="<?php echo $_SESSION['s4'] ?>"
                            <?php endif ?>
                            name="s4" id="s4" placeholder="Skill 4">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="v4">Value 4</label>
                            <input type="text" class="form-control"
                            <?php if (isset($_SESSION['v4'])) : ?>
                                value="<?php echo $_SESSION['v4'] ?>"
                            <?php endif ?>
                            name="v4" id="v4" placeholder="%">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="s5">Skill 5</label>
                            <input type="text" class="form-control"
                            <?php if (isset($_SESSION['s5'])) : ?>
                                value="<?php echo $_SESSION['s5'] ?>"
                            <?php endif ?>
                            name="s5" id="s5" placeholder="Skill 5">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="v5">Value 5</label>
                            <input type="text" class="form-control"
                            <?php if (isset($_SESSION['v5'])) : ?>
                                value="<?php echo $_SESSION['v5'] ?>"
                            <?php endif ?>
                            name="v5" id="v5" placeholder="%">
                        </div>

                    </fieldset>

                    <div class="form-group">
                        <div class="col-md-12">
                            <button type="submit" name="skill_user" type="submit" value="submit" class="btn btn-primary">
                                Submit
                            </button>

                        </div>
                    </div>

                </form>
            </div>

        </div>
    </div>
</div>
<!--Tabs-->
<script>
function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";

}
</script>

<!--LiveTable-->
<script>
 $(document).ready(function(){
      function fetch_data()
      {
           $.ajax({
                url:"select.php",
                method:"POST",
                success:function(data){
                     $('#live_data').html(data);
                }
           });
      }
      fetch_data();
      $(document).on('click', '#btn_add', function(){
           var sch = $('#sch').text();
           var pu = $('#pu').text();
           var yoi = $('#yoi').text();
           var id = $(this).data("id4");
           if(sch == '')
           {
                alert("Enter Sch");
                return false;
           }
           if(pu == '')
           {
                alert("Enter PU");
                return false;
           }
           if(yoi == '')
           {
                alert("Enter Yoi");
                return false;
           }
           $.ajax({
                url:"insert.php",
                method:"POST",
                data:{id:id, sch:sch, pu:pu, yoi:yoi},
                dataType:"text",
                success:function(data)
                {
                     alert(data);
                     fetch_data();
                }
           })
      });
      function edit_data(id, name, name2, text, column_name)
      {
           $.ajax({
                url:"edit.php",
                method:"POST",
                data:{id:id, name:name, name2:name2, text:text, column_name:column_name},
                dataType:"text",
                success:function(data){

                }
           });
      }
      $(document).on('blur', '.sch', function(){
           var id = $(this).data("id1");
           var pu = $(this).data("pu1");
           var yoi = $(this).data("yoi1");
           var sch = $(this).text();
           edit_data(id, yoi, pu, sch, "sch");
      });
      $(document).on('blur', '.pu', function(){
           var id = $(this).data("id2");
           var sch = $(this).data("sch2");
           var yoi = $(this).data("yoi2");
           var pu = $(this).text();
           edit_data(id, yoi, sch, pu, "pu");
      });
      $(document).on('blur', '.yoi', function(){
           var id = $(this).data("id3");
           var pu = $(this).data("pu2");
           var sch = $(this).data("sch2");
           var yoi = $(this).text();
           edit_data(id, pu, sch, yoi, "yoi");
      });
      $(document).on('click', '.btn_delete', function(){
           var id=$(this).data("id4");
           var sch=$(this).data("sch3");
           if(confirm("Are you sure you want to delete this?"))
           {
                $.ajax({
                     url:"delete.php",
                     method:"POST",
                     data:{id:id, sch:sch},
                     dataType:"text",
                     success:function(data){
                          alert(data);
                          fetch_data();
                     }
                });
           }
      });
 });
 </script>


</body>
</html>
