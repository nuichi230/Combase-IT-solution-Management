         
           <form action="" method="post" autocomplete="off" class="sign-up-form">
              <div class="logo">
                <img src="./img/logo.png" alt="combase IT Management" />
                <a href="landing.php" class="logo-word"><h4>Combase IT Management</h4></a>
              </div>

              <div class="heading">
                <h2>Get Started</h2>
                <h6>Already have an account?</h6>
                <a href="#" class="toggle">Sign in</a>
              </div>

              <div class="actual-form">
                <form action="" method="post">
                <div class="input-wrap">
                  <input
                    type="text"
                    name="name"
                    id="name-id"
                    minlength="4"
                    class="input-field"
                    autocomplete="off"
                    required
                  />
                  <label for="name">Name</label>
                </div>

                <div class="input-wrap">
                  <input
                    type="email"
                    name="email"
                    class="input-field"
                    id="email-id"
                    autocomplete="off"
                    required
                  />
                  <label for="email">Email</label>
                </div>

                <div class="input-wrap">
                  <input
                    type="password"
                    name="password"
                    minlength="5"
                    class="input-field"
                    id="password-id"
                    autocomplete="off"
                    required
                  />
                  <label for="password">Password</label>
                </div>

                <div class="input-wrap">
                   <input 
                   type="password" 
                   name="cpassword"
                   class="input-field"
                   required 
                  />
                  <label for="cpassword">confirm Password</label>
                </div>

                <div class="input-wrap">
                  <select class="custom-select" id="role-id" name="user_type">
                    <option>Select a Role</option>
                    <option value="user" name="user">User</option>
                    <option value="admin" name="admin">Admin</option>
                  </select>
                </div>

                <input type="submit" name="register_submit" value="Sign Up" class="sign-btn" />

                <p class="text">
                  By signing up, I agree to the
                  <a href="#">Terms of Services</a> and
                  <a href="#">Privacy Policy</a>
                </p>
               </form>
              </div>
            </form>
          </div>