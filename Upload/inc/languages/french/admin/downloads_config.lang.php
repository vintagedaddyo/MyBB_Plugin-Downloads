<?php
/*
 * MyBB: Downloads
 *
 * File: downloads_config.lang.php
 * 
 * Authors: Vintagedaddyo, Edson Ordaz
 *
 * MyBB Version: 1.8
 *
 * Plugin Version: 2.0.3
 * 
 */

// plugin_info

$l['downloads_plugin_Name'] = 'Téléchargements';
$l['downloads_plugin_Desc'] = 'Téléchargements de fichiers';
$l['downloads_plugin_Web'] = 'http://community.mybb.com/user-6029.html';
$l['downloads_plugin_Auth'] = 'Edson Ordaz & updated by Vintagedaddyo';
$l['downloads_plugin_AuthSite'] = 'http://community.mybb.com/user-6029.html';
$l['downloads_plugin_Ver'] = '2.0.3';
$l['downloads_plugin_GUID'] = '';
$l['downloads_plugin_Compat'] = '18*';
 
$l['downloads_plugin'] = "Téléchargements";
$l['downloads_plugin_des'] = "Téléchargements de fichiers.";

$l['settingsdownloads'] = "Configuration";

//general
$l['general'] = "Général";
$l['activedownloads'] = "Activer les téléchargements";
$l['activedownloadsdes'] = "Sélectionnez si le plugin sera actif pour afficher les téléchargements.";
$l['createdownsusers'] = "Users can create downloads";
$l['createdownsusersdes'] = "Indiquez si les utilisateurs peuvent créer des téléchargements.";
$l['validatedownloads'] = "Valider les téléchargements";
$l['validatedownloadsdes'] = "Choisissez de valider les téléchargements créés par l utilisateur ou de s afficher automatiquement";
$l['groupssenddowns'] = "Les groupes peuvent créer des téléchargements";
$l['groupssenddownsdes'] = "Sélectionnez des groupes d utilisateurs qui, s ils peuvent créer des téléchargements. (seulement si activé).";
$l['paginationcategorys'] = "Catégories par page";
$l['paginationcategorysdes'] = "Entrez le nombre de catégories à afficher par page.";
$l['paginationarchive'] = "Fichiers par page";
$l['paginationarchivedes'] = "Entrez le nombre de fichiers à afficher par page dans les catégories.";

//comments
$l['canhtmlcomments'] = "Autoriser HTML";
$l['canhtmlcommentsdes'] = "Ils peuvent entrer html dans les commentaires";
$l['canbbcodecomments'] = "Autoriser le BBCode";
$l['canbbcodecommentsdes'] = "Ils peuvent entrer BBcode dans les commentaires";
$l['cansmiliescomments'] = "Autoriser les smileys";
$l['cansmiliescommentsdes'] = "Ils peuvent entrer des smileys dans les commentaires";
$l['canimgcomments'] = "Autoriser les images";
$l['canimgcommentsdes'] = "Ils peuvent entrer des images dans les commentaires";
$l['canbadwordcomments'] = "Permettre les mauvais mots";
$l['canbadwordcommentsdes'] = "Ils peuvent entrer de mauvais mots (Pour définir voit mauvais mot aller <a href='index.php?module=config-badwords' />Filtre de mots</a>)";
$l['showbbcodeeditor'] = "Afficher l éditeur BBCode";
$l['showbbcodeeditordes'] = "Afficher les boutons de l éditeur pour le BBCode";

//extras
$l['extras'] = "Extras";
$l['counbyt'] = "Compter comme sujets et messages";
$l['counbytdes'] = "Activez cette option pour configurer les téléchargements rejoindre le compteur des discussions et des messages.";
$l['downspermitid'] = "Téléchargements créés autorisés";
$l['downspermitiddes'] = "Entrez le nombre de téléchargements autorisés à créer.";
$l['threadsrequer'] = "Threads requis";
$l['threadsrequerdes'] = "Entrez le nombre de threads requis pour créer des téléchargements.";
$l['postrequest'] = "Posts obligatoires";
$l['postrequestdes'] = "Entrez le nombre de messages requis pour créer le téléchargement.";
$l['reputationrequest'] = "Réputation requise";
$l['reputationrequestdes'] = "Entrez le nombre de réputation requis pour créer des téléchargements.";
$l['timeonlinerequest'] = "Disponibilité requise";
$l['timeonlinerequestdes'] = "Entrez la ligne de temps nécessaire pour créer le téléchargement.";

//images
$l['showportadaincategory'] = "Afficher la page de titre dans la liste de téléchargement";
$l['showportadaincategorydes'] = "Choisissez d afficher ou non l image de couverture pour télécharger la liste des téléchargements.";
$l['maxsizeportadacategory'] = "Page de titre des catégories de taille";
$l['maxsizeportadacategorydes'] = "Entrez la taille des images de la page de titre dans la catégorie UNIQUEMENT si elle est activée pour afficher la couverture de la liste des catégories (séparez-les avec un X).";
$l['sizeportada'] = "Taille maximale de la page de titre";
$l['sizeportadades'] = "Entrez la taille maximale que vous devriez avoir la page de titre pour voir le téléchargement. Si la taille est automatiquement redimensionnée (séparez-les avec un X).";
$l['sizeimages'] = "Taille maximale des images";
$l['sizeimagesdes'] = "entrer la taille maximale qui devrait avoir des photos de toute décharge (si seulement). Si l image est automatiquement redimensionnée (séparez-les avec un X).";

//save settings and errors
$l['successsavesettings'] = "Vous avez enregistré les paramètres avec succès.";
$l['notpaginationcat'] = "Vous pouvez laisser vide le numéro de pagination de la catégorie.";
$l['notpaginationarchive'] = "Vous pouvez laisser vide le nombre de fichiers d'échange.";
?>