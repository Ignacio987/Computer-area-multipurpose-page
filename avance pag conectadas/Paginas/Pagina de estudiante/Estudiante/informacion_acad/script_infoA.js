fetch(get_al.php)
.then(res => res.json())
.then(data => {
    data.map(item =>{
        document.getElementById("nombre").innerHTML = "";
        document.getElementById("nombre").innerHTML = item.nombre + item.fApellido + item.sApellido;

        document.getElementById("rut").innerHTML = "";
        document.getElementById("rut").innerHTML = item.rut;

        document.getElementById("correo").innerHTML = "";               
        document.getElementById("correo").innerHTML = item.correo;               
    })
})

fetch(get_cursos.php)
.then(res => res.json())
.then(data => {
    str = "";
    data.map(item => {
        str =+ `<a href="" onclickc="info_curso(${item.nombre})" class="list-group-item list-group-item-action">${item.nombre}</a>`
        

    })
    document.getElementById("cursos").innerHTML = "";
    document.getElementById("cursos").innerHTML = str;


})

fetch(get_car.php)
.then(res => res.json())
.then(data => {
    data.map(carrera => {
        document.getElementById("Nombre_carrera").innerHTML = ""
        document.getElementById("Nombre_carrera").innerHTML = carrera.nombre;

        document.getElementById("id_carrera").innerHTML = "";
        document.getElementById("id_carrera").innerHTML = carrera.id;
        
        document.getElementById("plan").innerHTML = "";
        document.getElementById("plan").innerHTML = carrera.plan;

        document.getElementById("anio_ingreso").innerHTML = "";
        document.getElementById("anio_ingreso").innerHTML =carrera.anio;

        document.getElementById("registro").innerHTML ="";
        document.getElementById("registro").innerHTML = carrera.registro;

        document.getElementById("situacion").innerHTML = "";
        document.getElementById("situacion").innerHTML = carrera.situacion;
    })
})



function info_curso(curso){
    fetch(get_cur.php)
    .then(res => res.json())
    .then(data => {
        data.map(curso => {
            if(curso.nombre == curso){
                document.getElementById("anio").innerHTML = "";
                document.getElementById("anio").innerHTML = curso.anio;

                document.getElementById("sem").innerHTML = "";
                document.getElementById("sem").innerHTML = curso.semestre;

                document.getElementById("siglas").innerHTML = "";
                document.getElementById("siglas").innerHTML = curso.siglas ;


                document.getElementById("nombre_curso").innerHTML = "";
                document.getElementById("nombre_curso").innerHTML = curso.nombre ;


                document.getElementById("seccion").innerHTML = "";
                document.getElementById("seccion").innerHTML = curso.seccion ;


                document.getElementById("creditos").innerHTML = "";
                document.getElementById("creditos").innerHTML = curso.creditos ;


                document.getElementById("tipo").innerHTML = "";
                document.getElementById("tipo").innerHTML = curso.tipo ;

                
                document.getElementById("salas").innerHTML = "";
                document.getElementById("salas").innerHTML = curso.salas + "|"+ curso.horario ;
            }
        })
    })
}




