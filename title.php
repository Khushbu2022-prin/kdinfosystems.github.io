<?PHP
$menuactive = basename($_SERVER['PHP_SELF']);
switch($menuactive){
    case 'index.php':
        $title = "KDInfosystem  || Home";
        break;
    default:
      $title="Title";
      break;

}

?>