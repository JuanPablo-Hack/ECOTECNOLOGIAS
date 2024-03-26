document.addEventListener("DOMContentLoaded", function () {
  document
    .getElementById("comprarInternet")
    .addEventListener("submit", comprarInternet);
});

async function comprarInternet(e) {
  e.preventDefault();
  const swalWithBootstrapButtons = Swal.mixin({
    customClass: {
      confirmButton: "btn btn-success",
      cancelButton: "btn btn-danger",
    },
    buttonsStyling: false,
  });

  swalWithBootstrapButtons
    .fire({
      title: "Deseas enviar una petición de contratación?",
      icon: "info",
      showCancelButton: true,
      confirmButtonText: "Si, enviar",
      cancelButtonText: "No, cancelar!",
      reverseButtons: true,
    })
    .then((result) => {
      if (result.isConfirmed) {
        var form = document.getElementById("comprarInternet");
        let data = new FormData(form);
        fetch("controllers/EnviarPeticion.php", {
          method: "POST",
          body: data,
        })
          .then((result) => result.text())
          .then((result) => {
            if (result == 1) {
              swalWithBootstrapButtons.fire(
                "Petición enviada!",
                "Felicidades pronto recibirás un mensaje con más información.",
                "success"
              );
              setTimeout(function () {
                location.reload();
              }, 3000);
            }
          })
          .catch((error) => {
            console.log(error);
          });
      } else if (
        /* Read more about handling dismissals below */
        result.dismiss === Swal.DismissReason.cancel
      ) {
        swalWithBootstrapButtons.fire(
          "Cancelado",
          "No hemos podido enviar tu petición.",
          "error"
        );
      }
    });
}
