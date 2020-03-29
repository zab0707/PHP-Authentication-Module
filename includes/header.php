<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="index.php"><img src="content/images/zab.jpg" width="50" height="50"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
                <a class="nav-link" href="index.php">Home<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">About Us</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Services</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Search</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">E-Resources</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Contact</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="login" href="#" onclick="if(this.text==='Login'){$('#loginForm').modal({'backdrop': 'static'});}if(this.text==='Logout'){$(document).ready(function () {$('#alert').find('.modal-title').text('Success');$('#alert').find('.modal-body').text('Successfully LoggedOut!!!');$('#alert').modal('show');});<?php session_destroy();?>}" data-toggle="modal" data-dismiss="modal">Login</a>
            </li>
        </ul>
    </div>
</nav>
<script type="text/javascript"></script>