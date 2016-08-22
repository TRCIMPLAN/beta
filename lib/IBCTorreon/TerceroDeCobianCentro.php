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
 * Clase TerceroDeCobianCentro
 */
class TerceroDeCobianCentro extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre          = 'Tercero De Cobian Centro';
        $this->autor           = 'IMPLAN Torreón Staff';
        $this->fecha           = '2016-08-22 15:46:47';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo         = 'tercero-de-cobian-centro';
    //  $this->imagen          = '';
    //  $this->imagen_previa   = '';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion     = 'Colonia Tercero De Cobian Centro de IBC Torreón.';
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
    protected function datos() {
        return array(
            'Demografía' => array(
                'Población total' => '9,277',
                'Porcentaje de población masculina' => '45.90 %',
                'Porcentaje de población femenina' => '54.10 %',
                'Porcentaje de población de 0 a 14 años' => '17.51 %',
                'Porcentaje de población de 15 a 64 años' => '65.08 %',
                'Porcentaje de población de 65 y más años' => '15.36 %',
                'Porcentaje de población no especificada' => '2.05 %',
                'Fecundidad promedio' => '2.1900',
                'Porcentaje de población nacida en otro estado' => '17.86 %',
                'Porcentaje de población con discapacidad' => '7.40 %'
            ),
            'Educación' => array(
                'Grado Promedio de Escolaridad' => '10.7600',
                'Grado Promedio de Escolaridad masculina' => '11.0900',
                'Grado Promedio de Escolaridad femenina' => '10.5000'
            ),
            'Características Económicas' => array(
                'Población Económicamente Activa' => '52.62 %',
                'Población Económicamente Activa masculina' => '56.95 %',
                'Población Económicamente Activa femenina' => '43.05 %',
                'Población Ocupada' => '92.26 %',
                'Población Ocupada masculina' => '56.38 %',
                'Población Ocupada femenina' => '43.62 %',
                'Población Desocupada' => '7.74 %',
                'Derechohabiencia' => '68.92 %'
            ),
            'Viviendas' => array(
                'Hogares Jefatura masculina' => '59.66 %',
                'Hogares Jefatura femenina' => '40.34 %',
                'Ocupación por Vivienda' => '3.2700',
                'Viviendas con Electricidad' => '99.71 %',
                'Viviendas con Agua' => '98.81 %',
                'Viviendas con Drenaje' => '98.66 %',
                'Viviendas con Televisión' => '97.60 %',
                'Viviendas con Automóvil' => '53.08 %',
                'Viviendas con Computadora' => '42.49 %',
                'Viviendas con Celular' => '69.64 %',
                'Viviendas con Internet' => '33.47 %'
            ),
            'Unidades Económicas' => array(
                'Primer actividad' => 'AEComercioMenu 25.57%',
                'Segunda actividad' => 'AEOtros 18.87%',
                'Tercera actividad' => 'AESalud 12.23%',
                'Cuarta actividad' => 'AEAlimentos 10.62%',
                'Quinta actividad' => 'AEManufactura 8.4%'
            )
        );
    } // datos

    /**
     * HTML
     *
     * @return string Código HTML
     */
    public function html() {
        // Definir contenido HTML
        $lenguetas = new \Base\Lenguetas();
        $lenguetas->agregar("Demografía", "Demografía", "<p>Población total = 9,277</p><p>Porcentaje de población masculina = 45.90 %</p><p>Porcentaje de población femenina = 54.10 %</p><p>Porcentaje de población de 0 a 14 años = 17.51 %</p><p>Porcentaje de población de 15 a 64 años = 65.08 %</p><p>Porcentaje de población de 65 y más años = 15.36 %</p><p>Porcentaje de población no especificada = 2.05 %</p><p>Fecundidad promedio = 2.1900</p><p>Porcentaje de población nacida en otro estado = 17.86 %</p><p>Porcentaje de población con discapacidad = 7.40 %</p>");
        $lenguetas->agregar("Educación", "Educación", "<p>Grado Promedio de Escolaridad = 10.7600</p><p>Grado Promedio de Escolaridad masculina = 11.0900</p><p>Grado Promedio de Escolaridad femenina = 10.5000</p>");
        $lenguetas->agregar("Economía", "Características Económicas", "<p>Población Económicamente Activa = 52.62 %</p><p>Población Económicamente Activa masculina = 56.95 %</p><p>Población Económicamente Activa femenina = 43.05 %</p><p>Población Ocupada = 92.26 %</p><p>Población Ocupada masculina = 56.38 %</p><p>Población Ocupada femenina = 43.62 %</p><p>Población Desocupada = 7.74 %</p><p>Derechohabiencia = 68.92 %</p>");
        $lenguetas->agregar("Viviendas", "Viviendas", "<p>Hogares Jefatura masculina = 59.66 %</p><p>Hogares Jefatura femenina = 40.34 %</p><p>Ocupación por Vivienda = 3.2700</p><p>Viviendas con Electricidad = 99.71 %</p><p>Viviendas con Agua = 98.81 %</p><p>Viviendas con Drenaje = 98.66 %</p><p>Viviendas con Televisión = 97.60 %</p><p>Viviendas con Automóvil = 53.08 %</p><p>Viviendas con Computadora = 42.49 %</p><p>Viviendas con Celular = 69.64 %</p><p>Viviendas con Internet = 33.47 %</p>");
        $lenguetas->agregar("U. Económicas", "Unidades Económicas", "<p>Primer actividad = AEComercioMenu 25.57%</p><p>Segunda actividad = AEOtros 18.87%</p><p>Tercera actividad = AESalud 12.23%</p><p>Cuarta actividad = AEAlimentos 10.62%</p><p>Quinta actividad = AEManufactura 8.4%</p>");
        $this->contenido->articleBody = $lenguetas->html();
        // Entregar resultado del padre
        return parent::html();
    } // html

    /**
     * Javascript
     *
     * @return string Código Javascript
     */
    public function javascript() {
        // Definir código JavaScript
        $this->javascript[] = <<<FINAL
FINAL;
        // Entregar resultado del padre
        return parent::javascript();
    } // javascript

    /**
     * Redifusion HTML
     *
     * @return string Código HTML
     */
    public function redifusion_html() {
        // Definir contenido para redifusión
        $this->redifusion = <<<FINAL
FINAL;
        // Entregar resultado del padre
        return parent::redifusion_html();
    } // redifusion_html

} // Clase TerceroDeCobianCentro

?>
