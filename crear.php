
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.6">
    <title>Como Crear un CRUD con Firebase 7.14.2 y Bootstrap 4 </title> 

    <link rel="icon" href="https://nubecolectiva.com/favicon.ico">

    <link rel="canonical" href="https://getbootstrap.com/docs/4.4/examples/starter-template/">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="https://getbootstrap.com/docs/4.4/examples/starter-template/starter-template.css" rel="stylesheet">

    <style type="text/css">
      .negrita{
        font-weight: bold;
      }
    </style>


  </head>
  <body>
    <header>
      <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
          <a class="navbar-brand" href="https://nubecolectiva.com"><img src="https://nubecolectiva.com/img/logo.png" class="img-fluid"></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample07" aria-controls="navbarsExample07" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarsExample07">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item active">
              <a class="nav-link" href="https://nubecolectiva.com">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="https://blog.nubecolectiva.com" target="_blank">Blog</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contacto</a>
            </li> 
            </ul>

            <div class="btn-group btodt" role="group" aria-label="Basic example">
              <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#reportarmodal">Reportar Error</button>
              <button type="button" onclick="window.open('https://paypal.me/nubecolectiva','_blank')" class="btn btn-warning">Donar</button>
              <button type="button" class="btn btn-primary " data-toggle="modal" data-target="#compartirmodal">Compartir</button>
              <button type="button" onclick="window.open('http://blog.nubecolectiva.com/como-crear-un-crud-con-laravel-5-6-parte-4-final/','_blank')" class="btn btn-info">Post</button>
              <button type="button" onclick="window.open('https://github.com/collectivecloudperu/crud_laravel_56/','_blank')" class="btn btn-secondary ghbmd">GitHub</button>
            </div>

          </div>
        </div>
      </nav>
    </header>
  
<div class="pccp mb-3 mtpnc" align="center">
    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
              
    <ins class="adsbygoogle"
                   style="display:block"
                   data-ad-client="ca-pub-2390065838671224"
                   data-ad-slot="1441100372"
                   data-ad-format="auto"
                   data-full-width-responsive="true"></ins>
    <script>
    (adsbygoogle = window.adsbygoogle || []).push({});
    </script>
</div>
    <main role="main">

        <div class="container mt-5">

          <!-- Contenido -->

          <div class="row">

            <div class="col-md-12">

                <h1 style="font-size: 28px;" class="mb-4 text-center">Como Crear un CRUD con Firebase 7.14.2 y Bootstrap 4 </h1>

                <div class="header">
                   <div class="container">
                      <div class="row">
                         <div class="col-md-5">
                            <!-- Logo -->
                            <div class="logo">
                               <h2><a href="https://nubecolectiva.com/blog/tutos/demos/laravel56/public/admin/dashboard">Administrador</a></h2>
                            </div>
                         </div>
                         <div class="col-md-5">
                            <div class="row">
                              <div class="col-lg-12">
                                <div class="input-group form">
                                     <!--
                                     <input type="text" class="form-control" placeholder="Buscar...">
                                     <span class="input-group-btn">
                                       <button class="btn btn-primary" type="button">Buscar</button>
                                     </span>
                                     -->
                                </div>
                              </div>
                            </div>
                         </div>
                         <div class="col-md-2">
                            <div class="navbar navbar-inverse" role="banner">
                                <nav class="collapse navbar-collapse bs-navbar-collapse navbar-right" role="navigation">
                                  <ul class="nav navbar-nav">
                                    <li><a href="https://nubecolectiva.com/blog/tutos/demos/laravel56/public/dashboard">Administrador</a></li>
                                  </ul>
                                </nav>
                            </div>
                         </div>
                      </div>
                   </div>
                </div>

                <div class="page-content">
        <div class="row">
          
          <div class="col-md-2">
            <div class="sidebar content-box" style="display: block;">

              <ul class="list-group">
                  <li class="list-group-item">
                    <a href="/"> Dashboard</a>
                  </li>
                  <li class="list-group-item">
                    <a href="http://localhost/nc/tutoriales/crud_firebase620_bootstrap4/"> Postres</a>
                  </li>
                  <li class="list-group-item">
                    Opción 1
                  </li>
                  <li class="list-group-item">
                    Opción 2
                  </li>
                  <li class="list-group-item">
                    Opción 3
                  </li>
                  <li class="list-group-item">
                    Opción 4
                  </li>
                  <li class="list-group-item">
                    Opción 5
                  </li>
                  <li class="list-group-item">
                    Opción 6
                  </li>
                  <li class="list-group-item">
                    Opción 7
                  </li>
                  <li class="list-group-item">
                    Opción 8
                  </li>
                  <li class="list-group-item">
                    Opción 9
                  </li>
                  <li class="list-group-item">
                    Opción 10
                  </li>
              </ul>
            </div>
          </div>
        
            <div class="col-md-10">

        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php">Postres</a></li>
            <li class="breadcrumb-item active" aria-current="page">Crear</li>
          </ol>
        </nav>
        
        <div class="row">

          <div class="col-md-12">

              <div class="content-box-large">

                <div class="panel-heading">
                <div class="panel-title"><h2>Crear</h2></div>             
                    
              </div>
                
                <div class="panel-body">

                              <div class="card-block">
                                  
                                  <section class="example mt-4">
                                      
                                    <form id="crear" onsubmit="crear(); return false;">
                                      <div class="form-group">
                                        <label for="nombre" class="negrita">Nombre</label>
                                        <input type="text" class="form-control" id="nombre" placeholder="Torta de Chocolate" required>
                                      </div>
                                      <div class="form-group">
                                        <label for="precio" class="negrita">Precio</label>
                                        <input type="text" class="form-control" id="precio" placeholder="3.00" required>
                                      </div>
                                      <div class="form-group">
                                        <label for="stock" class="negrita">Stock</label>
                                        <input type="text" class="form-control" id="stock" placeholder="46" required>
                                      </div>

                                      <div class="form-group">
                                        <label for="img" class="negrita">Imagen</label>
                                        <div class="custom-file">
                                          <input type="file" class="custom-file-input" id="img" accept=".jpg, .jpeg, .png, .svg, .webm" onchange="leerImagen(event);">
                                          <label class="custom-file-label" for="customFile">Selecciona una Imagen</label>
                                        </div>
                                      </div>

                                      <button type="submit" class="btn btn-primary">Aceptar</button>
                                    </form>
                                  </section>
                              </div>



                </div>

              </div>

          </div>

        </div>

      </div>

      </div>
      </div>              

            </div>

          </div> 

          <!-- Fin Contenido -->     

          <hr>

          <div class="row text-center">

            <div class="col-md-12">

              <p class="lead">En <a href="https://nubecolectiva.com/" target="_blank"> Nube Colectiva </a> hablamos sobre:</p>

            </div>

          </div>

          <div class="row text-center">

              <div class="col-md-3">
                <h3>Frontend</h3>
                <a href="https://blog.nubecolectiva.com/category/frontend/" target="_blank">
                  <img class="img-fluid" src="https://blog.nubecolectiva.com/wp-content/uploads/2018/11/img_destacada_blog_devs-11-300x169.png">
                </a>
              </div>

              <div class="col-md-3">
                <h3>Backend</h3>                
                <a href="https://blog.nubecolectiva.com/category/backend/" target="_blank">
                  <img class="img-fluid" src="https://blog.nubecolectiva.com/wp-content/uploads/2018/11/img_destacada_blog_devs-8-300x169.png">
                </a>
              </div>              

              <div class="col-md-3">
                <h3>Android</h3>
                <a href="https://blog.nubecolectiva.com/category/android/" target="_blank">
                  <img class="img-fluid" src="https://blog.nubecolectiva.com/wp-content/uploads/2018/11/img_destacada_blog_devs-9-300x169.png">
                </a>
              </div>

              <div class="col-md-3">
                <h3>Otros</h3>
                <a href="https://blog.nubecolectiva.com/category/articulos/" target="_blank">
                  <img class="img-fluid" src="https://blog.nubecolectiva.com/wp-content/uploads/2018/09/edit_img_destacada_blog_devs-300x169.png">
                </a>
              </div>

          </div>            
          
        </div>

    </main>


        <footer class="text-muted mt-3 mb-3">
        <div align="center">
          Desarrollado por <a href="https://www.nubecolectiva.com" target="_blank">Nube Colectiva</a>
      </div> 
    </footer>

   <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

  <!-- Firebase JavaScript SDK -->
  <script src="https://www.gstatic.com/firebasejs/7.14.2/firebase-app.js"></script>

  <!-- Firebase Analytics  -->
  <script src="https://www.gstatic.com/firebasejs/7.14.2/firebase-analytics.js"></script>

  <!-- Firebase Realtime Database -->
  <script src="https://www.gstatic.com/firebasejs/7.14.2/firebase-database.js"></script> 

  <!-- Firebase Storage --> 
  <script src="https://www.gstatic.com/firebasejs/7.14.2/firebase-storage.js"></script>

  <script type="text/javascript">

    // Configuración de Firebase 
    var firebaseConfig = {
      apiKey: "Tu apiKey",
      authDomain: "Tu authDomain",
      databaseURL: "Tu databaseURL",
      projectId: "Tu projectId",
      storageBucket: "Tu storageBucket",
      messagingSenderId: "Tu messagingSenderId",
      appId: "Tu appId",
      measurementId: "Tu measurementId",
    };

    // Inicializo Firebase y Firebase Analytics 
    firebase.initializeApp(firebaseConfig);
    firebase.analytics();
    
    // Obtengo la imagen como objeto File haciendo uso de la API File de HTML5 
    function leerImagen(event) {
      var fileList = event.target.files[0];
      
      // Cambio el nombre de la imagen 
      var blob = fileList.slice(0, fileList.size, fileList.type);
      var nuevoArchivo = new File([blob], Date.now() +'.' + fileList.name.split('.').pop(), {type: fileList.type});

      // Obtengo el objeto y lo coloco en una variable global para usarla en mi función crear() 
      window.value = nuevoArchivo;
      window.nombreimg = nuevoArchivo.name;         
      console.log(nuevoArchivo);
    }    
    
    function crear() {

      try {

        // Obtengo los datos del formulario       
        var nombre = $('#nombre').val();
        var precio = $('#precio').val();
        var stock = $('#stock').val();
        var img = window.nombreimg; // Nuevo nombre de la imagen      

        console.log(img);
        
        // Subida de la imagen a Firebase Storage 
        // Creo una referencia al root de Firebase Storage 
        var storageRef = firebase.storage().ref();

        // Creo una referencia para un archivo 
        var archivoRef = storageRef.child('crud_firebase_bootstrap/uploads/' + img);

        // Hacemos referencia a Firebase Realtime Database 
        var database = firebase.database(); 

        // Defino la ruta '/postres' en la base de datos Realtime Database 
        const ref = database.ref('postres').push();

        // Creo una referencia para varios archivos  
        //var archivoArchivosRef = storageRef.child('crud_firebase_bootstrap/uploads/' + img);

        // Si bien los nombres de los archivos son los mismos, las referencias apuntan a diferentes archivos
        //archivoRef.name === archivoArchivosRef.name            // true
        //archivoRef.fullPath === archivoArchivosRef.fullPath    // false

        // Subo el archivo a Firebase Storage con el método put() 
        // Le paso la variable global 'windows.value' que contiene el objeto File de la imagen 
        archivoRef.put(window.value).then(function(snapshot) {
          console.log('Imagen Subida a Firebase Storage !');

        }).then(function() {
            // Obtengo la URL de la imagen 
            archivoRef.getDownloadURL().then(function(downloadURL) {
                console.log('URL de la imagen: ', downloadURL);
                urlimagen = downloadURL;

                // Inserto los datos en en la base de datos Realtime Database 
                ref.set({
                  nombre: nombre,
                  precio: precio,
                  stock: stock,
                  img: urlimagen 
                });

                // Redireccionamos con mensaje 
                var msg = "Creado Satisfactoriamente !"; 
                window.location = 'index.php?mensaje=' + msg;

                });

        });
      

      }
      
      catch(err) {
        console.log(err);
      }

    }


  </script>
    
  </body>

</html>
