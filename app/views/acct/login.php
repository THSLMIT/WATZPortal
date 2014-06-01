<div class="container">
    <div class="row">
    <div class="col-md-4 col-md-offset-4">

    <div class="login-panel panel panel-default">

        <div class="panel-heading">
            <h3 class="panel-title">Please Sign In</h3>
        </div>
        
        <div class="panel-body text-center">
            
            <?php echo $data['error']; ?>

            <form id="login" method="POST" action="" />
                <div class="form-group">
                    <input class="form-control" placeholder="E-mail" name="email" type="email" autofocus="" />
                </div>
                
                <div class="form-group">
                    <input class="form-control" placeholder="Password" name="password" type="password" value="" />
                </div>
                
                <input class="btn btn-lg btn-primary btn-block" name="submit" type="submit" value="Login" />
            </form>

            <br />

            <p><a href="">Forgot</a> or <a href="">Setup a New Account</a></p>
        </div>

    </div>
    </div>
    </div>
</div>
