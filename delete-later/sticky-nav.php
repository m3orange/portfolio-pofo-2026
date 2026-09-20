<div class="sticky-tunnel-links">
    <ul>
        <li><a href="<?= BASE_URL ?>index.php" title="Home">Home</a></li>
        <li><a href="<?= BASE_URL ?>about.php" title="Tech Expertise">Tech Expertise</a></li>
        <li><a href="<?= BASE_URL ?>resume.php" title="Resume">Resume</a></li>
        <li><a href="<?= BASE_URL ?>projects/atlas-ui/index.php" title="Atlas UI">CityBox</a></li>
        <li><a href="<?= BASE_URL ?>projects/atlas-design-system/index.php" title="Atlas Design System">Design System</a></li>
        <li><a href="<?= BASE_URL ?>projects/admin/index.php" title="Admin Platform">Admin</a></li>
        <li><a href="<?= BASE_URL ?>projects/musicasa/index.php" title="Musicasa">Musicasa</a></li>
        <li><a href="<?= BASE_URL ?>projects/cx-roadmap/index.php" title="CX Roadmap">USIC</a></li>
        <li><a href="<?= BASE_URL ?>projects/space-scout/index.php" title="In Situ">Space Scout</a></li>
        <li><a href="<?= BASE_URL ?>projects/map-tools/index.php" title="Map Tools">Map Tools</a></li>
        <li><a href="<?= BASE_URL ?>projects/idd/index.php" title="IDD">IDD</a></li>
    </ul>
</div>

<style>


.sticky-tunnel-links{

position: fixed;
z-index: 1000;
bottom: 0px;
left: 0px;
width: 100%;
background-color: #555555;

height: 40px;
padding: 10px 40px;

display: flex;
flex-direction: row;
justify-content: center;
}

.sticky-tunnel-links ul{
display: flex;
flex-direction: row;
justify-content: space-evenly;
margin: 0px!important;
}


        @media (max-width: 991px) {

            .sticky-tunnel-links{
                display: flex;
                align-items: center;
                padding: 20px 40px;
                height: fit-content;
            }
            .sticky-tunnel-links ul{
                display: flex;
                flex-wrap: wrap!important;
                justify-content: flex-start!important;
                margin: 0px !important;

            }

        }


.sticky-tunnel-links li{
margin: 0 10px;
}



.sticky-tunnel-links a{
width: fit-content;
font-size: 14px;
line-height: 18px;
text-align: left;
}

.sticky-tunnel-links a{
color: #fff;
}


</style>