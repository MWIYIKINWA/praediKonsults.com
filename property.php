<?php  include('assets/header.php'); ?>
        <!-- Start Bradcaump area -->
        <div class="ptb--10 ht__bradcaump__area" data--black__overlay="6" style="background: rgba(0, 0, 0, 0) url(assets/images-s/p17.jpg) no-repeat scroll center center / cover ;">
            <div class="ht__bradcaump__wrap">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="bradcaump__inner text-center">
                                <h2 class="bradcaump-title">PROPERTY</h2>
                             
                            </div>
                        </div>
                    </div>
                    <div class="row mt--10">
                    <div class="col-xs-12">
                        <div class="newsletter__wrap">
                            <h2 class="title__line" style="color:white;"><span class="text--theme">SEARCH</span></h2>
                            
                            <div class="newsletter__form">
                                <div class="input__box">
                                    <div id="mc_embed_signup">
                                  
                                        <form action="#" method="post">
                                            <div  class="htc__news__inner">
                                                 <div class="search_units">
                                                  <input type="text" placeholder="Max Amount" class="form-control" style="width:150px; margin-right:2px;  margin-top:2px;">
                                                  <input type="text" placeholder="Min Amount" class="form-control"  style="width:150px; margin-right:2px;  margin-top:2px;">
                                                  <input type="text" placeholder="search by locality, city or town" class="form-control"  style="width:300px; margin-right:2px;  margin-top:2px;">
                                                 </div>
                                                 </div>
                                                 <div class="search_units">
                                                 <select class="form-control"  name="property">
                                                 <option  selected disabled>Choose by category</option>
                                                    <option>Home</option>
                                                    <option>Apartment</option>
                                                    <option>Duplex</option>
                                                    <option>Business</option>
                                                    <option>Island</option>
                                                    <option>Land</option>
                                                    </select>
                                                 </div>
                                                 <div class="search_units">
                                                   <button class="search_btn">Search</button>
                                                 </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>        
                            </div>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
        <!-- End Bradcaump area -->

      <?php  $list = $property->read();  ?>
    

        <!-- Start Latest Project Area -->
        <section class="htc__latest__project__area ptb--50 bg__white">
            <div class="container">
                <div class="row">
                    <div class="htc__latest__project__wrap clearfix">
                                               <!-- Start Single Project -->
                <?php while($r = $list->fetch(PDO::FETCH_ASSOC)): ?>
                <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12 pb--50">
                            <div class="project foo">
                                <div class="project__thumb">
                                    <a href="property-single.php?view_id=<?php echo $r['id'] ?>">
                                    <?php 
                                    $p_id = $r['p_id'];
                                    $pics = $property->read_pics($p_id);
                                      ?>
                                      <?php while($p = $pics->fetch(PDO::FETCH_ASSOC)): ?>
                                        <div class="property_pic">
                                          <div> <img src="admin/business/<?php echo $p['pic']; ?>" alt="project image" style="height: 350px; width:100%;"></div>
                                        </div>
                                        <?php endwhile; ?>
                                    </a>
                                    <div class="project__hover__info ">
                                                <div class=" prop_icons">
                                                <p><i class="fas fa-bed" style="margin-right:10px; color:#f05454; font-size:18px;"></i> <?php echo $r['bedrooms'] ?>   <strong>   Bed rooms</strong></p>
                                                <p><i class="fas fa-kitchen-set" style="margin-right:10px; color:#f05454; font-size:18px;"></i> <?php echo $r['kitchens'] ?>  <strong>   Kitchens</strong></p>
                                                <p><i class="fas fa-bathtub" style="margin-right:10px; color:#f05454; font-size:18px;"></i> <?php echo $r['bathrooms'] ?>  <strong>   Bath rooms</strong></p>
                                                <p><i class="fas fa-swimming-pool" style="margin-right:10px; color:#f05454; font-size:18px;"></i> <?php echo $r['pools'] ?>   <strong>   Swimming Pools</strong></p>
                                                
                                                </div>
                                            </div>
                                    <div class="blog__details">
                                       <span class="purpose"><?php echo $r['for'] ?></span>
                                       <h2><?php echo $r['name'] ?></h2>
                                       <h4><?php echo $r['cost'] ?></h4>
                                       <p><i class="fas fa-map-marker-alt" style="margin-right:10px;"></i><?php echo $r['address'] ?></p>
                                        <div class="blog__btn">
                                        <a class="btn" href="property-single.php?view_id=<?php echo $r['id'] ?>">View<i class=""></i></a>
                                      </div>
                                  </div>
                              
                                </div>
                            </div>
                        </div>
                            <?php endwhile; ?>
                        <!-- End Single Project -->
                        <!-- Start Single Project -->
                        <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12 pb--50">
                            <div class="project foo">
                                <div class="project__thumb">
                                    <a href="property-single.php">
                                        <img src="assets/images-s//p14.jpg" alt="project image" style="height: 350px; width:100%;">
                                    </a>
                                    <div class="project__hover__info ">
                                                <div class=" prop_icons">
                                                <p><i class="fas fa-bed" style="margin-right:10px; color:#f05454; font-size:18px;"></i> 2 <strong>Bed rooms</strong></p>
                                                <p><i class="fas fa-kitchen-set" style="margin-right:10px; color:#f05454; font-size:18px;"></i> 1 <strong>Kitchens</strong></p>
                                                <p><i class="fas fa-bathtub" style="margin-right:10px; color:#f05454; font-size:18px;"></i> 4 <strong>Bath rooms</strong></p>
                                                <p><i class="fas fa-swimming-pool" style="margin-right:10px; color:#f05454; font-size:18px;"></i> 1 <strong>Swimming Pools</strong></p>
                                                
                                                </div>
                                            </div>
                                    <div class="blog__details">
                                       <span class="purpose">Sale</span>
                                       <h2>Muyenga apartments</h2>
                                       <h4>7,8000,000 UGX</h4>
                                       <p><i class="fas fa-map-marker-alt" style="margin-right:10px;"></i>Muyenga, Kampala</p>
                                        <div class="blog__btn">
                                        <a class="btn" href="property-single.php">View<i class=""></i></a>
                                      </div>
                                  </div>
                              
                                </div>
                            </div>
                        </div>
                        <!-- End Single Project -->

                          <!-- Start Single Project -->
                          <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12 pb--50">
                            <div class="project foo">
                                <div class="project__thumb">
                                    <a href="property-single.php">
                                        <img src="assets/images-s/rent2.jpg" alt="project image" style="height: 350px; width:100%;">
                                    </a>
                                    <div class="project__hover__info ">
                                                <div class=" prop_icons">
                                                <p><i class="fas fa-bed" style="margin-right:10px; color:#f05454; font-size:18px;"></></i> 2 <strong>Bed rooms</strong></p>
                                                <p><i class="fas fa-kitchen-set" style="margin-right:10px; color:#f05454; font-size:18px;"></></i> 1 <strong>Kitchens</strong></p>
                                                <p><i class="fas fa-bathtub" style="margin-right:10px; color:#f05454; font-size:18px;"></></i> 4 <strong>Bath rooms</strong></p>
                                                <p><i class="fas fa-swimming-pool" style="margin-right:10px; color:#f05454; font-size:18px;"></></i> 1 <strong>Swimming Pools</strong></p>
                                                
                                                </div>
                                            </div>
                                    <div class="blog__details">
                                       <span class="purpose">Rent</span>
                                       <h2>Muyenga apartments</h2>
                                       <h4>7,8000,000 UGX</h4>
                                       <p><i class="fas fa-map-marker-alt" style="margin-right:10px;"></i>Muyenga, Kampala</p>
                                        <div class="blog__btn">
                                        <a class="btn" href="property-single.php">View<i class=""></i></a>
                                      </div>
                                  </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Project -->

                          <!-- Start Single Project -->
                          <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12 pb--50">
                            <div class="project foo">
                                <div class="project__thumb">
                                    <a href="property-single.php">
                                        <img src="assets/images-s/p14.jpg" alt="project image" style="height: 350px; width:100%;">
                                    </a>
                                    <div class="project__hover__info ">
                                                <div class=" prop_icons">
                                                <p><i class="fas fa-bed" style="margin-right:10px; color:#f05454; font-size:18px;"></></i> 2 <strong>Bed rooms</strong></p>
                                                <p><i class="fas fa-kitchen-set" style="margin-right:10px; color:#f05454; font-size:18px;"></></i> 1 <strong>Kitchens</strong></p>
                                                <p><i class="fas fa-bathtub" style="margin-right:10px; color:#f05454; font-size:18px;"></></i> 4 <strong>Bath rooms</strong></p>
                                                <p><i class="fas fa-swimming-pool" style="margin-right:10px; color:#f05454; font-size:18px;"></></i> 1 <strong>Swimming Pools</strong></p>
                                                
                                                </div>
                                            </div>
                                    <div class="blog__details">
                                       <span class="purpose">Rent</span>
                                       <h2>Muyenga apartments</h2>
                                       <h4>7,8000,000 UGX</h4>
                                       <p><i class="fas fa-map-marker-alt" style="margin-right:10px;"></i>Muyenga, Kampala</p>
                                        <div class="blog__btn">
                                        <a class="btn" href="property-single.php">View<i class=""></i></a>
                                      </div>
                                  </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Project -->
                        
                        
   
                     
                    </div>
                </div>

                <div class="row">
                    <div style="margin-top: 18px;">
                        <a style="background-color:black;" class="htc__btn" href="#">Click for more</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Latest Project Area -->
      
        <?php  include('assets/footer.php'); ?>



</html>