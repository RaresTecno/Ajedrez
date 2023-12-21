
class juego{
    static turnoBlanco = "blanco";
    static turnoNegro = "negro";
    piezasNegras = {
        p1 : 1,
        p2 : 1,
        p3 : 1,
        p4 : 1,
        p5 : 1,
        p6 : 1,
        p7 : 1,
        p8 : 1,
        R1 : 1,
        R2 : 1,
        N1 : 1,
        N2 : 1,
        B1 : 1,
        B2 : 1,
        Q : 1,
        K : 1,
        P1 : 0,
        P2 : 0,
        P3 : 0,
        P4 : 0,
        P5 : 0,
        P6 : 0,
        P7 : 0,
        P8 : 0,
    };

    // Piezas perdidas = -1
    piezasPerdidas = {};

    // Método a implementar, de momento solo muestra la casilla pulsada
    casilla_vacia(event){
        document.addEventListener("click", function(event){
            var casilla = event.target.getAttribute("id");
            alert("Casilla tocada: "+casilla);
        })  
    }
    mover_pieza(){
        var moviendo = false;
        var offSetX, offSetY;

        var pieza;
        var casillaActual;

        document.addEventListener("mousedown", function(event) {
            pieza = event.target;
            pieza.style.zIndex = "10";
            casillaActual(pieza);
        })
        
        document.addEventListener("mousedown", function(event) {
            if (pieza) {
                moviendo = true;
                offSetX = event.clientX - pieza.getBoundingClientRect().left;
                offSetY = event.clientY - pieza.getBoundingClientRect().top;
            }
           
        })
        document.addEventListener("mousemove", function (event) {
            if (moviendo && pieza) {
                pieza.style.left = event.clientX - offSetX + "px";
                pieza.style.top = event.clientY - offSetY + "px";
            }
        })
        document.addEventListener("mouseup", function (event) {
            moviendo = false;
            pieza = null;
        })
    }
    casillaActual(pieza){
        document.addEventListener("mousedown", function(event) {
            casillaActual = event.target.parentNode.getAttribute("id");
            console.log(casillaActual);
        })
    }
       // Revisar
       mover_a(){
        var pieza;
        var destinos = document.querySelectorAll(".casilla");
        document.addEventListener("mousedown", function(event) {
            pieza = event.target;
            pieza.style.zIndex = "10";
            console.log(pieza);
        })
        pieza.addEventListener('dragstart',function (event) {
            event.dataTranser.setData('text/plain','');
        })
        destinos.forEach(function (destino) {
            destino.addEventListener('dragover',function (event) {
                event.preventDefault();
            })

            destino.addEventListener('drop',function (event) {
                event.preventDefault();

                var destinoRect = destino.getBoundingClientRect();
                var contenedor = document.querySelector('#a2').getBoundingClientRect();

                pieza.style.left = destinoRect.left - contenedor.left + (destinoRect.width - pieza.clientWidth) / 2 + 'px';
                pieza.style.top = destinoRect.top - contenedor.top + (destinoRect.height - pieza.clientHeigth) / 2 + 'px';
            })
        });
    }
}