var rut = storage.getItem(rut_user);


fetch("buscar_cursos.php")
.then(res => res.json())
.then(data => {
    let str = "";
    console.log(data);
    data.map(item => {
        str += `
        <li><a class="dropdown-item" onclick="seccion(${item.id})" href="#">${item.id}:${item.nombre_curso}</a></li>`
    })

    document.getElementById("cursos_disp").innerHTML = ""
    document.getElementById("cursos_disp").innerHTML = str;

});

function seccion(id){
    fetch("buscar_seccion.php")
    .then(res => res.json())
    .then(data => {
        let txt = ""
        data.map(item => {
            if(item.id_curso == id){
                txt += `
                <li><a class="dropdown-item" onclick="ver_alumnos${item.id}" href="#">${item.nombre_seccion}</a></li>`
            }
        
        })

        document.getElementById("secciones").innerHTML="";
        document.getElementById("secciones").innerHTML=txt;
    })
    
}


function ver_alumnos(id){
    fetch("buscar_alumnos.php")
    .then(res => res.json())
    .then(data => {
        let txt = ""
        data.map(item => {
            txt += `
            <tr>
                  <th scope="row">1</th>
                  <td>${item.nombre_alumno}</td>
                  <td>
                    <div class="btn btn-primary" onclick=editar_al(${item.rut})>editar</div> 
                  </td>
                  <td>${item.nota1}</td>
                  <td>${item.nota2}</td>
                  <td>${item.nota3}</td>
                  <td>${item.nota4}</td>
                  <td>${item.nota5}</td>

            </tr>`
        })

        document.getElementById("alumnos").innerHTML="";
        document.getElementById("alumnos").innerHTML=txt;
        
    })
    
}


function save_alumnos(id){
    fetch("editar alumnos",{
        method : "POST",
        body: document.getElementById("notas_edit")
    })
    .then(res=>res.json())
    .then(data => {

    })

}
