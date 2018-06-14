@if($workers->count() > 4)

        <div class="owl-carousel owl-theme owl-3">
            @foreach($workers as $worker)

            <div class="card">
                <img class="card-img-top" src="/images/large/{{ $worker->image }}" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title text-center" style="max-height: 50px;min-height: 50px;">{{ $worker->name }}</h5>
                    <p class="card-text" style="max-height: 100px;min-height: 100px;overflow: hidden;text-overflow: ellipsis;">{{ $worker->description }}</p>
                </div>
            </div>
            @endforeach

        </div>

@else
    @foreach($workers as $worker)
    <div class="col-12 col-md-6 col-lg-3 mb-4">
        <div class="card">
            <img class="card-img-top" src="/images/large/{{ $worker->image }}" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title text-center" style="max-height: 50px;min-height: 50px;">{{ $worker->name }}</h5>
                <p class="card-text" style="max-height: 100px;min-height: 100px;overflow: hidden;text-overflow: ellipsis;">{{ $worker->description }}</p>
            </div>
        </div>
    </div>
    @endforeach
@endif
