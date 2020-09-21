@extends('layout.containers.doc')

@section('doc-content')
    {!!
        markdown('
            #Twogrid

            An attempt to improve grid com
        ')
    !!}

    @doc(['slug' => 'twogrid'])
    @enddoc
@endsection
