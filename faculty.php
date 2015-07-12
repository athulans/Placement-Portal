<?php
session_start();
require_once( 'admin/cms.php' );
$route='faculty';
require_once( 'header.php' );
?>

<cms:template title="Faculty" clonable='1'>
<cms:editable name='email' required='1' type='text' />
<cms:editable name='designation' required='1' type='text' />
<cms:editable name='profilepic' label='Image' type='image' />
</cms:template>

<div id="about" class="col-md-5 list-group" style="padding-right:0px">
  <h3>Faculties</h3>
  <cms:pages masterpage='faculty.php' orderby='page_name' order='asc'>
  <a href="#c<cms:show k_page_id />" data-toggle='collapse' data-parent="#faclist" class="list-group-item">
  <h3 class="list-group-item-heading"><cms:show k_page_title /></h3>
  <p  class="list-group-item-text"><cms:show designation /></p>
</a>
</cms:pages>

</div>

<div class="col-md-6 col-md-offset-1 panel-group" id="faclist" style="">
  <div class="row panel panel-default">
    <div class="panel-heading">
      <h3 class="panel-title">Faculty Details</h3>
    </div>
    <cms:pages masterpage='faculty.php' orderby='page_name' order='asc'>
    <div id="c<cms:show k_page_id/>" class="collapse fade">
    <div class="panel-body row row-height">
      <div class="col-md-4 thumbnail col-height col-top" style="">
        <cms:if profilepic>
        <img src="<cms:show profilepic />" alt="" class="img-rounded img-responsive"/>
      </cms:if>
    </div>
    <div class="col-md-7 col-height col-top" style="">
      <h3><cms:show k_page_title /></h3>
      <table class="table ">
        <tr>
          <th>Email :</th>
          <td><cms:show email /></td>
        </tr>
        <tr>
          <th>Designation :</th>
          <td><cms:show designation /></td>
        </tr>
      </table>
    </div>
  </div>
</div>
</cms:pages>
</div>
<div class="row panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">Other Members</h3>
  </div>
  <div class="panel-body">
    <dl class="">
      <dt>Advisory Committee :</dt>
      <dd>Executive Director, Advisor, Director, Principal & HR Advisor</dd>
      <dt>Coordinating Departmental Faculty :</dt>
      <dd>One each from each Department</dd>
      <dt>Class Representatives :</dt>
      <dd>One each representing  each class  , Immediately Placed Students</dd>
    </dl>
  </div>
</div>
</div>

<?php
require_once( 'footer.php' );
COUCH::invoke(); ?>
