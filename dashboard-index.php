<?php

session_start();

if($_SESSION['login_session'] != "admin"){

    header("Location: index.php");
    die();

};

?>

<?php include('dashboard-asset/head-template.php');?>

<?php

if(isset($_GET['status']) == true){
    
    $status = $_GET['status'];

    if($status == "done"){

        echo "<div class='alert alert-success' role='alert'>
                 Data inserted!.
              </div>";

    }else if($status == "failed"){

        echo "<div class='alert alert-danger' role='alert'>
        Data IS NOT inserted!.
     </div>";
     
    }
}

?>

<div class="container-fluid">

<form method="POST" action="insert-website-data.php">
    <div class="form-group row">
        <label for="staticEmail" class="col-sm-2 col-form-label">Website Name</label>
        <div class="col-sm-10">
        <input style="border:1px solid black" type="text" name="website_name" class="form-control-plaintext">
        </div>
    </div>

    <div class="form-group row">
        <label for="staticEmail" class="col-sm-2 col-form-label">Website URL</label>
        <div class="col-sm-10">
        <input style="border:1px solid black" type="text" name="website_url"  class="form-control-plaintext">
        </div>
    </div>

    <div class="form-group row">
        <label for="staticEmail" class="col-sm-2 col-form-label">Description</label>
        <div class="col-sm-10">
        <input style="border:1px solid black" type="text" name="description"  class="form-control-plaintext">
        </div>
    </div>

    <input type="submit" class="btn btn-primary btn-lg btn-block">

</form>
      
</div>

<?php include('dashboard-asset/foot-template.php');?>

