<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Auth\Notifications\VerifyEmail as VerifyEmailNotification;

class VerifyEmail extends VerifyEmailNotification
{
    use Queueable;

    /**
     * Create a new notification instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     */
    public function toMail($notifiable): MailMessage
    {
        // Mendapatkan URL verifikasi
        $verificationUrl = $this->verificationUrl($notifiable);

        return (new MailMessage)
                    ->line('Silahkan verifikasi email anda dengan mengklik tautan di bawah.')
                    ->action('Verifikasi Email', $verificationUrl) // Gunakan URL verifikasi di sini
                    ->line('Terima kasih telah menggunakan aplikasi kami!');
    }

    /**
     * Generate the verification URL.
     */
    protected function verificationUrl($notifiable)
    {
        // Menghasilkan URL verifikasi menggunakan Laravel's verification route
        return route('verification.verify', [
            'id' => $notifiable->getKey(),
            'hash' => sha1($notifiable->getEmailForVerification()), // Menggunakan hash dari email
        ]);
    }
}
