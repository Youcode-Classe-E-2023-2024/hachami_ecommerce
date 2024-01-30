@props(['category'])
<CategoryCard >
    <div class="relative rounded-sm overflow-hidden group">
        <img src="{{ asset('images/category/' . $category->imgUrl) }}" alt="{{$category->title}}" class="w-full">
        <a href="/ss" class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center text-xl text-white font-roboto font-medium group-hover:bg-opacity-60 transition">
            {{$category->title}}
        </a>
    </div>
</CategoryCard>
