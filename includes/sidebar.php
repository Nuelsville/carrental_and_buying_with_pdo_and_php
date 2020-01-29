<?php 
$email=$_SESSION['login'];
$sql ="SELECT * FROM tblusers WHERE EmailId=:email ";
$query= $dbh -> prepare($sql);
$query-> bindParam(':email', $email, PDO::PARAM_STR);
$query-> execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
if($query->rowCount() > 0)
{
foreach($results as $result)
	{ ?>
  <?php if(($_SESSION['login']) && ($result->type==1)){?>
<div class="profile_nav">
          <ul>
            <li><a href="profile.php">Profile Settings</a></li>
              <li><a href="update-password.php">Update Password</a></li>
            <li><a href="my-booking.php">My Booking</a></li>
            <li><a href="my-order.php">My Order</a></li>
            <li><a href="post-testimonial.php">Post a Testimonial</a></li>
               <li><a href="my-testimonials.php">My Testimonials</a></li>
            <li><a href="logout.php">Sign Out</a></li>
          </ul>
        </div>
      </div>
      <?php } else if (($_SESSION['login']) && ($result->type==2)) { ?>
        <div class="profile_nav">
          <ul>
            <li><a href="profile.php">Profile Settings</a></li>
              <li><a href="update-password.php">Update Password</a></li>
            <li><a href="my-vehicles.php">My Rented Cars</a></li>
            <li><a href="sold-vehicles.php">My Vehicles</a></li>
            <li><a href="post-testimonial.php">Post a Testimonial</a></li>
               <li><a href="my-testimonials.php">My Testimonials</a></li>
            <li><a href="logout.php">Sign Out</a></li>
          </ul>
        </div>
      </div>
      <?php }  else { ?>
        <div class="profile_nav">
          <ul>
            <li><a href="profile.php">Profile Settings</a></li>
              <li><a href="update-password.php">Update Password</a></li>
            <li><a href="my-booking.php">My Booking</a></li>
            <li><a href="my-order.php">My Order</a></li>
            <li><a href="post-testimonial.php">Post a Testimonial</a></li>
               <li><a href="my-testimonials.php">My Testimonials</a></li>
            <li><a href="logout.php">Sign Out</a></li>
          </ul>
        </div>
      </div>
      <?php }}}?>