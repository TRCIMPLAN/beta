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
 * Clase VillasDelSol
 */
class VillasDelSol extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre      = 'Villas del Sol';
        $this->autor       = 'IMPLAN Torreón Staff';
        $this->fecha       = '2016-11-23 16:15:12';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo     = 'villas-del-sol';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Villas del Sol de Torreón.';
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
                    'Población total' => 1315,
                    'Porcentaje de población masculina' => 49.28,
                    'Porcentaje de población femenina' => 50.72,
                    'Porcentaje de población de 0 a 14 años' => 30.57,
                    'Porcentaje de población de 15 a 64 años' => 66.01,
                    'Porcentaje de población de 65 y más años' => 2.05,
                    'Porcentaje de población no especificada' => 1.37,
                    'Fecundidad promedio' => 1.44,
                    'Porcentaje de población nacida en otro estado' => 22.81,
                    'Porcentaje de población con discapacidad' => 0.80,
                    'Porcentaje de población de 15 y más analfabeta' => 0.00,
                    'Porcentaje de población de 18 y más' => 63.88,
                    'Porcentaje de población de 18 y más postbásicos' => 58.86
                )
            ),
            'Educación' => array(
                '2010' => array(
                    'Grado Promedio de Escolaridad' => 14.61,
                    'Grado Promedio de Escolaridad masculina' => 14.96,
                    'Grado Promedio de Escolaridad femenina' => 14.29
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 64.16,
                    'Población Económicamente Activa masculina' => 59.23,
                    'Población Económicamente Activa femenina' => 40.77,
                    'Población Ocupada' => 95.45,
                    'Población Ocupada masculina' => 59.12,
                    'Población Ocupada femenina' => 40.88,
                    'Población Desocupada' => 4.55,
                    'Derechohabiencia' => 88.29
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 384,
                    'Hogares Jefatura masculina' => 86.72,
                    'Hogares Jefatura femenina' => 13.28,
                    'Ocupación por Vivienda' => 3.42,
                    'Viviendas con Electricidad' => 100.00,
                    'Viviendas con Agua' => 99.74,
                    'Viviendas con Drenaje' => 100.00,
                    'Viviendas con Televisión' => 99.74,
                    'Viviendas con Automóvil' => 93.70,
                    'Viviendas con Computadora' => 75.63,
                    'Viviendas con Celular' => 98.18,
                    'Viviendas con Internet' => 53.70
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 8,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 62.50,
                    'Segunda actividad nombre' => 'Transportes, Correo, Almacenamiento',
                    'Segunda actividad porcentaje' => 25.00,
                    'Tercera actividad nombre' => 'Inmobiliarios',
                    'Tercera actividad porcentaje' => 12.50
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
            'Centro latitud'  => 25.5311546458007,
            'Centro longitud' => -103.316881728516
        );
    } // mapas

} // Clase VillasDelSol

?>
