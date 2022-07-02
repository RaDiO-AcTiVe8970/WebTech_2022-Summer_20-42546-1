<?php
    $potat=0;
    $jsondata= file_get_contents("../Model/job.json") or die("File not found");
    $phpdata= json_decode($jsondata,true);
    foreach($phpdata['Jobs'] as $b)
        {
            $potat++;
            echo "<fieldset>";
            echo "<h3>Job no.".$potat."</h3><br>";
            echo "Company Name : ".$b['Company_Name']."<br>";
            echo "Applying Post:".$b["Post"]."<br>";
            echo "Starting Salary:".$b["Salary"]."<br>";
            echo "Educational Requirements:".$b["Requirements"]."<br>";
            echo "E-Mail:".$b["Email"]."<br>";
            echo "Language needed:".$b["Language"]."<br>";
            echo "Required Skills:".$b["Skills"]."<br>";
            echo "</fieldset>";
        } 
?>