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
 * Clase LaMina
 */
class LaMina extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre      = 'La Mina';
        $this->autor       = 'IMPLAN Torreón Staff';
        $this->fecha       = '2016-09-14 08:25:21';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo     = 'la-mina';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia La Mina de Torreón.';
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
                'Población total' => '1759',
                'Porcentaje de población masculina' => '51.02',
                'Porcentaje de población femenina' => '48.98',
                'Porcentaje de población de 0 a 14 años' => '19.21',
                'Porcentaje de población de 15 a 64 años' => '70.27',
                'Porcentaje de población de 65 y más años' => '5.53',
                'Porcentaje de población no especificada' => '4.99',
                'Fecundidad promedio' => '2.03',
                'Porcentaje de población nacida en otro estado' => '19.52',
                'Porcentaje de población con discapacidad' => '4.62'
            ),
            'Educación' => array(
                'Grado Promedio de Escolaridad' => '11.08',
                'Grado Promedio de Escolaridad masculina' => '11.52',
                'Grado Promedio de Escolaridad femenina' => '10.64'
            ),
            'Características Económicas' => array(
                'Población Económicamente Activa' => '47.80',
                'Población Económicamente Activa masculina' => '62.28',
                'Población Económicamente Activa femenina' => '37.72',
                'Población Ocupada' => '95.40',
                'Población Ocupada masculina' => '62.60',
                'Población Ocupada femenina' => '37.40',
                'Población Desocupada' => '4.60',
                'Derechohabiencia' => '73.06'
            ),
            'Viviendas' => array(
                'Hogares' => '438',
                'Hogares Jefatura masculina' => '79.90',
                'Hogares Jefatura femenina' => '20.10',
                'Ocupación por Vivienda' => '4.02',
                'Viviendas con Electricidad' => '100.00',
                'Viviendas con Agua' => '100.00',
                'Viviendas con Drenaje' => '100.00',
                'Viviendas con Televisión' => '97.20',
                'Viviendas con Automóvil' => '63.71',
                'Viviendas con Computadora' => '55.59',
                'Viviendas con Celular' => '79.73',
                'Viviendas con Internet' => '43.09'
            ),
            'Unidades Económicas' => array(
                'Total Actividades Económicas' => '52',
                'Primer actividad nombre' => 'Comercio Menudeo',
                'Primer actividad porcentaje' => '32.69',
                'Segunda actividad nombre' => 'Preparación de Alimentos y Bebidas',
                'Segunda actividad porcentaje' => '19.23',
                'Tercera actividad nombre' => 'Otros servicios, excepto Gobierno',
                'Tercera actividad porcentaje' => '13.46',
                'Cuarta actividad nombre' => 'Educativos',
                'Cuarta actividad porcentaje' => '9.62',
                'Quinta actividad nombre' => 'Industria Manufacturera',
                'Quinta actividad porcentaje' => '7.69'
            )
        );
    } // datos

} // Clase LaMina

?>
