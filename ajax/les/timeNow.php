<?php 

function getTime() {
    $timeNow = date("H:i:s")    ;
    return $timeNow;
}
?>



<p>Текущее время:</p>
<p><?=getTime();?></p>