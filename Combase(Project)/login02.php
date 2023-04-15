
            <form action="" method="post" autocomplete="off" class="sign-in-form">
              <div class="logo">
                <img src="./img/logo.png" alt="Combase IT Management" />
                <a href="landing.php" class="logo-word"><h4>Combase IT Management</h4></a>
              </div>

              <div class="heading">
                <h2>Welcome Back</h2>
                <h6>Not registred yet?</h6>
                <a href="#" class="toggle">Sign up</a>
              </div>

              <div class="actual-form">
                <div class="input-wrap">
                  <input
                    type="email"
                    name="email"
                    id="email-id"
                    minlength="4"
                    class="input-field"
                    autocomplete="off"
                    required
                  />
                  <label>Email</label>
                </div>

                <div class="input-wrap">
                  <input
                    type="password"
                    name="password"
                    id="password-id"
                    minlength="5"
                    class="input-field"
                    autocomplete="off"
                    required
                  />
                  <label>Password</label>
                </div>

                
                <!-- <div class="input-wrap">
                  <select class="custom-select" id="user_admin" name="user_type">
                    <option value="">Select a Role</option>
                    <option value="user" name="user">User</option>
                    <option value="admin" name="admin">Admin</option>
                  </select>
                  <span class="custom-arrow"></span>
                </div> -->


                <input type="submit" name="login_submit" value="Sign In" class="sign-btn" />

                <p class="text">
                  Forgotten your password or you login datails?
                  <a href="#">Get help</a> signing in
                </p>
              </form>
              </div>
            </form>