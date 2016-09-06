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
 * Clase RinconDeLasNoas
 */
class RinconDeLasNoas extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre          = 'Rincon De Las Noas';
        $this->autor           = 'IMPLAN Torreón Staff';
        $this->fecha           = '2016-09-02 12:55:35';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo         = 'rincon-de-las-noas';
        $this->imagen          = '../imagenes/imagen.jpg';
        $this->imagen_previa   = '../imagenes/imagen-previa.jpg';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion     = 'Colonia Rincon De Las Noas de IBC Torreón.';
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
                'Población total' => '903',
                'Porcentaje de población masculina' => '49.94',
                'Porcentaje de población femenina' => '50.06',
                'Porcentaje de población de 0 a 14 años' => '36.54',
                'Porcentaje de población de 15 a 64 años' => '59.91',
                'Porcentaje de población de 65 y más años' => '3.54',
                'Porcentaje de población no especificada' => '0.01',
                'Fecundidad promedio' => '1.80',
                'Porcentaje de población nacida en otro estado' => '13.84',
                'Porcentaje de población con discapacidad' => '2.07'
            ),
            'Educación' => array(
                'Grado Promedio de Escolaridad' => '10.41',
                'Grado Promedio de Escolaridad masculina' => '10.41',
                'Grado Promedio de Escolaridad femenina' => '10.40'
            ),
            'Características Económicas' => array(
                'Población Económicamente Activa' => '56.11',
                'Población Económicamente Activa masculina' => '65.29',
                'Población Económicamente Activa femenina' => '34.71',
                'Población Ocupada' => '96.97',
                'Población Ocupada masculina' => '64.85',
                'Población Ocupada femenina' => '35.15',
                'Población Desocupada' => '3.03',
                'Derechohabiencia' => '76.63'
            ),
            'Viviendas' => array(
                'Hogares' => '231',
                'Hogares Jefatura masculina' => '77.06',
                'Hogares Jefatura femenina' => '22.94',
                'Ocupación por Vivienda' => '3.91',
                'Viviendas con Electricidad' => '100.00',
                'Viviendas con Agua' => '100.00',
                'Viviendas con Drenaje' => '100.00',
                'Viviendas con Televisión' => '98.70',
                'Viviendas con Automóvil' => '61.46',
                'Viviendas con Computadora' => '36.81',
                'Viviendas con Celular' => '87.88',
                'Viviendas con Internet' => '26.60'
            ),
            'Unidades Económicas' => array(
                'Total Actividades Económicas' => '19',
                'Primer actividad nombre' => 'Preparación de Alimentos y Bebidas',
                'Primer actividad porcentaje' => '26.32',
                'Segunda actividad nombre' => 'Otros servicios, excepto Gobierno',
                'Segunda actividad porcentaje' => '21.05',
                'Tercera actividad nombre' => 'Comercio Menudeo',
                'Tercera actividad porcentaje' => '21.05',
                'Cuarta actividad nombre' => 'Salud',
                'Cuarta actividad porcentaje' => '10.53',
                'Quinta actividad nombre' => 'Industria Manufacturera',
                'Quinta actividad porcentaje' => '10.53'
            )
        );
    } // datos

} // Clase RinconDeLasNoas

?>
