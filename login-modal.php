<div class="modal fade" id="login-modal" role="dialog" >
    <div class="modal-dialog">
    <div class="modal-content">        
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h3>LOGIN</h3>
    </div>
        <div class="modal-body">
            <p class="text-warning" style="color: goldenrod"><i>Login to make a purchase</i></p>
                    <form method="post" action="login_submit.php">
                        <div class="form-group">
                            <label for="email">E-mail</label>
                            <input type="email" name="email" placeholder="E-mail" class="form-control" required pattern="[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$">
                        </div>
                        <div class="form-group">
                            <label for="pwd">Password</label>
                            <input type="password" name="pwd" placeholder="Password" class="form-control" required  pattern=".{6,}" title="Must contain at least 6 characters">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Login</button>
                        </div>
                        <div><p class="text-danger">
                            <?php
                            if(isset($_GET['error'])){
                                echo $_GET['error'];
                            }
                            ?>
                            </p>
                        </div>
                    </form>
                    <br/>
        </div>                    
        <div class="modal-footer">
            Don't have an account? <a href="signup.php">Register</a>
        </div>
    </div>
    </div>
</div>

