@extends('layouts.app')

@section('title', 'PLANCLIMAC2 (1/MAC/2/2.4/0006) | Contacto')

@section('content')
    <section class="my-4 w-full mx-auto">
        <div class="w-full md:w-10/12 mx-auto">
            
        <div data-container="translator">
            <h1 
                class="w-full text-center text-3xl font-semibold text-sky-800 mt-4" 
                data-lang="es">
                Contacto
            </h1>
            <h1 
                class="hidden w-full text-center text-3xl font-semibold text-sky-800 mt-4" 
                data-lang="pt">
                Contato
            </h1>
            <h1 
                class="hidden w-full text-center text-3xl font-semibold text-sky-800 mt-4" 
                data-lang="en">
                Contact
            </h1>
            <h1 
                class="hidden w-full text-center text-3xl font-semibold text-sky-800 mt-4" 
                data-lang="fr">
                Contact
            </h1>
        </div>


        <div data-container="translator">
            <h2 
                class="w-full text-xl text-green-700 mt-2" 
                data-lang="es">
                Canarias
            </h2>
            <h2 
                class="hidden w-full text-xl text-green-700 mt-2" 
                data-lang="pt">
                Canárias
            </h2>
            <h2 
                class="hidden w-full text-xl text-green-700 mt-2" 
                data-lang="en">
                Canary Islands
            </h2>
            <h2 
                class="hidden w-full text-xl text-green-700 mt-2" 
                data-lang="fr">
                Îles Canaries
            </h2>
        </div>


            <section class="flex gap-4">
                @include('/Front/contact/components/card', [
                    "name" => "Silvia Armas Espinel",
                    "organization" => "Gobierno de Canarias",
                    "email" => "sarmesp@gobiernodecanarias.org",
                ])
                @include('/Front/contact/components/card', [
                    "name" => "Jesús González Navarro",
                    "organization" => "Gestión y Planeamiento Territorial y Medioambiental S.A.",
                    "email" => "jgonnav@gesplan.es",
                ])
            </section>
            <div data-container="translator">
                <h2 
                    class="w-full text-xl text-green-700 mt-2" 
                    data-lang="es">
                    Azores
                </h2>
                <h2 
                    class="hidden w-full text-xl text-green-700 mt-2" 
                    data-lang="pt">
                    Açores
                </h2>
                <h2 
                    class="hidden w-full text-xl text-green-700 mt-2" 
                    data-lang="en">
                    Azores
                </h2>
                <h2 
                    class="hidden w-full text-xl text-green-700 mt-2" 
                    data-lang="fr">
                    Açores
                </h2>
            </div>

            <section>
                @include('/Front/contact/components/card', [
                    "name" => "Ana C. Pereira Rodrigues",
                    "organization" => "Secretaria Regional do Ambiente e Ação Climática",
                    "email" => "Ana.CP.Rodrigues2@azores.gov.pt",
                ])
            </section>

            <h2 class="w-full text-xl text-green-700 mt-2">
                Madeira
            </h2>
            <section>
                @include('/Front/contact/components/card', [
                    "name" => "Henrique Paulo dos Santos Rodrigues",
                    "organization" => "Secretaria Regional de Agricultura, Pescas e Ambiente",
                    "email" => "henrique.rodrigues@madeira.gov.pt",
                ])
            </section>

            <div data-container="translator">
                <h2 
                    class="w-full text-xl text-green-700 mt-2" 
                    data-lang="es">
                    Cabo Verde
                </h2>
                <h2 
                    class="hidden w-full text-xl text-green-700 mt-2" 
                    data-lang="pt">
                    Cabo Verde
                </h2>
                <h2 
                    class="hidden w-full text-xl text-green-700 mt-2" 
                    data-lang="en">
                    Cape Verde
                </h2>
                <h2 
                    class="hidden w-full text-xl text-green-700 mt-2" 
                    data-lang="fr">
                    Cap-Vert
                </h2>
            </div>

            <section>
                @include('/Front/contact/components/card', [
                    "name" => "Denise Semedo de Pina",
                    "organization" => "Instituto Nacional de Meteorologia e Geofísica",
                    "email" => "denise.pina@inmg.gov.cv",
                ])
            </section>

            <div data-container="translator">
                <h2 
                    class="w-full text-xl text-green-700 mt-2" 
                    data-lang="es">
                    Santo Tomé y Príncipe
                </h2>
                <h2 
                    class="hidden w-full text-xl text-green-700 mt-2" 
                    data-lang="pt">
                    São Tomé e Príncipe
                </h2>
                <h2 
                    class="hidden w-full text-xl text-green-700 mt-2" 
                    data-lang="en">
                    São Tomé and Príncipe
                </h2>
                <h2 
                    class="hidden w-full text-xl text-green-700 mt-2" 
                    data-lang="fr">
                    São Tomé-et-Principe
                </h2>
            </div>

            <section>
                @include('/Front/contact/components/card', [
                    "name" => "Sulisa Signo Bom Jesus Quaresma",
                    "organization" => "Direcção do Ambiente e Acção Climática",
                    "email" => "sulisa.dgaac@gmail.com",
                ])
            </section>

            <div data-container="translator">
                <h2 
                    class="w-full text-xl text-green-700 mt-2" 
                    data-lang="es">
                    Ghana
                </h2>
                <h2 
                    class="hidden w-full text-xl text-green-700 mt-2" 
                    data-lang="pt">
                    Gana
                </h2>
                <h2 
                    class="hidden w-full text-xl text-green-700 mt-2" 
                    data-lang="en">
                    Ghana
                </h2>
                <h2 
                    class="hidden w-full text-xl text-green-700 mt-2" 
                    data-lang="fr">
                    Ghana
                </h2>
            </div>

            <section>
                @include('/Front/contact/components/card', [
                    "name" => "Patrick K. Agbesinyale",
                    "organization" => "Ministry of Lands and Natural Resources General Directorate of Lands and Natural Resources",
                    "email" => "info@minr.gov.gh",
                ])
            </section>

            <div data-container="translator">
                <h2 
                    class="w-full text-xl text-green-700 mt-2" 
                    data-lang="es">
                    Costa de Marfil
                </h2>
                <h2 
                    class="hidden w-full text-xl text-green-700 mt-2" 
                    data-lang="pt">
                    Costa do Marfim
                </h2>
                <h2 
                    class="hidden w-full text-xl text-green-700 mt-2" 
                    data-lang="en">
                    Ivory Coast
                </h2>
                <h2 
                    class="hidden w-full text-xl text-green-700 mt-2" 
                    data-lang="fr">
                    Côte d’Ivoire
                </h2>
            </div>

            <section>
                @include('/Front/contact/components/card', [
                    "name" => "Ange Patricia Adiko",
                    "organization" => "Office Ivoirien des Parcs et Réserves",
                    "email" => "angepatricia.adiko@gmail.com",
                ])
            </section>
        </div>
    </section>
@endsection