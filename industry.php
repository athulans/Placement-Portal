<?php 
session_start();
require_once( 'admin/cms.php' ); 
$route='industry';
require_once( 'header.php' ); 
?>

<cms:template title="Industry Relation" clonable='0' />

<div id="about" class="col-md-7 text-justify" style="">
<h3><cms:editable name='title' type='text'>

</cms:editable></h3>
<cms:editable name='content' type='richtext'>
	
</cms:editable>
</div>

<div class="col-md-offset-1 col-md-4" style="padding:20px">
	<h3><cms:editable name='title2' type='text'>

	</cms:editable></h3>
	<cms:editable name='content2' type='richtext'> 
	<address>
		
 	<address>
 	</cms:editable>
</div>

<?php 
require_once( 'footer.php' ); 
COUCH::invoke(); ?>