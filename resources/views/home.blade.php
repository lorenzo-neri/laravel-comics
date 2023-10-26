@extends('layout.app')

@section('content')
<!-- TODO modifica sintassi immagini per build -->
<section id="jumbotron">

</section>
<!-- /#jumbotron -->


<section id="current_series">

    <div class="container">

        <span class="section_comics blue_ticket">
            CURRENT SERIES
        </span>

        <div class="row px-2 py-3 justify-content-center">



            <!-- CARDS -->
            @include('layout.partials.cards')



        </div>

        <div class="d-flex justify-content-center">
            <span class="blue_ticket text-center mb-3">
                <a class="text-decoration-none text-white" href="##">LOAD MORE</a>
            </span>
        </div>
    </div>
</section>
<!-- /#current_series -->
@endsection