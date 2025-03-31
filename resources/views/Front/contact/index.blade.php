@extends('layouts.app')

@section('title', 'Noticias de PLANCLIMAC2')

@section('content')
    <section class="my-4 w-full mx-auto">
        <div class="w-full md:w-10/12 mx-auto">
            
            <h1 class="w-full text-center text-3xl font-semibold text-sky-800 mt-4">
                Contacto
            </h1>

            <h2 class="w-full text-xl text-green-700 mt-2">
                Canarias
            </h2>

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
            <h2 class="w-full text-xl text-green-700 mt-2">
                Azores
            </h2>
            <section>
                @include('/Front/contact/components/card', [
                    "name" => "Ana C. Pereira Rodrigues",
                    "organization" => "Secretaria Regional do Ambiente e Ação Climática",
                    "email" => "ana.cp.rorigues2@azores.gov.pt",
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

            <h2 class="w-full text-xl text-green-700 mt-2">
                Cabo Verde
            </h2>
            <section>
                @include('/Front/contact/components/card', [
                    "name" => "Denise Semedo de Pina",
                    "organization" => "Instituto Nacional de Meteorologia e Geofísica",
                    "email" => "denise.pina@inmg.gov.cv",
                ])
            </section>

            <h2 class="w-full text-xl text-green-700 mt-2">
                Santo Tomé y Principe
            </h2>
            <section>
                @include('/Front/contact/components/card', [
                    "name" => "Sulisa Signo Bom Jesus Quaresma",
                    "organization" => "Direcção do Ambiente e Acção Climática",
                    "email" => "sulisa.dgaac@gmail.com",
                ])
            </section>

            <h2 class="w-full text-xl text-green-700 mt-2">
                Ghana
            </h2>
            <section>
                @include('/Front/contact/components/card', [
                    "name" => "Patrick K. Agbesinyale",
                    "organization" => "Ministry of Lands and Natural Resources General Directorate of Lands and Natural Resources",
                    "email" => "info@minr.gov.gh",
                ])
            </section>

            <h2 class="w-full text-xl text-green-700 mt-2">
                Costa de Marfil
            </h2>
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