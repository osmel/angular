	function AlumnosController($scope){ //definimos nuestro controllers(hemos llamado AlumnosController)
										//y le pasamos como parametro $scope

			$scope.alumnos = [ //creamos nuestro modelo al q llamamos "alumnos"
				{nombre: "osmel",telefono:"5537304166", curso: "matematica"},
		  		{nombre: "duvi",telefono:"5537304166", curso: "matematica"},
		  		{nombre: "alex",telefono:"5537304166", curso: "matematica"},
		  		{nombre: "fidel",telefono:"5537304166", curso: "matematica"}

			]  // el modelo que definimos alumno. almacena sus datos como "tabla hash"
		  	
  	}