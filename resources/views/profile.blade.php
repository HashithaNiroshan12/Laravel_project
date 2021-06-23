<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profile</title>

        <!-- Bootstrap CSS CDN -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
        <!-- Our Custom CSS -->
        <link rel="stylesheet" href="{{ asset('css/style.css') }}" type="text/css">
        
    
        <!-- Font Awesome JS -->
        <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
        <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
          
    
            <link href=" {{ asset('fontawesome/css/all.css') }} " rel="stylesheet">
<style>
    .wrapper {
    display: flex;
    width: 100%;
    align-items: stretch;
}
</style>
        </head>
<body id="page-top">
    
    <!-- Page Wrapper -->
    <div class="wrapper">

        
        <!-- Content Wrapper -->
        {{-- <div id="content-wrapper" class="d-flex flex-column"> --}}
            <x-sidebar />
            <!-- Main Content -->
            <div id="content">
                
                <!-- Topbar -->
          <x-navbar />
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">Phelobotomist Profile</h1>
     <form method="post"  name="adminprofile" >



  <div class="row">

                        <div class="col-lg-8">

                            <!-- Basic Card Example -->
                            <div class="card shadow mb-4">

                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Registration Date: </h6>
                                </div>
                                <div class="card-body">
     <div class="form-group">
                            <label>Phelobotomist Name</label>
           <input type="text" class="form-control" name="adminname" value="" required='true'>
                                        </div>

                        <div class="form-group">
                            <label>User Name</label>
                       <input type="text" class="form-control" name="username" value="" readonly='true'> 
                                        </div>
                                        
<div class="form-group">
<label>Email Id</label>
<input type="email" class="form-control" name="email" value="" required='true'>
</div>

<div class="form-group">
<label>Contact Number</label>
<input type="text" class="form-control" name="mobilenumber" value="" required='true' maxlength='10'>
</div>
                        

        <div class="form-group">
                                 <input type="submit" class="btn btn-primary btn-user btn-block" name="update" id="update" value="Update">                           
                             </div>                                        

                                </div>
                            </div>

                        </div>

               

                    </div>
</form>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

          

        {{-- </div> --}}
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->

          


   <!-- jQuery CDN - Slim version (=without AJAX) -->
   <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
   <!-- Popper.JS -->
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
   <!-- Bootstrap JS -->
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>


</body>
</html>