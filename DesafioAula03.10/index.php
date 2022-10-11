<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora Viagem</title>
    <style>
 .boxprincipal {
    border: 1px dotted #6959CD;
    border-radius: 5px;
    margin: auto;
    width: 450px;
    font-size: 20px;
    background: ghostwhite;
    padding: 10px;
}
 
.boxprincipal h3 {
    text-align: center;
}
 
.boxprincipal h2 {
    text-align: center;
}
 
.div-campo-form {
    display: block;
    margin: 20px 0px 20px 20px;
}
 
.div-campo-form input[type="number"] {
    width: 80px;
    font-size: 20px;  
}
 
.div-calc {
    display: block;
    text-align: center;
    margin-bottom: 20px;
}
 
.textoInforme {
    text-align: center;
    font-size: 18px;
}
 
.btn-calc[type="submit"] {
    color: #FFDA55;
    border-radius: 10px;
    background-color: black;
    width: 80%;
    height: 40px;
    font-size: 18px;
    font-weight: bold;
}
 
.linkCalcularNovamente {
    text-align: center;
    margin-top: 20px;
    font-size: 20px;
}
 
.linkCalcularNovamente a{
    text-decoration: none;
    color: blueviolet;
}
    </style>
</head>
<body>
    <h1>Calculadora da Viagem</h1>
    <hr>
 
    <div class="textoInforme">
        <p>Informe os dados da viagem abaixo</p>
    </div>
 
    <div class="boxprincipal">
        <form method="post" action="viagem.php">
 
            <div class="div-campo-form">
                <label>Consumo médio do veículo: </label>
                <input type="number" name="consumo" step="0.01" min="0" required>
                <label>Km/L</label>
            </div>
 
            <div class="div-campo-form">
                <label>Distância total: </label>
                <input type="number" name="distancia" min="0" required>
                <label>Km</label>
            </div>
 
            <div class="div-campo-form">
                <label>Valor médio do combustível: R$ </label>
                <input type="number" name="combustivel" step="0.001" min="0" required>
            </div>
 
            <div class="div-campo-form">
                <label>Total gasto com pedágios: R$ </label>
                <input type="number" name="pedagio" step="0.01" min="0" required>
            </div>
            
            <div class="div-calc">
                <input class="btn-calc" type="submit" value="Calcular Gastos">
            </div>
 
        </form>
    </div>
 
</body>
</html>