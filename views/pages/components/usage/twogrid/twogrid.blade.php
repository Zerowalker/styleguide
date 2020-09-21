@twogrid([])
    @twogrid([
        'isRow' => true
    ])
        @twogrid([
            'col' => [
                'xs' => 4,
            ],
            'classList' => ['u-color__bg--secondary']
        ])
        XS and up col 4
        @endtwogrid

        @twogrid([
            'col' => [
                'xs' => 8,
                'lg' => 4
            ],
            'classList' => ['u-color__bg--warning']
        ])
        XS col 8, LG col 4
        @endtwogrid

        @twogrid([
            'col' => [
                'xs' => 12,
                'lg' => 4
            ],
            'classList' => ['u-color__bg--success']
        ])
        XS col 12, lg col 4
        @endtwogrid
    @endtwogrid

    @twogrid([
        'isRow' => true
    ])
        @twogrid([
            'col' => 7,
            'classList' => ['u-color__bg--info']
        ])
        COL 7
        @endtwogrid

        @twogrid([
            'col' => "auto",
            'classList' => ['u-color__bg--warning']
        ])
        COL auto
        @endtwogrid
    @endtwogrid
@endtwogrid