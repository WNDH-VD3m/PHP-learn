<?php

$filename = 'demo1.db';

    class myDBtest extends SQLite3{

        function __construct(){
            $this->open('/Users/apple/demo1.db');
        }

}

    $db = new myDBtest();

    if(!$db){
        echo $db->lastErrorMsg();
    }
    else{
        echo "Open the database successfully.\n";
        echo PHP_EOL;
    }


    $sql =<<<EOF
          SELECT * FROM COMPANY;
EOF;

    $ret = $db->query($sql);

    while ($row = $ret->fetchArray(SQLITE3_ASSOC)){

        echo "ID: " . $row['ID'] . "\n";
        echo PHP_EOL;
        echo "NAME: " . $row['NAME'] . "\n";
        echo PHP_EOL;
        echo "AGE: " . $row['AGE'] . "\n";
        echo PHP_EOL;
        echo "ADDRESS: " . $row['ADDRESS'] . "\n";
        echo PHP_EOL;
        echo "SALARY: " . $row['SALARY'] . "\n";

    }

    echo "Operation done successfully\n";

    $db->close();

?>
