<?php include('assets/header.php');
 include('business/messages.php');

 $name = "";
 $company = "";
 $picture = "";
 $id = "";
 $message = "";
 $contact = "";
 $email= "";

 $update_btn = false;

 
if (isset($_GET['edit_id'])) {

$id = $_GET['edit_id'];
$r = $testimonial->get_by_id($id) ;
$id = $r['id'];
$name = $r['name'];
$message = $r['message'];
$picture = $r['picture'];
$contact = $r['contact'];
$email = $r['email'];
$company = $r['company'];
 
$update_btn = true;

}
 
 ?>

<div class="container">

   <div class="row text-center"><h2 class="fs-5 fw-bold mb-3">Testimonial</h2></div>
 
    <div class="row">

         <div class="col-12">


         <form class="" action="business/testimonial_inc.php" enctype="multipart/form-data" method="POST">
          <div class="mb-3">
          <input type="hidden" name="id" value="<?php echo $id; ?>">
            <input type="text" class="form-control" name="name" placeholder="Name" value="<?php echo $name; ?>">
          </div>
          <div class="mb-3">
            <textarea type="text" class="form-control" name="message" placeholder="Message"><?php echo $message; ?></textarea>
          </div>
          <div class="mb-3">
          <?php  if($update_btn == true): ?>
            <div class="mb-3">
              <img src="business/<?php echo $picture; ?>" style="width:200px; height:150px;">
            </div>
            <?php  endif; ?>
            <input type="file" class="form-control" name="picture">
          </div>
          <div class="mb-3">
            <input type="text" class="form-control" name="company" placeholder="Company" value="<?php echo $company; ?>">
          </div>
          <div class="mb-3">
            <input type="text" class="form-control" name="contact" placeholder="Contact" value="<?php echo $contact; ?>">
          </div>
          <div class="mb-3">
            <input type="email" class="form-control" name="email" placeholder="Email" value="<?php echo $email; ?>">
          </div>
          <?php  if($update_btn == true): ?>
          <button class=" mb-2 btn btn-lg rounded-3 btn-outline-warning" type="submit" name="update-testimonial">Update</button>
          <?php  else: ?>
          <button class=" mb-2 btn btn-lg rounded-3 btn-outline-dark" type="submit" name="testimonial">Post</button>
          <?php  endif; ?>
         
          <hr class="my-4">
        
      
        </form>

         </div>

    </div>


    <?php  
      $list = $testimonial->read();    
    ?>

    <div class="row">
    <table class="table table-striped table-hover">
  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Company</th>
      <th scope="col">Picture</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
  <?php while($r = $list->fetch(PDO::FETCH_ASSOC)): ?>
    <tr>
      <th scope="row"><?php echo $r['name']; ?></th>
      <td><?php echo $r['company']; ?></td>
      <td><?php echo $r['contact']; ?></td>
      <td><a class="text-warning mx-2" href="testimonial.php?edit_id=<?php echo $r['id']; ?>">Edit</a>
      <a class="text-danger mx-2" href="business/testimonial_inc.php?delete_id=<?php echo $r['id'];?>">Delete</a>
    </td>
    </tr>
    <?php endwhile; ?>
  </tbody>
</table>
    </div>


</div>

<?php include('assets/footer.php')  ?>     