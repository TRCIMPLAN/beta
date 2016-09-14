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
 * Clase LasArboledas2aEtapa
 */
class LasArboledas2aEtapa extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre          = 'Las Arboledas 2A. Etapa';
        $this->autor           = 'IMPLAN Torreón Staff';
        $this->fecha           = '2016-09-14 08:25:21';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo         = 'las-arboledas-2a-etapa';
        $this->imagen          = '../imagenes/imagen.jpg';
        $this->imagen_previa   = '../imagenes/imagen-previa.jpg';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion     = 'Colonia Las Arboledas 2A. Etapa de IBC Torreón.';
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
                'Población total' => '360',
                'Porcentaje de población masculina' => '46.94',
                'Porcentaje de población femenina' => '53.06',
                'Porcentaje de población de 0 a 14 años' => '31.11',
                'Porcentaje de población de 15 a 64 años' => '65.56',
                'Porcentaje de población de 65 y más años' => '3.33',
                'Porcentaje de población no especificada' => '0.00',
                'Fecundidad promedio' => '1.72',
                'Porcentaje de población nacida en otro estado' => '16.11',
                'Porcentaje de población con discapacidad' => '2.57'
            ),
            'Educación' => array(
                'Grado Promedio de Escolaridad' => '12.42',
                'Grado Promedio de Escolaridad masculina' => '12.30',
                'Grado Promedio de Escolaridad femenina' => '12.53'
            ),
            'Características Económicas' => array(
                'Población Económicamente Activa' => '57.46',
                'Población Económicamente Activa masculina' => '54.55',
                'Población Económicamente Activa femenina' => '45.45',
                'Población Ocupada' => '99.35',
                'Población Ocupada masculina' => '54.25',
                'Población Ocupada femenina' => '45.75',
                'Población Desocupada' => '0.65',
                'Derechohabiencia' => '83.89'
            ),
            'Viviendas' => array(
                'Hogares' => '96',
                'Hogares Jefatura masculina' => '70.83',
                'Hogares Jefatura femenina' => '29.17',
                'Ocupación por Vivienda' => '3.75',
                'Viviendas con Electricidad' => '100.00',
                'Viviendas con Agua' => '100.00',
                'Viviendas con Drenaje' => '100.00',
                'Viviendas con Televisión' => '97.92',
                'Viviendas con Automóvil' => '71.88',
                'Viviendas con Computadora' => '62.50',
                'Viviendas con Celular' => '86.46',
                'Viviendas con Internet' => '56.25'
            ),
            'Unidades Económicas' => array(
                'Total Actividades Económicas' => '11',
                'Primer actividad nombre' => 'Comercio Menudeo',
                'Primer actividad porcentaje' => '36.36',
                'Segunda actividad nombre' => 'Manejo de Residuos',
                'Segunda actividad porcentaje' => '27.27',
                'Tercera actividad nombre' => 'Profesionales, Científicos, Técnicos',
                'Tercera actividad porcentaje' => '9.09',
                'Cuarta actividad nombre' => 'Salud',
                'Cuarta actividad porcentaje' => '9.09',
                'Quinta actividad nombre' => 'Esparcimiento, Culturales, Deportivos',
                'Quinta actividad porcentaje' => '9.09'
            )
        );
    } // datos

} // Clase LasArboledas2aEtapa

?>
