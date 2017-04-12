<?php
include_once 'Connector.php';
include_once '../../Domain/Titulos.php';

class TitulosData extends Connector {
    function getTitulosEsData() {
        return $this->getTitulosData(0);
    }

    //Obtiene los titulos en ingles
    function getTitulosInData() {
        return $this->getTitulosData(1);
    }

    //funcion para obtener todos los titulos de la página
    public function getTitulosData($idioma) {
        $querySelect = "SELECT * FROM tu_titulo WHERE atIdioma=" . $idioma;
        $result = $this->exeQuery($querySelect);
        
        $titulos = [];
        while ($row = mysqli_fetch_array($result)) {
            $arregloTitulos = new Titulos($row['atId'], $row['atNombre'], $row['atDescripcion'], $row['atIdioma']);
            array_push($titulos, $arregloTitulos);
        }
        return $titulos;
    }

}
