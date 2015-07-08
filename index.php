<?php
session_start();
require_once( 'admin/cms.php' );
$route='home';
require_once( 'header.php' );
?>

<cms:template title="Home Page" clonable='0'>
<cms:editable name='box1_title' required="0" type='text' />
<cms:editable name='box1_content' required="0" type='richtext' />
<cms:editable name='box2_title' required="0" type='text' />
<cms:editable name='box2_content' required="0" type='richtext' />
<cms:editable name='box3_title' required="0" type='text' />
<cms:editable name='box3_content' required="0" type='richtext' />
</cms:template>

<div id="home" class="row" style="min-height:60%">


  <div class="col-md-3 col-xs-12">

    <cms:if box1_title >
    <div class="col-md-12 col-xs-6 leftbox" style="margin-bottom:20px">
      <h4><cms:show box1_title /></h4>
      <p><cms:show box1_content /></p>
    </div>
  </cms:if>

  <cms:if box2_title >
  <div class="col-md-12 col-xs-6 leftbox" style="margin-bottom:20px">
    <h4><cms:show box2_title /></h4>
    <p><cms:show box2_content /></p>
  </div>
</cms:if>

<cms:if box3_title >
<div class="col-md-12 col-xs-12 leftbox" style="margin-bottom:20px">
  <h4><cms:show box3_title /></h4>
  <p><cms:show box3_content /></p>
</div>
</cms:if>

</div>

<div class="col-md-6 col-xs-12 text-center" >
  <div id="slider1_container">
    <div id="myCarousel" class="carousel slide" style="">
      <ol class="carousel-indicators">
        <cms:pages masterpage='image.php' >
        <li data-target="#myCarousel" data-slide-to="<cms:php>echo  <cms:show k_absolute_count/> - 1; </cms:php>" <cms:if k_absolute_count=='1' ><cms:show 'class="active"' /></cms:if> ></li>
      </cms:pages>
    </ol>
    <!-- Carousel items -->
    <div class="carousel-inner">
      <cms:pages masterpage='image.php' >
      <div class="item <cms:if k_absolute_count=='1'><cms:show 'active'/></cms:if>">
        <img u="image" src="<cms:show slide />"  style=""/>
      </div>
    </cms:pages>
  </div>
  <!-- Carousel nav -->
  <a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
  <a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
</div>
</div>
<div class="col-md-12">
  <cms:editable name="middle_content" type="richtext"></cms:editable>
</div>
</div>

<div class="col-md-3 col-xs-12" style="">
  <div class="col-md-12 leftbox" style="">
    <!--<div style="background-color: #f4f4f4;"> -->
    <h4>News Feed</h4>
    <!--<div>-->
    <marquee direction="up" style="background-color: white; max-height:300px;">

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
</div> <!-- news div -->
</div> <!-- right side div -->

<div id="company-bar" class="col-md-12 col-xs-12">
  <marquee direction="left">
    <cms:editable name="companys" type="richtext">
    <img src="img/companys/lnt2.jpg" >
    <img src="img/companys/cognizant.png" >
    <img src="img/companys/mahindra.png" >
    <img src="img/companys/css.jpg" >
    <img src="img/companys/ust.jpg" >
    <img src="img/companys/hcl.png" >
    <img src="img/companys/ibm.png" >
    <img src="img/companys/nest.jpg" >
    <img src="img/companys/wipro.jpg" >
    <img src="img/companys/tata.jpg" >
    <img src="img/companys/oracle.png" >
    <img src="img/companys/roche.png" >
    <img src="img/companys/accenture.jpg" >
    <img src="img/companys/bosch.jpg" >
    <img src="img/companys/ibs.jpg" >
    <img src="img/companys/mphasis.png" >
    <img src="img/companys/siements.svg" >
    <img src="img/companys/infy.jpg" >
    <img src="img/companys/tcs.jpg" >
  </cms:editable>
</marquee>
</div>

</div> <!-- home div -->

<?php
require_once( 'footer.php' );
COUCH::invoke(); ?>
