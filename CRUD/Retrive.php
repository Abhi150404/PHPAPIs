
<!DOCTYPE html>
<html>
<head>
<script src="jquery.min.js"></script>
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
    <div class='col-lg-8'>
        <div class='card mt-4'>
            <div class='card-header pb-1 bg-success text-light'>
                <h5>Available User's Data</h5>
</div>
<div class='card-body table-responsive'>
                <table class='table table-bordered table-primary'>
                    <thead>
                        <th>User ID</th>
                        <th>User Name</th>
                        <th>Mobile No</th>
                        <th>Date of Birth</th>
                        <th>Password</th>
                        <th>Action</th>
                       
                    </thead>
<tbody>
    <?php
     $conn =new Mysqli('localhost','root','','abhishek');
 
    if($conn->connect_error){
        die($conn->connect_error);
    }
    else
    {
        $cmd= 'SELECT * FROM user_info';
        $result=$conn->query($cmd);
        while($rw=$result->fetch_assoc())
        {
            ?>
        
        <tr id='tbrow'>
        <td id='uid'><?php echo $rw['uid']; ?></td>
        <td id='uname'><?php echo $rw['u_name']; ?></td>

        <td id ='unum'><?php echo $rw['u_number']; ?></td>

        <td id = 'udob'><?php echo $rw['DOB']; ?></td>

        <td id='upass'><?php echo $rw['u_pwd']; ?></td>
        <td>
            <div class='btn btn-group btn-group-sm'>
                <a href='#' class='btn btn-primary'><i class='fa fa-user'></i></a>
                <a href='#' class='btn btn-dark'><i class='fa fa-edit'></i></a>
                <a href='delete.php?uid=<?php echo $rw['uid']?>' class='btn btn-danger'><i class='fa fa-trash'></i></a>
        </div>
        </td>

        </tr>
           <?php
           }
           
    }
    ?>
    </tbody>

</table>
</div><!--Col-lg-8-->
</div><!--card -->
</div><!-- card-body-->
</div><!-- Table-->
</body>
<script>
// Select all checkboxes functionality
$("#multiple").change(function(){
    if($("#multiple").prop("checked")){
         
    }
});
</script>
</html>