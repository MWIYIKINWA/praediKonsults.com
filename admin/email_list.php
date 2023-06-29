
<?php 
include('assets/header.php');
$email_list = $email->read_subscription();
?>  

<div class="container">

   <div class="row text-center"><h2 class="fs-5 fw-bold mb-3">Email List</h2></div>
        <div class="btn-group me-2 my-2">
            <button type="button" class="btn btn-sm btn-outline-secondary">SelectAll</button>
            <button type="button" class="btn btn-sm btn-outline-secondary">Add to mail</button>
          </div>
  
   <div class="row">
    <table class="table table-striped table-hover">
  <thead>
   
    <tr>
      <th scope="col">Email</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
  <?php while($list = $email_list->fetch(PDO::FETCH_ASSOC)){   ?>
    <tr>
      <th scope="row"><?php echo $list['email']; ?></th>
      <th><input type="checkbox" name="item" value="Item 1">
      <a class="text-danger mx-2" href="">Delete</a>
    </th>
    </tr>
    <?php } ?>
  </tbody>
</table>
    </div>
 
    <div class="row">

   

    <h5 class="fs-5 fw-bold mb-3 text-info">News Letter</h5>

         <div class="col-12">


         <form class="">
          <div class="mb-3">
            <textarea type="text" rows="4" class="form-control "  placeholder="Selected Emails"></textarea>
          </div>
          <div class="mb-3">
            <textarea type="text" rows="4" class="form-control "  placeholder="Type News Letter"></textarea>
          </div>
        
       
          <button class=" mb-2 btn btn-lg rounded-3 btn-outline-info" type="submit">Send</button>
         
          <hr class="my-4">
        
      
        </form>

         </div>

    </div>


   


</div>

<?php include('assets/footer.php')  ?>     