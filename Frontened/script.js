
function myFunction() {
  axios({
    method: 'POST',
    url: 'http://localhost/trabajo-form/Backend/endpoints/visualizarPeliculas.php'
  }).then(response => {




    console.log(response)

  }).catch(function (error) {
    console.log(error);
  })
}