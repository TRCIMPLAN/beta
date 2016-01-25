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
            unset($imprenta_publicaciones);
        }
        // Imprimir categorías
        $imprenta_categorias = new ImprentaCategorias($this->imprentas);
        $imprenta_categorias->imprimir();
        unset($imprenta_categorias);
        // Imprimir autores
        $imprenta_autores = new ImprentaAutores($this->imprentas);
        $imprenta_autores->imprimir();
        unset($imprenta_autores);
        // Imprimir página inicial (index.html)
        $imprenta_pagina_inicial = new ImprentaPaginaInicial();
        $imprenta_pagina_inicial->imprimir();
        unset($imprenta_pagina_inicial);
        // Imprimir mapa del sitio (sitemap.xml)
        $imprenta_mapa_sitio = new ImprentaMapaSitio();
        $imprenta_mapa_sitio->agregar_pagina_inicial();
        $imprenta_mapa_sitio->agregar_publicaciones_de_imprentas($this->imprentas);
        $imprenta_mapa_sitio->imprimir();
        unset($imprenta_mapa_sitio);
        // Imprimir redifusión (RSS feed)
        $imprenta_redifusion = new ImprentaRedifusion();
        $imprenta_redifusion->agregar_publicaciones_de_imprentas($this->imprentas);
        $imprenta_redifusion->imprimir();
        unset($imprenta_redifusion);
    } // imprimir

} // Clase Creador

?>
