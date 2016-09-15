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
 * Clase CalerasMartinez
 */
class CalerasMartinez extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre      = 'Caleras Martinez';
        $this->autor       = 'IMPLAN Torreón Staff';
        $this->fecha       = '2016-09-14 08:25:21';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo     = 'caleras-martinez';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Caleras Martinez de Torreón.';
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
                'Población total' => '840',
                'Porcentaje de población masculina' => '50.30',
                'Porcentaje de población femenina' => '49.70',
                'Porcentaje de población de 0 a 14 años' => '27.18',
                'Porcentaje de población de 15 a 64 años' => '64.48',
                'Porcentaje de población de 65 y más años' => '8.34',
                'Porcentaje de población no especificada' => '0.00',
                'Fecundidad promedio' => '2.68',
                'Porcentaje de población nacida en otro estado' => '17.98',
                'Porcentaje de población con discapacidad' => '10.33'
            ),
            'Educación' => array(
                'Grado Promedio de Escolaridad' => '7.28',
                'Grado Promedio de Escolaridad masculina' => '7.39',
                'Grado Promedio de Escolaridad femenina' => '7.15'
            ),
            'Características Económicas' => array(
                'Población Económicamente Activa' => '47.05',
                'Población Económicamente Activa masculina' => '79.41',
                'Población Económicamente Activa femenina' => '20.59',
                'Población Ocupada' => '87.10',
                'Población Ocupada masculina' => '77.45',
                'Población Ocupada femenina' => '22.55',
                'Población Desocupada' => '12.90',
                'Derechohabiencia' => '57.63'
            ),
            'Viviendas' => array(
                'Hogares' => '214',
                'Hogares Jefatura masculina' => '71.96',
                'Hogares Jefatura femenina' => '28.04',
                'Ocupación por Vivienda' => '3.93',
                'Viviendas con Electricidad' => '99.18',
                'Viviendas con Agua' => '91.23',
                'Viviendas con Drenaje' => '99.18',
                'Viviendas con Televisión' => '96.84',
                'Viviendas con Automóvil' => '28.28',
                'Viviendas con Computadora' => '13.36',
                'Viviendas con Celular' => '59.13',
                'Viviendas con Internet' => '3.74'
            ),
            'Unidades Económicas' => array(
                'Total Actividades Económicas' => '11',
                'Primer actividad nombre' => 'Comercio Menudeo',
                'Primer actividad porcentaje' => '81.82',
                'Segunda actividad nombre' => 'Educativos',
                'Segunda actividad porcentaje' => '18.18'
            )
        );
    } // datos

} // Clase CalerasMartinez

?>
