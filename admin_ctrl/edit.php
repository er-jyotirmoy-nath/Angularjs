<div ng-show="ID">
	Edit Product Number : {{ product }}
	<form   name="frm">
     
          <label>Name: </label>
          <input type="text" class="form-control" ng-model="product.NAME"  >
       
          <label>Description: </label>
          <input type="text" class="form-control" ng-model="product.DESCRIPTION">

          <label>Stock: </label>
          <input type="text" class="form-control" ng-model="product.STOCK">

          <label>Price: </label>
          <input type="text" class="form-control" ng-model="product.PRICE">

          <label>Color: </label>
          <input type="text" class="form-control" ng-model="product.PRODCOLOR">

          <label>Category: </label>
          <input type="text" class="form-control" ng-model="product.CATEGORY">

          <label>In Stock?: </label>
          <select class="form-control" ng-model="product.IN_STOCK">
            <option value="yes">Yes</option>
            <option value="no">No</option>
          </select>

       <br>
       
         <button type="submit" class="btn btn-success" ng-click="updateproduct()">Edit Product</button>
       
          
          <br>
         
        
      </form>
</div>
