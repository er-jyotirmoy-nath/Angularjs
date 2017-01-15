   <button class='btn btn-success'>Add new Product</button><br><br>
    <label>Search: </label><input type="text"  ng-model="search">
   <div ng-controller="Productedit as edit" >
        
        <table class="table table-bordered">
          <thead>
          <th></th>
          <th>name</th>
            <th>name</th>
            <th>description</th>
            <th>shine</th>
            <th>price</th>
            <th>color</th>
            <th></th>
          </thead>
          <tbody>
            <tr ng-repeat="prod in edit.products | filter:search">

            <td>{{prod.id}}</td>
              <td>{{prod.name}}</td>
              <td>{{prod.description}}</td>
              <td>{{prod.stock}}</td>
              <td>{{prod.price}}</td>
              <td>{{prod.prodcolor}}</td>
              <td>edit</td>
            </tr>
          </tbody>
        </table>

    </div>