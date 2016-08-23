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
 * Clase ColoniaPrimeroDeCobianCentro
 */
class ColoniaPrimeroDeCobianCentro extends \IBCBase\PublicacionSchemaDataset {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre          = 'Colonia Primero De Cobian Centro';
        $this->autor           = 'IMPLAN Torreón Staff';
        $this->fecha           = '2016-08-22 15:46:47';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo         = 'colonia-primero-de-cobian-centro';
        $this->imagen          = '../imagenes/imagen.jpg';
        $this->imagen_previa   = '../imagenes/imagen-previa.jpg';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion     = 'Colonia Colonia Primero De Cobian Centro de IBC Torreón.';
        $this->claves          = 'IMPLAN, Torreon, Desagregación';
        // El directorio en la raíz donde se guardará el archivo HTML
        $this->directorio      = 'ibc-torreon';
        // Opción del menú Navegación a poner como activa cuando vea esta publicación
        $this->nombre_menu     = 'IBC > IBC Torreón';
        // El estado puede ser 'publicar' (crear HTML y agregarlo a índices/galerías), 'revisar' (sólo crear HTML y accesar por URL) o 'ignorar'
        $this->estado          = 'publicar';
        // Indicar que NO se vaya a poner la imagen en la página y en la redifusión. Por defecto es verdadero.
        $this->poner_imagen_en_contenido = false;
        // El contenido es estructurado en un esquema
        $schema                = new \Base\SchemaBlogPosting();
        $schema->name          = $this->nombre;
        $schema->description   = $this->descripcion;
        $schema->datePublished = $this->fecha;
        $schema->image         = $this->imagen;
        $schema->image_show    = $this->poner_imagen_en_contenido;
        $schema->author        = $this->autor;
        // El contenido es una instancia de SchemaBlogPosting
        $this->contenido       = $schema;
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
                'Población total' => '2,513',
                'Porcentaje de población masculina' => '46.58 %',
                'Porcentaje de población femenina' => '53.42 %',
                'Porcentaje de población de 0 a 14 años' => '15.46 %',
                'Porcentaje de población de 15 a 64 años' => '64.89 %',
                'Porcentaje de población de 65 y más años' => '17.94 %',
                'Porcentaje de población no especificada' => '1.71 %',
                'Fecundidad promedio' => '1.8200',
                'Porcentaje de población nacida en otro estado' => '19.30 %',
                'Porcentaje de población con discapacidad' => '6.75 %'
            ),
            'Educación' => array(
                'Grado Promedio de Escolaridad' => '11.2900',
                'Grado Promedio de Escolaridad masculina' => '11.7700',
                'Grado Promedio de Escolaridad femenina' => '10.8800'
            ),
            'Características Económicas' => array(
                'Población Económicamente Activa' => '54.77 %',
                'Población Económicamente Activa masculina' => '58.68 %',
                'Población Económicamente Activa femenina' => '41.32 %',
                'Población Ocupada' => '92.46 %',
                'Población Ocupada masculina' => '58.47 %',
                'Población Ocupada femenina' => '41.53 %',
                'Población Desocupada' => '7.54 %',
                'Derechohabiencia' => '66.47 %'
            ),
            'Viviendas' => array(
                'Hogares Jefatura masculina' => '60.19 %',
                'Hogares Jefatura femenina' => '39.81 %',
                'Ocupación por Vivienda' => '3.0200',
                'Viviendas con Electricidad' => '99.61 %',
                'Viviendas con Agua' => '99.49 %',
                'Viviendas con Drenaje' => '99.00 %',
                'Viviendas con Televisión' => '98.52 %',
                'Viviendas con Automóvil' => '49.64 %',
                'Viviendas con Computadora' => '45.22 %',
                'Viviendas con Celular' => '74.04 %',
                'Viviendas con Internet' => '35.59 %'
            ),
            'Unidades Económicas' => array(
                'Primer actividad' => 'AEComercioMenu 22.63%',
                'Segunda actividad' => 'AEOtros 13.74%',
                'Tercera actividad' => 'AEProfesional 13.74%',
                'Cuarta actividad' => 'AEAlimentos 12.22%',
                'Quinta actividad' => 'AESalud 9.9%'
            )
        );
    } // datos

} // Clase ColoniaPrimeroDeCobianCentro

?>
