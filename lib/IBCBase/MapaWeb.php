<?php
/**
 * TrcIMPLAN IBCBase - MapaWeb
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
 * Clase MapaWeb
 */
class MapaWeb implements SalidaWeb {

    protected $identificador; // Texto único que lo identifica
    protected $carto_json;    // URL al archivo JSON del mapa en Carto
    protected $nombre;        // Nombre de la colonia

    /**
     * Constructor
     *
     * @param string Texto único que lo identifica
     */
    public function __construct($identificador) {
        $this->identificador = $identificador;
    } // constructor

    /**
     * Definir Carto JSON
     *
     * @param string URL al archivo JSON del mapa en Carto
     */
    public function definir_carto_json($carto_json) {
        $this->carto_json = $carto_json;
    } // definir_carto_json

    /**
     * Definir Nombre
     *
     * @param string Nombre de la colonia
     */
    public function definir_nombre($nombre) {
        $this->nombre = $nombre;
    } // definir_carto_json

    /**
     * Validar
     */
    protected function validar() {
        if (!is_string($this->identificador) || ($this->identificador == '')) {
            throw new \Exception("Error: Falta el identificador.");
        }
        if (!is_string($this->carto_json) || ($this->carto_json == '')) {
            throw new MapaExceptionIncompleto("No hay Carto JSON en {$this->identificador}.");
        }
        if (!is_string($this->nombre) || ($this->nombre == '')) {
            throw new MapaExceptionIncompleto("No hay nombre en {$this->identificador}.");
        }
    } // validar

    /**
     * HTML
     *
     * @return string Código HTML
     */
    public function html() {
        // Si al validar no hay valores, pondrá un mensaje
        try {
            $this->validar();
        } catch (MapaExceptionIncompleto $e) {
            $mensaje = new MensajeWeb();
            $mensaje->definir_mensaje_aviso('Mapa', $e->getMessage());
            return $mensaje->html();
        }
        return "    <div id=\"{$this->identificador}\" class=\"mapa\"></div>";
    } // html

    /**
     * Javascript
     *
     * @return string Código Javascript
     */
    public function javascript() {
        // Si al validar no hay valores, pondrá un mensaje
        try {
            $this->validar();
        } catch (MapaExceptionIncompleto $e) {
            return "      // MapaWeb {$this->identificador} incompleto";
        }
        // Acumular
        $a   = array();
        $a[] = "    if (mapa_limites_cargado == false) {";
        $a[] = "      var carto_json = '{$this->carto_json}'";
        $a[] = "      cartodb.createVis('{$this->identificador}', carto_json)";
        $a[] = "      .done(function(vis, layers) {";
        $a[] = "        // Capa colonias";
        $a[] = "        var capa_colonias = layers[1];";
        $a[] = "        capa_colonias.setInteraction(true); // Habilita mostrar información al dar clic en la colonia";
        $a[] = "        // Cambiar la consulta en la subcapa";
        $a[] = "        var sub_capa = capa_colonias.getSubLayer(0);";
        $a[] = "        sub_capa.setSQL(\"SELECT * FROM muestra_colonias_torreon WHERE colonia = '{$this->nombre}'\");";
        $a[] = "        // Ajustar el zoom";
        $a[] = "        var map = vis.getNativeMap();";
        $a[] = "        map.setZoom(14);";
        $a[] = "      })"; // done
        $a[] = "      .error(function(err) {";
        $a[] = "        console.log(err);";
        $a[] = "      });"; // error
        $a[] = "      mapa_limites_cargado = true;";
        $a[] = "    }";
        // Entregar
        return implode("\n", $a);
    } // javascript

} // Clase MapaWeb

?>
