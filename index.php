<?php 
namespace phoenix\json;

public function echoJson($code,$msg,$data){
  return json_encode(array('code'=>$code,'msg'=>$msg,'data'=>$data));
}
?>