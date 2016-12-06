<?php
/*
 * MyBB: Downloads
 *
 * File: downloads.lang.php
 * 
 * Authors: Vintagedaddyo, Edson Ordaz
 *
 * MyBB Version: 1.8
 *
 * Plugin Version: 2.0.2
 * 
 */
 
$l['downloads'] = "Descargas";
$l['download'] = "Descarga";
$l['editdownloads'] = "Editar Descargas";
$l['edit'] = "Editar";
$l['delete'] = "Eliminar";
$l['editlinks'] = "Editar Enlaces";
$l['editimages'] = "Editar Imagenes";
$l['deleteimages'] = "Eliminar Imagenes";
$l['save'] = "Guardar";
$l['saveimages'] = "Guardar Imagenes";
$l['savelinks'] = "Guardar Enlaces";
$l['reset'] = "Resetear";
$l['notpostcode'] = "El codigo de verificacion no coincide.";
$l['manage'] = "Configurar";

/****************   downloads.php  **************/
/************************************************/
$l['namearchive'] = "Nombre del archivo";
$l['images'] = "Imagenes";
$l['active'] = "Activa";
$l['orden'] = "Orden";
$l['options'] = "Opciones";
$l['activada'] = "Activada";
$l['activar'] = "Activar";
$l['activado'] = "Activado";
$l['desactivado'] = "Desactivado";
$l['desactivar'] = "Desactivar";
$l['desactivada'] = "Desactivada";
$l['deletepop'] = "Deseas eliminar la descarga {1}.";
$l['emptytabledownloads'] = "No hay ninguna descarga.";

$l['tab_down1_des'] = "Los archivos en la lista son los que se muestran para descargar dentro de la categoria.<br />Para poder activar/desactivar un archivo solo da click en la imagen de la celda activa. Los archivos desactivados no se mostraran en la pagina de descargas.";
$l['tab_down2_des'] = "Rellena correctamente todos los campos que se te piden.<br />Al terminar puedes ingresar imagenes a este archivo. La pagina se mostrara automaticamente.";

//delete download
$l['deletesuccessdownload'] = "Has eliminado correctamente la descarga {1}.";

//edit downloads and new downloads
$l['newarchive'] = "Nuevo Archivo";
$l['name'] = "Nombre";
$l['name_des'] = "Ingresa el nombre del archivo a descargar.";
$l['shortdescription'] = "Descripcion corta del archivo.";
$l['shortdescriptiondes'] = "Ingresa la descripcion corta del archivo para mostrarla en la lista de descargas.";
$l['description'] = "Descripcion";
$l['descriptiondes'] = "Ingresa la descripcion del archivo a descargar.<br /><b>Si se permite HTML.</b>";
$l['portada'] = "Portada";
$l['portadades'] = "Ingresa la ruta de la imagen donde esta el archivo o usa el url de una imagen de un servidor";
$l['comments'] = "Comentarios";
$l['commentsdes'] = "Pueden comentar este archivo?";
$l['urlarchive'] = "Enlaces del archivo";
$l['urlarchivedes'] = "Ingresa el numero de enlaces que tendra del archivo para descargar.";
$l['ordendes'] = "Ingresa el orden en que se mostrara este con los demas archivos.";
$l['activedes'] = "Esta descarga esta activa para todos los usuarios?";
$l['imagesdesnewarchive'] = "Ingresa el numero de imagenes a subir. (Maximo 10 imagenes).";
$l['groupsuser'] = "Grupos de usuarios";
$l['groupsuserdes'] = "Selecciona los grupos de usuarios que <b>NO</b> pueden ver esta descarga.";
$l['categorysdesnew'] = "Selecciona la categoria en la estara esta descarga.";
$l['namearchshort'] = "El nombre del archivo es muy corto.";
$l['desarchshort'] = "La descripcion del archivo es muy corta.";
$l['desarchshortdesc'] = "La descripcion corta del archivo debe contener mas caracteres.";
$l['portadaempty'] = "Debes ingresar una portada para el archivo.";
$l['urlarchshort'] = "Debe ingresar al menos un enlace del archivo.";
$l['editarchivesuccess'] = "La descarga se ha editado correctamente.";
$l['mosttenimages'] = "No puedes ingresar mas de 10 imagenes en la descarga.";
$l['archivesave'] = "El archivo se ha guardado correctamente.";
$l['archsave_imagesnew'] = "El archivo se ha agregado correctamente. Agrega las imagenes a este archivo.";
$l['notcategoryselect'] = "No has seleccionado ninguna categoria para esta descarga.";

//activate archive
$l['deletdownloadssuccess'] = "Has {1} correctamente la descarga {2}.";

//edit images and links
$l['shortpathimg'] = "La ruta de la imagen {1} es muy corta.";
$l['shortpathlink'] = "La ruta del enlace {1} es muy corta.";
$l['editedlinks'] = "Los enlaces se han editado correctamente.";
$l['editedimages'] = "Las imagenes se han editado correctamente.";
$l['emptyimagesedit'] = "No hay imagenes para editar.";
$l['emptylinksedit'] = "No hay enlaces para editar.";
$l['imgsofdownload'] = "Imagenes de la descarga {1}.";
$l['linksofdownload'] = "Enlaces de la descarga {1}.";
$l['imagenumer'] = "Imagen {1}";
$l['linknumber'] = "Enlace {1}";
$l['imagenumerdes'] = "Ingresa la ruta de la imagen {1}. Desde la raiz de tu foro o desde algun servidor de imagenes.";
$l['linknumerdes'] = "Ingresa el enlace {1} del archivo descargable.";
$l['enlace'] = "Enlace:";
$l['namelink'] = "Nombre:";
$l['linknamelinkshort'] = "El nombre del enlace {1} es muy corto.";
$l['urlnameshort'] = "La ruta del enlace {1} es muy corta.";
$l['urlimageshort'] = "La ruta de la imagen {1} es muy corta.";

//delete images
$l['imagesdeletesuccess'] = "Las imagenes se han eliminado correctamente.";

//add images
$l['imagesagregesuccess'] = "Las imagenes se han agregado correctamente.";
$l['linksagregesuccess'] = "Los enlaces se han agregado correctamente.";
$l['notselectedarchive'] = "No has seleccionado ningun archivo para subir imagenes.";
$l['imagesof'] = "Imagenes de {1}.";
$l['linksof'] = "Enlaces de {1}.";



/*************     Category.php     ***************/
/**************************************************/
$l['categorys'] = "Categorias";
$l['category'] = "Categoria";
$l['ficon'] = "Ficon";
$l['namecategory'] = "Nombre de la categoria";
$l['emptycategoritable'] = "No hay ninguna categoria.";
$l['deletepopupcategorys'] = "Deseas eliminar la categoria {1}?\\nSe eliminaran tambien los archivos dentro de esta categoria, imagenes y comentarios.";
$l['tabcategory1'] = "Se muestran las categorias creadas por orden ascendente. Si una categoria esta desactivada las descargas dentro de esta tambien lo estaran.";
$l['tabcategory2'] = "Rellena todos los datos que se te piden para poder guardar la categoria.<br />Una vez terminado da click en guardar para que se guarde la categoria.";

//new category
$l['newcategory'] = "Nueva Categoria";
$l['namedescat'] = "Ingresa el nombre de la categoria.";
$l['descdescat'] = "Ingresa la descripcion de la categoria.";
$l['ordendescat'] = "Ingresa el orden en que se mostrara esta categoria con las demas.";
$l['activedescat'] = "Esta categoria esta activa para todos los usuarios? Si esta desactivada los archivos dentro de ella estaran desactivados tambien.";
$l['namecatshort'] = "El nombre de la categoria es muy corta.";
$l['descatshort'] = "La descripcion de la categoria es muy corta.";
$l['ordenempty'] = "El orden no puede estar vacio.";
$l['successsavecat'] = "La categoria se a guardado correctamente.";
$l['successactivatecat'] = "Has {1} correctamente la categoria {2}.";
$l['deletecategoryentri'] = "Has eliminado correctamente la categoria {1}.";
$l['ficon_des'] = "Selecciona desde tu ordenador la imagen que le daras a la categoria.";
$l['errorcopyimage'] = "Error al copiar la imagen";
$l['extnotpermit'] = "La extencion de la imagen no esta permitida";
$l['errorloadimage'] = "Error al cargar la imagen";
$l['ficonused'] = "Ficon Actual";
$l['ficonusednotremplace'] = "Si deseas mantener el ficon actual deja el espacio de abajo en blanco.";

/**************    Options.php    ***************/
/************************************************/
$l['timeonline'] = "Tiempo en Linea";
$l['editmassive'] = "Edici&oacute;n Masiva";
$l['search'] = "Buscar";
$l['taboptions1'] = "Puedes ver todos los adjuntos con sus opciones extras. Estas opciones son para poder ver las descargas. Puedes configurar que al tener tanto numero de posts/temas/reputacion/tiempo en linea pueda ver la descarga, si no cumple con eso no podra ver la descarga.";
$l['taboptions2'] = "Ingresa los datos correspondientes a cada campo de texto.";
$l['taboptions3'] = "Ingresa el que texto a buscar a en el nombre de las descargas o el nombre completo del archivo a mostrar.";

//edit
$l['threadsform'] = "Temas requeridos";
$l['threadsformdes'] = "Ingresa el numero de temas que debe tener creados que debe tener el usuario.";
$l['postsform'] = "Posts requeridos";
$l['postsformdes'] = "Ingresa el numero de posts que necesitan tener el usuario.";
$l['reputationform'] = "Reputacion requerida.";
$l['reputationformdes'] = "Ingresa el numero de reputacion que debe tener el usuario.";
$l['timeonline'] = "Tiempo en linea";
$l['timeonlineform'] = "Tiempo en linea requerido";
$l['timeonlinedes'] = "Ingresa el numero de tiempo en linea necesita tener el usuario.";
$l['successoptionsmore'] = "Se han guardado correctamente los cambios.";
$l['hour'] = "Hora";
$l['hours'] = "Horas";
$l['day'] = "Dia";
$l['days'] = "Dias";
$l['month'] = "Mes";
$l['months'] = "Meses";
$l['year'] = "A&ntilde;o";
$l['years'] = "A&ntilde;os";
$l['notdatepast'] = "No puedes ingresar tiempo pasado.";
$l['none'] = "Ninguno";
$l['categoryeditmassive'] = "Selecci&oacute;na las categorias en la que se hara la edici&oacute;n masiva (Presiona Ctrl y da click en los nombres para seleccionar mas de una categoria).";
$l['allcategorys'] = "Todas las categorias";
$l['notcategorieditmass'] = "No has seleccionado una categoria para la edici&oacute;n massiva.";
$l['successmassiveall'] = "Se han editado todas las descargas correctamente.";
$l['massiveeditcategory'] = "Se han editado las descargas de la(s) categoria(s) {1} correctamente.";
//search
$l['searchdownload'] = "Buscar descarga";
$l['namedownloadsearch'] = "Ingresa el nombre completo o una parte del texto a buscar en el nombre del archivo.";
$l['categorysearchtext'] = "Selecciona la categoria donde se va a buscar el texto (Presiona Ctrl y da click en los nombres para seleccionar mas de una categoria).";
$l['notcategorysearch'] = "No has seleccionado una categoria para buscar el texto.";
$l['nottextsearch'] = "No has ingresado ningun texto para buscar.";
$l['emptysearchdownloads'] = "No se encontro ninguna descarga con el texto <strong>'{1}'</strong>.";
$l['searchallcategorys'] = "Estas buscando en todas las categorias.";
$l['searchcategorysby'] = "Estas buscando en la(s) categoria(s): {1}.";

/*************     Templates.php     *******************/
/*******************************************************/
$l['nametemmplates'] = "Nombre de plantillas";
$l['editemplate'] = "Edici&oacute;n Completa";
$l['revertoriginal'] = "Volver al Original";
$l['notexisttemplate'] = "No existe la plantilla que tratas de editar.";
$l['edittemplate'] = "Editar Plantilla";
$l['nametemplate'] = "Nombre de la Plantilla";
$l['nametemplatedes'] = "Nombre de la Plantilla. Este nombre no puede ser modificado porque es unico.";
$l['settemplates'] = "Set de Plantillas";
$l['settemplatesdes'] = "No se puede guardar en otro set de plantillas. Unicamente puede estar en el grupo de plantillas mostrado.";
$l['saveandcontinuedit'] = "Guardar y Continuar Editando";
$l['saveandexit'] = "Guardar y Volver a la Lista";
$l['successtemplatesave'] = "La plantilla seleccionada se ha guardado correctamente.";
$l['invalidtemplate'] = "La plantilla que tratas de volver original no es valida.";
$l['templaterevertsuccess'] = "La plantilla se a revertido correctamente.";

/***************     Validate.php     *****************/
/******************************************************/
$l['validatedownloads'] = "Validar Descargas";
$l['author'] = "Creador";
$l['viewdetails'] = "Ver Detalles";
$l['validate'] = "Validar";
$l['viewimages'] = "Ver Imagenes";
$l['viewlinks'] = "Ver Enlaces";
$l['emptytabledownloadsvalidate'] = "No hay ninguna descarga por validar.";
$l['successvalidate'] = "Has validado correctamente la descarga {1}.";
$l['back'] = "Regresar";
$l['emptyimagesview'] = "No hay ninguna imagen en esta descarga.";
$l['emptylinksview'] = "No hay ningun enlace en esta descarga.";
?>
