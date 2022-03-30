<?php

namespace App\Notifications;

use Carbon\Carbon;
use Illuminate\Bus\Queueable;
use Illuminate\Support\Facades\URL;
use Illuminate\Notifications\Notification;
use Illuminate\Notifications\Messages\MailMessage;



class SpaceRegistrationUpdateNotification extends Notification {





    use Queueable;



    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct() {
        //
    }





    /**
     * Get the notification's delivery channels.
     *
     * @param mixed $notifiable
     *
     * @return array
     */
    public function via( $notifiable ) {

        return [ 'mail' ];
    }





    /**
     * Get the mail representation of the notification.
     *
     * @param mixed $notifiable
     *
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail( $notifiable ) {


        $link = URL::signedRoute( 'space.update', [
            'space_registration' => $notifiable,
            'email'              => sha1( $notifiable->email ),
        ] );


        return ( new MailMessage )
            ->subject( 'Sind Ihre Angaben noch aktuell?' )
            ->greeting( 'Hallo ' . $notifiable->name )
            ->line( 'Sie haben über unsere Initiative am ' . $notifiable->created_at->format( 'd.m.Y' ) . ' folgenden Wohnraum bei unserer Initiative eingemeldet.' )
            ->line( $notifiable->address . ', '
                    . $notifiable->zip . ' '
                    . $notifiable->city . ', '
                    . $notifiable->square_meter . 'm², Verfügbar von '
                    . Carbon::parse( $notifiable->available_from )->format( 'd.m.Y' )
                    . ' bis '
                    . Carbon::parse( $notifiable->available_to )->format( 'd.m.Y' )
            )
            ->line( 'Um eine reibungslose Vermittlung gewährleisten zu können, bitten wir Sie uns bekannt zu geben falls sich am Status der Verfügbarkeit oder an anderen Daten etwas geändert hat.' )
            ->action( 'Änderung bekanntgeben', $link )
            ->line( 'Vielen Dank für Ihre Unterstützung!' );
    }





    /**
     * Get the array representation of the notification.
     *
     * @param mixed $notifiable
     *
     * @return array
     */
    public function toArray( $notifiable ) {

        return [
            //
        ];
    }
}
