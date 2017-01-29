(function(){
	var app1 = angular.module('admin', ["ngRoute","ngTable","ngCookies"]);
	app1.service('getallproducts', ['$http', function($http){
		this.allproducts = function(){
			return $http.get("products_get.php");
		}
	}])
	app1.controller('Productedit', ['$http','NgTableParams','$location','$cookies','getallproducts', function($http,NgTableParams,$location,$cookies,getallproducts){
		var edit = this;
		edit.products = [];
		edit.uname = $cookies.get('id');
		getallproducts.allproducts().then(function(data){
			edit.products = data.data;
			edit.tableParams = new NgTableParams({}, { dataset: edit.products});
			return edit.products;
		});
		edit.logout = function(){
				$cookies.remove('id');
				$location.path("/login");
		};
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
	app1.service('getproducts', ['$http', function($http){

		this.getprod = function(dataid){
			return $http.post('product.php', dataid);
		}
	}])
	app1.controller('EditProduct', function($scope,$routeParams,$http,getproducts){
		
			$scope.product = [];
			$scope.ID = $routeParams.ID;
			getproducts.getprod($scope.ID).then(function(data){
				$scope.product = data.data[0];
				console.log($scope.product);
			});
	});
	/*app1.factory('loginfactory', function($http){
		
		var factory = {};
			factory.setlogin = function(){
			$http.post('login_user.php').then(function(data){
				return data.data;
			});
		}
		return factory;
		
	});*/
	app1.service('loginservice',  function($http){
		this.setlogin = function(udata){
			return $http.post('login_user.php',udata);
		}
		
	})
	app1.controller('loginctrl',function($scope,loginservice,$location,$cookies){
		$scope.udata = {
			"username":"root"
		};
		$scope.submit = function(){
				
				loginservice.setlogin($scope.udata).then(function(d){
						$cookies.put('id', d.data["token"]);
						console.log($cookies.get('id'));

						$location.path("/editproduct");
				});
				
		}
	});
	app1.config(function($routeProvider) {
    $routeProvider
    .when("/editproduct", {
       
        resolve:{
            "check": function($location,$cookies){
            	 var usertoken = $cookies.get('id');
                if(!usertoken){
                    $location.path('/login');
                }                
            }
        },
        templateUrl: "edit_products.php"
    })
    .when("/addprod", {
        templateUrl : "add_products.php"
    })
     .when("/login", {
        templateUrl : "login.php"
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