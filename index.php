<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/style.css" />
    <title>Combat</title>
</head>
<body>
    <header class="container">
        <h1>Mini jeu de combat</h1>
        <nav class="nav">
            <?php
                try
                {
                    $db = new PDO("mysql:host=localhost:3306;dbname=combat;charset=utf8", "root", "");
                    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
                }
                catch( Execption $e )
                {
                    die( "Erreur : " . $e->getMessage());
                }
                $sql= "SELECT *FROM menu";
                $response = $db->query( $sql );
                $listMenu = $response->fetchAll();
                foreach( $listMenu as $cle=>$menu) {
                    echo '<a class="nav-link" href="#">' . $menu['id'] . ' - ' . $menu['nom'] . '</a>';
                } 
            ?>
        </nav>
    </header>

    <main class="container">

    </main>

    <footer class="container">

    </footer>
</body>
</html>