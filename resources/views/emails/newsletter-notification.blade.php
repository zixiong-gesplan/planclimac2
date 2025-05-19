<!-- <x-mail::message>
# Introduction

The body of your message.

<x-mail::button :url="''">
Button Text
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message> -->
<x-mail::message>
    <h1>
        {{$news->title}}
    </h1>

    <p>
        {{$news->short_description}}
    </p>
</x-mail::message> 