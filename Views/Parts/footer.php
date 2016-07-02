</div>


<script>
    $(document).ready(function(){

        $('#home').on('click',function () {
            window.location.replace("/IDK/");
        });
        $('#reg').on('click',function () {
            window.location.replace("/IDK/register");
        });
        $('#log').on('click',function () {
            window.location.replace("/IDK/login");
        });

        $('#players').on('click',function () {
            window.location.replace("/IDK/players");
        });

        $('#add').on('click',function () {
            $('#add-form').load("/IDK/Views/add_player.php");
        });

        $(document).on('click','#delete',function () {
            $('#del-form').load("/IDK/Views/delete_player.php");
        });


        <?php
           if (isset($_POST['submit-btn'])) {
               $_SESSION['function']='add';
               header('Location:/IDK/players');
               unset($_POST['submit-btn']);
           }
             if (isset($_POST['del-btn'])) {
               $_SESSION['function']='delete';
               header('Location:/IDK/players');
               unset($_POST['del-btn']);
           }
       ?>
    });

</script>

</body>
</html>