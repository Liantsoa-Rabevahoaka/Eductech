<?php 
    $profByebye = $_GET['id_prof'];
    $ok = $profController->delete($profByebye);;
        if($ok==true)
        {
            echo "<script>window.location='home.php?information=../../../views/professeur/index'; alert('Prof éffacé');</script>";
        }
        else
        {
        echo "<script>window.location='home.php?teacher=teacher-delete'; alert('cant delete');</script>";
        }
        ?>