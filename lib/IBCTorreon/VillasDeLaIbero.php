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
 * Clase VillasDeLaIbero
 */
class VillasDeLaIbero extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre          = 'Villas De La Ibero';
        $this->autor           = 'IMPLAN Torreón Staff';
        $this->fecha           = '2016-09-02 12:55:35';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo         = 'villas-de-la-ibero';
        $this->imagen          = '../imagenes/imagen.jpg';
        $this->imagen_previa   = '../imagenes/imagen-previa.jpg';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion     = 'Colonia Villas De La Ibero de IBC Torreón.';
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
                'Población total' => '730',
                'Porcentaje de población masculina' => '50.82',
                'Porcentaje de población femenina' => '49.18',
                'Porcentaje de población de 0 a 14 años' => '34.93',
                'Porcentaje de población de 15 a 64 años' => '60.41',
                'Porcentaje de población de 65 y más años' => '3.84',
                'Porcentaje de población no especificada' => '0.82',
                'Fecundidad promedio' => '1.47',
                'Porcentaje de población nacida en otro estado' => '25.07',
                'Porcentaje de población con discapacidad' => '1.20'
            ),
            'Educación' => array(
                'Grado Promedio de Escolaridad' => '15.00',
                'Grado Promedio de Escolaridad masculina' => '15.36',
                'Grado Promedio de Escolaridad femenina' => '14.65'
            ),
            'Características Económicas' => array(
                'Población Económicamente Activa' => '62.15',
                'Población Económicamente Activa masculina' => '61.56',
                'Población Económicamente Activa femenina' => '38.44',
                'Población Ocupada' => '98.01',
                'Población Ocupada masculina' => '61.46',
                'Población Ocupada femenina' => '38.54',
                'Población Desocupada' => '1.99',
                'Derechohabiencia' => '81.64'
            ),
            'Viviendas' => array(
                'Hogares' => '202',
                'Hogares Jefatura masculina' => '90.10',
                'Hogares Jefatura femenina' => '9.90',
                'Ocupación por Vivienda' => '3.61',
                'Viviendas con Electricidad' => '99.01',
                'Viviendas con Agua' => '99.01',
                'Viviendas con Drenaje' => '99.01',
                'Viviendas con Televisión' => '96.53',
                'Viviendas con Automóvil' => '93.56',
                'Viviendas con Computadora' => '88.61',
                'Viviendas con Celular' => '94.55',
                'Viviendas con Internet' => '86.14'
            ),
            'Unidades Económicas' => array(
                'Total Actividades Económicas' => '2',
                'Primer actividad nombre' => 'Comercio Menudeo',
                'Primer actividad porcentaje' => '50.00',
                'Segunda actividad nombre' => 'Educativos',
                'Segunda actividad porcentaje' => '50.00',
                'Tercera actividad nombre' => 'Salud',
                'Tercera actividad porcentaje' => '0.00',
                'Cuarta actividad nombre' => 'Información Medios Masivos',
                'Cuarta actividad porcentaje' => '0.00',
                'Quinta actividad nombre' => 'Manejo de Residuos',
                'Quinta actividad porcentaje' => '0.00'
            )
        );
    } // datos

} // Clase VillasDeLaIbero

?>
