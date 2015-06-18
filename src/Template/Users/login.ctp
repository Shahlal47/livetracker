



<div class="col-md-4 col-md-offset-3">
    <div class="portlet light">
    <!-- BEGIN LOGIN FORM -->
<!--    <form class="login-form" action="#" method="post">-->
    <?= $this->Form->create() ?>
        <div class="portlet-title">
            <h3 class="form-title">Login to Your Account</h3>
        </div>

        <div class="portlet-body">

        <div class="form-group">
            <label class="control-label visible-ie8 visible-ie9">Username</label>
            <div class="input-icon">
                <i class="fa fa-user"></i>
                <input class="form-control placeholder-no-fix" type="text" autocomplete="off" placeholder="Username" name="username"/>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label visible-ie8 visible-ie9">Password</label>
            <div class="input-icon">
                <i class="fa fa-lock"></i>
                <input class="form-control placeholder-no-fix" type="password" autocomplete="off" placeholder="Password" name="password"/>
            </div>
        </div>
        <div class="form-actions">
            <label class="checkbox"><input type="checkbox" name="remember" value="1"/>Remember Me</label>
            <button type="submit" class="btn green-haze pull-right">Login<i class="m-icon-swapright m-icon-white"></i></button>
        </div>
        <div class="login-options">
            <h4>Or Login With</h4>
            <ul class="social-icons">
                <li><a class="facebook" data-original-title="facebook" href="#"></a></li>
                <li><a class="twitter" data-original-title="Twitter" href="#"></a></li>
                <li><a class="googleplus" data-original-title="Goole Plus" href="#"></a></li>
                <li><a class="linkedin" data-original-title="Linkedin" href="#"></a></li>
            </ul>
        </div>
        <hr>
        <div class="create-account">
            <p>You Don't Have an Account Yet?&nbsp;&nbsp;&nbsp;<a href="javascript:" id="register-btn" class="btn btn-success">Create an Account</a></p>
        </div>
<!--    </form>-->
    <?= $this->Form->end() ?>
    <!-- END LOGIN FORM -->
    </div>
</div>