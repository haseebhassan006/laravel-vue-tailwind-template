@php
$sidebar=sideBarMenu();
@endphp
<nav class="side-nav">
    <a href="" class="intro-x flex items-center pl-5 pt-4">
        <img alt="Rubick Tailwind HTML Admin Template" class="w-6" src="{{asset('assets/dist/images/logo.svg')}}">
        <span class="hidden xl:block text-white text-lg ml-3"> Ru<span class="font-medium">bick</span> </span>
    </a>
    <div class="side-nav__devider my-6"></div>
    <ul>
        @foreach ($sidebar as $menu)

        <li>
          @if(!empty($menu['heading']))
            <a href="javascript:;.html" class="side-menu">
                <div class="side-menu__icon"> <i data-feather="home"></i> </div>
                <div class="side-menu__title">
                   {{ $menu['heading'] }}
                    @if(!empty($menu['menu']))
                    <div class="side-menu__sub-icon transform rotate-180"> <i data-feather="chevron-down"></i> </div>
                    @endif
                </div>
            </a>
        @endif

            <ul class="side-menu__sub-open">
                @if(!empty($menu['menu']))
                @foreach ($menu['menu']['sub_menu'] as $item)
                <li>
                    <router-link to="{{ $item['v-route'] }}" class="side-menu ">
                        <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                        <div class="side-menu__title"> {{ $item['title'] }} </div>
                    </router-link>
                </li>
                @endforeach
                @endif
            </ul>
        </li>
        @if(!empty($menu['single_link']))

        <li>
            <router-link to="{{$menu['single_link']['v-route']}}" class="side-menu ">
                <div class="side-menu__icon"> <i data-feather="home"></i> </div>
                <div class="side-menu__title">
                    {{$menu['single_link']['title']}}
                </div>
            </router-link>
        </li>
        @endif

        </li>
        @endforeach
    </ul>
</nav>
