@extends('layouts.app')

@section('title', 'PLANCLIMAC2 | Aviso legal')

@section('content')
<article class="section-container legal-page" aria-labelledby="legal-notice-title">
    <header class="legal-page-header">
        <p class="section-eyebrow">Información legal</p>
        <h1 id="legal-notice-title" class="section-title mt-2">Aviso legal</h1>
        <p class="legal-page-intro">Información sobre la titularidad y las condiciones generales de acceso al sitio web de PLANCLIMAC2.</p>
        <p class="legal-page-updated">Última actualización: 25 de octubre de 2026.</p>
    </header>

    <div class="legal-page-content">
        <section aria-labelledby="legal-notice-owner">
            <h2 id="legal-notice-owner">1. Titularidad y datos del prestador</h2>
            <p>Este sitio web difunde información del proyecto PLANCLIMAC2 (1/MAC/2/2.4/0006). La identidad de la entidad titular y operadora del sitio, así como sus datos registrales y de contacto, deben ser confirmados por la entidad responsable antes de publicar esta página como aviso legal definitivo.</p>
        </section>

        <section aria-labelledby="legal-notice-use">
            <h2 id="legal-notice-use">2. Uso del sitio</h2>
            <p>El acceso al sitio es gratuito. Quien lo utilice debe hacerlo de forma lícita, respetar los derechos de terceros y abstenerse de interferir con la seguridad o el funcionamiento del servicio.</p>
            <p>La información se ofrece con fines de difusión del proyecto y no constituye asesoramiento profesional ni sustituye la información de las fuentes oficiales competentes.</p>
        </section>

        <section aria-labelledby="legal-notice-rights">
            <h2 id="legal-notice-rights">3. Propiedad intelectual e industrial</h2>
            <p>Los textos, imágenes, logotipos, documentos y demás materiales pueden estar sujetos a derechos de propiedad intelectual o industrial de PLANCLIMAC2, de sus entidades participantes o de terceros. Su publicación no implica la concesión de una licencia general. Antes de reutilizar un material, consulte la licencia indicada junto a él o solicite autorización a quien ostente los derechos.</p>
        </section>

        <section aria-labelledby="legal-notice-links">
            <h2 id="legal-notice-links">4. Enlaces y responsabilidad</h2>
            <p>Los enlaces a sitios externos se facilitan como referencia. La entidad responsable del sitio no controla ni garantiza sus contenidos, disponibilidad o políticas. Se adoptarán medidas razonables para mantener la información propia actualizada, sin garantizar la ausencia de errores o interrupciones.</p>
        </section>
        <section aria-labelledby="legal-notice-privacy">
            <h2 id="legal-notice-privacy">5. Privacidad y condiciones de uso</h2>
            <p>El tratamiento de datos personales se describe en la <a href="{{ route('privacy') }}">política de privacidad</a>. Para las tecnologías de almacenamiento, consulte la <a href="{{ route('cookies') }}">política de cookies</a>. Las normas de utilización del sitio se desarrollan en las <a href="{{ route('terms') }}">condiciones de uso</a>.</p>
        </section>
    </div>
</article>
@endsection
