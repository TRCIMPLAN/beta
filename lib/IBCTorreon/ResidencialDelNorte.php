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
 * Clase ResidencialDelNorte
 */
class ResidencialDelNorte extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre      = 'Residencial del Norte';
        $this->autor       = 'IMPLAN Torreón Staff';
        $this->fecha       = '2016-11-16 15:38:41';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo     = 'residencial-del-norte';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Residencial del Norte de Torreón.';
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
                    'Población total' => 8476,
                    'Porcentaje de población masculina' => 48.35,
                    'Porcentaje de población femenina' => 51.65,
                    'Porcentaje de población de 0 a 14 años' => 28.29,
                    'Porcentaje de población de 15 a 64 años' => 68.38,
                    'Porcentaje de población de 65 y más años' => 2.24,
                    'Porcentaje de población no especificada' => 1.09,
                    'Fecundidad promedio' => 1.82,
                    'Porcentaje de población nacida en otro estado' => 15.69,
                    'Porcentaje de población con discapacidad' => 1.88,
                    'Porcentaje de población de 15 y más analfabeta' => 0.37,
                    'Porcentaje de población de 18 y más' => 62.84,
                    'Porcentaje de población de 18 y más postbásicos' => 36.85
                )
            ),
            'Educación' => array(
                '2010' => array(
                    'Grado Promedio de Escolaridad' => 10.79,
                    'Grado Promedio de Escolaridad masculina' => 10.89,
                    'Grado Promedio de Escolaridad femenina' => 10.71
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 54.88,
                    'Población Económicamente Activa masculina' => 62.44,
                    'Población Económicamente Activa femenina' => 37.56,
                    'Población Ocupada' => 94.41,
                    'Población Ocupada masculina' => 61.04,
                    'Población Ocupada femenina' => 38.96,
                    'Población Desocupada' => 5.59,
                    'Derechohabiencia' => 76.46
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 2179,
                    'Hogares Jefatura masculina' => 78.71,
                    'Hogares Jefatura femenina' => 21.29,
                    'Ocupación por Vivienda' => 3.89,
                    'Viviendas con Electricidad' => 99.50,
                    'Viviendas con Agua' => 99.17,
                    'Viviendas con Drenaje' => 99.08,
                    'Viviendas con Televisión' => 99.17,
                    'Viviendas con Automóvil' => 58.60,
                    'Viviendas con Computadora' => 45.62,
                    'Viviendas con Celular' => 84.95,
                    'Viviendas con Internet' => 31.28
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 134,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 48.51,
                    'Segunda actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Segunda actividad porcentaje' => 20.15,
                    'Tercera actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Tercera actividad porcentaje' => 11.19,
                    'Cuarta actividad nombre' => 'Industria Manufacturera',
                    'Cuarta actividad porcentaje' => 7.46,
                    'Quinta actividad nombre' => 'Educativos',
                    'Quinta actividad porcentaje' => 3.73
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

} // Clase ResidencialDelNorte

?>
