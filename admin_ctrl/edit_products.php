  <label>Search: </label><input type="text"  ng-model="search">
   <div ng-controller="Productedit as edit" >
        <div>Hi {{edit.uname}} <a ng-click="edit.logout()">(Logout)</a></div>
        <table ng-table="demo.defaultConfigTableParams"  class="table table-condensed table-bordered table-striped" show-filter="true">
         
            <tr ng-repeat="prod in edit.products | filter:search | orderBy:'-ID'">
              <td >{{prod.ID}}</td> 
              <td  data-title="'Name'" filter="{ Name: 'text'}" sortable="'Name'">{{prod.NAME}}</td>
              <td  data-title="'Description'" filter="{ Description: 'text'}" sortable="'Description'">{{prod.DESCRIPTION}}</td>
              <td  data-title="'Stock'" filter="{ Stock: 'number'}" sortable="'Stock'">{{prod.STOCK}}</td>
              <td  data-title="'Price'" filter="{ Price: 'number'}" sortable="'Price'">{{prod.PRICE}}</td>
              <td  data-title="'Category'" filter="{ Category: 'text'}" sortable="'Category'">{{prod.CATEGORY}}</td>
              <td  data-title="'InStock'" filter="{ InStock: 'text'}" sortable="'InStock'">{{prod.IN_STOCK}}</td>
              <td  data-title="'Color'" filter="{ Color: 'text'}" sortable="'Color'">{{prod.PRODCOLOR}}</td>
             <td><a href="#prod/{{ prod.ID }}">edit</a></td> 
            </tr>
         
        </table>

    </div>