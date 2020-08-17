<html>
<head>
	<title>Welcome</title>
</head>
<style>
input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

textarea , select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>
<body>
<div>
	<h1>Profile</h1>
	<form method="POST" action='/home/{home}'>
		@csrf
     @method('PUT')
		<input type="text" name="name" value="{{$user->name}}"></br>
		<input type="text" name="email" value="{{$user->email}}"></br>
		<input type="text" name="age" value="{{$user->age}}"></br>
		<input type="text" name="occupation" value="{{$user->occupation}}"></br>
		<input type="text" name="gender" value="{{$user->gender}}"></br>
		<input type="text" name="address" value="{{$user->address}}"></br>
		<button type="submit" name="submit">Update
		</form>
<div>

</body>
</html>