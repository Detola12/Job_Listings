@props(['employer','width' => 90])

<img src="{{ logo_asset($employer->logo) }}" class="rounded-xl" width="{{ $width }}" alt="">
