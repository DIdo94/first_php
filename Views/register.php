
<div class="page-header">
    <h2>Register</h2>
</div>

<form method="POST">
    <div class="form-group  col-md-3 col-md-offset-4">

        <label for="first">Username</label>  <input type="text" class="form-control" placeholder="Username" id="first" name="fname" aria-describedby="sizing-addon1">

        <label for="password">Password</label>  <input type="password" name="password" id="age" class="form-control" placeholder="Password" aria-describedby="sizing-addon1">
        <label for="age">Age</label>  <input type="password" name="age" id="age" class="form-control" placeholder="Password" aria-describedby="sizing-addon1">

        <br><input type="submit" value="Register" class="btn btn-info">
    </div>
</form>
<?php
if(isset($_POST['fname']) && $_POST['fname']!=='' && isset($_POST['password']) && $_POST['password']!==''){
Requester::register();
}
?>




