@section('style')
    <style>
        .card {
            position: relative;
            top: 0;
            transition: top 0.5s;
        }

        .card:hover {
            top: -20px;
        }
    </style>
@stop
<x-app-layout>
    @section('title', $title)
    <div class="row m-0 w-75 m-auto my-3">
        <div class="row m-0 gap-x-10 gap-y-10">
            @foreach($specials as $special)
                <div class="col-lg-2 col-md-6 col-sm-12 card mx-auto p-1 shadow" style="background-color: #ff7c50; color: #ffffff">
                    <img class="card-img-top" src="{{ $special->item->image->path }}" alt="{{ $special->item->image->alt }}" />
                    <div class="card-body">
                        <h5 class="card-title">
                            {{ $special->item->name }}
                        </h5>
                        <p class="card-text">
                            {{ $special->item->brand->name }}
                        </p>
                    </div>
                    <div class="card-footer d-flex justify-between">
                        <small>
                            Price: {{ $special->item->price }}$
                        </small>
                        <small style="color: #000000;">
                            <a href="#" class="rounded bg-light p-1">
                                Add +
                            </a>
                        </small>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <div style="margin-top: 100px;">
        {{ $items->links() }}
    </div>
</x-app-layout>
