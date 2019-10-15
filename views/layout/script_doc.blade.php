<section id="docblock-{{rand(0,99999)}}" class="example">

    @paper(['padding' => 3])
    
    <h3>Example</h3>
        <div class="markup-preview">
            {!! $slot !!}
        </div>
      
        @code(['language' => 'html', 'content' => ""]) 
            {{ \HbgStyleGuide\Helper\ParseString::tidyHtml($slot)}}
        @endcode
    @endpaper
    @if(isset($settings))

        @paper(['padding' => 3])
            <h3>Attributes</h3>

            @if ($summary)
                <p>{!! $summary !!}</p>
            @endif

            <table>
                <thead>
                    <td>Attributes</td>
                    <td>Description</td>
                    <td>Values</td>
                </thead>

                @foreach($settings as $key => $item)
                    <tr>
                        <td>{{$key}}</td>

                        @if(isset($description[$key]))
                        <td><code>{{$description[$key]}}</code></td>
                        @else 
                        <td>-</td>
                        @endif
                        
                        @if(isset($item)) 
                            <td>{{$item}}</td>
                        @else 
                            <td>-</td>
                        @endif
                    </tr>
                @endforeach
            </table>
        @endpaper

    @endif
</section>