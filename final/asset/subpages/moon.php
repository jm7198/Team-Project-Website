<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/planets.css">
    <link rel="stylesheet" href="../css/nav.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css" integrity="sha256-46r060N2LrChLLb5zowXQ72/iKKNiw/lAmygmHExk/o=" crossorigin="anonymous" />

    <title>Moon</title>
</head>

<body>
    <?php include '../inc/nav2.php';?>
    <header>
        <h1>Moon</h1>
    </header>
    <div id="pi-div"><img class="page-image" src="../images/moon-rotating.gif" alt="Moon rotating"></div>
    <a class="moon-wrap" href="earth.php"><img class="moon" src="../images/earth.webp" alt="earth"></a>

    <div class="container">
        <section id="Description">
            <h2>Description</h2>
            <p>The Moon is Earth's only natural satellite. Together with Earth it forms the Earth–Moon satellite system. It is about one-quarter of Earth in diameter (comparable to the width of Australia). In the Solar System it is the fifth largest satellite, larger than any of the known dwarf planets and the largest (and most massive) satellite of a planet relative to the planet. The Moon is a planetary-mass object that formed a differentiated rocky body, making it a satellite planet under the geophysical definitions of the term. It lacks any significant atmosphere, hydrosphere, or magnetic field. Its surface gravity is about one-sixth of Earth's (0.1654 g). Jupiter's moon Io is the only satellite in the Solar System known to have a higher surface gravity and density.</p>
        </section>

        <section id="Fun-Fact">
            <h2>Fun Fact</h2>
            <ul>
                <li>Radius 1,737.4 km </li>
                <li>The closest Uranus can get to Earth is 2.57 billion km, farthest is  3.15 billion km.</li>
                <li>The Moon's distance from Earth is about 385,000km.</li>
                <li>  Gravity of 1.62 m/s²</li>
                <li>Parent planet: Earth</li>
            </ul>
        </section>

        <section id="Atmostphere">
            <h2>Atmostphere</h2>
            <p>The Moon has an atmosphere so tenuous as to be nearly vacuum, with a total mass of less than 10 tonnes (9.8 long tons; 11 short tons). The surface pressure of this small mass is around 3 × 10−15 atm (0.3 nPa); it varies with the lunar day. Its sources include outgassing and sputtering, a product of the bombardment of lunar soil by solar wind ions. Elements that have been detected include sodium and potassium, produced by sputtering (also found in the atmospheres of Mercury and Io); helium-4 and neon from the solar wind; and argon-40, radon-222, and polonium-210, outgassed after their creation by radioactive decay within the crust and mantle. The absence of such neutral species (atoms or molecules) as oxygen, nitrogen, carbon, hydrogen and magnesium, which are present in the regolith, is not understood. Water vapor has been detected by Chandrayaan-1 and found to vary with latitude, with a maximum at ~60–70 degrees; it is possibly generated from the sublimation of water ice in the regolith. These gasses either return into the regolith because of the Moon's gravity or are lost to space, either through solar radiation pressure or, if they are ionized, by being swept away by the solar wind's magnetic field.

            Studies of Moon magma samples retrieved by the Apollo missions demonstrate that the Moon had once possessed a relatively thick atmosphere for a period of 70 million years between 3 and 4 billion years ago. This atmosphere, sourced from gasses ejected from lunar volcanic eruptions, was twice the thickness of that of present-day Mars. The ancient lunar atmosphere was eventually stripped away by solar winds and dissipated into space.</p>
        </section>

        <section id="Geology">
            <h2>Geology</h2>
            <p> The Moon is a differentiated body that was initially in hydrostatic equilibrium but has since departed from this condition. It has a geochemically distinct crust, mantle, and core. The Moon has a solid iron-rich inner core with a radius possibly as small as 240 kilometers (150 mi) and a fluid outer core primarily made of liquid iron with a radius of roughly 300 kilometers (190 mi). Around the core is a partially molten boundary layer with a radius of about 500 kilometers (310 mi). This structure is thought to have developed through the fractional crystallization of a global magma ocean shortly after the Moon's formation 4.5 billion years ago.

            Crystallization of this magma ocean would have created a mafic mantle from the precipitation and sinking of the minerals olivine, clinopyroxene, and orthopyroxene; after about three-quarters of the magma ocean had crystallized, lower-density plagioclase minerals could form and float into a crust atop. The final liquids to crystallize would have been initially sandwiched between the crust and mantle, with a high abundance of incompatible and heat-producing elements. Consistent with this perspective, geochemical mapping made from orbit suggests a crust of mostly anorthosite. The Moon rock samples of the flood lavas that erupted onto the surface from partial melting in the mantle confirm the mafic mantle composition, which is more iron-rich than that of Earth. The crust is on average about 50 kilometers (31 mi) thick.

            he Moon is the second-densest satellite in the Solar System, after Io. However, the inner core of the Moon is small, with a radius of about 350 kilometers (220 mi) or less, around 20% of the radius of the Moon. Its composition is not well understood, but is probably metallic iron alloyed with a small amount of sulfur and nickel; analyses of the Moon's time-variable rotation suggest that it is at least partly molten. The pressure at the lunar core is estimated to be 5 GPa (49,000 atm).            </p>
        </section>
        <?php include '../inc/wormhole.php';?>
        <?php include '../inc/footer.php';?>
    </div>

    <script src="../js/hamburger.js"></script>


</body>

</html>