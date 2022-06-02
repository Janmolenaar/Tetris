<html>
<head>
    <link href="tetris.css" rel="stylesheet" />
</head>
<body>
    <h1>PHPtetris</h1>
    <?php
    require 'Board.class.php';

    session_start();
    $board = isset($_SESSION["board"]) ?  $_SESSION["board"] : new Board(10, 20);
    $_SESSION["board"] = $board;

    if (count($_GET) > 0)
    {
        $col = intval($_GET["col"]);
        if ($col >= 0 && $col <= 9)
        {
            $board->Throw($col);
        }
    }

    $board->DrawGrid();
    ?>
</body>
</html>






