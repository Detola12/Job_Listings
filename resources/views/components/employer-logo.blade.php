@props(['employer','width' => 90])

<img src="{{ logo_asset($employer->logo) }}" class="rounded-xl mt-2" width="{{ $width }}" height="{{ $width }}" alt="">
