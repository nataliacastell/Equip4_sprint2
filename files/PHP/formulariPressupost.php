<?php
include 'connexioBDD.php';

                            $presupost1 = $_POST['preg1'];
                            $presupost2 = $_POST['preg2'];
                            $presupost3 = $_POST['preg3'];
                            
                            $total_presupost = $presupost1 + $presupost2 + $presupost3;

                            echo "<p> Total Presupost: ".$total_presupost. "</p>"
?>