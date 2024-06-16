
@include("frontend.template.header")

<section>

<div class="header-banner">

    <div class="relative bg-custom bg-cover bg-center h-[450px] w-full flex items-center justify-center overlay">
        <!-- Content -->
        <div class="relative z-10 text-white container max-w-4xl mx-auto text-center">
            <h1 class="text-2xl md:text-4xl font-bold">
                Ficar longas horas na fila têm prejudicado na tua produção?
            </h1>
            <p class="text-base pt-2">
                Nós te ajudamos a economizar o seu tempo na fila e a alocá-lo em actividades produtivas
            </p>
            <div class="mt-3">
                <a href="{{route('frontend.schedule_service',['service' => 'Filas'])}}" class="py-2 px-2 bg-[#4E8AFA] hover:bg-[#3266c7] rounded-md">Agendar fila</a>
            </div>
        </div>
    </div>
    <!---- PORQUE A FILAFLEX ---->
    <div class="container mx-auto py-10">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-4">
            <div class="p-2">
                <h2 class="text-1xl font-bold">Porquê escolher a Filaflex?</h2>
                    <p class="py-5">
                        Porquê escolher a Filaflex ? Com presença em toda <span class="font-bold">Cidade de Maputo</span>
                        e <span class="font-bold">Matola</span>, estamos focados no constante desenvolvimento
                        dos nossos serviços, com a adopção de modalidades cada vez mais inovadoras e 
                        tecnológicas para a prestação de um serviço cada vez mais seguro, fiel e de qualidade
                        no sector de filas e pequenas entregas.
                    </p>
                    <div class="mt-3">
                    <a href="{{route('frontend.about')}}" class="py-2 px-2 bg-[#4E8AFA] hover:bg-[#3266c7] rounded-md text-white">Saber mais</a>
                    </div>
            </div>
            <div class="aspect-w-16 aspect-h-9 h-[250px] p-2">
                    <iframe class="w-full h-full" src="https://www.youtube.com/embed/-GeXOe3BxqI?si=QWbzaimjW_6My6Sx"  title="YouTube video player" frameborder="0" allowfullscreen></iframe>
            </div>
           
            <!-- col -->         
        </div>
    </div>

    <!-- VANTAGENS DA FILAFLEX -->   
    <div class="bg-[#F9F2F2] py-10 px-2">
        <div class="flex flex-col items-center justify-center w-full">
            <h1 class="text-3xl font-bold">Nossas Vantagens</h1>
            <div class="h-1 bg-[#167FFC] rounded-md my-4 w-16 "></div>
        </div>

        <!--- SINGLE VANTAGEM --->
        <div>
            <div class="container mx-auto py-10">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
                    <div class="flex flex-col items-center  border-2 border-[#167FFC]
                        hover:bg-[#167FFC] hover:text-white p-4 h-[250px] geral-vantagens">
                        <div class="icon-home">
                            <i class="fa-regular fa-calendar-days text-5xl"></i>
                        </div>
                        <h2 class="text-xl font-bold py-2 text-center">Agendamento Online</h2>
                        <p class="text-center">
                            Marque uma fila de forma antecipada online através do Whatsapp
                        </p>
                    </div>
                    <!-- col -->
                
                    <div class="flex flex-col items-center border-2 border-[#167FFC]
                        hover:bg-[#167FFC] hover:text-white p-4 h-[250px] geral-vantagens">
                        <div class="icon-home">
                            <i class="fa-solid fa-receipt text-5xl"></i>
                        </div>
                        <h2 class="text-xl font-bold py-2 text-center">Preços acessíveis</h2>
                        <p class="text-center">
                            Disponibilizamos uma tabela de preços ajustada aos serviços prestados, trazendo
                            os melhores preços promocionais, aliado a um serviço de qualidade
                        </p>
                    </div>
                    <!-- col -->

                    <div class="flex flex-col items-center  border-2 border-[#167FFC]
                        hover:bg-[#167FFC] hover:text-white p-4 h-[250px] geral-vantagens">
                        <div class="icon-home">
                            <i class="fa-solid fa-lock text-5xl"></i>
                        </div>
                        <h2 class="text-xl font-bold py-2 text-center">Segurança</h2>
                        <p class="text-center">
                            Garantimos segurança e satisfação aos nossos clientes
                        </p>
                    </div>
                    <!-- col -->

                    <div class="flex flex-col items-center  border-2 border-[#167FFC]
                        hover:bg-[#167FFC] hover:text-white p-4 h-[250px] geral-vantagens">
                        <div class="icon-home">
                        <i class="fa-solid fa-user-shield text-5xl"></i>
                        </div>
                        <h2 class="text-xl font-bold py-2 text-center">Agentes sempre disponíveis</h2>
                        <p class="text-center">
                            Dispomos de agentes agéis e responsáveis em toda cidade de Maputo;
                        </p>
                    </div>
                    <!-- col -->
                </div>
            </div>
        </div>
    </div>

    <!--        SECOND BANNER          -->   
    <div class="relative bg-secundary bg-cover bg-center h-[350px] w-full flex items-center justify-center overlay">
        <!-- Content -->
        <div class="relative z-10 text-white container max-w-4xl mx-auto text-center">
            <h1 class="text-2xl md:text-4xl font-bold">
                <span class="text-[#24FF00]">“</span>Longas filas têm sido um grande problema para
                a maioria das pessoas trabalhadoras<span class="text-[#24FF00]">”</span>
            </h1>
        </div>
    </div>
    <!---       PARTNERS        --->
    <div class="partner p-2">
        <div class="flex flex-col items-center justify-center w-full my-10">
            <h1 class="text-2xl font-semibold">Nossos Parceiros</h1>
            <div class="h-1 bg-[#167FFC] rounded-md my-4 w-16 "></div>
        </div>
        <!--- SINGLE PARTNER --->
        <div class="flex flex-wrap justify-center items-center gap-20 py-10">
            <img src="{{asset('images/bci_partiner.png')}}" 
                alt="{{asset('images/bci_partiner.png')}}">
            <img src="{{asset('images/bancomoz.png')}}" alt="{{asset('images/bancomoz.png')}}">
            <img src="{{asset('images/MilleniumBim.png')}}" alt="{{asset('images/MilleniumBim.png')}}">
            <img src="{{asset('images/Aeroporto.png')}}" alt="{{asset('images/Aeroporto.png')}}">
        </div>
    </div>


</div>

</section>


@include("frontend.template.footer")