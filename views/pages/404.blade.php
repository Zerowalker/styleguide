@extends('layout.master')

@section('content')
    <h1>404 - Page cannot be found</h1>
    <p>This page dosen't exists.</p>
    <pre><code>{{$errorMessage}}</code></pre>

        @button([
            'href' => 'http://helsingborg.se/?variant=1', 
            'label' => "Button one", 
            'isOutlined' => true, 
            'isPrimary' => false
        ])
        @endbutton

        @button([
            'href' => 'http://helsingborg.se/?variant=2', 
            'label' => "Button two", 
            'isOutlined' => true, 
            'isPrimary' => true
        ])
        @endbutton

        @button([
            'href' => 'http://helsingborg.se/?variant=3', 
            'label' => "Button three", 
            'isOutlined' => false, 
            'isPrimary' => true
        ])
        @endbutton

        @table([
            'list' => [
                ['Hello', 'Hi!', 'Howdy'],
                ['Goodbye', 'Bye', 'See ya!']
            ],
            'headings' => ['Formal', 'Casual', 'Redneck'],
            'showFooter' => true,
            'isSmall' => true
        ])
        @endtable

        @breadcrumb([
            'list' => [
                ['href' => 'https://google.se', 'label' => 'Main page'],
                ['href' => 'https://google.se', 'label' => 'Sub page'],
                ['href' => 'https://google.se', 'label' => 'Sub sub page'],
            ]
        ])
        @endbreadcrumb

        @pagination([
            'list' => [
                ['href' => 'https://google.se', 'label' => 'Main page'],
                ['href' => 'https://google.se', 'label' => 'Sub page'],
                ['href' => 'https://google.se', 'label' => 'Sub sub page'],
            ]
        ])
        @endpagination

        @listing([
            'list' => [
                ['href' => 'https://google.se', 'label' => 'Main page'],
                ['href' => 'https://google.se', 'label' => 'Sub page'],
                ['href' => 'https://google.se', 'label' => 'Sub sub page'],
            ],
            'elementType' => "ol"
        ])
        @endlisting

        @notice([
            'content' => "This is the content of this masterpiece called notice.",
            'isWarning' => true
        ])
        @endnotice

        @image([
            'src'=> "https://picsum.photos/300/200?image=1026",
            'alt' => "This is a image",
            'caption' => "Hey, I am a caption"
        ])
        @endimage

        @accordion([
            'list'=> [
                ['heading' => "Mattis Risus Tristique Commodo", 'content' => "Donec ullamcorper nulla non metus auctor fringilla. Curabitur blandit tempus porttitor."],
                ['heading' => "Mattis Risus Tristique Commodo", 'content' => "Donec ullamcorper nulla non metus auctor fringilla. Curabitur blandit tempus porttitor."],
                ['heading' => "Mattis Risus Tristique Commodo", 'content' => "Donec ullamcorper nulla non metus auctor fringilla. Curabitur blandit tempus porttitor."],
                ['heading' => "Mattis Risus Tristique Commodo", 'content' => "Donec ullamcorper nulla non metus auctor fringilla. Curabitur blandit tempus porttitor."]
            ]
        ])
        @endaccordion

        @code([])
        @endcode

        @gallery([
            'list' => [
                ['largeImage' => "https://picsum.photos/900/600?image=1026", 'smallImage' => "https://picsum.photos/300/200?image=1026", 'caption' => "Image with stuff", 'alt' => "The alt text"],
                ['largeImage' => "https://picsum.photos/900/600?image=1038", 'smallImage' => "https://picsum.photos/300/200?image=1038", 'caption' => "Image with stuff", 'alt' => "The alt text"],
                ['largeImage' => "https://picsum.photos/900/600?image=1043", 'smallImage' => "https://picsum.photos/300/200?image=1043", 'caption' => "Image with stuff", 'alt' => "The alt text"],
                ['largeImage' => "https://picsum.photos/900/600?image=1039", 'smallImage' => "https://picsum.photos/300/200?image=1039", 'caption' => "Image with stuff", 'alt' => "The alt text"],
                ['largeImage' => "https://picsum.photos/900/600?image=1006", 'smallImage' => "https://picsum.photos/300/200?image=1006", 'caption' => "Image with stuff", 'alt' => "The alt text"],
                ['largeImage' => "https://picsum.photos/900/600?image=993", 'smallImage' => "https://picsum.photos/300/200?image=993", 'caption' => "Image with stuff", 'alt' => "The alt text"],
            ]
        ])
        @endgallery

        @icon(['icon' => 'home', 'label' => 'Mutch icon, wow!'])
        @endicon

        @hero(['backgroundImage' => 'https://picsum.photos/900/600?image=993'])
        @endhero

        @video([
            'formats' => [
                ['src' => "https://storage.googleapis.com/coverr-main/mp4/Self-Serve-in-Arizona.mp4", 'type' => "mp4"],
            ]
        ])
        @endvideo

        @avatar([
            'name' => "Sebastian Thulin"
        ])
        @endavatar

        @avatar([
            'image' => "https://picsum.photos/70/70?image=64"
        ])
        @endavatar

        @heading([
            'label' => "Yo, im a heading.",
            'level' => 3
        ])
        @endbutton

@stop