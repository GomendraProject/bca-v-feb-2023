<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        Document
    </title>
</head>
<body>
<h1>
    Hola

    <?php

    function GetStudents() {
        // get from db
        return [
            'Student 1',
            'Student 2'
        ];
    }

    function GetDetailedStudents() {
        return [
            [
                "id" => 1,
                "name" => "Student 1"
            ],
            [
                "id" => 2,
                "name" => "Student 2"
            ],
        ];
    }

    echo "Shola";

    $students = GetStudents();

    // for-loop { do while, while, for }

    // iterator based loop

    foreach($students as $student) {
        echo $student;
    }

    ?>

    <ul>
        <?php
            $detailedStudents = GetDetailedStudents();
            foreach($detailedStudents as $student) {
                ?>
                    <li>
                        #<?= $student["id"] ?>
                        <?php
                            echo $student["id"];
                        ?>
                        <span>
                            <?= $student["name"] ?>
                        </span>
                    </li>
                <?php
            }
        ?>
    </ul>
     
    <ul>

    <?php

    foreach($students as $student) {
        echo "<li> " . $student . "</li>";
    }

    ?>

    </ul>

    <ul>
        <li>Hola Student</li>
        <li>Hola Student</li>
        <li>Hola Student</li>
        <li>Hola Student</li>
        <li>Hola Student</li>
        <li>Hola Student</li>
        <li>Hola Student</li>
        <li>Hola Student</li>
    </ul>
</h1>    
</body>
</html>