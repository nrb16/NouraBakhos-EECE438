<?php
include("display.php");
?>
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container">
 <div class="row">
   <div class="col-sm-8">
    <?php echo $deleteMsg??''; ?>
    <div class="table-responsive">
      <table class="table table-bordered">
       <thead><tr><th>RowNo</th>
         <th>ID</th>
         <th>Name</th>
         <th>DOB</th>
         <th>Profession</th>
         <th>Mobile</th>
         <th>Tel</th>
         <!-- <th>Update</th> -->
         
         
    </thead>
    <tbody>
  <?php
      if(is_array($fetchData)){      
      $sn=1;
      foreach($fetchData as $data){
    ?>
      <tr>
      <td><?php echo $sn; ?></td>
      <td><?php echo $data['contact_id']??''; ?></td>
      <td><?php echo $data['contact_name']??''; ?></td>
      <td><?php echo $data['contact_date_of_birth']??''; ?></td>
      <td><?php echo $data['contact_profession']??''; ?></td>
      <td><?php echo $data['contact_mobile_number']??''; ?></td>
      <td><?php echo $data['contact_telephone_number']??''; ?></td>
      <td><a href="updateform.html">Update</a></td>
      <td><a href="deleteform.html">Delete</a></td>
      
     </tr>
     <?php
      $sn++;}}else{ ?>
      <tr>
        <td colspan="8">
    <?php echo $fetchData; ?>
  </td>
    <tr>
    <?php
    }?>
    </tbody>
     </table>
   </div>
</div>
</div>
</div>
</body>
</html>