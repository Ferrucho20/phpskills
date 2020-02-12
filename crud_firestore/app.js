// Initialize Cloud Firestore through Firebase sacado de la documentacion de cloud firestore
firebase.initializeApp({
    apiKey: "AIzaSyD_FIqd9GHACFBw0_1q91wrc8XyrmjVpMc",
    authDomain: "prueba-importacion-caa65.firebaseapp.com",
    projectId: "prueba-importacion-caa65",
    
  });
  
var db = firebase.firestore();

/* funcion que recoge la data de los imputs de html */
function guardar(){
    var nombre = document.getElementById('nombre').value;
    var apellido = document.getElementById('apellido').value;
    var fecha = document.getElementById('fecha').value;
/*  script sacado de la documentacion de cloud firestore, crea por default una coleccion llamada users
    con 3 campos first, last, born 
    * INSERT
    */
    db.collection("users").add({
        first: nombre,
        last: apellido,
        born: fecha
    })
    .then(function(docRef) {
        console.log("Document written with ID: ", docRef.id);
        /* despues de darle clic a guardar los campos quedan vacios value='' */
        document.getElementById('nombre').value='';
        document.getElementById('apellido').value='';
        document.getElementById('fecha').value='';
    })
    .catch(function(error) {
        console.error("Error adding document: ", error);
    });
}
//leer documentos READ
var tabla = document.getElementById('tabla');
// usamos onSnapshot que es un agente de escucha, para actualizar el READ automaticamente es decir la tabla con 
// los usuarios, inicialmente usamos un get.then pero asi no actualiza automaticamente la tabla
db.collection("users").onSnapshot((querySnapshot) => {
    tabla.innerHTML = '';
    // este foreach se repite por cada uno de los objetos creados
    querySnapshot.forEach((doc) => {
        console.log(`${doc.id} => ${doc.data().first}`);
        // con innerHTML reemplazamos lo que aparece como codigo html y con el +
        // hacemos que por cada ciclo se agregue un nuevo dato, por eso en la linea 39
        // pintamos vacia la tabla porque si no nos repite los datos continuamente
        tabla.innerHTML += `
            <tr>
            <th scope="row">${doc.id}</th>
            <td>${doc.data().first}</td>
            <td>${doc.data().last}</td>
            <td>${doc.data().born}</td>
            </tr>
        `
    });
}); 
