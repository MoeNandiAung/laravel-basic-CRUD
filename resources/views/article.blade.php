@extends('layout')
@section('content')

<style>
.all-browsers {
  margin: 0;
  padding: 5px;
  background-color: lightgray;
}

.all-browsers > h1, .browser {
  margin: 10px;
  padding: 5px;
}

.browser {
  background: white;
}

.browser > h2, p {
  margin: 4px;
  font-size: 90%;
}


</style>

<table>
	
	@foreach($articles as $article)
	
	<tr>
		<th>
			<article class="all-browsers">
				<h2><a href="/article/{{$article->ArticleId}}">{{$article->title}}</a></h3>
				<p>{{$article->excerpt}}........</p>
			<article>
		</th>
		
	</tr>
	
	@endforeach
</ul>

</table>

@endsection

	 








