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
 * Clase VillasUniversidad2aEtapa
 */
class VillasUniversidad2aEtapa extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre          = 'Villas Universidad 2A. Etapa';
        $this->autor           = 'IMPLAN Torreón Staff';
        $this->fecha           = '2016-09-14 08:25:21';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo         = 'villas-universidad-2a-etapa';
        $this->imagen          = '../imagenes/imagen.jpg';
        $this->imagen_previa   = '../imagenes/imagen-previa.jpg';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion     = 'Colonia Villas Universidad 2A. Etapa de IBC Torreón.';
        $this->claves          = 'IMPLAN, Torreon, Desagregación';
        // El directorio en la raíz donde se guardará el archivo HTML
        $this->directorio      = 'ibc-torreon';
        // Opción del menú Navegación a poner como activa cuando vea esta publicación
        $this->nombre_menu     = 'IBC > IBC Torreón';
        // Para el Organizador
        $this->categorias      = array();
        $this->fuentes         = array();
        $this->regiones        = array();
    } // constructor

    /**
     * Datos
     *
     * @return array Arreglo asociativo
     */
    public function datos() {
        return array(
            'Demografía' => array(
                'Población total' => '668',
                'Porcentaje de población masculina' => '49.55',
                'Porcentaje de población femenina' => '50.45',
                'Porcentaje de población de 0 a 14 años' => '33.23',
                'Porcentaje de población de 15 a 64 años' => '64.52',
                'Porcentaje de población de 65 y más años' => '2.25',
                'Porcentaje de población no especificada' => '0.00',
                'Fecundidad promedio' => '1.54',
                'Porcentaje de población nacida en otro estado' => '19.31',
                'Porcentaje de población con discapacidad' => '1.69'
            ),
            'Educación' => array(
                'Grado Promedio de Escolaridad' => '12.54',
                'Grado Promedio de Escolaridad masculina' => '12.83',
                'Grado Promedio de Escolaridad femenina' => '12.26'
            ),
            'Características Económicas' => array(
                'Población Económicamente Activa' => '66.23',
                'Población Económicamente Activa masculina' => '61.44',
                'Población Económicamente Activa femenina' => '38.56',
                'Población Ocupada' => '95.22',
                'Población Ocupada masculina' => '60.96',
                'Población Ocupada femenina' => '39.04',
                'Población Desocupada' => '4.78',
                'Derechohabiencia' => '83.83'
            ),
            'Viviendas' => array(
                'Hogares' => '190',
                'Hogares Jefatura masculina' => '86.32',
                'Hogares Jefatura femenina' => '13.68',
                'Ocupación por Vivienda' => '3.52',
                'Viviendas con Electricidad' => '100.00',
                'Viviendas con Agua' => '100.00',
                'Viviendas con Drenaje' => '100.00',
                'Viviendas con Televisión' => '98.42',
                'Viviendas con Automóvil' => '80.53',
                'Viviendas con Computadora' => '52.11',
                'Viviendas con Celular' => '92.11',
                'Viviendas con Internet' => '41.53'
            ),
            'Unidades Económicas' => array(
                'Total Actividades Económicas' => '14',
                'Primer actividad nombre' => 'Comercio Menudeo',
                'Primer actividad porcentaje' => '64.29',
                'Segunda actividad nombre' => 'Salud',
                'Segunda actividad porcentaje' => '14.29',
                'Tercera actividad nombre' => 'Preparación de Alimentos y Bebidas',
                'Tercera actividad porcentaje' => '14.29',
                'Cuarta actividad nombre' => 'Educativos',
                'Cuarta actividad porcentaje' => '7.14'
            )
        );
    } // datos

} // Clase VillasUniversidad2aEtapa

?>
