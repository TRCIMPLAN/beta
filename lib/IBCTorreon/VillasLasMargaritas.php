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
 * Clase VillasLasMargaritas
 */
class VillasLasMargaritas extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre          = 'Villas Las Margaritas';
        $this->autor           = 'IMPLAN Torreón Staff';
        $this->fecha           = '2016-09-02 12:55:35';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo         = 'villas-las-margaritas';
        $this->imagen          = '../imagenes/imagen.jpg';
        $this->imagen_previa   = '../imagenes/imagen-previa.jpg';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion     = 'Colonia Villas Las Margaritas de IBC Torreón.';
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
                'Población total' => '49',
                'Porcentaje de población masculina' => '20.41',
                'Porcentaje de población femenina' => '79.59',
                'Porcentaje de población de 0 a 14 años' => '6.12',
                'Porcentaje de población de 15 a 64 años' => '34.69',
                'Porcentaje de población de 65 y más años' => '59.18',
                'Porcentaje de población no especificada' => '0.01',
                'Fecundidad promedio' => '1.97',
                'Porcentaje de población nacida en otro estado' => '40.82',
                'Porcentaje de población con discapacidad' => '38.78'
            ),
            'Educación' => array(
                'Grado Promedio de Escolaridad' => '11.40',
                'Grado Promedio de Escolaridad masculina' => '13.13',
                'Grado Promedio de Escolaridad femenina' => '11.03'
            ),
            'Características Económicas' => array(
                'Población Económicamente Activa' => '19.15',
                'Población Económicamente Activa masculina' => '33.33',
                'Población Económicamente Activa femenina' => '66.67',
                'Población Ocupada' => '100.00',
                'Población Ocupada masculina' => '33.33',
                'Población Ocupada femenina' => '66.67',
                'Población Desocupada' => '0.00',
                'Derechohabiencia' => '95.92'
            ),
            'Viviendas' => array(
                'Hogares' => '3',
                'Hogares Jefatura masculina' => '91.94',
                'Hogares Jefatura femenina' => '8.06',
                'Ocupación por Vivienda' => '16.33',
                'Viviendas con Electricidad' => '100.00',
                'Viviendas con Agua' => '100.00',
                'Viviendas con Drenaje' => '100.00',
                'Viviendas con Televisión' => '100.00',
                'Viviendas con Automóvil' => '100.00',
                'Viviendas con Computadora' => '100.00',
                'Viviendas con Celular' => '100.00',
                'Viviendas con Internet' => '100.00'
            ),
            'Unidades Económicas' => array(
                'Total Actividades Económicas' => '1',
                'Primer actividad nombre' => 'Salud',
                'Primer actividad porcentaje' => '100.00',
                'Segunda actividad nombre' => 'Información Medios Masivos',
                'Segunda actividad porcentaje' => '0.00',
                'Tercera actividad nombre' => 'Manejo de Residuos',
                'Tercera actividad porcentaje' => '0.00',
                'Cuarta actividad nombre' => 'Otros servicios, excepto Gobierno',
                'Cuarta actividad porcentaje' => '0.00',
                'Quinta actividad nombre' => 'Profesionales, Científicos, Técnicos',
                'Quinta actividad porcentaje' => '0.00'
            )
        );
    } // datos

} // Clase VillasLasMargaritas

?>
