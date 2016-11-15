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
 * Clase ParqueIndustrialLaAmistad
 */
class ParqueIndustrialLaAmistad extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre      = 'Parque Industrial La Amistad';
        $this->autor       = 'IMPLAN Torreón Staff';
        $this->fecha       = '2016-11-15 08:36:35';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo     = 'parque-industrial-la-amistad';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Parque Industrial La Amistad de Torreón.';
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
                    'Población total' => 46,
                    'Porcentaje de población masculina' => 56.52,
                    'Porcentaje de población femenina' => 43.48,
                    'Porcentaje de población de 0 a 14 años' => 26.09,
                    'Porcentaje de población de 15 a 64 años' => 73.91,
                    'Porcentaje de población de 65 y más años' => 0.00,
                    'Porcentaje de población no especificada' => 0.00,
                    'Fecundidad promedio' => 1.83,
                    'Porcentaje de población nacida en otro estado' => 17.39,
                    'Porcentaje de población con discapacidad' => 0.00,
                    'Porcentaje de población de 15 y más analfabeta' => 0.00,
                    'Porcentaje de población de 18 y más' => 65.22,
                    'Porcentaje de población de 18 y más postbásicos' => 41.30
                )
            ),
            'Educación' => array(
                '2010' => array(
                    'Grado Promedio de Escolaridad' => 11.76,
                    'Grado Promedio de Escolaridad masculina' => 12.39,
                    'Grado Promedio de Escolaridad femenina' => 11.06
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 69.44,
                    'Población Económicamente Activa masculina' => 64.00,
                    'Población Económicamente Activa femenina' => 36.00,
                    'Población Ocupada' => 100.00,
                    'Población Ocupada masculina' => 64.00,
                    'Población Ocupada femenina' => 36.00,
                    'Población Desocupada' => 0.00,
                    'Derechohabiencia' => 82.61
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 12,
                    'Hogares Jefatura masculina' => 75.00,
                    'Hogares Jefatura femenina' => 25.00,
                    'Ocupación por Vivienda' => 3.83,
                    'Viviendas con Electricidad' => 100.00,
                    'Viviendas con Agua' => 100.00,
                    'Viviendas con Drenaje' => 100.00,
                    'Viviendas con Televisión' => 100.00,
                    'Viviendas con Automóvil' => 75.00,
                    'Viviendas con Computadora' => 25.00,
                    'Viviendas con Celular' => 66.67,
                    'Viviendas con Internet' => 32.66
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 6,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 33.33,
                    'Segunda actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Segunda actividad porcentaje' => 16.67,
                    'Tercera actividad nombre' => 'Esparcimiento, Culturales, Deportivos',
                    'Tercera actividad porcentaje' => 16.67,
                    'Cuarta actividad nombre' => 'Comercio Mayoreo',
                    'Cuarta actividad porcentaje' => 16.67,
                    'Quinta actividad nombre' => 'Industria Manufacturera',
                    'Quinta actividad porcentaje' => 16.67
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

} // Clase ParqueIndustrialLaAmistad

?>
