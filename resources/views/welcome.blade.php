<x-guest-layout>
    <div class="relative z-10 pt-48 pb-52 bg-cover bg-center" style="background-image: url(/img/6.jpg)">
        <div class="absolute h-full w-full bg-black opacity-70 top-0 left-0 z-10"></div>
        <div class="container relative z-20 text-white text-center text-2xl">
            <h2 class="font-bold text-5xl mb-8 langBN">{{__('Guide Property - your guide to the primary real estate market in dubai.')}}</h2>
            <p class="text-2xl mt-8 langBN">{{ __('The most convenient real estate search portal in Dubai, start searching now!') }}</p>
        </div>
    </div>

    <!-- Search From Area -->
    <div class="-mt-10">
        <div class="container">
            <div class="rounded-lg bg-white p-4 relative z-20 shadow-lg home-search">
                @include('components.property-search-form', ['locations' => $locations])
            </div>
        </div>
    </div>

    <div class="py-20 text-center">
        <div class="container">
            <h2 class="section-heading">{{__('title_index')}}</h2>
            <p class="text-gray-500 text-2xl font-bold mb-10">{{__('subtitle_index')}}</p>

            <a class="border-2 border-gray-700 rounded-2xl text-xl px-8 py-3 inline-block" href="">{{__('Search')}}</a>

        </div>
    </div>



    <div class="container text-center pt-14">
        <h2 class="section-heading">{{ __('More information about us') }}</h2>
        <div class="relative mt-10 mb-14 bg-cover rounded-xl py-24 bg-center"
             style="background-image: url(/img/6.jpg)">
            <div class="absolute w-full h-full rounded-xl opacity-50 bg-black left-0 top-0"></div>
            <div class="relative z-20">
                <a href="" class="text-white text-xl flex flex-col justify-center items-center"><span class="border-2 border-white w-12 h-12 text-center pt-1 pl-1 leading-10 text-2xl hover:border-yellow-500 duration-200 rounded-full mb-2"><i class="fa fa-play"></i></span>{{ __('Watch the video') }}</a>
            </div>
        </div>

        <div class="text-xl">
            <p>{{ __('long_info_for_me') }}</p>

        </div>
    </div>


    <div class="container pt-14">
        <div class="flex justify-between ">
            <div class="flex-1 mr-10 text-lg leading-normal">
                <p>{{ __('long_info_for_me2') }}</p>
            </div>
            <div class="flex-1 ml-10">
                <img class="rounded" src="/img/3.jpg" alt="">
            </div>
        </div>
    </div>

    <!-- Last Added Objects -->
    <div class="container py-14">
        <h2 class="section-heading">{{ __('Last added properties') }}</h2>
        <div class="flex flex-wrap -mx-2 mt-10">

            @foreach($latest_properties as $property)
                @include('components.single-property-card', ['property' => $property, 'width' => 'w-1/4'])
            @endforeach


        </div>
    </div>

</x-guest-layout>
