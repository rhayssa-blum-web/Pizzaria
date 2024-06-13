<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script   type="text/javascript">
        function primeirafuncao( value)   {
          alert (" Esse é o contato para confirmar o seu pedido->51-992732847")
      }
      </script>
    <title>Pizzaria Das Fadas</title>
</head>
<body>



<img class="imgheader" src="foto/pizza.png" alt="">

<div class="container">

        <div class="imagens">
            <input type="radio" name="radio" id="imagem1" checked>
            <input type="radio" name="radio" id="imagem2">
            <input type="radio" name="radio" id="imagem3">
            <input type="radio" name="radio" id="imagem4">
            <input type="radio" name="radio" id="imagem5">
            <input type="radio" name="radio" id="imagem6">


            <div class="imagem img1">
                <img src="foto/Captura de Tela (21).png" alt="">
            </div>

            <div class="imagem img2">
                <img src="https://www.minhareceita.com.br/app/uploads/2022/12/pizza-de-pepperoni-caseira-portal-minha-receita.jpg" alt="">
            </div>

            <div class="imagem img3">
                <img src="https://www.academiaassai.com.br/sites/default/files/styles/noticia_1020x640/public/sabores_de_pizza_morango_com_chocolate.jpg?itok=DlQsbz89"
                    alt="">
            </div>

            <div class="imagem img4">
                <img src="https://static.vecteezy.com/ti/fotos-gratis/p1/12374913-pizza-de-queijo-havaiano-na-mesa-de-madeira-conceito-de-comida-caseira-gratis-foto.jpg"
                    alt="">
            </div>

            <div class="imagem img5">
                <img src="https://static.itdg.com.br/images/1200-675/ab93c09d82d7004b7c440fe5d3d734ad/131483-original.jpg" alt="">
            </div>

            <div class="imagem img6">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRd7Q7jYtUMN-j3CEfEkt4sO_6-ORoCJXBvIw&s" alt="">
            </div>
         
        </div>

        <div class="navegacao">

            <label class="bar" for="imagem1"></label>
            <label class="bar" for="imagem2"></label>
            <label class="bar" for="imagem3"></label>
            <label class="bar" for="imagem4"></label>
            <label class="bar" for="imagem5"></label>
            <label class="bar" for="imagem6"></label>

        </div>
        
    </div>


<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pizzafadas";

//Criar a conexão

$conn = new mysqli($servername, $username, $password, $dbname);

if($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $telefone = $_POST["telefone"];
    $endereco = $_POST["endereco"];

    $sql = "INSERT INTO cliente (nome, telefone, endereco) VALUE ('$nome', '$telefone', '$endereco')";

    
    
    
    if ($conn->query($sql) === TRUE) {
        echo "<p class='p1' >Pedido Feito!</p>";
    } else {
        echo "Erro: " . $sql . "<br>" . $conn->error;
    }

}

$conn->close();

?>
 

 <section class="script">
            <input type="button" value="Nos chame no WhatsApp!" onclick="primeirafuncao()">
        </section>

<h1>Registrar Pedidos</h1>

<form action="" method="post">

Nome: <input class = "formulario" type="text" name="nome" id="" required autocomplete="off"> 
<br>
Telefone: <input class = "formulario" type="number" name="telefone" id="" required autocomplete="off">
<br>
Endereço: <input class = "formulario" type="text" name="endereco" id="" required>
<br>
<input class = "formulario" type="submit" value="Concluir Pedido">



</form>

<!-- <div>
    <img src="foto/Captura de Tela (21).png" alt="">
</div> -->



  




    <footer>Feito Por Mariana e Rhayssa</footer>


</body>
</html>