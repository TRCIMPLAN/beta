<?php
/**
 * TrcIMPLAN IBCBase - SeccionDatosWeb
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
 * Clase SeccionDatosWeb
 */
class SeccionDatosWeb implements SalidaWeb {

    protected $publicacion_ficha;    // Instancia de PublicacionWeb, para obtener los datos
    protected $acordeones;           // Instancia de AcordeonesWeb
    protected $preparado    = FALSE; // Bandera
    const     IDENTIFICADOR = 'Datos';

    /**
     * Constructor
     *
     * @param mixed Instancia de PublicacionWeb
     */
    public function __construct(PublicacionWeb $publicacion_ficha) {
        $this->publicacion_ficha = $publicacion_ficha;
    } // constructor

    /**
     * Preparar
     */
    protected function prepapar() {
        if (!$this->preparado) {
            $this->acordeones = new AcordeonesWeb(self::IDENTIFICADOR);
            $this->acordeones->agregar('Demografía',                 new EjeDemografiaTablaWeb($this->publicacion_ficha), TRUE); // Acordeon abierto
            $this->acordeones->agregar('Educación',                  new EjeEducacionTablaWeb($this->publicacion_ficha));
            $this->acordeones->agregar('Características Económicas', new EjeCaracteristicasEconomicasTablaWeb($this->publicacion_ficha));
            $this->acordeones->agregar('Viviendas',                  new EjeViviendasTablaWeb($this->publicacion_ficha));
            $this->acordeones->agregar('Unidades Económicas',        new EjeUnidadesEconomicasTablaWeb($this->publicacion_ficha));
            $this->preparado = TRUE;
        }
    } // preparar

    /**
     * HTML
     *
     * @return string Código HTML
     */
    public function html() {
        // Preparar
        $this->prepapar();
        // Consultar mapas
        $mapas = $this->publicacion_ficha->mapas();
        // Crear esquema GeoCoordinates
        $s_geo                    = \Base\SchemaGeoCoordinates();
        $s_geo->latitude          = $mapas['Centro latitud'];
        $s_geo->longitude         = $mapas['Centro longitud'];
        // Crear esquema Place
        $s_place                  = \Base\SchemaPlace();
        $s_place->description     = $this->publicacion_ficha->descripcion;
        $s_place->name            = $this->publicacion_ficha->nombre;
        $s_place->geo             = $s_geo;
        // Crear esquema Dataset
        $s_dataset                = \Base\SchemaDataset();
        $s_dataset->big_heading   = FALSE;
        $s_dataset->author        = $this->publicacion_ficha->autor;
        $s_dataset->spatial       = $s_place;
        $s_dataset->datePublished = '2010-01-01';
    //  $s_dataset->distribution  = ; // URL a JOSN con http://schema.org/DataDownload
        // Entregar
        return $this->acordeones->html();
    } // html

    /**
     * Javascript
     *
     * @return string Javascript
     */
    public function javascript() {
        $this->prepapar();
        return $this->acordeones->javascript();
    } // javascript

} // Clase SeccionDatosWeb

?>
