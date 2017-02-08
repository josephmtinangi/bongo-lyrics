 @if(count($lyrics))
    @foreach($lyrics->chunk(3) as $lyricsSet)
        <div class="row">
            @foreach($lyricsSet as $lyric)
                <div class="col-sm-4">
                        <div class="thumbnail">
                            <div class="text-center">
                                <span class="glyphicon glyphicon-music lyric-icon"></span>
                            </div>
                            <div class="caption">
                                <h3><a href="{{ url('lyrics/'.$lyric->id) }}">{{ str_limit($lyric->title, 37) }}</a></h3>
                            </div>
                        </div>
                </div>
            @endforeach
        </div>
    @endforeach
 @endif