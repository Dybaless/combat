<?php        

$basePath = $_SERVER['HTTP_REFERER']; 

$sql= "SELECT * FROM menu";
$response = $db->query( $sql );
$listMenu = $response->fetchAll();
foreach( $listMenu as $cle=>$menu) {
$monScript = '#';
if( !empty( $menu['script'] ) ) {
$monScript = $basePath . $menu['script'];
}
 echo '<a class="nav-link" href="' . $basePath . $monScript . '">' . $menu['id'] . ' - ' . $menu['nom'] . '</a>';
} 