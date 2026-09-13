    <!-- BEGIN: Top bar gradient loader assets -->
    <script src="<?= BASE_URL ?>testing-code/topbar-m3/jquery-3.5.1.min.js"></script>
    <script src="<?= BASE_URL ?>testing-code/topbar-m3/prettify.min.js"></script>
    <script src="<?= BASE_URL ?>testing-code/topbar-m3/topbar.js"></script>

    <script>
        $(function() {
            prettyPrint()
            function resetToDefaults() {
                topbar.config({
                autoRun      : true,
                barThickness : 10,
                barColors    : {
                    '0'      : 'rgba(65,24,117,1.0)',
                    '.25'    : 'rgba(82,37,138,1.0)',
                    '.50'    : 'rgba(114,95,209,1.0)',
                    '.75'    : 'rgba(42,181,232,1.0)',
                    '1.0'    : 'rgba(56,255,255,1.0)'
                },
                shadowBlur   : 0,
                shadowColor  : 'rgba(0,   0,   0,   .6)',
                className    : 'topbar'
                })
            }

            // Page load
            resetToDefaults()
            topbar.show()
            setTimeout(function() {
                $('#main_content').fadeIn('slow')
                topbar.hide()
            }, 1500)

        })
        </script>

        <!-- END: Top bar gradient loader assets -->