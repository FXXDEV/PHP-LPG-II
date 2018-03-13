<?php 



$n = $_POST['n'];
$ln = $_POST['ln'];
$cpf = $_POST['cpf'];
$rg = $_POST['rg'];
$email = $_POST['email'];
$cidade = $_POST['cidade'];
$estado = $_POST['estado'];
$cep = $_POST['cep'];
$endereco = $_POST['endereco'];
$tfr = $_POST['tfr'];
$tfm = $_POST['tfm'];
$complemento = $_POST['complemento'];
$senha = $_POST['senha'];
$aceito =$_POST['aceito'];

$resultado = "<br> Nome completo: $n $ln <br>CPF: $cpf <br>RG: $rg <br>E-mail: $email <br>Cidade: $cidade <br>Estado: $estado <br>CEP: $cep <br>Endereço: $endereco <br>Senha: $senha";
$bd_arquivo = "Nome completo: $n $ln CPF: $cpf RG: $rg E-mail: $email Cidade: $cidade <Estado: $estado CEP: $cep Endereço: $endereco Senha: $senha";

echo $resultado;



//Cria um Arquivo

$arquivo = '../db/banco.txt'; 

$criar = fopen($arquivo, "a+",0); 

//Define o conteudo do arquivo 

$conteudo = "$bd_arquivo\r\n"; 

//Escreve no arquivo que foi criado 

$escrever = fwrite($criar,$conteudo); 

if($escrever == true){ 
    echo "Cadastro Efetuado com sucesso!"; 
 

} else {
    echo "Erro ao salvar dados em $arquivo"; 
} 





//echo"<script>window.location='inserir.php';</script>"


?>