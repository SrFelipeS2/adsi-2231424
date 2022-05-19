@extends('layouts.app2')

@section('content')
    <h1 class="text-center my-10 font-semibold text-blue-900">
        Conditionals: if - elseif - else
    </h1>
    @php $ndayweek = date('w'); @endphp
    @if ($ndayweek == 1)
        <h3 class="text-center text-2xl font-normal p-4 text-red-500">Today: is Monday </h3>
    @elseif($ndayweek == 2)
        <h3 class="text-center text-2xl font-normal p-4 text-red-500">Today: is Tuesday</h3>
    @else
        <h3 class="text-center text-2xl font-normal p-4 text-red-500">Today: is any day after Tuesday😎</h3>
    @endif
    {{-- - - - --}}
    <h2 class="text-center my-10 font-semibold text-blue-900">
        Conditionals: switch
    </h2>
    @php $hour = date('H') @endphp

    @switch($hour)
        @case(1)
        @case(2)

        @case(3)
        @case(4)

        @case(5)
        @case(6)
            <h3 class="text-center text-2xl font-normal p-4 text-red-500">
                Its too early 😴
            </h3>
        @break

        @case(7)
        @case(8)

        @case(9)
        @case(0)

        @case(11)
            <h3 class="text-center text-2xl font-normal p-4 text-red-500">
                good morning 😲
            </h3>
        @break

        @case(12)
        @case(13)

        @case(14)
        @case(15)

        @case(15)
        @case(16)

        @case(17)
        @case(18)
            <h3 class="text-center text-2xl font-normal p-4 text-red-500">
                good evening 😎
            </h3>
        @break

        @default
            <h3 class="text-center text-2xl font-normal p-4 text-red-500">
                good nigth 😎
            </h3>
    @endswitch

    <h1 class="text-center my-10 font-semibold text-blue-900">
        loops: foreach
    </h1>

    @php $colors = ['green', 'blue', 'red']@endphp
    <ol class="flex flex-col gap-4  justify-items-center items-center">
        @foreach ($colors as $color)
            <li class="text-2xl font-bold" style="color: {{ $color }}">
                {{ $color }}
            </li>
        @endforeach
    </ol>


    <h1 class="text-center my-10 font-semibold text-blue-900">
        loops: for
    </h1>
    <ul class="flex flex-row gap-4 mx-auto w-64 justify-center">
        @for ($i = 0; $i < 50; $i++)
            @if ($i % 5 == 0)
                <li class="bg-blue-900 text-white p-2 rounded-2xl">
                    {{ $i }}
                </li>
            @endif
        @endfor
    </ul>

    <h1 class="text-center my-10 font-semibold text-blue-900">
        loops: while
    </h1>
    <ul class="flex flex-row gap-4 mx-auto w-64 justify-center">
        @php $i = 0 @endphp
        @while ($i < 50)
            @if ($i % 10 == 0)
                <li class="bg-green-400 text-white p-2 rounded-2xl">
                    {{ $i }}
                </li>
            @endif
            @php $i++ @endphp
        @endwhile
    </ul>
    <h1 class="text-center my-10 font-semibold text-blue-900">
        loops: forelse
    </h1>
    @php $myArray = array("😋", "🤩", "😍"); @endphp
    @forelse ($myArray as $item)
        <p class="text-center my-2 first-line:font-semibold text-blue-900">emojis {{ $item }}</p>
    @empty
        <h1 class="text-center  font-semibold text-blue-900">aqui no hay emojis</h1>
    @endforelse
@endsection
