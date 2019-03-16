@if(isset($pages) && $pages->isNotEmpty())
    @foreach($pages->where('on_menu_desktop',true)->take(3) as $page)
        <li class="dropdown">
            <a href="{{ route('frontend.page.show.name',['id' => $page->id,'name' => $page->title]) }}">
                {{ str_limit($page->title,11,'') }}
            </a>
        </li>
    @endforeach
@endif