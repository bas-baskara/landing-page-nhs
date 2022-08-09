<div>
    <div class="text-center my-8">
        <h3 class="font-bold text-2xl">Paket Hosting Singapura yang Tepat</h3>
        <p class="text-lg text-gray-500">Diskon 40% + Domain dan SSL Gratis untuk Anda</p>
    </div>

    <div class="flex flex-col md:flex-row gap-0 w-full text-center text-sm md:text-xs xl:text-sm">

        @foreach ($packages as $p)
            
            <div class="relative w-full md:w-1/4 pb-6 {{ $p->higlight ? '':'' }}">
                
                @if ($p->higlight)
                    <div class="absolute bg-[#64b458] shadow-md shadow-black text-white text-xs xl:text-sm grid place-content-center w-36 h-7 xl:h-10 -rotate-45 -left-12 xl:-left-11 top-2 after:absolute after:-left-2 after:-top-1 after:w-0 after:h-0 after:border-t-[3.5rem] after:border-t-white after:shadow-none after:border-r-[2.9rem] after:border-r-transparent  before:absolute before:-right-2 before:-top-1 before:w-18 before:h-0 before:border-t-[3.5rem] before:border-t-white before:shadow-none before:border-l-[2.9rem] before:border-l-transparent">BEST SELLER!</div>
                    <div class="absolute top-[4rem] xl:top-[5.27rem] -z-10 -left-[9.3px] xl:-left-[7.29px] w-0 h-0 border-b-[11px] xl:border-b-[7.3px] border-b-[#7fe670] border-l-[11px] xl:border-l-[7.3px] border-l-transparent"></div>
                    <div class="absolute -top-[11px] xl:-top-[7.3px] -z-10 left-[4.1rem] xl:left-[5.275rem] w-0 h-0 border-b-[11px] xl:border-b-[7.3px] border-b-[#7fe670] border-l-[11px] xl:border-l-[7.3px] border-l-transparent"></div>
                    <div class="font-bold text-lg border-t border-l border-[#007df0] grid place-content-center py-1 text-white bg-[#007df0]">{{ $p->title }}</div>
                    
                    <div class="border-t border-x pt-1 border-[#007df0]  text-white bg-[#007df0]">
                        <div class="line-through">Rp.{{number_format($p->price, 0, ',', '.')}}</div>
                        <div class="flex items-start justify-center">Rp <span class="font-bold text-4xl">{{ substr($p->discounted_price, 0, strlen($p->discounted_price) - 3) }}</span><b>.{{ substr($p->discounted_price, -3) }}</b>/bln</div>
                    </div>
        
                    <div class="py-1 border-t border-x border-[#006bdf]  text-white bg-[#006bdf]">{{number_format($p->registered_user, 0, ',', '.')}} Pengguna Terdaftar</div>
                @else
                    <div class="font-bold border-t border-x border-gray-100 text-lg grid place-content-center py-1">{{ $p->title }}</div>
                    
                    <div class="pt-1 border-t border-x border-gray-100 ">
                        <div class="line-through">Rp.{{number_format($p->price, 0, ',', '.')}}</div>
                        <div class="flex items-start justify-center">Rp <span class="font-bold text-4xl">{{ substr($p->discounted_price, 0, strlen($p->discounted_price) - 3) }}</span><b>.{{ substr($p->discounted_price, -3) }}</b>/bln</div>
                    </div>

                    <div class="py-1 border-t border-x border-gray-100 ">{{ number_format($p->registered_user, 0, ',', '.')}} Pengguna Terdaftar</div>
                @endif
                

                <div class="text-center space-y-1.5 border-t border-x py-5 {{ $p->higlight ? 'border-[#009df3]':'border-gray-100' }}">
                    @foreach ($p->features as $b)
                        @if (strpos($b, '*') !== false)
                            <div class="flex justify-center">
                            @for ($i = 0; $i < strlen($b); $i ++)
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="#007df0">
                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                    </svg>
                                @endfor
                            </div>
                        @else
                            <div>{!! $b !!}</div>
                        @endif
                    @endforeach
                </div>


                <div class="rounded-b pb-5 border-b border-x {{ $p->higlight ? 'border-[#009df3]':'border-gray-100' }}">
                    <button class="font-medium border-2 border-gray-600 w-36 py-1 px-4 rounded-full hover:border-[#007df0] hover:bg-[#007df0] hover:text-white">{{ $p->buttonTitle }}</button>
                </div>

            </div>

        @endforeach
        
    </div>
</div>

