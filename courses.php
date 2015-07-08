<?php
session_start();
require_once( 'admin/cms.php' );
$route='courses';
require_once( 'header.php' );
?>

<cms:template title="Courses" clonable='0' />

<div id="courses" class="col-md-offset-1 col-md-10" style="padding:20px;">

  <cms:editable name='content' type='richtext'>
  <div class="panel panel-default">
    <div class="panel-heading">
      <h3 class="panel-title">Training Specialties</h3>
    </div>
    <div class="panel-body">
      <ul>
        <li>Mandatory, attendance recorded</li>
        <li>Five Hours a week training. One Hour session everyday (4-5 pm)</li>
        <li>Structured Syllabus</li>
        <li>Syllabus framed in consultation with the industry HR Departments to suit their requirements</li>
      </ul>
    </div>
  </div>

  <div class="panel panel-default">
    <div class="panel-heading">
      <h3 class="panel-title">Competencies & Skills fostered</h3>
    </div>
    <div class="panel-body">
      <ul>
        <li>English Language Proficiency – Both Spoken and Written</li>
        <li>Numerical skills</li>
        <li>Computational skills</li>
        <li>Entrepreneurial skills</li>
        <li>Group Discussion</li>
        <li>Debate</li>
        <li>Time Management skills</li>
        <li>Negotiation Skills</li>
        <li>Problem Solving Skills</li>
        <li>Team Work Skills</li>
        <li>Behaviour in Multi-Cultural Workplace</li>
        <li>Driving Skills</li>
      </ul>
    </div>
  </div>

  <div class="panel panel-default">
    <div class="panel-heading">
      <h3 class="panel-title">Methodology</h3>
    </div>
    <div class="panel-body">
      <ul>
        <li>Language Lab</li>
        <li>Study Group Activities including Group  Discussion, Product Marketing, General & Technical Quiz , JAM and debate</li>
        <li>Professional Counseling</li>
        <li>Bridge Course for First Year Students</li>
        <li>Input Session for the Final Year Students & Parents</li>
        <li>Aptitude Training online and offline</li>
        <li>Mock Interviews</li>
        <li>Resume Writing (print).</li>
      </ul>
    </div>
  </div>

  <div class="panel panel-default">
    <div class="panel-heading">
      <h3 class="panel-title">Syllabus</h3>
    </div>
    <table class="table table-bordered">
      <thead>
        <tr>
          <th>Year</th><th>Program</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th>First Year ( First & Second Sem)</th>
          <td>Spoken English + Language Lab</td>
        </tr>
        <tr>
          <td></td><td>Seminar on  subjects of student choice</td>
        </tr>
        <tr>
          <td></td><td>Moral Science  & Health Science</td>
        </tr>
        <tr>
          <td></td><td>Library Reference / T4S / S4S</td>
        </tr>
        <tr>
          <th>Second Year( Third & Fourth Sem)</th>
          <td>Seminar</td>
        </tr>
        <tr>
          <td></td><td>Yoga</td>
        </tr>
        <tr>
          <td></td><td>Business English / Language Lab</td>
        </tr>
        <tr>
          <td></td><td>Sports / Games / Library Reference / T4S / S4S</td>
        </tr>
        <tr>
          <th>Third Year (Fifth & Sixth Sem )</th>
          <td>Placement Training / Infosys Soft Skills Training</td>
        </tr>
        <tr>
          <td></td><td>Seminar</td>
        </tr>
        <tr>
          <td></td><td>Sports / Games / Library Reference / T4S / S4S</td>
        </tr>
        <tr>
          <td></td><td>Meeting of Animator / Project Guide</td>
        </tr>
        <tr>
          <th>Fourth Year (Seventh & Eight Sem)</th>
          <td>Meeting the Project Guide</td>
        </tr>
        <tr>
          <td></td><td>Placement Training</td>
        </tr>
        <tr>
          <td></td><td>Infosys Foundation Program / Human Development Programs</td>
        </tr>
        <tr>
          <td></td><td>Sports / Games / Library Reference / T4S / S4S</td>
        </tr>
      </tbody>
    </table>
  </div>

</cms:editable>

</div>

<?php
require_once( 'footer.php' );
COUCH::invoke(); ?>
