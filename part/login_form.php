

<div class="container" style="height: 200px;"></div>
<div class="container">
    <div class="row clearfix">
        <div class="col-md-4 column">
        </div>
        <div class="col-md-4 column" id='form_div'>
            <form class="form-horizontal" role="form" id="form" action="sign_in.php" method="post">
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label" id="email">邮箱</label>
                    <div class="col-sm-10">
                        <input class="form-control" id="inputEmail3" type="email" name = "user_email"/>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">密码</label>
                    <div class="col-sm-10">
                        <input class="form-control" id="inputPassword3" type="password" name = "user_pass" />
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <div class="checkbox">
                            <label><input type="checkbox" name = "remember" />记住密码</label>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-default" id="submit">登录</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-md-4 column" id = 'EREX'>
        </div>
    </div>
</div>