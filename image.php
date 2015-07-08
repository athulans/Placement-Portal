<?php
require_once( 'admin/cms.php' );
?>

<cms:template title="Slideshow" clonable='1' executable='0'>
<cms:editable name='slide' label='Image' type='image' />
</cms:template>

<?php COUCH::invoke(); ?>
