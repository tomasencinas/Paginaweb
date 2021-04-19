<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="assets/css/main.css">
    <title> FIESTAS POPULARES</title>
</head>
<style>
 h1,h2{
     text-align:center;
 }

.container{
    display: grid;
			/*grid-gap: filas columns; este es como el grid template facilita el trabajo solo usas ese y cambias ambos filas y columnas con un solo comando SIN LA /    */
			grid-gap: 25px; /* si solo utilizas un valor en vez del de filas y columnas por separado toma ese unico valor para las filas y para las columas*/
            height: 99vh; /*vh sinifica viewport height osea que usa todo el espacio del alto del navegador*/
			/*grid-auto-flow: column; /*este sirve para cambiar los valores implicitos de css osea, que queremos que haga con nuevos elementos que no contemplamos por defecto este comando esta con valor de filas osea rows */
			/*grid-auto-columns: 200px 200px 200px 200px ; /* para usar esto debe estar elgrid-auto -flow en column si no no va a funcionar*/
            
            grid-template-columns: repeat(3, 1fr);
			grid-template-rows:  repeat(4, 1fr);
			justify-items :center; /*para aliniados de forma horizontal. por defecto esta en stretch que significa que el contenido va a utilizr todo el espacio dado por el grid*/
			/*align-items: start end center stretch;/*para aliniados de forma vertical*/
			/*justify-items :start end center stretch; /*para aliniados de forma horizontal. por defecto esta en stretch que significa que el contenido va a utilizr todo el espacio dado por el grid*/
			align-items: center;/*para aliniados de forma vertical*/
}
.mes{
    font-size:25px;
    color:white;
    width:310px;
    height:310px;
    background-color:#6c63a3 ;
	padding: 10px;
    border: 0.5px solid #0048ff;
    text-align:center;
}
.mes:hover{
    cursor:pointer;
    background:#4132a1;
}
.info{
    font-size:18px;
    text-align:left;
    padding-left:5px;
    list-style:none;
}
.info h2{
    font-size:25px;
    margin-bottom:1px;
    text-align:center;
}

button{
    width:150px;
    height:90px;
    margin-left:40%;
    margin-right:40%;
    margin-top:10px;
    margin-bottom:10px;
    
}
img{
    margin-left:25%;
    margin-right:40%;
    margin-top:10px;
    margin-bottom:10px;
}

</style>

<body>
<img src="images/fiestas.jpg" width="500" height="500">
<h1>Fiestas Populares de Ecuador</h1>
<h2>Las fiestas populares promocionan el turismo en Ecuador, dando a conocer la cultura, tradición, costumbres e identidad de un pueblo.</h2>
<section class="container">
    <div class="mes">
        <div class="info">
            <h2>Enero</h2>
            <li>1 al 6: La diablada de Pillaro</li>
            <li>6: Día de Reyes</li>
            <li>15: Fiesta de San Sebastián</li>
            <li>21: Fiestas de Santa Fé de Galan</li>
            <li>25: Fiestas de Urcuquí</li>
            <li>Fiesta de la Yuca en la Amazonía</li>
        </div>
    </div>
    
<div class="mes">
<div class="info">
            <h2>Febrero</h2>
            <li> 2: Fiesta de la Virgen de la Caridad</li>
            <li>4: Fiesta del Señor del Terremoto</li>
            <li>12: Día del Oriente Ecuatoriano</li>
            <li>18: Fiestas de Provincialización de Galápagos</li>
            <li>27: Batalla de Tarqui</li> 
            <li>Fiesta del Florecimiento Pawkar Raymi </li> 
        </div>


</div>
<div class="mes">
<div class="info">
            <h2>Marzo</h2>
            <li> 02 al 05: Carnaval en Ecuador</li>
            <li>Fiesta del Florecimiento Pawkar Raymi en Distintas ciudades </li>
        </div>
</div>
<div class="mes">
<div class="info">
            <h2>Abril</h2>
            <li> 13 al 15: Kasama de la Comunidad Tsachila </li>
            <li>19 al 21: Feria Agricola y Ganadera</li>
            <li>21: Fiesta de la Chonta</li>
        </div>
</div>
<div class="mes">
<div class="info">
            <h2>Mayo</h2>
            <li> 1  Día Internacional del Trabajo
            <li>2  Fiesta de las Cruces</li>
            <li>1 al 31 Fiestas de Cantonización</li>
            <li>3  Fiesta de la Chirimoya </li>
            <li>24  Batalla de Pichincha</li>
        </div>
</div>
<div class="mes">
<div class="info">
            <h2>Junio</h2>
            <li> 15  Corpus Cristi</li>
            <li> 21 al 24  Inti Raymi</li>
            <li>21 al 29  Toros Populares de San Pedro</li>
        </div>
</div>

<div class="mes">
<div class="info">
            <h2>Julio</h2>
            <li> 3  Toros Populares de Pillaro</li>
            <li> Fiestas Julianas</li>
            <li>21  Paseo del Chagra</li>
        </div>
</div>
<div class="mes">
<div class="info">
            <h2>Agosto</h2>
            <li> Fiestas Patronales de San Jacinto</li>
            <li> 5 al 7 Fiesta a la Virgen de las Nieves</li>
            <li>10  Primer Grito de la Independencia</li>
            <li>24 al 25  Fiesta Kakon Wiiñaë</li>
        </div>

</div>
<div class="mes">
<div class="info">
              <h2>Septiembre</h2>
            <li>2 al 15 Fiestas del Yamor</li>
            <li>6 al 14 Fiesta de la Jora </li>
            <li> 8 al 12 Fiesta del Maíz y del Turismo</li>
            <li>20 al 26 Feria Internacional del Banano</li>
            <li>22 Killa Raymi</li>
            <li>23 al 28 Fiestas de la Mama Negra</li>
            <li>24 al 28 Fiesta de los Lagos</li>
        </div>

</div>

<div class="mes">
<div class="info">
            <h2>Octubre</h2>
            <li>1 al 7  Fiesta de la Caceria del Zorro</li>
            <li>4 al 10  Feria de Durán </li>
            <li> 9  Fiestas de Octubre</li>
            <li>12  Rodeo Montubio</li>
            <li>13  Fiestas de Parroquialización de San Lorenzo y del Zhud</li>
            <li>13  Fiestas del Puná</li>
            <li>15   Fiestas de la Victoria</li>
        </div>

</div>
<div class="mes">
<div class="info">
            <h2>Noviembre</h2>
            <li>2: En todo el Ecuador se conmemora el día de los difuntos</li>
            <li>3: Día festivo por la Independencia de Cuenca (Azuay) </li>
            <li> 11: La Mama Negra en Latacuanga</li>
            <li>Sábados de noviembre: Toros del Señor de Giron</li>
            <li>21: Virgen del Quinche</li>
        </div>


</div>
<div class="mes">
<div class="info">
            <h2>Diciembre</h2>
            <li>6  Fiestas de Quito</li>
            <li>13  Fiesta de San Carlos Naranjal </li>
            <li>24: Noche Vieja</li>
            <li>25: Navidad</li>
            <li> 26 al 31 Fiesta de los Inocentes y fin de año</li>
        </div>
</div>
<br><br>
</section>
</body>
</html>