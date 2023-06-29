   <?php include('assets/header.php');
         include('../include/classes/database.php');
    ?>  
   
     <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h5 mb-0 text-gray-800"><strong>HELLO</strong> <?php echo $user_name; ?>! </h1>
                        <!-- <a href="#" class="d-none d-sm-inline-block btn text-light shadow-sm" style="background-color: ;"><i
                                class="fas fa-download fa-sm text-white"></i> Generate Report</a> -->
                    </div>

                    <!-- Content Row -->
                    <div class="row">

                         <!-- Earnings (Monthly) Card Example -->
                         <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="font-weight-bold fs-6  mb-1" style="color:">
                                                Subscribers</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $email->count(); ?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                         <!-- Earnings (Monthly) Card Example -->
                         <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="font-weight-bold fs-6  mb-1" style="color: rgb(20, 219, 20);">
                                                Posted Blogs</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $blog->count(); ?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                       

                        
                         <!-- Card -->
                         <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="font-weight-bold fs-6  mb-1" style="color:">
                                            Admins</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $user->count(); ?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Card -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="font-weight-bold fs-6  mb-1" style="color:">
                                            Active Listings</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $property->count(); ?> </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                
                    </div>

      
                </div>

<?php include('assets/footer.php')  ?>                
