<?php 
session_start();
if(!isset($_SESSION['UID']))
{
  header("location:placements.php");
}
require_once( 'admin/cms.php' ); 
$route='login';
require_once( 'header.php' ); 
?>

<cms:template title="Resources" clonable='0' />

<div class="col-md-9 text-justify" style="" data-spy="scroll" data-target="#mynav">
	<h3 id="train">Learning Resources</h3>
	<cms:editable name="content" type="richtext"><p>blabla bla<p></cms:editable>
</div>

<div class="col-md-3" style="padding:20px">
	<div id="mynav " class="list-group" > 
	<cms:editable name="sidebar" type="richtext">
	<a class="list-group-item" href="#train">Training</a>
	<a class="list-group-item" href="#">Soft Skills</a>
	<a class="list-group-item" href="#">Placement Tips</a>
	<a class="list-group-item" href="#">Technical Questions</a>
	</cms:editable>
	</div>
</div>

<?php 
require_once( 'footer.php' ); 
COUCH::invoke(); ?>