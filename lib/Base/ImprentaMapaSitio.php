<?php
/**
 * Plataforma de Conocimiento - Imprenta Mapa Sitio
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

namespace Base;

/**
 * Clase ImprentaMapaSitio
 */
class ImprentaMapaSitio extends Imprenta {

    protected $recolector; // Instancia de Recolector
    protected $mapa_sitio; // Instancia de MapaSitio

    /**
     * Constructor
     */
    public function __construct() {
        $this->recolector = new Recolector();
        $this->mapa_sitio = new MapaSitio();
    } // constructor

    /**
     * Agregar la página inicial del sitio web
     */
    public function agregar_pagina_inicial() {
        $this->mapa_sitio->agregar_url('index.html', date('Y-m-d'), 'daily', '1');
    } // agregar_pagina_inicial

    /**
     * Agregar publicaciones de imprentas
     */
    public function agregar_publicaciones_de_imprentas($entrada) {
        $this->recolector->agregar_publicaciones_de_imprentas($entrada);
    } // agregar_publicaciones_de_imprentas

    /**
     * Imprimir
     */
    public function imprimir() {
        echo "ImprentaMapaSitio:     ";
        // Validar que haya publicaciones
        if ($this->recolector->obtener_cantidad_de_publicaciones() == 0) {
            throw new \Exception("Aviso en ImprentaMapaSitio: No hay publicaciones para hacer el mapa del sitio.");
        }
        // Agregar URLs de cada Publicacion
        foreach ($this->recolector->obtener_publicaciones() as $publicacion) {
            $publicacion->en_raiz = true;
            $this->mapa_sitio->agregar_url($publicacion->url(), $publicacion->fecha, 'monthly', '1');
        }
        // Crear archivo sitemap.xml
        $this->crear_archivo($this->mapa_sitio->archivo, $this->mapa_sitio->xml());
        // Mensaje
        echo "  mapa del sitio en {$this->mapa_sitio->archivo}\n";
    } // imprimir

} // Clase ImprentaMapaSitio

?>
