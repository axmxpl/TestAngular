<?
  if (isset($_GET['input'])) {
    header('name: value');
    $arr = array('responde' => 'text: '.$_GET['input']);
    setcookie('aaa','bbb');
    echo json_encode($arr);
  }
?>
