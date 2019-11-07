< !DOCTYPE html>
    <html>

    <head>
        <title></title>
        <style>
            .completed {
                background-color: green;
            }

            .incompleted {
                background-color: red;
            }
        </style>
    </head>

    <body><?php $classes=array('2C'=> array('projects'=> array("wp2-01",
            "wp2-02",
            "wp2-03",
            "wp2-04",
            "wp2-05",
            "wp2-06",
            "wp2-07",
        ),
        'user'=> array("jdoe999",
            "MatyasBaBca"
        )),
    '3C'=> array('projects'=> array("wp5-01",
        ),
        'user'=> array('kristian33'
        )));

foreach ($classes as $class=> $classvalue) {
    $final .="<h1> $class </h1>";

    foreach ($classvalue['user'] as $user) {
        $final .="<b>$user</b> <br>";

        foreach ($classvalue['projects'] as $project) {
            $URL="https://github.com/$user/$project";
            $page=file_get_contents($URL);

            echo $final;
            $found=strpos($content, "index.php");

            if ($find===false) {
                if ( !empty($page)) {
                    $final .='<div class="completed">'.$project.' Ano <br> </div>';
                }

                else {
                    $final .='<div class="incompleted">'.$project.' Ne <br> </div>';
                }
            }
        }
    }

    echo $final;
    $found=strpos($content, "index.php");

    if ($find===false) {
    }

        ?></body>

    </html>