<section class="jbseekersignup-form pt80 pb80">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="jbseekersignup-header">
        	<img src="../assets/photoofEntre/<?php echo $entrepreneurdata->image ?>">
          <!-- <h2><?php echo $jbseekerdata->email;  ?></h2> -->
          <p><?php echo $entrepreneurdata->email;  ?></p>
        </div>
      </div>
      <div class="col-lg-12">
        <div class="jbseekersignupprofile-formheader">
          <h2>Update</h2>
          <p>Make sure every info you provide is your's own and absolutely valid.</p>
          <?php 
                if ($this->session->flashdata('success')) {
                  ?>
                  <div class="alert alert-success" role="alert">
                    <?php 
                      echo $this->session->flashdata('success');
                     ?>
                  </div>

                  <?php
                }

              ?>
        </div>
      </div>
      <div class="col-lg-12">
        <div class="jbseekerform">
          <form method="post" action="<?php echo base_url('entrepreneur_dashboard_controller/entrepreneur_profile_controller/update/'.$entrepreneurdata->id); ?>">
            <h3>Update Your Data</h3>
            <div class="row">
              <div class="col-md-6">
                <div class="single-info">
                  <label  for="FirstName">First Name</label>
                  <input class="mb25" type="text" name="firstName" placeholder="Enter your first name" value="<?php echo $entrepreneurdata->first_name; ?>">
                </div>
              </div>
              <div class="col-md-6">
                <div class="single-info">
                  <label for="LastName">Last Name</label>
                  <input class="mb25" type="text" name="lastName" placeholder="Enter your last name" value="<?php echo $entrepreneurdata->last_name; ?>">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="single-info">
                  <label for="UserName">User Name</label>
                   <input class="mb25" type="text" name="userName" placeholder="Enter your username" value="<?php echo $entrepreneurdata->username; ?>">
                </div>
              </div>
             <!--  <div class="col-md-6">
                <div class="single-info">
                  <label for="Password">Password</label>
                  <input class="mb25" type="password" name="password" placeholder="Enter your password" >
                </div>
              </div> -->
              <div class="col-md-6">
                <div class="single-info">
                  <label for="Email">Email</label>
                  <input class="mb25" type="Email" name="email" placeholder="Enter your email" value="<?php echo $entrepreneurdata->email; ?>">
                </div>
              </div>
              <div class="col-md-6">
                <div class="single-info">
                  <label for="Phone">Phone</label>
                  <input class="mb25" maxlength="11" type="text" name="phone" placeholder="Enter your number" value="<?php echo $entrepreneurdata->phone; ?>">
                </div>
              </div>
              <div class="col-md-6">
                <div class="single-info">
                  <label for="Age">Age</label>
                   <input class="mb25" type="age" name="age" placeholder="Enter your age" value="<?php echo $entrepreneurdata->age; ?>">
                </div>
              </div>
              <div class="col-md-6">
                <div class="single-info">
                  <label for="Currentaddress">Current Address</label>
                   <input class="mb25" type="text" name="Currentaddress" placeholder="Enter current address" value="<?php echo $entrepreneurdata->current_address; ?>">
                </div>
              </div>
              <div class="col-md-6">
                <div class="single-info">
                  <label for="Permanentaddress">Permanent Address</label>
                   <input class="mb25" type="text" name="Permanentaddress" placeholder="Enter parmanent address" value="<?php echo $entrepreneurdata->permanent_address; ?>">
                </div>
              </div>
              <!-- <div class="col-md-6">
                <div class="single-info">
                  <label for="skill">Skill</label>
                   <input class="mb25" type="text" name="skill" placeholder="Enter your skill" value="<?php echo $entrepreneurdata->skill; ?>">
                </div>
              </div> -->
              <!-- <div class="col-md-6">
                <div class="single-info">
                  <label for="Image">Image</label> 
                  <input class="mb25" type="file" name="image1" >
                </div>
              </div> -->
            </div>
            <div class="row">
              <div class="col-md-12">
                  <div class="button-design">
                     <!-- <button type="button" class="cancelbtn">Cancel</button> -->
                     <input type="submit" value="Update">
                  </div>
                </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>