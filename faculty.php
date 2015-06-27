<?php 
session_start();
require_once( 'admin/cms.php' ); 
$route='faculty';
require_once( 'header.php' ); 
?>

<cms:template title="Faculty" clonable='1'>
<cms:editable name='email' required='1' type='text' />
<cms:editable name='designation' required='1' type='text' />
<cms:editable name='qualification' required='1' type='text' />
<cms:editable name='profilepic' label='Image' type='image' />
</cms:template>





<div id="about" class="text-justify" style="padding:20px">
	
  <cms:pages masterpage='faculty.php' >
  <div class="col-md-3">
    <div class="thumbnail">
      <img src="<cms:show profilepic />" class="img-responsive img-rounded">
      <div class="caption">
        <h3><cms:show k_page_title /></h3>
        <p><cms:show designation /></p>
        <p><a class="btn btn-primary" role="button" href="#<cms:show k_page_id />" data-toggle="modal" data-target="#<cms:show k_page_id />">View</a></p>
      </div>
    </div>
  </div>

  <div class="modal fade" id="<cms:show k_page_id />" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Name</h4>
      </div>
      <div class="modal-body clearfix">
        <div class="row">
          <div class="col-md-5">
            <img class="img-rounded img-responsive" src="<cms:show profilepic />" />
          </div>
          <div class="col-md-6">
           <table class="table table-striped">
            <tr>
              <th>Name</th>
              <td><cms:show k_page_title /></td>
            </tr>
            <tr>
              <th>Designation</th>
              <td><cms:show designation /></td>
            </tr>
            <tr>
              <th>Email</th>
              <td><cms:show email /></td>
            </tr>
          </table>
        </div>
      </div>
    </div>
    <div class="modal-footer">
    </div>
  </div>
</div>
</div>
</cms:pages>

</div>

<?php 
require_once( 'footer.php' ); 
COUCH::invoke(); ?>