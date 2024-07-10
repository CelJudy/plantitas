<?php

    function select($query){
        $connect = pg_connect("host=dpg-cq6v5h6ehbks7397bcf0-a.virginia-postgres.render.com port=5432 user=celjudy password=jv2U97lyMZZoFcW4za34Swfqjz6xumPM dbname=plantitas");
        $res = pg_query($connect, "select * from libros");
        return $res;
        /* while ($row = pg_fetch_row($res)) {
            echo "El isbn es:$row[0]  El titulo es:$row[1]  El autor es:$row[2] <br>";
        } */ 
    }

    
   
/*     $res = pg_query($connect, "select * from libros");

    while ($row = pg_fetch_row($res)) {
        echo "El isbn es:$row[0]  El titulo es:$row[1]  El autor es:$row[2] <br>";
    }  */

    /* $result = pg_prepare($connect, "my_query", "insert into libros values (default, $1,$2,$3,$4);");
        $result = pg_execute($connect, "my_query", array('hunger games','uhgj','0','0')); */

    function insertar($query, $valores){
        $connect = pg_connect("host=dpg-cq6v5h6ehbks7397bcf0-a.virginia-postgres.render.com port=5432 user=celjudy password=jv2U97lyMZZoFcW4za34Swfqjz6xumPM dbname=plantitas");
        var_dump($connect);
        $result = pg_prepare($connect, "my_query", $query);
        $result = pg_execute($connect, "my_query", $valores);
        var_dump($result);
    }

    //insertar("insert into libros values (default, $1,$2,$3,$4);", array('hunger games','uhgj','0','0'));

