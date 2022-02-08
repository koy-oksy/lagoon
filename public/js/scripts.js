$(document).ready(function() {

    $('#form-submit').on('submit', function() {
        let name = $('#firstname').val();
        let phone = $('#phone').val();

        $.ajax({
            url: base_url + "/index.php/contact",
            data: { firstname: name, phone: phone },
            success: function() {
                console.log('test!');
            }
        });



        $('#success-firstname').text(name);
        $('.contact-form-handler').hide('slow', function() {
            $('.contact-form-success').show('slow');
        });
        return false;
    });

    jQuery("#animated-thumbnails-gallery")
        .justifiedGallery({
            captions: true,
            lastRow: "hide",
            rowHeight: 180,

            margins: 5
        })
        .on("jg.complete", function() {
            window.lightGallery(
                document.getElementById("animated-thumbnails-gallery"), {
                    autoplayFirstVideo: false,
                    pager: false,
                    download: false,
                    galleryId: "nature",
                    plugins: [lgZoom, lgThumbnail],
                    mobileSettings: {
                        controls: false,
                        showCloseIcon: false,
                        download: false,
                        rotate: false
                    }
                }
            );
        });

});