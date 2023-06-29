 
 <?php include('assets/form-head.php'); ?>  

 <?php include('business/messages.php'); ?> 
 
        <form action="business/signup_inc.php" method="post">
          <div class="form-floating">
            <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" name="email">
            <label for="floatingInput">Email address</label>
          </div>
          <div class="form-floating mt-2">
            <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="pwd">
            <label for="floatingPassword">Password</label>
          </div>
          <div class="form-floating">
            <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com" name="name">
            <label for="floatingInput">Full name</label>
          </div>
          <div class="form-floating mt-2">
            <input type="text" class="form-control" id="floatingPassword" placeholder="Phone" name="phone">
            <label for="floatingPassword">Phone number</label>
          </div>
      
          <button class="w-100 btn btn-lg btn-outline-dark my-3" type="submit" style="background-color:;" name="sign_in" >Sign up</button>
          <p class="mt-5 mb-3 text-muted">&copy; <script>var date = new Date();  document.write(date.getFullYear()) </script></p>
          <p class="small my-2">You have an account? <a href="login.php">Login</a></p>

        </form>
     
 <?php include('assets/form-footer.php'); ?>       


