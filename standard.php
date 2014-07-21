<?php
    class db_connection
    {
        function db_connection()
        {
            $con = mysql_connect('localhost', 'root', 'rajeev');
            $conn = mysql_select_db('Ryan',$con);
        }
        function db_fetch($query)
        {
            $result = mysql_query($query);
            $i = 0;                     
            while($rows = mysql_fetch_array($result))
            {
                if($rows[0]!=NULL)
                { 
                    $arr[$i++] = $rows[0];
                }
            }            
            return $arr;        
        }
        function db_disconnection()
        {
            mysql_close($con);
        }
    }

    /*
        auto complete functionallity
    */


?>