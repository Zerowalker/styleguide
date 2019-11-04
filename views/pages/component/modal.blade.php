@extends('layout.master')

@section('content')
    @markdown
        #Modal
        Popup for important content and notifications. 
    @endmarkdown

    @doc(['slug' => 'modal'])

        @button(
            [
                'href' => '#',
                'isOutlined' => false,
                'background' => 'primary',
                'text' => 'Open Modal',
                'icon' => ['name' => 'favorite', 'color' => 'black'],
                'size' => 'lg',
                'color' => 'secondary',
                'reverseIcon' => true,
                'floating' => true,
                'attributeList' => ['data-open' => 'exampleModalId']
            ]
        )
        @endbutton

        @modal(
            [
                'heading'=> "Hey, have you seen this?",
                'isPanel' => false,
                'id' => 'exampleModalId',
                'overlay' => 'dark',
                'animation' => 'scale-up',
            ]
        )
        sWe are presenting the sparkling new styleguide! Curabitur blandit tempus porttitor. Etiam porta sem malesuada magna mollis euismod. Integer posuere erat a ante venenatis dapibus posuere velit aliquet.
        
        We are presenting the sparkling new styleguide! Curabitur blandit tempus porttitor. Etiam porta sem malesuada magna mollis euismod. Integer posuere erat a ante venenatis dapibus posuere velit aliquet.
        
        We are presenting the sparkling new styleguide! Curabitur blandit tempus porttitor. Etiam porta sem malesuada magna mollis euismod. Integer posuere erat a ante venenatis dapibus posuere velit aliquet.
        
        We are presenting the sparkling new styleguide! Curabitur blandit tempus porttitor. Etiam porta sem malesuada magna mollis euismod. Integer posuere erat a ante venenatis dapibus posuere velit aliquet.
        
        We are presenting the sparkling new styleguide! Curabitur blandit tempus porttitor. Etiam porta sem malesuada magna mollis euismod. Integer posuere erat a ante venenatis dapibus posuere velit aliquet.
        
        We are presenting the sparkling new styleguide! Curabitur blandit tempus porttitor. Etiam porta sem malesuada magna mollis euismod. Integer posuere erat a ante venenatis dapibus posuere velit aliquet.
        
        We are presenting the sparkling new styleguide! Curabitur blandit tempus porttitor. Etiam porta sem malesuada magna mollis euismod. Integer posuere erat a ante venenatis dapibus posuere velit aliquet.
        
        We are presenting the sparkling new styleguide! Curabitur blandit tempus porttitor. Etiam porta sem malesuada magna mollis euismod. Integer posuere erat a ante venenatis dapibus posuere velit aliquet.
        
        We are presenting the sparkling new styleguide! Curabitur blandit tempus porttitor. Etiam porta sem malesuada magna mollis euismod. Integer posuere erat a ante venenatis dapibus posuere velit aliquet.
        
        We are presenting the sparkling new styleguide! Curabitur blandit tempus porttitor. Etiam porta sem malesuada magna mollis euismod. Integer posuere erat a ante venenatis dapibus posuere velit aliquet.
        
        @endmodal

    @enddoc
@stop
