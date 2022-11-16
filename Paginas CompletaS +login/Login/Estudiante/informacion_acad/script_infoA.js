let rut = '21.421.217-k';

fetch('get.php')
.then(respuesta => respuesta.json())
.then(datos => {
    let arr = []
    let strin = ""
    datos[0].map(item =>{
        document.getElementById("nombre_a").innerHTML = item.nombre;
        document.getElementById("rut_a").innerHTML = item.rut;
        document.getElementById("correo_a").innerHTML = item.correo;
        document.getElementById("id_c").innerHTML = item.id_carrera;
        document.getElementById("ingreso").innerHTML = item.fecha;
        document.getElementById("registro").innerHTML = item.registro;
        document.getElementById("situacion").innerHTML = item.situacion;
        document.getElementById("plan").innerHTML = item.plan;
        arr = item.cursos_ins.split(',');
        console.log(arr);
    })

    arr.forEach(element => {
      strin +=`<a onclick=info_curso("${element}")  class="list-group-item list-group-item-action">${element}</a>`
    });
    document.getElementById("cursos").innerHTML = strin;

    datos[1].map(item =>{
        document.getElementById("nombre_c").innerHTML = item.Nombre_Carrera;
    })
    
    
})


function info_curso(curso){
  let data  = new FormData();
  data.append('curso',curso);

  fetch("get_cursos.php",{
    method :'POST',
    body : data
  })
  .then(res => res.json())
  .then(data =>{
    let str = "";
    data.map(item => {
        str += `<tbody id:"t-body">
        <tr>
          <th scope="row">Año</th>
          <td id="año">${item.Anio}</td>
        </tr>
        <tr>
          <th scope="row">Semestre</th>
          <td>${item.Semestre}</td>
        </tr>
        <tr>
          <th scope="row">Siglas</th>
          <td>${item.Siglas}</td>
        </tr>
        <tr>
          <th scope="row">Nombre Curso</th>
          <td>${item.Nombre_Curso}</td>
        </tr>
        <tr>
          <th scope="row">Seccion</th>
          <td>${item.Seccion}</td>
        </tr>
        <tr>
          <th scope="row">Créditos</th>
          <td>${item.Creditos}</td>
        </tr>
        <tr>
          <th scope="row">Tipo</th>
          <td>${item.Tipo}</td>
        </tr>
        <tr>
          <th scope="row">Salas/Horarios</th>
          <td>${item.Salas_Horarios}</td>
        </tr>
      </tbody> `
    })
    document.getElementById("tabla_c").innerHTML = str;
  })
}