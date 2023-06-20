fetch('http://localhost/cartaSanta/get.php')
    .then(response => response.json())
    .then(data => {
        const dataContainer = document.getElementById('dataContainer');

        // Limpiar el contenedor de datos antes de agregar nuevos datos
        dataContainer.innerHTML = '';

        // Recorrer los datos y agregarlos al contenedor
        data.forEach(item => {

            console.log(item.nombre);
            console.log(item.edad);
            console.log(item.ciudad);
            console.log(item.estado);
            console.log(item.regalo);

        });
    })
    .catch(error => {
        console.error('Ocurrió un error:', error);
    });
