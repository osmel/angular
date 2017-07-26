http://algo3.uqbar-project.org/material/herramientas/angular/angularjs---ejemplo-proyecto-simple
https://www.youtube.com/watch?v=v5MRjk8Lj5o&list=PLEtcGQaT56cgHfdvGguisToK90z321pRl

1- descargar(legacy y minified	)
	https://angularjs.org/

2-

Ejemplo: Creando un modelo que se llama "creadores"
	<body ng-app ng-init= " Creadores='osmel calderon'" >	</body>


* Directivas: (son una parte integral de cualquier app angularjs. A traves de ellas permiten a angularjs modificar el DOM)
            -.Viene predefinidas con muchas directivas. y podemos crear las nuestras
	ng-app: Define elemento dentro del cual angular se va a auto-ejecutar 
			-- Se incluye dentro de la etiqueta(etiq Html o body) en la que se va a ejecutar la aplicacion AngularJS 
	ng-init: Usado para definir las tareas de inicialización de la app
				En el patron MVC no es buena idea poner ng-init en la Views. Debe incluirse dentro del controller


*
{{modelos}}  : pueden ser usadas para modelos {{Creadores}} -->osmel calderon
{{expresiones}} : pueden ser usadas para expresiones {{8*6}} --> 56


<!doctype html>
<html lang="es" >
<head>
  <meta charset="utf-8">
  <title>Ejemplo de Libros en Angular</title>
</head>

<body ng-app ng-init= " Creadores='osmel calderon'" >

   <p>{{7*8}}</p>

   <p>
   	 Mi ejemplo {{Creadores}} hace {{2014-2009}}
   </p>

  <!-- Agregamos angular para que funcione  -->
  <script src="angular.min.js"></script>
  
</body>
</html>


///////////////////////////////////////2/////////////////////////////////////////////

*modelo: Pueden ser distintas cosas:
       - datos crudos(primitivos)
       - tabla hash 
       - objetos javascript

   pueden definirse de diferentes modos:
       - dentro de directiva ng-init  : ng-init= " Creadores='osmel calderon'" 
       - puede ser creado en la plantilla dentro de {{}} : {{Creadores}}
       - puede ser creado dentro de un "controller" usando un "scope" (modo ideal de hacerlo)


  "objeto $scope": puede referir al "objeto modelo" como una propiedad



<!doctype html>

<html lang="es" ng-app>

<head>
  <meta charset="utf-8">
  <title>Modelo en scope</title>
</head>

<body ng-controller="AlumnosController">
    {{alumno.nombre}} estudia {{alumno.curso}}

  <!-- Agregamos angular para que funcione  -->
  <script type= "text/javascript" src="angular.min.js"></script>

  <script type= "text/javascript">

  	function AlumnosController($scope){
  		
  		console.log($scope);

			$scope.alumno = {  // el modelo que definimos alumno. almacena sus datos como "tabla hash"
		  		nombre: "osmel",
		  		curso: "matematica"
		  	}
  	}
  	
  </script>
  
</body>
</html>

/////////////////////////////////////3///////////////////////////////////////////////

	MVC
	ng-repeat: usado para mostrar una lista de una coleccion. Hace funcion de loop una iteracion
				repite tantas veces el elementos del DOM, como items halla en el modelo
			<div ng-repeat="alumno in alumnos">


  agrega 2 directivas:
     ng-scope:
     ng-binding: para cada elemento de los datos que esten vinculados			


<!doctype html>

<html lang="es" ng-app>

<head>
  <meta charset="utf-8">
  <title>Cap 3</title>
</head>

<body ng-controller="AlumnosController">
		<h1> Cuadernos alumnos</h1>

	<div>
		<div ng-repeat="alumno in alumnos">
			<div> {{alumno.nombre}} - {{alumno.telefono}}	</div>	
			<span> {{alumno.curso}} </span>	
		</div>
	</div>

  <!-- Agregamos angular para que funcione  -->
  <script type= "text/javascript" src="angular.min.js"></script>
  <script type= "text/javascript" src="scope.js"></script>
  
</body>
</html>



scope.js
	function AlumnosController($scope){ //definimos nuestro controllers(hemos llamado AlumnosController)
										//y le pasamos como parametro $scope

			$scope.alumnos = [ //creamos nuestro modelo al q llamamos "alumnos"
				{nombre: "osmel",telefono:"5537304166", curso: "matematica"},
		  		{nombre: "duvi",telefono:"5537304166", curso: "matematica"},
		  		{nombre: "alex",telefono:"5537304166", curso: "matematica"},
		  		{nombre: "fidel",telefono:"5537304166", curso: "matematica"}

			]  // el modelo que definimos alumno. almacena sus datos como "tabla hash"
		  	
  	}

/////////////////////////////////////4///////////////////////////////////////////////