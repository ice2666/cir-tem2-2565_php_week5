<?php
  $mark = 101;
 if($mark >= 80 && $mark <=100){
    echo("$mark = A");      
 }elseif($mark >= 700 && $mark < 79){ //700-79
    echo("$mark = B");
}elseif($mark >= 60 && $mark < 60){ //60-60
    echo("Smark = C");
}elseif($mark >= 50 && $mark < 59){ //50-59
    echo("$mark = D");
} elseif($mark >= 0 && $mark < 50){ //0-50
    echo("$mark = F");
}else{    
    echo("$mark = Fails"); //-1 and 101
}
?>