@extends('layouts.app')

@section('title', 'PLANCLIMAC2 | Condiciones de uso')

@section('content')
<article class="section-container legal-page" aria-labelledby="terms-title">
    <header class="legal-page-header">
        <p class="section-eyebrow">Información legal</p>
        <h1 id="terms-title" class="section-title mt-2">Condiciones de uso</h1>
        <p class="legal-page-intro">Normas básicas para consultar y utilizar el sitio web de PLANCLIMAC2.</p>
        <p class="legal-page-updated">Última actualización: 25 de octubre de 2026.</p>
    </header>

    <div class="legal-page-content">
        <section aria-labelledby="terms-purpose">
            <h2 id="terms-purpose">1. Finalidad del sitio</h2>
            <p>Este sitio ofrece información pública sobre PLANCLIMAC2, sus entidades participantes, actividades, noticias y resultados. El acceso es gratuito y no requiere crear una cuenta ni aceptar estas condiciones mediante una casilla.</p>
        </section>

        <section aria-labelledby="terms-responsibility">
            <h2 id="terms-responsibility">2. Uso responsable</h2>
            <p>Al utilizar el sitio, debe hacerlo conforme a la legislación aplicable y de forma que no perjudique su funcionamiento, su seguridad ni los derechos de otras personas. No está permitido intentar acceder sin autorización a zonas restringidas, interferir con el servicio o introducir código o contenido malicioso.</p>
        </section>

        <section aria-labelledby="terms-content">
            <h2 id="terms-content">3. Información y contenidos</h2>
            <p>Los contenidos se ofrecen con fines informativos y de difusión del proyecto. Se procura mantenerlos actualizados, pero pueden contener errores o quedar desactualizados; la información publicada no constituye asesoramiento profesional ni sustituye las fuentes oficiales o la normativa aplicable.</p>
            <p>Los documentos, imágenes, marcas y demás materiales pueden estar sujetos a derechos propios o de terceros. Su consulta no concede una licencia general de reproducción o reutilización. Cuando se permita su reutilización, deben respetarse las condiciones de licencia indicadas junto al material y citarse su procedencia.</p>
        </section>

        <section aria-labelledby="terms-links">
            <h2 id="terms-links">4. Enlaces a otros sitios</h2>
            <p>Este sitio puede incluir enlaces a páginas de terceros para facilitar el acceso a información relacionada. Esos sitios tienen sus propias condiciones y políticas; no controlamos ni asumimos responsabilidad por sus contenidos, disponibilidad o prácticas de privacidad.</p>
        </section>

        <section aria-labelledby="terms-availability">
            <h2 id="terms-availability">5. Disponibilidad y cambios</h2>
            <p>El sitio se proporciona tal como está disponible. Pueden realizarse tareas de mantenimiento o cambios en sus contenidos y funciones; se procurará limitar las interrupciones, sin garantizar una disponibilidad ininterrumpida.</p>
            <p>Estas condiciones pueden actualizarse cuando cambie el sitio o su marco de funcionamiento. La fecha de actualización se indicará en esta página.</p>
        </section>

        <section aria-labelledby="terms-contact">
            <h2 id="terms-contact">6. Contacto e información adicional</h2>
            <p>Para consultar relaciones con el sitio, puede contactar a los distintos puntos focales, que aparecen en <a href="/contact">Contacto</a>. El tratamiento de datos personales y el uso de tecnologías de almacenamiento se describen en la <a href="{{ route('privacy') }}">política de privacidad</a> y la <a href="{{ route('cookies') }}">política de cookies</a>.</p>
        </section>
    </div>
</article>
@endsection
