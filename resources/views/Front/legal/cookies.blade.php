@extends('layouts.app')

@section('title', 'PLANCLIMAC2 | Política de cookies')

@section('content')
<article class="section-container legal-page" aria-labelledby="cookies-title">
    <header class="legal-page-header">
        <p class="section-eyebrow">Información legal</p>
        <h1 id="cookies-title" class="section-title mt-2">Política de cookies</h1>
        <p class="legal-page-intro">Información sobre las tecnologías de almacenamiento utilizadas por PLANCLIMAC2.</p>
        <p class="legal-page-updated">Última actualización: 25 de octubre de 2026.</p>
    </header>

    <div class="legal-page-content">
        <section aria-labelledby="cookies-what">
            <h2 id="cookies-what">1. Qué son las cookies</h2>
            <p>Las cookies y tecnologías similares son pequeños archivos o espacios de almacenamiento que permiten recordar información en su dispositivo cuando navega por un sitio web.</p>
        </section>

        <section aria-labelledby="cookies-used">
            <h2 id="cookies-used">2. Tecnologías que utiliza este sitio</h2>
            <p>El sitio no utiliza cookies publicitarias, de analítica de terceros ni de elaboración de perfiles. Las tecnologías empleadas son necesarias para su funcionamiento o para recordar una opción solicitada por usted.</p>
            <div class="legal-table-wrap" tabindex="0">
                <table>
                    <caption class="sr-only">Tecnologías de almacenamiento utilizadas en el sitio</caption>
                    <thead>
                        <tr>
                            <th scope="col">Tecnología</th>
                            <th scope="col">Finalidad</th>
                            <th scope="col">Duración</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Almacenamiento local: <code>lang</code></td>
                            <td>Recordar el idioma que usted selecciona en el sitio.</td>
                            <td>Hasta que borre los datos de navegación o cambie la preferencia.</td>
                        </tr>
                        <tr>
                            <td>Cookie de sesión de Laravel</td>
                            <td>Mantener una sesión segura para las personas autorizadas que acceden a la zona de administración.</td>
                            <td>Sesión; por defecto, hasta 120 minutos de inactividad.</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </section>

        <section aria-labelledby="cookies-consent">
            <h2 id="cookies-consent">3. Consentimiento</h2>
            <p>Al ser tecnologías técnicas o vinculadas a una preferencia solicitada, no requieren un panel de consentimiento. Si en el futuro incorporamos tecnologías no necesarias —por ejemplo, analítica, publicidad o contenido de terceros que instale cookies— solicitaremos su consentimiento antes de activarlas y actualizaremos esta política.</p>
        </section>

        <section aria-labelledby="cookies-control">
            <h2 id="cookies-control">4. Cómo gestionar sus preferencias</h2>
            <p>Puede cambiar el idioma desde el selector del sitio. También puede borrar o bloquear cookies y datos de sitios desde la configuración de su navegador. El bloqueo de las cookies técnicas puede impedir el acceso a la zona de administración.</p>
        </section>

        <section aria-labelledby="cookies-contact">
            <h2 id="cookies-contact">5. Contacto</h2>
            <p>Para cualquier consulta sobre esta política, puede contactar a los distintos puntos focales, que aparecen en <a href="/contact">Contacto</a>. Consulte también nuestra <a href="{{ route('privacy') }}">política de privacidad</a>.</p>
        </section>
    </div>
</article>
@endsection
