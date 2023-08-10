<!DOCTYPE html>
<html>
<head>
    <title>Exemplo de Formulário do carro</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css\styles.css">
</head>
<body>
    <div class="container">
        <h3>Preencha os Dados</h3>
        <form method="post">
            <div class="form-group">
                <label for="altura">Altura:</label>
                <input type="number" class="form-control" id="altura" name="altura" required>
            </div>
            <div class="form-group">
                <label for="largura">Modelo:</label>
                <input type="number" class="form-control" id="largura" name="largura" required>
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
        
        <?php
        include 'retangulo.php';
        
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $altura = $_POST["altura"];
            $largura = $_POST["largura"];
            
            
            $retangulo = new Retangulo($altura, $largura);
            
            echo "<h3>Dados Enviados</h3>";
            echo "<p><strong>Área do rentangulo:</strong> " . $retangulo->calcular_area() . "</p>";
            echo "<p><strong>Perímetro do retangulo:</strong> " . $retangulo->calcular_perimetro() . "</p>";
        }
        ?>
    </div>
</body>
</html>
