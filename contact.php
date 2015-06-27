<?php  
$route='contact';
require_once( 'header.php' ); 
?>


<div id="contact" class="col-md-7 text-justify" style="">

<h3>Contact us</h3>

<form role="form" method="POST" >
  
  <div class="form-group">
    <label for="name">Your Name:</label>
    <input name="name" type="text" class="form-control" id="name" />
  </div>
  <div class="form-group">
    <label for="email">Your Email address:</label>
    <input name="email" type="email" class="form-control" id="email" />
  </div>
  <div class="form-group">
    <label for="comment">Comment:</label>
    <textarea  name="comment" class="form-control" rows="5" id="comment"></textarea>
  </div>
  <input name="submit" type="submit" class="btn btn-default" value="Submit" />
</form>


</div>

<div class="col-md-offset-1 col-md-4" style="padding:20px">
	<h4>info</h4>
  <p>asasasasasas</p>
</div>

<?php 
require_once( 'footer.php' ); 
 ?>