(function(){
	var app = angular.module('store-products', []);
app.directive('productTitle',function(){
     	return{
     		restrict: 'E',
     		templateUrl:'product-template.html'
     	};
     });
     //Tabs
    app.directive('productTabs',function(){
    return {
      restrict : 'E',
      templateUrl: 'product-panels.html',
      controller:function() {
    this.tab = 1;

    this.isSelected = function(checkTab) {
      return this.tab === checkTab;
    };

    this.selectpanel = function(setTab) {
      this.tab = setTab;
    };
  },
      controllerAs:'panel'
    };
  });

     app.directive('productGallery',function(){
    return{
      restrict : 'E',
      templateUrl :'product-gallery.html',
      controller:function(){
    this.current = 0;
    this.setCurrent = function(imageNumber){
      this.current = imageNumber || 0;
    };
  },
    controllerAs:'gallery'  
    };
  });
})();
