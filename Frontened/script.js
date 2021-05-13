
function sexo() {
  axios({
    method: 'POST',
    url: 'http://localhost/trabajo-form/Backend/endpoints/visualizarPeliculas.php'
  }).then(response => {
    for(let i=0;i < response.data.length;i++ ){
      let lulu = document.getElementById("imgbox")
      lulu.innerHTML = response.data[i].img
      var html = ""
      html+='<div>'+response.data[i].nombre+'</div>';
      document.getElementById('imgbox').innerHTML+= html
      return(response.data[i])
    }


  }).catch(function (error) {
    console.log(error);
  })
}


function myFunction() {
  axios({
    method: 'POST',
    url: 'http://localhost/trabajo-form/Backend/endpoints/visualizarPeliculas.php'
  }).then(response => {
    console.log(response.data)

  }).catch(function (error) {
    console.log(error);
  })
}
