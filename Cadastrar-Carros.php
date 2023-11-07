<h1 class="m-3"> Cadastrar categoria </h1>

<form action="?page=Salvar-Carros" method="POST" class="m-3">
    <input type="hidden" name="acao" value="cadastrar"/>
    
    <label> Nome Carro </label>
    <input type="text" name="nome" class="form-control">
     <label> Modelo Carro </label>
    <input type="text" name="modelo" class="form-control">
     <label> Ano Carro </label>
    <input type="number" name="ano" class="form-control">
     <label> Cor Carro </label>
    <input type="text" name="cor" class="form-control">
    
    <div class="mt-3">  
        <button type="submit" value="Cadastrar" class="btn btn-success">
            Cadastrar
        </button>
    </div>
</form>