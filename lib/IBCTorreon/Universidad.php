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
 * Clase Universidad
 */
class Universidad extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre      = 'Universidad';
        $this->autor       = 'IMPLAN Torreón Staff';
        $this->fecha       = '2016-09-14 08:25:21';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo     = 'universidad';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Universidad de Torreón.';
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
                'Población total' => '287',
                'Porcentaje de población masculina' => '47.39',
                'Porcentaje de población femenina' => '52.61',
                'Porcentaje de población de 0 a 14 años' => '32.40',
                'Porcentaje de población de 15 a 64 años' => '63.41',
                'Porcentaje de población de 65 y más años' => '2.09',
                'Porcentaje de población no especificada' => '2.10',
                'Fecundidad promedio' => '2.09',
                'Porcentaje de población nacida en otro estado' => '17.56',
                'Porcentaje de población con discapacidad' => '0.36'
            ),
            'Educación' => array(
                'Grado Promedio de Escolaridad' => '8.94',
                'Grado Promedio de Escolaridad masculina' => '9.08',
                'Grado Promedio de Escolaridad femenina' => '8.84'
            ),
            'Características Económicas' => array(
                'Población Económicamente Activa' => '46.26',
                'Población Económicamente Activa masculina' => '70.00',
                'Población Económicamente Activa femenina' => '30.00',
                'Población Ocupada' => '93.35',
                'Población Ocupada masculina' => '68.97',
                'Población Ocupada femenina' => '31.03',
                'Población Desocupada' => '6.65',
                'Derechohabiencia' => '55.05'
            ),
            'Viviendas' => array(
                'Hogares' => '72',
                'Hogares Jefatura masculina' => '50.00',
                'Hogares Jefatura femenina' => '50.00',
                'Ocupación por Vivienda' => '3.99',
                'Viviendas con Electricidad' => '100.00',
                'Viviendas con Agua' => '97.22',
                'Viviendas con Drenaje' => '95.83',
                'Viviendas con Televisión' => '97.22',
                'Viviendas con Automóvil' => '48.09',
                'Viviendas con Computadora' => '17.82',
                'Viviendas con Celular' => '68.58',
                'Viviendas con Internet' => '9.19'
            ),
            'Unidades Económicas' => array(
                'Total Actividades Económicas' => '11',
                'Primer actividad nombre' => 'Comercio Menudeo',
                'Primer actividad porcentaje' => '27.27',
                'Segunda actividad nombre' => 'Preparación de Alimentos y Bebidas',
                'Segunda actividad porcentaje' => '27.27',
                'Tercera actividad nombre' => 'Otros servicios, excepto Gobierno',
                'Tercera actividad porcentaje' => '18.18',
                'Cuarta actividad nombre' => 'Industria Manufacturera',
                'Cuarta actividad porcentaje' => '9.09',
                'Quinta actividad nombre' => 'Comercio Mayoreo',
                'Quinta actividad porcentaje' => '9.09'
            )
        );
    } // datos

} // Clase Universidad

?>
