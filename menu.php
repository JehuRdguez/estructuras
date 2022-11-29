<?php require_once("header.php"); ?>


<div style="text-align: right; margin-top: -5px; margin-right: 10px;">
    <a type="button" style="z-index:1000;" class="btn btn-outline-light" onclick="alerta()">8. <i class="fa-solid fa-arrow-right-from-bracket"></i></a>
</div>
<br><br>

<center>
    <a class="btn btn-outline-dark btn-lg" style="display: none;" onclick="vector()">1. Vectores</a><br><br>

    <a class="btn btn-outline-dark btn-lg" style="display: none;" onclick="matriz()">2. Matrices</a><br><br>

    <a class="btn btn-outline-dark btn-lg" style="display: none;" onclick="lista()">3. Listas</a><br><br>

    <a class="btn btn-outline-dark btn-lg" style="display: none;" onclick="pilas()">4. Pilas</a><br><br>

    <a class="btn btn-outline-dark btn-lg" style="display: none;" onclick="colas()">5. Colas</a><br><br>

    <a class="btn btn-outline-dark btn-lg" style="display: none;" data-bs-toggle="modal" data-bs-target="#exampleModal">6. Archivos</a><br><br>

    <a class="btn btn-outline-dark btn-lg" style="display: none;" onclick="datos()">7. Datos del alumno</a>

</center>


<script type="text/javascript">
    function alerta() {
        var mensaje;
        var opcion = confirm("¿Desea salir del menú?");
        if (opcion == true) {
            $(document).ready(function() {
                $(".btn").fadeOut(1000);
            });
            setTimeout(function() {
                window.location.href = "index.php";
            }, 1100);
        } else {
            return false;
        }
    }

    $(document).ready(function() {
        $('.btn').fadeIn(1000);
    });


    function datos() {
        alert("Alumno: Reinaldo Jehú Rodríguez Álvarez\nGrado y grupo: 4-TID-1 \nNúmero de cuenta: 20210083");
    }

    function vector() {
        let valVect;
        let vec = [];
        let datoVect;

        valVect = prompt("¿Cuántos datos se van a ingresar en el vector?: ");
        for (i = 1; i <= valVect; i++) {
            datoVect = prompt("Dato #" + i + " a ingresar en el vector: ");
            vec.push(datoVect);
        }
        if (valVect > 0) {
            alert("Datos del vector: " + vec);
        }
    }

    function matriz() {
        let val1;
        let val2;
        let val3;
        let val4;
        var mat = new Array(2);
        mat[0] = new Array(2);
        mat[1] = new Array(2);

        alert("Ingresa las posiciones en una matriz 2x2: ");
        val1 = prompt("Posición [0][0]: ");
        val2 = prompt("Posición [0][1]: ");
        val3 = prompt("Posición [1][0]: ");
        val4 = prompt("Posición [1][1]: ");

        mat[0][0] = val1;
        mat[0][1] = val2;
        mat[1][0] = val3;
        mat[1][1] = val4;

        alert("El resultado es:"+mat);

    }

    function lista() {
        var lista = ["Perro","Cerdo","Gato"];
        alert("Los datos de la lista son: "+lista);
        valLis = prompt("Añade un animal a la lista: ");
        lista.push(valLis);
        alert("Los datos de la lista son: "+lista);
    }

    function pilas() {
        let pila = [1,2,3,4,5];
        alert("Los datos de la pila son: "+pila);
        alert("El elemento " + pila.pop() + " se a extraído")
        alert("Los datos de la pila son: "+pila);
    }

    function colas() {
        let cola = [1,2,3,4,5];
        alert("Los datos de la cola son: "+cola);
        alert("El elemento " + cola.shift() + " se a extraído")
        alert("Los datos de la cola son: "+cola);
    }

</script>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Archivo "texto.txt"</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <?php
      $archivo = fopen("texto.txt","r");
      while(! feof($archivo)) {
        $linea = fgets($archivo);
        echo $linea. "<br>";
      }
      
      fclose($archivo);
      ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>

<?php require_once("footer.php"); ?>