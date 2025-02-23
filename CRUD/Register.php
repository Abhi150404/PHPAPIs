
<!DOCTYPE html>
<html>
<head>
 

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
    <div class='container-fluid'>
        <div class='row'>
            <div class='col-lg-4'>
                <div class='card mt-4'>
                    <div class='card-header pb-2 bg-primary text-light'>
                        <h4>User Registration</h4>
</div>
<div class='card-body'>
    <form method='post' action='save_data.php'>
        <div class = 'form-group'>
            <label>User Name</label>
            <input type='text' name ='uname' class='form-control' placeholder='Enter User Name' Required/>
</div> 
<div class = 'form-group'>
            <label>Mobile No</label>
            <input type='text' name ='mobile' class='form-control' placeholder='Enter Mobile No' Required/>
</div> 
<div class = 'form-group'>
            <label>Date Of Birth</label>
            <input type='date' name ='dob' class='form-control' placeholder='Enter DOB' Required/>
</div>
<button type='submit' class='btn btn-primary btn-block'>Register</button>
<?php
if (isset($_GET['token'])){
    $ab = $_GET['token'];
    if($ab=='87654567854'){ ?>
    <div class='alert alert-success mt-3'>
        <strong>success</strong>
        <span>User successfully Registerd..</span>
    </div>


<?php }
}
?>

</form>
</div>
</div>
</div>
</div>
</div>


</body>
<script>
    let data = '<?php echo $_GET['token'];?>';
    if(data=='87654567854'){
        setTimeout(() => {    
        window.location='Register.php'}, 900);
    }
</script>
</html>
