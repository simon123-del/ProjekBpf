<?php
class tabung
{
    function view($phi, $r, $t)
    {
        echo "Phi: " . $phi;
        echo "<br/>";
        echo "Jari-jari " . $r;
        echo "<br/>";
        echo "Tinggi " . $t;
        echo "<br/>";
    }

    function volume($phi, $r, $t)
    {
        $volume = $phi * $r * $r * $t;
        echo "Volume Tabung " . "adalah " . $volume;
    }

    function luaspermukaan($phi, $r, $t)
    {
        $luaspermukaan = 2 * $phi * $r * ($r + $t);
        echo "Luas Permukaan Tabung " . "adalah " . $luaspermukaan;
    }

    function luasselimut($phi, $r, $t)
    {
        $luasselimut = 2 * $phi * $r * $t;
        echo "Luas Selimut Tabung". " adalah " . $luasselimut;
    }
}
?>