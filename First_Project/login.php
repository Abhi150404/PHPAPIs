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
                            <h4>User Login</h4>
                        </div>
                        <div class="card-body">
                            <form method="post" action="db.php">
                                <div class="form-group">
                                    <label>User Name</label>
                                    <input type="text" name="uname" class="form-control" placeholder="Enter User Name" required>
                                </div>
                                <div class="form-group">
                                    <label>Date Of Birth</label>
                                    <input type="date" name="dob" class="form-control" required>
                                </div>
                                <div class="custom-control custom-checkbox">
               
                                <button type="submit" class="btn btn-success btn-block">LogIn</button>
                               

                                
                                


                                
                               
                            </form>
                        </div>
                    </div>
                </div>
            </div>
           

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