<?php include('insert.php') ?>

<html>
    <head><title>
    </title>
       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
        <style>
        h1{margin-bottom:.5rem;font-family:inherit;font-weight:500;line-height:1.2;color:inherit}
        </style>
    </head>
    <body>
        <div class="card">

    <h5 class="card-header info-color white-text text-center py-4">
    <strong>PROJECT REGISTRATION</strong>
  </h5>

  <!--Card content-->
  <div class="card-body px-lg-5 pt-0" background="/06.jpg">
            <form class="text-center" method="post" action="insert.php">
            <div class="form-group">
            <h3>   Project Title</h3><br>
            <input type="text" class="form-control mx-sm-3" name="pro_title" placeholder="project name" required><br>
            <h3>   Project Description</h3><br>
            <input type="textarea" class="form-control mx-sm-3" name="pro_description" placeholder="project " required><br>
            <h3>Skill Set</h3><br>
            <input type="text" class="form-control mx-sm-3" name="skillset" placeholder="project name" required><br>
                
            <h3>   Maximum Team Members</h3><br>
            <input type="number" class="form-control mx-sm-3" name="team_mem" placeholder="no of members per team" required><br>
            <h3>   Start Date</h3><br>
            <input type="date" class="form-control mx-sm-3" name="start_date" required><br>
            <h3>   End Date</h3><br>
            <input type="date" class="form-control mx-sm-3" name="end_date" required><br><br><br>
            <center><button class="btn btn-default" type="submit " name="submit">submit</button></center>
       
            <center><a href="www.google.co.in"><button style="type:button; class:btn btn-success;"} >login</button></a>
        
            <a href="www.google.com"><button style="type:button; class:btn btn-success;">signup</button></a></center>
            </div>
            </div>
        </form>
    </body>
</html>