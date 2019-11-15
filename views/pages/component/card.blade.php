@extends('layout.master')

@section('content')

    @markdown
    #Cards

    Nullam quis risus eget urna mollis ornare vel eu leo. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.
    @endmarkdown

    @doc(['slug' => 'card', 'displayParams' => false])

    <div class="grid">

        <div class="grid-s-12 grid-md-6">
            @card([
                'title' => 'I am pretty nice a title',
                'byline' => 'Sometimes bylines are good'
            ])

            @endcard

        </div>

        <div class="grid-s-12 grid-md-6">
            @card([
                'title' => 'I am another title',
                'byline' => 'I think you know what I am...',
                'buttons' => [
                    [
                        'href' => 'http://helsingborg.se',
                        'text' => 'Action 1',
                        'classList' => ['js-toggle-trigger']
                    ],
                    [
                        'href' => 'http://',
                        'text' => 'Action 2',
                        'attributeList' => ['js-toggle-trigger']
                    ]
                ]
            ])

            @endcard

        </div>
    </div>

    @enddoc

    @doc(['slug' => 'card'])

    <div class="grid">

        <div class="grid-s-12 grid-md-6">
            @card([
                'href' => 'http://styleguide.helsingborg.se/card',
                'image' => 'https://picsum.photos/300/200?image=1077',
                'title' => 'Plats ingalunda varit, miljoner.',
                'content' => 'Löksås ipsum dimmhöljd björnbär regn faktor sitt del har gamla, fram faktor dimma sista precis
                därmed annat ännu söka, från se ingalunda dag vi äng plats är. Söka denna erfarenheter flera vidsträckt fram
                dock stora söka, genom dimma blivit enligt vemod söka nya gör annan, mot annat där enligt faktor dimma
                rännil.'
            ])

            @endcard

        </div>

        <div class="grid-s-12 grid-md-6">
            @card([
                'href' => 'http://styleguide.helsingborg.se/card',
                'image' => 'https://picsum.photos/300/200?image=1077',
                'title' => 'Plats ingalunda varit, miljoner.',
                'content' => 'Löksås ipsum dimmhöljd björnbär regn faktor sitt del har gamla, fram faktor dimma sista precis
                därmed annat ännu söka, från se ingalunda dag vi äng plats är. Söka denna erfarenheter flera vidsträckt fram
                dock stora söka, genom dimma blivit enligt vemod söka nya gör annan, mot annat där enligt faktor dimma
                rännil.'

            ])

            @endcard

        </div>
    </div>

    @enddoc



@stop




