<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TestDetails</title>

    
      <!-- Bootstrap CSS CDN -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
  <!-- Our Custom CSS -->
  <link rel="stylesheet" href="{{ asset('css/style.css') }}" type="text/css">
  

  <!-- Font Awesome JS -->
  <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
  <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
    

      <link href=" {{ asset('fontawesome/css/all.css') }} " rel="stylesheet"> 
</head>
<body id="page-top">

    <!-- Page Wrapper -->
    <div class="wrapper">
        <x-sidebar />
        <!-- Content Wrapper -->
       

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <x-navbar />
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">Test Details# order id</h1>
<div class="row">

<!-- personal information --->
                        <div class="col-lg-6">

                            <!-- Basic Card Example -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Personal Information</h6>
                                </div>
                                <div class="card-body">
   
                                    <table class="table table-bordered"  width="100%" cellspacing="0">
                                        <tr>
                                        <th>Full Name</th> 
                                        <td>Saman Kumara</td>
                                        </tr>
                                    
                                         <tr>
                                        <th>Mobile Number</th> 
                                        <td>0787878787</td>
                                        </tr>
                                    
                                         <tr>
                                        <th>DOB (Date of Birth)</th> 
                                        <td>1998-9-7</td>
                                        </tr>
                                    
                                    
                                         <tr>
                                        <th>NIC</th> 
                                        <td>89789797v</td>
                                        </tr>
                                    
                                         <tr>
                                        <th>Full Address</th> 
                                        <td>Temple road, galle</td>
                                        </tr>
                                    
                                        <tr>
                                        <th>City</th> 
                                        <td>Hikkaduwa</td>
                                        </tr>
                                    
                                        <tr>
                                        <th>Profile Reg Date</th> 
                                        <td></td>
                                        </tr>
                                     </table>
                                    

        
                                    
                                </div>
                            </div>
                        </div>

<!-- Test Information --->
                         <div class="col-lg-6">

                            <!-- Basic Card Example -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Test Information</h6>
                                </div>
                                <div class="card-body">

 <table class="table table-bordered"  bordercolor="red" width="100%" cellspacing="0">
    <tr>
    <th>Order Number</th> 
    <td>1</td>
    </tr>

    <tr>
    <th>Test Type</th> 
    <td>PCR</td>
    </tr>


    <tr>
    <th>Time Slot</th> 
    <td>2.25</td>
    </tr>

 <tr>
    <th>Report Status</th> 
    <td>PEnding</td>
    </tr>


  <tr>
    <th>Assign To</th> 
    <td>kumara</td>
    </tr>

    <tr>
    <th>Assigned Date</th> 
    <td>202048</td>
    </tr>

    <tr>
    <th>Report Delivered Time</th> 
    <td>20.48 </td>
    </tr>


</table>
                        
            
            {{-- <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#takeaction">Take Action</button> --}}
           
            <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
    Take Action
  </button>
  
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel"> Take Action</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          ...
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>
                                </div>
                            </div>

                        </div>
                    </div>
                


<!-- Test Tracking History --->




</form>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

          

        
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

   <!-- jQuery CDN - Slim version (=without AJAX) -->
   <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
   <!-- Popper.JS -->
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
   <!-- Bootstrap JS -->
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

<script type="text/javascript">

  //For report file
  $('#reportfile').hide();
  $(document).ready(function(){
  $('#status').change(function(){
  if($('#status').val()=='Delivered')
  {
  $('#reportfile').show();
  jQuery("#report").prop('required',true);  
  }
  else{
  $('#reportfile').hide();
  }
})}) 
</script>
</body>
</html>