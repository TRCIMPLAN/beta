<?php
/**
 * Plataforma de Conocimiento - Creador
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
 * Clase Creador
 *
 * Esta clase coordina los conjuntos de programas que crean el sitio web
 *   1) Ejecuta cada una de las Imprentas de las publicaciones, creando sus archivos HTML y su index.html
 *   2) Ejecuta ImprentaPaginaInicial que crea el index.html en la raíz
 *   3) Ejecuta ImprentaMapaSitio que crea el sitemap.xml en la raíz
 *   4) Ejecuta ImprentaRedifusion que crea el rss.xml en la raíz
 * Se ejecuta con bin/Crear.php
 */
class Creador extends \Configuracion\CreadorConfig {

    // public $imprentas;

    /**
     * Imprimir
     */
    public function imprimir() {
        // Imprimir publicaciones
        foreach ($this->imprentas as $imprenta) {
            $imprenta_publicaciones = new $imprenta();
            $imprenta_publicaciones->imprimir();
        }
        // Imprimir categorías
        $imprenta_categorias = new ImprentaCategorias($this->imprentas);
        $imprenta_categorias->imprimir();
        // Imprimir autores
        $imprenta_autores = new ImprentaAutores($this->imprentas);
        $imprenta_autores->imprimir();
        // Imprimir página inicial (index.html)
        $imprenta_pagina_inicial = new ImprentaPaginaInicial();
        $imprenta_pagina_inicial->imprimir();
        // Imprimir mapa del sitio (sitemap.xml)
        $imprenta_mapa_sitio = new ImprentaMapaSitio();
        $imprenta_mapa_sitio->agregar_pagina_inicial();
        $imprenta_mapa_sitio->agregar_publicaciones_de_imprentas($this->imprentas);
        $imprenta_mapa_sitio->imprimir();
        // Imprimir redifusión (RSS feed)
        $imprenta_redifusion = new ImprentaRedifusion();
        $imprenta_redifusion->agregar_publicaciones_de_imprentas($this->imprentas);
        $imprenta_redifusion->imprimir();
    } // imprimir

} // Clase Creador

?>
