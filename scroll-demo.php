<?php include_once("config.php"); ?>


<?php include ROOT_PATH . 'includes/header.php'; ?>


<body class="citybox">

   <iframe class="figma" style="height: 100vh;"src="https://embed.figma.com/proto/iaG63yrBfUASo0qqd0tXvq/2026-Portfolio?node-id=678-54411&viewport=1532%2C-3970%2C0.05&scaling=min-zoom&content-scaling=fixed&starting-point-node-id=678%3A54411&page-id=668%3A61548&embed-host=share" allowfullscreen></iframe>

<style>
    .figma{
        width: 100%!important;
    }

    body{
        margin: 0px;
        padding: 0px
    }
</style>

<script>
    Let scrollInterval = setInterval(
        () => {
        window.scrollBy(0,3) //Adjust the number for different speeds
        If (window.innerHeight + window.scrollY >=
            document.body.scrollHeight){
            clearInterval(scrollInterval);
            }
    }, 10);
</script>


</body>

</html>