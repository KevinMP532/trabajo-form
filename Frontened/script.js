
function Print() {
  axios({
    method: 'POST',
    url: 'http://localhost/trabajo-form/Backend/endpoints/visualizarPeliculas.php'
  }).then(response => {
    for(let i=0;i < response.data.length;i++ ){
      var div = document.createElement('div'+i)
      div.class = "a"
      var html = ""
      document.getElementById("imgbox").appendChild(div);
      html+='<div>'+response.data[i].nombre+'</div>';
      //document.getElementById('div'+i).innerHTML = '<img src="'+ response.data[i].img+'/>' 
      for(let p=0;i < response.data.length;i++ ){
        var tag = document.createElement("p");
        var text = document.createTextNode(response.data[i].nombre);
        tag.appendChild(text)
        div.appendChild(tag)
        tag.class = "eso"
        var div = document.createElement('div');
        div.class = "div"+i
        var img = document.createElement('img'); 
        img.src = response.data[i].img;    
        img.height = 100;
        img.width =100; 
        img.id = "imagen"   
        div.width = img.width
        div.height = img.height   
        document.body.appendChild(div);   
        div.appendChild(img);  
      }
    }


  }).catch(function (error) {
    console.log(error);
  })
}
let form = document.getElementById('myForm')
function CrearPelicula(){
let datos = new FormData(form);
  axios({
    method: 'POST',
    url: 'http://localhost/trabajo-form/Backend/endpoints/visualizarPeliculas.php',
    body: {
      idpelicula: datos.get("idpeli"),
      Nombre: datos.get("pname"),
      Img: datos.get("linkpeli"),
      Activo: datos.get("estadopeli")
    }
  }).then(response => {

  }).catch(function (error) {
    console.log(error);
  })

}