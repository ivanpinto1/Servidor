<?php
    include('accesomongo.php');
    function insertar($collection, $nombre, $telf){
        $insert = $collection->insertOne([
            'nombre' => $nombre,
            'telefono' => $telf,
        ]);
    }
    function mostrar($collection){
        $resultado = $collection->find();
        foreach($resultado as $documento){
            $datos[]=[
                'nombre' => $documento['nombre'],
                'telefono' => $documento['telefono']
                ];
        }
        return $datos;
    }
    function buscar($collection, $nombre){
        $resultado = $collection->find(['nombre' => $nombre]);
        return $resultado;
    }
?>