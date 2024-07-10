<?php
require 'bd.php';

insertar("insert into plantitas values (default, $1, $2)", array("suculenta", "calor"));
