<?php
/**
 * TrcIMPLAN Sitio Web - IBC Torreón Villas Universidad Oriente Etapa III
 *
 * Copyright (C) 2017 Guillermo Valdés Lozano
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
 * @package TrcIMPLANSitioWeb
 */

namespace IBCTorreon;

/**
 * Clase VillasUniversidadOrienteEtapaIii
 */
class VillasUniversidadOrienteEtapaIii extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre      = 'Villas Universidad Oriente Etapa III';
        $this->autor       = 'Dirección de Investigación Estratégica';
        $this->fecha       = '2017-01-18 14:53:48';
        // El nombre del archivo a crear
        $this->archivo     = 'villas-universidad-oriente-etapa-iii';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Villas Universidad Oriente Etapa III en Torreón, Coahuila de Zaragoza, México.';
        $this->claves      = 'IMPLAN, Torreon, Desagregación, Colonia';
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
                    'Población total' => 310,
                    'Porcentaje de población masculina' => 49.33,
                    'Porcentaje de población femenina' => 50.67,
                    'Porcentaje de población de 0 a 14 años' => 38.19,
                    'Porcentaje de población de 15 a 64 años' => 60.39,
                    'Porcentaje de población de 65 y más años' => 0.41,
                    'Porcentaje de población no especificada' => 1.01,
                    'Fecundidad promedio' => 2.02,
                    'Porcentaje de población con discapacidad' => 3.11
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 57.89,
                    'Población Económicamente Activa masculina' => 62.49,
                    'Población Económicamente Activa femenina' => 37.51,
                    'Población Ocupada' => 84.23,
                    'Población Ocupada masculina' => 64.40,
                    'Población Ocupada femenina' => 35.60,
                    'Población Desocupada' => 15.77,
                    'Derechohabiencia' => 69.42
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 82,
                    'Ocupación por Vivienda' => 3.78,
                    'Viviendas con Electricidad' => 100.00,
                    'Viviendas con Agua' => 100.00,
                    'Viviendas con Drenaje' => 100.00,
                    'Viviendas con Televisión' => 97.85,
                    'Viviendas con Automóvil' => 45.74,
                    'Viviendas con Computadora' => 28.11
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 25,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 40.00,
                    'Segunda actividad nombre' => 'Educativos',
                    'Segunda actividad porcentaje' => 20.00,
                    'Tercera actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Tercera actividad porcentaje' => 20.00,
                    'Cuarta actividad nombre' => 'Industria Manufacturera',
                    'Cuarta actividad porcentaje' => 8.00,
                    'Quinta actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Quinta actividad porcentaje' => 8.00
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
            'Centro latitud'  => 25.5491028295451,
            'Centro longitud' => -103.314907484375
        );
    } // mapas

} // Clase VillasUniversidadOrienteEtapaIii

?>
