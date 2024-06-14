
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
            <div class="col-span-12 md:col-span-3 lg:col-span-4 p-4">
                <div class="flex flex-col items-center border-2 border-[#167FFC]
                        hover:bg-[#167FFC] hover:text-white p-4 h-[300px] geral-vantagens">
                        <div class="icon-home">
                            <i class="fa-solid fa-bullseye text-5xl"></i>
                        </div>
                    <!--<div class="h-1 bg-[#167FFC] rounded-md my-4 w-16 "></div>-->
                    <h1 class="text-2xl font-bold py-2">Nossa missão</h1>
                    <ul>
                        <li class="flex items-center gap-2"><div class="icon-home">
                        <i class="fa-solid fa-arrow-right"></i>
                        </div>Fornecer tempo de lazer</li>
                        <li class="flex items-center gap-2"><div class="icon-home">
                        <i class="fa-solid fa-arrow-right"></i>
                        </div>Fornecer segurança</li>
                        <li class="flex items-center gap-2"><div class="icon-home">
                        <i class="fa-solid fa-arrow-right"></i>
                        </div>Fornecer status</li>
                        <li class="flex items-center gap-2"><div class="icon-home">
                        <i class="fa-solid fa-arrow-right"></i>
                        </div>Fornecer satisfação</li>
                    </ul>
                </div>
            </div>

            <div class="col-span-12 md:col-span-3 lg:col-span-4 p-4">
                <div class="flex flex-col items-center border-2 border-[#167FFC]
                        hover:bg-[#167FFC] hover:text-white p-4 h-[300px] geral-vantagens">
                        <div class="icon-home">
                            <i class="fa-regular fa-lightbulb text-5xl"></i>
                        </div>
                    <!--<div class="h-1 bg-[#167FFC] rounded-md my-4 w-16 "></div>-->
                    <h1 class="text-2xl font-bold py-2">Nossa visão</h1>
                    <ul>
                    <li class="flex items-center gap-2"><div class="icon-home">
                        <i class="fa-solid fa-arrow-right"></i>
                        </div>Liderar no mercado nacional gestão de tempo nas filas
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-span-12 md:col-span-3 lg:col-span-4 p-4">
                <div class="flex flex-col items-center border-2 border-[#167FFC]
                        hover:bg-[#167FFC] hover:text-white p-4 h-[300px] geral-vantagens">
                        <div class="icon-home">
                            <i class="fa-solid fa-medal text-5xl"></i>
                        </div>
                    <!--<div class="h-1 bg-[#167FFC] rounded-md my-4 w-16 "></div>-->
                    <h1 class="text-2xl font-bold py-2">Nossos valores</h1>
                    <ul>
                    <li class="flex items-center gap-2"><div class="icon-home">
                        <i class="fa-solid fa-arrow-right"></i>
                        </div>Inovação</li>
                        <li class="flex items-center gap-2"><div class="icon-home">
                        <i class="fa-solid fa-arrow-right"></i>
                        </div>Eficiência</li>
                        <li class="flex items-center gap-2"><div class="icon-home">
                        <i class="fa-solid fa-arrow-right"></i>
                        </div>Qualidade</li>
                        <li class="flex items-center gap-2"><div class="icon-home">
                        <i class="fa-solid fa-arrow-right"></i>
                        </div>Sustentabilidade</li>
                        <li class="flex items-center gap-2"><div class="icon-home">
                        <i class="fa-solid fa-arrow-right"></i>
                        </div>Compromisso</li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
</section>

@include("frontend.template.footer")