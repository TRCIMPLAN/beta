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
 * Clase BraulioFernandezAguirre
 */
class BraulioFernandezAguirre extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre      = 'Braulio Fernandez Aguirre';
        $this->autor       = 'IMPLAN Torreón Staff';
        $this->fecha       = '2016-11-15 08:36:35';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo     = 'braulio-fernandez-aguirre';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Braulio Fernandez Aguirre de Torreón.';
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
                    'Población total' => 3194,
                    'Porcentaje de población masculina' => 50.80,
                    'Porcentaje de población femenina' => 49.20,
                    'Porcentaje de población de 0 a 14 años' => 28.90,
                    'Porcentaje de población de 15 a 64 años' => 62.57,
                    'Porcentaje de población de 65 y más años' => 8.13,
                    'Porcentaje de población no especificada' => 0.40,
                    'Fecundidad promedio' => 2.82,
                    'Porcentaje de población nacida en otro estado' => 18.12,
                    'Porcentaje de población con discapacidad' => 13.15,
                    'Porcentaje de población de 15 y más analfabeta' => 2.57,
                    'Porcentaje de población de 18 y más' => 65.49,
                    'Porcentaje de población de 18 y más postbásicos' => 16.19
                )
            ),
            'Educación' => array(
                '2010' => array(
                    'Grado Promedio de Escolaridad' => 7.82,
                    'Grado Promedio de Escolaridad masculina' => 7.97,
                    'Grado Promedio de Escolaridad femenina' => 7.67
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 49.61,
                    'Población Económicamente Activa masculina' => 69.87,
                    'Población Económicamente Activa femenina' => 30.13,
                    'Población Ocupada' => 86.20,
                    'Población Ocupada masculina' => 68.26,
                    'Población Ocupada femenina' => 31.74,
                    'Población Desocupada' => 13.80,
                    'Derechohabiencia' => 69.19
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 813,
                    'Hogares Jefatura masculina' => 72.15,
                    'Hogares Jefatura femenina' => 27.85,
                    'Ocupación por Vivienda' => 3.93,
                    'Viviendas con Electricidad' => 99.97,
                    'Viviendas con Agua' => 99.60,
                    'Viviendas con Drenaje' => 99.73,
                    'Viviendas con Televisión' => 97.38,
                    'Viviendas con Automóvil' => 37.63,
                    'Viviendas con Computadora' => 19.02,
                    'Viviendas con Celular' => 59.84,
                    'Viviendas con Internet' => 8.11
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 104,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 37.50,
                    'Segunda actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Segunda actividad porcentaje' => 18.27,
                    'Tercera actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Tercera actividad porcentaje' => 17.31,
                    'Cuarta actividad nombre' => 'Industria Manufacturera',
                    'Cuarta actividad porcentaje' => 12.50,
                    'Quinta actividad nombre' => 'Educativos',
                    'Quinta actividad porcentaje' => 5.77
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

} // Clase BraulioFernandezAguirre

?>
