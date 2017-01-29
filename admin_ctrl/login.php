<div ng-controller="loginctrl">
<style type="text/css">
table{
	border: 1px;
	border-style: groove;
}
	th,tr{
		margin: 0px;
		padding: 10px;
	}
	td{
		margin: 0px;
		padding: 10px;
	}
</style>
<p>Enter you Username and Password to login.</p>

<p>
    <table style="">
    	<tr><th colspan="2" style="background-color: #ccc;"><b>Login</b></th></tr>
    	<tr><td><label>Username: </label></td><td><input type="text" name="username" ng-model="username"></td></tr>
    	<tr><td><label>Password: </label></td><td><input type="password" name="password" ng-model="password"></td></tr>
    	<tr><td colspan="2"><input type="button" class="btn btn-default" ng-click="submit()" name="submitdata" value="Login"></td></tr>
    </table>
</p>

</div>