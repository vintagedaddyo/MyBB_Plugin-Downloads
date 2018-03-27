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
 * Plugin Version: 2.0.3
 * 
 */
 
$l['downloads'] = "Téléchargements";
<<<<<<< HEAD
<<<<<<< HEAD
$l['download'] = "Télécharger";
$l['editdownloads'] = "Modifier les téléchargements";
$l['edit'] = "modifier";
$l['delete'] = "Effacer";
$l['editlinks'] = "Modifier les liens";
$l['editimages'] = "Modifier les images";
$l['deleteimages'] = "Supprimer les images";
$l['save'] = "sauvegarder";
$l['saveimages'] = "Enregistrer des images";
$l['savelinks'] = "Enregistre les liens";
$l['reset'] = "Réinitialiser";
$l['notpostcode'] = "Le code de vérification ne correspond pas.";
$l['manage'] = "Ensemble";
=======
=======
>>>>>>> 7be5c303ef8dc86ef6d9d884be60906c288cda03
$l['download'] = "Download";
$l['editdownloads'] = "Edit Downloads";
$l['edit'] = "Edit";
$l['delete'] = "Delete";
$l['editlinks'] = "Edit links";
$l['editimages'] = "Edit images";
$l['deleteimages'] = "Delete images";
$l['save'] = "Save";
$l['saveimages'] = "Save Images";
$l['savelinks'] = "Saves links";
$l['reset'] = "Reset";
$l['notpostcode'] = "The verification code does not match.";
$l['manage'] = "Set";
<<<<<<< HEAD
>>>>>>> 7be5c303ef8dc86ef6d9d884be60906c288cda03
=======
>>>>>>> 7be5c303ef8dc86ef6d9d884be60906c288cda03

/****************   downloads.php  **************/
/************************************************/

<<<<<<< HEAD
<<<<<<< HEAD
$l['namearchive'] = "Nom du fichier";
$l['images'] = "Nom du fichier";
$l['active'] = "actif";
$l['orden'] = "Commande";
$l['options'] = "Options";
$l['activada'] = "Sur";
$l['activar'] = "Activer";
$l['activado'] = "Activé";
$l['desactivado'] = "De";
$l['desactivar'] = "Désactiver";
$l['desactivada'] = "De";
$l['deletepop'] = "Voulez-vous éliminer le téléchargement {1}.";
$l['emptytabledownloads'] = "Aucun téléchargement";

$l['tab_down1_des'] = "Les fichiers de la liste sont affichés pour téléchargement dans la catégorie.<br />Pour activer/désactiver un fichier, cliquez simplement sur l'image de la cellule active. Les fichiers ne seront pas affichés sur la page de téléchargement.";
$l['tab_down2_des'] = "Remplissez tous les champs correctement pour vous demander.<br />À la fin, vous pouvez entrer des images dans ce fichier. La page sera affichée automatiquement.";

//delete download
$l['deletesuccessdownload'] = "Vous avez supprimé le téléchargement avec succès {1}.";

//edit downloads and new downloads
$l['newarchive'] = "Nouveau fichier";
$l['name'] = "prénom";
$l['name_des'] = "Entrez le nom du fichier à télécharger.";
$l['shortdescription'] = "Brève description du fichier.";
$l['shortdescriptiondes'] = "Entrez une brève description du fichier pour l'afficher dans la liste de téléchargement.";
$l['description'] = "La description";
$l['descriptiondes'] = "Entrez une description du fichier à télécharger.<br /><b> Si le HTML est.</b>";
$l['portada'] = "Titre de page";
$l['portadades'] = "Entrez le chemin d'image où ce fichier ou utilisez l'URL d'une image d'un serveur";
$l['comments'] = "commentaires";
$l['commentsdes'] = "Vous pouvez commenter ce fichier";
$l['urlarchive'] = "Liens du fichier";
$l['urlarchivedes'] = "Entrez le nombre de liens qui prendront le fichier à télécharger.";
$l['ordendes'] = "Entrez l'ordre dans lequel ils montrent cela avec les autres fichiers.";
$l['activedes'] = "Ce téléchargement est actif pour tous les utilisateurs";
$l['imagesdesnewarchive'] = "Entrez le nombre d'images à télécharger. (Maximum 10 images).";
$l['groupsuser'] = "Groupes d'utilisateurs";
$l['groupsuserdes'] = "Sélectionnez des groupes d'utilisateurs <b>NON</ b> peut voir ce téléchargement.";
$l['categorysdesnew'] = "Select the category in this download will be.";
$l['namearchshort'] = "Le nom du fichier est trop court.";
$l['desarchshort'] = "La description du fichier est trop courte.";
$l['desarchshortdesc'] = "La courte description du fichier doit contenir plus de caractères.";
$l['portadaempty'] = "Vous devez entrer une page de titre pour le fichier.";
$l['urlarchshort'] = "Vous devez entrer au moins un lien du fichier.";
$l['editarchivesuccess'] = "Le téléchargement a été modifié avec succès.";
$l['mosttenimages'] = "Vous pouvez entrer jusqu'à 10 images dans le téléchargement.";
$l['archivesave'] = "Le fichier a été enregistré avec succès.";
$l['archsave_imagesnew'] = "Le fichier a été ajouté avec succès. Ajouter des images à ce fichier.";
$l['notcategoryselect'] = "Vous n'avez sélectionné aucune catégorie pour ce téléchargement.";

//activate archive
$l['deletdownloadssuccess'] = "Tu as {1} Téléchargement réussi {2}.";

//edit images and links
$l['shortpathimg'] = "Le chemin de l'image {1} est trop court.";
$l['shortpathlink'] = "L'adresse du lien {1} est trop court.";
$l['editedlinks'] = "Les liens ont été édités correctement.";
$l['editedimages'] = "Les images ont été éditées correctement.";
$l['emptyimagesedit'] = "Aucune image pour l'édition.";
$l['emptylinksedit'] = "Aucun lien à modifier.";
$l['imgsofdownload'] = "Images du téléchargement {1}.";
$l['linksofdownload'] = "Liens de téléchargement {1}.";
$l['imagenumer'] = "Image {1}";
$l['linknumber'] = "Lien {1}";
$l['imagenumerdes'] = "Entrez le chemin de l'image {1}. De la racine de votre forum ou des images de n'importe quel serveur.";
$l['linknumerdes'] = "Entrer le lien {1} fichier téléchargeable.";
$l['enlace'] = "Lien:";
$l['namelink'] = "Name:";
$l['linknamelinkshort'] = "Le nom du lien {1} est trop court.";
$l['urlnameshort'] = "L'adresse du lien {1} est trop court.";
$l['urlimageshort'] = "Le chemin de l'image {1} est trop court.";

//delete images
$l['imagesdeletesuccess'] = "Les images ont été supprimées avec succès.";

//add images
$l['imagesagregesuccess'] = "Les images ont été ajoutées avec succès.";
$l['linksagregesuccess'] = "Les liens ont été ajoutés avec succès.";
$l['notselectedarchive'] = "Vous n'avez sélectionné aucun fichier pour télécharger des images.";
$l['imagesof'] = "Images de {1}.";
$l['linksof'] = "Liens de {1}.";
=======
=======
>>>>>>> 7be5c303ef8dc86ef6d9d884be60906c288cda03
$l['namearchive'] = "Name of file";
$l['images'] = "Images";
$l['active'] = "Active";
$l['orden'] = "Order";
$l['options'] = "Options";
$l['activada'] = "On";
$l['activar'] = "Activate";
$l['activado'] = "Activated";
$l['desactivado'] = "Off";
$l['desactivar'] = "Deactivate";
$l['desactivada'] = "Off";
$l['deletepop'] = "Want to eliminate the download {1}.";
$l['emptytabledownloads'] = "No downloads.";

$l['tab_down1_des'] = "The files in the list are shown for download into the category.<br />To activate/deactivate a file just click on the image of the active cell. The files will not show off on the download page.";
$l['tab_down2_des'] = "Fill in all fields correctly to ask you.<br />At the end you can enter images to this file. The page will be displayed automatically.";

//delete download
$l['deletesuccessdownload'] = "You have successfully removed the download {1}.";

//edit downloads and new downloads
$l['newarchive'] = "New File";
$l['name'] = "Name";
$l['name_des'] = "Enter the file name to download.";
$l['shortdescription'] = "Short description of the file.";
$l['shortdescriptiondes'] = "Enter a short description of the file to display it on the download list.";
$l['description'] = "Description";
$l['descriptiondes'] = "Enter a description of the file to download.<br /><b> If HTML is.</b>";
$l['portada'] = "Title page";
$l['portadades'] = "Enter image path where this file or use the url of an image from a server";
$l['comments'] = "Comments";
$l['commentsdes'] = "You can comment on this file";
$l['urlarchive'] = "Links of the file";
$l['urlarchivedes'] = "Enter the number of links that will take the file to download.";
$l['ordendes'] = "Enter the order in which they show this with the other files.";
$l['activedes'] = "This download is active for all users";
$l['imagesdesnewarchive'] = "Enter the number of images to upload. (Maximum 10 images).";
$l['groupsuser'] = "User groups";
$l['groupsuserdes'] = "Select groups of users that <b>NO</ b> can see this download.";
$l['categorysdesnew'] = "Select the category in this download will be.";
$l['namearchshort'] = "The file name is too short.";
$l['desarchshort'] = "The description of the file is too short.";
$l['desarchshortdesc'] = "The short description of the file should contain more characters.";
$l['portadaempty'] = "You must enter a title page for the file.";
$l['urlarchshort'] = "You must enter at least one link of the file.";
$l['editarchivesuccess'] = "The download has been successfully edited.";
$l['mosttenimages'] = "You can enter up to 10 images in the download.";
$l['archivesave'] = "The file has been saved successfully.";
$l['archsave_imagesnew'] = "The file has been successfully added. Add images to this file.";
$l['notcategoryselect'] = "You have not selected any category for this download.";

//activate archive
$l['deletdownloadssuccess'] = "You have {1} successfully download {2}.";

//edit images and links
$l['shortpathimg'] = "The image path {1} is too short.";
$l['shortpathlink'] = "The link address {1} is too short.";
$l['editedlinks'] = "The links have been edited correctly.";
$l['editedimages'] = "The images have been edited correctly.";
$l['emptyimagesedit'] = "No images for editing.";
$l['emptylinksedit'] = "No links to edit.";
$l['imgsofdownload'] = "Images of the download {1}.";
$l['linksofdownload'] = "Download links {1}.";
$l['imagenumer'] = "Image {1}";
$l['linknumber'] = "Link {1}";
$l['imagenumerdes'] = "Enter image path {1}. From the root of your forum or images from any server.";
$l['linknumerdes'] = "Enter link {1} downloadable file.";
$l['enlace'] = "Link:";
$l['namelink'] = "Name:";
$l['linknamelinkshort'] = "The link name {1} is too short.";
$l['urlnameshort'] = "The link address {1} is too short.";
$l['urlimageshort'] = "The image path {1} is too short.";

//delete images
$l['imagesdeletesuccess'] = "The images were successfully removed.";

//add images
$l['imagesagregesuccess'] = "The images have been added successfully.";
$l['linksagregesuccess'] = "The links have been added successfully.";
$l['notselectedarchive'] = "You have not selected any files to upload images.";
$l['imagesof'] = "Images of {1}.";
$l['linksof'] = "Links of {1}.";
<<<<<<< HEAD
>>>>>>> 7be5c303ef8dc86ef6d9d884be60906c288cda03
=======
>>>>>>> 7be5c303ef8dc86ef6d9d884be60906c288cda03



/*************     Category.php     ***************/
/**************************************************/
<<<<<<< HEAD
<<<<<<< HEAD
$l['categorys'] = "Catégories";
$l['category'] = "Catégorie";
$l['ficon'] = "Ficon";
$l['namecategory'] = "Nom de la catégorie";
$l['emptycategoritable'] = "Il n'y a pas de catégorie.";
$l['deletepopupcategorys'] = "Voulez-vous supprimer la catégorie {1}\\NVa également supprimer les fichiers dans cette catégorie, les images et les commentaires.";
$l['tabcategory1'] = "Les catégories créées sont affichées dans l'ordre croissant. Si une catégorie est désactivée, cela sera également le cas.";
$l['tabcategory2'] = "Remplissez toutes les données que vous êtes invité à enregistrer la catégorie. <br /> Une fois terminé, cliquez sur Enregistrer pour enregistrer la catégorie.";

//new category
$l['newcategory'] = "Nouvelle catégorie";
$l['namedescat'] = "Entrez le nom de la catégorie.";
$l['descdescat'] = "Entrez une description de la catégorie.";
$l['ordendescat'] = "Entrez l'ordre dans lequel cette catégorie sera affichée avec l'autre.";
$l['activedescat'] = "Cette catégorie est active pour tous les utilisateurs Si elle est désactivée, les fichiers qu'elle contient sont également désactivés.";
$l['namecatshort'] = "Le nom de la catégorie est trop court.";
$l['descatshort'] = "La description de la catégorie est très courte.";
$l['ordenempty'] = "La commande ne peut pas être vide.";
$l['successsavecat'] = "La catégorie est enregistrée avec succès dans.";
$l['successactivatecat'] = "Tu as {1} catégorie avec succès {2}.";
$l['deletecategoryentri'] = "Vous avez supprimé avec succès la catégorie {1}.";
$l['ficon_des'] = "Sélectionnez l'image de votre ordinateur que vous allez donner à la catégorie.";
$l['errorcopyimage'] = "Échec de la copie de l'image";
$l['extnotpermit'] = "L'extension de l'image n'est pas autorisée";
$l['errorloadimage'] = "Erreur de chargement de l'image";
$l['ficonused'] = "Réel ficon";
$l['ficonusednotremplace'] = "Si vous voulez conserver le ficon actuel, laissez l'espace vide ci-dessous.";
=======
=======
>>>>>>> 7be5c303ef8dc86ef6d9d884be60906c288cda03
$l['categorys'] = "Categories";
$l['category'] = "Category";
$l['ficon'] = "Ficon";
$l['namecategory'] = "Name of the category";
$l['emptycategoritable'] = "There is no category.";
$l['deletepopupcategorys'] = "Want to delete the category {1}\\NWill also remove the files in this category, images and comments.";
$l['tabcategory1'] = "Created categories are displayed in ascending order. If a category is off discharges within this will be too.";
$l['tabcategory2'] = "Fill out all the data you are asked to save the category. <br /> Once finished click on Save to save the category is.";

//new category
$l['newcategory'] = "New Category";
$l['namedescat'] = "Enter the name of the category.";
$l['descdescat'] = "Enter a description of the category.";
$l['ordendescat'] = "Enter the order in which this category will be displayed with the other.";
$l['activedescat'] = "This category is active for all users If this off the files within it are disabled also.";
$l['namecatshort'] = "The name of the category is too short.";
$l['descatshort'] = "The description of the category is very short.";
$l['ordenempty'] = "The order can not be empty.";
$l['successsavecat'] = "The category is saved successfully to.";
$l['successactivatecat'] = "You have {1} successfully category {2}.";
$l['deletecategoryentri'] = "You have successfully deleted the category {1}.";
$l['ficon_des'] = "Select the image from your computer that you will give to the category.";
$l['errorcopyimage'] = "Failed to copy the image";
$l['extnotpermit'] = "The extention of the image is not permitted";
$l['errorloadimage'] = "Error loading image";
$l['ficonused'] = "Actual ficon";
$l['ficonusednotremplace'] = "If you want to keep the current ficon leave the blank space below.";
<<<<<<< HEAD
>>>>>>> 7be5c303ef8dc86ef6d9d884be60906c288cda03
=======
>>>>>>> 7be5c303ef8dc86ef6d9d884be60906c288cda03

/**************    Options.php    ***************/
/************************************************/
$l['timeonline'] = "Uptime";
<<<<<<< HEAD
<<<<<<< HEAD
$l['editmassive'] = "Édition de masse";
$l['search'] = "Chercher";
$l['taboptions1'] = "Vous pouvez trouver toutes les pièces jointes avec des options supplémentaires. Ces options sont pour voir les téléchargements. Vous pouvez le configurer pour avoir le nombre de messages/sujets/réputation/uptime peut voir le téléchargement, si vous le manquez, vous ne verrez pas le téléchargement.";
$l['taboptions2'] = "Entrez les données pour chaque champ de texte.";
$l['taboptions3'] = "Entrez le texte pour rechercher le nom des téléchargements ou le nom complet du fichier à afficher.";

//edit
$l['threadsform'] = "Sujets obligatoires";
$l['threadsformdes'] = "Entrez le nombre de problèmes qui doivent être créés que l'utilisateur doit avoir.";
$l['postsform'] = "Posts obligatoires";
$l['postsformdes'] = "Entrez le nombre de messages qui ont besoin de l'utilisateur.";
$l['reputationform'] = "Réputation requise";
$l['reputationformdes'] = "Entrez le nombre de réputation que l'utilisateur doit avoir.";
$l['timeonline'] = "Uptime";
$l['timeonlineform'] = "Durée de disponibilité requise";
$l['timeonlinedes'] = "Entrez le nombre jamais nécessaire pour l'utilisateur.";
$l['successoptionsmore'] = "Ils ont sauvé avec succès les changements.";
$l['hour'] = "Heure";
$l['hours'] = "Heures";
$l['day'] = "journée";
$l['days'] = "Journées";
$l['month'] = "Mois";
$l['months'] = "Mois";
$l['year'] = "An";
$l['years'] = "Années";
$l['notdatepast'] = "Vous ne pouvez pas entrer la dernière fois.";
$l['none'] = "Aucun";
$l['categoryeditmassive'] = "Sélectionnez les catégories dans lesquelles l'édition groupée sera effectuée (Appuyez sur Ctrl et cliquez sur les noms pour sélectionner plus d'une catégorie).";
$l['allcategorys'] = "Toutes catégories";
$l['notcategorieditmass'] = "Vous n'avez pas sélectionné de catégorie pour l'édition Massiva.";
$l['successmassiveall'] = "Ont été correctement édité tous les téléchargements.";
$l['massiveeditcategory'] = "Les rejets ont été publiés dans la(les) catégorie(s) {1} avec succès.";
//search
$l['searchdownload'] = "Télécharger le téléchargement";
$l['namedownloadsearch'] = "Entrez le nom complet ou une partie du texte pour rechercher le nom de fichier.";
$l['categorysearchtext'] = "Sélectionnez la catégorie où vous trouverez le texte (Appuyez sur Ctrl et cliquez sur les noms pour sélectionner plus d'une catégorie).";
$l['notcategorysearch'] = "Vous n'avez pas sélectionné une catégorie pour rechercher le texte.";
$l['nottextsearch'] = "Vous n'êtes pas connecté de texte à rechercher.";
$l['emptysearchdownloads'] = "Impossible de trouver des téléchargements avec du texte <strong>'{1}'</strong>.";
$l['searchallcategorys'] = "Cherchez-vous dans toutes les catégories.";
$l['searchcategorysby'] = "Recherchez-vous dans la(les) catégorie(s): {1}.";

/*************     Templates.php     *******************/
/*******************************************************/
$l['nametemmplates'] = "Modèles de noms";
$l['editemplate'] = "Édition complète";
$l['revertoriginal'] = "Retourner à l'original";
$l['notexisttemplate'] = "Il n'y a aucun modèle que vous essayez d'éditer.";
$l['edittemplate'] = "Modifier le modèle";
$l['nametemplate'] = "Nom du modèle";
$l['nametemplatedes'] = "Modèle de nom. Ce nom ne peut pas être modifié car il est unique.";
$l['settemplates'] = "Ensemble de modèles";
$l['settemplatesdes'] = "Impossible d'enregistrer dans un autre jeu de modèles. Il ne peut être que dans le groupe de modèles affiché.";
$l['saveandcontinuedit'] = "Enregistrer et continuer l'édition";
$l['saveandexit'] = "Enregistrer et retourner à la liste";
$l['successtemplatesave'] = "Le modèle sélectionné est enregistré correctement.";
$l['invalidtemplate'] = "Le modèle que vous essayez de retourner à l'origine n'est pas valide.";
$l['templaterevertsuccess'] = "Le modèle doit inverser correctement.";

/***************     Validate.php     *****************/
/******************************************************/
$l['validatedownloads'] = "Valider Télécharger";
$l['author'] = "Créateur";
$l['viewdetails'] = "Voir les détails";
$l['validate'] = "Valider";
$l['viewimages'] = "Voir les images";
$l['viewlinks'] = "Voir les liens";
$l['emptytabledownloadsvalidate'] = "Aucun téléchargement à valider.";
$l['successvalidate'] = "Vous avez validé le téléchargement avec succès {1}.";
$l['back'] = "Revenir";
$l['emptyimagesview'] = "Aucune image dans ce téléchargement.";
$l['emptylinksview'] = "Il n'y a pas de lien vers ce téléchargement.";
=======
=======
>>>>>>> 7be5c303ef8dc86ef6d9d884be60906c288cda03
$l['editmassive'] = "Mass edition";
$l['search'] = "Search";
$l['taboptions1'] = "You can find all attachments with extra options. These options are to see the downloads. You can configure it to have both number of posts/topics/reputation/uptime can see the download, if you miss it you will not see the download.";
$l['taboptions2'] = "Enter the data for each text field.";
$l['taboptions3'] = "Enter the text to search for the name of the downloads or the full name of the file to display.";

//edit
$l['threadsform'] = "Required topics";
$l['threadsformdes'] = "Enter the number of issues that must be created that the user must have.";
$l['postsform'] = "Required posts";
$l['postsformdes'] = "Enter the number of posts that need the user.";
$l['reputationform'] = "Required reputation.";
$l['reputationformdes'] = "Enter the number of reputation that the user must have.";
$l['timeonline'] = "Uptime";
$l['timeonlineform'] = "Required uptime";
$l['timeonlinedes'] = "Enter the number ever on user need.";
$l['successoptionsmore'] = "They have successfully saved the changes.";
$l['hour'] = "Hour";
$l['hours'] = "Hours";
$l['day'] = "Day";
$l['days'] = "Daya";
$l['month'] = "Month";
$l['months'] = "Months";
$l['year'] = "Year";
$l['years'] = "Years";
$l['notdatepast'] = "You can not enter last time.";
$l['none'] = "None";
$l['categoryeditmassive'] = "Select the categories in which it will do bulk editing (Press Ctrl and click on the names to select more than one category).";
$l['allcategorys'] = "All categories";
$l['notcategorieditmass'] = "You have not selected a category for editing Massiva.";
$l['successmassiveall'] = "Have been correctly edited all downloads.";
$l['massiveeditcategory'] = "Discharges have been published in the(s) category(s) {1} successfully.";
//search
$l['searchdownload'] = "Search download";
$l['namedownloadsearch'] = "Enter the full name or part of the text to search the file name.";
$l['categorysearchtext'] = "Select the category where you will find the text (Press Ctrl and click on the names to select more than one category).";
$l['notcategorysearch'] = "You have not selected a category to search the text.";
$l['nottextsearch'] = "You're not logged any text to search.";
$l['emptysearchdownloads'] = "Not found any downloads with text <strong>'{1}'</strong>.";
$l['searchallcategorys'] = "Are you looking for in all categories.";
$l['searchcategorysby'] = "Are you looking for in the(s) category(s): {1}.";

/*************     Templates.php     *******************/
/*******************************************************/
$l['nametemmplates'] = "Name templates";
$l['editemplate'] = "Complete edition";
$l['revertoriginal'] = "Return to original";
$l['notexisttemplate'] = "There is no template that you try to edit.";
$l['edittemplate'] = "Edit Template";
$l['nametemplate'] = "Name of template";
$l['nametemplatedes'] = "Template of Name. This name can not be modified because it is unique.";
$l['settemplates'] = "Set of templates";
$l['settemplatesdes'] = "Can not save in another set of templates. It can only be in the template group shown.";
$l['saveandcontinuedit'] = "Save and Continue Editing";
$l['saveandexit'] = "Save and Return to List";
$l['successtemplatesave'] = "The selected template is saved correctly.";
$l['invalidtemplate'] = "The template you try original return is not valid.";
$l['templaterevertsuccess'] = "The template is to reverse properly.";

/***************     Validate.php     *****************/
/******************************************************/
$l['validatedownloads'] = "Validate Download";
$l['author'] = "Creator";
$l['viewdetails'] = "View details";
$l['validate'] = "Validate";
$l['viewimages'] = "View images";
$l['viewlinks'] = "View links";
$l['emptytabledownloadsvalidate'] = "No downloads to validate.";
$l['successvalidate'] = "You have successfully validated the download {1}.";
$l['back'] = "Return";
$l['emptyimagesview'] = "No images in this download.";
$l['emptylinksview'] = "There is no link to this download.";
<<<<<<< HEAD
>>>>>>> 7be5c303ef8dc86ef6d9d884be60906c288cda03
=======
>>>>>>> 7be5c303ef8dc86ef6d9d884be60906c288cda03
?>
