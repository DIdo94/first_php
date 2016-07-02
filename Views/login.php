
<div class="page-header">
    <h2>Login</h2>
</div>
<?php
    if(isset($_SESSION['name'])) {
        echo '<h2>You are already logged in!</h2>';
        $visibility='show';
    } else {
        echo '<h2>You are not logged in!</h2>';
        $visibility='hide';
    }
?>
<div id="logout-div"><form method="post" id="logout-form" class="<?php echo $visibility ?>">
        <input type="submit" value="Logout"  class=" btn btn-info " id="logout" name="logout">
    </form></div>
<form method="POST" id="login-form">
    <div class="form-group  col-md-3 col-md-offset-4">

       <label for="first">Username</label>  <input type="text" class="form-control" placeholder="Username" id="first" name="fname" aria-describedby="sizing-addon1">

    <label for="age">Password</label>  <input type="password" name="pass" id="age" class="form-control" placeholder="Password" aria-describedby="sizing-addon1">
        <br><input type="submit" value="Login" class="btn btn-info" id="login-btn">
    </div>
</form>

<?php
unset($_SESSION['login-message']);
if(isset($_POST['fname']) && $_POST['fname']!==''){
          $_SESSION['modal']='show';
          Requester::login();
    ?>

<?php    }
if(isset($_POST['logout'])){
    Requester::logout();
}
?>







