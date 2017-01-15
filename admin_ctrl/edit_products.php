  <label>Search: </label><input type="text"  ng-model="search">
   <div ng-controller="Productedit as edit" >
        
        <table class="table table-bordered">
          <thead>
            <th></th>
            <th>name</th>
            <th>description</th>
            <th>Stock</th>
            <th>price</th>
            <th>category</th>
            <th>in stock</th>
            <th>color</th>
            <th></th>
          </thead>
          <tbody>
            <tr ng-repeat="prod in edit.products | filter:search | orderBy:'-ID'">
              <td>{{prod.ID}}</td>
              <td>{{prod.NAME}}</td>
              <td>{{prod.DESCRIPTION}}</td>
              <td>{{prod.STOCK}}</td>
              <td>{{prod.PRICE}}</td>
              <td>{{prod.CATEGORY}}</td>
              <td>{{prod.IN_STOCK}}</td>
              <td style="background-color: {{prod.PRODCOLOR}};"></td>
              <td><a href="#prod/{{ prod.ID }}">edit</a></td>
            </tr>
          </tbody>
        </table>

    </div>