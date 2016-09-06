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
        $this->nombre          = 'Villas Del Sol';
        $this->autor           = 'IMPLAN Torreón Staff';
        $this->fecha           = '2016-09-02 12:55:35';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo         = 'villas-del-sol';
        $this->imagen          = '../imagenes/imagen.jpg';
        $this->imagen_previa   = '../imagenes/imagen-previa.jpg';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion     = 'Colonia Villas Del Sol de IBC Torreón.';
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
                'Población total' => '1121',
                'Porcentaje de población masculina' => '49.33',
                'Porcentaje de población femenina' => '50.67',
                'Porcentaje de población de 0 a 14 años' => '29.97',
                'Porcentaje de población de 15 a 64 años' => '66.64',
                'Porcentaje de población de 65 y más años' => '2.05',
                'Porcentaje de población no especificada' => '1.34',
                'Fecundidad promedio' => '1.45',
                'Porcentaje de población nacida en otro estado' => '21.86',
                'Porcentaje de población con discapacidad' => '0.63'
            ),
            'Educación' => array(
                'Grado Promedio de Escolaridad' => '14.61',
                'Grado Promedio de Escolaridad masculina' => '14.92',
                'Grado Promedio de Escolaridad femenina' => '14.33'
            ),
            'Características Económicas' => array(
                'Población Económicamente Activa' => '62.61',
                'Población Económicamente Activa masculina' => '58.73',
                'Población Económicamente Activa femenina' => '41.27',
                'Población Ocupada' => '95.23',
                'Población Ocupada masculina' => '58.84',
                'Población Ocupada femenina' => '41.16',
                'Población Desocupada' => '4.77',
                'Derechohabiencia' => '88.40'
            ),
            'Viviendas' => array(
                'Hogares' => '327',
                'Hogares Jefatura masculina' => '86.54',
                'Hogares Jefatura femenina' => '13.46',
                'Ocupación por Vivienda' => '3.43',
                'Viviendas con Electricidad' => '100.00',
                'Viviendas con Agua' => '99.69',
                'Viviendas con Drenaje' => '100.00',
                'Viviendas con Televisión' => '100.00',
                'Viviendas con Automóvil' => '95.11',
                'Viviendas con Computadora' => '77.98',
                'Viviendas con Celular' => '98.17',
                'Viviendas con Internet' => '55.42'
            ),
            'Unidades Económicas' => array(
                'Total Actividades Económicas' => '6',
                'Primer actividad nombre' => 'Comercio Menudeo',
                'Primer actividad porcentaje' => '50.00',
                'Segunda actividad nombre' => 'Transportes, Correo, Almacenamiento',
                'Segunda actividad porcentaje' => '33.33',
                'Tercera actividad nombre' => 'Inmobiliarios',
                'Tercera actividad porcentaje' => '16.67',
                'Cuarta actividad nombre' => 'Salud',
                'Cuarta actividad porcentaje' => '0.00',
                'Quinta actividad nombre' => 'Información Medios Masivos',
                'Quinta actividad porcentaje' => '0.00'
            )
        );
    } // datos

} // Clase VillasDelSol

?>
