( function( api ) {

    // Extends our custom "startup" section.
    api.sectionConstructor['solar-renewable-energy-pro'] = api.Section.extend( {

        // No events for this type of section.
        attachEvents: function () {},

        // Always make the section active.
        isContextuallyActive: function () {
            return true;
        }
    } );

} )( wp.customize );


