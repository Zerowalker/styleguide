@extends('layout.master')
<script src="node_modules/clientside-require/dist/bundle.js"></script>
@section('hero')
    @hero([
        'backgroundColor' => '#fff',
        'textColor' => 'dark',
        'headline' => 'Easy to install',
        'byline' => 'Copy and paste....',
    ])

    @slot('content')
        The setup is pretty simple. :-)
    @endslot

    @endhero
@endsection

@section('content')

    @markdown
    #Setup
    Getting started with an easy, minimal setup, load the precompiled all-in-one CSS and JS or compile your own component setup.

    @endmarkdown


    @paper(['padding' => 3])
    <article>

        @markdown
            ##Quick start
            Looking for a quick setup to add our Styleguide to your project? <br><br>
            You just have to make sure you link the files properly in your web page. <br>
            Generally it is wise to import Stylesheet into the head and import javascript files at the end of the body to reduce page load time.
            Follow the example below on how to import the styleguide files into your web page/project.

            ##CSS - The look and feel
            Copy-paste the stylesheet &lt;link&gt; into your &lt;head&gt; before all other stylesheets to load our CSS.
        @endmarkdown
        @code([
            'classList' => ['breaklines'],
            'language' => 'html',
            'content' => ''
        ])
        &lt;link rel="stylesheet" id="styleguide-css" type="text/css"
        href="https://<?php echo $_SERVER['HTTP_HOST']; ?>/assets/dist/css/styleguide-css.min.css"
        type="text/css" media="all"&gt;
        @endcode

        @markdown
            ##JavaScript - Functionality
            Many of our components require the use of JavaScript to function.
            Our JavaScript is pure vanilla JS, so no need for external plugins or libraries.
            Place the following &lt;script&gt; near the end of your pages, right before the closing &lt;/body&gt; tag.
        @endmarkdown

        @code([
            'classList' => ['breaklines'],
            'language' => 'html',
            'content' => ''])
                &lt;script id="styleguide-js" type="text/javaScript"
                href="https://<?php echo $_SERVER['HTTP_HOST']; ?>/assets/dist/js/styleguide-js.min.js"
                crossorigin="anonymous"&gt;&lt;script&gt;
        @endcode


        @markdown
            ##Yeah! The easy and minimal setup is done!!!!
        Now you just need to use the Component HTML that you find on the <a href="https://styleguide.local/component">component pages</a> or even better,
            use our <a href="https://github.com/helsingborg-stad/blade-component-library">Component Library (Open source on GITHUB)</a> and our blade components to render HTML. Less markup programming, so you can
            put more effort into doing other Cool things or just chill and have a nice cup of tea. More fun ;-).

        @endmarkdown

        @link([
            'href' => '/component'
        ])
            Check out the component library with Markup (HTML) / Blade examples.
        @endbutton

        @typography([
            "variant" => "h2",
            "element" => "h2",
        ])

        If your not going to use all our components?
        @endtypography
        @typography([
            "variant" => "h4",
            "element" => "h4",
        ])
        Don't worry dude, we have a solution for you
        @endtypography

        @markdown
            We compile components CSS you select on the fly....<br />
            You can easily render a stylesheet just for the components you need.
            Select the components you want to use and press generate CSS. We compile a customized CSS version for your need.

        @endmarkdown
        @link([
            'href' => '/component'
            ])
            Read about atomic design. Why & how, it is a pretty simple concept....
        @endbutton
        <br />
        @typography([
                "variant" => "h2",
                "element" => "h2",
            ])
            Select Components you need.
        @endtypography
        @typography([
            "variant" => "h4",
            "element" => "h4",
            ])
            We take care of all the dependency and serve you a compiled CSS file.
        @endtypography
        <div class="grid">
            @foreach(HbgStyleGuide\Helper\Documentation::getComponentDirectories() as $atomic => $atomicValue)
                @typography([
                    "variant" => "headline",
                    "element" => "h5"
                ])
                {{ucfirst($atomic)}}
                @endtypography

                @foreach($atomicValue as $keys => $values)
                    <div class="grid-md-3 grid-sm-3 grid-xs-2">
                        @option([
                            'type' => 'checkbox',
                            'attributeList' => [
                                'name' => 'componentGroup'
                            ],
                            'value' => $values,
                            'label' => ucfirst($values),
                        ])
                        @endoption

                    </div>
                @endforeach
            @endforeach
        </div>
        <h3 class="SelectedComponentsTitle"></h3>
        <div class="SelectedComponents"></div>
        @loader([
            'shape' => 'linear',
            'size' => 'md',
            'color' => 'primary',
            'classList' => ['selectedComponentsLoader', 'u-display--none'],
            'text' => 'Compiling...'
        ])
        @endloader

        <div class="onlineCompiledComponents u-display--none">
         <code class="language-html" id="compiledCSS">
         </code>

        </div>
        <div class="u-padding__top--3 u-padding__bottom--8">
            @button([
                'color' => 'secondary',
                'href' => '',
                'size' => 'lg',
                'text' => 'Generate CSS',
                'background' => 'default',
                'classList' => ['u-float--right', 'c-button--generateCSS']
            ])
            @endbutton
        </div>

    </article>
    @endpaper


@stop

<script>
    function copy(element) {
        navigator.clipboard.writeText(element.innerText).then(function () {

        }, function () {

        });
    }

</script>