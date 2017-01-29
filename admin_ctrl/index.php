  <!DOCTYPE html>
  <html >
  <head>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
  <script src="js/angular-cookies.min.js"></script>

   <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular-route.js"></script>
   <link rel="stylesheet"; href="https://unpkg.com/ng-table@2.0.2/bundles/ng-table.min.css">
<script src="https://unpkg.com/ng-table@2.0.2/bundles/ng-table.min.js"></script>
   <script type="text/javascript" src="js/admin.js"></script>
 </head>
    <body ng-app="admin">
    <div class="container">
    <h2>Admin Control</h2>
    <hr>
 <p><a href="#/">Main</a> | <a href="#editproduct">Edit Products</a> | <a href="#addprod">Add Products</a></p>

<p>Click on the links to change the content.</p>

<p>Use the "otherwise" method to define what to display when none of the links are clicked.</p>

<div ng-view></div>


 </div>
    </body>
    </html>