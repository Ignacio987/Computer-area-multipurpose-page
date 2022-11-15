fetch('asignaturas.php')
.then(res => res.json())
.then(data => {
    let arr = data["Cursos Inscritos"].split(',');

    let str = "";
    arr.map(item => {
        str  +=`
        <li><a class="dropdown-item" onclick=ver_notas("${item}")>${item}</a></li>`
    })
    document.getElementById('cursos_list').innerHTML = str;
})

function ver_notas(curso){
    let data  = new FormData();
    data.append('curso',curso);
  
    fetch("get_notas.php",{
      method :'POST',
      body : data
    })
    .then(res => res.json())
    .then(data => {
        let encabezados = "";
        let notas = "";
        console.log(data);
        let claves = Object.keys(data); // claves = ["nombre", "color", "macho", "edad"]
        for(let i=1; i< claves.length; i++){
          
          let clave = claves[i];
          
          encabezados += `
          <th>${clave}</th>`

          notas += `
            <td>${data[clave]}</td>
          `
          console.log(data[clave]);

        }
        document.getElementById("head_table").innerHTML = encabezados;
        document.getElementById("calif").innerHTML = notas;
    })
}