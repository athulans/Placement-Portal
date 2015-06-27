<?php 
session_start();
require_once( 'admin/cms.php' ); 
$route='news';
require_once( 'header.php' ); 
?>

<cms:template title="News" clonable='1'>
<cms:editable name='description' required='1' type='richtext' />
<cms:editable name='image' required='0' type='image' />
</cms:template>

<div class="col-md-8">
	<h3><cms:show k_page_title /></h3>
		<div class="media" >
			<div class="media-left">
				<img src="<cms:show image />" width="200" height="200">
			</div>
			<div class=" well media-body">
				<p><cms:show description /></p>
			</div>
		</div>
</div>

</div>

<div class="col-md-offset-1 col-md-3" style="padding-top:20px">
	<marquee direction="up">
		<cms:pages masterpage='news.php' >
	<div class="media">
            <div class="media-left">
              <a href="<cms:show k_page_link />">
                  <img class="media-object" src="<cms:show image />" height="64px" width="64px">
              </a>
            </div>
            <div class="media-body">
              <h4 class="media-heading"><a href="<cms:show k_page_link />"><cms:show k_page_title /></a></h4>
            </div>
        </div>
    </cms:pages>
    </marquee>
</div>

<?php 
require_once( 'footer.php' ); 
COUCH::invoke(); ?>