<?php
    // require "./inc/sesiones.php" ;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/index.css">
    <script src="juego_js\juego_ajedrez.js"></script>
</head>
<body>
<h1>Ajedrez</h1>
<h2>Jugador blanco</h2>
<script>
    let a = new juego();
    // a.casilla_h1();
    // a.casilla_vacia();
    a.mover_pieza();
    // a.mover_a();
    
</script>
    <div id="tablero">

        <div id="fila-8" class="fila">
            <div class="casilla columna-1 c-blanca" id="a8"><div class="punto"></div><div class="pieza B-Rook" id="BR1"></div></div>
            <div class="casilla columna-2 c-negra" id="b8"><div class="punto"></div><div class="pieza B-Knight" id="BN1"></div></div>
            <div class="casilla columna-3 c-blanca" id="cc8"><div class="punto"></div><div class="pieza B-Bishop" id="BB1"></div></div>
            <div class="casilla columna-4 c-negra" id="d8"><div class="punto"></div><div class="pieza B-Queen" id="BQ1"></div></div>
            <div class="casilla columna-5 c-blanca" id="e8"><div class="punto"></div><div class="pieza B-King" id="BK1"></div></div>
            <div class="casilla columna-6 c-negra" id="f8"><div class="punto"></div><div class="pieza B-Bishop" id="BB2"></div></div>
            <div class="casilla columna-7 c-blanca" id="g8"><div class="punto"></div><div class="pieza B-Knight" id="BN2"></div></div>
            <div class="casilla columna-8 c-negra" id="h8"><div class="punto"></div><div class="pieza B-Rook" id="BR2"></div></div>
        </div>
        
        <div id="fila-7" class="fila">
            <div class="casilla columna-1 c-negra" id="a7"><div class="punto"></div><div class="pieza B-pawn" id="Bp1"></div></div>
            <div class="casilla columna-2 c-blanca" id="b7"><div class="punto"></div><div class="pieza B-pawn" id="Bp2"></div></div>
            <div class="casilla columna-3 c-negra" id="c7"><div class="punto"></div><div class="pieza B-pawn" id="Bp3"></div></div>
            <div class="casilla columna-4 c-blanca" id="d7"><div class="punto"></div><div class="pieza B-pawn" id="Bp4"></div></div>
            <div class="casilla columna-5 c-negra" id="e7"><div class="punto"></div><div class="pieza B-pawn" id="Bp5"></div></div>
            <div class="casilla columna-6 c-blanca" id="f7"><div class="punto"></div><div class="pieza B-pawn" id="Bp6"></div></div>
            <div class="casilla columna-7 c-negra" id="g7"><div class="punto"></div><div class="pieza B-pawn" id="Bp7"></div></div>
            <div class="casilla columna-8 c-blanca" id="h7"><div class="punto"></div><div class="pieza B-pawn" id="Bp8"></div></div>
        </div>

        <div id="fila-6" class="fila">
            <div class="casilla columna-1 c-blanca" id="a6"><div class="punto"></div></div>
            <div class="casilla columna-2 c-negra" id="b6"><div class="punto"></div></div>
            <div class="casilla columna-3 c-blanca" id="c6"><div class="punto"></div></div>
            <div class="casilla columna-4 c-negra" id="d6"><div class="punto"></div></div>
            <div class="casilla columna-5 c-blanca" id="e6"><div class="punto"></div></div>
            <div class="casilla columna-6 c-negra" id="f6"><div class="punto"></div></div>
            <div class="casilla columna-7 c-blanca" id="g6"><div class="punto"></div></div>
            <div class="casilla columna-8 c-negra" id="h6"><div class="punto"></div></div>
        </div>

        <div id="fila-5" class="fila">
            <div class="casilla columna-1 c-negra" id="a5"><div class="punto"></div></div>
            <div class="casilla columna-2 c-blanca" id="b5"><div class="punto"></div></div>
            <div class="casilla columna-3 c-negra" id="c5"><div class="punto"></div></div>
            <div class="casilla columna-4 c-blanca" id="d5"><div class="punto"></div></div>
            <div class="casilla columna-5 c-negra" id="e5"><div class="punto"></div></div>
            <div class="casilla columna-6 c-blanca" id="f5"><div class="punto"></div></div>
            <div class="casilla columna-7 c-negra" id="g5"><div class="punto"></div></div>
            <div class="casilla columna-8 c-blanca" id="h5"><div class="punto"></div></div>
        </div>

        <div id="fila-4" class="fila">
            <div class="casilla columna-1 c-blanca" id="a4"><div class="punto"></div></div>
            <div class="casilla columna-2 c-negra" id="b4"><div class="punto"></div></div>
            <div class="casilla columna-3 c-blanca" id="c4"><div class="punto"></div></div>
            <div class="casilla columna-4 c-negra" id="d4"><div class="punto"></div></div>
            <div class="casilla columna-5 c-blanca" id="e4"><div class="punto"></div></div>
            <div class="casilla columna-6 c-negra" id="f4"><div class="punto"></div></div>
            <div class="casilla columna-7 c-blanca" id="g4"><div class="punto"></div></div>
            <div class="casilla columna-8 c-negra" id="h4"><div class="punto"></div></div>
        </div>

        <div id="fila-3" class="fila">
            <div class="casilla columna-1 c-negra" id="a3"><div class="punto"></div></div>
            <div class="casilla columna-2 c-blanca" id="b3"><div class="punto"></div></div>
            <div class="casilla columna-3 c-negra" id="c3"><div class="punto"></div></div>
            <div class="casilla columna-4 c-blanca" id="d3"><div class="punto"></div></div>
            <div class="casilla columna-5 c-negra" id="e3"><div class="punto"></div></div>
            <div class="casilla columna-6 c-blanca" id="f3"><div class="punto"></div></div>
            <div class="casilla columna-7 c-negra" id="g3"><div class="punto"></div></div>
            <div class="casilla columna-8 c-blanca" id="h3"><div class="punto"></div></div>
        </div>

        <div id="fila-2" class="fila">
            <div class="casilla columna-1 c-blanca" id="a2"><div class="punto"></div><div class="pieza W-pawn" id="Wp1"></div></div>
            <div class="casilla columna-2 c-negra" id="b2"><div class="punto"></div><div class="pieza W-pawn" id="Wp2"></div></div>
            <div class="casilla columna-3 c-blanca" id="c2"><div class="punto"></div><div class="pieza W-pawn" id="Wp3"></div></div>
            <div class="casilla columna-4 c-negra" id="d2"><div class="punto"></div><div class="pieza W-pawn" id="Wp4"></div></div>
            <div class="casilla columna-5 c-blanca" id="e2"><div class="punto"></div><div class="pieza W-pawn" id="Wp5"></div></div>
            <div class="casilla columna-6 c-negra" id="f2"><div class="punto"></div><div class="pieza W-pawn" id="Wp6"></div></div>
            <div class="casilla columna-7 c-blanca" id="g2"><div class="punto"></div><div class="pieza W-pawn" id="Wp7"></div></div>
            <div class="casilla columna-8 c-negra" id="h2"><div class="punto"></div><div class="pieza W-pawn" id="Wp8"></div></div>
        </div>

        <div id="fila-1" class="fila">
            <div class="casilla columna-1 c-negra" id="a1"><div class="punto"></div><div class="pieza W-Rook" id="WR1"></div></div>
            <div class="casilla columna-2 c-blanca" id="b1"><div class="punto"></div><div class="pieza W-Knight" id="WN1"></div></div>
            <div class="casilla columna-3 c-negra" id="c1"><div class="punto"></div><div class="pieza W-Bishop" id="WB1"></div></div>
            <div class="casilla columna-4 c-blanca" id="d1"><div class="punto"></div><div class="pieza W-Queen" id="WQ"></div></div>
            <div class="casilla columna-5 c-negra" id="e1"><div class="punto"></div><div class="pieza W-King" id="WK"></div></div>
            <div class="casilla columna-6 c-blanca" id="f1"><div class="punto"></div><div class="pieza W-Bishop" id="WB2"></div></div>
            <div class="casilla columna-7 c-negra" id="g1"><div class="punto"></div><div class="pieza W-Knight" id="WN2"></div></div>
            <div class="casilla columna-8 c-blanca" id="h1"><div class="punto"></div><div class="pieza W-Rook" id="WR2"></div></div>
        </div>
        
    </div>
    <a href="prueba.php">prueba</a>
</body>
</html>