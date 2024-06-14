

<footer class="bg-[#167FFC] w-full px-2 py-10">
    <div class="container px-10">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-10 text-white">
            <div class="flex">
                <img src="{{asset('images/Office.svg')}}" class="w-[80px] h-[80px]" alt="{{asset('images/Office.svg')}}">
                <div class="line-vertical mx-2 w-[2px] h-full bg-white"></div>
                <div>
                    <h1 class="text-white font-bold">Nossa Sede</h1>
                    <p> Av. Julius Nyerere, Nr. 3453 <br>Cidade de Maputo</p>
                </div>
            </div>

            <div class="flex">
                <img src="{{asset('images/Call.svg')}}" class="w-[80px] h-[80px]" alt="{{asset('images/Call.svg')}}">
                <div class="line-vertical mx-2 w-[2px] h-full bg-white"></div>
                <div>
                    <h1 class="text-white font-bold">Contactos</h1>
                    <p> <span class="font-bold">Cell:</span> +258 84 678 1641 
                        <br><span class="font-bold">Cell:</span> +258 87 418 9587
                    </p>
                </div>
            </div>

            <div class="flex">
                <img src="{{asset('images/mail.svg')}}" class="w-[80px] h-[80px]" alt="{{asset('images/mail.svg')}}">
                <div class="line-vertical mx-2 w-[2px] h-full bg-white"></div>
                <div>
                    <h1 class="text-white font-bold">Enviar Mensagem</h1>
                    <p> <span class="font-bold">Email:</span> info@filaflex.co.mz</p>
                </div>
            </div>

        </div>
        <hr class="my-5 border-white">

        <div class="grid grid-cols-12 gap-6 text-white">
            <div class="col-span-12 md:col-span-5">
                <h1 class="text-1xl font-bold">Filaflex</h1>
                <div class="h-1 bg-[#2DFF0B] rounded-md my-4 w-16 "></div>
                <p>
                    Com presença em toda Cidade de Maputo e Matola, estamos focados no constante desenvolvimento 
                    dos nossos serviços, com a adopção de modalidades cada vez mais inovadoras e tecnológicas 
                    para a prestação de um serviço cada vez mais seguro, fiel e de qualidade no sector de filas 
                    e pequenas entregas.
                </p>
            </div>
            <div class="col-span-12 md:col-span-5">
                <h1 class="text-1xl font-bold">Newsletter</h1>
                <div class="h-1 bg-[#2DFF0B] rounded-md my-4 w-16 "></div>
                <p>Mantenha-se atualizado com as últimas notícias e atualizações sobre a 
                    Filaflex, subscrevendo-se com seu de e-mail.
                </p>
                <form class="flex flex-col mt-5" action="{{route('frontend.newslleter.store')}}"
                    method="POST">
                    @csrf
                    <input type="text" name="email" class="h-[40px] w-full px-2 outline-0 focus:outline-0
                    text-black"  placeholder="Seu melhor email"/>
                    <button type="submit" class=" bg-[#11152B] w-[120px] h-[40px] mt-5">Enviar</button>
                </form>
            </div>
            <div class="col-span-2">
                <div class="flex flex-col gap-5 mt-5">
                    <a href="">
                        <img src="{{asset('images/facebook_1.svg')}}" alt="{{asset('images/instagram.svg')}}">
                    </a>
                    <a href="">
                        <img src="{{asset('images/instagram_1.svg')}}" alt="{{asset('images/instagram.svg')}}">
                    </a>
                    <a href="">
                        <img src="{{asset('images/linkedin_1.svg')}}" alt="{{asset('images/linkedin.svg')}}">
                    </a>
                </div>
            </div>
        </div>
    </div>

</footer>


<script src="{{asset('js/jquery.js')}}"></script>
<script src="{{asset('js/script.js')}}"></script>
</body>
</html>
