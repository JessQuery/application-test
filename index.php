<!doctype html>
<!-- 
	Author: Jessica Toomer
	Date: August 11, 2016
 -->

<head>
<title>People</title>
<script type="text/javascript">

function showAlert(firstname, lastname, email){
	alert("Name: " + firstname + " " + lastname + "\nEmail: " + email);
}

</script>
</head>

<body>
<?php

$people = array(
   array('id'=>1, 'first_name'=>'John', 'last_name'=>'Smith', 'email'=>'john.smith@hotmail.com'),
   array('id'=>2, 'first_name'=>'Paul', 'last_name'=>'Allen', 'email'=>'paul.allen@microsoft.com'),
   array('id'=>3, 'first_name'=>'James', 'last_name'=>'Johnston', 'email'=>'james.johnston@gmail.com'),
   array('id'=>4, 'first_name'=>'Steve', 'last_name'=>'Buscemi', 'email'=>'steve.buscemi@yahoo.com'),
   array('id'=>5, 'first_name'=>'Doug', 'last_name'=>'Simons', 'email'=>'doug.simons@hotmail.com')
);

if (count($people) > 0)
$tablestring = "<table>";
  $tablestring .= "<thead>";
    $tablestring .= "<tr>";
      $tablestring .="<th>" . implode('</th><th>', array_keys(current($people))) ."</th>";
    $tablestring .= "</tr>";
  $tablestring .= "</thead>";
  $tablestring .= "<tbody>";
foreach ($people as $row): array_map('htmlentities', $row);
   $tablestring .= "<tr>" ;
      $tablestring .= "<td>" . implode('</td><td>', $row) . "</td>";
      $tablestring .= "<td><input type='button' value='Click!' onClick=\"showAlert('". $row['first_name'] ."', '". $row['last_name'] ."', '" . $row['email'] ."');\" /></td>";
    $tablestring .= "</tr>";
endforeach;
  $tablestring .= "</tbody></table>";
 
echo $tablestring; ?>  
  
</body>

