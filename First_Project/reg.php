<!DOCTYPE html>
<html>
    <html>
    <head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

        <!-- jQuery library -->
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
        
        <!-- Popper JS -->
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        
        <!-- Latest compiled JavaScript -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

    </head>
    <body>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4">
                    <div class="card" mt-4>
                        <div class="card-header pb-2 bg-primary text-light">
                            <h4>User Registration</h4>
                        </div>
                        <div class="card-body">
                            <form method="post" action="db.php" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label>User Name</label>
                                    <input type="text" name="uname" class="form-control" placeholder="Enter User Name" required>
                                </div>
                                <div class="form-group">
                                    <label>Date Of Birth</label>
                                    <input type="date" name="dob" class="form-control" required>
                                </div>
                                <div class="custom-control custom-checkbox">
                <input type="checkbox" name="M" class="custom-control-input" id="choice">
                <label class="custom-control-label"  for="choice">Male</label>
            </div>
            <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="choice1">
                <label class="custom-control-label"  for="choice1">Female</label>
            </div>
            <div class="form-group">
           <label>Upload File</label>
          <input type="file" name="myfiles" class="form-control" required>
         </div>

                                <button type="submit" class="btn btn-success btn-block">Register</button>
                                <?php
                                if(isset($_GET['token'])){
                                    $ab=$_GET['token'];
                                    if($ab=='87654567854'){ ?>
                                        $ab==$_GET['token'];
                                        <div class='alert alert success mt-1'>
                                            <span>User data has been stored in developer's cookie..</span> 
                                    <div class='alert alert-success mt-2'>
                                        <strong>success</strong>
                                        <span>User successfully Registerd..</span>
                                        
                                    <?php }

                                }
                                ?>


                                
                               
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class ="col-lg-8">
                <div class = "card mt-4">
                    <div class="card-header pb-1 bg-primary text-light">
                        <h5> Avaiable user's data</h5>
                    </div>
                    <div class ="card-body table-responsive">
                        <table class='table table-bordered table-primary'>
                            <thead>
                                <th>User ID</th>
                                <th>Image</th>
                                <th>User Name</th>
                                <th>Date Of Birth</th>
                                <th>Gender</th>
                                <th>Action</th>
                            </thead>
                            <tbody>
                                <?php
                               require_once('Connection.php');
                               if($conn->connect_error){
                                   die($conn->connect_error);
                               } 
                               else{
                               
                            $cmd = 'SELECT * FROM adhar_card;';

                                $result = $conn->query($cmd);
                                while($resn = $result->fetch_assoc())
                               {
                                if($resn['file_ref']==''|| $resn['file_ref']==null){
                                    $img_path='files/avatar.png';
                                 }
                                 else{
                                    $img_path='files/'.$resn['file_ref'];
                                 }
                                ?>
                                <tr>
                                <td>
                                    <?php echo $resn['u_id'];?>
                               </td>
                                <td>
                                    <img src='<?php echo $img_path?>' style='height:100px;'/>
                               </td>
                             
                               <td>
                                    <?php echo $resn['name'];?>
                               </td>
                               <td>
                                    <?php echo $resn['dob'];?>
                               </td>
                               <td>
                                    <?php echo $resn['Gender'];?>
                               </td>
                               <td>
                                      <div class ='btn-gruop-sam'>

                                        <a href ='#' class ='bt btn-dark'><i class = 'fa fa-user'></i></a>
                                        <a href ='update.php?stu_id=<?php echo $rw['u_id'];?>' class ='bt btn-primary'><i class = 'fa fa-edit'></i></i></a>
                                        <a href ='delete_data.php?stu_id=<?php echo $rw['u_id'];?>' class ='bt btn-danger'><i class = 'fa fa-trash'></i></i></a>
                               </div>
                               </td>
                               </tr>
                               <?php }
                               }
                               ?>                                                             
                            </tbody>

                    </div>

                </div>
            </div>
        </div>
    </body>
    <script>
        let data = '<?php echo $_GET['token']; ?>';
        if (data=='87654567854'){
            setTimeout(() => {
               window.location='reg.php'; 
            }, 4000);
        }
        </script>
</html>