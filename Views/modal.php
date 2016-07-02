<div class="modal fade <?php echo $_SESSION['modal'] ?>">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h2 class="modal-title "><?php
                        if(isset($_SESSION['modal-action'])) {
                            echo $_SESSION['modal-action'];
                            unset($_SESSION['modal-action']);

                        }
                    ?> status</h2>
            </div>
            <div class="modal-body">
                <div style="text-align: center">
                    <?php
                    if(isset($_SESSION['register-message'])) {
                        echo $_SESSION['register-message'];
                        unset($_SESSION['register-message']);
                    } else {
                        echo $_SESSION['login-message'];
                        unset($_SESSION['login-message']);
                    }
                    ?>
                </div>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<script>

    $('.modal').modal('show');
    setTimeout(function(){
        window.location.replace('/IDK/');
    },3000);
        $('.modal').modal('show');
        setTimeout(function(){
            window.location.replace('/IDK/login');
        },3000);

</script>