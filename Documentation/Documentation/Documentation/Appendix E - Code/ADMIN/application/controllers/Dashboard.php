<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		
		// auth////
		$this->load->library('ion_auth');
		$this->load->library('form_validation');
		$this->form_validation->set_error_delimiters($this->config->item('error_start_delimiter', 'ion_auth'), $this->config->item('error_end_delimiter', 'ion_auth'));

		$this->lang->load('auth');
		$this->load->helper('language');
		//////////////////
		$this->load->database();
		$this->load->helper('url');

		$this->load->library('grocery_CRUD');
		$this->load->library('ion_auth');
		
	}

	public function _example_output($output = null)
	{
		$this->load->view('dashboard',$output);
	}
	
	
	
	
	
	/////////////////////////////////////////////////////////////
	////////////// HOME SLIDER /////////////////////////////////////////
	////////////////////////////////////////////////////////////
	
	public function home_slider()
    {
		
		if (!$this->ion_auth->logged_in())
		{
			redirect('login');
		} else {
		
		
        $crud = new grocery_CRUD();
 	$crud->set_subject('Slider Home');
		
		$crud->required_fields('TITRE','TEXTE','IMAGE','DATE');
		
	/// edit//// 
	$crud->fields('TITRE','IMAGE','TEXTE','DATE');
	//affichage/// 
	$crud->columns('TITRE','IMAGE','DATE');
	 

 
        $crud->set_table('home_slider');
		
		
       
	     

 	$crud->set_field_upload('IMAGE','../assets/content/slider'); 
		
		
 
        $output = $crud->render();
 
        $this->_example_output($output);    
		}
    }
	
	
	
	/////////////////////////////////////////////////////////////
	////////////// HOME SLIDER  AR/////////////////////////////////////////
	////////////////////////////////////////////////////////////
	
	public function home_slider_ar()
    {
		
		if (!$this->ion_auth->logged_in())
		{
			redirect('login');
		} else {
		
		
        $crud = new grocery_CRUD();
 	$crud->set_subject('Slider Home Arabe');
		
		$crud->required_fields('TITRE','TEXTE','IMAGE','DATE');
		
	/// edit//// 
	$crud->fields('TITRE','IMAGE','TEXTE','DATE');
	//affichage/// 
	$crud->columns('TITRE','IMAGE','DATE');
	 

 
        $crud->set_table('home_slider_ar');
		
		
       
	     

 	$crud->set_field_upload('IMAGE','../assets/content_ar/slider'); 
		
		
 
        $output = $crud->render();
 
        $this->_example_output($output);    
		}
    }
	
	/////////////////////////////////////////////////////////////
	////////////// Actualites /////////////////////////////////////////
	////////////////////////////////////////////////////////////
	
	public function actualites()
    {
		
		if (!$this->ion_auth->logged_in())
		{
			redirect('login');
		} else {
		
		
        $crud = new grocery_CRUD();
 	$crud->set_subject('Actualité');
		
		$crud->required_fields('TITRE','IMAGE','TEXTE','DATE');
		
	/// edit//// 
	$crud->fields('TITRE','IMAGE','TEXTE','DATE');
	//affichage/// 
	$crud->columns('TITRE','IMAGE','DATE');
	 

 
        $crud->set_table('actualites');
		
		
	     

 	$crud->set_field_upload('IMAGE','../assets/content/news'); 
		
	
 
        $output = $crud->render();
 
        $this->_example_output($output);    
		}
    }
	
	
	
	/////////////////////////////////////////////////////////////
	////////////// Actualites AR /////////////////////////////////////////
	////////////////////////////////////////////////////////////
	
	public function actualites_ar()
    {
		
		if (!$this->ion_auth->logged_in())
		{
			redirect('login');
		} else {
		
		
        $crud = new grocery_CRUD();
 	$crud->set_subject('Actualité Arabic');
		
		$crud->required_fields('TITRE','IMAGE','TEXTE','DATE');
		
	/// edit//// 
	$crud->fields('TITRE','IMAGE','TEXTE','DATE');
	//affichage/// 
	$crud->columns('TITRE','IMAGE','DATE');
	 

 
        $crud->set_table('actualites_ar');
		
		
	     

 	$crud->set_field_upload('IMAGE','../assets/content_ar/news'); 
		
	
 
        $output = $crud->render();
 
        $this->_example_output($output);    
		}
    }
	
	
	
	
	
	
	/////////////////////////////////////////////////////////////
	////////////// Publications /////////////////////////////////////////
	////////////////////////////////////////////////////////////
	
	public function publications()
    {
		
		if (!$this->ion_auth->logged_in())
		{
			redirect('login');
		} else {
		
		
        $crud = new grocery_CRUD();
 	$crud->set_subject('Publication');
		
		
		$crud->required_fields('TITRE','TEXTE','IMAGE','DATE');
		
	/// edit//// 
	$crud->fields('TITRE','IMAGE','TEXTE','DATE');
	//affichage/// 
	$crud->columns('TITRE','IMAGE','DATE');
	 


 
        $crud->set_table('publications');
		
		$crud->display_as('FILE','fichier');
		
		
	   
	     

 	$crud->set_field_upload('IMAGE','../assets/content/publications'); 
	$crud->set_field_upload('FILE','../assets/content/publications'); 	
		
		
 
        $output = $crud->render();
 
        $this->_example_output($output);    
		}
    }
	
	
	/////////////////////////////////////////////////////////////
	////////////// Publications  AR/////////////////////////////////////////
	////////////////////////////////////////////////////////////
	
	public function publications_ar()
    {
		
		if (!$this->ion_auth->logged_in())
		{
			redirect('login');
		} else {
		
		
        $crud = new grocery_CRUD();
 	$crud->set_subject('Publication Arabic');
		
		
		$crud->required_fields('TITRE','TEXTE','IMAGE','DATE');
		
	/// edit//// 
	$crud->fields('TITRE','IMAGE','TEXTE','DATE');
	//affichage/// 
	$crud->columns('TITRE','IMAGE','DATE');
	 


 
        $crud->set_table('publications_ar');
		
		$crud->display_as('FILE','fichier');
		
		
	   
	     

 	$crud->set_field_upload('IMAGE','../assets/content_ar/publications'); 
	$crud->set_field_upload('FILE','../assets/content_ar/publications'); 	
		
		
 
        $output = $crud->render();
 
        $this->_example_output($output);    
		}
    }
	
	
	
	
	
	
	/////////////////////////////////////////////////////////////
	////////////// MEDIATHEQUES /////////////////////////////////////////
	////////////////////////////////////////////////////////////
	
	public function medias()
    {
		
		if (!$this->ion_auth->logged_in())
		{
			redirect('login');
		} else {
		
		
        $crud = new grocery_CRUD();
 	$crud->set_subject('media');
		
		
		$crud->required_fields('TITRE','FILE','DATE');
		
	/// edit//// 
	$crud->fields('TITRE','FILE','DATE');
	//affichage/// 
	$crud->columns('TITRE','FILE','DATE');
	 


 
        $crud->set_table('mediatheque');
		
		$crud->display_as('FILE','fichier');
		
		
	   
	     

 	$crud->set_field_upload('FILE','../assets/content/medias'); 
	
		
		
 
        $output = $crud->render();
 
        $this->_example_output($output);    
		}
    }
	
	
	
	
	
	
	
	
	
	
	
	
	
	/////////////////////////////////////////////////////////////
	////////////// DISCOUS /////////////////////////////////////////
	////////////////////////////////////////////////////////////
	
	public function discours()
    {
		
		if (!$this->ion_auth->logged_in())
		{
			redirect('login');
		} else {
		
		
        $crud = new grocery_CRUD();
 	$crud->set_subject('Discour');
		
		
		$crud->required_fields('TITRE','TEXTE','IMAGE','DATE');
		
	/// edit//// 
	$crud->fields('TITRE','IMAGE','TEXTE','DATE');
	//affichage/// 
	$crud->columns('TITRE','IMAGE','DATE');
	 


 
        $crud->set_table('discours');
		
		$crud->display_as('IMAGE','fichier');
		
		
	   
	     

 	$crud->set_field_upload('IMAGE','../assets/content/discours'); 
	
		
		
 
        $output = $crud->render();
 
        $this->_example_output($output);    
		}
    }
	
	
	
	
	
	/////////////////////////////////////////////////////////////
	////////////// DISCOUS AR /////////////////////////////////////////
	////////////////////////////////////////////////////////////
	
	public function discours_ar()
    {
		
		if (!$this->ion_auth->logged_in())
		{
			redirect('login');
		} else {
		
		
        $crud = new grocery_CRUD();
 	$crud->set_subject('Discour Arabic');
		
		
		$crud->required_fields('TITRE','TEXTE','IMAGE','DATE');
		
	/// edit//// 
	$crud->fields('TITRE','IMAGE','TEXTE','DATE');
	//affichage/// 
	$crud->columns('TITRE','IMAGE','DATE');
	 


 
        $crud->set_table('discours_ar');
		
		$crud->display_as('IMAGE','fichier');
		
		
	   
	     

 	$crud->set_field_upload('IMAGE','../assets/content_ar/discours'); 
	
		
		
 
        $output = $crud->render();
 
        $this->_example_output($output);    
		}
    }
	
	
	/////////////////////////////////////////////////////////////
	////////////// EVENEMENTS /////////////////////////////////////////
	////////////////////////////////////////////////////////////
	
	public function events()
    {
		
		if (!$this->ion_auth->logged_in())
		{
			redirect('login');
		} else {
		
		
        $crud = new grocery_CRUD();
 	$crud->set_subject('Evenement');
		
		
		$crud->required_fields('TITRE','PERIODE','TEXTE','FILE','DATE');
		
	/// edit//// 
	$crud->fields('TITRE','PERIODE','TEXTE','FILE','DATE');
	//affichage/// 
	$crud->columns('TITRE','PERIODE','FILE','DATE');
	 


 
        $crud->set_table('evenements');
		
		$crud->display_as('FILE','fichier');
		
		
	   
	     

 	$crud->set_field_upload('FILE','../assets/content/events'); 
	
		
		
 
        $output = $crud->render();
 
        $this->_example_output($output);    
		}
    }
	
	
	
	/////////////////////////////////////////////////////////////
	////////////// EVENEMENTS  AR/////////////////////////////////////////
	////////////////////////////////////////////////////////////
	
	public function events_ar()
    {
		
		if (!$this->ion_auth->logged_in())
		{
			redirect('login');
		} else {
		
		
        $crud = new grocery_CRUD();
 	$crud->set_subject('Evenement Arabic');
		
		
		$crud->required_fields('TITRE','PERIODE','TEXTE','FILE','DATE');
		
	/// edit//// 
	$crud->fields('TITRE','PERIODE','TEXTE','FILE','DATE');
	//affichage/// 
	$crud->columns('TITRE','PERIODE','FILE','DATE');
	 


 
        $crud->set_table('evenements_ar');
		
		$crud->display_as('FILE','fichier');
		
		
	   
	     

 	$crud->set_field_upload('FILE','../assets/content_ar/events'); 
	
		
		
 
        $output = $crud->render();
 
        $this->_example_output($output);    
		}
    }
	
	
	
	/////////////////////////////////////////////////////////////
	////////////// AGENDA DU PRESIDENT /////////////////////////////////////////
	////////////////////////////////////////////////////////////
	
	public function agenda()
    {
		
		if (!$this->ion_auth->logged_in())
		{
			redirect('login');
		} else {
		
		
        $crud = new grocery_CRUD();
 	$crud->set_subject('Agenda');
		
		
		$crud->required_fields('TITRE','PERIODE','TEXTE','FILE','DATE');
		
	/// edit//// 
	$crud->fields('TITRE','PERIODE','TEXTE','FILE','DATE');
	//affichage/// 
	$crud->columns('TITRE','PERIODE','FILE','DATE');
	 


 
        $crud->set_table('agenda');
		
		$crud->display_as('FILE','fichier');
		
		
	   
	     

 	$crud->set_field_upload('FILE','../assets/content/agenda'); 
	
		
		
 
        $output = $crud->render();
 
        $this->_example_output($output);    
		}
    }
	
	
	
	/////////////////////////////////////////////////////////////
	////////////// AGENDA DU PRESIDENT AR /////////////////////////////////////////
	////////////////////////////////////////////////////////////
	
	public function agenda_ar()
    {
		
		if (!$this->ion_auth->logged_in())
		{
			redirect('login');
		} else {
		
		
        $crud = new grocery_CRUD();
 	$crud->set_subject('Agenda Arabic');
		
		
		$crud->required_fields('TITRE','PERIODE','TEXTE','FILE','DATE');
		
	/// edit//// 
	$crud->fields('TITRE','PERIODE','TEXTE','FILE','DATE');
	//affichage/// 
	$crud->columns('TITRE','PERIODE','FILE','DATE');
	 


 
        $crud->set_table('agenda_ar');
		
		$crud->display_as('FILE','fichier');
		
		
	   
	     

 	$crud->set_field_upload('FILE','../assets/content_ar/agenda'); 
	
		
		
 
        $output = $crud->render();
 
        $this->_example_output($output);    
		}
    }
	
	
	
	/////////////////////////////////////////////////////////////
	//////////////PROVINCES /////////////////////////////////////////
	////////////////////////////////////////////////////////////
	
	public function provinces()
    {
		
		if (!$this->ion_auth->logged_in())
		{
			redirect('login');
		} else {
		
		
        $crud = new grocery_CRUD();
 	$crud->set_subject('Province');
		
		
		$crud->required_fields('NOM','NOM_AR');
		
	/// edit//// 
	$crud->fields('NOM','NOM_AR');
	//affichage/// 
	$crud->columns('NOM','NOM_AR');
	 


 
        $crud->set_table('provinces');
		
		//$crud->display_as('FILE','fichier');
		
		
	   
	     

 	$crud->set_field_upload('FILE','../assets/content/agenda'); 
	
		
		
 
        $output = $crud->render();
 
        $this->_example_output($output);    
		}
    }
	
	
	
	/////////////////////////////////////////////////////////////
	//////////////PARTI POLITIQUE /////////////////////////////////////////
	////////////////////////////////////////////////////////////
	
	public function partis()
    {
		
		if (!$this->ion_auth->logged_in())
		{
			redirect('login');
		} else {
		
		
        $crud = new grocery_CRUD();
 	$crud->set_subject('Parti');
		
		
		$crud->required_fields('NOM','NOM_AR','SIGLE','LOGO');
		
	/// edit//// 
	$crud->fields('NOM','SIGLE','NOM_AR','LOGO');
	//affichage/// 
	$crud->columns('NOM','SIGLE','NOM_AR','LOGO');
	 


 
        $crud->set_table('parti');
		
		$crud->display_as('LOGO','Logo');
		
		
	   
	     

 	$crud->set_field_upload('LOGO','../assets/content/elus'); 
	
		
		
 
        $output = $crud->render();
 
        $this->_example_output($output);    
		}
    }
	
	
	/////////////////////////////////////////////////////////////
	//////////////ELUS REGIONAUX /////////////////////////////////////////
	////////////////////////////////////////////////////////////
	
	public function elus()
    {
		
		if (!$this->ion_auth->logged_in())
		{
			redirect('login');
		} else {
		
		
        $crud = new grocery_CRUD();
 	$crud->set_subject('Elu');
		
		
		$crud->required_fields('PROVINCE','PARTI','NOM');
		
	/// edit//// 
	$crud->fields('PROVINCE','PARTI','NOM','NOM_AR','FONCTION','FONCTION_AR','PHOTO');
	//affichage/// 
	$crud->columns('PROVINCE','NOM','PHOTO','NOM_AR');
	 


 
        $crud->set_table('elus');
		
		$crud->display_as('FILE','fichier');
		
		$crud->set_relation('PROVINCE','provinces','NOM',null,'ID ASC');
	    $crud->set_relation('PARTI','parti','SIGLE',null,'ID ASC');


 	$crud->set_field_upload('PHOTO','../assets/content/elus'); 
	
		
		
 
        $output = $crud->render();
 
        $this->_example_output($output);    
		}
    }
	
	
	
	/////////////////////////////////////////////////////////////
	//////////////BUREAU /////////////////////////////////////////
	////////////////////////////////////////////////////////////
	
	public function bureau()
    {
		
		if (!$this->ion_auth->logged_in())
		{
			redirect('login');
		} else {
		
		
        $crud = new grocery_CRUD();
 	$crud->set_subject('Membre');
		
		
		$crud->required_fields('FONCTION','FONCTION_AR','NOM','NOM_AR','PHOTO');
		
	/// edit//// 
	$crud->fields('FONCTION','FONCTION_AR','NOM','NOM_AR','PHOTO');
	//affichage/// 
	$crud->columns('FONCTION','NOM','NOM_AR','PHOTO');
	 


 
        $crud->set_table('bureau');
		
		
		
		


 	$crud->set_field_upload('PHOTO','../assets/content/bureau'); 
	
		
		
 
        $output = $crud->render();
 
        $this->_example_output($output);    
		}
    }
	
	
	
	
	
	
	
	
		
	/////////////////////////////////////////////////////////////
	////////////// ENTREPRISES /////////////////////////////////////////
	////////////////////////////////////////////////////////////
	
	public function entreprises()
    {
		
		if (!$this->ion_auth->logged_in())
		{
			redirect('login');
		} else {
		
	
        $crud = new grocery_CRUD();
 	$crud->set_subject('Entreprises');
		
			$crud->where('VALID','1');
		$crud->required_fields('NOM','LOGO','VALID','TITRE','TITRE_TEMOIGNAGE','TEMOIGAGNE','IMAGE','GALERIE_1','GALERIE_2','GALERIE_3','INTRO');
		
	$crud->fields('NOM','LOGO','CONTACT','TEL','EMAIL','ADRESSE','VILLE','PAYS','DATE','VALID','TITRE','TITRE_TEMOIGNAGE','TEMOIGAGNE','IMAGE','GALERIE_1','GALERIE_2','GALERIE_3','VIDEO','INTRO');
	/// affichage apercu ////
	$crud->columns('NOM','LOGO','DATE');
	 
$crud->order_by('DATE','desc');

 
        $crud->set_table('entreprises');
		
		$crud->display_as('DATE','Date');
		$crud->display_as('IMAGE','IMAGE TEMOIGAGNE');
		$crud->display_as('INTRO','DESCRIPTION');
		$crud->display_as('TITRE_TEMOIGNAGE','TITRE TEMOIGAGNE');
		
		
       
	     

 	$crud->set_field_upload('LOGO','../assets/images/entreprises'); 
	$crud->set_field_upload('IMAGE','../assets/images/entreprises'); 	
	$crud->set_field_upload('GALERIE_1','../assets/images/entreprises'); 	
	$crud->set_field_upload('GALERIE_2','../assets/images/entreprises'); 	
	$crud->set_field_upload('GALERIE_3','../assets/images/entreprises'); 	
		
 	$crud->field_type('VALID','dropdown',
array('1' => 'Oui', '0' => 'Non'));


        $output = $crud->render();
 
        $this->_example_output($output);    
		}
    }
	
	
	
	
	
	
	
	
	
	
	/////////////////////////////////////////////////////////////
	////////////// Contenu /////////////////////////////////////////
	////////////////////////////////////////////////////////////
	
	public function content()
    {
		
		if (!$this->ion_auth->logged_in())
		{
			redirect('login');
		} else {
		
		
        $crud = new grocery_CRUD();
 	
	
	$crud->order_by('ID', 'DESC');
	
	
	
	
	
		
		$crud->required_fields('ID_SUBSECT','TITLE_1');
		
	$crud->fields('ID_SUBSECT','TITLE_1','TITLE_2','IMAGE','BODY');
	/// affichage apercu ////
	$crud->columns('ID_SUBSECT','TITLE_1','IMAGE');
	 
	 
	 $rub_elus=2;
	$rub_pub=29;	
	$rub_disp=33;
	$rub_bur=35;
	$rub_act=50;
	$crud->where('ID_SUBSECT !=', $rub_elus);	
	$crud->where('ID_SUBSECT !=', $rub_pub);	
	
	$crud->where('ID_SUBSECT !=', $rub_disp);
	$crud->where('ID_SUBSECT !=', $rub_bur);	
	$crud->where('ID_SUBSECT !=', $rub_act);
	$crud->set_subject('Contenu');
	
	
	
	
 
        $crud->set_table('content');
		
		$crud->display_as('ID_SUBSECT','Rubrique');
		$crud->display_as('ID_SECTION','Section');
		$crud->display_as('TITLE_1','Titre 1');
		$crud->display_as('TITLE_2','Titre 2');
		$crud->display_as('IMAGE','Image');
		$crud->display_as('BODY','Texte');
		
       $crud->unset_delete();
	    $crud->unset_add();
	   
	     

 	$crud->set_field_upload('IMAGE','../assets/content'); 
		
		 $crud->set_relation('ID_SUBSECT','sub_section','NAME');
		 $crud->set_relation('ID_SECTION','sections','NAME');
		
 
        $output = $crud->render();
 
        $this->_example_output($output);    
		}
    }
	
	
	
	
	/////////////////////////////////////////////////////////////
	////////////// Contenu /////////////////////////////////////////
	////////////////////////////////////////////////////////////
	
	public function content_ar()
    {
		
		if (!$this->ion_auth->logged_in())
		{
			redirect('login');
		} else {
		
		
        $crud = new grocery_CRUD();
 	
	
	$crud->order_by('ID', 'DESC');
	
	
	
	
	
		
		$crud->required_fields('ID_SUBSECT','TITLE_1');
		
	$crud->fields('ID_SUBSECT','TITLE_1','TITLE_2','IMAGE','BODY');
	/// affichage apercu ////
	$crud->columns('ID_SUBSECT','TITLE_1','IMAGE');
	 
	 
	 $rub_elus=2;
	$rub_pub=29;	
	$rub_disp=33;
	$rub_bur=35;
	$rub_act=50;
	$crud->where('ID_SUBSECT !=', $rub_elus);	
	$crud->where('ID_SUBSECT !=', $rub_pub);	
	
	$crud->where('ID_SUBSECT !=', $rub_disp);
	$crud->where('ID_SUBSECT !=', $rub_bur);	
	$crud->where('ID_SUBSECT !=', $rub_act);
	$crud->set_subject('Contenu Arabe');
	
	
	
	
 
        $crud->set_table('content_ar');
		
		$crud->display_as('ID_SUBSECT','Rubrique');
		$crud->display_as('ID_SECTION','Section');
		$crud->display_as('TITLE_1','Titre 1');
		$crud->display_as('TITLE_2','Titre 2');
		$crud->display_as('IMAGE','Image');
		$crud->display_as('BODY','Texte');
		
       $crud->unset_delete();
	    $crud->unset_add();
	   
	     

 	$crud->set_field_upload('IMAGE','../assets/content'); 
		
		 $crud->set_relation('ID_SUBSECT','sub_section','NAME');
		 $crud->set_relation('ID_SECTION','sections','NAME');
		
 
        $output = $crud->render();
 
        $this->_example_output($output);    
		}
    }
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	/////////////////////////////////////////////////////////////
	////////////// Histoire /////////////////////////////////////////
	////////////////////////////////////////////////////////////
	
	public function histoire()
    {
		
		if (!$this->ion_auth->logged_in())
		{
			redirect('login');
		} else {
		
		
        $crud = new grocery_CRUD();
 	$crud->set_subject('Date');
		
		
		$crud->required_fields('YEAR','TITLE','BODY');
		
	$crud->fields('YEAR','TITLE','BODY','MORE_TEXT','MORE_LINK');
	/// affichage apercu ////
	$crud->columns('YEAR','TITLE');
	 


 
        $crud->set_table('historique');
		
		$crud->display_as('YEAR','Année');
		$crud->display_as('TITLE','Titre');
		$crud->display_as('MORE_TEXT','Texte en savoir plus');
		$crud->display_as('MORE_LINK','Lien en savoir plus');
		
		$crud->display_as('BODY','Texte');
		
     
	   
	     

 	
		
	
		
 
        $output = $crud->render();
 
        $this->_example_output($output);    
		}
    }
	
		/////////////////////////////////////////////////////////////
	////////////// Gouvernance /////////////////////////////////////////
	////////////////////////////////////////////////////////////
	
	public function gouvernance()
    {
		
		if (!$this->ion_auth->logged_in())
		{
			redirect('login');
		} else {
		
		
        $crud = new grocery_CRUD();
 	$crud->set_subject('Membre');
		
		
		$crud->required_fields('NOM','FONC','BIO','IMAGE');
		
	$crud->fields('NOM','FONC','BIO','IMAGE');
	/// affichage apercu ////
	$crud->columns('NOM','FONC','IMAGE');
	 


 
        $crud->set_table('gouvernance');
		
		$crud->display_as('NOM','Nom');
		$crud->display_as('FONC','Fonction');
		$crud->display_as('BIO','Texte');
		$crud->display_as('IMAGE','Image');
		
      
	   
	     

 	$crud->set_field_upload('IMAGE','../assets/images/gouvernance'); 
		
		
		
 
        $output = $crud->render();
 
        $this->_example_output($output);    
		}
    }
	
	
	
	
	/////////////////////////////////////////////////////////////
	////////////// Equipe /////////////////////////////////////////
	////////////////////////////////////////////////////////////
	
	public function equipe()
    {
		
		if (!$this->ion_auth->logged_in())
		{
			redirect('login');
		} else {
		
		
        $crud = new grocery_CRUD();
 	$crud->set_subject('membre equipe');
		
		
		$crud->required_fields('NOM','FONC','EMAIL','IMAGE');
		
	$crud->fields('NOM','FONC','EMAIL','IMAGE');
	/// affichage apercu ////
	$crud->columns('NOM','FONC','IMAGE');
	 


 
        $crud->set_table('team');
		
		$crud->display_as('NOM','Nom');
		$crud->display_as('FONC','Fonction');
	//	$crud->display_as('BIO','Texte');
		$crud->display_as('EMAIL','Email');
		$crud->display_as('IMAGE','Image');
		
      
	   
	     

 	$crud->set_field_upload('IMAGE','../assets/images/equipe'); 
		
		
		
 
        $output = $crud->render();
 
        $this->_example_output($output);    
		}
    }
	
		/////////////////////////////////////////////////////////////
	////////////// Catégorie Publications /////////////////////////////////////////
	////////////////////////////////////////////////////////////
	
	public function cat_publications()
    {
		
		if (!$this->ion_auth->logged_in())
		{
			redirect('login');
		} else {
		
		
        $crud = new grocery_CRUD();
 	$crud->set_subject('Catégorie Publications');
		
		$crud->required_fields('TITLE');
		
	$crud->fields('TITLE');
	/// affichage apercu ////
	$crud->columns('TITLE');
	 

 
        $crud->set_table('cat_publications');
		
		
		$crud->display_as('TITLE','Nom');
		
       
	     

 
        $output = $crud->render();
 
        $this->_example_output($output);    
		}
    }
	
	
	
		/////////////////////////////////////////////////////////////
	////////////// Catégorie Presse /////////////////////////////////////////
	////////////////////////////////////////////////////////////
	
	public function cat_presse()
    {
		
		if (!$this->ion_auth->logged_in())
		{
			redirect('login');
		} else {
		
		
        $crud = new grocery_CRUD();
 	$crud->set_subject('Catégorie Presse');
		
		$crud->required_fields('TITLE');
		
	$crud->fields('TITLE');
	/// affichage apercu ////
	$crud->columns('TITLE');
	 

 
        $crud->set_table('cat_presse');
		
		
		$crud->display_as('TITLE','Nom');
		
       
	     

 
        $output = $crud->render();
 
        $this->_example_output($output);    
		}
    }
	
	/////////////////////////////////////////////////////////////
	////////////// Presse /////////////////////////////////////////
	////////////////////////////////////////////////////////////
	
	public function presse()
    {
		
		if (!$this->ion_auth->logged_in())
		{
			redirect('login');
		} else {
		
		
        $crud = new grocery_CRUD();
 	$crud->set_subject('Document Presse');
		
		
		$crud->required_fields('DATE','ID_CAT','INTRO','TITRE','IMAGE','FILE');
		
	$crud->fields('DATE','ID_CAT','TITRE','INTRO','IMAGE','FILE');
	/// affichage apercu ////
	$crud->columns('TITRE','IMAGE');
	 


 
        $crud->set_table('presse');
		
		$crud->display_as('DATE','Date');
		$crud->display_as('TITRE','Titre');
		$crud->display_as('INTRO','Intro');
		$crud->display_as('ID_CAT','Catégorie');
		$crud->display_as('FILE','Fichier');
		$crud->display_as('IMAGE','Image');
		
      
	   
	     

 	$crud->set_field_upload('IMAGE','../assets/presse'); 
	$crud->set_field_upload('FILE','../assets/presse'); 	
		
		
 
        $output = $crud->render();
 
        $this->_example_output($output);    
		}
    }
	
	
	
	
	
	
	
	/////////////////////////////////////////////////////////////
	////////////// Recrutement /////////////////////////////////////////
	////////////////////////////////////////////////////////////
	
	public function recrutement()
    {
		
		if (!$this->ion_auth->logged_in())
		{
			redirect('login');
		} else {
		
		
        $crud = new grocery_CRUD();
 	$crud->set_subject('Offre emploi');
		
		
		$crud->required_fields('DATE','TITRE','BODY','VALID');
		
	$crud->fields('DATE','TITRE','BODY','VALID');
	/// affichage apercu ////
	$crud->columns('DATE','TITRE','VALID');
	 


 
        $crud->set_table('recrutement');
		
		$crud->display_as('DATE','Date');
		$crud->display_as('TITRE','Titre');
		$crud->display_as('BODY','Descriptif');
		$crud->display_as('VALID','Visible');
		
		$crud->field_type('VALID','dropdown',
array('1' => 'Oui', '0' => 'Non'));
      
	   
	     
	
		
		
 
        $output = $crud->render();
 
        $this->_example_output($output);    
		}
    }
	
	
	
	
		
	/////////////////////////////////////////////////////////////
	////////////// CHANGEMENT VIDEO AMBASSADEUR /////////////////////////////////////////
	////////////////////////////////////////////////////////////
	
	public function change_vid()
    {
		
		if (!$this->ion_auth->logged_in())
		{
			redirect('login');
		} else {
		
		
        $crud = new grocery_CRUD();
 	$crud->set_subject('Changement Video');
		
		
		$crud->required_fields('NOM_AMB','PRENOM_AMB','VIDEO');
		
	$crud->fields('VIDEO');
	/// affichage apercu ////
	$crud->columns('NOM_AMB','PRENOM_AMB','VIDEO');
	 


 
        $crud->set_table('ambassadors');
		
	$crud->display_as('NOM_AMB','Nom');
	$crud->display_as('PRENOM_AMB','Prénom');
   	$crud->display_as('VIDEO','Vidéo');
	   
	 
	 $crud->unset_add();
	  $crud->unset_delete();
		
 
        $output = $crud->render();
 
        $this->_example_output($output);    
		}
    }
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	//////////////////////// PH75//////////////////////////////////////////////////
	
	/////////////////////////////////////////////////////////////
	////////////// Validation ambassadeur /////////////////////////////////////////
	////////////////////////////////////////////////////////////
	
	public function amb_nvalid()
    {
		
		if (!$this->ion_auth->logged_in())
		{
			redirect('login');
		} else {
		
		
        $crud = new grocery_CRUD();
 	$crud->set_subject('Ambassadeur');
		//$crud->where('VALIDE','0');

		
		$crud->required_fields('NOM_AMB','PRENOM_AMB','EMAIL_AMB','PWD','TEL_AMB','VILLE_AMB','ADRESSE_AMB','DATE_NAISSANCE','IMAGE_AMB','NOM_ECOLE','CAMPAGNE','VALIDE','CODE','DATE_DEMANDE');
		
	$crud->fields('NOM_AMB','PRENOM_AMB','EMAIL_AMB','PWD','TEL_AMB','VILLE_AMB','ADRESSE_AMB','DATE_NAISSANCE','IMAGE_AMB','NOM_ECOLE','CAMPAGNE','VIDEO','VALIDE','CODE','DATE_DEMANDE');
	/// affichage apercu ////
	$crud->columns('NOM_AMB','PRENOM_AMB','DATE_DEMANDE','IMAGE_AMB','MONTANT','VALIDE');
	 

 $crud->unset_add();
 		//$crud->unset_edit_fields('VIDEO');

        $crud->set_table('ambassadors');
		
		$crud->display_as('NOM_AMB','Nom');
		$crud->display_as('PRENOM_AMB','Prénom');
		$crud->display_as('EMAIL_AMB','Email');
		$crud->display_as('PWD','Password');
		$crud->display_as('TEL_AMB','Tél');
		$crud->display_as('VILLE_AMB','Ville');
		$crud->display_as('ADRESSE_AMB','Adresse');
		$crud->display_as('DATE_NAISSANCE','Date Naissance');
		$crud->display_as('IMAGE_AMB','Photo');
		$crud->display_as('NOM_ECOLE','Nom Ecole');
		$crud->display_as('CAMPAGNE','Descriptif Campagne');
		$crud->display_as('VIDEO','Vidéo');
		$crud->display_as('ID_VID','ID Vidéo');
		$crud->display_as('VALIDE','Validation');
		//$crud->display_as('ACTIF','Activé');
		$crud->display_as('CODE','Code');
		$crud->display_as('DATE_DEMANDE','Date demande');
	
	
    
    
    
    
    
    

		$crud->field_type('VALIDE','dropdown',
array('1' => 'Oui', '0' => 'Non'));
      
	   
	   /*	$crud->field_type('ACTIF','dropdown',
array('1' => 'Oui', '0' => 'Non'));*/
	   
	   	$crud->set_field_upload('IMAGE_AMB','../assets/ambassadors');    
	
		$crud->callback_field('VIDEO',array($this,'video_embed'));





		$crud->callback_after_update(array($this, 'email_user'));


	

    
 
        $output = $crud->render();
 
        $this->_example_output($output);    
		}
		
		
	
		
    }
	
	function video_embed($value = '', $primary_key = null)
{
return '<iframe src="https://www.youtube.com/embed/'.$value.'?rel=0&amp;controls=0&amp;showinfo=0?ecver=2" width="480" height="360" frameborder="0" alowfullscreen></iframe>';
}
	

	
	/////////emailing /////////////	
	
	  function email_user($post_array, $primary_key)
    {
       	$nom=$post_array['NOM_AMB'];
	$prenom=$post_array['PRENOM_AMB'];
	$adresse=$post_array['EMAIL_AMB'];
	
	$subject="Validation de votre compte ambassadeur";
	$body='<img src="http://www.fondationzakoura.org/assets/images/logo.png">';
	$body.='<br/><br/>Bonjour <strong>'.$nom.'</strong><br/><br/>';
	$body.='Nous avons le plaisir de vous informer que votre compte ambassadeur a été validé par la Fondation zakoura.<br/>





Vous pouvez désormais accèder à votre espace membre pour effectuer votre premier don.<br/>

Accès ambassadeur 

<a href="http://www.fondationzakoura.org/preschool/membres">http://www.fondationzakoura.org/preschool/membres</a>
<br/><br/><br/>
Login :'. $post_array['EMAIL_AMB'].'
<br/><br/>
Mot de passe : '. $post_array['PWD'].'<br/><br/>
Nous sommes ravis de vous compter parmi nos ambassadeurs pour nous aider à réaliser les projets les plus ambitieux.
<br/>
<br/>
L’équipe de la Fondation Zakoura<br/><br/>
Merci par avance

';
	$body.='<br/><br/>';
	$body.='<a href="http://www.fondationzakoura.org">www.fondationzakoura.org</a><br/>';
	
//$this->load->helper(array('form', 'url'));
	
		$config['wordwrap'] = TRUE;
$config['mailtype'] = 'html';
$this->email->initialize($config);

	
		$this->email->to($adresse);
     $this->email->from('contact@fondationzakoura.org', 'Fondation Zakoura');

        $this->email->subject($subject);
        $this->email->message($body);
		
		
		if ($post_array['VALIDE']==1) {
		
        $this->email->send();
		}
    }




////////////////////////////////// sending confirmation email /////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////////////////////////////////


		   
//////////////////////////////////EMAIL ALERTE/////////////////////////////////////////////////////////
    
    ///////// end emailing ////////////
    

	
	/////////////////////////////////////////////////////////////
	////////////// Dons par ambassadeur /////////////////////////////////////////
	////////////////////////////////////////////////////////////
	
	public function amb_dons()
    {
		
		if (!$this->ion_auth->logged_in())
		{
			redirect('login');
		} else {
		
		
        $crud = new grocery_CRUD();
 	$crud->set_subject('Don pour Ambassadeur');
		$crud->where('VALID','1');
	$crud->where('TYPE','75');
		
		
		
	$crud->fields('NOM','PRENOM','CONTRIB_FOR','EMAIL','TEL','VILLE','ADRESSE','PAYS','MONTANT','DEVISE','DATE_DON');
	/// affichage apercu ////
	$crud->columns('NOM','PRENOM','MONTANT','DEVISE','CONTRIB_FOR','EMAIL','TEL','VILLE','ADRESSE','PAYS','DATE_DON');
	 

 $crud->unset_add();
 
        $crud->set_table('amb_dons');
		
		$crud->display_as('CONTRIB_FOR','Ambassadeur');
		 $crud->set_relation('CONTRIB_FOR','ambassadors','NOM_AMB');
		
		
		$crud->field_type('DEVISE','dropdown',
array('1' => 'Dh', '2' => '€'));
      
	   
	   
	
	

		
 
        $output = $crud->render();
 
        $this->_example_output($output);    
		}
		
		
		
		
    }
	
	
		/////////////////////////////////////////////////////////////
	////////////// Dons par ambassadeur non validées /////////////////////////////////////////
	////////////////////////////////////////////////////////////
	
	public function amb_dons_nv()
    {
		
		if (!$this->ion_auth->logged_in())
		{
			redirect('login');
		} else {
		
		
        $crud = new grocery_CRUD();
 	$crud->set_subject('Don pour Ambassadeur');
		$crud->where('VALID','0');
	$crud->where('TYPE','75');
		
		
		
	$crud->fields('NOM','PRENOM','CONTRIB_FOR','EMAIL','MONTANT','DEVISE','DATE_DON','VALID');
	/// affichage apercu ////
	$crud->columns('NOM','PRENOM','MONTANT','DEVISE','CONTRIB_FOR','EMAIL','DATE_DON','VALID');
	 

 $crud->unset_add();
// $crud->unset_delete();
 
        $crud->set_table('amb_dons');
		
		$crud->display_as('CONTRIB_FOR','Ambassadeur');
		 $crud->set_relation('CONTRIB_FOR','ambassadors','NOM_AMB');
		
		
		$crud->field_type('DEVISE','dropdown',
array('1' => 'Dh', '2' => '€'));
      
	   
	$crud->field_type('VALID','dropdown',
array('0' => 'Non', '1' => 'Oui'));	   
	
	

		
 
        $output = $crud->render();
 
        $this->_example_output($output);    
		}
		
		
		
		
    }
	
	
	/////////////////////// DONS FER//////////////////////////////////////////////////////////////////////
	/////////////////////////////////////////////////////////////////////////////////////////////
	
	
	
		
	
	public function don_fer()
    {
		
		if (!$this->ion_auth->logged_in())
		{
			redirect('login');
		} else {
		
		
        $crud = new grocery_CRUD();
 	$crud->set_subject('Dons FER');
		$crud->where('VALID','0');
	$crud->where('TYPE','26');
		
		
		
	$crud->fields('NOM','PRENOM','CONTRIB_FOR','EMAIL','MONTANT','DEVISE','DATE_DON','VALID');
	/// affichage apercu ////
	$crud->columns('NOM','PRENOM','MONTANT','DEVISE','EMAIL','DATE_DON','VALID');
	 

 $crud->unset_add();
// $crud->unset_delete();
 
        $crud->set_table('dons');
		
		$crud->display_as('NOM','ENTREPRISE');
			$crud->display_as('PRENOM','CONTACT');
		 $crud->set_relation('CONTRIB_FOR','ambassadors','NOM_AMB');
		
		
		$crud->field_type('DEVISE','dropdown',
array('1' => 'Dh', '2' => '€'));
      
	   
	$crud->field_type('VALID','dropdown',
array('0' => 'Non', '1' => 'Oui'));	   
	
	

		
 
        $output = $crud->render();
 
        $this->_example_output($output);    
		}
		
		
		
		
    }
	
	
	
	
	//////////////////////////////////////////////DON FER/////////////////////////////////////////////
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	/////////////////////////////////////////////////////////////
	////////////// Dons /////////////////////////////////////////
	////////////////////////////////////////////////////////////
	
	public function dons()
    {
		
		if (!$this->ion_auth->logged_in())
		{
			redirect('login');
		} else {
		
		
        $crud = new grocery_CRUD();
 	$crud->set_subject('Don pour Ambassadeur');
		//$crud->where('VALID','1');
		$crud->where('VALID=1 AND TYPE<75');
		
		
		
	$crud->fields('NOM','PRENOM','CONTRIB_FOR','EMAIL','TEL','VILLE','ADRESSE','PAYS','MONTANT','DEVISE','DATE_DON');
	/// affichage apercu ////
	$crud->columns('NOM','PRENOM','CONTRIB_FOR','EMAIL','TEL','VILLE','ADRESSE','PAYS','MONTANT','DEVISE','DATE_DON');
	 
 $crud->unset_edit();
 $crud->unset_add();
 
        $crud->set_table('dons');
		
		$crud->display_as('CONTRIB_FOR','Don Pour');
		$crud->display_as('DATE_DON','DATE DON');
		 $crud->set_relation('CONTRIB_FOR','don_contrib','TITLE');
		
		
		$crud->field_type('DEVISE','dropdown',
array('1' => 'Dh', '2' => '€'));
      
	   
	   
	
	

		
 
        $output = $crud->render();
 
        $this->_example_output($output);    
		}
		
		
		
		
    }
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	

}