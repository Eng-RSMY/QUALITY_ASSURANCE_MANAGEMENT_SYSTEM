<!DOCTYPE HTML>
<head>
<head>

     <link href="css/bootstrap.css" rel="stylesheet">

     <link href="<?php echo base_url('assets/css/bootstrap.min.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/font-awesome.min.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/mystyle.css') ?>" rel="stylesheet">
     
     <h1>
         <div class ="container">

         <div class="page-header">
          <div class="row">
            <div class="col-md-2">
              <img src="<?php echo base_url('assets/img/logo.png') ?>" style="width:100px;height:100px;">    
            </div>
            <div class="col-md-10">
              <h1> Quality Assurance  Management System</h1>
              <h4> A green tecnology for smart people</h4>
            </div>
          </div>
          
        

      </div>
        <div class="row">
            <div class ="span12">
                <div class="panel panel-success">
                    
                    <center><h2>QAMS-Head PANEL</center>
                </div>
            </div>
        </div>
    </div>
     </h1>
</head>

<body background="<?php echo base_url('assets/img/school.png') ?>">
<div class ="container">
        <div class="row">
            <div class ="span12">
                <div class="panel panel-success">
        <table class="panel panel-success" style="width:100%">
					<tr>

						<td >
             <label class="gameover">Name Of Program : Bsc in <?php

            $name = "CSE";


             echo $name;?> </label>
            


             </th>
						<td>
              <label >Semester : <?php echo $SemesterName;?></label>   
           </td> 
              
						<td>
              <label > Year : <?php echo $YearName;?></label>   

            </td>
					
					 </tr>
					<tr>
            <td>

            <label class="gameover"> Faculty: <?php

            echo $FacultyName;?></label>  

            
           </tr>



           <tr>


            <?php
              foreach ($userDetails->result() as $row) {
                                  $Email = $row->Email;
                                  $FullName = $row->FullName;
                                  $Designation = $row->Designation;
                                  $Department = $row->Name;
                                  $EmployeeId = $row->EmployeeId;

                                  
            ?>











             </p> </th>
            <td><label class="gameover" >  Name : <?php echo $FullName;?></label>  </td> 
            <td> <label > Designation : <?php echo $Designation;?></label> </td>
            <td> <label > Employee ID : <?php echo $EmployeeId;?></label> </td>
             



            
           </tr>


           <tr>
            
            <td><label class="gameover"> Department : <?php echo $Department;?></label></td>           
           </tr>
         

           <?php
            }
           ?>



                    </table>
                </div>
            </div>
        </div>
    </div>













          
















<?php $number=1;?>

 <div class ="container">
        <div class="row">
            <div class ="span12">

                <div class="panel panel-info">
<?php 
$UserStatus = $this->session->userdata('UserStatus');
echo form_open_multipart('Dean/Submission/'); ?>
<table class="table table-bordered gameover" style="width:100%">

	<caption style="text-align:center"> <h1>IQAC FROM</h1> </caption>
  <tr>
    <th>SL</th>
	 <th>Head Name</th>
   <th>View</th> 
    <th>Status</th> 
    <th>Action</th> 

	
  </tr>


<?php
  $complete="NULL";
  foreach ($DepertmentDeanList->result() as $row) {
                      
                                  $FullName = $row->FullName;
                                  $status = $row->status;
        
        $edit_url = base_url()."Iqac/LoadDeancData/".$row->UserId;
        $revart_url = base_url()."Iqac/RevartDean/".$row->UserId;

?>

  <tr>









    <td><?php echo $number;
    $number++;

    ?></td>
    <td>
      <?php
        echo $FullName;
      ?>



    </td> 

<?php
      $result="Done";
      
      if($status == 0)
      {
         $result = "Undone";
         $complete = "Undone";
      }


    ?>


 <td>
   <?php
   echo anchor($edit_url, 'View');
   ?>
 </td>









    <td>
      <?php
      if($result == "Undone"){
         ?>
         <level>Not Submited</level>
          <?php
      }
      else
      {
        ?>
         <level>Submited</level>
          <?php
          
      }
      ?>
    </td> 
    
    <td>
      <?php
         echo anchor($revart_url, 'Revert');
         ?>

    </td>

  </tr>
  <?php
}
?>
   
</table>
<div style="text-align:right">

<?php
  if($complete == "Undone" && $SubmissionTestuser == 1)
  {
    ?>
    
    <?php
  }
  else if($complete == "Undone" && $SubmissionTestuser == 0)
  {
    ?>
    <button type="button" class="btn btn-primary ">Submit</button>
    <?php
  }
  else
  {
    ?>
    <button type="submit" class="btn btn-primary justcause"><?php echo form_submit('submit', 'Save', 'class="btn btn-primary"'); ?></button>
    <?php
  }
?>

</div>


				</div>
            </div>
        </div>
    </div>
	

<div class ="navbar navbar-default navbar">

<div class="container">
            <br><a href="<?php echo base_url('Login/logout') ?>" role="button" class="btn btn-primary btn-large justcause">Sign out</a> &nbsp;
            <a href="user/help" role="button" class="btn btn-warning btn-large justcause">Help Line</a></br>
            
        </div>
</div>
</div>
	<script src="<?php echo base_url('assets/js/jquery.min.js') ?>"></script>
	<script src="<?php echo base_url('assets/js/bootstrap.min.js') ?>"></script>
</body>
</html>