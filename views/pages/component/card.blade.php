@extends('layout.master')

@section('content')

    @markdown
    #Cards

    Nullam quis risus eget urna mollis ornare vel eu leo. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.
    @endmarkdown

    @doc(['slug' => 'card', 'displayParams' => false])

    <div class="grid">

        <div class="grid-s-12 grid-sm-6 grid-md-6">
            @card([
                'title' => ['text' => 'I am pretty nice a title', 'position' => 'body'],
                'byline' => ['text' => 'I am cool byline....', 'position' => 'body'],
                'content' => 'Doodily texas left rappin surfer assal horizontology mono = one craptacular bumbled-bee.',
                'hasRipple' => false
            ])

            @endcard

        </div>

        <div class="grid-s-12 grid-sm-6 grid-md-6">
            @card([
                'title' => ['text' => 'Another title with a few more words. Two lines of text.', 'position' => 'body'],
                'byline' => ['text' => 'Neglecterino nulecule four krustys flunjer parents', 'position' => 'body'],
                'buttons' => [
                    [
                        'href' => 'http://helsingborg.se',
                        'text' => 'Action button 1',
                        'attributeList' => ['js-toggle-trigger']
                    ],
                    [
                        'href' => 'http://',
                        'text' => 'Action button 2',
                        'attributeList' => ['js-toggle-trigger']
                    ]
                ]
            ])

            @endcard

        </div>
    </div>

    @enddoc

    @doc(['slug' => 'card', 'displayParams' => false])

        @markdown
        ##Position of Title and byline

        There are two positions slots available for title and byline. Top and Body.
    
        @endmarkdown

        <div class="grid">

            <div class="grid-s-12 grid-sm-6 grid-md-6">
                @card([
                    'href' => 'http://styleguide.helsingborg.se/card',
                    'image' => 'https://picsum.photos/300/200?image=1016',
                    'title' => ['text' => 'Melon sierra leone bologi rutabaga', 'position' => 'top'],
                    'byline' => ['text' => 'Celery quandong swiss chard chicory', 'position' => 'top'],
                    'content' => 'Sea lettuce gumbo grape kale kombu cauliflower salsify kohlrabi okra sea lettuce
                                    broccoli celery lotus root carrot winter purslane turnip greens garlic. ',
                    'hasRipple' => false
                ])

                @endcard

            </div>

            <div class="grid-s-12 grid-sm-6 grid-md-6">
                @card([
                    'href' => 'http://styleguide.helsingborg.se/card',
                    'image' => 'https://picsum.photos/300/200?image=1071',
                    'title' => ['text' => 'Cheddar ricotta croque monsieur', 'position' => 'body'],
                    'byline' => ['text' => 'Melted cheese camembert de normandie cheese triangles', 'position' => 'body'],
                    'content' => 'Blue castello red leicester camembert de normandie. Swiss cheeseburger taleggio cheesy
                            feet who moved my cheese airedale mozzarella boursin. ',
                    'hasRipple' => false

                ])

                @endcard

            </div>
        </div>

    @enddoc

    @doc(['slug' => 'card'])

    @markdown
    ##Avatars and Icon buttons

    You can add avatar to the top title.

    @endmarkdown

    <div class="grid">

        <div class="grid-s-12 grid-sm-6 grid-md-6">
            @card([
                'href' => 'http://styleguide.helsingborg.se/card',
                'title' => ['text' => 'Why not add an avatar to your card', 'position' => 'top'],
                'byline' => ['text' => 'I am a byline under a title that is friend with an avatar.', 'position' => 'top'],
                'content' => 'Gumbo beet greens corn soko endive gumbo gourd. Parsley shallot courgette tatsoi pea sprouts
                        fava bean collard greens dandelion okra wakame tomato.',
                'hasRipple' => false,
                'avatar' => [
                    'image' => 'https://picsum.photos/70/70?image=64',
                    'name' => 'Cookie Monster'
                ]
            ])

            @endcard

        </div>

        <div class="grid-s-12 grid-sm-6 grid-md-6">
            @card([
                'avatar' => [
                    'name' => 'Snowflake'
                ],
                'href' => 'http://styleguide.helsingborg.se/card',
                'title' => ['text' => 'Maybe you also need to add some cool icon-buttons', 'position' => 'top'],
                'byline' => ['text' => 'Social icons or something else...', 'position' => 'body'],
                'content' => 'Brussels sprout coriander water chestnut gourd swiss chard wakame kohlrabi beetroot carrot watercress.
                        Corn amaranth salsify bunya nuts nori azuki bean chickweed potato bell pepper artichoke.',
                'hasRipple' => false,
                'icons' => [
                    [
                        'name' => 'favorite',
                        'size' => 'lg',
                        'attributeList' => ['js-toggle-trigger']
                    ],
                    [
                        'name' => 'forum',
                        'size' => 'lg',
                        'color' => 'primary',
                        'attributeList' => ['js-toggle-trigger']
                    ],
                    [
                        'name' => 'place',
                        'size' => 'lg',
                        'color' => 'secondary',
                        'attributeList' => ['js-toggle-trigger']
                    ]
                ]
            ])

            @endcard

        </div>
    </div>

    @enddoc



@stop




