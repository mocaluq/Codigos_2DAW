<?php
require_once 'enEtapa.php';
require_once 'enTipoCarta.php';
require_once 'Carta.php';
require_once 'Jugador.php';
require_once 'Partida.php';
require_once 'Cartel.php';

// Aquí puedes usar las clases como lo necesites

// Crear una instancia de Partida
$partida = new Partida(1, enEtapa::Compra);

// Realizar acciones con la instancia de Partida
$partida->Jugar();
$partida->VerCartas();
// ...

// Crear una instancia de Jugador (puedes tener clases concretas que heredan de Jugador)
$jugador = new MiJugador();
$jugador->Jugar();
?>