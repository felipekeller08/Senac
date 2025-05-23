<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Petshop - Vacina e Alimentos</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            text-align: center;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #e0e0e0;
            color: #5a2a82;
            padding: 10px;
            margin-bottom: 20px;
        }

        form {
            background-color: #ffffff;
            padding: 15px;
            margin: 0 auto;
            width: 300px;
        }

        .resultado {
            background-color: #ffffff;
            padding: 10px;
            margin: 20px auto;
            width: 300px;
            text-align: left;
        }

        input[type="text"] {
            width: 90%;
            padding: 5px;
            margin-bottom: 10px;
        }

        input[type="submit"] {
            padding: 5px 10px;
        }
    </style>
</head>
<body>

    <header>
        <h1>Petshop - Vacina e Alimentos</h1>
    </header>

    <form method="post">
        <label>Nome do cliente:</label><br>
        <input type="text" id="cliente" name="cliente"><br>
        <label>Nome do pet:</label><br>
        <input type="text" id="pet" name="pet"><br>
        <h2>Vacina:</h2>
        <label>Valor:</label><br>
        <input type="text" id="vlrvacina" name="vlrvacina"><br>
        <label>Quantidade:</label><br>
        <input type="text" id="qtdevacina" name="qtdevacina"><br>

        <h2>Alimentos:</h2>
        <label>Valor:</label><br>
        <input type="text" id="vlralimento" name="vlralimento"><br>
        <label>Quantidade:</label><br>
        <input type="text" id="qtdealimento" name="qtdealimento"><br>

        <input type="submit" value="Salvar">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $qtdevacina = $_POST["qtdevacina"];
        $vlrvacina = $_POST["vlrvacina"];
        $qtdealimento = $_POST["qtdealimento"];
        $vlralimento = $_POST["vlralimento"]; 
        $cliente = $_POST["cliente"];
        $pet = $_POST["pet"]; 

        $totalvac = $vlrvacina * $qtdevacina;
        $totalali = $vlralimento * $qtdealimento;
        $vlrtotal = $totalvac + $totalali;

        echo "<div class='resultado'>";
        echo "Nome do cliente: $cliente<br>";
        echo "Nome do pet: $pet<br>";
        echo "Valor total das vacinas: R$$totalvac<br>"; 
        echo "Valor total dos alimentos: R$$totalali<br>"; 
        echo "<strong>Valor total: R$$vlrtotal</strong>";
        echo "</div>";
    }
    ?>

</body>
</html>
