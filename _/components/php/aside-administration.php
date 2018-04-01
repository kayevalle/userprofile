<?php $user_type = "alumni"; ?> 
<?php $user_level = "moderator"; ?> 
<aside class="w3-section">
	
	      <!-- Profile -->
	      <div class="w3-card w3-round w3-white">
	        <div class="w3-container w3-padding-16">
	         <p class="w3-center"><img src="images/avatar3.png" class="w3-circle" style="height:106px;width:106px" alt="Avatar"></p>
	         <p class=" w3-center upload-photo"><a href="#" class="w3-small">Upload new photo</a></p>
	         <hr>
	         <div class="w3-center">
	         <?php if (($user_type == "student") || ($user_type == "student_org_head")) { ?>
	          <p>Student Number</p>
	          <p>Course</p>
	          <p>Organization</p>
	          <?php } ?>

	          <?php if (($user_type == "alumni") || ($user_type == "alumni_board")) { ?>
	          <p>Course</p>
	          <p>Batch number</p>
	          <?php } ?>
	         
	         </div>
	        </div>
	      </div>
	      <br>

	      <?php if ($user_level=="user"){ ?>
	      student
	     <?php }else{ ?>

	      <div class="w3-card w3-round w3-yellow">
	      	<div class="w3-container">
	        <ul class="w3-ul aside-nav">

	          <?php if (($user_level == "org_head")||($user_level=="alumni_head")) { ?>
	          <li><a href="">Post announcement</a></li>
	          <li><a href="">Create event</a></li>
	          <?php } ?>

	          <?php if ($user_level=="alumni_head") { ?>
	          <li><a href="">Post alumni announcement</a></li>
	          <li><a href="">Create alumni event</a></li>
	          <li><a href="">Post job posting</a></li>
	          <?php } ?>

	          <?php if ($user_level == "moderator") { ?>
	          <li><a href="">Post announcement</a></li>
	          <li><a href="">Create event</a></li>
	          <li><a href="">Create news article</a></li>
	          <?php } ?>

	         
	        </ul>      
	        </div>
	      </div>
	      <br>

	     <?php } ?>
	      
	    

	<!-- <img src="images/avatar6.png" alt="Person" style="width:85%;margin:10px;margin-left:25px;" class="center">
	<h2 style="color:#EFC002;" class="text-center"><?php echo $result['email'] ?></h2>
	<div  class="sidebar">
		<ul class="nav nav-stacked nav-tabs">
		  <li><a href="#">Dashboard</a></li>
		  <li><a href="#">Announcements</a></li>
		  <li><a href="#">Alumnis</a></li>
		  <li><a href="#">News</a></li>
		  <li><a href="#">Events</a></li>
		  <li><a href="#">Users</a></li>

		</ul>
	</div> -->
	
</aside><!-- announcementpost-->


