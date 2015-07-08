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
  <h3>Details of Placements</h3>

  <div class="list-group"><a class="list-group-item" data-toggle="modal" href="#2014p">2014 Passout</a> <a class="list-group-item" data-toggle="modal" href="#2013p">2013 Passout</a> <a class="list-group-item" data-toggle="modal" href="#2012p">2012 Passout</a> <a class="list-group-item" data-toggle="modal" href="#2011p">2011 Passout</a> <a class="list-group-item" data-toggle="modal" href="#2010p">2010 Passout</a> <a class="list-group-item" data-toggle="modal" href="#2009p">2009 Passout</a> <a class="list-group-item" data-toggle="modal" href="#2008p">2008 Passout</a> <a class="list-group-item" data-toggle="modal" href="#2007p">2007 Passout</a> <a class="list-group-item" data-toggle="modal" href="#2006p">2006 Passout</a></div>

  <div class="modal fade" id="2014p">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <a class="close" data-dismiss="modal" aria-label="Close" href="#"><span aria-hidden="true">&times;</span></a>
          <h4 class="modal-title">2014 Passout</h4>
        </div>

        <div class="modal-body"><img class="img-responsive" src="http://sahrdaya.ac.in/placement/img/home/image/2014.jpg" width="100%" /></div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="2013p">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <a class="close" data-dismiss="modal" aria-label="Close" href="#"><span aria-hidden="true">&times;</span></a>
          <h4 class="modal-title">2013 Passout</h4>
        </div>

        <div class="modal-body"><img class="img-responsive" src="http://sahrdaya.ac.in/placement/img/home/image/2013.jpg" width="100%" /></div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="2012p">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <a class="close" data-dismiss="modal" aria-label="Close" href="#"><span aria-hidden="true">&times;</span></a>
          <h4 class="modal-title">2012 Passout</h4>
        </div>

        <div class="modal-body"><img class="img-responsive" src="http://sahrdaya.ac.in/placement/img/home/image/2012.jpg" width="100%" /></div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="2011p">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <a class="close" data-dismiss="modal" aria-label="Close" href="#"><span aria-hidden="true">&times;</span></a>
          <h4 class="modal-title">2011 Passout</h4>
        </div>

        <div class="modal-body"><img class="img-responsive" src="http://sahrdaya.ac.in/placement/img/home/image/2011.jpg" width="100%" /></div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="2010p">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <a class="close" data-dismiss="modal" aria-label="Close" href="#"><span aria-hidden="true">&times;</span></a>
          <h4 class="modal-title">2010 Passout</h4>
        </div>

        <div class="modal-body"><img class="img-responsive" src="http://sahrdaya.ac.in/placement/img/home/image/2010.jpg" width="100%" /></div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="2009p">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <a class="close" data-dismiss="modal" aria-label="Close" href="#"><span aria-hidden="true">&times;</span></a>
          <h4 class="modal-title">2009 Passout</h4>
        </div>

        <div class="modal-body"><img class="img-responsive" src="http://sahrdaya.ac.in/placement/img/home/image/2009.jpg" width="100%" /></div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="2008p">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <a class="close" data-dismiss="modal" aria-label="Close" href="#"><span aria-hidden="true">&times;</span></a>
          <h4 class="modal-title">2008 Passout</h4>
        </div>

        <div class="modal-body"><img class="img-responsive" src="http://sahrdaya.ac.in/placement/img/home/image/2008.jpg" width="100%" /></div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="2007p">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <a class="close" data-dismiss="modal" aria-label="Close" href="#"><span aria-hidden="true">&times;</span></a>
          <h4 class="modal-title">2007 Passout</h4>
        </div>

        <div class="modal-body"><img class="img-responsive" src="http://sahrdaya.ac.in/placement/img/home/image/2007.jpg" width="100%" /></div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="2006p">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <a class="close" data-dismiss="modal" aria-label="Close" href="#"><span aria-hidden="true">&times;</span></a>
          <h4 class="modal-title">2006 Passout</h4>
        </div>

        <div class="modal-body"><img class="img-responsive" src="http://sahrdaya.ac.in/placement/img/home/image/2006-orginal-copy.jpg" style="width: 100%;" /></div>
      </div>
    </div>
  </div>


</cms:editable>
</div>

<?php
require_once( 'footer.php' );
COUCH::invoke(); ?>
