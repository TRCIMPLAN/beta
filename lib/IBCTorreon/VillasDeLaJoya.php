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
 * Clase VillasDeLaJoya
 */
class VillasDeLaJoya extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre      = 'Villas De La Joya';
        $this->autor       = 'IMPLAN Torreón Staff';
        $this->fecha       = '2016-09-14 08:25:21';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo     = 'villas-de-la-joya';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Villas De La Joya de Torreón.';
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
                'Población total' => '623',
                'Porcentaje de población masculina' => '47.83',
                'Porcentaje de población femenina' => '52.17',
                'Porcentaje de población de 0 a 14 años' => '38.36',
                'Porcentaje de población de 15 a 64 años' => '60.83',
                'Porcentaje de población de 65 y más años' => '0.80',
                'Porcentaje de población no especificada' => '0.01',
                'Fecundidad promedio' => '1.92',
                'Porcentaje de población nacida en otro estado' => '17.34',
                'Porcentaje de población con discapacidad' => '2.60'
            ),
            'Educación' => array(
                'Grado Promedio de Escolaridad' => '9.16',
                'Grado Promedio de Escolaridad masculina' => '8.78',
                'Grado Promedio de Escolaridad femenina' => '9.01'
            ),
            'Características Económicas' => array(
                'Población Económicamente Activa' => '60.87',
                'Población Económicamente Activa masculina' => '65.08',
                'Población Económicamente Activa femenina' => '34.92',
                'Población Ocupada' => '92.80',
                'Población Ocupada masculina' => '63.83',
                'Población Ocupada femenina' => '36.17',
                'Población Desocupada' => '7.20',
                'Derechohabiencia' => '80.42'
            ),
            'Viviendas' => array(
                'Hogares' => '174',
                'Hogares Jefatura masculina' => '77.01',
                'Hogares Jefatura femenina' => '22.99',
                'Ocupación por Vivienda' => '3.58',
                'Viviendas con Electricidad' => '99.43',
                'Viviendas con Agua' => '100.00',
                'Viviendas con Drenaje' => '100.00',
                'Viviendas con Televisión' => '98.85',
                'Viviendas con Automóvil' => '58.05',
                'Viviendas con Computadora' => '35.32',
                'Viviendas con Celular' => '81.03',
                'Viviendas con Internet' => '19.93'
            ),
            'Unidades Económicas' => array(
                'Total Actividades Económicas' => '7',
                'Primer actividad nombre' => 'Comercio Menudeo',
                'Primer actividad porcentaje' => '57.14',
                'Segunda actividad nombre' => 'Manejo de Residuos',
                'Segunda actividad porcentaje' => '14.29',
                'Tercera actividad nombre' => 'Industria Manufacturera',
                'Tercera actividad porcentaje' => '14.29',
                'Cuarta actividad nombre' => 'Preparación de Alimentos y Bebidas',
                'Cuarta actividad porcentaje' => '14.29'
            )
        );
    } // datos

} // Clase VillasDeLaJoya

?>
