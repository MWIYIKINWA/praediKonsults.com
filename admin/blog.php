<?php 

  include('assets/header.php');
  include('business/messages.php');

 $title = "";
 $body = "";
 $picture = "";
 $youtube = "";
 $id = "";

 $update_btn = false;

 
if (isset($_GET['edit_id'])) {

$id = $_GET['edit_id'];
$r = $blog->get_by_id($id) ;
$id = $r['id'];
$title = $r['title'];
$body = $r['body'];
$picture = $r['picture'];
$youtube = $r['youtube'];
 
$update_btn = true;

}
             ?>  

<div class="container">

   <div class="row text-center"><h2 class="fs-5 fw-bold mb-3">Blog</h2></div>
 
    <div class="row">

         <div class="col-12">


         <form class="" action="business/blog_inc.php" enctype="multipart/form-data" method="POST">
          <div class="mb-3">
            <input type="hidden" value="<?php echo $id; ?>" name="id">
            <input type="text" class="form-control" placeholder="Topic" name="title" value="<?php echo $title;;  ?>">
          </div>
          <div class="mb-3">
            <textarea type="text" class="form-control " rows="6" placeholder="Body" name="body"><?php echo $body; ?></textarea>
          </div>

          <div class="mb-3">
          <label class="label">Format: only images,gifs,videos size: 4mbs</label>
            <?php  if($update_btn == true): ?>
            <div class="mb-3">
              <img src="business/<?php echo $picture; ?>" style="width:200px; height:150px;">
            </div>
            <?php  endif; ?>
            <input type="file" class="form-control "  placeholder="Picture" name="picture">
          </div>

          <div class="mb-3">
            <input type="text" class="form-control"  placeholder="youtube link, optional" name="youtube" value="<?php echo $youtube;  ?>">
          </div>
          <div class="mb-3">
            <input type="" class="form-control"  placeholder="Author" name="author" value="<?php echo $user_name; ?>" disabled>
          </div>
          
          <?php  if($update_btn == true): ?>
          <button class=" mb-2 btn btn-lg rounded-3 btn-outline-warning" type="submit" name="update-blog">Update</button>
          <?php  else: ?>
          <button class=" mb-2 btn btn-lg rounded-3 btn-outline-dark" type="submit" name="blog">Post</button>
          <?php  endif; ?>
         
          <hr class="my-4">
        
      
        </form>

         </div>

    </div>
    <?php  
      $list = $blog->read();    
    ?>

    <div class="row">
    <table class="table table-striped table-hover">
  <thead>
    <tr>
      <th scope="col">Title</th>
      <th scope="col">Author</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
  <?php while($r = $list->fetch(PDO::FETCH_ASSOC)): ?>
    <tr>
      <th scope="row"><?php echo $r['title'] ?></th>
      <td><?php echo $r['author'] ?></td>
      <td><a class="text-warning mx-2" href="blog.php?edit_id=<?php echo $r['id']; ?>">Edit</a>
      <a class="text-danger mx-2" href="business/blog_inc.php?delete_id=<?php echo $r['id']; ?>">Delete</a>
    </td>
    </tr>
    <?php endwhile;  ?>
  </tbody>
</table>
    </div>


</div>

<?php include('assets/footer.php')  ?>     