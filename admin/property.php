
<?php include('assets/header.php');
         include('business/messages.php');
    ?>  

<div class="container">

   <div class="row text-center"><h2 class="fs-5 fw-bold mb-3">Property</h2></div>
 
    <div class="row">

         <div class="col-12">


    <form action="business/property_inc.php" enctype="multipart/form-data" method="POST">
          <div class="mb-3">
            <input type="text" class="form-control" placeholder="Name" name="name">
          </div>
          <div class="mb-3">
            <textarea type="text" class="form-control"  placeholder="Description" name="description"></textarea>
          </div>
          
            <div class="form-check mb-3">
              <div class="row">
              <div class="col-3">
                  <input type="checkbox" name="sc" class="form-check-input" value="Self Contained">
                  <label class="form-check-label" >Self Contained</label>
                </div>
              <div class="col-3">
                <input type="checkbox" name="ac" class="form-check-input" value="Air Conditioning">
                  <label class="form-check-label" >Air Conditioning</label>
                </div>
                <div class="col-3">
                <input type="checkbox" name="carp" class="form-check-input" value="Car Parking">
                  <label class="form-check-label" >Car Parking</label>
                </div>
                <div class="col-3">
                <input type="checkbox" name="as" class="form-check-input" value="Alarm System">
                  <label class="form-check-label" >Alarm System</label>
                </div>
                <div class="col-3">
                <input type="checkbox" name="dm" class="form-check-input" value="Security">
                  <label class="form-check-label" >Security</label>
                </div>
                <div class="col-3">
                <input type="checkbox" name="gr" class="form-check-input" value="Garage">
                  <label class="form-check-label" >Garage</label>
                </div>
                <div class="col-3">
                <input type="checkbox" name="fp" class="form-check-input" value="Fire Place">
                  <label class="form-check-label" >Fire Place</label>
                </div>
                <div class="col-3">
                <input type="checkbox" name="hs" class="form-check-input" value="Heating System">
                  <label class="form-check-label" >Heating System</label>
                </div>
                <div class="col-3">
                  <input type="checkbox" name="gd" class="form-check-input" value="Garden">
                  <label class="form-check-label" >Garden</label>
                </div>
                <div class="col-3">
                  <input type="checkbox" name="hc" class="form-check-input" value="High Ceiling">
                  <label class="form-check-label" >High Ceiling</label>
                </div>
                <div class="col-3">
                  <input type="checkbox" name="bl" class="form-check-input" value="Balcon">
                  <label class="form-check-label" >Balcon</label>
                </div>
                <div class="col-3">
                  <input type="checkbox" name="lm" class="form-check-input" value="Laundy room">
                  <label class="form-check-label" >Laundry Machine</label>
                </div>
                <div class="col-3">
                  <input type="checkbox" name="swp" class="form-check-input" value="Swimming Pool">
                  <label class="form-check-label" >Swimming Pool</label>
                </div>
                <div class="col-3">
                  <input type="checkbox" name="rc" class="form-check-input" value="Road access">
                  <label class="form-check-label" >Main Road access</label>
                </div>
               
                
              </div>
            </div>
          
      <div class="row">
      <div class="col-4 mb-3">
            <select name="type" class="form-control">
            <option  value="type" selected disabled>Type</option>
              <option  value="Residential">Resdential</option>
              <option  value="Commercial">Commercial</option>
              <option  value="Residential and Comercial">Residential/Commercial</option>
            </select>
          </div>
          <div class="col-4 mb-3">
            <select name="for" class="form-control">
            <option   selected disabled>For</option>
              <option  value="Sale">Sale</option>
              <option  value="Rent">Rent</option>
            </select>
          </div>
      <div class="col-4 mb-3">
            <select name="category" class="form-control">
            <option  value="category" selected disabled>Category</option>
              <option  value="Home">Home</option>
              <option  value="Apartment">Apartment</option>
              <option  value="Duplex">Duplex</option>
              <option  value="Business">Business</option>
              <option  value="Island">Island</option>
              <option  value="Land">Recreational</option>
              <option  value="Land">Land</option>
            </select>
          </div>
      </div>
          <div class="mb-3">
            <input type="file" class="form-control w-50"  placeholder="Picture" name="picture[]" multiple>
          </div>

          <!-- features -->
          <div class="mb-3 row">
             <div class="col-3 mb-2">
               <input type="number" class="form-control"  placeholder=" Livingrooms" name="lv">
             </div>
             <div class="col-3 mb-2">
               <input type="number" class="form-control"  placeholder="Bedrooms" name="bdr">
             </div>
             <div class="col-3 mb-2">
               <input type="number" class="form-control"  placeholder="Bathrooms" name="btr">
             </div>
             <div class="col-3 mb-2">
               <input type="number" class="form-control"  placeholder="Kitchens" name="ktn">
             </div>
             <div class="col-3 mb-2">
               <input type="number" class="form-control"  placeholder="Pools" name="pl">
             </div>
             <div class="col-3 mb-2">
               <input type="number" class="form-control"  placeholder="Toilet" name="tt">
             </div>
          </div>
         
          <div class="mb-3">
            <input type="text" class="form-control"  placeholder="Surface Area" name="area">
          </div>
          <div class="mb-3">
            <input type="text" class="form-control"  placeholder="Cost" name="cost">
          </div>
          <div class="mb-3">
            <input type="text" class="form-control"  placeholder="Type Address" name="address">
          </div>
          <div class="mb-3">
            <input type="text" class="form-control"  placeholder="Location Link" name="map_link">
          </div>
          <button class="mb-2 btn btn-lg rounded-3 btn-outline-info" type="submit" name="property">Post</button>
         
          <hr class="my-4">
        
      
        </form>

         </div>

    </div>
    <?php  
      $list = $property->read();    
    ?>

    <div class="row">
    <table class="table table-striped table-hover">
  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Address</th>
      <th scope="col">Cost (UGx)</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
  <?php while($r = $list->fetch(PDO::FETCH_ASSOC)): ?>
    <tr>
      <th scope="row"><?php echo $r['name'] ?></th>
      <td><?php echo $r['address'] ?></td>
      <td><?php echo $r['cost'] ?></td>
      <td>
      <a class="text-danger mx-2" href="business/property_inc.php?delete_id=<?php echo $r['id']; ?>">Delete</a>
    </td>
    </tr>
    <?php endwhile; ?>
  </tbody>
</table>
    </div>


</div>

<?php include('assets/footer.php')  ?>     