
<div class="fixed top-0 w-full py-4 px-12 flex justify-between items-center z-30 sticky-header {{request()->routeIs('home') ? '' : 'general-header'}}">
    <div class="min-w-max">
        <a href="{{route('home')}}"><img width="100" src="/img/house-logo.png" alt=""></a>
    </div>

    <div class="w-full">
        <ul class="flex justify-center">
            <li><a class="inline-block p-4 text-white {{request('type') == '3' ? 'bg-gray-50' : ''}}" href="{{route('property.index')}}?type=3">{{ __('Land') }}</a></li>
            <li><a class="inline-block p-4 text-white {{request('type') == '2' ? 'bg-gray-50' : ''}}" href="{{route('property.index')}}?type=2">{{ __('Villa') }}</a></li>
            <li><a class="inline-block p-4 text-white {{request('type') == '1' ? 'bg-gray-50' : ''}}" href="{{route('property.index')}}?type=1">{{ __('Apartment') }}</a></li>
            <li><a class="inline-block p-4 text-white {{ request()->is('*page/about-us*') ? 'bg-gray-50' : '' }}" href="{{route('page', 'about-us')}}">{{ __('About Us') }}</a></li>
            <li><a class="inline-block p-4 text-white  {{ request()->is('page/contact-us') ? 'bg-gray-50' : '' }}" href="{{route('page', 'contact-us')}}">{{ __('Contact Us') }}</a></li>
            @guest
                <li><a class="inline-block p-4 text-white {{ request()->is('login') ? 'bg-gray-50' : '' }}" href="{{route('login')}}">{{ __('Login') }}</a></li>
                <li><a class="inline-block p-4 text-white {{ request()->is('register') ? 'bg-gray-50' : '' }}" href="{{route('register')}}">{{ __('Register') }}</a></li>
            @else
                <li><a class="inline-block p-4 text-white {{ request()->is('dashboard') ? 'bg-gray-50' : '' }}" href="{{route('dashboard')}}">{{ __('Dashboard') }}</a></li>
                <li>
                    <form action="{{route('logout')}}" method="POST">
                        @csrf
                        <button class="inline-block p-4" type="submit">{{ __('Logout') }}</button>
                    </form>
                </li>
            @endguest

            {{-- <li><a class="menu-item {{ request()->is('*/properties/?type=land') ? 'active' : '' }}" href="{{ route('properties') }}/?type=land">{{ __('Land') }}</a></li>
            <li><a class="menu-item {{ request()->is('*/properties/?type=villa') ? 'active' : '' }}" href="{{ route('properties') }}/?type=villa">{{ __('Villa') }}</a></li>
            <li><a class="menu-item {{ request()->is('*/properties/?type=apartment') ? 'active' : '' }}" href="{{ route('properties') }}/?type=apartment">{{ __('Apartment') }}</a></li>
            <li><a class="menu-item {{ request()->is('*/page/about-us*') ? 'active' : '' }}" href="{{ route('page','about-us') }}">{{ __('About Us') }}</a></li>
            <li><a class="menu-item {{ request()->is('*/page/contact-us*') ? 'active' : '' }}" href="{{ route('page','contact-us') }}">{{ __('Contact Us') }}</a></li> --}}

        </ul>
    </div>


    <div class="min-w-max text-3xl flex justify-end">
        <!------ Currency Change Button ------->

        <!------ Language Change Button - Flag ------->

        <a href="{{ route('setLocale', 'ru') }}" title="Русский язык" class="px-3">
            {{-- 🚩 --}}
            <img width="50" height="30" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAQ4AAAC7CAMAAACjH4DlAAAAk1BMVEX///8AOabVKx7f3996jskAL6MAOalmNHrcKhDVHQnSmpeCkbkALqTNlpPNjImOmbvw8PDz8/PVGgDi4uL5+fnq6urz+fnVIhLo7u7a2trg4N6krseqssgAI6Gdj6ZhKHakl6vPoZ/SravUtrTZx8bPYVvPbGfRPzXRSUHQsrDOdnLOfHfQV1DQT0fSNyvUEADbzctY6I/bAAACiElEQVR4nO3dUXPSQBRA4UisiraKGxIStVagxWrR+P9/ncmCmNMy42My7vneYHi4c2bvhrdk2V+LPEXF++ycIl+c/f6/t2iKM98tR5hkIpbNo5NQlOMMMhVlPvzUnN+fhCwGPfLka3Q9ThdImfimHJR/7o9m1DEm45ihSPiZMrQ8rEv+j58lIx6PRaL/vp4q+yeKh+Ok3xYv0pMmM8dAnrksA+YAc4A5wBxgDjAHmAPMAeYAc4A5wBxgDjAHmAPMAeYAc4A5wBxgDjAHmAPMAeYAc4A5wBxgDjAHmAPMAeYAc4A5wBxgDjAHmAPMAeYAc4A5wBxgDjAH9Ck+jD3EdPQpPj7X0acux5vrC0XX7/ocF88UXZpjyBxgDjAHmAPMAeYAc4A5wBxgDjAHmAPMAeYAc4A5wBxgDjAHmAPMAeYAc4A5wBxgDjAHmAPMAeYAc4A5wBxgDjAHmAPMAeYAc4A5wBxgDjAHmAPMAeYAc4A5wBxgDjAHmAPMAeYAc4A5wBxwyHH5QlHM8fnmpaKbL12Ot+GVonDV55jPFM3NMWQOMAeYA8wB5gBzgDnAHGAOMAeYA8wB5gBzgDnAHGAOMAeYA8wB5gBzgDnAHGAOMAeYA8wB5gBzgDnAHGAOMAeYA8wB5gBzgDnAHGAOMAeYA8wBMceVOY7CusuxCWOPMRVh2+XYtmOPMRXtbZejcFmOVnWXo7pbjT3HNKx2Vf8G57WXR9Ru4gut668ej87qvj684HvjZdppvx1qZNV312UWHqpjjqzeJ/90me/L7KS4S/x8zH/k2UD90KZ8n7a7MoNqe59qkFX4uamyx+rNbtaGME9LaMN+XT+JEU9I3dyuXydlvf1VD0/Gb1l9DF4bKcOSAAAAAElFTkSuQmCC" alt="Русский язык" width="30">
        </a>
        <a href="{{ route('setLocale', 'kk') }}" title="Қазақ тілі" class="px-3">
            {{-- 🚩 --}}
            <img width="50" height="50" src="data:image/png;base64,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" alt="Русский язык" width="30">
        </a>
    </div>

</div>
