
@include("frontend.template.header")

<section>
    <div class="relative bg-terciary bg-cover bg-center h-[450px] w-full flex items-center justify-center overlay">
        <!-- Content -->
        <div class="relative z-10 text-white container max-w-4xl mx-auto text-center">
            <h1 class="text-2xl md:text-4xl font-bold">
            Sobre a nossa empresa
            </h1>
            <p class="text-base pt-2">
                Conheça-nos
            </p>
        </div>
    </div>

<!----- COMPANY INFO ---->
    <div class="company-about py-10 px-2 md:px-10 bg-[#EEEEEE]">
        <div class="flex flex-col items-start justify-start w-full">
            <h1 class="text-3xl font-bold">Quem somos</h1>
            <div class="h-1 bg-[#167FFC] rounded-md my-4 w-16 "></div>
            <p>
                <span class="text-[#167FFC] text-4xl">A</span> Filaflex é uma empresa inovadora, fundada em março de 2024, com o objetivo 
                de transformar a forma como as pessoas gerenciam seu tempo. Focada no mercado
                de gestão de tempo, a Filaflex oferece soluções avançadas para otimizar a 
                experiência em filas de espera em diversos contextos, como bancos, postos de 
                emissão de documentos, eventos e muito mais.
            </p>
        </div>
        <div class="grid grid-cols-12 gap-6 pt-10">
            <div class="col-span-12 md:col-span-3 lg:col-span-4 border-[1px] border-[#167FFC] p-4">
                <div class="flex flex-col justify-center items-center">
                    <img src="{{asset('images/mission.svg')}}" class="w-[60px]" alt="">
                    <!--<div class="h-1 bg-[#167FFC] rounded-md my-4 w-16 "></div>-->
                    <h1 class="text-2xl font-bold py-2">Nossa missão</h1>
                    <ul>
                        <li class="flex items-center"><img src="{{asset('images/arrow.svg')}}" alt=""> 
                        Fornecer tempo de lazer</li>
                        <li class="flex items-center"><img src="{{asset('images/arrow.svg')}}" alt=""> 
                        Fornecer segurança</li>
                        <li class="flex items-center"><img src="{{asset('images/arrow.svg')}}" alt=""> 
                        Fornecer status</li>
                        <li class="flex items-center"><img src="{{asset('images/arrow.svg')}}" alt=""> 
                        Fornecer satisfação</li>
                    </ul>
                </div>
            </div>

            <div class="col-span-12 md:col-span-3 lg:col-span-4 border-[1px] border-[#167FFC] p-4">
                <div class="flex flex-col justify-center items-center">
                    <img src="{{asset('images/Lamp.svg')}}" class="w-[60px]" alt="">
                    <!--<div class="h-1 bg-[#167FFC] rounded-md my-4 w-16 "></div>-->
                    <h1 class="text-2xl font-bold py-2">Nossa visão</h1>
                    <ul>
                        <li class="flex items-start"><img src="{{asset('images/arrow.svg')}}" alt=""> 
                        Liderar no mercado nacional gestão de tempo nas filas
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-span-12 md:col-span-3 lg:col-span-4 border-[1px] border-[#167FFC] p-4">
                <div class="flex flex-col justify-center items-center">
                    <img src="{{asset('images/Value.svg')}}" class="w-[60px]" alt="">
                    <!--<div class="h-1 bg-[#167FFC] rounded-md my-4 w-16 "></div>-->
                    <h1>Nossos valores</h1>
                    <ul>
                        <li class="flex items-center"><img src="{{asset('images/arrow.svg')}}" alt=""> 
                        Inovação</li>
                        <li class="flex items-center"><img src="{{asset('images/arrow.svg')}}" alt=""> 
                        Eficiência</li>
                        <li class="flex items-center"><img src="{{asset('images/arrow.svg')}}" alt=""> 
                        Qualidade</li>
                        <li class="flex items-center"><img src="{{asset('images/arrow.svg')}}" alt=""> 
                        Sustentabilidade</li>
                        <li class="flex items-center"><img src="{{asset('images/arrow.svg')}}" alt=""> 
                        Compromisso</li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
</section>

@include("frontend.template.footer")