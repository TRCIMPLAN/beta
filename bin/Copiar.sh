#!/bin/bash

#
# Plataforma de Conocimiento - Copiar
#
# Copyright (C) 2016 Guillermo Valdés Lozano
#
# This program is free software: you can redistribute it and/or modify
# it under the terms of the GNU General Public License as published by
# the Free Software Foundation, either version 3 of the License, or
# (at your option) any later version.
#
# This program is distributed in the hope that it will be useful,
# but WITHOUT ANY WARRANTY; without even the implied warranty of
# MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
# GNU General Public License for more details.
#
# You should have received a copy of the GNU General Public License
# along with this program.  If not, see <http://www.gnu.org/licenses/>.
#

# Constantes que definen los tipos de errores
EXITO=0
E_FATAL=99

# Constantes
SITIO_WEB_DIR="$HOME/Documentos/GitHub/TrcIMPLAN/trcimplan.github.io"
PLATAFORMA_DIR="$HOME/Documentos/GitHub/MovimientoLibre/movimientolibre.github.io"
BETA_DIR="$HOME/Documentos/GitHub/TrcIMPLAN/beta"

echo "[Copiar] Inicia"

#
# Verificar
#
if [ ! -d $SITIO_WEB_DIR ]; then
    echo "Error: No se encuentra el directorio $SITIO_WEB_DIR"
    exit $E_FATAL
fi
if [ ! -d $PLATAFORMA_DIR ]; then
    echo "Error: No se encuentra el directorio $PLATAFORMA_DIR"
    exit $E_FATAL
fi
if [ ! -d $BETA_DIR ]; then
    echo "Error: No se encuentra el directorio $BETA_DIR"
    exit $E_FATAL
fi
cd $BETA_DIR
if [ ! -d "lib" ]; then
    echo "Error: No se encuentra el directorio $BETA_DIR/lib."
    exit $E_FATAL
fi

#
# Eliminar
#
echo "  Eliminando en la raíz..."
cd $BETA_DIR
rm -rf dist
rm -rf vendor
for DIR in autores blog categorias consejo-directivo contacto ibc ibc-colonias-torreon indicadores-categorias indicadores-coahuila indicadores-durango indicadores-gomez-palacio indicadores-la-laguna indicadores-lerdo indicadores-matamoros indicadores-nacional indicadores-torreon institucional investigaciones pet plan-estrategico-metropolitano plan-estrategico-torreon-enfoque-metropolitano-2040 preguntas-frecuentes proyectos sala-prensa sig sig-mapas-torreon sig-planes smi smi-georreferenciados terminos
do
    rm -rf $DIR
done
echo "  Eliminando en /bin..."
cd $BETA_DIR/bin
rm -f  Crear.php
echo "  Eliminando en /lib..."
cd $BETA_DIR/lib
rm -rf Base
rm -rf Michelf
for DIR in Blog ConsejoDirectivo Contacto IBC IBCColoniasTorreon Institucional Investigaciones PaginaInicial PET PETDocumento PlanEstrategicoMetropolitano PreguntasFrecuentes Proyectos SalaPrensa SIG SIGMapasTorreon SIGPlanes SMI SMICategorias SMIGeorreferenciados SMIIndicadoresCoahuila SMIIndicadoresDurango SMIIndicadoresGomezPalacio SMIIndicadoresLaLaguna SMIIndicadoresLerdo SMIIndicadoresMatamoros SMIIndicadoresNacional SMIIndicadoresTorreon Terminos
do
    rm -rf $DIR
done

#
# Copiar
#
echo "  Copiando del Sitio Web a la raíz..."
cd $BETA_DIR
echo "    dist"
cp -r $SITIO_WEB_DIR/dist .
echo "    vendor"
cp -r $SITIO_WEB_DIR/vendor .
for DIR in blog consejo-directivo contacto ibc ibc-colonias-torreon indicadores-coahuila indicadores-durango indicadores-categorias indicadores-gomez-palacio indicadores-la-laguna indicadores-lerdo indicadores-matamoros indicadores-nacional indicadores-torreon institucional investigaciones pet plan-estrategico-metropolitano plan-estrategico-torreon-enfoque-metropolitano-2040 preguntas-frecuentes proyectos sala-prensa sig sig-mapas-torreon sig-planes smi smi-georreferenciados terminos
do
    echo "    ${DIR}"
    cp -r $SITIO_WEB_DIR/$DIR .
    rm -f $DIR/*.html
    rm -f $DIR/*.json
    rm -f $DIR/*.csv
done
echo "  Copiando del Sitio Web a /bin..."
cd $BETA_DIR/bin
echo "    bin/Crear.php"
cp $SITIO_WEB_DIR/bin/Crear.php .
echo "  Copiando de la Plataforma del Conocimiento a /lib..."
cd $BETA_DIR/lib
echo "    lib/Base"
cp -r $PLATAFORMA_DIR/lib/Base .
echo "    lib/Michelf"
cp -r $PLATAFORMA_DIR/lib/Michelf .
echo "  Copiando del Sitio Web a /lib..."
for DIR in Blog ConsejoDirectivo Contacto IBC IBCColoniasTorreon Institucional Investigaciones PaginaInicial PET PETDocumento PlanEstrategicoMetropolitano PreguntasFrecuentes Proyectos SalaPrensa SIG SIGMapasTorreon SIGPlanes SMI SMICategorias SMIGeorreferenciados SMIIndicadoresCoahuila SMIIndicadoresDurango SMIIndicadoresGomezPalacio SMIIndicadoresLaLaguna SMIIndicadoresLerdo SMIIndicadoresMatamoros SMIIndicadoresNacional SMIIndicadoresTorreon Terminos
do
    echo "    lib/$DIR"
    cp -r $SITIO_WEB_DIR/lib/$DIR .
done

echo "[Copiar] Terminó con éxito."
exit $EXITO
