<h1 class='m-3'> Lista de carros </h1>

<table class="table m-3 table-hover table-border table-striped">
    <tr>
        <th>#</th>
        <th>Nome</th>
        <th>Modelo</th>
        <th>Ano</th>
        <th>Cor</th>
    </tr>
    
    <?php
        $response = $conn->query("SELECT * FROM `carro`");

        $qtd = $response->num_rows;
        if($qtd == 0){
            echo "<p class='m-4'><b>Não existem registros!</b></p>";
        } else {
            echo "<p class='m-4'>Encoutrou <b>$qtd</b> resultados.";
        }
        while($row = $response->fetch_object()){
            $id = $row->id;
            $nome = $row->nome;
            $modelo = $row->modelo;
            $ano = $row->ano;
            $cor = $row->cor;

            echo "<tr>";
                echo "<td> $id</td>";
                echo "<td> $nome</td>";
                echo "<td> $modelo</td>";
                echo "<td> $ano</td>";
                echo "<td> $cor</td>";
            echo "</tr>";

        }
    ?>
</table>