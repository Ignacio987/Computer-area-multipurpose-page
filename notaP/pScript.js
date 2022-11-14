
function cursos(){
    fetch('get_cursos.php')
    .then(respuesta => respuesta.json())
    .then(datos => {
        let str = "";
        datos.map(curso =>{
          str += `
          <tr>
          <th scope="row"><input type="checkbox" ></th>
          <td>${curso.Siglas}</td>
          <td>${curso.Nombre_Curso}</td>
          <td>${curso.Seccion}</td>
          <td>${curso.Anio}</td>
        </tr>
          `
        })    
        document.getElementById("cTabla_body").innerHTML = str;
    })
}

function new_soli(){
    let str = `
    <h5>Nueva Solicitud</h5>
    <br>
    
    <h6>Cursos Inscritos</h6>
  
    <table class="table ">
      <thead>
        <tr>
          <th scope="col">Sel</th>
          <th scope="col">Sigla</th>
          <th scope="col">Nombre curso</th>
          <th scope="col">Seccion</th>
          <th scope="col">Año Ins.</th>
        </tr>
      </thead>
      <tbody id="cTabla_body">
      </tbody>
    </table>
    <br>
    <br>
    
    <div class="form-group" class="col-2">
      <label for="select3"> Motivo</label>
      <select  name="select3" id="select3" class="form-control" style="width:60% ; " >
          <option value="--Seleccionar--">--Seleccionar motivo--</option>
          <option value="academico">Académico</option>
          <option value="cambii_u">Cambio de Universidad</option>
          <option value="cambio_interno">Cambio interno UCT</option>
          <option value="disconformidad_c">Disconformidad Carrera</option>
          <option value="disconformidad_u">Disconformidad Universidad</option>
          <option value="eco">Económicos</option>
          <option value="hijos">Hijo</option>
          <option value="Otros">Otros</option>
          <option value="Personales">Personales</option>
          <option value="Salud">Salud</option>
          <option value="Traslado">Traslado</option>
          <option value="Vocacion">Vocacion</option>
          
      </select> <br>
    </div>
    <label for="observacion"> Observacion</label><br>
    <input  name="observacion" type="text" maxlength="600" style="height:200px ; width: 80%;">
  
    
    <div>
      <br>
      <br>
      <h6>Archivos Necesarios para respaldar solicitud</h6>
      <div class="">
        
        <input type="file" class="form-control" id="inputGroupFile02">
        <br>
        <input type="file" class="form-control" id="inputGroupFile02">
        <br>
        <input type="file" class="form-control" id="inputGroupFile02">
        <br>
        
      </div>
      <button class="btn btn-primary" onclick="alert('solicitud enviada')">Enviar Solicitud</button>
    </div>` ;
  
    document.getElementById("soli_body").innerHTML = str;
    cursos();
}


function new_prorroga(){
    let str = `
    <h5>Solicitud de Prórroga</h5>
    <br>
    
    <h6>Cursos Inscritos</h6>
  
    <table class="table" ">
      <thead>
        <tr>
          <th scope="col">Sel</th>
          <th scope="col">Sigla</th>
          <th scope="col">Nombre curso</th>
          <th scope="col">Seccion</th>
          <th scope="col">Año Ins.</th>
        </tr>
      </thead>
      <tbody id="cTabla_body">
      </tbody>
    </table>
    <br>
    <br>
    
    <div class="form-group" class="col-2">
      <label for="select3"> Motivo</label>
      <select  name="select3" id="select3" class="form-control" style="width:60% ; " >
          <option value="--Seleccionar--">--Seleccionar motivo--</option>
          <option value="academico">Académico</option>
          <option value="cambii_u">Cambio de Universidad</option>
          <option value="cambio_interno">Cambio interno UCT</option>
          <option value="disconformidad_c">Disconformidad Carrera</option>
          <option value="disconformidad_u">Disconformidad Universidad</option>
          <option value="eco">Económicos</option>
          <option value="hijos">Hijo</option>
          <option value="Otros">Otros</option>
          <option value="Personales">Personales</option>
          <option value="Salud">Salud</option>
          <option value="Traslado">Traslado</option>
          <option value="Vocacion">Vocacion</option>
          
      </select> <br>
    </div>
    <label for="observacion"> Observacion</label><br>
    <input  name="observacion" type="text" maxlength="600" style="height:200px ; width: 80%;">
  
    
    <div>
      <br>
      <br>
      <h6>Archivos Necesarios para respaldar solicitud</h6>
      <div class="">
        
        <input type="file" class="form-control" id="inputGroupFile02">
        <br>
        <input type="file" class="form-control" id="inputGroupFile02">
        <br>
        <input type="file" class="form-control" id="inputGroupFile02">
        <br>
        
      </div>
      <button class="btn btn-primary" onclick="alert('Prórroga Solicitada')">Enviar Solicitud</button>
    </div>` ;
  
    document.getElementById("soli_body").innerHTML = str;
    cursos();
}
  