@extends('layouts.app')

@section('title', 'PLANCLIMAC2 | Declaración de accesibilidad')

@section('content')
<article class="section-container legal-page" aria-labelledby="accessibility-title">
    <header class="legal-page-header">
        <p class="section-eyebrow">Accesibilidad</p>
        <h1 id="accessibility-title" class="section-title mt-2">Declaración de accesibilidad</h1>
        <p class="legal-page-intro">Información sobre la accesibilidad del sitio web de PLANCLIMAC2 y cómo comunicar barreras o solicitar contenido en un formato accesible.</p>
        <p class="legal-page-updated">Última actualización: 25 de octubre de 2026.</p>
    </header>

    <div class="legal-page-content">
        <section aria-labelledby="accessibility-scope">
            <h2 id="accessibility-scope">1. Ámbito y estado de conformidad</h2>
            <p>Esta declaración se refiere al sitio web público de PLANCLIMAC2. A la fecha de actualización no se ha completado una evaluación técnica formal de conformidad con la norma EN 301 549 ni con los requisitos aplicables de accesibilidad. Por tanto, no se declara que el sitio sea plenamente conforme.</p>
            <p>La entidad titular debe confirmar si el sitio está sujeto al Real Decreto 1112/2018 y completar la evaluación y los datos de esta declaración de acuerdo con el ámbito jurídico aplicable.</p>
        </section>

        <section aria-labelledby="accessibility-preparation">
            <h2 id="accessibility-preparation">2. Preparación de esta declaración</h2>
            <p>La declaración se publica como información inicial y se basa en una autoevaluación pendiente de completar. No sustituye una auditoría de accesibilidad ni acredita el cumplimiento de criterios técnicos.</p>
            <p>La entidad responsable debe registrar la fecha y el método de evaluación, las páginas y muestras examinadas, la norma utilizada y el resultado, y actualizar esta declaración cuando se complete esa revisión.</p>
        </section>

        <section aria-labelledby="accessibility-feedback">
            <h2 id="accessibility-feedback">3. Comunicaciones y solicitudes</h2>
            <p>Si encuentra una barrera de accesibilidad o necesita información o contenido en un formato accesible, puede comunicarlo a <a href="mailto:{{ $legal['accessibility_contact_email'] ?: $legal['controller_email'] }}">{{ $legal['accessibility_contact_email'] ?: $legal['controller_email'] }}</a>. Indique la dirección de la página y describa el problema o formato que necesita, evitando incluir datos personales innecesarios.</p>
            <p>La entidad responsable debe confirmar el canal, los plazos de respuesta y el procedimiento de reclamación que resulten aplicables antes de considerar completo este mecanismo.</p>
        </section>

        <section aria-labelledby="accessibility-improvements">
            <h2 id="accessibility-improvements">4. Medidas en curso</h2>
            <p>El equipo continuará revisando la estructura, navegación, contraste, textos alternativos, formularios y compatibilidad con teclado y tecnologías de apoyo. Las mejoras no deben interpretarse como una declaración de conformidad hasta que se evalúen conforme a los criterios aplicables.</p>
        </section>
    </div>
</article>
@endsection
