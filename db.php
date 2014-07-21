<?php
    $con = mysql_connect('localhost', 'root', 'rajeev');
    $conn = mysql_select_db('Ryan',$con);

    if($_POST)
    {
        $q = $_POST['search'];
        $sql_req = mysql_query("select states from ajax_example where states like '%$q%' order by states");
        $i=0;
        while($row=mysql_fetch_array($sql_req))
        {
            $states[$i++] = $row['states'];
        }        
    }
    foreach($states as $state)
    {
        echo $state;
    }
?>