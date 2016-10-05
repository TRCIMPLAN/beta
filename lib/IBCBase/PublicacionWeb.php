<?php
/**
 * TrcIMPLAN IBCBase - PublicacionWeb
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
 * Clase PublicacionWeb
 */
abstract class PublicacionWeb extends \Base\PublicacionSchemaArticle implements SalidaWeb {

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
    protected $lenguetas;                         // Instancia de LenguetasWeb
    const LENGUETAS_ID = 'LenguetasConglomerado'; // Texto único que sirve de id para las lengüetas

    abstract public function datos();

    /**
     * Validar
     */
    public function validar() {
        // Si ya fue validado, no se hace nada
        if ($this->validado) {
            return;
        }
        // Ejecutar método en el padre
        parent::validar();
        // Elaborar lengüetas
        $this->lenguetas = new LenguetasWeb(self::LENGUETAS_ID);
        $this->lenguetas->agregar('Mapas',    new SeccionMapasWeb($this));
        $this->lenguetas->agregar('Datos',    new SeccionDatosWeb($this),   TRUE); // Lengüeta activa
        $this->lenguetas->agregar('Gráficas', new SeccionGraficasWeb($this));
    } // validar

    /**
     * HTML
     *
     * @return string Código HTML
     */
    public function html() {
        // Validar
        $this->validar();
        // Elaborar HTML
        $this->contenido->articleBody = $this->lenguetas->html();
        // Entregar
        return parent::html();
    } // html

    /**
     * Javascript
     *
     * @return string Código Javascript
     */
    public function javascript() {
        // Validar
        $this->validar();
        // Google Charts necesita este activado sólo una vez en la página
        $this->javascript[] = "  // Google Charts\n  google.charts.load('current', {'packages':['corechart']});";
        // Acumular Javascript de las lengüetas
        $this->javascript[] = $this->lenguetas->javascript();
        // Entregar
        return parent::javascript();
    } // javascript

    /**
     * Redifusion HTML
     *
     * @return string Código HTML
     */
    public function redifusion_html() {
        // Elaborar redifusión
        $this->redifusion = "Debe haber algo aquí";
        // Entregar
        return parent::redifusion_html();
    } // redifusion_html

} // Clase PublicacionWeb

?>
