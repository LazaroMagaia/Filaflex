
@include("frontend.template.header")

<section>
    <div class="relative bg-contact bg-cover bg-center h-[450px] w-full flex items-center justify-center overlay">
        <!-- Content -->
        <div class="relative z-10 text-white container max-w-4xl mx-auto text-center">
            <h1 class="text-2xl md:text-4xl font-bold">
                Fale conosco
            </h1>
            <p class="text-base pt-2">
                Contacta a Filaflex
            </p>
        </div>
    </div>

    <div class="form bg-[#11152B] py-10">
    <div class="grid grid-cols-12 gap-6 pt-10">
            <div class="col-span-12 md:col-span-6 p-4">
            <form action="{{ route('contact.send') }}" method="POST">
            @csrf
                <input type="text" placeholder="Nome" name="name" class="w-full h-[40px] my-2 px-2 outline-0 focus:outline-0">
                <input type="number" placeholder="Contacto" name="contact" class="w-full h-[40px] my-2 px-2 outline-0 focus:outline-0">
                <input type="email" placeholder="Email" name="email" class="w-full h-[40px] my-2 px-2 outline-0 focus:outline-0">
                <input type="text" placeholder="assunto" name="subject" class="w-full h-[40px] my-2 px-2 outline-0 focus:outline-0">
                <textarea name="message" id="" class="w-full h-[250px] px-2 outline-0 focus:outline-0" placeholder="Mensagem" 
                    class="my-2"></textarea>

                <button type="submit" class="border-2 border-[#167FFC] my-5 
                    px-5 py-2 text-white">Enviar</button>
              </form>
            </div>

            <div class="col-span-12 md:col-span-6 p-4">
                <div class="flex flex-col flex-wrap  gap-10 justify-center items-start p-2 
                    md:px-20 text-white">
                    <div class="flex flex-col">
                        <p>Endereço</p>
                        <p class="font-bold">Av. Julius Nyerere, Nr. 3453<br>
                        Cidade de Maputo, Moçambique
                        </p>
                    </div>
                    
                    <div class="flex flex-col items-start">
                        <p>Contactos</p>
                        <p class="font-bold">(+258) 84 678 1641<br>
                            (+258) 87 418 9587
                        </p>
                    </div>

                    <div class="flex flex-col items-start">
                        <p>Email</p>
                        <p class="font-bold">
                            info@filaflex.co.mz
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </div>

</section>

@include("frontend.template.footer")