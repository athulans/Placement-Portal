<?php 
session_start();
require_once( 'admin/cms.php' ); 
$route='about';
require_once( 'header.php' ); 
?>

<cms:template title="About" clonable='0' />

<div id="about" class="col-md-7 text-justify" style="">
<h3><cms:editable name='title' type='text'>
Placement & HRD Cell
</cms:editable></h3>
<cms:editable name='content' type='richtext'>
	<p>The objective of the HRD Department is transforming individuals into self directed, focussed and high performing intellects. We foster an atmosphere of collegiality, collaboration, cooperation and research. We value networking with teachers, students, companies and Parents that they may be prepared to face the challenges of life. We facilitate synergy within the campus.</p>
	<p>The college has several experts providing orientation and counseling its students to identify their potentialities, capabilities and capacities and develop the same to the maximum extent possible through an innovative and continuous process . The institute has close relations with many IT companies and leading organizations that help its graduates getting good exposure and placement.</p>
	<p>The HRD Syllabus focus on developing mastery in communicative skills in English and professional conversational skills needed to be competent and effective in the profession. We provide Interview handling skills, Aptitude and Technical tests, Health Science, Moral Science, Yoga Classes, Study Group Activities and Human Development Programs through various methods of learning and group programs.</p>
	<p>In addition, Training programmes and Seminars are conducted by inviting resource persons from industries and institutions.</p>
	<p>The college has started an Entrepreneurship Development Cell . Students are given opportunities to visit various industries and learn more about an enterprise.</p>
	<p>A full-fledged syllabus is planned in the beginning of the every academic year by the HRD trainers.</p>
</cms:editable>
</div>

<div class="col-md-offset-1 col-md-4" style="padding:20px">
	<h3><cms:editable name='title2' type='text'>
		Contact Us
	</cms:editable></h3>
	<cms:editable name='content2' type='richtext'> 
	<address>
		<strong>Mrs. Vini Jose</strong><br>
		HR & Placement Officer,<br>
		Sahrdaya College of Engineering & Technology,<br> 
		Phone: 91- 0480- 2759275 (12 lines)<br>
		E mail: <a href="mailto:hr@sahrdaya.ac.in">hr@sahrdaya.ac.in</a>
 	<address>
 	</cms:editable>
</div>

<?php 
require_once( 'footer.php' ); 
COUCH::invoke(); ?>