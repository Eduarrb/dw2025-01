const botonesDelete = document.querySelectorAll('.delete');

botonesDelete.forEach(btn => {
    // console.log(btn);
    btn.addEventListener('click', function(e) {
        e.preventDefault();
        // console.log(e.target.dataset.id);
        const id = e.target.dataset.id;
        Swal.fire({
            title: "¿Estas seguro de eliminar el siguiente item?",
            text: "¡Esto no es reversible!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "¡Si, Eliminalo!"
          }).then((result) => {
            if (result.isConfirmed) {
                // console.log(this);
                location.href = location.href + `?delete=${id}`;
            }
          });
    })
})

