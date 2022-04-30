<?php
    include 'header.php';
?>
<div class="inicio">
        <?php
        $nome = filter_input(INPUT_POST, "nome");
        $email = filter_input(INPUT_POST, "email");
        $msg = filter_input(INPUT_POST, "msg");
        date_default_timezone_set('America/Sao_Paulo');
        $data = date('l jS \of F Y h:i:s A');
        $data2 = date('d-m-y h:i:s');
        $d = date('d');
        $m = date('m');
        $a = date('y');
        $h = date('h');
        $mn = date('i');
        $s = date('s');

        echo"<p>Nome Infomrado: $nome</p><p>E-mail: $email</p><p>Mensagem: $msg</p><p>$data</p>";
        
        ?>
        <a href="contato.php"><button class="btn btn-primary">Voltar</button></a>

</div>
<?php
    include 'footer.php';
    $conteudo = "Contato via site: 
    
$data 
Nome Infomrado: $nome 
E-mail: $email 
Mensagem: $msg";
    $fp = fopen("X:\Breno\Contato$d-$m-$a $h _$mn _$s.txt","wb");
    fwrite($fp,$conteudo);
    fclose($fp);
?>