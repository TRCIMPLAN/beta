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
 * Clase OscarFloresTapia
 */
class OscarFloresTapia extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre      = 'Oscar Flores Tapia';
        $this->autor       = 'IMPLAN Torreón Staff';
        $this->fecha       = '2016-11-23 16:15:10';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo     = 'oscar-flores-tapia';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Oscar Flores Tapia de Torreón.';
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
                    'Población total' => 360,
                    'Porcentaje de población masculina' => 49.17,
                    'Porcentaje de población femenina' => 50.83,
                    'Porcentaje de población de 0 a 14 años' => 25.05,
                    'Porcentaje de población de 15 a 64 años' => 67.39,
                    'Porcentaje de población de 65 y más años' => 7.20,
                    'Porcentaje de población no especificada' => 0.36,
                    'Fecundidad promedio' => 2.63,
                    'Porcentaje de población nacida en otro estado' => 23.13,
                    'Porcentaje de población con discapacidad' => 13.67,
                    'Porcentaje de población de 15 y más analfabeta' => 1.21,
                    'Porcentaje de población de 18 y más' => 69.72,
                    'Porcentaje de población de 18 y más postbásicos' => 31.94
                )
            ),
            'Educación' => array(
                '2010' => array(
                    'Grado Promedio de Escolaridad' => 9.70,
                    'Grado Promedio de Escolaridad masculina' => 9.64,
                    'Grado Promedio de Escolaridad femenina' => 9.76
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 53.26,
                    'Población Económicamente Activa masculina' => 60.65,
                    'Población Económicamente Activa femenina' => 39.35,
                    'Población Ocupada' => 89.40,
                    'Población Ocupada masculina' => 60.00,
                    'Población Ocupada femenina' => 40.00,
                    'Población Desocupada' => 10.60,
                    'Derechohabiencia' => 70.00
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 93,
                    'Hogares Jefatura masculina' => 76.34,
                    'Hogares Jefatura femenina' => 23.66,
                    'Ocupación por Vivienda' => 3.87,
                    'Viviendas con Electricidad' => 100.00,
                    'Viviendas con Agua' => 98.92,
                    'Viviendas con Drenaje' => 97.85,
                    'Viviendas con Televisión' => 100.00,
                    'Viviendas con Automóvil' => 52.06,
                    'Viviendas con Computadora' => 39.51,
                    'Viviendas con Celular' => 76.34,
                    'Viviendas con Internet' => 22.39
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 27,
                    'Primer actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Primer actividad porcentaje' => 48.15,
                    'Segunda actividad nombre' => 'Comercio Menudeo',
                    'Segunda actividad porcentaje' => 25.93,
                    'Tercera actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Tercera actividad porcentaje' => 11.11,
                    'Cuarta actividad nombre' => 'Industria Manufacturera',
                    'Cuarta actividad porcentaje' => 11.11,
                    'Quinta actividad nombre' => 'Inmobiliarios',
                    'Quinta actividad porcentaje' => 3.70
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
        return array(
            'Límites'         => \Configuracion\IBCTorreonConfig::LIMITES,
            'Centro latitud'  => 25.5352534974747,
            'Centro longitud' => -103.339804685581
        );
    } // mapas

} // Clase OscarFloresTapia

?>
