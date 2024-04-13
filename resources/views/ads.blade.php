 

@foreach ($classifieds as $ad)
    
<h2><a href = "/ads/{{$ad['id']}}">{{$ad['title']}}</h2></a>

<p>{{$ad['description']}}</p>
@endforeach
 