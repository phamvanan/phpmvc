<?php
function getStatusName($id)
{
    switch ($id) {
        case 1:
            return "Hien";
            break;
        case 2:
            return "An Front";
            break;

        default:
            return "An Het";
            break;
    }
}
function chuyentrang($url = 'index.php')
{
    header('location: ' . $url);
    exit;
}
function href($controller = '', $action = '', $params = [], $body = [])
{
    //build session msg
    if ($body) {
        foreach ($body as $key => $value) {
            $_SESSION['body'][$key] = $value;
        }
    }
    //build querystring cho href
    $strparams = '';
    if (is_array($params) && $params) {
        foreach ($params as $key => $value) {
            $strparams .= "&$key=$value";
        }
    }
    if (!$controller && !$action)
        return '?' . ltrim($strparams, '&');
    return "?controller={$controller}&action={$action}{$strparams}";
}
function showmsg()
{
    $msg = '';
    if (isset($_SESSION['body']['type'], $_SESSION['body']['msg']) && $_SESSION['body']['type'] && $_SESSION['body']['msg']) {
        $msg =  msg($_SESSION['body']['msg'], $_SESSION['body']['type']);
    }
    unset($_SESSION['body']['type']);
    unset($_SESSION['body']['msg']);
    return $msg;
}
function msg($msg, $type = 'success')
{
    return '<div class="alert alert-' . $type . ' alert-dismissible fade show" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
    <strong>' . $msg . '</strong> 
  </div>
  ';
}
