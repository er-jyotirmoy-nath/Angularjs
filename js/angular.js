/*(function() {
  var app = angular.module('gemStore', []);

  app.controller('StoreController', function(){
    this.product = gem;
  });

  var gem = {
    name: 'Azurite',
    price: 110.50,
    canPurchase: false,
    soldOut: true
  };
})();
*/
/*(function() {
  var app = angular.module('gemStore', []);

  app.controller('StoreController', function(){
    this.products = gems;
  });

  var gems = [
    { name: 'Azurite', price: 2.95, canPurchase: false, soldOut: true },
    { name: 'Bloodstone', price: 5.95, canPurchase: false, soldOut: true },
    { name: 'Zircon', price: 3.95, canPurchase: false, soldOut: true }
  ];
})();*/
(function() {
  var app = angular.module('gemStore', ['store-products']);
  app.controller('StoreController',['$http',function($http){

  	var store = this;
  	store.products = [];
  	$http.get('products.json').then(function(data){
  		store.products = data.data;
  	}).catch(function(err) {
		console.log(err);
	});



  }]);
   app.controller('GalleryController',function(){
    this.current = 2;
    this.setCurrent = function(value){

      this.current = value || 2;
    };
  });
     app.controller('ReviewController',function(){
    	this.review={};
    	this.addReview=function(product){
    		this.review.createdOn = Date.now();
      product.reviews.push(this.review);
      this.review ={};
    };
    });
    



    
     /*
      app.directive('',function(){
     	return{
     		restrict: 'A',
     		templateUrl:'product-template.html'
     	};
     });*/
  
})();
