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
 * Clase AeropuertoInternacionalFranciscoSarabiaTinoco
 */
class AeropuertoInternacionalFranciscoSarabiaTinoco extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre          = 'Aeropuerto Internacional Francisco Sarabia Tinoco';
        $this->autor           = 'IMPLAN Torreón Staff';
        $this->fecha           = '2016-09-02 12:55:35';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo         = 'aeropuerto-internacional-francisco-sarabia-tinoco';
        $this->imagen          = '../imagenes/imagen.jpg';
        $this->imagen_previa   = '../imagenes/imagen-previa.jpg';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion     = 'Colonia Aeropuerto Internacional Francisco Sarabia Tinoco de IBC Torreón.';
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
                'Población total' => '1',
                'Porcentaje de población masculina' => '47.93',
                'Porcentaje de población femenina' => '52.07',
                'Porcentaje de población de 0 a 14 años' => '29.30',
                'Porcentaje de población de 15 a 64 años' => '67.43',
                'Porcentaje de población de 65 y más años' => '2.65',
                'Porcentaje de población no especificada' => '0.62',
                'Fecundidad promedio' => '1.62',
                'Porcentaje de población nacida en otro estado' => '22.52',
                'Porcentaje de población con discapacidad' => '1.54'
            ),
            'Educación' => array(
                'Grado Promedio de Escolaridad' => '13.11',
                'Grado Promedio de Escolaridad masculina' => '13.49',
                'Grado Promedio de Escolaridad femenina' => '12.78'
            ),
            'Características Económicas' => array(
                'Población Económicamente Activa' => '52.34',
                'Población Económicamente Activa masculina' => '63.54',
                'Población Económicamente Activa femenina' => '36.46',
                'Población Ocupada' => '96.17',
                'Población Ocupada masculina' => '62.78',
                'Población Ocupada femenina' => '37.22',
                'Población Desocupada' => '3.83',
                'Derechohabiencia' => '73.47'
            ),
            'Viviendas' => array(
                'Hogares' => '0'
            ),
            'Unidades Económicas' => array(
                'Total Actividades Económicas' => '36',
                'Primer actividad nombre' => 'Transportes, Correo, Almacenamiento',
                'Primer actividad porcentaje' => '27.78',
                'Segunda actividad nombre' => 'Inmobiliarios',
                'Segunda actividad porcentaje' => '19.44',
                'Tercera actividad nombre' => 'Gubernamentales',
                'Tercera actividad porcentaje' => '13.89',
                'Cuarta actividad nombre' => 'Comercio Menudeo',
                'Cuarta actividad porcentaje' => '13.89',
                'Quinta actividad nombre' => 'Comercio Mayoreo',
                'Quinta actividad porcentaje' => '8.33'
            )
        );
    } // datos

} // Clase AeropuertoInternacionalFranciscoSarabiaTinoco

?>
