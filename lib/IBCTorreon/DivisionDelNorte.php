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
 * Clase DivisionDelNorte
 */
class DivisionDelNorte extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre      = 'Division Del Norte';
        $this->autor       = 'IMPLAN Torreón Staff';
        $this->fecha       = '2016-11-15 08:36:35';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo     = 'division-del-norte';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Division Del Norte de Torreón.';
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
                    'Población total' => 4773,
                    'Porcentaje de población masculina' => 49.55,
                    'Porcentaje de población femenina' => 50.45,
                    'Porcentaje de población de 0 a 14 años' => 30.78,
                    'Porcentaje de población de 15 a 64 años' => 64.25,
                    'Porcentaje de población de 65 y más años' => 4.91,
                    'Porcentaje de población no especificada' => 0.06,
                    'Fecundidad promedio' => 2.64,
                    'Porcentaje de población nacida en otro estado' => 19.46,
                    'Porcentaje de población con discapacidad' => 6.21,
                    'Porcentaje de población de 15 y más analfabeta' => 3.20,
                    'Porcentaje de población de 18 y más' => 62.26,
                    'Porcentaje de población de 18 y más postbásicos' => 13.95
                )
            ),
            'Educación' => array(
                '2010' => array(
                    'Grado Promedio de Escolaridad' => 7.72,
                    'Grado Promedio de Escolaridad masculina' => 7.82,
                    'Grado Promedio de Escolaridad femenina' => 7.62
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 55.99,
                    'Población Económicamente Activa masculina' => 69.30,
                    'Población Económicamente Activa femenina' => 30.70,
                    'Población Ocupada' => 84.36,
                    'Población Ocupada masculina' => 67.11,
                    'Población Ocupada femenina' => 32.89,
                    'Población Desocupada' => 15.64,
                    'Derechohabiencia' => 65.49
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 1122,
                    'Hogares Jefatura masculina' => 72.74,
                    'Hogares Jefatura femenina' => 27.26,
                    'Ocupación por Vivienda' => 4.25,
                    'Viviendas con Electricidad' => 99.73,
                    'Viviendas con Agua' => 99.28,
                    'Viviendas con Drenaje' => 98.57,
                    'Viviendas con Televisión' => 97.77,
                    'Viviendas con Automóvil' => 37.91,
                    'Viviendas con Computadora' => 20.37,
                    'Viviendas con Celular' => 63.57,
                    'Viviendas con Internet' => 13.62
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 110,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 40.00,
                    'Segunda actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Segunda actividad porcentaje' => 29.09,
                    'Tercera actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Tercera actividad porcentaje' => 10.91,
                    'Cuarta actividad nombre' => 'Industria Manufacturera',
                    'Cuarta actividad porcentaje' => 5.45,
                    'Quinta actividad nombre' => 'Financieros y Seguros',
                    'Quinta actividad porcentaje' => 3.64
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

} // Clase DivisionDelNorte

?>
