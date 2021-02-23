<section class="jbseekersignup-form pt80 pb80">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="jbseekersignup-header">
        	<!-- <img src="../assets/upload/<?php echo $jbproviderdata->image ?>"> -->
          <!-- <h2><?php echo $jbseekerdata->email;  ?></h2> -->
          <!-- <p><?php echo $jbproviderdata->email;  ?></p> -->
        </div>
      </div>
      <div class="col-lg-12">
        <div class="jbseekersignupprofile-formheader">
          <h2>Update Job Post</h2>
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
          <form method="post" action="<?php echo base_url('provider_dashboard_controller/own_post_controller/view_own_post/update/'.$jbproviderdata->id); ?>">
            <h3>Update Job Post</h3>
            <div class="row">
              <div class="col-md-6">
                <div class="single-info">
                  <label  for="provider_name">Provider Name</label>
                  <input class="mb25" type="text" name="provider_name" value="<?php echo $jbproviderdata->provider_name; ?>">
                </div>
              </div>
              <div class="col-md-6">
                <div class="single-info">
                  <label for="email">email</label>
                  <input class="mb25" type="text" name="email"  value="<?php echo $jbproviderdata->email; ?>">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="single-info">
                  <label for="phone">phone</label>
                   <input class="mb25" type="text" name="phone"  value="<?php echo $jbproviderdata->phone; ?>">
                </div>
              </div>
              <div class="col-md-6">
                <div class="single-info">
                  <label for="job_position">Job Position</label>
                  <input class="mb25" type="text" name="job_position" value="<?php echo $jbproviderdata->job_position; ?>">
                </div>
              </div>
              <div class="col-md-6">
                <div class="single-info">
                  <label for="requirement">requirement</label>
                  <input class="mb25" maxlength="11" type="text" name="requirement"  value="<?php echo $jbproviderdata->requirement; ?>">
                </div>
              </div>
              <div class="col-md-6">
                <div class="single-info">
                  <label for="deadline">deadline</label>
                   <input class="mb25" type="age" name="deadline" value="<?php echo $jbproviderdata->deadline; ?>">
                </div>
              </div>
              <div class="col-md-6">
                <div class="single-info">
                  <label for="Available">Available</label>
                   <input class="mb25" type="age" name="available" value="<?php echo $jbproviderdata->available; ?>">
                </div>
              </div>
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