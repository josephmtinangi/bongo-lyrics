@if($lyrics->count() > 0)
    @foreach($lyrics->chunk(3) as $lyricsSet)
        <div class="row">
            @foreach($lyricsSet as $lyric)
                <div class="[ col-sm-6 col-md-4 ]">
                    <div class="[ info-card ]">
                        <img style="width: 100%"
                             src="http://lorempixel.com/400/200/abstract/{{ str_random(1) }}"/>
                        <div class="[ info-card-details ] animate">
                            <div class="[ info-card-header ]">
                                <h1> {{ $lyric->title }} </h1>
                                <h3> {{ $lyric->artist->name  }} </h3>
                            </div>
                            <div class="[ info-card-detail ]">
                                <!-- Description -->
                                <p>{{ str_limit($lyric->lyrics, 100) }} <a
                                            href="{{ url('lyrics/' . $lyric->id) }}">More</a></p>
                                {{--<div class="social">--}}
                                {{--<a href="https://www.facebook.com/rem.mcintosh"--}}
                                {{--class="[ social-icon facebook ] animate"><span--}}
                                {{--class="fa fa-facebook"></span></a>--}}

                                {{--<a href="https://twitter.com/Mouse0270"--}}
                                {{--class="[ social-icon twitter ] animate"><span--}}
                                {{--class="fa fa-twitter"></span></a>--}}

                                {{--<a href="https://github.com/mouse0270"--}}
                                {{--class="[ social-icon github ] animate"><span--}}
                                {{--class="fa fa-github-alt"></span></a>--}}

                                {{--<a href="https://plus.google.com/u/0/115077481218689845626/posts"--}}
                                {{--class="[ social-icon google-plus ] animate"><span--}}
                                {{--class="fa fa-google-plus"></span></a>--}}

                                {{--<a href="www.linkedin.com/in/remcintosh/"--}}
                                {{--class="[ social-icon linkedin ] animate"><span--}}
                                {{--class="fa fa-linkedin"></span></a>--}}
                                {{--</div>--}}
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @endforeach
@else
    Dead end
@endif