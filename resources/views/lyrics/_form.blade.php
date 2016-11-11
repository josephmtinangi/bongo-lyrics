<div class="form-group {{ $errors->has('title') ? 'has-error' : ''  }}">
    {!! Form::label('title', 'Song title', ['class' => 'col-sm-2 control-label']) !!}
    <div class="col-sm-10">
        {!! Form::text('title', null, ['class' => 'form-control']) !!}
        @if ($errors->has('title'))
            <p class="help-block">
                {{ $errors->first('title') }}
            </p>
        @endif
    </div>
</div>
<div class="form-group {{ $errors->has('artist') ? 'has-error' : ''  }}">
    {!! Form::label('artist', 'Artist', ['class' => 'col-sm-2 control-label']) !!}
    <div class="col-sm-10">
        <select name="artist" id="artist" class="form-control" required="required">
            <option value="">-- Select --</option>
            @foreach($artists as $artist)
                <option value="{{ $artist->id }}"
                        @if (isset($lyric->artist_id))
                        @if($lyric->artist_id == $artist->id)
                        selected="selected"
                        @endif
                        @endif
                >{{ $artist->name }}</option>
            @endforeach
        </select>
        @if ($errors->has('artist'))
            <p class="help-block">
                {{ $errors->first('artist') }}
            </p>
        @endif
    </div>
</div>
<div class="form-group {{ $errors->has('genre') ? 'has-error' : ''  }}">
    {!! Form::label('genre', 'Genre', ['class' => 'col-sm-2 control-label']) !!}
    <div class="col-sm-10">
        <select name="genre" id="genre" class="form-control" required="required">
            <option value="">-- Select --</option>
            @foreach($genres as $genre)
                <option value="{{ $genre->id }}"
                        @if (isset($lyric->genre_id))
                        @if($lyric->genre_id == $genre->id)
                        selected="selected"
                        @endif
                        @endif
                >{{ $genre->display_name }}</option>
            @endforeach
        </select>
        @if ($errors->has('genre'))
            <p class="help-block">
                {{ $errors->first('genre') }}
            </p>
        @endif
    </div>
</div>
<div class="form-group {{ $errors->has('lyrics') ? 'has-error' : ''  }}">
    {!! Form::label('lyrics', 'Lyrics', ['class' => 'col-sm-2 control-label']) !!}
    <div class="col-sm-10">
        {!! Form::textarea('lyrics', null, ['class' => 'form-control']) !!}
        @if ($errors->has('lyrics'))
            <p class="help-block">
                {{ $errors->first('lyrics') }}
            </p>
        @endif
    </div>
</div>
<div class="form-group {{ $errors->has('youtube_url') ? 'has-error' : ''  }}">
    {!! Form::label('youtube_url', 'Youtube url (Option)', ['class' => 'col-sm-2 control-label']) !!}
    <div class="col-sm-10">
        {!! Form::text('youtube_url', null, ['class' => 'form-control']) !!}
        @if ($errors->has('youtube_url'))
            <p class="help-block">
                {{ $errors->first('youtube_url') }}
            </p>
        @endif
    </div>
</div>