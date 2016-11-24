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
 * Clase CasaBlanca
 */
class CasaBlanca extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre      = 'Casa Blanca';
        $this->autor       = 'IMPLAN Torreón Staff';
        $this->fecha       = '2016-11-23 16:15:07';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo     = 'casa-blanca';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Casa Blanca de Torreón.';
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
                    'Población total' => 742,
                    'Porcentaje de población masculina' => 46.50,
                    'Porcentaje de población femenina' => 53.50,
                    'Porcentaje de población de 0 a 14 años' => 21.97,
                    'Porcentaje de población de 15 a 64 años' => 71.83,
                    'Porcentaje de población de 65 y más años' => 5.80,
                    'Porcentaje de población no especificada' => 0.40,
                    'Fecundidad promedio' => 1.59,
                    'Porcentaje de población nacida en otro estado' => 20.43,
                    'Porcentaje de población con discapacidad' => 1.49,
                    'Porcentaje de población de 15 y más analfabeta' => 0.00,
                    'Porcentaje de población de 18 y más' => 70.75,
                    'Porcentaje de población de 18 y más postbásicos' => 60.92
                )
            ),
            'Educación' => array(
                '2010' => array(
                    'Grado Promedio de Escolaridad' => 14.00,
                    'Grado Promedio de Escolaridad masculina' => 14.48,
                    'Grado Promedio de Escolaridad femenina' => 13.59
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 51.22,
                    'Población Económicamente Activa masculina' => 58.10,
                    'Población Económicamente Activa femenina' => 41.90,
                    'Población Ocupada' => 97.40,
                    'Población Ocupada masculina' => 57.65,
                    'Población Ocupada femenina' => 42.35,
                    'Población Desocupada' => 2.60,
                    'Derechohabiencia' => 83.15
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 204,
                    'Hogares Jefatura masculina' => 79.41,
                    'Hogares Jefatura femenina' => 20.59,
                    'Ocupación por Vivienda' => 3.64,
                    'Viviendas con Electricidad' => 100.00,
                    'Viviendas con Agua' => 100.00,
                    'Viviendas con Drenaje' => 100.00,
                    'Viviendas con Televisión' => 100.00,
                    'Viviendas con Automóvil' => 93.63,
                    'Viviendas con Computadora' => 85.80,
                    'Viviendas con Celular' => 94.12,
                    'Viviendas con Internet' => 81.62
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 17,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 35.29,
                    'Segunda actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Segunda actividad porcentaje' => 17.65,
                    'Tercera actividad nombre' => 'Salud',
                    'Tercera actividad porcentaje' => 11.76,
                    'Cuarta actividad nombre' => 'Educativos',
                    'Cuarta actividad porcentaje' => 11.76,
                    'Quinta actividad nombre' => 'Inmobiliarios',
                    'Quinta actividad porcentaje' => 11.76
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
            'Centro latitud'  => 25.5291569468399,
            'Centro longitud' => -103.399105346855
        );
    } // mapas

} // Clase CasaBlanca

?>
