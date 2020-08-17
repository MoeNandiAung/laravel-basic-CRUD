

<ul class="style1">
	
		<li class='first'>
			<h3>{{$articles->title}}</h3>
				<p>{{$articles->body}}</a></p>
				<p>This article is created by {{$articles->Creator_name}}
				</br>
				</br>
				</br>
				<a href="/article/{{$articles->ArticleId}}/edit"><button type='button'>update</button>
				<a href="/article/{{$articles->ArticleId}}/delete"><button type='button'>delete</button>
				<a href="/article/{{$articles->ArticleId}}/comment"><button type='button'>comment</button></br></br>

			<h3>Comment</h3>

			
				@foreach($comments as $comment)
				
					<textarea rows="4" cols="50">{{$comment->comment}}                                                                                               by {{$comment->User}}</textarea>		
	
					</textarea></br>
				@endforeach
	
</ul>


