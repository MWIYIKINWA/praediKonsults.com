
<?php include('assets/header.php');
         include('../include/classes/database.php');
    ?>  

<div class="container">

   <div class="row text-center"><h2 class="fs-5 fw-bold mb-3">My Profile</h2></div>
 
    <div class="row">

         <div class="col-12">

         <img class="my-4" src="business/<?php echo $user_picture; ?>" alt="" width="80" height="80" style="border-radius :50px;"> 

         <div class="mb-2">
            <p class = "text-warning"><?php echo $user_name; ?> </p>
          </div>
          <div class="mb-2">  
            <p class="text-warning"><?php echo $user_email; ?> </p>
          </div>
          <div class="mb-2">
          </div>
          <div class="mb-2">
            <p class = "text-warning"><?php echo $user_phone; ?> </p>
          </div>


          <form action="business/login_inc.php" enctype="multipart/form-data" method="post">

          <div class="mb-2">
             <input type="hidden" class="form-control" name="id" value="<?php echo $user_id ?>">
            <label class="label">Change profile picture</label>
            <input type="file" class="form-control"  name="picture">
          </div>
       
          <button class=" mb-2 btn btn-lg rounded-3 btn-outline-dark" name="change_pic" type="submit">change</button>
           <hr class="my-4">
         </form>

         </div>

    </div>


  


</div>

<?php include('assets/footer.php')  ?>     