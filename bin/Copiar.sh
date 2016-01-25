#!/bin/bash

# Constantes que definen los tipos de errores
EXITO=0
E_FATAL=99

# Constantes
SITIO_WEB_DIR="$HOME/Documentos/TrcIMPLAN/GitHub/trcimplan.github.io"
PLATAFORMA_DIR="$HOME/Documentos/MovimientoLibre/GitHub/movimientolibre.github.io"
BETA_DIR="$HOME/Documentos/TrcIMPLAN/GitHub/beta"

echo "Copiar directorios y archivos a la versión Beta del Sitio Web."

#
# Verificar
#
cd $BETA_DIR
if [ ! -d "lib" ]; then
    echo "Error: No se encuentra el directorio lib."
    exit $E_FATAL
fi

#
# Respaldar Imprentas
#
echo "  Respaldando Imprentas..."
cd $BETA_DIR/lib
if [ -e Blog/Imprenta.php ]; then
    mv Blog/Imprenta.php BlogImprenta.php
fi
if [ -e ConsejoDirectivo/Imprenta.php ]; then
    mv ConsejoDirectivo/Imprenta.php ConsejoDirectivoImprenta.php
fi
if [ -e Contacto/Imprenta.php ]; then
    mv Contacto/Imprenta.php ContactoImprenta.php
fi
if [ -e Institucional/Imprenta.php ]; then
    mv Institucional/Imprenta.php InstitucionalImprenta.php
fi
if [ -e PlanEstrategicoMetropolitano/Imprenta.php ]; then
    mv PlanEstrategicoMetropolitano/Imprenta.php PlanEstrategicoMetropolitanoImprenta.php
fi
if [ -e PreguntasFrecuentes/Imprenta.php ]; then
    mv PreguntasFrecuentes/Imprenta.php PreguntasFrecuentesImprenta.php
fi
if [ -e Proyectos/Imprenta.php ]; then
    mv Proyectos/Imprenta.php ProyectosImprenta.php
fi
if [ -e SalaPrensa/Imprenta.php ]; then
    mv SalaPrensa/Imprenta.php SalaPrensaImprenta.php
fi
if [ -e SIG/Imprenta.php ]; then
    mv SIG/Imprenta.php SIGImprenta.php
fi
if [ -e SIGMapasTorreon/Imprenta.php ]; then
    mv SIGMapasTorreon/Imprenta.php SIGMapasTorreonImprenta.php
fi
if [ -e SIGPlanes/Imprenta.php ]; then
    mv SIGPlanes/Imprenta.php SIGPlanesImprenta.php
fi
if [ -e Terminos/Imprenta.php ]; then
    mv Terminos/Imprenta.php TerminosImprenta.php
fi

#
# Eliminar
#
echo "  Eliminando en la raíz..."
cd $BETA_DIR
rm -f css/plataforma-de-conocimiento.css
rm -rf fonts
rm -rf imagenes
rm -rf img
rm -rf js
rm -rf less
rm -rf scss
rm -rf blog
rm -rf consejo-directivo
rm -rf contacto
rm -rf institucional
rm -rf plan-estrategico-metropolitano
rm -rf preguntas-frecuentes
rm -rf proyectos
rm -rf sala-prensa
rm -rf sig
rm -rf sig-mapas-torreon
rm -rf sig-planes
rm -rf terminos
echo "  Eliminando en /bin..."
cd $BETA_DIR/bin
rm -f  Crear.php
echo "  Eliminando en /lib..."
cd $BETA_DIR/lib
rm -rf Base
rm -rf Michelf
rm -rf Blog
rm -rf ConsejoDirectivo
rm -rf Contacto
rm -rf Institucional
rm -rf PlanEstrategicoMetropolitano
rm -rf PreguntasFrecuentes
rm -rf Proyectos
rm -rf SalaPrensa
rm -rf SIG
rm -rf SIGMapasTorreon
rm -rf SIGPlanes
rm -rf Terminos

#
# Copiar
#
echo "  Copiando a la raíz..."
cd $BETA_DIR
cp -r $SITIO_WEB_DIR/fonts .
cp -r $SITIO_WEB_DIR/imagenes .
cp -r $SITIO_WEB_DIR/img .
cp -r $SITIO_WEB_DIR/js .
cp -r $SITIO_WEB_DIR/less .
cp -r $SITIO_WEB_DIR/scss .
cp -r $SITIO_WEB_DIR/blog .
cp -r $SITIO_WEB_DIR/consejo-directivo .
cp -r $SITIO_WEB_DIR/contacto .
cp -r $SITIO_WEB_DIR/institucional .
cp -r $SITIO_WEB_DIR/plan-estrategico-metropolitano .
cp -r $SITIO_WEB_DIR/preguntas-frecuentes .
cp -r $SITIO_WEB_DIR/proyectos .
cp -r $SITIO_WEB_DIR/sala-prensa .
cp -r $SITIO_WEB_DIR/sig .
cp -r $SITIO_WEB_DIR/sig-mapas-torreon .
cp -r $SITIO_WEB_DIR/sig-planes .
cp -r $SITIO_WEB_DIR/terminos .
rm -f blog/*.html
rm -f consejo-directivo/*.html
rm -f contacto/*.html
rm -f institucional/*.html
rm -f plan-estrategico-metropolitano/*.html
rm -f preguntas-frecuentes/*.html
rm -f proyectos/*.html
rm -f sala-prensa/*.html
rm -f sig/*.html
rm -f sig-mapas-torreon/*.html
rm -f sig-planes/*.html
rm -f terminos/*.html
echo "  Copiando a la /bin..."
cd $BETA_DIR/bin
cp $PLATAFORMA_DIR/bin/Crear.php .
echo "  Copiando a la /lib..."
cd $BETA_DIR/lib
cp -r $PLATAFORMA_DIR/lib/Base .
cp -r $PLATAFORMA_DIR/lib/Michelf .
cp -r $SITIO_WEB_DIR/lib/Blog .
cp -r $SITIO_WEB_DIR/lib/ConsejoDirectivo .
cp -r $SITIO_WEB_DIR/lib/Contacto .
cp -r $SITIO_WEB_DIR/lib/Institucional .
cp -r $SITIO_WEB_DIR/lib/PlanEstrategicoMetropolitano .
cp -r $SITIO_WEB_DIR/lib/PreguntasFrecuentes .
cp -r $SITIO_WEB_DIR/lib/Proyectos .
cp -r $SITIO_WEB_DIR/lib/SalaPrensa .
cp -r $SITIO_WEB_DIR/lib/SIG .
cp -r $SITIO_WEB_DIR/lib/SIGMapasTorreon .
cp -r $SITIO_WEB_DIR/lib/SIGPlanes .
cp -r $SITIO_WEB_DIR/lib/Terminos .
echo "  Copiando a la /css..."
cd $BETA_DIR/css
cp $PLATAFORMA_DIR/css/plataforma-de-conocimiento.css .

#
# Restaurando Imprentas
#
echo "  Restaurando Imprentas..."
cd $BETA_DIR/lib
if [ -e BlogImprenta.php ]; then
    rm -f Blog/Imprenta.php
    mv BlogImprenta.php Blog/Imprenta.php
fi
if [ -e ConsejoDirectivoImprenta.php ]; then
    rm -f ConsejoDirectivo/Imprenta.php
    mv ConsejoDirectivoImprenta.php ConsejoDirectivo/Imprenta.php
fi
if [ -e ContactoImprenta.php ]; then
    rm -f Contacto/Imprenta.php
    mv ContactoImprenta.php Contacto/Imprenta.php
fi
if [ -e InstitucionalImprenta.php ]; then
    rm -f Institucional/Imprenta.php
    mv InstitucionalImprenta.php Institucional/Imprenta.php
fi
if [ -e PlanEstrategicoMetropolitanoImprenta.php ]; then
    rm -f PlanEstrategicoMetropolitano/Imprenta.php
    mv PlanEstrategicoMetropolitanoImprenta.php PlanEstrategicoMetropolitano/Imprenta.php
fi
if [ -e PreguntasFrecuentesImprenta.php ]; then
    rm -f PreguntasFrecuentes/Imprenta.php
    mv PreguntasFrecuentesImprenta.php PreguntasFrecuentes/Imprenta.php
fi
if [ -e ProyectosImprenta.php ]; then
    rm -f Proyectos/Imprenta.php
    mv ProyectosImprenta.php Proyectos/Imprenta.php
fi
if [ -e SalaPrensaImprenta.php ]; then
    rm -f SalaPrensa/Imprenta.php
    mv SalaPrensaImprenta.php SalaPrensa/Imprenta.php
fi
if [ -e SIGImprenta.php ]; then
    rm -f SIG/Imprenta.php
    mv SIGImprenta.php SIG/Imprenta.php
fi
if [ -e SIGMapasTorreonImprenta.php ]; then
    rm -f SIGMapasTorreon/Imprenta.php
    mv SIGMapasTorreonImprenta.php SIGMapasTorreon/Imprenta.php
fi
if [ -e SIGPlanesImprenta.php ]; then
    rm -f SIGPlanes/Imprenta.php
    mv SIGPlanesImprenta.php SIGPlanes/Imprenta.php
fi
if [ -e TerminosImprenta.php ]; then
    rm -f Terminos/Imprenta.php
    mv TerminosImprenta.php Terminos/Imprenta.php
fi

echo "Script terminado."
exit $EXITO

