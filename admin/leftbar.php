<aside class="app-sidebar">
  <?php
  if($_SESSION['type']=='admin')
  {
    ?>
  

      <div class="app-sidebar__user">
      <div>
        <p class="app-sidebar__user-designation">WELCOME ADMIN</p>
        
      </div>
    </div>
    <ul class="app-menu">

      <li><a class="app-menu__item" href="dashboard.php"><i class="app-menu__icon fa fa-dashboard creen_icon"></i><span class="app-menu__label">Dashboard</span></a></li>
      <li><a class="app-menu__item" href="registerdwomen.php"><i class="app-menu__icon fa fa-registered"></i><span class="app-menu__label">Registerd Women</span></a></li>
      <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-user-secret"></i><span class="app-menu__label">Manage Police</span><i class="treeview-indicator fa fa-angle-right"></i></a>
        <ul class="treeview-menu">
          <li><a class="treeview-item" href="addpolice.php"><i class="icon fa fa-circle-o"></i> Add Police Details</a></li>
          <li><a class="treeview-item" href="viewpolice.php"><i class="icon fa fa-circle-o"></i> Update Police </a></li>
        </ul>
      </li>
      <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-user-md"></i><span class="app-menu__label">Manage Doctor</span><i class="treeview-indicator fa fa-angle-right"></i></a>
        <ul class="treeview-menu">
          <li><a class="treeview-item" href="adddoctor.php"><i class="icon fa fa-circle-o"></i> Add Doctor Details</a></li>
          <li><a class="treeview-item" href="viewdoctor.php"><i class="icon fa fa-circle-o"></i> Update Doctor </a></li>
        </ul>
      </li>
      <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-female"></i><span class="app-menu__label">Manage Women Cell</span><i class="treeview-indicator fa fa-angle-right"></i></a>
        <ul class="treeview-menu">
          <li><a class="treeview-item" href="addwomencell.php"><i class="icon fa fa-circle-o"></i> Add Women Cell</a></li>
          <li><a class="treeview-item" href="viewwomencell.php"><i class="icon fa fa-circle-o"></i> Update Women Cell</a></li>
        </ul>
      </li>
      <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-heart"></i><span class="app-menu__label">Health Tips</span><i class="treeview-indicator fa fa-angle-right"></i></a>
        <ul class="treeview-menu">
          <li><a class="treeview-item" href="addhealth-tips.php"><i class="icon fa fa-circle-o"></i> Add Health Tips</a></li>
          <li><a class="treeview-item" href="viewhealth-tips.php"><i class="icon fa fa-circle-o"></i> Update Health Tips</a></li>
        </ul>
      </li>
<?php
  }
  ?>


  <?php
  if($_SESSION['type']=='police')
  {
  ?>
      <div class="app-sidebar__user">
      <div>
        <p class="app-sidebar__user-designation">WELCOME POLICE</p>
        
      </div>
    </div>
    <li><a class="app-menu__item active" href="dashboard.php"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Dashboard</span></a></li>
      <li><a class="app-menu__item" href="viewcomplaints.php"><i class="app-menu__icon fa fa-file-text-o"></i><span class="app-menu__label"> Complaints</span></a></li>
<br><br>
<?php
  }
  ?>

  <?php
  if($_SESSION['type']=='doctor')
  {
    ?>
<div class="app-sidebar__user">
      <div>
        <p class="app-sidebar__user-designation">WELCOME DOCTOR</p>
        
      </div>
    </div>
    <li><a class="app-menu__item active" href="dashboard.php"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Dashboard</span></a></li>
      <li><a class="app-menu__item" href="womencommunication.php"><i class="app-menu__icon fa fa-female"></i><span class="app-menu__label">Chat With Women</span></a></li>
      <?php
  }
  ?>

<?php
  if($_SESSION['type']=='womencell')
  {
    ?>
<div class="app-sidebar__user">
      <div>
        <p class="app-sidebar__user-designation">WELCOME WOMEN CELL</p>
        
      </div>
    </div>
    <li><a class="app-menu__item active" href="dashboard.php"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Dashboard</span></a></li>
    <li><a class="app-menu__item" href="registerdwomen.php"><i class="app-menu__icon fa fa-user"></i><span class="app-menu__label">Registerd Womens</span></a></li>
      <li><a class="app-menu__item" href="chatwithwomencell.php"><i class="app-menu__icon fa fa-female"></i><span class="app-menu__label">Chat With Women</span></a></li>
      <li><a class="app-menu__item" href="complaintpolice.php"><i class="app-menu__icon fa fa-user-secret"></i><span class="app-menu__label">Complaint to Police</span></a></li>
      <?php
  }
  ?>
    </ul>
  </aside>