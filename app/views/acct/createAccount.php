<!--
TODO:
- Reroute all account creation forms to php servicing page.
- Create database so that we can move on with this thing!
-->

<div class="container">
    <div class="row">
    <div class="col-md-4 col-md-offset-4">
    <div class="login-panel panel panel-default">
        <div class="panel-heading"><h3 class="text-center">Create Account</h3></div>
        <div class="panel-body">
            <form role="form" />
                <fieldset>
                    <p>Caretaker Information</p>
                    <div class="form-group"><input class="form-control" placeholder="First Name" name="first_name" type="text" autofocus="" /></div>
                    <div class="form-group"><input class="form-control" placeholder="Last Name" name="last_name" type="text" value="" /></div>

                    <p>Account Information</p>
                    <div class="form-group"><input class="form-control" placeholder="Email (Username)" name="email" type="email" autofocus="" /></div>
                    <div class="form-group"><input class="form-control" placeholder="Password" name="pass" type="password" value="" /></div>
                    <div class="form-group"><input class="form-control" placeholder="Password Confirm" name="pass_confirm" type="password" value="" /></div>

                    <p>Device Link (?)</p>
                    <div class="form-group"><input class="form-control" placeholder="Link ID" name="linkID" type="text" value="" /></div>

                    <!-- Change this to a button or input when using this as a form -->
                    <a href="" class="btn btn-lg btn-primary btn-block">Create Account</a>
                </fieldset>
            </form>
        </div>
    </div>
    </div>
    </div>
</div>