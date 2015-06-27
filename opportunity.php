<?php 
session_start();
require_once( 'admin/cms.php' ); 
$route='opportunity';
require_once( 'header.php' ); 
?>

<cms:template title="Opportunity" clonable='1'>
<cms:editable name='description' required='1' type='richtext' />
<cms:editable name='link' required='1' type='text' />
</cms:template>

<div class="col-md-8">
<h3>Opportunities</h3>

<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">

<cms:pages masterpage='opportunity.php' >

<div  class="panel panel-default">
  <div class="panel-body">
    <a href="#<cms:show k_page_id />" role="tab" data-toggle="collapse" data-parent="#accordion" aria-expanded="false" aria-controls="<cms:show k_page_id />"><h4><cms:show k_page_title /></h4></a>
      <div id="<cms:show k_page_id />" class="collapse well" role="tabpanel">
        <p><cms:show description /></p>
        <a href="<cms:show link />">Click here to know more</a>
      </div>
  </div>
</div>

</cms:pages>

</div>

</div>

<script type="text/javascript">
/*function expand (id) {
  $("#"+id).animate({
    height:"toggle"
  },'fast',function(){
    if($("#a"+id).text()=="less")$("#a"+id).text("more");
    else $("#a"+id).text("less");
  });*/
  /*$("#"+id).removeClass('shorten');
  $("#a"+id).attr("onclick","shorten("+id+")");
  $("#a"+id).text("less");*/
}
/*
function shorten(id){
  $("#"+id).addClass('shorten');
  $("#a"+id).attr("onclick","expand("+id+")");
  $("#a"+id).text("more");
}*/
</script>

<?php 
require_once( 'footer.php' ); 
COUCH::invoke(); ?>