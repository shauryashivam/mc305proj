<?php

//index.php

include('header.php');

?>

<div class="container" style="margin-top:30px">
  <div class="card">

  	<div class="card-header">
      <div class="row">
        <div class="col-md-9">Defaulter's List</div>
        <div class="col-md-3" align="right">
          
        </div>
      </div>
    </div>

  	<div class="card-body">
  		<div class="table-responsive">
        <table class="table table-striped table-bordered" id="student_table">
          
          <thead>
            <tr>
              <th>Student Name</th>
              <th>Roll Number</th>
              <th>Course Code</th>
              <th>Attendance Percentage</th>
            </tr>
          </thead>

          <tbody>
          </tbody>

        </table>
  		</div>
  	</div>

  </div>
</div>

</body>
</html>


<!-- -------------------------------------------------------------------------------------------------- -->

<script>
$(document).ready(function(){
	 
   // call attendace action.php for displaying output in table
  var dataTable = $('#student_table').DataTable({
    
    "processing":true,
    "serverSide":true,
    "order":[],
    "ajax":{
      url:"attendance_action.php",
      type:"POST",
      data:
      {
        action:'default_fetch'
      }
    }

  });

// --------------------------------------------------------------------------------------------------

});
</script>