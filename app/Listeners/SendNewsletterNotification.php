<?php

namespace App\Listeners;

use App\Events\NewsCreated;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Resend\Laravel\Facades\Resend;
use App\Models\NewsletterUser;

class SendNewsletterNotification implements ShouldQueue
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(NewsCreated $event): void
    {

        $newsletterUser = NewsletterUser::all();
        $emails = $newsletterUser->pluck('email');
        try {
            //code...
            Resend::emails()->send([
                'from' => 'PLANCLIMAC2 <no-reply@email.proyectoplanclimac2.org>',
                'to' => $emails,
                'subject' => 'Nueva Publicación PLANCLIMAC2 '. $event->news->title,
                'html' => '
                        <div style="font-family: sans-serif; background: #f9fafb; padding: 20px;">
                            <div style="background: white; padding: 30px; border-radius: 12px; max-width: 600px; margin: auto;">
                                <h2 style="color: #1f2937;">📰 Nueva Noticia: ' . htmlspecialchars($event->news->title) . '</h2>
                                <p style="color: #374151; font-size: 16px; line-height: 1.6;">' . nl2br(htmlspecialchars($event->news->short_description)) . '</p>
                                <div style="margin-top: 40px; font-size: 14px; color: #9ca3af; text-align: center;">
                                    Estás recibiendo este correo porque estás suscrito a nuestro boletín.<br>
                                    Gracias por seguirnos.
                                </div>
                            </div>
                        </div>
                    ',
            ]);
        } catch (\Throwable $th) {
            //throw $th;
            print($th);
            print( $event->news->title);

        }


        // NewsletterUser::chuck(100)->each(function($newsletterUser){
        //     \Mail::to($newsletterUser->email)->queue(
        //         new \App\Mail\NewsCreatedMail($event->news)
        //     );
        // });
    }
}
