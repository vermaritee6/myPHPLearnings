<html>
<head>
<meta name="viewport" content="width=device-width,initial-scale=1"/>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css"/>
<style>
</style>
</head>
<body>
<div class="container">
<div class="row">
<div class="col-sm-12">
<a href="#" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#box">LOGIN</a>
<!--start Modal--> 
<!-- Button trigger modal -->

<!-- Modal -->
<div class="modal fade" id="box" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
	
      <div class="modal-header bg-info text-light">
        <h5 class="modal-title  fs-1 bg-info" id="exampleModalLabel">LOGIN FORM</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
	  username<br/><input type="email" placeholder="Enter your username" class="form-control"/>
	  Password<br/><input type="password" placeholder="Enter your password" class="form-control"/>
	  <input type="submit" value="LOGIN" class="btn btn-outline-info"/>
	  
        ...
      </div>
    </div>
  </div>
</div>
<!--end Modal-->
</div>

</div>

</div>
<script src="js/bootstrap.js"></script>
</body>
</html>