@component('mail::message')

    @component('mail::button', ['url' => 'https://mechtechidn.com', 'color' => 'success'])

    Silakan untuk klik !
    @endcomponent


    Terima Kasih

            &copy; {{ date('Y') }} {{ config('app.name') }}. All rights reserved.



@endcomponent
