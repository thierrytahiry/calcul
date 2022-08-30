<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tri bulle</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="js/bootstrap.bundle.min.js">
</head>

<body>
    <div class="container">
        <header>
            <h1>Tri bulle</h1>
        </header>

        <section class="table table-streaped">
            <?php

            function init_tab()
            {
                $tab = array();
                for ($i = 0; $i < 15; $i++) {
                    $tab[$i] = rand(0, 100);
                }
                return $tab;
            }

            function bulle_sort($tab)
            {
                for ($i = 0; $i < 14; $i++) {
                    for ($j = 0; $j < (14-$i); $j++) {
                        if ($tab[$j] > $tab[$j + 1]) {
                            $temp = $tab[$j + 1];
                            $tab[$j + 1] = $tab[$j];
                            $tab[$j] = $temp;
                        }
                    }
                }

                return $tab;
            }

            function aff_tab($tab, $header)
            {
                $str = "<TABLE>";
                $lig1 = "<TR><TH>Indice:</TH>";
                $lig2 = "<TR><TH>$header:</TH>";

                foreach ($tab as $cle => $val) {
                    $lig1 .= "<TD> $cle,</TD>";
                    $lig2 .= "<TD> $val,</TD>";
                }

                $lig1 .= "</TR>";
                $lig2 .= "</TR>";

                $str .= $lig1 . $lig2 . "</TABLE>";

                return $str;
            }

            $tab = init_tab();
            echo aff_tab($tab, "Initialisation ");
            echo aff_tab(bulle_sort($tab), "Tri bulle ");

            ?>
        </section>
    </div>
</body>

</html>