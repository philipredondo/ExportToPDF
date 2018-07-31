<script src="js/jquery.min.js"></script>
<link href="css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css"></link>
<script src="js/bootstrap.min.js"></script>
<link href="css/font-awesome.min.css" rel="stylesheet">
<link href="css/isolated-bootstrap.min.css" rel="stylesheet">
<style>
.navbar{
    background: #0c73cc !important;
}

.dropdown{
    border-radius:0;
    border:0;
}
.dropdown-menu{
    background: #0c73cc;
    border:0;
    top:80%;
    border-radius:0px 0px 5px 5px;
}
.dropdown-item:hover{
    background:#085ca5;
    color:#fff;
}
.dropdown-menu a{
    color:#fff;
} 
.navbar .nav-item .nav-link{
    color:#eee !important; 
    
}
.navbar .nav-item .nav-link:hover .navbar .nav-item .nav-link{
    color:red !important;
    
}
</style>
<!------ Include the above in your HEAD tag ---------->



<div class="collapse navbar-collapse" id="navbarTogglerDemo03">
<a class="navbar-brand" href="#"><img src="img/Epson-Logo.jpg" style="width:100px"/></a>
 
<nav class="navbar navbar-expand-sm navbar-light bg-light" >
  
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Contact us</a>
      </li>
      <li class="nav-item dropdown dmenu">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        Dropdown link
      </a>
      <div class="dropdown-menu sm-menu">
        <a class="dropdown-item" href="#">Link 1</a>
        <a class="dropdown-item" href="#">Link 2</a>
        <a class="dropdown-item" href="#">Link 3</a>
      </div>
    </li>
     <li class="nav-item dropdown dmenu">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        Dropdown link
      </a>
      <div class="dropdown-menu sm-menu">
        <a class="dropdown-item" href="#">Link 1</a>
        <a class="dropdown-item" href="#">Link 2</a>
        <a class="dropdown-item" href="#">Link 3</a>
        <a class="dropdown-item" href="#">Link 4</a>
        <a class="dropdown-item" href="#">Link 5</a>
        <a class="dropdown-item" href="#">Link 6</a>
      </div>
    </li>
    </ul>
 
</nav>

</div>
<div class="row">
    <div class="col-lg-12">
        <button class="navbar-toggler buttonclick float-right" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
		&nbsp;&nbsp;<i class="fa fa-bars fa-2x"></i>
		</button>
    </div>
</div>
<br/>
<div class="bootstrap">
<div class="container-fluid">
<div class="row">
		<div class="col-lg-6">
			<div class="card">
			  <div class="card-header bg-info">Header</div><!--.bg-primary, .bg-success, .bg-info, .bg-warning, .bg-danger, .bg-secondary, .bg-dark and .bg-light-->
			  <div class="card-body">
				<form action="/action_page.php">
				  <div class="form-group">
					<label for="email">Email address:</label>
					<input type="email" class="form-control form-control" id="email"><!--yung 2nd na form control can change to ->.form-control-sm or .form-control-lg-->
				  </div>
				  <div class="form-group">
					<label for="pwd">Password:</label>
					<input type="password" class="form-control form-control-sm" id="pwd">
				  </div>
				  <div class="form-group form-check">
					<label class="form-check-label">
					  <input class="form-check-input" type="checkbox"> Remember me
					</label>
				  </div>
				  <button type="submit" class="btn btn-primary">Submit</button>
				</form>
			  
			  </div> 
			  <div class="card-footer">Footer</div>
			</div>
		</div>
		<div class="col-lg-6">
			<div class="card ">
			  <div class="card-header bg-primary">Header</div><!--.bg-primary, .bg-success, .bg-info, .bg-warning, .bg-danger, .bg-secondary, .bg-dark and .bg-light-->
			  <div class="card-body">Content</div> 
			  <div class="card-footer">Footer</div>
			</div>
		</div>
</div>
</div>
</div>
<script>
	$(document).ready(function () {
	$('.buttonclick').click();
	$('.navbar-light .dmenu').hover(function () {
			$(this).find('.sm-menu').first().stop(true, true).slideDown(150);
		}, function () {
			$(this).find('.sm-menu').first().stop(true, true).slideUp(105)
		});
	});
</script>