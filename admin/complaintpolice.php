<?php
session_start();
include 'conn.php';
$query=mysqli_query($conn,"SELECT * FROM user_tb join womencell_tb on user_tb.login_id=womencell_tb.login_id");
$query1=mysqli_query($conn,"SELECT * FROM womencell_tb");
// $row=mysqli_fetch_assoc($query);
// $_SESSION['cell']=$row['cell_id'];
// $id=$_SESSION['cell'];


if(isset($_POST['subm']))
{
    $lid=$_POST['l_id'];
    $cid=$_POST['c_id'];
    $ack=$_POST['ack'];
    $date=$_POST['date'];
    mysqli_query($conn,"INSERT INTO complaint_tb(login_id,cell_id,acknowledgement,date)VALUES('$lid','$cid','$ack','$date')");
    header('location:dashboard.php');
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="description" content="Vali is a responsive and free admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular.">
    <!-- Twitter meta-->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:site" content="@pratikborsadiya">
    <meta property="twitter:creator" content="@pratikborsadiya">
    <!-- Open Graph Meta-->
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Vali Admin">
    <meta property="og:title" content="Vali - Free Bootstrap 4 admin theme">
    <meta property="og:url" content="http://pratikborsadiya.in/blog/vali-admin">
    <meta property="og:image" content="http://pratikborsadiya.in/blog/vali-admin/hero-social.png">
    <meta property="og:description" content="Vali is a responsive and free admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular.">
    <title>She Secure-Report Complaint</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body class="app sidebar-mini">
    <!-- Navbar-->
    <?php
    include 'header.php';
    ?>
    <!-- Sidebar menu-->
    <div class="app-sidebar__overlay" data-toggle="sidebar"></div>

    <?php
    include'leftbar.php';
    ?>
    
    <main class="app-content">
        <form method="POST">
      <!-- <div class="app-title">
       <div>
          <h1><i class="fa fa-dashboard"></i> Add Health Tips</h1>
          <p>A free and open source Bootstrap 4 admin template</p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
        </ul>
      </div> -->
    <div>
      <div class="col-md-6">
          <div class="tile">
            <h3 class="tile-title">Complaint To Police</h3>
            <div class="tile-body">
              <form class="form-horizontal">
              <div class="form-group row">
                  <label class="control-label col-md-3">User</label><br>
                  <div class="col-md-8">
                    <select type="text" class="form-control" name="l_id">
                    <option>Select</option>
                    <?php
                     while ($row=mysqli_fetch_assoc($query))
                     {
                       ?>
                     <option value="<?php echo $row['login_id'];?>"><?php echo $row['name'];?></option>
                    <?php } ?>
                    </select>
                  </div>
                </div>
                <div class="form-group row">
                  <label class="control-label col-md-3">Cell_id</label><br>
                  <div class="col-md-8">
                    <select type="text" class="form-control" name="c_id">
                    <option>Select</option>
                    <?php
                    while ($row=mysqli_fetch_assoc($query1))
                    {
                      ?>
                    <option value="<?php echo $row['cell_id'];?>"><?php echo $row['cell_id'];?></option>
                    
                    <?php } ?>
                    </select>
                  </div>
                </div>
                <div class="form-group row">
                  
                </div>
                <div class="form-group row">
                <label class="control-label col-md-3">Acknowledgement</label>
                  <div class="col-md-8">
                    <input class="form-control" type="text" placeholder="acknowledgement" name="ack">
                  </div>
                </div>
                <div class="form-group row">
                  <label class="control-label col-md-3">Date</label>
                  <div class="col-md-8">
                    <input class="form-control" type="date" placeholder="date" name="date">
                  </div>
                </div>

              </form>
            </div>
            <div class="tile-footer">
              <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <input type="submit" name="subm" class="btn btn-primary" value="SUBMIT">
                  <!-- <button class="btn btn-primary" type="button" name="subm"><i class="fa fa-fw fa-lg fa-check-circle"></i>Register</button>&nbsp;&nbsp;&nbsp;<a class="btn btn-secondary" href="#"><i class="fa fa-fw fa-lg fa-times-circle"></i>Cancel</a> -->
                </div>
              </div>
            </div>
          </div>
      </div>

    </div>

      
</form> 
    </main>
    <!-- Essential javascripts for application to work-->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <!-- The javascript plugin to display page loading on top-->
    <script src="js/plugins/pace.min.js"></script>
    <!-- Page specific javascripts-->
    <script type="text/javascript" src="js/plugins/chart.js"></script>
    <script type="text/javascript">
      var data = {
      	labels: ["January", "February", "March", "April", "May"],
      	datasets: [
      		{
      			label: "My First dataset",
      			fillColor: "rgba(220,220,220,0.2)",
      			strokeColor: "rgba(220,220,220,1)",
      			pointColor: "rgba(220,220,220,1)",
      			pointStrokeColor: "#fff",
      			pointHighlightFill: "#fff",
      			pointHighlightStroke: "rgba(220,220,220,1)",
      			data: [65, 59, 80, 81, 56]
      		},
      		{
      			label: "My Second dataset",
      			fillColor: "rgba(151,187,205,0.2)",
      			strokeColor: "rgba(151,187,205,1)",
      			pointColor: "rgba(151,187,205,1)",
      			pointStrokeColor: "#fff",
      			pointHighlightFill: "#fff",
      			pointHighlightStroke: "rgba(151,187,205,1)",
      			data: [28, 48, 40, 19, 86]
      		}
      	]
      };
      var pdata = [
      	{
      		value: 300,
      		color: "#46BFBD",
      		highlight: "#5AD3D1",
      		label: "Complete"
      	},
      	{
      		value: 50,
      		color:"#F7464A",
      		highlight: "#FF5A5E",
      		label: "In-Progress"
      	}
      ]
      
      var ctxl = $("#lineChartDemo").get(0).getContext("2d");
      var lineChart = new Chart(ctxl).Line(data);
      
      var ctxp = $("#pieChartDemo").get(0).getContext("2d");
      var pieChart = new Chart(ctxp).Pie(pdata);
    </script>
    <!-- Google analytics script-->
    <script type="text/javascript">
      if(document.location.hostname == 'pratikborsadiya.in') {
      	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      	(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      	m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      	})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
      	ga('create', 'UA-72504830-1', 'auto');
      	ga('send', 'pageview');
      }
    </script>
  </body>
</html>