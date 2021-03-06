<section class="jbentrepreneursignup-area">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="jbseekersignup-content">
          <h2>Entrepreneur Registration</h2>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="jbentrepreneursignup-form pt80 pb80">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="jbentrepreneursignup-header">
          <h2>If we educate a boy,educate an individual,if we educate a<br>girl,we educate a family and a whole nation.</h2>
        </div>
      </div>
      <div class="col-lg-12">
        <div class="jbentrepreneursignup-formheader">
          <h2>Registration</h2>
          <p>Make sure every info you provide is your's own and absolutely valid.</p>
        </div>
      </div>
      <div class="col-lg-12">
         <?php 
          if ($this->session->flashdata('message')) {
            ?>
            <div class="alert alert-success" role="alert">
              <?php 
                echo $this->session->flashdata('message');
               ?>
            </div>

            <?php
          }

        ?>
        <div class="entrepreneurform">
          <form method="post" action="<?php echo base_url("entrepreneur_dashboard_controller/Register/validation"); ?>" enctype="multipart/form-data">
            <h3>Tell us about yourself</h3>
            <div class="row">
              <div class="col-md-6">
                <div class="single-info">
                  <label  for="FirstName">First Name</label>
                  <input class="mb25" type="text" name="firstName" placeholder="Enter your first name" required>
                </div>
              </div>
              <div class="col-md-6">
                <div class="single-info">
                  <label for="LastName">Last Name</label>
                  <input class="mb25" type="text" name="lastName" placeholder="Enter your last name" required>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="single-info">
                  <label for="UserName">User Name</label>
                   <input class="mb25" type="text" name="userName" placeholder="Enter your username" required>
                </div>
              </div>
              <div class="col-md-6">
                <div class="single-info">
                  <label for="Password">Password</label>
                  <input class="mb25" type="password" name="password" placeholder="Enter your password" required>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="single-info">
                  <label for="Email">Email</label>
                  <input class="mb25" type="Email" name="email" placeholder="Enter your email" required>
                </div>
              </div>
              <div class="col-md-6">
                <div class="single-info">
                  <label for="Phone">Phone</label>
                  <input class="mb25" maxlength="11" type="text" name="phone" placeholder="Enter your number" required>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="single-info">
                  <label for="Age">Age</label>
                   <input class="mb25" type="age" name="age" placeholder="Enter your age" required>
                </div>
              </div>
              <div class="col-md-6">
                <div class="single-info">
                  <label for="Currentaddress">Current Address</label>
                   <input class="mb25" type="text" name="Currentaddress" placeholder="Enter current address" required>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="single-info">
                  <label for="Permanentaddress">Permanent Address</label>
                   <input class="mb25" type="text" name="Permanentaddress" placeholder="Enter parmanent address" required>
                </div>
              </div>
              <div class="col-md-6">
                <div class="single-info">
                  <label for="Image">Image</label>
                  <input class="mb25" type="file" name="image">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                  <div class="button-design">
                     <button type="button" class="cancelbtn">Cancel</button>
                     <input type="submit" value="Submit">
                  </div>
                </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>