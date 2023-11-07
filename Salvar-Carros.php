<?php
    $acao = @$_REQUEST['acao'];
    switch ($acao) {
        case 'cadastrar':

            $nome = @$_REQUEST['nome'];
            $modelo = @$_REQUEST['modelo'];
            $ano = @$_REQUEST['ano'];
            $cor = @$_REQUEST['cor'];


            $sql = "INSERT INTO carro (nome,modelo,ano,cor) VALUES ('$nome','$modelo',$ano,'$cor')";
            $resultado = $conn->query($sql);
            if($resultado){
                echo "<script>alert('Carro cadastrado com sucesso!')</script>";
                echo "<script>location.href='?page=Listar-Carros'</script>";
            } else{
                echo "<script>alert('Erro ao cadastrar categoria!')</script>";
                echo "<script>location.href='?page=Listar-Carros'</script>";
             }
    }
?>