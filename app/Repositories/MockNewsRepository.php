<?php

namespace App\Repositories;

use App\Interfaces\NewsRepositoryInterface;

class MockNewsRepository implements NewsRepositoryInterface {

    private $news = array(
        [
            'id' => 0,
            'title' => 'Bioclimatic indicators dataset for the orographically complex Canary Islands archipelago',
            // 'tags' => array('acciones informátivas', 'cambio climático'),
            'tags' => array('cambio climático'),
            'short_description' => 'Publicación del artículo Bioclimatic indicators dataset for the orographically complex Canary Islands archipelago del grupo GOTA de la Universidad de La Laguna.',
            'date' => '01/11/2024',
            'description' => 'Las Islas Canarias son un archipiélago de gran valor natural, con una amplia variedad de especies endémicas, lo que hace esencial estudiar los efectos del cambio climático. Esta investigación utiliza técnicas dinámicas de regionalización climática para obtener proyecciones climáticas que contribuyan a la conservación de los ecosistemas en las islas. En este trabajo, se emplearon proyecciones climáticas derivadas de simulaciones WRF con una resolución espacial de 3 km para crear un novedoso conjunto de datos compuesto por 53 indicadores bioclimáticos, denominado BICI–ULL (Indicadores Bioclimáticos en las Islas Canarias, Universidad de La Laguna).
            Las simulaciones climáticas regionales se basaron en tres modelos de CMIP5 (GFDL-ESM2M, IPSL–CM5A–MR y MIROC–ESM) y abarcaron tres períodos (1980–2009, 2030–2059, 2070–2099) bajo dos escenarios de emisiones (RCP 4.5 y RCP 8.5). Se utilizaron variables climáticas estándar como temperatura, precipitación, radiación solar, humedad y velocidad del viento para generar los indicadores bioclimáticos.',
            'image' => '/images/Bioclimatic-indicators-dataset.png',
            'document' => 'https://www.nature.com/articles/s41597-024-04134-x.pdf'
        ],
        [
            'id' => 1,
            'tags' => array(),
            'title' => 'Votación de la imagen corporativa oficial',
            'short_description' => 'Con motivo de la Primera reunión de partenariado les invitamos a todos los socios votar la imagen corporativa',
            'date' => '28/01/2025',
            'description' => 'Con motivo de la Primera reunión de partenariado les invitamos a votar la imagen corporativa',
            'image' => '/images/PLANCLIMAC IMAGEN CORPORATIVA.png',
            'document' => 'https://docs.google.com/forms/d/e/1FAIpQLSdHSWreSIg9SpYDB6oh_TXaG287EOcmjrLQ1h4GaEXeptmVew/viewform?usp=header'
        ]
        // [
        //     'id' => 1,
        //     'title' => 'Evolution of warm nights in the Canary Islands (1950 - 2023): evidence for climate change in the Southeastern North Atlantic',
        //     // 'tags' => array('acciones informátivas', 'cambio climático'),
        //     'tags' => array('cambio climático'),
        //     'short_description' => 'Publicación del artículo Evolution of warm nights in the Canary Islands (1950–2023): evidence for climate change in the Southeastern North Atlantic del grupo GEORIESGOS de la Universidad de La Laguna.',
        //     'date' => '10/01/2025',
        //     'description' => 'Las temperaturas nocturnas tienen un impacto directo en la salud y el bienestar de la población, y están estrechamente relacionadas con el agravamiento de ciertas patologías y la mortalidad. A medida que el calentamiento global adquiere magnitudes extraordinarias, conceptos como noche cálida, noche tropical o noche ecuatorial, utilizados como indicadores para evaluar la evolución de las temperaturas durante la noche, se están popularizando. En este trabajo se analiza la evolución de las temperaturas nocturnas en Canarias desde 1950, identificándose un incremento muy notable de la temperatura mínima diaria, especialmente en las cumbres, donde la tasa de aumento supera los 0,2 °C por década. En general, la temperatura mínima diaria alcanza fácilmente los 20 °C en muchas partes de las islas, con una tendencia estadísticamente significativa al aumento de la frecuencia de las noches tropicales. Además, tienden a producirse durante una temporada cada vez temporada, de forma más consecutiva y con mayor intensidad térmica. Las noches ecuatoriales - ≥ 25 °C- siguen siendo un fenómeno eminentemente fenómeno estival de creciente importancia en determinadas zonas del interior de algunas islas. Las noches tórridas - ≥ 30 °C-, por otro lado, se asocian a episodios extremadamente cálidos que afectan a sectores concretos condicionados por factores locales.',
        //     'image' => '/images/evolution_of_warm_nights.png',
        //     'document' => 'https://link.springer.com/article/10.1007/s00704-024-05290-1'
        // ],
    );

    public function getAll(){
        return array_reverse($this->news);
    }

    public function getById($id){
        foreach($this->news as $n){
            if($n['id'] == $id) {
                return $n;
            } 
        }
        return null;
    }
    public function create($data){
        return null;
    }
    public function update($id, $data){
        return null;
    }
    public function delete($id){
        return null;
    }
}