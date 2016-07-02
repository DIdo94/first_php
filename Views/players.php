
<h2>Players</h2>
<?php
    if(!isset($_SESSION['name'])){
       echo '<h2 class="jumbotron col-md-6 col-md-offset-3">Login First to see the players!!!</h2>';
        return;
    }
?>
<div class="col-md-8 col-md-offset-2">
<table class="table table-bordered">
    <thead class="thead-default">
    <tr>
        <th>Name</th>
        <th>Age</th>
        <th>Height</th>
    </tr>
    </thead>
    <tbody>
<?php
    if(isset($_SESSION['name'])) {
        foreach ($_SESSION['players'] as $player) {
            echo '<tr>';
            foreach ($player as $value) {
                echo "<td>{$value}</td>";
            }
            echo '</tr>';
        }
    }
?>
    </tbody>
</table>
 <input type="button" value="Add a player" id="add" class="form-control btn btn-info">
    <div id="add-form"></div>
    <span>
        <?php
            if(isset($_SESSION['message'])){
                echo $_SESSION['message'];
                unset( $_SESSION['message']);
            }
        ?>
    </span>
    <?php
        if($_SESSION['name']==='Dido'){
            echo '<input type="button" value="Delete a player" name="delete" id="delete" class="form-control btn btn-danger">';

    }
?>
 <p id="del-form"></p>
</div>


<script>
    $('.modal').modal('show');
</script>
