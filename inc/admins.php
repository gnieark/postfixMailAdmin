<?php

$content="<table>
  <tr><th>username</th><th>created</th><th>last update</th><th>Super admin</th><th></th></tr>";

//liste des admins

  $results= $db -> Execute("SELECT username, created,modified,superadmin FROM admin WHERE ACTIVE='1'");
  while(!$results ->EOF){
    if($results->fields[3] == 1){
      $superadminChecked='checked="checked"';
      $superadminYesNo='yes';
    }else{
       $superadminChecked='';
       $superadminYesNo='no';
    }
  
     $content.="<tr><td>".$results->fields[0]."</td><td>".$results->fields[1]."</td><td>".$results->fields[2]."</td><td>".$superadminYesNo."</td><td>Edit Delete</td></tr>";     
     $results->MoveNext();
  }
  $content.="</table>";