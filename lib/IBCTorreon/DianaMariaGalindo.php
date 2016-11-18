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
 * Clase DianaMariaGalindo
 */
class DianaMariaGalindo extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre      = 'Diana María Galindo';
        $this->autor       = 'IMPLAN Torreón Staff';
        $this->fecha       = '2016-11-18 13:33:45';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo     = 'diana-maria-galindo';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Diana María Galindo de Torreón.';
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
                    'Población total' => 399,
                    'Porcentaje de población masculina' => 51.01,
                    'Porcentaje de población femenina' => 48.99,
                    'Porcentaje de población de 0 a 14 años' => 34.51,
                    'Porcentaje de población de 15 a 64 años' => 60.82,
                    'Porcentaje de población de 65 y más años' => 3.09,
                    'Porcentaje de población no especificada' => 1.58,
                    'Fecundidad promedio' => 2.59,
                    'Porcentaje de población nacida en otro estado' => 21.43,
                    'Porcentaje de población con discapacidad' => 1.82,
                    'Porcentaje de población de 15 y más analfabeta' => 5.97,
                    'Porcentaje de población de 18 y más' => 57.45,
                    'Porcentaje de población de 18 y más postbásicos' => 8.02
                )
            ),
            'Educación' => array(
                '2010' => array(
                    'Grado Promedio de Escolaridad' => 6.89,
                    'Grado Promedio de Escolaridad masculina' => 6.97,
                    'Grado Promedio de Escolaridad femenina' => 6.80
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 60.22,
                    'Población Económicamente Activa masculina' => 72.54,
                    'Población Económicamente Activa femenina' => 27.46,
                    'Población Ocupada' => 91.49,
                    'Población Ocupada masculina' => 72.82,
                    'Población Ocupada femenina' => 27.18,
                    'Población Desocupada' => 8.51,
                    'Derechohabiencia' => 58.39
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 90,
                    'Hogares Jefatura masculina' => 84.45,
                    'Hogares Jefatura femenina' => 15.55,
                    'Ocupación por Vivienda' => 4.43,
                    'Viviendas con Electricidad' => 100.00,
                    'Viviendas con Agua' => 99.82,
                    'Viviendas con Drenaje' => 95.34,
                    'Viviendas con Televisión' => 96.45,
                    'Viviendas con Automóvil' => 18.07,
                    'Viviendas con Computadora' => 2.19,
                    'Viviendas con Celular' => 55.74,
                    'Viviendas con Internet' => 0.00
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 3,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 100.00
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

} // Clase DianaMariaGalindo

?>
