<?php
  $conn = $mysqli;

  /* Students list */
  $studentsList = $mysqli->query("SELECT * FROM student");
  $student_array = array();

  while($row = $studentsList->fetch_assoc())
  {
    $student_array[] = $row;
  } 
  $liststudents = $student_array;


  $conn->close();
?>


<script>
   var listStudents = <?php echo json_encode($liststudents); ?> ;
   var loginType = true;

   if($(".loginType").val() == "oLogin"){
     loginType = false;
   }


   function AppViewModel() {
       this.studentsList = ko.observableArray(listStudents);
       this.aLogin = ko.observable(loginType);
   }

   // Activating knockout.js
   ko.applyBindings(new AppViewModel());
   </script>


</html>