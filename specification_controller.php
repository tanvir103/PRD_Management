<?php
 require_once('user_model.php');
    if(isset($_POST['submit'])){
        $specificationname=$_POST['specificationname'];
        $ScreenDefinition=$_POST['ScreenDefinition'];
        $UserStory=$_POST['UserStory'];
        $AcceptanceCriteria=$_POST['AcceptanceCriteria'];
        
        $result=addSpecification($specificationname,$ScreenDefinition,$UserStory,$AcceptanceCriteria);
        if($result){
        echo"<font face=\"times new roman\" size=\"6\">Congratulations New Specification Has been added</font>";
        }else{
        echo"<font face=\"times new roman\" size=\"6\">Failed! Please try again</font>";
        }
        
    }

?>