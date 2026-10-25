@extends('layouts.app')

@section('title', 'PLANCLIMAC2 | Política de privacidad')

@section('content')
<article class="section-container legal-page" aria-labelledby="privacy-title">
    <header class="legal-page-header">
        <p class="section-eyebrow">Información legal</p>
        <h1 id="privacy-title" class="section-title mt-2">Política de privacidad</h1>
        <p class="legal-page-intro">Información sobre el tratamiento de datos personales en el sitio web de PLANCLIMAC2.</p>
        <p class="legal-page-updated">Última actualización: 25 de octubre de 2026.</p>
    </header>

    <div class="legal-page-content">

        <section aria-labelledby="privacy-data">
            <h2 id="privacy-data">1. Datos y finalidades</h2>
            <dl class="legal-definition-list">
                <div>
                    <dt>Visitas al sitio</dt>
                    <dd>La dirección IP y el agente de usuario del navegador se utilizan para registrar visitas y evitar contar varias veces la misma dirección en un día. La aplicación guarda estos datos y la fecha de la última visita en su base de datos. Para una dirección técnica configurada, el recuento se realiza como máximo una vez por semana. No elaboramos perfiles ni realizamos publicidad comportamental.</dd>
                </div>
            </dl>
        </section>

        <section aria-labelledby="privacy-lawfulness">
            <h2 id="privacy-lawfulness">2. Base jurídica</h2>
            <p>La medición básica de visitas se fundamenta en el interés legítimo de conocer el alcance del proyecto y mejorar el sitio.</p>
        </section>

        <section aria-labelledby="privacy-retention">
            <h2 id="privacy-retention">3. Conservación y destinatarios</h2>
            <p>Los registros de visita se conservan en la base de datos de la aplicación. El periodo de conservación es hasta la finalización del proyecto.</p>
            <p>No cedemos datos a terceros salvo obligación legal o cuando sea necesario para prestar el servicio mediante proveedores que actúan como encargados del tratamiento. Los servidores, CDN y proveedores de alojamiento pueden tratar datos técnicos de conexión conforme a sus propias condiciones.</p>
        </section>

        <section aria-labelledby="privacy-rights">
            <h2 id="privacy-rights">4. Sus derechos</h2>
            <p>Puede solicitar acceso, rectificación, supresión, oposición, limitación del tratamiento y portabilidad, cuando proceda, escribiendo a la dirección indicada anteriormente. También puede retirar el consentimiento sin que ello afecte a la licitud del tratamiento previo.</p>
            <p>Si considera que sus derechos no han sido atendidos, puede presentar una reclamación ante la <a href="https://www.aepd.es/" target="_blank" rel="noopener noreferrer">Agencia Española de Protección de Datos</a>.</p>
        </section>

        <section aria-labelledby="privacy-changes">
            <h2 id="privacy-changes">5. Cambios en esta política</h2>
            <p>Actualizaremos esta política cuando cambien los tratamientos realizados a través del sitio. La fecha de actualización figurará siempre al inicio de la página.</p>
        </section>
    </div>
</article>
@endsection
