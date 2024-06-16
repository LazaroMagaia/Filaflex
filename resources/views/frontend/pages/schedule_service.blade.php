
@include("frontend.template.header")

<section class="bg-[#11152B]">
    
    <form class="py-10 px-2 md:px-10" action="{{route('Schedule.send')}}" method="POST">
        @csrf
        <input type="text" name="Nome" placeholder="Nome" class="w-full h-[40px] my-2 px-2 outline-0 focus:outline-0">
        <input type="number" name="Contacto" placeholder="Contacto" class="w-full h-[40px] my-2 px-2 outline-0 focus:outline-0">
        <input type="hidden" name="Servico" placeholder="Servico" value="{{$_GET['service']}}" class="w-full h-[40px] my-2 px-2 outline-0 focus:outline-0">
        <input type="text" name="Local" placeholder="Local" class="w-full h-[40px] my-2 px-2 outline-0 focus:outline-0">
        <textarea name="message" id="" class="w-full h-[250px] px-2 outline-0 focus:outline-0" placeholder="Outros detalhes" 
            class="my-2"></textarea>

        <button type="submit" class="border-2 border-[#167FFC] my-5
            px-5 py-2 text-white">Enviar</button>
    </form>

</section>

@include("frontend.template.footer")