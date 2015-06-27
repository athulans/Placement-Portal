<?php 
session_start();
require_once( 'admin/cms.php' ); 
$route='status';
require_once( 'header.php' ); 
?>

<cms:template title="Placements" clonable='0' />

<div class="col-md-8">
<cms:editable name='main_title' type='text'>
<h3>Placements</h3>
</cms:editable>
<cms:editable name='main_content' type='richtext'>
dmndnvdnmvdmnvmdnvmdnm
</cms:editable>
</div>

<div class="col-md-offset-1 col-md-3">
<cms:editable name='sidebar_content' type='richtext'>
bxshbchdbchdbchdbchdb
</cms:editable>
</div>

<?php 
require_once( 'footer.php' ); 
COUCH::invoke(); ?>