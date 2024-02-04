@props(['product'])
<ProductCard >
    <div class="bg-white shadow rounded overflow-hidden group" id="{{$product->id}}">
        <div class="relative">
            <img src="{{asset('images/products/' . $product->imgUrl)}}" alt="{{$product->id}}" class="w-full">
            <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center
                    justify-center gap-2 opacity-0 group-hover:opacity-100 transition ">

            </div>
        </div>
        <div class="pt-4 pb-3 px-4">
            <a href="/product/{{$product->id}}">
                <h4 class="uppercase font-medium text-xl mb-2 text-gray-800 hover:text-primary transition">{{$product->title}}</h4>
            </a>
            <div class="flex items-baseline mb-1 space-x-2">
                <p class="text-xl text-primary font-semibold">{{$product->current_price}}</p>
                <p class="text-sm text-gray-400 line-through">${{$product->old_price}}</p>
            </div>
            <div class="flex items-center">
                <div class="flex gap-1 text-sm text-yellow-400">
                    @for($i=0;$i<4;$i++)
                        <img src="{{asset('images/icons/star-solid.svg')}}" class="w-4" alt="">
                    @endfor
                </div>
                <div class="text-xs text-gray-500 ml-3">(150)</div>
            </div>
        </div>
        <a href="#"
           class="block w-full py-1 text-center text-white bg-primary border border-primary rounded-b hover:bg-transparent hover:text-primary transition">Add
            to cart</a>
    </div>
</ProductCard>
