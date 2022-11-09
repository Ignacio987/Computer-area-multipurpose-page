$(document).ready(function(){     //Funcion para cargar los archivos de la tabla
  $("#myTable").dynamicTable({
        //definimos las columnas iniciales    
        columns: [{ //Fila donde Text es lo que se visualizara y key en si la "llave" donde se almacenaran los datos de "data"
              text: "Nombre",
              key: "name"
           },
          {
              text: "Seccion",
              key: "section"
          },
       
        ],
 
        //carga de datos (arreglo donde estaran los datos de la tabla)

        data: [{
              name: 'Jaime Gonzales',
              section: 1,  
          },
          {
              name: 'Demian Binimelis',
              section: 2,
          },
          {
              name: 'Pamela Vielma',
              section: 2,
          },
          {
            name: 'Dominga Muñiz',
            section: 1,
        },
        {
            name: 'Eugenio Belmonte',
            section: 1,
        },
        {
            name: 'Vanesa Ruz',
            section: 2,
        },
        {
            name: 'Inma Marin',
            section: 1,
        },
        {
            name: 'Maialen Verdugo',
            section: 2,
        },
        ],

        //definición de botones que apareceran en la tabla
        buttons: {
            addButton: '<input type="button" value="Nuevo" class="btn btn-success" />', //Aca definimos los estilos de los botones de
            cancelButton: '<input type="button" value="Cancelar" class="btn btn-primary" />',//boostrap, aca tambien podremos
            deleteButton: '<input type="button" value="Borrar" class="btn btn-danger" />',//modificar los botones en la tabla
            editButton: '<input type="button" value="Editar" class="btn btn-primary" />',
            saveButton: '<input type="button" value="Guardar" class="btn btn-success" />',
        },
        showActionColumn: true, 
        //condicionales
        getControl: function (columnKey) { // Esta funcion de columnas quiere decir que si "columnkey" es igual a section nos deja
            if (columnKey == "section") {//introducir un input de tipo numerico, con esto podremos añadior las secciones
              return '<input type="number" class="form-control" />';// si quitamos el class "form-control" tendremos menos control
            }                                                       //a la hora de añadir los datos


            return '<input type="text" class="form-control" />'; //esto es lo mismo pero con texto
        }

    });	    
});    