<?php include 'log/header.php' ?>


<div
    class="container"
    style="margin-top: 50px; margin-left: 920px;"
>
   
<br>

<button type="button" class="btn btn-primary"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pin-fill" viewBox="0 0 16 16">
  <path d="M4.146.146A.5.5 0 0 1 4.5 0h7a.5.5 0 0 1 .5.5c0 .68-.342 1.174-.646 1.479-.126.125-.25.224-.354.298v4.431l.078.048c.203.127.476.314.751.555C12.36 7.775 13 8.527 13 9.5a.5.5 0 0 1-.5.5h-4v4.5c0 .276-.224 1.5-.5 1.5s-.5-1.224-.5-1.5V10h-4a.5.5 0 0 1-.5-.5c0-.973.64-1.725 1.17-2.189A6 6 0 0 1 5 6.708V2.277a3 3 0 0 1-.354-.298C4.342 1.674 4 1.179 4 .5a.5.5 0 0 1 .146-.354"/>
</svg>IFCD0110</button>
<button type="button" class="btn btn-primary"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pin-fill" viewBox="0 0 16 16">
  <path d="M4.146.146A.5.5 0 0 1 4.5 0h7a.5.5 0 0 1 .5.5c0 .68-.342 1.174-.646 1.479-.126.125-.25.224-.354.298v4.431l.078.048c.203.127.476.314.751.555C12.36 7.775 13 8.527 13 9.5a.5.5 0 0 1-.5.5h-4v4.5c0 .276-.224 1.5-.5 1.5s-.5-1.224-.5-1.5V10h-4a.5.5 0 0 1-.5-.5c0-.973.64-1.725 1.17-2.189A6 6 0 0 1 5 6.708V2.277a3 3 0 0 1-.354-.298C4.342 1.674 4 1.179 4 .5a.5.5 0 0 1 .146-.354"/>
</svg>IFCTO31P0</button>
<button type="button" class="btn btn-primary"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pin-fill" viewBox="0 0 16 16">
  <path d="M4.146.146A.5.5 0 0 1 4.5 0h7a.5.5 0 0 1 .5.5c0 .68-.342 1.174-.646 1.479-.126.125-.25.224-.354.298v4.431l.078.048c.203.127.476.314.751.555C12.36 7.775 13 8.527 13 9.5a.5.5 0 0 1-.5.5h-4v4.5c0 .276-.224 1.5-.5 1.5s-.5-1.224-.5-1.5V10h-4a.5.5 0 0 1-.5-.5c0-.973.64-1.725 1.17-2.189A6 6 0 0 1 5 6.708V2.277a3 3 0 0 1-.354-.298C4.342 1.674 4 1.179 4 .5a.5.5 0 0 1 .146-.354"/>
</svg>IFCT029PO</button>

<script src="js/js.js"></script> <!----se coloco script--->



<div
    class="container"
>


<table
class="table-responsive table table-secondary" style="border: 2px solid black; margin-left: -300px"
>

<thead>
<tr>
<th scope="col">MODULOS</th>
<th scope="col">HORA MODULOS</th>
<th scope="col">NOTA FINAL</th>
</tr>

</thead>

<tbody>
<tr class="table table-primary">
<td scope="row">MF0950_2: Construcción de páginas web </td>
<td>210 Horas</td>
<td id="demo1"></td>

</tr>
<tr class="table table-primary">
<td scope="row">MF0951_2: Integración de componentes software en páginas 
web </td>
<td>180 Horas</td>
<td id="demo2"></td>

</tr>

</tr>
<tr class="table table-primary">
<td scope="row">MF0952_2: Publicación de páginas web </td>
<td>90 Horas</td>
<td id="demo3"></td>

</tr>



</tbody>

</table>
<h5 style="margin-left: -300px">Nota Promedio: <h3 id="demo"></h3></h5>
<button type="button" class="btn btn-primary" style="margin-top: -60px; margin-right: -100px" onclick="nota()">Calcular nota</button>










</div>



</div>


<form action="">

<div
  class="container"
  style="border: 2px solid black; margin-left: 620px"

<div class="mb-3">
  <label for="" class="form-label" style="margin-top: -40px;"><b>Nombre del Estudiante</b></label>
  <input
    type="text"
    class="form-control"
    name=""
    id=""
    aria-describedby="helpId"
    placeholder=""
    style="width: 500px; background-color: gray;"
  />

  <div class="mb-3">
  <label for="" class="form-label" style="width: 200px;float:right; margin-top: -32px; margin-right: 400px;"><b>Identificacion</b></label>
  <input
    type="text"
    class="form-control"
    name=""
    id=""
    aria-describedby="helpId"
    placeholder=""
    style="width: 300px; background-color: gray; margin-left: 660px; margin-top: -50px"
  />
 
</div>


<div class="mb-3">
<label for=""class="form-label" style="width: 100px; float: right; margin-right: 100px; margin-top: -52px">Calificacion</label>
<select name="" id="" style="float: right; margin-top: -50px; margin-right: 1px;">
  <option value="1">Apto</option>
  <option value="0">No apto</option>
</select>


<form action="" >
 

  

<button type="submit" class="btn btn-primary"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-floppy2" viewBox="0 0 16 16">
  <path d="M1.5 0h11.586a1.5 1.5 0 0 1 1.06.44l1.415 1.414A1.5 1.5 0 0 1 16 2.914V14.5a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 14.5v-13A1.5 1.5 0 0 1 1.5 0M1 1.5v13a.5.5 0 0 0 .5.5H2v-4.5A1.5 1.5 0 0 1 3.5 9h9a1.5 1.5 0 0 1 1.5 1.5V15h.5a.5.5 0 0 0 .5-.5V2.914a.5.5 0 0 0-.146-.353l-1.415-1.415A.5.5 0 0 0 13.086 1H13v3.5A1.5 1.5 0 0 1 11.5 6h-7A1.5 1.5 0 0 1 3 4.5V1H1.5a.5.5 0 0 0-.5.5m9.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5z"/>
</svg> REGISTRAR</button>

<button type="reset" class="btn btn-primary"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">
  <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5M11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47M8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5"/>
</svg> BORRAR</button>

</form>



<!------------------------------fin registrar-------------------------------->




<!----------------------modal de consultar---------------------------------->


<!-- Button trigger modal -->
<div style="float: right">
<form action="">
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-person-add" viewBox="0 0 16 16">
  <path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7m.5-5v1h1a.5.5 0 0 1 0 1h-1v1a.5.5 0 0 1-1 0v-1h-1a.5.5 0 0 1 0-1h1v-1a.5.5 0 0 1 1 0m-2-6a3 3 0 1 1-6 0 3 3 0 0 1 6 0M8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4"/>
  <path d="M8.256 14a4.5 4.5 0 0 1-.229-1.004H3c.001-.246.154-.986.832-1.664C4.484 10.68 5.711 10 8 10q.39 0 .74.025c.226-.341.496-.65.804-.918Q8.844 9.002 8 9c-5 0-6 3-6 4s1 1 1 1z"/>
</svg> Consultar Estudiantes
</button>

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">IDENTIFICACIÓN DEL ESTUDIANTE A CONSULTAR</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      
<div class="mb-3">
  <label for="" class="form-label">N# Identificacion</label>
  <input
    type="text"
    class="form-control"
    name=""
    id=""
    aria-describedby="helpId"
    placeholder=""
  />
  <small id="helpId" class="form-text text-muted">Colocar solo numero</small>
</div>






      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary">CONSULTAR</button>
      </div>
    </div>
  </div>
</div>




</div>

</div>
<br>
</div>


</form>


















<?php include 'log/footer.php' ?>

