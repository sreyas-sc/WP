jQuery(document).ready(function(){
    jQuery('form#theme-license-key-form').on('submit', function(e) {
        e.preventDefault();
        var license_key = jQuery('form#theme-license-key-form').serializeArray()[0].value;

        if ( license_key == "" ) {
            alert('Please Enter the license key first!');
            return;
        } else {
            jQuery.post(
                localize_script_arr.ajaxurl, {
                    action: 'license_activate_solar_renewable_energy_pro',
                    wpnonce: localize_script_arr.wpnonce,
                    solar_renewable_energy_pro_license_key: license_key
                },
                function(data, status) {
                    if (status == 'success') {
                        if (data.status) {
                            location.reload(true);

                            jQuery.notify(data.msg, {
                                position: "right bottom",
                                className: "success"
                            });
                        } else {
                            jQuery.notify(data.msg, {
                                position: "right bottom"
                            });
                        }
                    }
                }
            );
        }
    });

    jQuery('form#theme-license-key-form .next-step-activation').on('click', function(e) {
        e.preventDefault();

        jQuery('.demo-import-wrap').show();
        jQuery('.license-key-wrap').hide();
    });

    jQuery('form#theme-license-key-form .deactivate-domain').on('click', function(e) {

        var license_key = jQuery('form#theme-license-key-form').serializeArray()[0].value;

        if (confirm('Are you sure you want to deactivate the key!')) {
            jQuery.post(
                localize_script_arr.ajaxurl, {
                    action: 'license_deactivate_solar_renewable_energy_pro',
                    wpnonce: localize_script_arr.wpnonce,
                    solar_renewable_energy_pro_license_key: license_key
                },
                function(data) {

                    if( data.status == true ) {
                        location.reload(true);

                        jQuery.notify(data.msg, {
                            position: "right bottom",
                            className: "success"
                        });
                    } else {
                        jQuery.notify(data.msg, {
                            position: "right bottom"
                        });
                    }
                }
            );
        }
    });
});
