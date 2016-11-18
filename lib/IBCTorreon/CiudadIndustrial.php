<?php
/**
 * TrcIMPLAN Índice Básico de Colonias
 *
 * Copyright (C) 2016 Guillermo Valdes Lozano
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 *
 * @package TrcIMPLAN
 */

namespace IBCTorreon;

/**
 * Clase CiudadIndustrial
 */
class CiudadIndustrial extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre      = 'Ciudad Industrial';
        $this->autor       = 'IMPLAN Torreón Staff';
        $this->fecha       = '2016-11-18 13:33:45';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo     = 'ciudad-industrial';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Ciudad Industrial de Torreón.';
        $this->claves      = 'IMPLAN, Torreon, Desagregación';
        // El directorio en la raíz donde se guardará el archivo HTML
        $this->directorio  = 'ibc-torreon';
        // Opción del menú Navegación a poner como activa cuando vea esta publicación
        $this->nombre_menu = 'Indicadores Básicos por Colonias > Colonias de Torreón';
        // Para el Organizador
        $this->categorias  = array();
        $this->fuentes     = array();
        $this->regiones    = array('Torreón');
    } // constructor

    /**
     * Datos
     *
     * @return array Arreglo asociativo
     */
    public function datos() {
        return array(
            'Demografía' => array(
                '2010' => array(
                    'Población total' => 2,
                    'Porcentaje de población masculina' => 42.38,
                    'Porcentaje de población femenina' => 57.62,
                    'Porcentaje de población de 0 a 14 años' => 27.34,
                    'Porcentaje de población de 15 a 64 años' => 64.45,
                    'Porcentaje de población de 65 y más años' => 5.78,
                    'Porcentaje de población no especificada' => 2.43,
                    'Fecundidad promedio' => 1.67,
                    'Porcentaje de población nacida en otro estado' => 18.64,
                    'Porcentaje de población con discapacidad' => 10.17,
                    'Porcentaje de población de 15 y más analfabeta' => 0.00,
                    'Porcentaje de población de 18 y más' => 66.10,
                    'Porcentaje de población de 18 y más postbásicos' => 55.93
                )
            ),
            'Educación' => array(
                '2010' => array(
                    'Grado Promedio de Escolaridad' => 13.90,
                    'Grado Promedio de Escolaridad masculina' => 14.58,
                    'Grado Promedio de Escolaridad femenina' => 13.25
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 59.58,
                    'Población Económicamente Activa masculina' => 53.57,
                    'Población Económicamente Activa femenina' => 46.43,
                    'Población Ocupada' => 100.00,
                    'Población Ocupada masculina' => 53.57,
                    'Población Ocupada femenina' => 46.43,
                    'Población Desocupada' => 0.00,
                    'Derechohabiencia' => 93.22
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 0
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 266,
                    'Primer actividad nombre' => 'Industria Manufacturera',
                    'Primer actividad porcentaje' => 30.45,
                    'Segunda actividad nombre' => 'Comercio Mayoreo',
                    'Segunda actividad porcentaje' => 26.32,
                    'Tercera actividad nombre' => 'Transportes, Correo, Almacenamiento',
                    'Tercera actividad porcentaje' => 11.28,
                    'Cuarta actividad nombre' => 'Comercio Menudeo',
                    'Cuarta actividad porcentaje' => 10.53,
                    'Quinta actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Quinta actividad porcentaje' => 7.89
                )
            )
        );
    } // datos

    /**
     * Mapas
     *
     * @return string
     */
    public function mapas() {
        return array('Límites' => \Configuracion\IBCTorreonConfig::LIMITES);
    } // mapas

} // Clase CiudadIndustrial

?>
