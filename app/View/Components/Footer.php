<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Footer extends Component
{
    /**
     * Create a new component instance.
     */

    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $partners = array(
            [
                'title'=>"CANARIAS",
                'location'=>"Avda. Francisco La Roche, nº 35 Edf. Servicios Múltiples I Planta 11ª Santa Cruz de Tenerife 38071 Tenerife"
            ], [
                'title'=>"AZORES",
                'location'=>"Avenida Antero de Quental, n.º 9 C - 3º andar, 9500-160 Ponta Delgada"
            ],[
                'title'=>"MADEIRA",
                'location'=>"Rua Dr. Pestana Júnior N.º 6 - 5 º andar - 9064-506"
            
            ],[
                'title'=>"CABO VERDE",
                'location'=>"Edificio do Ministério das Infraestruturas Ponta Belém, CP -114, Plateau, Ciudad Praia"
            ],[
                'title'=>"SANTO TOMÉ Y PRÍNCIPE",
                'location'=>"Edifício do SAAR SEGUROS 2º Andar - Avenida Amílcar Cabral, Caixa Postal nº 1023"
            ],[
                'title'=>"GHANA",
                'location'=>"HR22+HVQ, Starlets 91 Rd, Accra"
            ],
            [
                'title'=>"COSTA DE MÁRFIL",
                'location'=>"06 BP 426 Abidjan 06"
            ]
        );
        
        return view('components.footer', ['partners' => $partners]);
    }
}
