<!DOCTYPE HTML>
<!-- le navigateur utilisera les règles d'écriture de la DTD selon le standard W3C -->
<html lang="fr">
	<head>
		<!-- titre de la page -->
		<title>Les Frères de Jésus-Serviteur</title>
		<!-- type d'encodage de la page -->
		<meta charset="utf-8" />
		<!-- taille et échelle de la page -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0 ">
		<!-- liens avec les fichiers css de bootstrap -->
		<link rel="stylesheet" href="include/style.css">
		<script type="text/javascript" src="../tiny_mce/tiny_mce.js"></script>
		<script type="text/javascript" src="js/emotions.js"></script>
	<script type="text/javascript">
		tinyMCE.init({
			// type de mode
			mode : "exact",
			// id ou class, des textareas
			elements : "texte",
			// en mode avancé, cela permet de choisir les plugins
			theme : "advanced",
			// liste des plugins
			plugins : "autolink,lists,pagebreak,style,layer,table,save,advhr,advimage,advlink,emotions,iespell,inlinepopups,insertdatetime,preview,media,searchreplace,print,contextmenu,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking,xhtmlxtras,template,wordcount,advlist,autosave,visualblocks",

			// les outils à afficher
			theme_advanced_buttons1 : "save,newdocument,|,bold,italic,underline,strikethrough,|,justifyleft,justifycenter,justifyright,justifyfull,styleselect,formatselect,fontselect,fontsizeselect",
			theme_advanced_buttons2 : "cut,copy,paste,pastetext,pasteword,|,search,replace,|,bullist,numlist,|,outdent,indent,blockquote,|,undo,redo,|,link,unlink,anchor,image,cleanup,help,code,|,insertdate,inserttime,preview,|,forecolor,backcolor",
			theme_advanced_buttons3 : "tablecontrols,|,hr,removeformat,visualaid,|,sub,sup,|,charmap,emotions,iespell,media,advhr,|,print,|,ltr,rtl,|,fullscreen",
			theme_advanced_buttons4 : "insertlayer,moveforward,movebackward,absolute,|,styleprops,|,cite,abbr,acronym,del,ins,attribs,|,visualchars,nonbreaking,template,pagebreak,restoredraft,visualblocks",

			// emplacement de la toolbar
			theme_advanced_toolbar_location : "top",
			// alignement de la toolbar
			theme_advanced_toolbar_align : "left",
			// positionnement de la barre de statut
			theme_advanced_statusbar_location : "bottom",
			// permet de redimensionner la zone de texte
			theme_advanced_resizing : true,

			// chemin vers le fichier css
			content_css : " ./design-tiny.css,",
			// taille disponible
			theme_advanced_font_sizes: "10px,11px,12px,13px,14px,15px,16px,17px,18px,19px,20px,21px,22px,23px,24px,25px",
			// couleur disponible dans la palette de couleur
			theme_advanced_text_colors : "33FFFF, 007fff, ff7f00",
			// balise html disponible
			theme_advanced_blockformats : "h1, h2,h3,h4,h5,h6",
			// class disponible
			theme_advanced_styles : "Tableau=textTab;TableauSansCadre=textTabSansCadre;",
			// possibilité de définir les class et leurs styles directement avec le code suivant
			/*
			style_formats : [
				{title : 'Bold text', inline : 'b'},
				{title : 'Red text', inline : 'span', styles : {color : '#ff0000'}},
				{title : 'Red header', block : 'h1', styles : {color : '#ff0000'}},
				{title : 'Example 1', inline : 'span', classes : 'example1'},
				{title : 'Example 2', inline : 'span', classes : 'example2'},
				{title : 'Table styles'},
				{title : 'Table row 1', selector : 'tr', classes : 'tablerow1'}
			],
			*/
		});
	</script>
	</head>

    <!-- corps du document -->
	<body>
	<section>
	<section>
	<?php
		include ("include/menu.html");
	?>

	<!-- Bannière Bienvenue -->
    <!-- le texte sera centré -->
	<div class="text-center" class="page-header">
		<h1>Présentation de la communauté</h1>
	</div>

		<td>

		<!-- la balise <br> unique permet le passage à la ligne du texte -->
		<p>La communauté à été créée en 1997</p>
		<p>Les frères Marc et Emmanuel ont rejoint le frère Christian suite à cette création</p>
		</td>
		</r>
		</table>
	</div>
	<div id=contenu>
		<?php include("include/_inc_parametres.php");
			  include("include/_inc_connexion.php");
			  include("include/dateFrancais.php");

			//	on récupère toutes les lignes de la vue
			$resultat = $cnx->query("SELECT * FROM vueNews LIMIT 5");
			//le résultat est récupéré sous forme d'objet
			//$resultat->setFetchMode(PDO::FETCH_OBJ);

			?>

	<!-- pied de page avec lien feuille de style-->
	<p id="footer">- Frères de Jésus Serviteur - <a href = "admin/"> Administration</p>
	</section>
	</section>

	<!-- Obligatoirement avant la balise de fermeture de l'élément body  -->
	</body>
</html>
