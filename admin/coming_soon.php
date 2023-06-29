
<?php include('assets/header.php');
       include('business/messages.php');

       $title = "";
       $details = "";
       $poster = "";
       $date = "";
       $time = "";
       $id = "";

       $update_btn = false;

       
if (isset($_GET['edit_id'])) {
    
    $id = $_GET['edit_id'];
    $r = $coming_soon->get_by_id($id);
    $title = $r['title'];
    $id = $r['id'];
    $details = $r['details'];
    $poster = $r['poster'];
    $date = $r['date'];
    $time = $r['time'];

    $update_btn = true;
    
 }
    ?>  



<div class="container">

   <div class="row text-center"><h2 class="fs-5 fw-bold mb-3">Coming Soon</h2></div>
 
    <div class="row">

         <div class="col-12">


         <form class="" action="business/coming_soon_inc.php" enctype="multipart/form-data" method="POST">

          <div class="mb-3">
            <input type="hidden" class="form-control" placeholder="Title" name="title" value="<?php  echo $id; ?>">
            <input type="text" class="form-control" placeholder="Title" name="title" value="<?php echo $title; ?>">
          </div>

          <div class="mb-3">
            <textarea type="text" class="form-control"  placeholder="Few details" name="details" value=""><?php echo $details; ?></textarea>
          </div>

          <div class="mb-3 form-group">
          <label class="label">Format: only images,gifs,videos size: 4mbs</label>
            <?php  if($update_btn == true): ?>
            <div class="mb-3">
              <img src="business/<?php echo $poster; ?>" style="width:200px; height:150px;">
            </div>
            <?php  endif; ?>
            <input type="file" class="form-control"  placeholder="Poster" name="poster">
          </div>

          <div class="mb-3">
            <input type="date" class="form-control"  name="date" value="<?php echo $date; ?>" >
          </div>

          <div class="mb-3">
            <input type="time" class="form-control" name="time" value="<?php echo $time; ?>">
          </div>
       
          <?php  if($update_btn == true): ?>
          <button class=" mb-2 btn btn-lg rounded-3 btn-outline-warning" type="submit" name="update-soon">Update</button>
          <?php  else: ?>
          <button class=" mb-2 btn btn-lg rounded-3 btn-outline-dark" type="submit" name="soon">Post</button>
          <?php  endif; ?>
        
      
        </form>

         </div>

    </div>


    <?php  
      $list = $coming_soon->read();    
    ?>

    <div class="row mt-5">
    <table class="table table-striped table-hover">
  <thead>
    <tr>
      <th scope="col">Title</th>
      <th scope="col">Date</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
    <?php while($r = $list->fetch(PDO::FETCH_ASSOC)){ ?>
    <tr>
      <th scope="row"><?php echo $r['title'] ?></th>
      <td><?php echo $r['date'] ?></td>
      <td><a class="text-warning mx-2" href="coming_soon.php?edit_id=<?php echo $r['id']; ?>">Edit</a>
      <a class="text-danger mx-2" href="business/coming_soon_inc.php?delete_id=<?php echo $r['id']; ?>">Delete</a>
    </td>
    </tr>
    <?php } ?>
  </tbody>
</table>
    </div>


</div>

<?php include('assets/footer.php');  ?>     