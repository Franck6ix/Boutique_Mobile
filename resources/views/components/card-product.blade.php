
<!--CARD PRODUIT-->
        <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-xl transition w-75">
        


        <div class="bg-gray-300 h-64 flex items-center justify-center">

        <!--<img src="{{ $product->image }}">-->

        </div>
        
        
        
        
        <div class=" text-black h-60 p-4 ">


                <p class="text-xm text-gray-600 mb-4 ">{{$product->description}}</p>
                                <span class="text-xm text-blue-900 font-bold">{{$product->category->name }}</span>
                        <h3 class="lg font-bold mt-2 mb-2 text-gray-800">{{ $product->name }}</h3>
                
        <div class="flex items-center justify-between">
                <span class="text-2xl font-bold text-gray-600">{{$product->price}}€</span>
                        <a class="bg-blue-600 text-black px-4 py2 rounded-lg hover:bg-blue-500 transition" href="{{ route('detail',$product->id) }}">VOIR</a>       
                             </div>
                                </div>
                                      </div>
