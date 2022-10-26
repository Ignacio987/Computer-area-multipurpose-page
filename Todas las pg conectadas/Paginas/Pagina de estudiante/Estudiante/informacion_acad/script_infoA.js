let rut = '21.421.217-k';

fetch('get.php')
.then(respuesta => respuesta.json())
.then(datos => {

    datos[0].map(item =>{
        document.getElementById("nombre_a").innerHTML = item.nombre;
        document.getElementById("rut_a").innerHTML = item.rut;
        document.getElementById("correo_a").innerHTML = item.correo;
        document.getElementById("id_c").innerHTML = item.id_carrera;
        document.getElementById("ingreso").innerHTML = item.fecha;
        document.getElementById("registro").innerHTML = item.registro;
        document.getElementById("situacion").innerHTML = item.situacion;
        document.getElementById("plan").innerHTML = item.plan;
        document.getElementById("cursos").innerHTML = `<a href="" class="list-group-item list-group-item-action">${item.cursos_ins}</a>`
    })
    datos[1].map(item =>{
        document.getElementById("nombre_c").innerHTML = item.Nombre_Carrera;
    })
    let str = "";
    datos[2].map(item => {
        str += `<tbody>
        <tr>
          <th scope="row">Año</th>
          <td id="año">${item.anio}</td>
        </tr>
        <tr>
          <th scope="row">Semestre</th>
          <td>${item.semestre}</td>
        </tr>
        <tr>
          <th scope="row">Siglas</th>
          <td>${item.siglas}</td>
        </tr>
        <tr>
          <th scope="row">Nombre Curso</th>
          <td>${item.nombre_curso}</td>
        </tr>
        <tr>
          <th scope="row">Seccion</th>
          <td>${item.seccion}</td>
        </tr>
        <tr>
          <th scope="row">Créditos</th>
          <td>${item.creditos}</td>
        </tr>
        <tr>
          <th scope="row">Tipo</th>
          <td>${item.tipo}</td>
        </tr>
        <tr>
          <th scope="row">Salas/Horarios</th>
          <td>${item.salas_horarios}</td>
        </tr>
      </tbody> `
    })
    document.getElementById("tabla_c").innerHTML = str;
})


