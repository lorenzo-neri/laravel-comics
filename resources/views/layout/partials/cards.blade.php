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