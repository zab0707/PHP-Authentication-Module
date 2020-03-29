<div class="modal fade" id="loginForm" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form method="post">
                <div class="modal-header">
                    <h2 class="modal-title" id="exampleModalLabel">Login</h2>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group a">
                        <i class="fa fa-user icon"></i>
                        <input type="text" class="form-control" name="srn" placeholder="Enter SRN" onblur="validate(this.name,this.value);" required>
                    </div>
                    <div class="alert alert-danger" id="srnAlert" role="alert" style="display: none; width: 100%; font-size: small;">Invalid! please enter valid SRN.</div>
                    <div class="form-group a">
                        <i class="fa fa-key icon"></i>
                        <input type="password" class="form-control" name="password" placeholder="Enter Password"required>
                    </div>
                    <p>Don't have an account? <a href="#" onclick="$('#signUp').modal({'backdrop': 'static'});" data-toggle="modal" data-dismiss="modal">SignUp Here</a></p>
                </div>
                <div class="modal-footer">
                    <button type="submit" name="login" class="btn btn-primary btnL">Login</button>
                </div>
            </form>
        </div>
    </div>
</div>