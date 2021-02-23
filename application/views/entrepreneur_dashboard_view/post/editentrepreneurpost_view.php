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
          <h2>Update Entrepreneur Post</h2>
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
          <form method="post" action="<?php echo base_url('entrepreneur_dashboard_controller/own_post_controller/view_own_post/update/'.$jbproviderdata->id); ?>">
            <h3>Update Entrepreneur Post</h3>
            <div class="row">
              <div class="col-md-6">
                <div class="single-info">
                  <label  for="entrepreneur_name">Entrepreneur Name</label>
                  <input class="mb25" type="text" name="entrepreneur_name" value="<?php echo $jbproviderdata->entrepreneur_name; ?>">
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
                  <label for="product_name">Product Name</label>
                  <input class="mb25" type="text" name="product_name" value="<?php echo $jbproviderdata->product_name; ?>">
                </div>
              </div>
              <div class="col-md-6">
                <div class="single-info">
                  <label for="product_details">Product Details</label>
                  <input class="mb25"  type="text" name="product_details"  value="<?php echo $jbproviderdata->product_details; ?>">
                </div>
              </div>
              <div class="col-md-6">
                <div class="single-info">
                  <label for="price">price</label>
                   <input class="mb25" type="text" name="price" value="<?php echo $jbproviderdata->price; ?>">
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
</section>_view