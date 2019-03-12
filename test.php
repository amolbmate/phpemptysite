<?php
session_start();
if(!isset($_SESSION['adminid'])){
    // header("Location:login.php");

}
?>
<!DOCTYPE html>
<html>

<?php include "css.php"; ?>
<body class="gray-bg">
<style type="text/css">
    .btn-primary {
    color: #fff;
    background-color: #141f72;
    border-color: #141f72;
}
</style>
    <div class="middle-box text-center loginscreen   animated fadeInDown">
        <div>
            <div>

                <!-- <h1 class="logo-name">IN+</h1> -->

                <!-- @if (session('err')) -->
                    <div class="alert alert-danger alert-dismissable">
                                <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
                                <!-- {{session('err')}} -->
                                </a>.
                            </div>
                <!-- @endif -->
            </div>
            <h3>Register to IN+</h3>
            <p>Create account to see it in action.</p>
            <form class="m-t" role="form" action="{{route('adminlogin')}}" method="post">
               
                
       <div class="form-group">
                   
                    <input type="text" class="form-control" placeholder="Username" required="" name="username">
                </div>
                <div class="form-group">
                   
                    <input type="password" class="form-control" placeholder="Password" required="" name="password">
                </div>
             
                <button type="submit" class="btn btn-primary block full-width m-b">Login</button>

                <!-- <p class="text-muted text-center"><small>Already have an account?</small></p> -->
                <a class="btn btn-sm btn-white btn-block" href="{{route('register')}}">Register</a>
        
            </form>
            <p class="m-t"> <small>Inspinia we app framework base on Bootstrap 3 &copy; 2014</small> </p>
        </div>
    </div>

 
<?php include "js.php"; ?>
</body>

</html>
