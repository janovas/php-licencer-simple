<?php
$licentiecode = '123';  //license code  
$txtbestand = file_get_contents('http://localhost/grandrebuild/license/1.txt'); //url text file license code                                                                            
if(!stristr($txtbestand, $licentiecode)){
exit('License is fout:O'); //Checkt de license code
}  
?>
