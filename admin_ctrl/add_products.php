  <div ng-controller="Addproducts as addprod" >
   <button class='btn btn-success' ng-click="addprod.prodclick()">Add new Product</button><br><br>
   <div ng-show="addprod.prod">
    

    <i class="fa fa-spinner fa-pulse fa-3x fa-fw" ng-show="addprod.status"></i>
      <form   name="frm">
     
          <label>Name: </label>
          <input type="text" class="form-control" ng-model="addprod.product.prodname">
       
          <label>Description: </label>
          <input type="text" class="form-control" ng-model="addprod.product.proddesc">

          <label>Stock: </label>
          <input type="text" class="form-control" ng-model="addprod.product.prodstock">

          <label>Price: </label>
          <input type="text" class="form-control" ng-model="addprod.product.prodprice">

          <label>Color: </label>
          <input type="text" class="form-control" ng-model="addprod.product.prodcolor">

          <label>Category: </label>
          <input type="text" class="form-control" ng-model="addprod.product.prodcat">

          <label>In Stock?: </label>
          <select class="form-control" ng-model="addprod.product.prodinstock">
            <option value="yes">Yes</option>
            <option value="no">No</option>
          </select>

       <br>
        <input type="hidden" ng-value="addprod.product.get"  >
         <button type="submit" class="btn btn-success" ng-click="addprod.addnewproduct()">Add Product</button>
       
          
          <br>
         
        
      </form>
    </div>
    </div>