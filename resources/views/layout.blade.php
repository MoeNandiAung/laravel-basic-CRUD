<!DOCTYPE html>
<html>
<head>
    <link href="css/article.css" rel="stylesheet" type="text/css" media="all" />
</head>
<body>
  <div class="navbar">
  <a href="/home">Home</a>
  <div class="dropdown">
    <button class="dropbtn">Article
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="/article/create">Create</a>
    
    </div>
  </div>
</div> 
@yield('content')

</body>
</html>
