<style type="text/css">
	.form{
		
		margin-left: 30%;
		margin-right: 30%;
		text-align: center;
		padding: 5%;
		background-color: #308982;
		height: 30%;
		border-radius: 5%;
		margin-top: -3px;

	}
	.p{
		background-color: #DEA066;
		margin-left: 30%;
		margin-right: 30%;
		color: white;
		padding: 1%;
		border-radius: 8px;
		text-align: center;
		font-size: 20;

	}
	.btn{
		background: #66DE75;
		margin-top: 2px;
		border:none;
		cursor:pointer;
		width:100%;
		margin-left: 5%;
		margin-right: 5%;
		border-radius: 20px;
	   
	}
	.btn:hover{
		background-color: #66DEBD;
		color:white;
		
	}
	.txt{
		width: 100%;
		margin-left: 5px;
		margin-right: 5px;
		height: 20%;
		margin-bottom: -100px;
		margin-top: -10px;



	}
</style>
<p class="p">Registration form </p>
<form action="login.php" method="POST" class="form">
	<input type="text" name="Fname"class="txt" placeholder="Username"><br><br>
	<input type="password" name="password"class="txt"placeholder="password"><br><br><br>
	<input type="submit" value="Send"class="btn">
	<input type="reset" value="clear"class="btn"><br>
	<p>          </p>

	
</form>