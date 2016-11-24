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
 * Clase VillasUniversidadOrienteEtapaIi
 */
class VillasUniversidadOrienteEtapaIi extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre      = 'Villas Universidad Oriente Etapa II';
        $this->autor       = 'IMPLAN Torreón Staff';
        $this->fecha       = '2016-11-23 16:15:12';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo     = 'villas-universidad-oriente-etapa-ii';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Villas Universidad Oriente Etapa II de Torreón.';
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
                    'Población total' => 176,
                    'Porcentaje de población masculina' => 51.14,
                    'Porcentaje de población femenina' => 48.86,
                    'Porcentaje de población de 0 a 14 años' => 32.95,
                    'Porcentaje de población de 15 a 64 años' => 66.48,
                    'Porcentaje de población de 65 y más años' => 0.57,
                    'Porcentaje de población no especificada' => 0.00,
                    'Fecundidad promedio' => 1.71,
                    'Porcentaje de población nacida en otro estado' => 15.91,
                    'Porcentaje de población con discapacidad' => 2.81,
                    'Porcentaje de población de 15 y más analfabeta' => 0.27,
                    'Porcentaje de población de 18 y más' => 62.50,
                    'Porcentaje de población de 18 y más postbásicos' => 44.89
                )
            ),
            'Educación' => array(
                '2010' => array(
                    'Grado Promedio de Escolaridad' => 12.15,
                    'Grado Promedio de Escolaridad masculina' => 12.28,
                    'Grado Promedio de Escolaridad femenina' => 12.02
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 68.60,
                    'Población Económicamente Activa masculina' => 68.67,
                    'Población Económicamente Activa femenina' => 31.33,
                    'Población Ocupada' => 85.03,
                    'Población Ocupada masculina' => 68.06,
                    'Población Ocupada femenina' => 31.94,
                    'Población Desocupada' => 14.97,
                    'Derechohabiencia' => 90.34
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 53,
                    'Hogares Jefatura masculina' => 88.68,
                    'Hogares Jefatura femenina' => 11.32,
                    'Ocupación por Vivienda' => 3.32,
                    'Viviendas con Electricidad' => 98.11,
                    'Viviendas con Agua' => 98.11,
                    'Viviendas con Drenaje' => 98.11,
                    'Viviendas con Televisión' => 98.11,
                    'Viviendas con Automóvil' => 67.92,
                    'Viviendas con Computadora' => 30.19,
                    'Viviendas con Celular' => 98.11,
                    'Viviendas con Internet' => 27.92
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 11,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 63.64,
                    'Segunda actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Segunda actividad porcentaje' => 18.18,
                    'Tercera actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Tercera actividad porcentaje' => 18.18
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
            'Centro latitud'  => 25.5475273956684,
            'Centro longitud' => -103.317769477547
        );
    } // mapas

} // Clase VillasUniversidadOrienteEtapaIi

?>
