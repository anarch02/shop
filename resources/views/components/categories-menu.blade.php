<div class="categories-panel">
    <div class="menu__content">
        <ul class="menu--dropdown">
            @foreach ($categories as $category)
            <li class="current-menu-item">
                <a href="#" class="category_item"> {{$category->title}} </a>
                <div class="mega-menu">
                    <div class="mega-menu__column">
                        <ul class="mega-menu__list">
                            @foreach ($category->subcategories as $subcategory)
                            <li class="subcategory">
                                <a class="subcategory--item" href=" {{route('subcategory', $subcategory->id)}} "> {{$subcategory->title}} </a>
                            </li>
                            @endforeach
                            </li>
                        </ul>
                    </div>
                </div>
            </li>
            @endforeach
        </ul>
    </div>
</div>