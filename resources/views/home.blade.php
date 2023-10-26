@extends('layout.app')

@section('content')
<!-- TODO modifica sintassi immagini per build -->
<section id="jumbotron">

</section>
<!-- /#jumbotron -->


<section id="app_comics">

    <div class="container">

        <span class="section_comics blue_ticket">
            CURRENT SERIES
        </span>

        <div class="row px-2 py-3 justify-content-center">



            <AppComics />



        </div>

        <div class="d-flex justify-content-center">
            <span class="blue_ticket text-center mb-3">
                <a class="text-decoration-none text-white" href="##">LOAD MORE</a>
            </span>
        </div>
    </div>
</section>
<!-- /#app_comics -->

<section id="current_series">
    <div class="container">
        <div class="row p-5">

            <!-- CARD -->
            @foreach ($comics as $comic)
            <div class="col-2 pt-2">
                <div class="card bg-transparent text-white border-0 p-1 py-2">
                    <div class="square_image"> <!-- ##### -->

                        <img class="card-img-top" src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">
                    </div>

                    <div class="card-body text-uppercase">{{ $comic['title'] }}</div>
                </div>
            </div>
            @endforeach

        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</section>
<!-- /#sections_bar -->
@endsection

<!-- 
@foreach ($comics as $comic)
    
                    <div class="col-2">

                        <div class="card bg-transparent">

                            <div class="p-1 dc-coverContainer" style="background-image: url({{$comic['thumb']}})">

                            </div>
        
                            <div class="card-body p-0 pt-3">
        
                                <p class="card-title text-uppercase">{{ $comic['series'] }}</p>
                                <p class="card-text text-capitalize">{{ $comic['type'] }}, price: {{ $comic['price'] }}</p>
        
                            </div>
        
                        </div>
                    
                    </div>

                @endforeach

 -->