@if ($rating)
    @for ($star = 1; $star <= 5; $star++)    
        {!! $star <= round($rating) ? '<i class="fa-solid fa-star"></i>' : '<i class="fa-regular fa-star"></i>' !!}
    @endfor
@else
    No rating yet
@endif
