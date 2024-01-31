<?php

include('enEtapa.php');
include('enTipoCarta.php');
include('Jugador.php');
include('Carta.php');
include('Partida.php');
include('Cartel.php');

// Aquí puedes usar las clases como lo necesites

// Crear una instancia de Partida
$partida = new Partida(1, enEtapa::compra);

// Realizar acciones con la instancia de Partida
$partida->Jugar();
$partida->VerCartas();
// ...

// Crear una instancia de Jugador (puedes tener clases concretas que heredan de Jugador)
$carta = new Carta("as", 5);
$carta->Jugar();
?>