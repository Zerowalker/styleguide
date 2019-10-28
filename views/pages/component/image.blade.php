// ***************************************************************
// *** Mapping for different sizes
// ***************************************************************
$radius: (
        (
                "name": "",
                "size": $border-radius-md
        ),
        (
                "name": &--rounded-xs,
                "size": $border-radius-xs
        ),
        (
                "name": &--rounded-sm,
                "size": $border-radius-sm
        ),
        (
                "name": &--rounded-md,
                "size": $border-radius-md
        ),
        (
                "name": &--rounded-lg,
                "size": $border-radius-lg
        )
);

// ***************************************************************
// *** Image
// ***************************************************************
.c-image {

    margin: 0px;
    width: 100%;
    height: auto;

    &__image {
        border-radius: $border-radius-xs;
    }

    &__caption {
        font-size: 0.8em;
        color: darken($color-gray, 20%) !important;
    }

    &--full-width &__image {
        object-fit: contain;
        width: 100%;
    }

    // Rounded Images with different sizes
    @each $map in $radius {

        $radiusName: map-get($map, "name");
        $radiusSize: map-get($map, "size");

        &#{$radiusName}.c-image--rounded img {
            border-radius: #{$radiusSize};
        }

        &#{$radiusName}.c-image--rounded-top-left img {
            border-radius: #{$radiusSize} 0 0 0;
        }

        &#{$radiusName}.c-image--rounded-top-right img {
            border-radius: 0 #{$radiusSize} 0 0;
        }

        &#{$radiusName}.c-image--rounded-bottom-left img {
            border-radius: 0 0 #{$radiusSize} 0;
        }

        &#{$radiusName}.c-image--rounded-bottom-right img {
            border-radius: 0 0 0 #{$radiusSize};
        }

        &#{$radiusName}.c-image--rounded-top-left.c-image--rounded-top-right img {
            border-radius: #{$radiusSize} #{$radiusSize} 0 0;
        }

        &#{$radiusName}.c-image--rounded-bottom-left.c-image--rounded-bottom-right img {
            border-radius: 0 0 #{$radiusSize} #{$radiusSize};
        }

        &#{$radiusName}.c-image--rounded-top-left.c-image--rounded-bottom-left img {
            border-radius: #{$radiusSize} 0 0 #{$radiusSize};
        }

        &#{$radiusName}.c-image--rounded-top-left.c-image--rounded-bottom-right img {
            border-radius: #{$radiusSize} 0 #{$radiusSize} 0;
        }

        &#{$radiusName}.c-image--rounded-top-right.c-image--rounded-bottom-right img {
            border-radius: 0 0 #{$radiusSize} #{$radiusSize};
        }

        &#{$radiusName}.c-image--rounded-top-right.c-image--rounded-bottom-left img {
            border-radius: #{$radiusSize} 0 0 #{$radiusSize};
        }
    }
}
