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
 * Clase VillasDelValle
 */
class VillasDelValle extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre          = 'Villas Del Valle';
        $this->autor           = 'IMPLAN Torreón Staff';
        $this->fecha           = '2016-09-14 08:25:21';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo         = 'villas-del-valle';
        $this->imagen          = '../imagenes/imagen.jpg';
        $this->imagen_previa   = '../imagenes/imagen-previa.jpg';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion     = 'Colonia Villas Del Valle de IBC Torreón.';
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
                'Población total' => '303',
                'Porcentaje de población masculina' => '50.17',
                'Porcentaje de población femenina' => '49.83',
                'Porcentaje de población de 0 a 14 años' => '28.05',
                'Porcentaje de población de 15 a 64 años' => '67.33',
                'Porcentaje de población de 65 y más años' => '4.62',
                'Porcentaje de población no especificada' => '0.00',
                'Fecundidad promedio' => '1.38',
                'Porcentaje de población nacida en otro estado' => '17.16',
                'Porcentaje de población con discapacidad' => '5.39'
            ),
            'Educación' => array(
                'Grado Promedio de Escolaridad' => '13.07',
                'Grado Promedio de Escolaridad masculina' => '13.43',
                'Grado Promedio de Escolaridad femenina' => '12.75'
            ),
            'Características Económicas' => array(
                'Población Económicamente Activa' => '58.40',
                'Población Económicamente Activa masculina' => '56.12',
                'Población Económicamente Activa femenina' => '43.88',
                'Población Ocupada' => '96.27',
                'Población Ocupada masculina' => '55.97',
                'Población Ocupada femenina' => '44.03',
                'Población Desocupada' => '3.73',
                'Derechohabiencia' => '86.80'
            ),
            'Viviendas' => array(
                'Hogares' => '92',
                'Hogares Jefatura masculina' => '77.17',
                'Hogares Jefatura femenina' => '22.83',
                'Ocupación por Vivienda' => '3.29',
                'Viviendas con Electricidad' => '100.00',
                'Viviendas con Agua' => '100.00',
                'Viviendas con Drenaje' => '100.00',
                'Viviendas con Televisión' => '100.00',
                'Viviendas con Automóvil' => '79.35',
                'Viviendas con Computadora' => '59.92',
                'Viviendas con Celular' => '86.96',
                'Viviendas con Internet' => '48.36'
            ),
            'Unidades Económicas' => array(
                'Total Actividades Económicas' => '6',
                'Primer actividad nombre' => 'Comercio Menudeo',
                'Primer actividad porcentaje' => '50.00',
                'Segunda actividad nombre' => 'Industria Manufacturera',
                'Segunda actividad porcentaje' => '16.67',
                'Tercera actividad nombre' => 'Comercio Mayoreo',
                'Tercera actividad porcentaje' => '16.67',
                'Cuarta actividad nombre' => 'Preparación de Alimentos y Bebidas',
                'Cuarta actividad porcentaje' => '16.67'
            )
        );
    } // datos

} // Clase VillasDelValle

?>
