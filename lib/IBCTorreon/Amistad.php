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
 * Clase Amistad
 */
class Amistad extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre      = 'Amistad';
        $this->autor       = 'IMPLAN Torreón Staff';
        $this->fecha       = '2016-11-23 16:15:07';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo     = 'amistad';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Amistad de Torreón.';
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
                    'Población total' => 4466,
                    'Porcentaje de población masculina' => 49.31,
                    'Porcentaje de población femenina' => 50.69,
                    'Porcentaje de población de 0 a 14 años' => 34.62,
                    'Porcentaje de población de 15 a 64 años' => 62.32,
                    'Porcentaje de población de 65 y más años' => 1.39,
                    'Porcentaje de población no especificada' => 1.67,
                    'Fecundidad promedio' => 1.68,
                    'Porcentaje de población nacida en otro estado' => 18.08,
                    'Porcentaje de población con discapacidad' => 3.80,
                    'Porcentaje de población de 15 y más analfabeta' => 0.22,
                    'Porcentaje de población de 18 y más' => 59.54,
                    'Porcentaje de población de 18 y más postbásicos' => 36.79
                )
            ),
            'Educación' => array(
                '2010' => array(
                    'Grado Promedio de Escolaridad' => 11.47,
                    'Grado Promedio de Escolaridad masculina' => 11.66,
                    'Grado Promedio de Escolaridad femenina' => 11.30
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 60.75,
                    'Población Económicamente Activa masculina' => 60.82,
                    'Población Económicamente Activa femenina' => 39.18,
                    'Población Ocupada' => 93.09,
                    'Población Ocupada masculina' => 60.72,
                    'Población Ocupada femenina' => 39.28,
                    'Población Desocupada' => 6.91,
                    'Derechohabiencia' => 78.55
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 1268,
                    'Hogares Jefatura masculina' => 78.56,
                    'Hogares Jefatura femenina' => 21.44,
                    'Ocupación por Vivienda' => 3.52,
                    'Viviendas con Electricidad' => 99.87,
                    'Viviendas con Agua' => 99.87,
                    'Viviendas con Drenaje' => 99.95,
                    'Viviendas con Televisión' => 99.48,
                    'Viviendas con Automóvil' => 57.38,
                    'Viviendas con Computadora' => 40.94,
                    'Viviendas con Celular' => 89.02,
                    'Viviendas con Internet' => 26.45
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 57,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 50.88,
                    'Segunda actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Segunda actividad porcentaje' => 14.04,
                    'Tercera actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Tercera actividad porcentaje' => 14.04,
                    'Cuarta actividad nombre' => 'Industria Manufacturera',
                    'Cuarta actividad porcentaje' => 5.26,
                    'Quinta actividad nombre' => 'Manejo de Residuos',
                    'Quinta actividad porcentaje' => 3.51
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
            'Centro latitud'  => 25.5528973500356,
            'Centro longitud' => -103.361215564305
        );
    } // mapas

} // Clase Amistad

?>
