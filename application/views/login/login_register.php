    <section class="section-height-800 breadcrumb-modern rd-parallax context-dark bg-gray-darkest text-lg-left">
          <div data-speed="0.2" data-type="media" data-url="<?php echo PATH; ?>images/backgrounds/background-01-1920x900.jpg" class="rd-parallax-layer"></div>
          <div data-speed="0" data-type="html" class="rd-parallax-layer">
            <div class="bg-primary-chathams-blue-reverse">
              <div class="shell section-top-57 section-bottom-30 section-md-top-210 section-lg-top-260">
                <div class="veil reveal-md-block">
                  <h1 class="text-bold">Login/Register</h1>
                </div>
                <ul class="list-inline list-inline-icon list-inline-icon-type-1 list-inline-icon-extra-small list-inline-icon-white p offset-top-30 offset-md-top-40 offset-lg-top-125">
                  <li><a href="<?php echo base_url();?>index.php/Welcome/index" class="text-white">Home</a></li>
                  <li><a href="#" class="text-white">Pages</a></li>
                  <li>Login/Register
                  </li>
                </ul>
              </div>
            </div>
          </div>
    </section>
  </header>
</div>
<html lang="en" class="wide wow-animation smoothscroll scrollTo">
  <div class="page text-center">
      <!-- Page Contents-->
    <main class="page-content">
        <!-- Login and Register-->
        <section class="section-top-90 section-bottom-90 section-md-top-82 section-md-bottom-300 section-md-111 text-sm-left">
          <div class="shell">
            <div class="range range-xs-center range-md-left">
              <div class="cell-xs-10 cell-sm-8 cell-md-6 cell-lg-4">
                <!-- Responsive-tabs-->
                <div data-type="horizontal" class="responsive-tabs responsive-tabs-classic horizontal">
                  <ul data-group="tabs-group-default" class="resp-tabs-list tabs-1 text-center tabs-group-default">
                    <li>Login</li>
                    <li>Register</li>
                  </ul>
                  <div data-group="tabs-group-default" class="resp-tabs-container text-sm-left tabs-group-default">
                    <div>
                      <!-- RD Mailform-->
                      <form action="<?php echo site_url('index.php/auth/login') ?>" method="post" >
                        <div class="form-group form-group-label-outside">
                          
                          <input id="username" type="email" name="username" placeholder= "Enter Username (E-mail)" data-constraints="@Email @Required" class="form-control">
                        </div>
                        <div class="form-group form-group-label-outside offset-top-20">
                          
                          <input id="password" type="password" name="password" placeholder= "Password" data-constraints="@Required" class="form-control">
                        </div>
                        <div class="form-group form-group-label-outside offset-top-20">
                          <select name="role" class="form-control">
                            <option>Select Role</option>
                            <option>Admin</option>
                            <option>User</option>
                          </select>
                        </div>
                        <div class="offset-top-15 offset-sm-top-30 text-center text-md-left">
                          <h6 style="color : red;"><?php if($Error != "NULL") echo $Error;?></h6><br>
                          <div class="reveal-xs-inline-block text-middle">
                          <?php if($Error != "NULL") echo $Error;?>
                            <button type="submit" class="btn btn-ripe-lemon">sign in</button>
                          </div>
                          <div class="reveal-xs-inline-block inset-xs-left-15 offset-top-15 offset-sm-top-0">
                            <div class="reveal-xs-inline-block text-middle">
                              <p class="text-gray">or enter with</p>
                            </div>
                            <div class="reveal-xs-inline-block inset-xs-left-20 text-middle offset-top-10 offset-xs-top-0">
                              <ul class="list-inline list-inline-2 inset-left-0">
                                <li><a href="https://www.facebook.com" target="_blank" class="icon icon-xxs icon-silver-filled icon-circle fa fa-facebook"></a></li>
                                <li><a href="https://twitter.com/login?lang=en" target="_blank" class="icon icon-xxs icon-silver-filled icon-circle fa fa-twitter"></a></li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </form>
                    </div>
                    <div>
                      <!-- RD Mailform-->
                      <form action="<?php echo site_url('index.php/auth/register');?>" method="post">
                        <div class="form-group form-group-label-outside">
                          <label for="fname" class="form-label form-label-outside text-dark">First-Name</label>
                          <input id="fname" type="text" name="fname" data-constraints="@Required" class="form-control" required>
                        </div>
                        <div class="form-group form-group-label-outside">
                          <label for="lname" class="form-label form-label-outside text-dark">Last-Name</label>
                          <input id="lname" type="text" name="lname" data-constraints="@Required" class="form-control" required>
                        </div>
                         <div class="form-group form-group-label-outside">
                          <label for="phone" class="form-label form-label-outside text-dark">Contact #</label>
                          <input id="phone" type="text" name="phone" data-constraints="@Required" class="form-control" required>
                        </div>

                        <div class="form-group form-group-label-outside">
                          <label for="cnic" class="form-label form-label-outside text-dark">CNIC</label>
                          <input id="cnic" type="text" name="cnic" data-constraints="@Required" class="form-control" required>
                        </div>
                        <div class="form-group form-group-label-outside">
                          <label for="dob" class="form-label form-label-outside text-dark">Date of Birth</label>
                          <input id="dob" type="date" name="dob" data-constraints="@Required" class="form-control" required>
                        </div>
                        <div class="form-group form-group-label-outside">
                          <label for="address" class="form-label form-label-outside text-dark">Address</label>
                          <input id="address" type="text" name="address" data-constraints="@Required" class="form-control">
                        </div>
                        
                        <div class="form-group form-group-label-outside">
                          <label for="email" class="form-label form-label-outside text-dark">E-mail Address</label>
                          <input id="email" type="email" name="email" data-constraints="@Email @Required" class="form-control" required>
                        </div>
                        <!--<div class="form-group form-group-label-outside">
                          <label for="image" class="form-label form-label-outside text-dark">Image</label>
                          <input type="text" class="form-control">
                        </div>-->
                    
                        
                        <div class="form-group form-group-label-outside">
                          <label for="password" class="form-label form-label-outside text-dark">Password</label>
                          <input id="password" type="password" name="password" data-constraints="@Required" class="form-control" required>
                        </div>
                        <div class="form-group form-group-label-outside">
                          <label for="r_password" class="form-label form-label-outside text-dark">Repeat Password</label>
                          <input id="r_password" type="password" name="r_password" data-constraints="@Required" class="form-control" required>
                        </div>
                        <div class="form-group offset-top-15 text-center text-md-left">
                          <label class="checkbox-inline">
                            <input name="register-radio" value="checkbox-1" type="checkbox" class="checkbox-custom"><span class="small p"><span class="small">I agree with the <a href="<?php echo site_url('index.php/footer/privacy') ?>" class="text-primary">Terms of use</a></span></span><span>.</span>
                          </label>
                        </div>
                        <div class="offset-top-15 offset-sm-top-20 text-center text-md-left">
                          <button type="submit" class="btn btn-ripe-lemon">Sign Up</button>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
    </main>
  </div>
</html>
 