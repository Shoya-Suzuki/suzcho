@switch($star)
    @case('0')
        <span class="star-0">-</span>
        @break
    @case('1')
        <span class="star-1">★</span>
        @break
    @case('2')
        <span class="star-2">★★</span>
        @break
    @case('3')
        <span class="star-3">★★★</span>
        @break
    @case('4')
        <span class="star-4">★★★★</span>
        @break
    @case('5')
        <span class="star-5">★★★★★</span>
        @break
    @default
        <span class="star-0">-</span>
@endswitch