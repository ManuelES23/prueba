const cosecha = {
  id: "",
  chofer: "",
  fecha: "",
  lote: "",
  kilos: "",
  productor: "",
  ubicacion: "",
};

document.addEventListener("DOMContentLoaded", function () {
  iniciarApp();
});

function iniciarApp() {
  mostrarCosechas();
}

async function mostrarCosechas() {
  let divCosechas = document.querySelector("#cosechas");
  let cosechasJson = await consultarCosechasAPI();
  cosechasJson.forEach((cosecha) => {
    const { id, chofer, placas, lote, fecha, kilos, productor, ubicacion } =
      cosecha;
    let row = `
        <li>
            <p>Fecha: <span>${fecha}</span></p>
            <p>Chofer: <span>${chofer}</span></p>
            <p>Placas: <span>${placas}</span></p>
            <p>Lote: <span>${lote}</span></p>
            <p>Kilos: <span>${kilos}</span></p>
            <p>Productor: <span>${productor}</span></p>
            <p>Ubicación: <span>${ubicacion}</span></p>
            <div class="btn-group">
                <a class="boton boton-actualizar"
                    href="/cosechas/actualizar?id=${id}">Actualizar</a>
                <form action="/cosechas/eliminar" method="POST">
                    <input type="hidden" name="id" id="id" value="${id}">
                    <input type="submit" value="Eliminar" class="boton-eliminar">
                </form>
            </div>
        </li>
    `;
    divCosechas.innerHTML += row;
  });
}

async function consultarCosechasAPI() {
  try {
    const url = "http://prueba.localhost/cosechas/consultar";
    const resultado = await fetch(url);
    console.log("🚀 ~ consultarServiciosAPI ~ resultado:", resultado);
    const cosechas = await resultado.json();
    return cosechas;
  } catch (error) {
    console.log(error);
  }
}
