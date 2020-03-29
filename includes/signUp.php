<div class="modal fade" id="signUp" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form method="post" id="formSignUp" >
                <div class="modal-header">
                    <h2 class="modal-title" id="exampleModalLabel">Student Sign Up Form</h2>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group a">
                        <i class="fa fa-user icon"></i>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Enter Full Name" onblur="validate(this.name,this.value);" required>
                    </div>
                    <div class="alert alert-danger" id="nameAlert" role="alert" style="display: none; width: 100%; font-size: small;">Invalid! please enter valid Name</div>
                    <div class="form-group a">
                        <i class="fa fa-envelope icon"></i>
                        <input type="text" class="form-control" name="email" id="email" placeholder="Enter Email" onblur="validate(this.name,this.value);" required>
                    </div>
                    <div class="alert alert-danger" id="emailAlert" role="alert" style="display: none; width: 100%; font-size: small;">Invalid! please enter valid EmailID.</div>
                    <div class="form-group a">
                        <i class="fa fa-user-secret icon"></i>
                        <input type="text" class="form-control" name="srn" id="srn" placeholder="Enter SRN" onblur="validate(this.name,this.value);" required>
                    </div>
                    <div class="alert alert-danger" id="srnAlert" role="alert" style="display: none; width: 100%; font-size: small;">Invalid! please enter valid SRN.</div>
                    <div class="form-group a">
                        <i class="fa fa-key icon"></i>
                        <input type="password" class="form-control" name="nPassword" id="nPassword" placeholder="Enter New Password" onblur="validate(this.name,this.value);" required>
                    </div>
                    <div class="alert alert-danger" id="nPasswordAlert" role="alert" style="display: none; width: 100%; font-size: small;"><ul><li>The password must be 8 characters or more.</li><li> The password must contain at least : </li><ul><li>1 lowercase alphabetical character.</li><li>1 uppercase alphabetical character.</li><li>1 numeric character.</li><li>1 special character.</li></ul></ul></div>
                    <div class="form-group a">
                        <i class="fa fa-key icon"></i>
                        <input type="password" class="form-control" name="cPassword" id="cPassword" placeholder="Confirm Password" onblur="validate(this.name,this.value);" required>
                    </div>
                    <div class="alert alert-danger" id="cPasswordAlert" role="alert" style="display: none; width: 100%; font-size: small;">Password does not match.</div>
                    <p>Have an account? <a href="#"  onclick="$('#loginForm').modal({'backdrop': 'static'});" data-toggle="modal" data-dismiss="modal">Login Here</a></p>
                </div>
                <div class="modal-footer">
                    <button type="submit" name="signUp" id="btnSignUp" class="btn btn-primary btnL">Sign Up</button>
                </div>
            </form>
        </div>
    </div>
</div>

