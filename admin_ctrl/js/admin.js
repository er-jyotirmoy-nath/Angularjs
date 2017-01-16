(function(){
	/*var app = angular.module('admin', []);
	app.controller('Productedit', ['$http', function($http){
		var edit = this;
		edit.products = [];
		$http.get('products.json').then(function(data){
			edit.products = data.data;
		}).catch(function(err){
			console.log(err);
		});
	}]);*/
	var app1 = angular.module('admin', ["ngRoute"]);
	app1.controller('Productedit', ['$http', function($http){
		var edit = this;
		edit.products = [];
		$http.get('products_get.php').then(function(data){
			
			edit.products = data.data;
			return edit.products;
		}).catch(function(err){
			console.log(err);
		});
	}]);
	app1.controller('Addproducts',function($http){

		var add = this;
		add.prod=0;
		add.status = false;
		add.prodclick = function(){
			add.prod +=1;
		};
		add.addnewproduct = function(){
			add.status = true;
				$http.post('products_set.php',add.product).then(function(data){
					
					add.product = {};
					add.status = false;
				}).catch(function(err){
						console.log(err);
				});
		};
	});
	app1.controller('EditProduct', function($scope,$routeParams,$http){
		
			$scope.product = [];
			$scope.data = [];

			$scope.ID = $routeParams.ID;
			$http.post('product.php',$scope.ID).then(function(data){
				console.log(data.data[0]);
				
				$scope.product = angular.fromjson(data.data);
				
			}).catch(function(err){
					console.log(err);
			});

	});
	app1.config(function($routeProvider) {
    $routeProvider
    .when("/editproduct", {
        templateUrl : "edit_products.php"
    })
    .when("/addprod", {
        templateUrl : "add_products.php"
    })
    .when("/prod/:ID",{
    	templateUrl:"edit.php",	
    	controller:"EditProduct"
    })
    .otherwise({
        template : "<h1>Nothing</h1><p>Nothing has been selected</p>"
    });
});
})();
