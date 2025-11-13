<? 
 $mat = $_POST['tmat'];

if(!empty($mat)){
   // $pegaCpf = substr($cpf,0,3).'.'.substr($cpf,3,3).'.'.substr($cpf,6,3).'-'.substr($cpf,9,2);
    echo json_encode($mat);
}else{
    echo json_encode("Invalido");
}
   
?>