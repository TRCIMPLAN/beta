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
 * Clase NuevaCorona
 */
class NuevaCorona extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre      = 'Nueva Corona';
        $this->autor       = 'IMPLAN Torreón Staff';
        $this->fecha       = '2016-11-15 08:36:35';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo     = 'nueva-corona';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Nueva Corona de Torreón.';
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
                    'Población total' => 240,
                    'Porcentaje de población masculina' => 45.83,
                    'Porcentaje de población femenina' => 54.17,
                    'Porcentaje de población de 0 a 14 años' => 33.33,
                    'Porcentaje de población de 15 a 64 años' => 62.50,
                    'Porcentaje de población de 65 y más años' => 4.17,
                    'Porcentaje de población no especificada' => 0.00,
                    'Fecundidad promedio' => 2.32,
                    'Porcentaje de población nacida en otro estado' => 20.00,
                    'Porcentaje de población con discapacidad' => 5.83,
                    'Porcentaje de población de 15 y más analfabeta' => 1.78,
                    'Porcentaje de población de 18 y más' => 59.58,
                    'Porcentaje de población de 18 y más postbásicos' => 15.00
                )
            ),
            'Educación' => array(
                '2010' => array(
                    'Grado Promedio de Escolaridad' => 8.04,
                    'Grado Promedio de Escolaridad masculina' => 8.07,
                    'Grado Promedio de Escolaridad femenina' => 8.02
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 48.88,
                    'Población Económicamente Activa masculina' => 71.26,
                    'Población Económicamente Activa femenina' => 28.74,
                    'Población Ocupada' => 79.89,
                    'Población Ocupada masculina' => 72.22,
                    'Población Ocupada femenina' => 27.78,
                    'Población Desocupada' => 20.11,
                    'Derechohabiencia' => 73.75
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 53,
                    'Hogares Jefatura masculina' => 71.70,
                    'Hogares Jefatura femenina' => 28.30,
                    'Ocupación por Vivienda' => 4.53,
                    'Viviendas con Electricidad' => 100.00,
                    'Viviendas con Agua' => 100.00,
                    'Viviendas con Drenaje' => 100.00,
                    'Viviendas con Televisión' => 100.00,
                    'Viviendas con Automóvil' => 42.28,
                    'Viviendas con Computadora' => 9.43,
                    'Viviendas con Celular' => 56.60,
                    'Viviendas con Internet' => 5.86
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 5,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 80.00,
                    'Segunda actividad nombre' => 'Industria Manufacturera',
                    'Segunda actividad porcentaje' => 20.00
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

} // Clase NuevaCorona

?>
