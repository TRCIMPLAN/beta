<?php
/**
 * TrcIMPLAN IBCBase - PublicacionFicha
 *
 * Copyright (C) 2016 Guillermo Valdés Lozano
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
 * @package PlataformaDeConocimiento
 */

namespace IBCBase;

/**
 * Clase PublicacionFicha
 */
abstract class PublicacionFicha extends \Base\Publicacion implements SalidaWeb {

    // public $sitio_url;
    // public $fecha;
    // public $autor;
    // public $aparece_en_pagina_inicial;
    // public $para_compartir;
    // public $imagen;
    // public $imagen_previa;
    // public $imagen_id;
    // public $icono;
    // public $region_nivel;
    // public $estado;
    // public $poner_imagen_en_contenido;
    // public $include_extra_directorio;
    // public $nombre;
    // public $nombre_menu;
    // public $directorio;
    // public $archivo;
    // public $descripcion;
    // public $claves;
    // public $encabezado;
    // public $encabezado_color;
    // public $url;
    // public $url_etiqueta;
    // public $en_raiz;
    // public $en_otro;
    // public $archivo_url;
    // public $archivo_target;
    // public $boton_url;
    // public $boton_target;
    // public $contenido_archivo_html;
    // public $contenido_archivo_markdown;
    // public $categorias;
    // public $fuentes;
    // public $regiones;
    // public $imprenta_titulo;
    // protected $contenido;
    // protected $javascript;
    // protected $redifusion;
    // protected $validado;
    const LENGUETAS_ID = 'lenguetasIBC';

    abstract public function datos();

    /**
     * Validar
     */
    public function validar() {
        // Si ya fue validado, no se hace nada
        if ($this->validado) {
            return;
        }
        // El contenido es estructurado en un esquema
        $schema                = new \Base\SchemaDataset();
        $schema->is_article    = true;
        $schema->big_heading   = true;
        $schema->name          = $this->nombre;
        $schema->description   = $this->descripcion;
        $schema->image         = $this->imagen;
        $schema->image_show    = false;
        // El contenido es una instancia de SchemaBlogPosting
        $this->contenido       = $schema;
        // Ejecutar método en el padre
        parent::validar();
    } // validar

    /**
     * HTML
     *
     * @return string Código HTML
     */
    public function html() {
        // Crear lengüetas
        $lenguetas = new LenguetasWeb(self::LENGUETAS_ID);
    //~ $lenguetas->agregar('Mapas',    'Mapas',    new SeccionMapasWeb($this));
        $lenguetas->agregar('Datos',    'Datos',    new SeccionDatosWeb($this));
        $lenguetas->agregar('Graficas', 'Graficas', new SeccionGraficasWeb($this));
        $this->contenido->extra = $lenguetas->html();
        $this->javascript[]     = "google.charts.load('current', {'packages':['corechart']});";
        $this->javascript[]     = $lenguetas->javascript();
        // Entregar
        return parent::html();
    } // html

    /**
     * Redifusion HTML
     *
     * @return string Código HTML
     */
    public function redifusion_html() {
        // Definir
        $this->redifusion = "Debe haber algo aquí";
        // Entregar
        return parent::redifusion_html();
    } // redifusion_html

} // Clase PublicacionFicha

?>
