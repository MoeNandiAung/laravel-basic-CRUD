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
	<h1>Edit Article</h1>
	<div>
	<form method="POST" action="/article/{{$articles->ArticleId}}/update">
		@csrf
    @method('PUT')
		<label for="title">title</label>
		<input type="text" name="title" value="{{$articles->title}}"></br>
		<label for="excerpt">excerpt</label>
		<input type="text" name="excerpt" value="{{$articles->excerpt}}"></br>
		<label for="category">category</label>
		<input type="text" name="category" value="{{$articles->category}}"></br>
		<label for="body">body</label>
		<textarea name="body" rows="4" cols="50" >{{$articles->body}}</textarea></br>
		<button type="submit" name="submit">Update
		</form>
	</div>

</body>
</html>