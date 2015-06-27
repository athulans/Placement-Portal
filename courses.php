<?php 
session_start();
require_once( 'admin/cms.php' ); 
$route='courses';
require_once( 'header.php' ); 
?>

<cms:template title="Courses" clonable='0' />

<div id="courses" class="col-md-12" style="padding:20px;">
  <cms:editable name='content2' type='richtext'></cms:editable>
  <h3><cms:editable name='title' type='text'>Syllabus</cms:editable></h3>
</div>
<div class="col-md-9 text-justify" style="padding:20px; overflow: auto; max-height:600px;">
  <cms:editable name='content' type='richtext'>
  <table class="table table-striped ">
    <tbody>
      <tr>
        <th id="1st" colspan="5">
          FIRST & SECOND SEMESTER
        </td>
      </tr>
      <tr>
        <th >Sl No. </th>
        <th >Topics </th>
        <th >Hours /Week </th>
        <th >Hours /Month </th>
        <th >Total Hrs /Semester </th>
      </tr>
      <tr>
        <td  >PLHR - 101 </td>
        <td  >Yoga Classes </td>
        <td >1 </td>
        <td >- </td>
        <td >15 </td>
      </tr>
      <tr>
        <td  >PLHR - 102 </td>
        <td  >Seminar </td>
        <td >1 </td>
        <td >- </td>
        <td >15 </td>
      </tr>
      <tr>
        <td  >PLHR - 103 </td>
        <td  >Spoken English /Library   Reference </td>
        <td >2 </td>
        <td >- </td>
        <td >30 </td>
      </tr>
      <tr>
        <td  >PLHR - 104 </td>
        <td  >Study Group Activities (GD,   Quiz, Product Marketing, Debate, Skit) </td>
        <td >1 </td>
        <td >- </td>
        <td >15 </td>
      </tr>
      <tr>
        <td  >PLHR - 105 </td>
        <td  >Sports &amp; Games </td>
        <td >1 </td>
        <td >- </td>
        <td >15 </td>
      </tr>
      <tr>
        <td  >PLHR - 106 </td>
        <td  >HDP( Time management , Self   Discovery &amp; Self Management, Confidence Building &amp; Intellectual   Maturity) </td>
        <td >- </td>
        <td >1 </td>
        <td >8 </td>
      </tr>
      <tr>
        <td  >PLHR - 107 </td>
        <td  >Moral Science ( Emotional   Intelligence, Purposeful Living, Religion &amp; Spirituality etc.) </td>
        <td >- </td>
        <td >1 </td>
        <td >8 </td>
      </tr>
      <tr>
        <td  >PLHR - 108 </td>
        <td  >Health Science </td>
        <td >- </td>
        <td >1 </td>
        <td >8 </td>
      </tr>
      <tr>
        <td  >PLHR - 109 </td>
        <td  >Meeting of Animators </td>
        <td >- </td>
        <td >1 </td>
        <td >8 </td>
      </tr>
      
      <tr>
        <th id="3rd" colspan="5">
          THIRD SEMESTER 
        </td>
      </tr> 
      <tr>
        <td  >PLHR - 301 </td>
        <td  >Placement Training </td>
        <td >1 </td>
        <td >- </td>
        <td >15 </td>
      </tr>
      <tr>
        <td  >PLHR - 302 </td>
        <td  >Seminar </td>
        <td >1 </td>
        <td >- </td>
        <td >15 </td>
      </tr>
      <tr>
        <td  >PLHR - 303 </td>
        <td  >Library Reference/ Project Work </td>
        <td >1 </td>
        <td >- </td>
        <td >15 </td>
      </tr>
      <tr>
        <td  >PLHR - 304 </td>
        <td  >Study Group Activities (GD,   Quiz, Product Marketing, Debate, Skit)</td>
        <td >1 </td>
        <td >- </td>
        <td >15 </td>
      </tr>
      <tr>
        <td  >PLHR - 305 </td>
        <td  >Sports &amp; Games </td>
        <td >1 </td>
        <td >- </td>
        <td >15 </td>
      </tr>
      <tr>
        <td  >PLHR - 306 </td>
        <td  >HDP ( Interpersonal   Relationship, Behavior Maturity, Relation to the Institution) </td>
        <td >- </td>
        <td >1 </td>
        <td >4 </td>
      </tr>
      <tr>
        <td  >PLHR - 307 </td>
        <td  >Moral Science( Religion &amp;   Spirituality) </td>
        <td >- </td>
        <td >1 </td>
        <td >4 </td>
      </tr>
      <tr>
        <td  >PLHR - 308 </td>
        <td  >Health Science </td>
        <td >- </td>
        <td >1 </td>
        <td >4 </td>
      </tr>
      <tr>
        <td  >PLHR - 309 </td>
        <td  >Meeting of Animators &amp;   Project Guide </td>
        <td >- </td>
        <td >1 </td>
        <td >4 </td>
      </tr>
      <tr>
        <th id="4th" colspan="5">
          FOURTH SEMESTER 
        </td>
      </tr>
      <tr>
        <td   >PLHR - 401 </td>
        <td  >Placement Training </td>
        <td >1 </td>
        <td >- </td>
        <td >15 </td>
      </tr>
      <tr>
        <td   >PLHR - 402 </td>
        <td  >Seminar </td>
        <td >1 </td>
        <td >- </td>
        <td >15 </td>
      </tr>
      <tr>
        <td   >PLHR - 403 </td>
        <td  >Library Reference/ Project Work </td>
        <td >1 </td>
        <td >- </td>
        <td >15 </td>
      </tr>
      <tr>
        <td   >PLHR - 404 </td>
        <td  >Study Group Activities (GD,   Quiz, Product Marketing, Debate, Skit)</td>
        <td >1 </td>
        <td >- </td>
        <td >15 </td>
      </tr>
      <tr>
        <td   >PLHR - 405 </td>
        <td  >Sports &amp; Games </td>
        <td >1 </td>
        <td >- </td>
        <td >15 </td>
      </tr>
      <tr>
        <td   >PLHR - 406 </td>
        <td  >HDP ( Decision Making, Emotional   Maturity) </td>
        <td >- </td>
        <td >1 </td>
        <td >4 </td>
      </tr>
      <tr>
        <td   >PLHR - 407 </td>
        <td  >Moral Science ( Friendship,   Developmental Stages of Life) </td>
        <td >- </td>
        <td >1 </td>
        <td >4 </td>
      </tr>
      <tr>
        <td   >PLHR - 408 </td>
        <td  >Health Science </td>
        <td >- </td>
        <td >1 </td>
        <td >4 </td>
      </tr>
      <tr>
        <td   >PLHR - 409 </td>
        <td  >Meeting of Animators &amp;   Project Guide </td>
        <td >- </td>
        <td >1 </td>
        <td >4 </td>
      </tr>
      <tr>
        <th id="5th" colspan="5">
          FIFTH SEMESTER 
        </td>
      </tr>
      <tr>
        <td   >PLHR - 501 </td>
        <td   >Placement Training </td>
        <td >3 </td>
        <td >- </td>
        <td >45 </td>
      </tr>
      <tr>
        <td   >PLHR - 502 </td>
        <td   >Seminar </td>
        <td >1 </td>
        <td >- </td>
        <td >15 </td>
      </tr>
      <tr>
        <td   >PLHR - 503 </td>
        <td   >Library Reference/ Project Work </td>
        <td >- </td>
        <td >1 </td>
        <td >4 </td>
      </tr>
      <tr>
        <td   >PLHR - 504 </td>
        <td   >Study Group Activities (GD,   Quiz, Product Marketing, Debate, Skit)</td>
        <td >1 </td>
        <td >- </td>
        <td >15 </td>
      </tr>
      <tr>
        <td   >PLHR - 505 </td>
        <td   >Sports &amp; Games </td>
        <td >- </td>
        <td >- </td>
        <td >- </td>
      </tr>
      <tr>
        <td   >PLHR - 506 </td>
        <td   >HDP (Social Relationships, Team   Management Skills) </td>
        <td >- </td>
        <td >1 </td>
        <td >4 </td>
      </tr>
      <tr>
        <td   >PLHR - 507 </td>
        <td   >Moral Science ( Differential   Psychology, Feelings, Synergic Personality) </td>
        <td >- </td>
        <td >1 </td>
        <td >4 </td>
      </tr>
      <tr>
        <td   >PLHR - 508 </td>
        <td   >Health Science </td>
        <td >- </td>
        <td >1 </td>
        <td >4 </td>
      </tr>
      <tr>
        <td   >PLHR - 509 </td>
        <td   >Meeting of Animators &amp;   Project Guide </td>
        <td >- </td>
        <td >1 </td>
        <td >4 </td>
      </tr>
      <tr>
        <th id="6th" colspan="5">
          SIXTH SEMESTER 
        </td>
      </tr>
      <tr>
        <td   >PLHR - 601 </td>
        <td  >Placement Training </td>
        <td >3 </td>
        <td >- </td>
        <td >45 </td>
      </tr>
      <tr>
        <td   >PLHR - 602 </td>
        <td  >Seminar </td>
        <td >1 </td>
        <td >- </td>
        <td >15 </td>
      </tr>
      <tr>
        <td   >PLHR - 603 </td>
        <td  >Library Reference/ Project Work </td>
        <td >- </td>
        <td >1 </td>
        <td >4 </td>
      </tr>
      <tr>
        <td   >PLHR - 604 </td>
        <td  >Study Group Activities (GD,   Quiz, Product Marketing, Debate, Skit)</td>
        <td >1 </td>
        <td >- </td>
        <td >15 </td>
      </tr>
      <tr>
        <td   >PLHR - 605 </td>
        <td  >Sports &amp; Games </td>
        <td >- </td>
        <td >- </td>
        <td >- </td>
      </tr>
      <tr>
        <td   >PLHR - 606 </td>
        <td  >HDP ( Power Marketing , Self   Management) </td>
        <td >- </td>
        <td >1 </td>
        <td >4 </td>
      </tr>
      <tr>
        <td   >PLHR - 607 </td>
        <td  >Moral Science( Team Work,   Leadership, Examinations &amp; its purpose) </td>
        <td >- </td>
        <td >1 </td>
        <td >4 </td>
      </tr>
      <tr>
        <td   >PLHR - 608 </td>
        <td  >Health Science </td>
        <td >- </td>
        <td >1 </td>
        <td >4 </td>
      </tr>
      <tr>
        <td   >PLHR - 609 </td>
        <td  >Meeting of Animators &amp;   Project Guide </td>
        <td >- </td>
        <td >1 </td>
        <td >4 </td>
      </tr>
      <tr>
        <th id="7th" colspan="5">
          SEVENTH SEMESTER 
        </td>
      </tr>
      <tr>
        <td >PLHR - 701 </td>
        <td >Placement Training </td>
        <td >2 </td>
        <td >- </td>
        <td >30 </td>
      </tr>
      <tr>
        <td >PLHR - 702 </td>
        <td >Seminar </td>
        <td >1 </td>
        <td >- </td>
        <td >15 </td>
      </tr>
      <tr>
        <td >PLHR - 703 </td>
        <td >Library Reference/ Project Work </td>
        <td >- </td>
        <td >1 </td>
        <td >4 </td>
      </tr>
      <tr>
        <td >PLHR  704 </td>
        <td >Study Group Activities (GD,   Quiz, Product Marketing, Debate, Skit)</td>
        <td >1 </td>
        <td >- </td>
        <td >15 </td>
      </tr>
      <tr>
        <td >PLHR - 705 </td>
        <td >Sports &amp; Games </td>
        <td >- </td>
        <td >- </td>
        <td >- </td>
      </tr>
      <tr>
        <td >PLHR - 706 </td>
        <td >HDP ( Work Management,   Professionalism) </td>
        <td >- </td>
        <td >1 </td>
        <td >4 </td>
      </tr>
      <tr>
        <td >PLHR - 707 </td>
        <td >Moral Science( Relaxation   Techniques &amp; Purpose, Value Clarifications, Effectiveness) </td>
        <td >- </td>
        <td >1 </td>
        <td >4 </td>
      </tr>
      <tr>
        <td >PLHR - 708 </td>
        <td >Health Science </td>
        <td >- </td>
        <td >1 </td>
        <td >4 </td>
      </tr>
      <tr>
        <td >PLHR - 709 </td>
        <td >Meeting of Animators &amp;   Project Guide </td>
        <td >- </td>
        <td >1 </td>
        <td >4 </td>
      </tr>
      <tr>
        <th id="8th" colspan="5">
          EIGHTH SEMESTER 
        </td>
      </tr>
      <tr>
        <td >PLHR - 801 </td>
        <td >Placement Training </td>
        <td >- </td>
        <td >- </td>
        <td >- </td>
      </tr>
      <tr>
        <td >PLHR - 802 </td>
        <td >Seminar </td>
        <td >- </td>
        <td >- </td>
        <td >- </td>
      </tr>
      <tr>
        <td >PLHR - 803 </td>
        <td >Library Reference/ Project Work </td>
        <td >&nbsp;</td>
        <td >1 </td>
        <td >4 </td>
      </tr>
      <tr>
        <td >PLHR - 804 </td>
        <td >Study Group Activities (GD,   Quiz, Product Marketing, Debate, Skit)</td>
        <td >1 </td>
        <td >- </td>
        <td >15 </td>
      </tr>
      <tr>
        <td >PLHR - 805 </td>
        <td >Sports &amp; Games </td>
        <td >- </td>
        <td >- </td>
        <td >- </td>
      </tr>
      <tr>
        <td >PLHR - 806 </td>
        <td >HDP ( Social Commitment, Family   Life &amp; Problems) </td>
        <td >- </td>
        <td >1 </td>
        <td >4 </td>
      </tr>
      <tr>
        <td >PLHR - 807 </td>
        <td >Moral Science ( Anger   Management, Life Skills) </td>
        <td >- </td>
        <td >1 </td>
        <td >4 </td>
      </tr>
      <tr>
        <td >PLHR - 808 </td>
        <td >Health Science </td>
        <td >- </td>
        <td >1 </td>
        <td >4 </td>
      </tr>
      <tr>
        <td >PLHR - 809 </td>
        <td >Meeting of Animators &amp;   Project Guide </td>
        <td >- </td>
        <td >1 </td>
        <td >4 </td>
      </tr>
    </tbody>
  </table>
</cms:editable>
</div>

<div class="col-md-3" style="padding:20px">
  <cms:editable name='sidebar' type='richtext'>
  <div id="mynav " class="list-group" > 
    <a class="list-group-item" href="#1st">FIRST & SECOND SEMESTER</a>
    <a class="list-group-item" href="#3rd">THIRD SEMESTER</a>
    <a class="list-group-item" href="#4th">FOURTH SEMESTER</a>
    <a class="list-group-item" href="#5th">FIFTH SEMESTER</a>
    <a class="list-group-item" href="#6th">SIXTH SEMESTER</a>
    <a class="list-group-item" href="#7th">SEVENTH SEMESTER</a>
    <a class="list-group-item" href="#8th">EIGHTH SEMESTER</a>
  </div>
  </cms:editable>
</div>

<?php 
require_once( 'footer.php' ); 
COUCH::invoke(); ?>