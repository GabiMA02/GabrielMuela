<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Pieda Papel o Tijeras</title>
</head>

    <h2>PIEDA, PAPEL O TIJERAS</h2>
    <h2>HEMOS REALIZADO UNA MEJORA EN NUESTRO PROGRAMA!!</h2>
    <form action="" method="POST">
        <label>Escoja una opción: </label>
        <input type="radio" name="opcion" value="piedra">PIEDRA
        <input type="radio" name="opcion" value="papel">PAPEL
        <input type="radio" name="opcion" value="tijeras">TIJERAS
        <input type="submit" name="jugar" value="JUGAR">
    </form>

    <?php

    if(isset($_REQUEST['jugar'])){
        if(isset($_POST['opcion'])){

            $empates = 0;
            $derrotas = 0;
            $victorias = 0;

            $jugador = $_POST["opcion"];
            $opcionesMaquina = ["piedra", "papel", "tijeras"];

            $maquina =  $opcionesMaquina[array_rand($opcionesMaquina)];

            echo "Has elegido <b>" . $jugador . "</b> y la máquina <b>" . $maquina . "</b><br>";

            if($jugador == $maquina){
                echo "Empate!";
                $empates++;
            
            } else if($jugador == "piedra"){        // SI EL JUGADOR ELIGE PIEDRA
                if($maquina == "papel") {
                    echo "Gana la máquina!";
                    $derrotas++;
                } else if ($maquina == "tijeras") {
                    echo "Gana el jugador!";
                    $victorias++;
                    }
            
            } else if($jugador == "papel") {        // SI EL JUGADOR ELIGE PAPEL
                if($maquina == "piedra") {
                    echo "Gana el jugador!";
                    $victorias++;
                } else if($maquina == "tijeras") {
                        echo "Gana la máquina!";
                        $derrotas++;
                    }

            } else if($jugador == "tijeras") {      // SI EL JUGADOR ELIGE TIJERAS
                if($maquina == "piedra") {
                    echo "Gana la máquina!";
                    $derrotas++;
                } else if($maquina == "papel") {
                    echo "Gana el jugador!";
                    $victorias++;
                }
            }
            echo "<br> Empates: ".$empates . " Derrotas: " . $derrotas . " Victorias: " . $victorias;
        }
    }

    ?>

</body>
</html>
