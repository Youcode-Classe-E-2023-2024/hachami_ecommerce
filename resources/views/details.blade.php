<x-layout>
    <!-- breadcrumb -->
    <div class="container py-4 flex items-center gap-3">
        <a href="{{ route('home')}}" class="">
            <img src="{{asset('images/icons/house-solid.svg')}}" class="w-6 h-6" alt="">
        </a>
        <img src="{{asset('images/icons/chevron-right-solid.svg')}}" class="w-4 h-4" alt="">
        <p class="text-gray-600 font-medium">Product</p>
    </div>
    <!-- ./breadcrumb -->
    <!-- product-detail -->
        <x-product-detail :product="$product" />
    </div>
    <!-- ./product-detail -->
    <!-- related -->
    <div class="container pb-16" id="products" onclick="goToProducts()">
       @if(count($relatedProduct)>0)
            <h2 class="text-2xl font-medium text-gray-800 uppercase mb-6">RELATED PRODUCTS</h2>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-6" >
                @foreach($relatedProduct as $product)
                    <x-product-card :product="$product" />
                @endforeach
                {{ $relatedProduct->links() }}
        @endif

        </div>
    </div>
    <!-- ./related -->



</x-layout>
