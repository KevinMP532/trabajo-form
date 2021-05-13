
 function myFunction() {
   
  axios({
    method: 'POST',
    url: 'http://localhost/trabajo-form/Backend/endpoints/visualizarPeliculas.php',
    data: {
      id: "xd"
    }
  }).then(response => {

    return response

  })
}
console.log(myFunction())