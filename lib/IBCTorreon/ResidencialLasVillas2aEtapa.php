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
 * Clase ResidencialLasVillas2aEtapa
 */
class ResidencialLasVillas2aEtapa extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre          = 'Residencial Las Villas 2A. Etapa';
        $this->autor           = 'IMPLAN Torreón Staff';
        $this->fecha           = '2016-09-02 12:55:35';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo         = 'residencial-las-villas-2a-etapa';
        $this->imagen          = '../imagenes/imagen.jpg';
        $this->imagen_previa   = '../imagenes/imagen-previa.jpg';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion     = 'Colonia Residencial Las Villas 2A. Etapa de IBC Torreón.';
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
                'Población total' => '131',
                'Porcentaje de población masculina' => '48.71',
                'Porcentaje de población femenina' => '51.29',
                'Porcentaje de población de 0 a 14 años' => '37.17',
                'Porcentaje de población de 15 a 64 años' => '55.04',
                'Porcentaje de población de 65 y más años' => '5.44',
                'Porcentaje de población no especificada' => '2.35',
                'Fecundidad promedio' => '1.96',
                'Porcentaje de población nacida en otro estado' => '17.52',
                'Porcentaje de población con discapacidad' => '0.70'
            ),
            'Educación' => array(
                'Grado Promedio de Escolaridad' => '14.06',
                'Grado Promedio de Escolaridad masculina' => '15.15',
                'Grado Promedio de Escolaridad femenina' => '13.27'
            ),
            'Características Económicas' => array(
                'Población Económicamente Activa' => '49.11',
                'Población Económicamente Activa masculina' => '62.48',
                'Población Económicamente Activa femenina' => '37.52',
                'Población Ocupada' => '99.69',
                'Población Ocupada masculina' => '62.40',
                'Población Ocupada femenina' => '37.60',
                'Población Desocupada' => '0.31',
                'Derechohabiencia' => '85.96'
            ),
            'Viviendas' => array(
                'Hogares' => '26',
                'Hogares Jefatura masculina' => '92.00',
                'Hogares Jefatura femenina' => '8.00',
                'Ocupación por Vivienda' => '5.04',
                'Viviendas con Electricidad' => '100.00',
                'Viviendas con Agua' => '100.00',
                'Viviendas con Drenaje' => '100.00',
                'Viviendas con Televisión' => '100.00',
                'Viviendas con Automóvil' => '99.61',
                'Viviendas con Computadora' => '91.17',
                'Viviendas con Celular' => '100.00',
                'Viviendas con Internet' => '94.20'
            ),
            'Unidades Económicas' => array(
                'Total Actividades Económicas' => '4',
                'Primer actividad nombre' => 'Manejo de Residuos',
                'Primer actividad porcentaje' => '50.00',
                'Segunda actividad nombre' => 'Profesionales, Científicos, Técnicos',
                'Segunda actividad porcentaje' => '25.00',
                'Tercera actividad nombre' => 'Inmobiliarios',
                'Tercera actividad porcentaje' => '25.00',
                'Cuarta actividad nombre' => 'Salud',
                'Cuarta actividad porcentaje' => '0.00',
                'Quinta actividad nombre' => 'Información Medios Masivos',
                'Quinta actividad porcentaje' => '0.00'
            )
        );
    } // datos

} // Clase ResidencialLasVillas2aEtapa

?>
