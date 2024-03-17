<footer class="w-100">
    <div class="container flex m-center col-10 ">
        <div class="flex-column">
            <nav class="col-10 m-center">
                <h4 class="uppercase">dc comics</h4>
                <ul class="flex-column">
                    @foreach ($comicsMenus as $link)
                    <li>
                        <a href="{{ $link['link'] }}" class="capitalize">{{ $link['name'] }}
                        </a>
                    </li>
                    @endforeach
                </ul>
            </nav>
            <nav class="col-10 m-center">
                <h4 class="uppercase">shop</h4>
                <ul class="flex-column">
                    @foreach ($shopMenus as $link)
                    <li>
                        <a href="{{ $link['link'] }}" class="capitalize">{{ $link['name'] }}
                        </a>
                    </li>
                    @endforeach
                </ul>
            </nav>
        </div>
        <div>
            <nav class="col-10 m-center">
                <h4 class="uppercase">dc</h4>
                <ul class="flex-column">
                    @foreach ($dcMenu as $link)
                    <li>
                        <a href="{{ $link['link'] }}" class="capitalize">{{ $link['name'] }}
                        </a>
                    </li>
                    @endforeach
                </ul>
            </nav>
        </div>
        <div>
            <nav class="col-10 m-center">
                <h4 class="uppercase">sites</h4>
                <ul class="flex-column">
                    @foreach ($sitesMenu as $link)
                    <li>
                        <a href="{{ $link['link'] }}" class="capitalize">{{ $link['name'] }}
                        </a>
                    </li>
                    @endforeach
                </ul>
            </nav>
        </div>
    </div>

    <figure class="floating-logo">
        <img src="{{ asset('img/dc-logo-bg.png') }}" alt="dc logo">
    </figure>
</footer>