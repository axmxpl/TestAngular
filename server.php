<?
  if (isset($_GET['input'])) {
    header('header: value');
    $arr = array('responde' => 'text: '.$_GET['input']);
    setcookie('cookie','value');
    echo json_encode($arr);
  }
  //testline
  ech0 '';
?>
